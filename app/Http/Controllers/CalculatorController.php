<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');
        $result = null;

        // Function-based calculator logic
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = $num2 != 0 ? $num1 / $num2 : 'Cannot divide by zero';
                break;
            case 'modulus':
                $result = $num1 % $num2;
                break;
            case 'power':
                $result = pow($num1, $num2);
                break;
            default:
                $result = 'Invalid operation';
        }

        return view('calculator', compact('num1', 'num2', 'operation', 'result'));
    }
}
