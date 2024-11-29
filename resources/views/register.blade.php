@extends('layout')
@section('title', 'Register')
@section('content')
<div class="container">
    <h2>Register</h2>
    <form action="/register" method="post">
        <label for="fullname">Fullname:</label>
        <input type="text" id="fullname" name="fullname" required placeholder="Enter fullname...">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required placeholder="Enter username...">
        <label for="dob">Date of birth:</label>
        <input type="date" id="dob" name="dob" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter email...">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter password...">
        <button type="submit">Register</button>
        <div class="switch-to-login">
            <p>Already have an account? <a href="/login">Login</a></p>
        </div>
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
background-color:#3498db;
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
background-color: #45a049;
}
label {
font-weight: bold;
}
h2 {
text-align: center;
}


@endsection
