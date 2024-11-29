@extends('layout')
@section('title', 'Contact')
@section('style')
.container {
padding: 20px;
}

.card {
background-color: #f9f9f9;
border: 1px solid #ddd;
border-radius: 5px;
padding: 100px;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);


}

h2 {
font-size: 24px;
margin-bottom: 15px;
text-align: center;
}

p {
font-size: 16px;
margin: 5px 0;
}

b {
font-weight: bold;
}
@endsection
@section('content')
<div class="container">
    <div class="card">
        <h2>Contact</h2>
        <p><b>Name company: </b>{{$nameCompany}}</p>
        <p><b>Name CEO: </b>{{$nameCeo}}</p>
        <p><b>Address: </b>{{$address}}</p>
        <p><b>Phone: </b>{{$phone}}</p>
        <p><b>Email: </b>{{$email}}</p>
    </div>
</div>

@endsection
