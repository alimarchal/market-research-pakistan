<?php

namespace App\Http\Controllers;

use App\Mail\QueryToInfo;
use App\Mail\QueryToUser;
use App\Models\City;
use App\Models\Province;
use App\Models\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index(){
        if (auth()->user()->is_admin == 1)
        {
            return redirect()->route('admin.index');
        }

        $queries = Query::where('user_id', auth()->id())->orderByDesc('created_at')->get();
        return view('form.index', compact('queries'));
    }

    public function create(){
        $provinces = Province::all();
        $cities = City::all();

        return view('form.create', compact('provinces', 'cities'));
    }

    public function save(Request $request){
        Validator::make($request->all(), [
            'provinces' => 'required',
            'cities' => 'required',
            'details' => 'required',
        ], [
            'details.required' => 'Please provide us more details'
        ])->validate();

        $data = [
            'user_id' => auth()->id(),
            'provinces' => implode(',', $request->provinces),
            'cities' => implode(',', $request->cities),
            'details' => $request->details,
        ];

        if($request->industry_dropdown != 'other'){
            $data['industry']  = $request->industry_dropdown;
        }
        else{
            $data['industry']  = $request->industry;
        }

        if($request->type_dropdown != 'other'){
            $data['type']  = $request->type_dropdown;
        }
        else{
            $data['type']  = $request->type;
        }

        $query = Query::create($data);

        Mail::to('info@marketresearchpakistan.com')->send(new QueryToInfo(auth()->user(), $query));
        Mail::to(auth()->user()->email)->send(new QueryToUser(auth()->user(), $query));

        return redirect()->route('index')->with('success', 'Our representative will get in touch with you.');
    }

}
