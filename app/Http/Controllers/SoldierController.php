<?php

namespace App\Http\Controllers;
use App\Models\Soldier;
use Illuminate\Http\Request;

class SoldierController extends Controller
{
    public function create(){
       
        return view('Soldier');

    }

    public function store(Request $request){

        $Soldier = new Soldier();
        $Soldier->name=$request->name;
        $Soldier->lastname=$request->lastname;
        $Soldier->degree=$request->degree;
        $Soldier->save();

        return $Soldier;

    }
}

