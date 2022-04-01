
    @extends('global_common.scripts_styles')
    @section('basic_content')

    <div class="container-fluid index-content" style="height: 100% !important;">
        <div class="row justify-content-lg-center justify-content-md-center">
            <div class="col-lg-12">
                <div class="main_logo25" id="logo">
                    <a href="{{url('/index')}}"><img class="logo" src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    <a href="{{url('/index')}}"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="sign_form">
                    <h2>Demander une réinitialisation de mot de passe</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="ui search focus mt-50">
                            <div class="ui left icon input swdh95">
                                <input id="email" type="email" class="prompt srch_explore @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <i class="uil uil-envelope icon icon2"></i>
                            </div>
                        </div>
                        <div class="row mb-0">
                                <button type="submit" class="login-btn" style="margin: 25px 15px;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </form>
                <p class="mb-0 mt-30">Go Back <a href="{{url('/sign_up_steps')}}">Sign In</a></p>
            </div>
            <div class="sign_footer"><img class="sign_logo_footer" src="{{ asset('assets/images/logo.png') }}"  alt="">© 2020 <strong>Cursus</strong>. All
                Rights Reserved.</div>
        </div>
    </div>
</div>

@endsection

