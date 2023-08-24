@extends('adminMenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
@section('tite','hello')
@section('content')
<div class="d-flex justify-content-center align-items-center mt-5">
    <div class="card bg-dark text-light rounded w-50">
        <div class="card-body text-center">
            <h4>
                <i class="bi bi-brightness-low"></i>
                <span class="text-capitalize text-info">Bienvenue ! {{ session('login') }}&nbsp;&nbsp; <i
                        class="fas fa-smile" style="color: #e7eb00;"></i></span>
            </h4>
            <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100" style="height: 1px">
                <div class="progress-bar" style="width: 100%"></div>
            </div>
        </div>
    </div>
</div>
@endsection

 