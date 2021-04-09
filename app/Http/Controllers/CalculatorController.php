<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(){
        // nukreipia i views/calculator.blade.php
       return view('calculator');
    }

    public function calculate(Request $request){
        // oldschoolas
        $number1 = $_POST['number1'];
        // kaip darome laravelyje
        $number2 = $request->input('number2');
        $result = $number1 + $number2;

        return view('results', compact('result'));
    }
}
