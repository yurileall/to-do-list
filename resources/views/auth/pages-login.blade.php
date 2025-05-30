@extends('layouts.auth')

@section('content')
<div class="container">
  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
              <img src="{{ asset('assets/img/logo.png') }}" alt="">
              <span class="d-none d-lg-block">TO DO LIST</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Entre na sua conta</h5>
                <p class="text-center small">Digite seu nome de usuário e senha para fazer login</p>
              </div>

              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-12">
                  <label for="email" class="form-label">Nome de usuário</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" name="email" class="form-control" id="email" required autofocus autocomplete="username">
                    <div class="invalid-feedback">Please enter your username.</div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="password" class="form-label" style="margin-top: 10px">Senha</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" required>
                  <div class="invalid-feedback">Please enter your password!</div>
                </div>

                <div class="col-12">
                  <div class="form-check" style="margin-top: 10px">
                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Lembre-me</label>
                  </div>
                </div>

                @if (Route::has('password.request'))
                <div class="col-12 text-end">
                  <a href="{{ route('password.request') }}" class="small text-decoration-underline">Esqueceu sua senha?</a>
                </div>
                @endif

                <div class="col-12">
                  <button class="btn btn-primary w-100" style="margin-top: 10px" type="submit">Conect-se</button>
                </div>

                <div class="col-12">
                  <p class="small mb-0" style="margin-top: 10px">Não tem conta?  <a href="{{ url('register') }}">Crie uma conta</a></p>
                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</div>
@endsection