<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

🧮 Laravel Functional Calculator

A simple yet functional calculator web application built with Laravel, designed as Assignment 1 for learning the fundamentals of functions in PHP and Laravel routing, controllers, and Blade templates.

**Author:** Boateng Mavis Akua  
**Course:** PHP & Laravel – Assignment 2  
**Institution:** University of Mines and Technology (UMaT)  
**Date:** October 2025 


🚀 Overview

This project demonstrates how to use Laravel’s MVC structure to create a dynamic calculator that performs basic and extended arithmetic operations.
It focuses on functions, form handling, and server-side logic within Laravel.

⚙️ Features

Addition ➕

Subtraction ➖

Multiplication ✖️

Division ➗ (with divide-by-zero check)

Modulus (%)

Power (^)

Square Root (√)

🧩 How It Works

User inputs two numbers (or one for square root).

Selects an operation.

Laravel controller handles the logic using PHP functions.

Result is displayed dynamically on the same page.

📂 Project Structure
app/
 └── Http/
     └── Controllers/
         └── CalculatorController.php
resources/
 └── views/
     └── calculator.blade.php
routes/
 └── web.php

🧰 Tech Stack

Framework: Laravel 12

Language: PHP 8

Frontend: Blade Templates + Bootstrap

Server: PHP Development Server (php artisan serve)

🧪 How to Run Locally
# Clone the repository
git clone https://github.com/Youngnovate-Foundation/laravel-calculator.git

# Move into the project directory
cd laravel-calculator

# Install dependencies
composer install

# Run the application
php artisan serve


Then open http://127.0.0.1:8000/calculator
 in your browser. 

🪪 License

This project is open-source under the MIT License.