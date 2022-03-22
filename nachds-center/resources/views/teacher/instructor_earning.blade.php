<!DOCTYPE html>
<html lang="en">

<!-- Copyright  instructor_earning.html Nachd IT 13:31:59 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Earning</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/fav.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
    <link href="{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/css/vertical-responsive-menu1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/instructor-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/instructor-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-steps.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/semantic/semantic.min.css') }}">
</head>

<body>

    <header class="header clearfix">
        <button type="button" id="toggleMenu" class="toggle_menu">
            <i class='uil uil-bars'></i>
        </button>
        <button id="collapse_menu" class="collapse_menu">
            <i class="uil uil-bars collapse_menu--icon "></i>
            <span class="collapse_menu--label"></span>
        </button>
        <div class="main_logo" id="logo">
            <a href="index.html"><img class="logo-main" src="{{ asset('assets/images/logo.png') }}" alt=""></a>
            <a href="index.html"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.png') }}" alt=""></a>
        </div>
        <div class="top-category">
            <div class="ui compact menu cate-dpdwn">
                <div class="ui simple dropdown item">
                    <a href="#" class="option_links p-0" title="categories"><i class="uil uil-apps"></i></a>
                    <div class="menu dropdown_category5">
                        <a href="#" class="item channel_item">Development</a>
                        <a href="#" class="item channel_item">Business</a>
                        <a href="#" class="item channel_item">Finance & Accounting</a>
                        <a href="#" class="item channel_item">IT & Software</a>
                        <a href="#" class="item channel_item">Office Productivity</a>
                        <a href="#" class="item channel_item">Personal Development</a>
                        <a href="#" class="item channel_item">Design</a>
                        <a href="#" class="item channel_item">Marketing</a>
                        <a href="#" class="item channel_item">Lifestyle</a>
                        <a href="#" class="item channel_item">Photography</a>
                        <a href="#" class="item channel_item">Health & Fitness</a>
                        <a href="#" class="item channel_item">Music</a>
                        <a href="#" class="item channel_item">Teaching & Academics</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="search120">
            <div class="ui search">
                <div class="ui left icon input swdh10">
                    <input class="prompt srch10" type="text"
                        placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                    <i class='uil uil-search-alt icon icon1'></i>
                </div>
            </div>
        </div>
        <div class="header_right">
            <ul>
                <li>
                    <a href="create_new_course.html" class="upload_btn" title="Create New Course">Create New Course</a>
                </li>
                <li>
                    <a href="shopping_cart.html" class="option_links" title="cart"><i
                            class='uil uil-shopping-cart-alt'></i><span class="noti_count">2</span></a>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="option_links" title="Messages"><i class='uil uil-envelope-alt'></i><span
                            class="noti_count">3</span></a>
                    <div class="menu dropdown_ms">
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-6.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Zoena Singh</h6>
                                    <p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-5.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Joy Dua</h6>
                                    <p>Hello, I paid you video tutorial but did not play error 404.</p>
                                    <span class="nm_time">10 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-8.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Jass</h6>
                                    <p>Thanks Sir, Such a nice video.</p>
                                    <span class="nm_time">25 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a class="vbm_btn" href="instructor_messages.html">View All <i
                                class='uil uil-arrow-right'></i></a>
                    </div>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="option_links" title="Notifications"><i class='uil uil-bell'></i><span
                            class="noti_count">3</span></a>
                    <div class="menu dropdown_mn">
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Rock William</h6>
                                    <p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-2.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Jassica Smith</h6>
                                    <p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
                                    <span class="nm_time">12 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-9.jpg') }}" alt="">
                                <div class="pd_content">
                                    <p> Your Membership Approved <strong>Upload Video</strong>.</p>
                                    <span class="nm_time">20 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a class="vbm_btn" href="instructor_notifications.html">View All <i
                                class='uil uil-arrow-right'></i></a>
                    </div>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="opts_account" title="Account">
                        <img src="{{ asset('assets/images/hd_dp.jpg') }}" alt="">
                    </a>
                    <div class="menu dropdown_account">
                        <div class="channel_my">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/hd_dp.jpg') }}" alt="">
                                <div class="pd_content">
                                    <div class="rhte85">
                                        <h6>Joginder Singh</h6>
                                        <div class="mef78" title="Verify">
                                            <i class='uil uil-check-circle'></i>
                                        </div>
                                    </div>
                                    <span><a href="https://gambolthemes.net/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="3c5b5d515e535005080f7c5b515d5550125f5351">[email&#160;protected]</a></span>
                                </div>
                            </div>
                            <a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>
                        </div>
                        <div class="night_mode_switch__btn">
                            <a href="#" id="night-mode" class="btn-night-mode">
                                <i class="uil uil-moon"></i> Night mode
                                <span class="btn-night-mode-switch">
                                    <span class="uk-switch-button"></span>
                                </span>
                            </a>
                        </div>
                        <a href="instructor_dashboard.html" class="item channel_item">Cursus dashboard</a>
                        <a href="membership.html" class="item channel_item">Paid Memberships</a>
                        <a href="setting.html" class="item channel_item">Setting</a>
                        <a href="help.html" class="item channel_item">Help</a>
                        <a href="feedback.html" class="item channel_item">Send Feedback</a>
                        <a href="sign_in.html" class="item channel_item">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>



    <nav class="vertical_nav">
        <div class="left_section menu_left" id="js-menu">
            <div class="left_section mt-30 ">
                <ul>
                <li class="menu--item">
                <div class="menu--link ">
                    <div class="tutor_img">
                        <a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="tutor_content_dt">
                        <div class="tutor150">
                            <a href="../instructor_profile_view.html" class="tutor_name">John Doe</a>
                            <div class="mef78" title="Verify">
                                <i class="uil uil-check-circle"></i>
                            </div>
                        </div>   
                    </div>
                </div>
                </li>
                </ul>
            </div>
            <div class="left_section">
                <ul>
                    <li class="menu--item">
                        <a href="instructor_dashboard.html" class="menu--link active" title="Dashboard">
                            <i class="uil uil-apps menu--icon"></i>
                            <span class="menu--label">Acceuil</span>
                        </a>
                    </li>

                    <li class="menu--item">
                        <a href="group.html" class="menu--link " title="Groupe">
                            <i class='uil uil-layers menu--icon'></i>
                            <span class="menu--label">Groupe</span>
                        </a>
                    </li>  
                    
                    <li class="menu--item">
                        <a href="instructor_courses.html" class="menu--link" title="Cours">
                            <i class='uil uil-book-alt menu--icon'></i>
                            <span class="menu--label">Cours</span>
                        </a>
                    </li>  
                    
                    <li class="menu--item">
                        <a href="teacher_schedule.html" class="menu--link" title="Emplois">
                            <i class='uil uil-star menu--icon'></i>
                            <span class="menu--label">Emplois</span>
                        </a>
                    </li>

                    

                    <li class="menu--item">
                        <a href="instructor_earning.html" class="menu--link" title="Earning">
                            <i class='uil uil-dollar-sign menu--icon'></i>
                            <span class="menu--label">Earning</span>
                        </a>
                    </li> 
        </div>
        <div class="left_section pt-2">
            <ul>
                <li class="menu--item">
                    <a href="../public_interface/index.html" class="menu--link" title="Send Feedback">
                        <i class='uil uil-home-alt  menu--icon'></i>
                        <span class="menu--label">Retour Vers Accueil</span>
                    </a>
                </li>
            </ul>
        </div>
       
        <div class="left_footer">
            <ul>
                <li><a href="about_us.html">About</a></li>
                <li><a href="press.html">Press</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="coming_soon.html">Advertise</a></li>
                <li><a href="coming_soon.html">Developers</a></li>
                <li><a href="terms_of_use.html">Copyright</a></li>
                <li><a href="terms_of_use.html">Privacy Policy</a></li>
                <li><a href="terms_of_use.html">Terms</a></li>
            </ul>
            <div class="left_footer_content">
                <p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
            </div>
        </div>

    </nav>


    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-dollar-sign"></i> Revenus</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains/Années</p>
                            <h2>$1146.78</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains/Sessions</p>
                            <h2>$1146.78</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains/Mois</p>
                            <h2>$1146.78</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains/Heures</p>
                            <h2>$1146.78</h2>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12">
                        <div class="date_selector">
                            <div class="ui selection dropdown skills-search vchrt-dropdown">
                                <input name="date" type="hidden" value="default">
                                <i class="dropdown icon d-icon"></i>
                                <div class="text">Item Sales</div>
                                <div class="menu">
                                    <div class="item" data-value="0">Total Sales</div>
                                    <div class="item" data-value="1">2020</div>
                                </div>
                            </div>
                            <div class="date_list152">
                                <a href="#">All Time</a> /
                                <a href="#">2020</a> /
                                <a href="#">April</a>
                            </div>
                        </div>
                        <div class="table-responsive mt-30">
                            <table class="table ucp-table earning__table">
                                <thead class="thead-s">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Montant reçu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1, Wednesday</td>
                                        <td>$120.50</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2, Thursday</td>
                                        <td>$84.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>4, Saturday</td>
                                        <td>$150.50</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>5, Sunday</td>
                                        <td>$102.24</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td>$1146.78</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item_f1">
                            <a href="terms_of_use.html">Copyright Policy</a>
                            <a href="terms_of_use.html">Terms</a>
                            <a href="terms_of_use.html">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="footer_bottm">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="fotb_left">
                                        <li>
                                            <a href="index.html">
                                                <div class="footer_logo">
                                                    <img src="{{ asset('assets/images/logo1.svg') }}" alt="">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="edu_social_links">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js/vertical-responsive-menu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendorbootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendorOwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/vendorsemantic/semantic.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom1.js') }}"></script>
    <script src="{{ asset('assets/js/night-mode.js') }}"></script>
</body>

<!-- Copyright  instructor_earning.html Nachd IT 13:31:59 GMT -->

</html>