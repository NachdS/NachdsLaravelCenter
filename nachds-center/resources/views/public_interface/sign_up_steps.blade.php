<!DOCTYPE html>
<html lang="en">

<!-- Copyright  sign_up_steps.html Nachd IT 13:31:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Sign Up Next Step</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/fav.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
    <link href="{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/semantic/semantic.min.css') }}">
</head>

<body class="index-content">

    <div class="sign_in_up_bg">
        <div class="container">
            <div class="row justify-content-lg-center justify-content-md-center">
                <div class="col-lg-12">
                    <div class="main_logo25" id="logo">
                        <a href="index.html"><img class="logo" src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                        <a href="index.html"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="sign_form">
                        <div class="main-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a href="#instructor-signup-tab" id="instructor-tab" class="nav-link active"
                                        data-toggle="tab">Inscription professeur </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#student-signup-tab" id="student-tab" class="nav-link"
                                        data-toggle="tab">Inscription élève </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="instructor-signup-tab" role="tabpanel"
                                aria-labelledby="instructor-tab">
                                <p>S'inscrire et créer un cours!</p>
                                <form action="../teacher/sign_in_teacher.html" method="get" target="_blank">
                                    <div class="ui search focus">
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="name" value=""
                                                    id="id_name" required="true" maxlength="64" placeholder="Nom">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="prénom" value=""
                                                    id="id_prénom" required="true" maxlength="64" placeholder="Prénom">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="email" value=""
                                                    id="id_email" required="true" maxlength="64" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="tel" value=""
                                                    id="id_tel" required="true" maxlength="64" placeholder="Numéro de téléphone">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="login" value=""
                                                    id="id_login" required="true" maxlength="64" placeholder="Identifiant">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15 mb-15">
                                            <div class="ui left icon input swdh11 swdh19 ">
                                                <input class="prompt srch_explore" type="text" name="mdp" value=""
                                                    id="id_mdp" required="true" maxlength="64" placeholder="Mot de passe">
                                            </div>
                                        </div>
                                        <select class="ui hj145 dropdown cntry152 prompt srch_explore  mt-15">
                                            <option value="">sélectionner la spécialité</option>
                                            <option value="1">Development</option>
                                            <option value="2">Business</option>
                                            <option value="3">Finance & Accounting</option>
                                            <option value="4">IT & Software</option>
                                            <option value="5">Office Productivity</option>
                                            <option value="6">Personal Development</option>
                                            <option value="7">Design</option>
                                            <option value="8">Marketing</option>
                                            <option value="9">Lifestyle</option>
                                            <option value="10">Photography</option>
                                            <option value="11">Health & Fitness</option>
                                            <option value="12">Music</option>
                                            <option value="13">Teaching & Academics</option>
                                        </select>
                                    </div>
                                    <button class="login-btn" type="submit">Connectez-vous maintenant</button>
                                    <p class="mb-0 mt-30">Vous avez déjà un compte?<a href="../teacher/sign_in_teacher.html">Connexion</a></p>
                                </form> 
                            </div>
                            <div class="tab-pane fade" id="student-signup-tab" role="tabpanel"
                                aria-labelledby="student-tab">
                                <p>Inscrivez-vous et commencez à apprendre !</p>
                                <form action="../student/sign_in_student.html" method="get" target="_blank">
                                    <div class="ui search focus">
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="name" value=""
                                                    id="id_name" required="true" maxlength="64" placeholder="Nom">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="prénom" value=""
                                                    id="id_prénom" required="true" maxlength="64" placeholder="Prénom">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="email" value=""
                                                    id="id_email" required="true" maxlength="64" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="tel" value=""
                                                    id="id_tel" required="true" maxlength="64" placeholder="Numéro de téléphone">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="tuteur" value=""
                                                    id="id_tuteur" required="true" maxlength="64" placeholder="Nom tuteur">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="cin_tuteur" value=""
                                                    id="id_cin_tuteur" required="true" maxlength="64" placeholder="Cin tuteur">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15">
                                            <div class="ui left icon input swdh11 swdh19">
                                                <input class="prompt srch_explore" type="text" name="login" value=""
                                                    id="id_login" required="true" maxlength="64" placeholder="Identifiant">
                                            </div>
                                        </div>
                                        <div class="ui form swdh30 mt-15 mb-15">
                                            <div class="ui left icon input swdh11 swdh19 ">
                                                <input class="prompt srch_explore" type="text" name="mdp" value=""
                                                    id="id_mdp" required="true" maxlength="64" placeholder="Mot de passe">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="login-btn" type="submit">Se connecter maintenant</button>
                                    <p class="mb-0 mt-30">Vous avez déjà un compte?<a href="../student/sign_in_student.html"> Connexion</a></p>
                                </form>
                            </div>
                        </div>
                        
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
    <script src="{{ asset('assets/js/function.js') }}"></script>
</body>

<!-- Copyright  sign_up_steps.html Nachd IT 13:31:36 GMT -->

</html>