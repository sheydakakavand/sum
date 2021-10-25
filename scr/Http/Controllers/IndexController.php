<?php

namespace First\Sum\Http\Controllers;

use App\Http\Controllers\Controller;
use First\Sum\Models\Number;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function showForm()
    {
        return view('sum::all');
    }

    public function validateForm(Request $request)
    {
        $validated = $request->validate([
            'number1' => 'required',
            'number2' => 'required',
        ]);
        $number1=$request->get('number1');
        $number2=$request->get('number2');
        $result=$number1+$number2;

        $sum=new Number();
        $sum->setNumber1($number1);
        $sum->setNumber2($number2);
        $sum->setTotal($result);
        $sum->save();

        return $result;

    }

    public function index(Request $request)
    {


        $number1=$request->get('number1');
//        $name='sheyda';
//        return view('sum::all');

//        $numberOne = $request->input('numberOne');
//        $numberTwo = $request->input('numberTwo');
//
//        $calculated = $numberOne + $numberTwo;
//
//        dd($calculated);

//        return redirect('/')->withInput();
    }
}
