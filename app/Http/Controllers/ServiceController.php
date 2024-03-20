<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create5(){

        return view('Service');

    }

    public function store5(Request $request){
        $Service = new Service();
        $Service->activity=$request->activity;
        $Service->save();

        return $Service;

    }
}
