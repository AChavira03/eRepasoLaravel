@extends('layouts.master')
@section('title', 'Login')

@section('header')
    <h1 style="text-align: center; background-color: darkblue; padding: 10px; color: white; font-family: 'Book Antiqua', sans-serif">LOGIN</h1>
@stop

@section('navbar')

@stop

@section('content')
    <div style="text-align:center; font-size:18px; padding-bottom: 20px ">
        <form action="{{action('controlador@validarlogin')}}" method="post" >
            {{csrf_field()}}
            <label for="user" style="color: black; padding-left: 23px">Usuario:</label>
            <input type="text" name="user" style="width: 150px">
                <br>
            <label for="password" style="color: black" >Contraseña:</label>
            <input type="password" name="password" style="width: 150px">
                <br>
                <br>
            <input type="submit" value="Entrar">
        </form>
        <br>
        <img src="img/login.jpg" style="width: 20%" alt="">
    </div>
@stop


@section('footer')
    @parent
@stop
