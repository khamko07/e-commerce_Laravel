@extends('layout')
@section('title', 'Feedback')
@section('content')
<h1>Feedback</h1>
<form action="/feedback" method="post">
    <label for="fullname">Fullname:</label>
    <input type="text" name="fullname" id="fullname" placeholder="Enter you name...">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Enter you email...">
    <label for="message">Message:</label>
    <textarea name="message" id="message"></textarea>
    <button type="submit">Send</button>
</form>
@endsection
@section('style')
form {
    margin: 0 auto;
    width: 50%;
}
input, textarea {
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
h1 {
    text-align: center;
}


@endsection
