<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;
use Illuminate\Support\Facades\Mail;
use App\Mail\QueryToInfo;
use App\Mail\QueryToUser;

class FormController extends Controller
{
    public function index()
    {
        $queries = Query::where('user_id', auth()->id())->orderByDesc('created_at')->get([
            'provinces', 'cities', 'industry', 'type', 'details', 'status']);

        if (!empty($queries)) {
            return response()->json($queries);
        }
        else {
            return response()->json(['error' => 'Not Found!'], 404);
        }
    }

    public function store(Request $request){
        $request->validate([
            'provinces' => 'required',
            'cities' => 'required',
            'details' => 'required',
        ], [
            'details.required' => 'Please provide us more details'
        ]);

        $data = [
            'user_id' => auth()->id(),
            'provinces' => implode(',', $request->provinces),
            'cities' => implode(',', $request->cities),
            'details' => $request->details,
            /* For keeping a record whether user entered the query from Mobile or Web. 1 => mobile & 0 (default) => Web */
            'mobile_query' => 1,
        ];

        // if($request->industry_dropdown != 'other'){
        //     $data['industry']  = $request->industry_dropdown;
        // }
        // else{
            $data['industry']  = $request->industry;
        // }

        // if($request->type_dropdown != 'other'){
        //     $data['type']  = $request->type_dropdown;
        // }
        // else{
            $data['type']  = $request->type;
        // }

        $query = Query::create($data);

        Mail::to('info@marketresearchpakistan.com')->send(new QueryToInfo(auth()->user(), $query));
        Mail::to(auth()->user()->email)->send(new QueryToUser(auth()->user(), $query));

        return response()->json($query, 201);
    }
}
