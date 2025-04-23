@extends('layouts.auth')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm" style="max-width: 500px; width: 100%;">
        <div class="card-body p-4">
            <h5 class="card-title text-center mb-4">Confirmação de E-mail</h5>

            <p class="text-secondary mb-4">
                {{ __("Obrigado por se inscrever! Antes de continuar, verifique seu endereço de e-mail clicando no link que acabamos de enviar. Se não recebeu, ficaremos felizes em enviar outro.") }}
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success">
                    {{ __("Um novo link de verificação foi enviado para o e-mail que você forneceu durante o cadastro.") }}
                </div>
            @endif

            <div class="d-flex justify-content-between mt-4">
                {{-- Reenviar link de verificação --}}
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        {{ __('Reenviar e-mail de verificação') }}
                    </button>
                </form>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-secondary">
                        {{ __('Sair') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection