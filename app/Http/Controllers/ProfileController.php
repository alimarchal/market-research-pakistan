<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('profile.edit');
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

        return redirect()->route('index')->with('success', 'Password updated successfully!!');

    }
}
