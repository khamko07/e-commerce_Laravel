@extends('layout')
@section('title', 'Product')
@section('content')
<div class="container">
    <h2>Product</h2>
    <div class="card">
        @for ($i = 1; $i <= 10; $i++)
        <div class="product">
            <img src="https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/99486859-0ff3-46b4-949b-2d16af2ad421/custom-nike-dunk-high-by-you-shoes.png"
                alt="shoes">
            <h3>Nike Dunk High</h3>
            <p>25.0000 Đ</p>
            <p>Detail: Lorem ipsum dolor sit amet.</p>
            <button><a href="/login">Add to cart</a></button>

        </div>
        @endfor
    </div>
</div>
<style>
    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    .card {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
    }

    .card h2 {
        grid-column: span 5;
        margin-top: 0;
        font-size: 24px;
        color: #343a40;
        text-align: center;
    }

    .product {
        background-color: white;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        text-align: center;
        padding: 20px;
    }

    .product img {
        width: 100%;
        border-radius: 5px;
    }

    .product h3 {
        margin: 10px 0;
        color: #343a40;
    }

    .product p {
        color: #6c757d;
    }

    .product button {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    .product button:hover {
        background-color: #2980b9;
    }
</style>
@endsection
