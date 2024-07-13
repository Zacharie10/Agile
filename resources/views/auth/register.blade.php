@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">
  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url({{ asset('sogol.png') }})"></div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              @if (session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
              <h5 class="text-muted font-weight-normal mb-4">Créer un nouveau compte</h5>
              <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nom:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirme mot de passe:</label>
                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
                <a href="{{ route('login.view') }}" class="d-block mt-3">Vous avez déjà un compte? Se connecter</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
