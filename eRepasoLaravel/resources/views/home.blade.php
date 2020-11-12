@extends('layouts.master')
@section('header')
   @parent
@show
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/home">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{action('controlador@vinci')}}">Leonardo da Vinci</a>
                </li>
                <br>
                <li class="nav-item">
                    <a class="nav-link" href="{{action('controlador@dali')}}">Salvador Dali</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{action('controlador@miguelAngel')}}">Miguel Angel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{action('controlador@picasso')}}">Pablo Picasso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{action('controlador@vanGogh')}}">Vincent van Gogh</a>
                </li>
            </ul>
        </div>
    </nav>
@stop
@section('content')
    @parent
@stop
@section('footer')
    @parent
@stop

