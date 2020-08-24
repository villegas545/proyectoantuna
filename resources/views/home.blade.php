@extends('layouts.app')
<title>HBR</title>
        <link rel="icon" type="image/x-icon" href="../img/HBR.jpg" />
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-color: #9c9c9c;">
                <div class="card-header" style="background-color: #9c9c9c; color: black">{{ __('Mensaje') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ session('rol') }}
                        </div>
                    @endif

                    {{ __('¡Administrador, estás conectado!,
                    presioné laravel para ingresar al sistema') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
