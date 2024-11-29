<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Noto Serif", serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }


        .nav {
            background-color: #444;
            overflow: hidden;
        }

        .nav .form {
            float: right;
        }

        .nav a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .nav a:hover {
            background-color: #ddd;
            color: #000;
        }

        .container {
            padding: 2px;
            background-color: #f4f4f4;
            margin-top: 10px;
            margin-bottom: 50px;
            margin-left: 10px;
            margin-right: 10px;

        }

        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        @yield('style')
    </style>
</head>

<body>
    <div class="header">
        <h1>Welcome to Pascalia Shop</h1>
        <p>The best online shop in Laos</p>
    </div>
    <div class="nav">
        <a href="/">Home</a>
        <a href="/product">Products</a>
        <a href="/category">Category</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
        <div class="form">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
            <a href="/cart">Cart</a>
            <a href="/feedback">Feedback</a>
        </div>

    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        <p>&copy; 2025 Pascalia Shop</p>
    </div>

</body>

</html>
