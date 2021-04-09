<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KMIController extends Controller
{
    public function index(){
        
        return view('kmiCalc');
    }

    public function calculate(Request $request){
        // oldschoolas
        $number1 = $_POST['number1'];
        // kaip darome laravelyje
        $number2 = $request->input('number2');
        
        $result = round($number1/($number2*$number2), 2);
                
        return view('kmiResults', compact('result'));
          

        
    }
}
