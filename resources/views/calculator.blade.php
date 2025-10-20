<!DOCTYPE html>
<html>
<head>
    <title>Laravel Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, select, button {
            padding: 10px;
            margin: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            background: #4CAF50;
            color: white;
            cursor: pointer;
        }
        h2 { text-align: center; }
    </style>
</head>
<body>
<div class="calculator">
    <h2>Laravel Calculator</h2>
    <form action="{{ route('calculator.calculate') }}" method="POST">
        @csrf
        <input type="number" name="num1" placeholder="Enter first number" required value="{{ $num1 ?? '' }}">
        <select name="operation" required>
            <option value="add" {{ (isset($operation) && $operation == 'add') ? 'selected' : '' }}>+</option>
            <option value="subtract" {{ (isset($operation) && $operation == 'subtract') ? 'selected' : '' }}>−</option>
            <option value="multiply" {{ (isset($operation) && $operation == 'multiply') ? 'selected' : '' }}>×</option>
            <option value="divide" {{ (isset($operation) && $operation == 'divide') ? 'selected' : '' }}>÷</option>
            <option value="modulus" {{ (isset($operation) && $operation == 'modulus') ? 'selected' : '' }}>%</option>
            <option value="power" {{ (isset($operation) && $operation == 'power') ? 'selected' : '' }}>xʸ</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required value="{{ $num2 ?? '' }}">
        <button type="submit">Calculate</button>
    </form>

    @if(isset($result))
        <h3>Result: {{ $result }}</h3>
    @endif
</div>
</body>
</html>
