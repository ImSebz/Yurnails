<!-- resources/views/landing.blade.php -->

@extends('layout')

@section('title', 'Yurlails')

@section('content')
    <div class="landing-container">
        <div class="landing-right-container">
            <h2 class="landing-title">Nail Workshop</h2>
            <img class="img-logo-landing" src="{{ asset('assets/logo-nails-academy.png') }}" alt="">
            <a href="/form"><button class="sing-btn">Sign up</button></a>
        </div>
    </div>
@endsection
