@extends('menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/App.views.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@section('content')

    <form action="{{route('app.access')}}" id="auth" method="POST">
        @csrf
        <h2>Se connecter</h2>
 <div class="inputBox">
     <input type="email" name="email" required>
    <span>Email</span>
     <i></i>
</div>
 <div class="inputBox">
     <input type="password" name="password" required>
    <span>Entrer Password</span>
     <i></i>
</div>
@if (session('Error'))
    <span class="text-danger mt-2">
        {{ session('Error') }}
    </span>
@endif
<input type="submit" value="Login">
   
 <div class="link">
     <a href="#">Mot de passe perdu ? </a>
</div>

    </form>
@endsection
