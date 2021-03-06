<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase2;

class Phase2Controller extends Controller
{
    //
    public function display(){
        return view('implementing_phase2');
    }

    public function store(Request $request){
        Phase2::create($request->all());
        return redirect()->route('implementing_phase2');
    }
}
