{{-- start top_header --}}
{{-- @include("top_header") --}}
{{-- end top_header --}}

@extends('public_interface.layout_public_interface')
@section('content_public')
    <div class="wrapper _bg4586 _new89">
        <div class="_215cd2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="back_link">
                            <a href="{{ url('/index') }}" class="hde151">Retour Vers Accueil</a>
                        </div>
                        <div class="course_tabs margin-top-tabs">
                            <nav>
                                <div class="nav nav-tabs tab_crse  justify-content-center">
                                    <a class="nav-item nav-link active" href="{{ url('/about_us') }}">A propos de nous</a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>Améliorer des vies grâce à l'apprentissage</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="index-content">

            <div class="mt-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mt-50 mb-50">
                            <div class="title484">
                                <h2>Nos objectifs</h2>
                                <img class="line-title" src="{{ asset('assets/images/line.svg') }}" alt="">
                                <p>{{ @$allaboutUs->short_presentation }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-50 mb-50">
                            <div class="story125">
                                <img src="{{ asset('assets/images/about/company.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            @include('global_common/bloc_menuicon')
                        </div>
                    </div>
                </div>
            </div>
            <div class="" style="background-color: #a7a5a214;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title589 text-center">
                                <h2>Notre achievement </h2>
                                <p>Cursus est le leader de l'enseignement et de l'apprentissage, connectant des centaines
                                    d'élèves aux compétences dont ils ont besoin pour réussir.</p>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 mb-50 col-sm-6">
                            <div class="p__metric">
                                {{ @$totalEnseignants }}
                                <span>Professeurs</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-50 col-sm-6">
                            <div class="p__metric">
                                {{ @$totalStudents }}
                                <span>Elèves</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-50 col-sm-6">
                            <div class="p__metric">
                                {{ @$totalCours }}
                                <span>Cours</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-50 col-sm-6">
                            <div class="p__metric">
                                {{ @$totalInscription }}
                                <span>Inscriptions</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-50 col-sm-6">
                            <div class="p__metric">
                                {{ @$totalFormations }}
                                <span>Formations</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-50 col-sm-6">
                            <div class="p__metric">
                                {{ @$totalPartenaires }}
                                <span>Partenaires d'adhésion</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="mb-50" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mt-50">
                            <div class="story125">
                                <img src="{{ asset('assets/images/about/stroy_img.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 mt-50">
                            <div class="title478">
                                <h2>Notre équipe</h2>
                                <img class="line-title" src="{{ asset('assets/images/line.svg') }}" alt="">
                                <p>
                                <p>{{ @$allaboutUs->presentation }}</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="sa4d25" style="padding-bottom: 5%;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title589 text-center">
                                <h2>Notre bureau</h2>
                                <p>Cursus branches around the world</p>
                                <img class="line-title" src="{{ asset('assets/images/line.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="branches_all mb-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="blogbg_1 mt-30">
                                    <a href="#" class="cpy_img">
                                        <img src="{{ asset('assets/images/about/company-1.jpg') }}" alt="">
                                        <div class="course-overlay"></div>
                                    </a>
                                    <div class="cpy_content">
                                        <a href="#" class="cmpy14s title900">Punjab, India</a>
                                        <p class="blog_des">
                                            #1235 Sks Nagar St No. 8 Phase 3, Pakhowal Road, 141001, LDH, Punjab, India<br>
                                            <a href="#" class="cmpylink"><i class="uil uil-phone"></i> 0161-1234567</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="blogbg_1 mt-30">
                                    <a href="#" class="cpy_img">
                                        <img src="{{ asset('assets/images/about/company-2.jpg') }}" alt="">
                                        <div class="course-overlay"></div>
                                    </a>
                                    <div class="cpy_content">
                                        <a href="#" class="cmpy14s title900">San Francisco, CA</a>
                                        <p class="blog_des">
                                            586 Lorem st. 5 floor,<br> San Francisco, CA 94107<br>
                                            <a href="#" class="cmpylink"><i class="uil uil-phone"></i> +1 415-1234567</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="blogbg_1 mt-30">
                                    <a href="#" class="cpy_img">
                                        <img src="{{ asset('assets/images/about/company-3.jpg') }}" alt="">
                                        <div class="course-overlay"></div>
                                    </a>
                                    <div class="cpy_content">
                                        <a href="#" class="cmpy14s title900">São Paulo, Brazil</a>
                                        <p class="blog_des">
                                            Lorem ipsum 589,<br> Vila Madalena, São Paulo - SP 01443-010<br>
                                            <a href="#" class="cmpylink"><i class="uil uil-phone"></i> +55-11-1234567</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
@endsection
