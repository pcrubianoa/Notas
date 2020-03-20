@extends('layouts.website')

@section('content')
    <!-- Signin Section -->
    <section class="sign-in-section section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 sign-in">
                    <h2>Bienvenido a tu Colegio</h2>
                    <div class="sign-with-social">
                        <h6>Sign up using</h6>
                        <div class="social-links">
                            <a target="_blank" href="https://www.facebook.com/codingeek.net"><i class="fab fa-facebook-square"></i></a>
                            <a target="_blank" href="https://twitter.com/codingeeknet"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/company/codingeek/about/"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="sign-with-email">
                        <h6>Or sign up using your email</h6>
                        <form method="POST" action="{{ route('login') }}" class="form-style-2">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Correo Electrónico') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="usuario@correo.com" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*************">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordar mi cuenta') }}
                                </label>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Olvidaste tu contraseña?') }}
                                </a>
                            </div>
                            <button type="submit"  class="small-btn">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
