@extends('layout')
@section('title', 'Login')
@section('content')
<div class="container">
    <h2>Login</h2>
    <form action="/login" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required placeholder="Enter username...">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter password...">
        <button type="submit">Login</button>
        <div class="switch-to-register">
            <p>Don't have an account? <a href="/register">Register</a></p>
        </div>
        <div class="forget-password">
            <p><a href="">Forget Password?</a></p>
        </div>
        <script>
            document.querySelector('.forget-password a').addEventListener('click', function(event) {
                event.preventDefault();
                alert('Please contact admin to reset your password');
            });
        </script>

    </form>
</div>
@endsection
@section('style')
form {
margin: 0 auto;
width: 50%;
}
input {
width: 100%;
padding: 10px;
margin: 5px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}
button {
background-color: #3498db;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
}
button:hover {
opacity: 0.8;
}
button:active {
background-color: #3498db;
}
label {
font-weight: bold;
}
h2 {
text-align: center;
}
.forget-password {
text-align: center;
margin-top: 10px;
}
.forget-password a {
color: #3498db;
text-decoration: none;
}
.forget-password a:hover {
text-decoration: underline;
}
@endsection
