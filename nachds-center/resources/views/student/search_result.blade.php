<!DOCTYPE html>
<html lang="en">

<!-- Copyright  search_result.html Nachd IT 13:31:41 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Search Result</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/fav.png') }}" >

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
    <link href="{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vertical-responsive-menu1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/instructor-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/instructor-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">

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
            <a href="index.html"><img class="logo-main" src="{{ asset('assets/images/logo.png') }}"  alt=""></a>
            <a href="index.html"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.png') }}"  alt=""></a>
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
                    <a href="shopping_cart.html" class="option_links" title="cart"><i
                            class='uil uil-shopping-cart-alt'></i><span class="noti_count">2</span></a>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="option_links" title="Messages"><i class='uil uil-envelope-alt'></i><span
                            class="noti_count">3</span></a>
                    <div class="menu dropdown_ms">
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-6.jpg') }}"  alt="">
                                <div class="pd_content">
                                    <h6>Zoena Singh</h6>
                                    <p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-5.jpg') }}"  alt="">
                                <div class="pd_content">
                                    <h6>Joy Dua</h6>
                                    <p>Hello, I paid you video tutorial but did not play error 404.</p>
                                    <span class="nm_time">10 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-8.jpg') }}"  alt="">
                                <div class="pd_content">
                                    <h6>Jass</h6>
                                    <p>Thanks Sir, Such a nice video.</p>
                                    <span class="nm_time">25 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a class="vbm_btn" href="instructor_messages.html') }}" >View All <i
                                class='uil uil-arrow-right'></i></a>
                    </div>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="option_links" title="Notifications"><i class='uil uil-bell'></i><span
                            class="noti_count">3</span></a>
                    <div class="menu dropdown_mn">
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}"  alt="">
                                <div class="pd_content">
                                    <h6>Rock William</h6>
                                    <p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-2.jpg') }}"  alt="">
                                <div class="pd_content">
                                    <h6>Jassica Smith</h6>
                                    <p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
                                    <span class="nm_time">12 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-9.jpg') }}"  alt="">
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
                        <img src="{{ asset('assets/images/hd_dp.jpg') }}"  alt="">
                    </a>
                    <div class="menu dropdown_account">
                        <div class="channel_my">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/hd_dp.jpg') }}"  alt="">
                                <div class="pd_content">
                                    <div class="rhte85">
                                        <h6>Joginder Singh</h6>
                                        <div class="mef78" title="Verify">
                                            <i class='uil uil-check-circle'></i>
                                        </div>
                                    </div>
                                    <span><a href="https://gambolthemes.net/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="83e4e2eee1ecefbab7b0c3e4eee2eaefade0ecee">[email&#160;protected]</a></span>
                                </div>
                            </div>
                            <a href="student_profile_view.html" class="dp_link_12">View Instructor Profile</a>
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
                        <a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}"  alt=""></a>
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
                        <a href="student_dashboard.html" class="menu--link active" title="Dashboard">
                            <i class="uil uil-apps menu--icon"></i>
                            <span class="menu--label">Acceuil</span>
                        </a>
                    </li>

                    <li class="menu--item">
                        <a href="list_eleve.html" class="menu--link " title="Groupe">
                            <i class='uil uil-layers menu--icon'></i>
                            <span class="menu--label">Amis Dans Le Grp</span>
                        </a>
                    </li>  
                    
                    <li class="menu--item">
                        <a href="search_result.html" class="menu--link" title="Cours">
                            <i class='uil uil-book-alt menu--icon'></i>
                            <span class="menu--label">Cours</span>
                        </a>
                    </li>  
                    
                    <li class="menu--item">
                        <a href="student_schedule.html" class="menu--link" title="Emplois">
                            <i class='uil uil-star menu--icon'></i>
                            <span class="menu--label">Emplois</span>
                        </a>
                    </li>

                    

                    <li class="menu--item">
                        <a href="student_payout.html" class="menu--link" title="Earning">
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

    <div class="wrapper _bg4586 _new89">
        <div class="_215b15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title125">
                            <div class="titleleft">
                                <div class="ttl121">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Search Results</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="titleright">
                                <div class="explore_search">
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh15">
                                            <input class="prompt srch_explore" type="text" placeholder="Search">
                                            <i class="uil uil-search-alt icon icon2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title126">
                            <h2>Search Results</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sa4d25 mb4d25 margin-search">
            <div class="container-fluid col-lg-9">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-4">
                        <div class="section3125 hstry142">
                            <div class="result_stitles">
                                <div class="rs6t_title">Filters</div>
                                <div class="filter_selector">
                                    <div class="ui inline dropdown flt145">
                                        <div class="text">Sort</div>
                                        <i class="dropdown icon"></i>
                                        <div class="menu">
                                            <div class="item">Most Relevant</div>
                                            <div class="item">Most Reviewed</div>
                                            <div class="item">Highest Rated</div>
                                            <div class="item">Newest</div>
                                            <div class="item">Lowest Price</div>
                                            <div class="item">Highest Price</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tb_145">
                                <div class="panel-group accordion" id="accordionfilter">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingOne">
                                            <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseOne"
                                                    href="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    Matière
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse"
                                            aria-labelledby="headingOne" data-parent="#accordionfilter">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>SEO<span
                                                                            class="filter__counter">(428)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Php<span
                                                                            class="filter__counter">(1526)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Wordpress Pro<span
                                                                            class="filter__counter">(428)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>WooCommerce<span
                                                                            class="filter__counter">(958)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Bootstrap<span
                                                                            class="filter__counter">(748)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Web Development<span
                                                                            class="filter__counter">(2256)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Web Design<span
                                                                            class="filter__counter">(4859)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Digital Marketing<span
                                                                            class="filter__counter">(2458)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>E-commerce<span
                                                                            class="filter__counter">(1245)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Wordpress Themes<span
                                                                            class="filter__counter">(5879)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Wordpress Plugins<span
                                                                            class="filter__counter">(2654)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Wordpress Hosting<span
                                                                            class="filter__counter">(1485)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Elementor<span
                                                                            class="filter__counter">(3658)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Wordpress for Ecommerce<span
                                                                            class="filter__counter">(5894)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingTwo">
                                            <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                    href="#" aria-expanded="false" aria-controls="collapseTwo">
                                                    Niveau
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse"
                                            aria-labelledby="headingTwo" data-parent="#accordionfilter">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>All Levels<span
                                                                            class="filter__counter">(5000)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Beginner<span
                                                                            class="filter__counter">(3517)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Intermediate<span
                                                                            class="filter__counter">(1560)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Expert<span
                                                                            class="filter__counter">(240)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingThree">
                                            <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                    href="#" aria-expanded="false" aria-controls="collapseThree">
                                                    Groupe
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse"
                                            aria-labelledby="headingThree" data-parent="#accordionfilter">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>English<span
                                                                            class="filter__counter">(500)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Español<span
                                                                            class="filter__counter">(250)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Português<span
                                                                            class="filter__counter">(270)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>日本語<span
                                                                            class="filter__counter">(190)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Deutsch<span
                                                                            class="filter__counter">(120)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Français<span
                                                                            class="filter__counter">(105)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Türkçe<span
                                                                            class="filter__counter">(90)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>हिन्दी<span
                                                                            class="filter__counter">(80)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Italiano<span
                                                                            class="filter__counter">(178)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Polski<span
                                                                            class="filter__counter">(50)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>ภาษาไทย<span
                                                                            class="filter__counter">(27)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Română<span
                                                                            class="filter__counter">(157)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Telugu<span
                                                                            class="filter__counter">(110)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>मराठी<span
                                                                            class="filter__counter">(50)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="headingfour">
                                            <div class="panel-title10">
                                                <a class="collapsed" data-toggle="collapse" data-target="#collapsefour"
                                                    href="#" aria-expanded="false" aria-controls="collapsefour">
                                                    Prix
                                                </a>
                                            </div>
                                        </div>
                                        <div id="collapsefour" class="panel-collapse collapse"
                                            aria-labelledby="headingfour" data-parent="#accordionfilter">
                                            <div class="panel-body">
                                                <div class="ui form">
                                                    <div class="grouped fields">
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Paid<span
                                                                            class="filter__counter">(3000)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui form checkbox_sign">
                                                            <div class="inline field">
                                                                <div class="ui checkbox mncheck">
                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                    <label>Free<span
                                                                            class="filter__counter">(50)</span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="_14d25 mb-20">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fcrse_1">
                                        <a href="student_course_detail.html" class="hf_img">
                                            <img src="{{ asset('assets/images/courses/img-1.jpg') }}"  alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">la plus rependu</div>
                                                <div class="crse_revues">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 heures
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <div class="eps_dots eps_dots10 more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class="uil uil-share-alt"></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-ban"></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k élèves</span>
                                                <span class="vdt14">il y'a 15 jours</span>
                                            </div>
                                            <a href="student_course_detail.html" class="crse14s title900">Complete Python
                                                Bootcamp: Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Web Development | Python</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">Par M.<a href="#">John Doe</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fcrse_1 mt-30">
                                        <a href="student_course_detail.html" class="hf_img">
                                            <img src="{{ asset('assets/images/courses/img-2.jpg') }}"  alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">la plus rependu</div>
                                                <div class="crse_revues">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    28 heures
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <div class="eps_dots eps_dots10 more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class="uil uil-share-alt"></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-ban"></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">5M élèves</span>
                                                <span class="vdt14">il y'a 15 jours</span>
                                            </div>
                                            <a href="student_course_detail.html" class="crse14s title900">The Complete
                                                JavaScript Course 2020: Build Real Projects!</a>
                                            <a href="#" class="crse-cate">Development | JavaScript</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">Par M.<a href="#">Jassica William</a></p>
                                                <div class="prce142">$5</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fcrse_1 mt-30">
                                        <a href="student_course_detail.html" class="hf_img">
                                            <img src="{{ asset('assets/images/courses/img-3.jpg') }}"  alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">la plus rependu</div>
                                                <div class="crse_revues">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    12 heures
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <div class="eps_dots eps_dots10 more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class="uil uil-share-alt"></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-ban"></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">1M élèves</span>
                                                <span class="vdt14">il y'a 18 jours</span>
                                            </div>
                                            <a href="student_course_detail.html" class="crse14s title900">Beginning C++
                                                Programming - From Beginner to Beyond</a>
                                            <a href="#" class="crse-cate">Development | C++</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">Par M.<a href="#">Joginder Singh</a></p>
                                                <div class="prce142">$13</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fcrse_1 mt-30">
                                        <a href="student_course_detail.html" class="hf_img">
                                            <img src="{{ asset('assets/images/courses/img-4.jpg') }}"  alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">la plus rependu</div>
                                                <div class="crse_revues">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    1 heures
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <div class="eps_dots eps_dots10 more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class="uil uil-share-alt"></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-ban"></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">153k élèves</span>
                                                <span class="vdt14">3 months ago</span>
                                            </div>
                                            <a href="student_course_detail.html" class="crse14s title900">The Complete
                                                Digital Marketing Course - 12 Courses in 1</a>
                                            <a href="#" class="crse-cate">Digital Marketing | Marketing</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">Par M.<a href="#">Poonam Verma</a></p>
                                                <div class="prce142">$12</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-loader mt-50">
                                        <div class="spinner">
                                            <div class="bounce1"></div>
                                            <div class="bounce2"></div>
                                            <div class="bounce3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>>
                </div>
            </div>
        </div>
        <footer class="footer mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="about_us.html">About</a>
                            <a href="our_blog.html">Blog</a>
                            <a href="career.html">Careers</a>
                            <a href="press.html">Press</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="help.html">Help</a>
                            <a href="coming_soon.html">Advertise</a>
                            <a href="coming_soon.html">Developers</a>
                            <a href="contact_us.html">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f1">
                            <a href="terms_of_use.html">Copyright Policy</a>
                            <a href="terms_of_use.html">Terms</a>
                            <a href="terms_of_use.html">Privacy Policy</a>
                            <a href="sitemap.html">Sitemap</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="item_f3">
                            <div class="lng_btn">
                                <div class="ui language bottom right pointing dropdown floating" id="languages"
                                    data-content="Select Language">
                                    <a href="#"><i class='uil uil-globe lft'></i>Language<i
                                            class='uil uil-angle-down rgt'></i></a>
                                    <div class="menu">
                                        <div class="scrolling menu">
                                            <div class="item" data-percent="100" data-value="en" data-english="English">
                                                <span class="description">English</span>
                                                English
                                            </div>
                                            <div class="item" data-percent="94" data-value="da" data-english="Danish">
                                                <span class="description">dansk</span>
                                                Danish
                                            </div>
                                            <div class="item" data-percent="94" data-value="es" data-english="Spanish">
                                                <span class="description">Español</span>
                                                Spanish
                                            </div>
                                            <div class="item" data-percent="34" data-value="zh" data-english="Chinese">
                                                <span class="description">简体中文</span>
                                                Chinese
                                            </div>
                                            <div class="item" data-percent="54" data-value="zh_TW"
                                                data-english="Chinese (Taiwan)">
                                                <span class="description">中文 (臺灣)</span>
                                                Chinese (Taiwan)
                                            </div>
                                            <div class="item" data-percent="79" data-value="fa" data-english="Persian">
                                                <span class="description">پارسی</span>
                                                Persian
                                            </div>
                                            <div class="item" data-percent="41" data-value="fr" data-english="French">
                                                <span class="description">Français</span>
                                                French
                                            </div>
                                            <div class="item" data-percent="37" data-value="el" data-english="Greek">
                                                <span class="description">ελληνικά</span>
                                                Greek
                                            </div>
                                            <div class="item" data-percent="37" data-value="ru" data-english="Russian">
                                                <span class="description">Русский</span>
                                                Russian
                                            </div>
                                            <div class="item" data-percent="36" data-value="de" data-english="German">
                                                <span class="description">Deutsch</span>
                                                German
                                            </div>
                                            <div class="item" data-percent="23" data-value="it" data-english="Italian">
                                                <span class="description">Italiano</span>
                                                Italian
                                            </div>
                                            <div class="item" data-percent="21" data-value="nl" data-english="Dutch">
                                                <span class="description">Nederlands</span>
                                                Dutch
                                            </div>
                                            <div class="item" data-percent="19" data-value="pt_BR"
                                                data-english="Portuguese">
                                                <span class="description">Português(BR)</span>
                                                Portuguese
                                            </div>
                                            <div class="item" data-percent="17" data-value="id"
                                                data-english="Indonesian">
                                                <span class="description">Indonesian</span>
                                                Indonesian
                                            </div>
                                            <div class="item" data-percent="12" data-value="lt"
                                                data-english="Lithuanian">
                                                <span class="description">Lietuvių</span>
                                                Lithuanian
                                            </div>
                                            <div class="item" data-percent="11" data-value="tr" data-english="Turkish">
                                                <span class="description">Türkçe</span>
                                                Turkish
                                            </div>
                                            <div class="item" data-percent="10" data-value="kr" data-english="Korean">
                                                <span class="description">한국어</span>
                                                Korean
                                            </div>
                                            <div class="item" data-percent="7" data-value="ar" data-english="Arabic">
                                                <span class="description">العربية</span>
                                                Arabic
                                            </div>
                                            <div class="item" data-percent="6" data-value="hu" data-english="Hungarian">
                                                <span class="description">Magyar</span>
                                                Hungarian
                                            </div>
                                            <div class="item" data-percent="6" data-value="vi"
                                                data-english="Vietnamese">
                                                <span class="description">tiếng Việt</span>
                                                Vietnamese
                                            </div>
                                            <div class="item" data-percent="5" data-value="sv" data-english="Swedish">
                                                <span class="description">svenska</span>
                                                Swedish
                                            </div>
                                            <div class="item" data-precent="4" data-value="pl" data-english="Polish">
                                                <span class="description">polski</span>
                                                Polish
                                            </div>
                                            <div class="item" data-percent="6" data-value="ja" data-english="Japanese">
                                                <span class="description">日本語</span>
                                                Japanese
                                            </div>
                                            <div class="item" data-percent="0" data-value="ro" data-english="Romanian">
                                                <span class="description">românește</span>
                                                Romanian
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    <img src="{{ asset('assets/images/logo1.svg') }}"  alt="">
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
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendorbootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendorOwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/vendorsemantic/semantic.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/night-mode.js') }}"></script>
</body>

<!-- Copyright  search_result.html Nachd IT 13:31:41 GMT -->

</html>