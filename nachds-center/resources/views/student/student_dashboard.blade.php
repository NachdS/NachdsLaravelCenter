@extends('student.layout_public_student_interface')
@section('content_public_student_interface')


    <!--<div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
    <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
    @endif

                        {{ __('Hello élève, You are logged in!') }}
                    </div>
                </div>
        </div>-->

    <div class="wrapper" style="min-height: 650px;">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-apps"></i> Tableau de bord d'élève</h2>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Session</h5>
                                <h2>{{ @$session->designation }}</h2>
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
                                <h2>{{ @$totalCours }} Cours</h2>
                            </div>
                            <div class="card_dash_right">
                                <img src="{{ asset('assets/images/dashboard/online-course.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card_dash">
                            <div class="card_dash_left">
                                <h5>Mes Groupe</h5>
                                <div class="">
                                @if (@$groupe)
                                @foreach (@$groupe as $grp)
                                    <h3>{{ @$grp->designation }}</h3>
                                @endforeach
                                @endif
                            </div>
                            </div>
                            <div class="card_dash_right">
                                <img src="{{ asset('assets/images/dashboard/knowledge.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="card_dash1">
                            <div class="card_dash_left1">
                                <i class="uil uil-book-alt"></i>
                                <h1>Consulter mes cours</h1>
                            </div>
                            <div class="card_dash_right1">
                                <button class="create_btn_dash"
                                    onclick="window.location.href = 'create_new_course.html';">Mes cours</button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="_14d25">
                            <div class="row mb-50">
                                @if (@$formation)
                                    @foreach (@$formation as $form)
                                        <div class="col-lg-3 col-md-4">
                                            <div class="fcrse_1 mt-30">
                                                <a class="fcrse_img">
                                                    <img src="{{ asset(@$form->image) }}" alt="">
                                                    <div class="course-overlay">
                                                        <div class="badge_seller">{{ @$form->matiere }}</div>
                                                        <!-- <div class="crse_reviews">
                                                            <i class="uil uil-star"></i>top
                                                        </div> -->
                                                        <div class="crse_timer">
                                                            {{ @$form->duree }} Jours
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="fcrse_content">
                                                    <div class="vdtodt">
                                                        <span class="vdt14">{{ \Carbon\Carbon::parse(@$form->created_at)->format('j F, Y') }}</span>
                                                      
                                                    </div>
                                                    <a href="{{ url('/student_course_detail') }}"
                                                        class="crse14s">{{ @$form->nivdesignation }}-{{ $form->grpdesignation }}</a>
                                                    <!-- <a href="#" class="crse-cate">{{ @$form->matiere }}</a> -->
                                                    <div class="auth1lnkprce">
                                                       <!--  <p class="cr1fot">By <a href="#">John Doe</a></p> -->
                                                        <div class="prce142">{{ @$form->prix1 }}dt</div>
                                                        <!-- <button class="shrt-cart-btn" title="cart"><i
                                                                class="uil uil-shopping-cart-alt"></i></button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
