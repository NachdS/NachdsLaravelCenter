<!DOCTYPE html>
<html lang="en">

<!-- Copyright  sign_in.html Nachd IT 13:31:31 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Sign In</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/fav.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
    <link href="{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="css/night-mode.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/semantic/semantic.min.css') }}">
</head>

<body>

    <div class="sign_in_up_bg">
        <div class="container">
            <div class="row justify-content-lg-center justify-content-md-center">
                <div class="col-lg-12">
                    <div class="main_logo25" id="logo">
                        <a href="instructor_dashboard.html"><img class="logo" src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                        <a href="instructor_dashboard.html"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.png') }}" alt=""></a>
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
                        <form action="instructor_dashboard.html" method="get" target="_blank">
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

                            <button class="login-btn" type="submit">S'identifier</button>
                        </form>
                        <p class="sgntrm145">Or <a href="forgot_password.html">Mot de passe oublié</a>.</p>
                        <p class="mb-0 mt-30 hvsng145">Vous n'avez pas de compte ?<a href="sign_up.html">S'inscrire</a></p>
                    </div>
                    <div class="sign_footer"><img class="sign_logo_footer" src="{{ asset('assets/images/logo.png') }}" alt="">© 2020 <strong>Cursus</strong>. All
                        Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendorbootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendorOwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/vendorsemantic/semantic.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/night-mode.js') }}"></script>
</body>

<!-- Copyright  sign_in.html Nachd IT 13:31:32 GMT -->

</html>