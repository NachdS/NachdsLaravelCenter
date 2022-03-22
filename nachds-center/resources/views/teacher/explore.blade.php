<!DOCTYPE html>
<html lang="en">

<!-- Copyright  explore.html Nachd IT 13:31:34 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cursus - Explore</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/fav.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
    <link href="{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/vertical-responsive-menu1.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/instructor-dashboard.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/instructor-responsive.css') }}" rel="stylesheet">

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
                    <div class="col-xl-12 col-lg-8">
                        <div class="section3125">
                            <div class="explore_search">
                                <div class="ui search focus">
                                    <div class="ui left icon input swdh11">
                                        <input class="prompt srch_explore" type="text"
                                            placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                                        <i class="uil uil-search-alt icon icon2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="section3125 mb-15 mt-50">
                            <h4 class="item_title">Live Streams</h4>
                            <a href="live_streams.html" class="see150">See all</a>
                            <div class="la5lo1">
                                <div class="owl-carousel live_stream owl-theme">
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt="">
                                                <h4>John Doe</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-2.jpg') }}" alt="">
                                                <h4>Jassica</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-9.jpg') }}" alt="">
                                                <h4>Edututs+</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-3.jpg') }}" alt="">
                                                <h4>Joginder Singh</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-4.jpg') }}" alt="">
                                                <h4>Zoena</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-5.jpg') }}" alt="">
                                                <h4>Albert Dua</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-6.jpg') }}" alt="">
                                                <h4>Ridhima</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-7.jpg') }}" alt="">
                                                <h4>Amritpal</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="stream_1">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-8.jpg') }}" alt="">
                                                <h4>Jimmy</h4>
                                                <p>live<span></span></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="_14d25">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{ asset('assets/images/courses/img-1.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">Complete Python Bootcamp:
                                                Go from zero to hero in Python 3</a>
                                            <a href="#" class="crse-cate">Web Development | Python</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">John Doe</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{ asset('assets/images/courses/img-2.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    28 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">5M views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete JavaScript
                                                Course 2020: Build Real Projects!</a>
                                            <a href="#" class="crse-cate">Development | JavaScript</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Jassica William</a></p>
                                                <div class="prce142">$5</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{ asset('assets/images/courses/img-20.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    21 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">200 Views</span>
                                                <span class="vdt14">4 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">WordPress Development -
                                                Themes, Plugins &amp; Gutenberg</a>
                                            <a href="#" class="crse-cate">Design | Wordpress</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Joy Dua</a></p>
                                                <div class="prce142">$14</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{ asset('assets/images/courses/img-4.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    1 hour
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">153k views</span>
                                                <span class="vdt14">3 months ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete Digital
                                                Marketing Course - 12 Courses in 1</a>
                                            <a href="#" class="crse-cate">Digital Marketing | Marketing</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Poonam Verma</a></p>
                                                <div class="prce142">$12</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{ asset('assets/images/courses/img-13.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    30 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">20 Views</span>
                                                <span class="vdt14">1 day ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">The Complete Node.js
                                                Developer Course (3rd Edition)</a>
                                            <a href="#" class="crse-cate">Development | Node.js</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">John Doe</a></p>
                                                <div class="prce142">$3</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{ asset('assets/images/courses/img-7.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>5.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    5.4 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">109k views</span>
                                                <span class="vdt14">15 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">WordPress for Beginners:
                                                Create a Website Step by Step</a>
                                            <a href="#" class="crse-cate">Design | Wordpress</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Sabnam SIngh</a></p>
                                                <div class="prce142">$18</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="{{ asset('assets/images/courses/img-8.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Bestseller</div>
                                                <div class="crse_reviews">
                                                    <i class="uil uil-star"></i>4.0
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    23 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">196k views</span>
                                                <span class="vdt14">1 month ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">CSS - The Complete Guide
                                                2020 (incl. Flexbox, Grid &amp; Sass)</a>
                                            <a href="#" class="crse-cate">Design | CSS</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Jashanpreet Singh</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="fcrse_1 mt-30">
                                        <a href="#" class="fcrse_img">
                                            <img src="{{ asset('assets/images/courses/img-16.jpg') }}" alt="">
                                            <div class="course-overlay">
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    22 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class='uil uil-ban'></i>Not Interested</span>
                                                    <span><i class="uil uil-windsock"></i>Report</span>
                                                </div>
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">11 Views</span>
                                                <span class="vdt14">5 Days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">Vue JS 2 - The Complete
                                                Guide (incl. Vue Router &amp; Vuex)</a>
                                            <a href="#" class="crse-cate">Development | Vue JS</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Manreet Kaur</a></p>
                                                <div class="prce142">$10</div>
                                                <button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
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
                            <a href="#" class="btn1542">Teach on Cursus</a>
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
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/night-mode.js') }}"></script>
</body>

<!-- Copyright  explore.html Nachd IT 13:31:34 GMT -->

</html>