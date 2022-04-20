@extends('global_common.scripts_styles')
@section('basic_content')
    <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">
            <div class="col-lg-12">
                <div class="main_logo25" id="logo">
                    <a href="{{ url('/index') }}"><img class="logo" src="{{ asset('assets/images/logo.png') }}"
                            alt=""></a>
                    <a href="{{ url('/index') }}"><img class="logo-inverse"
                            src="{{ asset('assets/images/ct_logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="sign_form">
                    <h2>Demander une réinitialisation de mot de passe</h2>
                    <form>
                        <div class="ui search focus mt-50">
                            <div class="ui left icon input swdh95">
                                <input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email"
                                    required="" maxlength="64" placeholder="Email Address">
                                <i class="uil uil-envelope icon icon2"></i>
                            </div>
                        </div>
                        <button class="login-btn" type="submit">Réinitialiser le mot de passe</button>
                    </form>
                    <p class="mb-0 mt-30">Retourner <a href="{{ url('/sign_up_steps') }}">S'identifier</a></p>
                </div>
                <div class="sign_footer"><img class="sign_logo_footer" src="{{ asset('assets/images/logo.png') }}"
                        alt="">© 2020 <strong>Cursus</strong>. All
                    Rights Reserved.</div>
            </div>
        </div>
    </div>
@endsection
