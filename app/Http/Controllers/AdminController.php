<?php

namespace App\Http\Controllers;

use App\Models\Query;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        $queries = Query::orderByDesc('created_at')->get();
        $statuses = DB::table('statuses')->get();
        return view('admin.index', compact('queries', 'statuses'));
    }

    public function users()
    {
        $users = User::orderByDesc('created_at')->get()->except(['id' => \auth()->id()]);
        return view('admin.users', compact('users'));
    }

    public function profile(): View
    {
        return view('admin.profile.edit');
    }

    public function update(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(),[
            'password' => ['required_with:current_password', 'confirmed',],
            'current_password' => ['required_with:password',],
        ],[
            'password.required_with' => 'New password field is required when current password field is entered',
            'current_password.required_with' => 'Current password field is required when new password field is entered',
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->password != ''){
            $validator = Validator::make($request->all(),[
                'password' => ['min:8'],
            ]);
            if ($validator->fails())
            {
                return redirect()->back()->withErrors($validator->errors());
            }
        }
        if ($request->current_password != ''){
            if (!(Hash::check($request->get('current_password'), Auth::user()->getAuthPassword())))
            {
                return redirect()->back()->with('error', 'Current password not matched');
            }
        }
        if ($request->password != ''){
            if (strcmp($request->get('current_password'),$request->get('password'))==0)
            {
                return redirect()->back()->with('error', 'Your current password cannot be same to new password');

            }
        }

        if ($request->password != ''){
            User::where('id', auth()->id())->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->route('admin.index')->with('success', 'Password updated successfully!!');

    }

    public function status_update(Request $request)
    {
        $query = Query::firstWhere('id', $request->id);

        if (!$query){
            return response()->json(['status' => 'error']);
        }

        $query->update(['status' => $request->status]);
        return response()->json(['status' => 'success']);
    }

    public function user_details($user_id)
    {
        $user = User::firstWhere('id', $user_id);

        return view('admin.user_details', compact('user'));
    }
}
