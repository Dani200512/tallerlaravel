<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create4(){

        return view('Company');

    }

    public function store4(Request $request){
        $Company = new Company();
        $Company->activity=$request->activity;
        $Company->save();

        return $Company;

    }
}
