@extends('teacher.layout_public_teacher_interface')
@section('content_public_teacher_interface')
    <!--<div class="card">
        <div class="card-body">
           {{-- @if (session('status')) --}}
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            {{-- @endif --}}

            {{-- {{ __('Hello professeur, You are logged in!') }} --}}
        </div>
    </div>
    </div>-->



    <div class="wrapper" style="min-height: 650px;">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-apps"></i> Tableau de bord de professeur</h2>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Total des groupes</h5>
                                <h2>{{ @$totalGroupes }}</h2>
                            </div>
                            <div class="card_dash_right">
                                <img src="{{ asset('assets/images/dashboard/graduation-cap.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Total des cours</h5>
                                <h2>{{ @$totalCours }}</h2>
                            </div>
                            <div class="card_dash_right">
                                <img src="{{ asset('assets/images/dashboard/online-course.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Total d'élèves</h5>
                                <h2>{{ @$totalCondidats }}</h2>
                            </div>
                            <div class="card_dash_right">
                                <img src="{{ asset('assets/images/dashboard/knowledge.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card_dash1">
                            <div class="card_dash_left1">
                                <i class="uil uil-book-alt"></i>
                                <h1>Sautez dans la création de cours</h1>
                            </div>
                            <div class="card_dash_right1">
                                <button class="create_btn_dash"
                                    onclick="window.location.href = '{{ url('/create_new_course') }}';">Créez votre
                                    cours</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="_14d25">
                            <div class="row">
                                @foreach ($coursprof as $cour)
                                    <div class="col-lg-3 col-md-4">
                                        <div class="fcrse_1 mt-30">
                                            <a href="{{ url('/student_course_detail') }}" class="fcrse_img">
                                                <img src="{{ asset('assets/images/courses/img-1.jpg') }}" alt="">
                                                <div class="course-overlay">
                                                    <div class="badge_seller">
                                                        {{ \Carbon\Carbon::parse(@$cour->created_at)->format('j F, Y') }}
                                                    </div>
                                                    <!-- <div class="crse_reviews">
                                                        <i class="uil uil-star"></i>4.5
                                                    </div> -->
                                                    <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                    <!-- <div class="crse_timer">
                                                        25 hours
                                                    </div> -->
                                                </div>
                                            </a>
                                            <div class="fcrse_content">
                                                <!--<div class="eps_dots more_dropdown">
                                                    <a href="#"><i class="uil uil-ellipsis-v"></i></a>
                                                    <div class="dropdown-content">
                                                        <span><i class='uil uil-share-alt'></i>Share</span>
                                                        <span><i class="uil uil-heart"></i>Save</span>
                                                        <span><i class='uil uil-ban'></i>Not Interested</span>
                                                        <span><i class="uil uil-windsock"></i>Report</span>
                                                    </div>
                                                </div>-->
                                                <div class="vdtodt">
                                                    <!--<span class="vdt14"></span>
                                                    <span class="vdt14"></span>-->
                                                </div>
                                                <a href="{{ url('/student_course_detail') }}"
                                                    class="crse14s">{{ $cour->designation }}</a>
                                                <a href="#" class="crse-cate">Contient {{ $cour->chapitres->count() }}
                                                    Chapitres</a>
                                                <div class="auth1lnkprce">
                                                    <!--<p class="cr1fot">By <a href="#">John Doe</a></p>
                                                    <div class="prce142">$10</div>
                                                    <button class="shrt-cart-btn" title="cart"><i
                                                            class="uil uil-shopping-cart-alt"></i></button>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!--<div class="col-md-12">
                                        <div class="main-loader mt-50">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                    </div>-->
                            </div>
                            <div class='mt-10 mb-50' style="float: right;">
                                {{ $coursprof->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
