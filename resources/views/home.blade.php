@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Успешно!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы вошли в систему! Скажите свой email в редакции и получите подарок!') }}
                </div>
                
            </div>
            <button class="btn my-3  btn-primary"><a href="/table" class="nav-link">Продолжить </a></button>
        </div>
    </div>
</div>
@endsection
