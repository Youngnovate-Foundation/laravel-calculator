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
        // Accept either 'operation' or 'operator' from different versions of the view
        $operation = $request->input('operation', $request->input('operator', null));

        // accept numbers as floats if needed (step="any" in forms)
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        // normalize numeric inputs (allow empty second number)
        $a = is_numeric($num1) ? (float)$num1 : 0;
        $b = is_numeric($num2) ? (float)$num2 : 0;

        $result = null;

        // Normalize operation so we can accept many variants
        $op = strtolower(trim((string)$operation));

        switch ($op) {
            // word-based operations
            case 'add':
            case 'addition':
            case '+':
                $result = $a + $b;
                break;

            case 'subtract':
            case 'subtraction':
            case 'minus':
            case '-':
                $result = $a - $b;
                break;

            case 'multiply':
            case 'multiplication':
            case 'times':
            case 'x':
            case '*':
                $result = $a * $b;
                break;

            case 'divide':
            case 'division':
            case '/':
                $result = ($b != 0) ? ($a / $b) : 'Cannot divide by zero';
                break;

            case 'modulus':
            case 'mod':
            case '%':
                // avoid division by zero error when modulus by zero
                $result = ($b != 0) ? ($a % $b) : 'Cannot modulus by zero';
                break;

            case 'power':
            case 'exponent':
            case '^':
            case '**':
                $result = pow($a, $b);
                break;

            case 'sqrt':
            case 'squareroot':
            case 'square root':
            case '√':
                // use only first number for sqrt
                $result = ($a >= 0) ? sqrt($a) : 'Cannot take square root of negative number';
                break;

            default:
                $result = 'Invalid operation';
        }

        // Return same view and values so form retains inputs
        return view('calculator', [
            'num1' => $num1,
            'num2' => $num2,
            'operation' => $operation,
            'result' => $result,
        ]);
    }
}
