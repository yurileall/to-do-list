@extends('layouts.auth')

@section('content')
<div class="container min-vh-100 d-flex align-items-center justify-content-center">
  <div class="row w-100">
    <div class="col-md-6 col-lg-5 mx-auto">
      <div class="text-center mb-4">
        <h2 class="h4">Esqueceu sua senha?</h2>
        <p class="text-muted">Sem problemas. Apenas informe seu endereço de e-mail que enviaremos um link para redefinição de senha.</p>
      </div>

      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

      <div class="card shadow-sm">
        <div class="card-body">
          <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                     value="{{ old('email') }}" required autofocus>
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">
                Enviar link para redefinir senha por e-mail
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection