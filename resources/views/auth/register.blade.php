@extends('layouts.app')

@section('title','register')

@section('content')

<div class="container w-25 border p-4 mt-4">
    <form class="mt-4" method="POST" action="{{ route('register.store')}}">   
    @csrf

        <h1 class="text-3x1 text-center font bold" >Registrarse </h1> 
   
        <label for="exampleInputNombre" class="form-label">Nombre </label>
        <input type="text" class="form-control" id="name" name="name" >
  
        <label for="exampleInputEmail1" class="form-label">Email </label>
        <input type="email" class="form-control" id="email" name="email" >
 
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">


        <div class="mb-3 ">
        <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="password_confirm" name="password_confirm">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>

@endsection