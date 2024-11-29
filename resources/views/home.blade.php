@extends('layout')
@section('title', 'Home')
@section('content')

    <div class="container">
        <h2>Welcome to Pascalia Asia</h2>
        <p>This is the best Website in Asia Shop</p>
        <a href="/product">
            <button>Shop Now</button>
        </a>
    </div>
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
            background-color: #ffffff
        }
        h2 {
            color: #2c3e50;
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            color: #7f8c8d;
            font-size: 18px;
            margin-bottom: 30px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
@endsection
