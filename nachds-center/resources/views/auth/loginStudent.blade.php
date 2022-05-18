@extends('global_common.scripts_styles')
@section('basic_content')

<div class="sign_in_up_bg index-content">
    <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">
            <div class="col-lg-12">
                <div class="main_logo25" id="logo">
                    <a  href="{{url('/instructor_dashboard')}}"><img class="logo" src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    <a  href="{{url('/instructor_dashboard')}}"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
             <div class="sign_form"> 
                <h2>Bienvenue Elève</h2>
                <p>Connectez-vous à votre compte!</p>
                    <form method="POST" action="{{ route('login') }}" target="_blank">
                        @csrf

                        <div class="ui search focus mt-15">
                         <div class="ui left icon input swdh95">
                            
                                <input id="email" type="email" placeholder="Adresse e-mail" class="prompt srch_explore @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="uil uil-envelope icon icon2"></i>
                         </div>
                        </div>

                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh95">
                                <input id="password"  placeholder="Mot de passe" type="password" class="prompt srch_explore @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="uil uil-key-skeleton-alt icon icon2"></i>
                         </div>
                        </div>

                        <div class="ui search focus mt-15">
                            <div class="ui left icon input swdh95">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>

                        
                        <div class="">
                                <button class="login-btn" style="background-color: #ed2a26;" type="submit"> {{ __('Login') }}</button>
                                <p class="sgntrm145">
                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        Or {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </p>
                        </div>
                    </form>
                   
                    <p class="mb-0 mt-30 hvsng145">Vous n'avez pas de compte ?<a href="{{url('/sign_up_steps')}}">S'inscrire</a></p>
             </div>
             <div class="sign_footer" style="display: flex;float: left;width: 100%;align-items: center;justify-content: center;"><img class="sign_logo_footer" src="{{ asset('assets/images/logo.png') }}" alt="">© 2020 <strong>Cursus</strong>. All
                Rights Reserved.
             </div>
            </div>
        </div>
    </div>
</div>
@endsection
