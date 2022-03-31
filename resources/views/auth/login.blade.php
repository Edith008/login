@extends('layouts.app')

@section('title','login')

@section('content')

<div class="container w-25 border p-4 mt-4">
    <form class="mt-4" method="POST" action="{{ route('login.store')}}">
    @csrf

        <h1 class="text-3x1 text-center font bold" >iniciar sesion </h1>  

        <label for="exampleInputEmail1" class="form-label">Email </label>
        <input type="email" class="form-control" id="email" name="email" >

        <div class="mb-3 ">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password">
        </div>

        @error('message')
        <p class="alert alert-danger">*ERROR</p>
        @enderror

        <button type="submit" class="btn btn-primary">Iniciar</button>
        
    </form>
</div>


@endsection