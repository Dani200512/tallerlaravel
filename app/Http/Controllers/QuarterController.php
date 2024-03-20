<?php

namespace App\Http\Controllers;

use App\Models\Quarter;
use Illuminate\Http\Request;

class QuarterController extends Controller
{
    public function create2(){

        return view('Quarter');

    }

    public function store2(Request $request){
        $Quarter = new Quarter();
        $Quarter->name=$request->name;
        $Quarter->ubication=$request->ubication;
        $Quarter->save();

        return $Quarter;

    }
}
