<?php

namespace App\Http\Controllers;
use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function create3(){

        return view('Body');

    }

    public function store3(Request $request){
        $Body = new Body();
        $Body->name=$request->name;
        $Body->ubication=$request->ubication;
        $Body->save();

        return $Body;

    }
}
