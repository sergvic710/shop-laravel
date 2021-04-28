@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="text-center">РЕГИСТРАЦИЯ И ОПЛАТА<br>M2M EXPRESS</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="text-center">РЕГИСТРАЦИЯ И ОПЛАТА<br>M2M EXPRESS</h1>
        </div>
        <div class="col">
            <ul>
                <li>M2M без потери сигнала</li>
                <li>M2M без потери сигнала</li>
                <li>M2M без потери сигнала</li>
                <li>M2M без потери сигнала</li>
            </ul>
            <a class="btn btn-success btn-lg" href="{{ route('register') }}">РЕГИСТРАЦИЯ</a>
            <a class="btn btn-primary btn-lg" href="{{ route('login') }}">ВХОД</a>
        </div>
    </div>
</div>
@endsection
