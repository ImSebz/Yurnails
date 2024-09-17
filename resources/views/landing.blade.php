<!-- resources/views/landing.blade.php -->

@extends('layout')

@section('title', 'Yurlails')

@section('content')
    <div class="landing-container">
        <div class="landing-left-container">
            <img class="hand-img" src="{{ asset('assets/hand_yurnails.png') }}" alt="Yurnails Hand">
        </div>
        <div class="landing-right-container">
            <h2 class="landing-title">Nail Workshop</h2>
            <img class="img-logo-landing" src="{{ asset('assets/logo-nails-academy.png') }}" alt="Yurnails Academy">
            <a href="/form"><button class="sign-btn">Sign up</button></a>
        </div>
    </div>
@endsection
