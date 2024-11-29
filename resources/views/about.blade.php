@extends('layout')
@section('title', 'About')
@section('style')

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .card {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 60px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card h2 {
        margin-top: 0;
        font-size: 24px;
        color: #343a40;
        text-align: center;
    }
    .card p {
        font-size: 16px;
        color: #6c757d;
    }
@endsection



@section('content')
<div class="container">
    <div class="card">
        <h2>About</h2>
        <p>Pascalia Shop is the best online shop in Asia, Thanks all for support</p>
    </div>
</div>

@endsection
