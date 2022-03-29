

    @extends('global_common.scripts_styles')
    @section('basic_content')

    <div class="sign_in_up_bg">
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
                        <h2>Bienvenue Professeur</h2>
                        <p>Connectez-vous à votre compte!</p>
                        <button class="social_lnk_btn color_btn_fb"><i class="uil uil-facebook-f"></i>Continue avec
                            Facebook</button>
                        <button class="social_lnk_btn mt-15 color_btn_tw"><i class="uil uil-twitter"></i>Continue avec
                            Twitter</button>
                        <button class="social_lnk_btn mt-15 color_btn_go"><i class="uil uil-google"></i>Continue avec
                            Google</button>
                        <form action="" method="get" target="_blank">
                            <div class="ui search focus mt-15">
                                <div class="ui left icon input swdh95">
                                    <input class="prompt srch_explore" type="email" name="emailaddress" value=""
                                        id="id_email" required="" maxlength="64" placeholder="Adresse e-mail">
                                    <i class="uil uil-envelope icon icon2"></i>
                                </div>
                            </div>
                            <div class="ui search focus mt-15">
                                <div class="ui left icon input swdh95">
                                    <input class="prompt srch_explore" type="password" name="password" value=""
                                        id="id_password" required="" maxlength="64" placeholder="Mot de passe">
                                    <i class="uil uil-key-skeleton-alt icon icon2"></i>
                                </div>
                            </div>

                            <button class="login-btn" type="submit"><a href="{{url('/instructor_dashboard')}}">S'identifier</a></button>
                        </form>
                        <p class="sgntrm145">Or <a href="{{url('/forgot_password')}}">Mot de passe oublié</a>.</p>
                        <p class="mb-0 mt-30 hvsng145">Vous n'avez pas de compte ?<a href="{{url('/sign_up_steps')}}">S'inscrire</a></p>
                    </div>
                    <div class="sign_footer"><img class="sign_logo_footer" src="{{ asset('assets/images/logo.png') }}" alt="">© 2020 <strong>Cursus</strong>. All
                        Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>

    @endsection

