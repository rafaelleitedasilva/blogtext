@extends('layouts.master')
@section('content')


<div class="d-flex justify-content-center align-items-center flex-wrap" style="height: 100vh;">
    <div>
        <div>
            <img class="d-block m-auto" src="{{Vite::asset('resources/images/logo.jpg')}}" alt="Logo BlogText">
        </div>
        <div style="width: 100%;">
            <p class="text-center" style="max-width: 300px;">O site está sendo escrito...<br> Caso queira ser notificado quando o sistema estiver pronto, coloque seu e-mail abaixo:</p>
            
            <form action="{{route('email.send')}}" method="POST" class="w-100 d-flex">
                @csrf
                <input name="email" type="email" class="form-control" style="max-width: 300px;" placeholder="Email" max="255" required>
                <button class="btn" type="submit">
                    <img style="width: 15px;" src="{{Vite::asset('resources/images/enviar.png')}}" alt="">
                </button>
            </form>
        </div>
    </div>
</div>
@endsection