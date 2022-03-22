<!DOCTYPE html>
<html lang="en">

<!-- Copyright  live_output.html Nachd IT 13:31:41 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Live Output</title>

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
                                            data-cfemail="7116101c131e1d48454231161c10181d5f121e1c">[email&#160;protected]</a></span>
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

    <div class="_215b15 _byt1458">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user_dt5">
                        <div class="user_dt_left">
                            <div class="live_user_dt">
                                <div class="user_cntnt">
                                    <a href="#" class="_df7852">Johnson Smith</a>
                                    <button class="subscribe-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section3125">
                            <div class="user_dt5">
                                <div class="user_dt_left">
                                    <div class="live_user_dt">
                                        <div class="user_cntnt">
                                            <h4>Titre du cours</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="live1452">
                                <iframe src="https://www.youtube.com/embed/EEIk7gwjgIM?autoplay=1"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="_215b17">
                            <div class="course_tab_content">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                                        <div class="_htg451">
                                            
                                            <div class="_htg452 mt-35">
                                                <h3>Description</h3>
                                                <span class="_abc123">Just updated to include Bootstrap 4.1.3!</span>
                                                <p>Hi! Welcome to the Web Developer Bootcamp, the <strong>only course you
                                                        need to learn web development</strong>. There are a lot of options
                                                    for online developer training, but this course is without a doubt the
                                                    most comprehensive and effective on the market. Here's why:</p>
                                                <ul class="_abc124">
                                                    <li><span class="_5f7g11">This is the only online course taught by a
                                                            professional bootcamp instructor.</span></li>
                                                    <li><span class="_5f7g11">94% of my in-person bootcamp students go on to
                                                            get full-time developer jobs. Most of them are complete
                                                            beginners when I start working with them.</span></li>
                                                    <li><span class="_5f7g11">The previous 2 bootcamp programs that I taught
                                                            cost $14,000 and $21,000. This course is just as comprehensive
                                                            but with brand new content for a fraction of the price.</span>
                                                    </li>
                                                    <li><span class="_5f7g11">Everything I cover is up-to-date and relevant
                                                            to today's developer industry. No PHP or other dated
                                                            technologies. This course does not cut any corners.</span></li>
                                                    <li><span class="_5f7g11">This is the only complete beginner full-stack
                                                            developer course that covers NodeJS.</span></li>
                                                    <li><span class="_5f7g11">We build 13+ projects, including a gigantic
                                                            production application called YelpCamp. No other course walks
                                                            you through the creation of such a substantial
                                                            application.</span></li>
                                                    <li><span class="_5f7g11">The course is constantly updated with new
                                                            content, projects, and modules. Think of it as a subscription to
                                                            a never-ending supply of developer training.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" style="background-color: #fff ;">
                        <div class="course_tab_content">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-courses" role="tabpanel">
                                    <div class="crse_content">
                                        <h3>Le contenu des cours</h3>
                                        <div class="_112456">
                                            <ul class="accordion-expand-holder">
                                                <li><span class="accordion-expand-all _d1452">développer tout</span></li>
                                                <li><span class="_fgr123">47:06:29</span></li>
                                            </ul>
                                        </div>
                                        <div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to this
                                                            Course</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">22:08</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">A Note On Asking For Help</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introducing Our TA</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Join the Online Community</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:51</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Why This Course?</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:48</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file-download-alt icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Syllabus Download</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">2 pages</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Syllabus Walkthrough</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Lecture Slides</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to Front End
                                                            Development</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">27:26</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Setting Up Front-End Developer
                                                                Environment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Setting Up Front-End Developer
                                                                Environment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Introduction to the Web</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to the Web</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10.08</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Front End Holy Trinity</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:46</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to HTML</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">58:55</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Basicsng Up Front-End Developer
                                                                Environment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:53</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Introduction to MDN</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to MDN</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:51</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Boilerplate and Comments</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Basic Tags</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists Assignment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Lists Assignment: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:59</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Divs and Spans</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Attributes</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Recreate Webpage Assignment</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Recreate Webpage Assignment: SOLUTION
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Intermediate HTML</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">01.12:29</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">HTML Tables</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:03</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Tables Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:18</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to Forms</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Playing with Inputs</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:04</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Form Tag</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:36</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Labels</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Form Validations</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Dropdowns and Radio Buttons</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:19</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Form Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:23</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to CSS</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">01.40:15</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02.28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Basics</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:25</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Our First Stylesheet</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:18</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about CSS Colors and Background and
                                                                Border (next 2 lectures)</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Colors</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:35</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Background and Border</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:58</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Selectors Basics Todo List
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:32</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Basics Todo List</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to Chrome Inspector</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">More Advanced Selectors</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Specificity and the Cascade
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Specificity and the Cascade</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Selectors Practice Exercise
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Practice Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Selectors Practice Exercise: SOLUTION
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">16:48</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Intermediate CSS</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">01.26:40</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Text and Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">More Text and Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:42</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Using Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:35</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Introduction to the Box Model</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:58</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Tic Tac Toe Board</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Tic Tac Toe Board: SOLUTION
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Image Gallery Code Along Pt. 1
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Image Gallery Code Along Pt. 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about changes to Google Fonts</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Image Gallery Code Along Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:46</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise Intro
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION
                                                                Pt. 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:38</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION
                                                                Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">CSS Blog From Scratch Exercise SOLUTION
                                                                Pt. 3</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:28</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Bootstrap</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">01.59:54</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02.28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Bootstrap versions</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">What is Bootstrap?</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:02</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Adding Bootstrap to a Project</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Forms and Inputs</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:00</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Nav Bars</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">15:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about The Grid System</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:11</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Grid System</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Grid System Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:43</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Bootstrap Image Gallery Pt. 1
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap Image Gallery Pt. 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Font Awesome</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:16</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap Image Gallery Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:46</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Startup Landing Page Code
                                                                Along</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">14:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Creating a Startup Landing Page Code
                                                                Along Pt. 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about making bootstrap responsive on
                                                                mobile devices</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:14</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Bootstrap 4!</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">01.16:28
                                                    </span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">A History of Bootstrap 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04.40</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Bootstrap 4 Documentation</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:24</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Changes from Bootstrap 3 to 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:52</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4 Code/Solutions Download</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Getting Started With Bootstrap 4</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4 Colors and Backgrounds</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:59</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Typography</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">New Fancy Spacing Utilities</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">12:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Responsive Breakpoints</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap4 Navbars</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:20</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The New Display Utility</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:26</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Bootstrap 4: Flexbox and Layout</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">10:14</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Flexbox Utilities Part 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">07:23</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Navs and Flexbox</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">09:56</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Bootstrap 4 Grid</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">08:56</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">PATTERN PROJECT Part 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">12:06</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">PATTERN PROJECT Part 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:30</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The Grid + Flexbox</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">11:44</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Museum of Candy Project Part 1</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:36</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Note about Museum of Candy Project Part 2
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">Introduction to
                                                            JavaScript</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">56:21</span>
                                                </div>
                                            </a>
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Unit Objectives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04.41</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">The JavaScript Console</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Primitives</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">13:22</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Primitives Exercises</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">03:21</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Variables</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">06:15</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Null and Undefined</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">02:33</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Useful Built-In Methods</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">05:12</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Writing JavaScript in a Separate File
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:28</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">JS Stalker Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:55</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">JS Stalker Exercise: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:45</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Age Calculator Exercise</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">01:10</span>
                                                    </div>
                                                </div>
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-play-circle icon_142'></i>
                                                        <div class="top">
                                                            <div class="title">Age Calculator Exercise: SOLUTION</div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">04:01</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn1458" href="#">20 More Sections</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
    <script src="{{ asset('assets/js/vertical-responsive-menu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendorbootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendorOwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/vendorsemantic/semantic.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/night-mode.js') }}"></script>
</body>

<!-- Copyright  live_output.html Nachd IT 13:31:41 GMT -->

</html>