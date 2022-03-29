
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
                            <a href="{{url('/index')}}" class="hde151">Retour Vers Accueil</a>
                        </div>
                        <div class="course_tabs margin-top-tabs">
                            <nav>
                                <div class="nav nav-tabs tab_crse  justify-content-center">
                                    <a class="nav-item nav-link active" href="{{url('/about_us')}}">A propos de nous</a>
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

        <div class="_215zd5 index-content">
            <div class="container">
            <div class="row">
            <div class="col-md-6">
            <div class="title484">
            <h2>Nos origines</h2>
            <img class="line-title" src="{{ asset('assets/images/line.svg') }}" alt="">
            <p>Cursus was founded in 2020 by computer science instructor with a vision to provide anyone, anywhere with access to the world’s best education. Now many instructors put their courses online for anyone to take and taught more learners in a few months than they could over an entire lifetime in the classroom. Today, Cursus has expanded to reach more than 40 million people and 2,300 businesses around the world. On Cursus you can find online courses, instructors, and certificates from Cursus.</p >
            </div>
            </div>
            <div class="col-md-6">
            <div class="story125">
            <img src="{{ asset('assets/images/about/company.jpg') }}" alt="">
            </div>
            </div>
            </div>
            </div>
            </div>

            <div class="sa4d25 mt-50 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('global_common/bloc_menuicon')
                        </div>
                    </div>
                </div>
            </div>

        <div class="sa4d25 mb-50  ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title589 text-center">
                            <h2>Notre achievement </h2>
                            <p>Cursus est le leader de l'enseignement et de l'apprentissage, connectant des centaines
                                 d'élèves aux compétences dont ils ont besoin pour réussir.</p>
                            <img class="line-title" src="{{ asset('assets/images/line.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            25k
                            <span>Professeurs</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            25k
                            <span>Elèves</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            95k
                            <span>Cours</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            95k
                            <span>Vidéos</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            40M
                            <span>Inscription au cours</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            595+
                            <span>Partenaires d'adhésion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="index-content ">
        <div class="sa4d25 mb-50 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="title478">
                            <h2>Notre histoire</h2>
                            <img class="line-title" src="{{ asset('assets/images/line.svg') }}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur vel dolor id
                                ultrices. Proin a magna at mi pretium pulvinar in eu enim. Nulla vel lacus lectus. Donec
                                at venenatis augue. Nam vitae purus placerat, hendrerit nisl id, finibus magna. Etiam
                                pharetra gravida ornare. Donec sagittis, ipsum in egestas egestas, dui lorem
                                sollicitudin justo, ut ullamcorper velit neque eu velit. Ut et fringilla elit. Mauris
                                augue augue, auctor a blandit ac, convallis eget neque. Curabitur in ante ante. Nullam
                                laoreet tempus erat at ornare. In nisl nisi, dapibus eget facilisis sit amet, commodo
                                quis nibh.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="story125">
                            <img src="{{ asset('assets/images/about/stroy_img.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
       

            <div class="sa4d25" style="padding-bottom: 5%;">
                <div class="container">
                <div class="row">
                <div class="col-lg-12">
                <div class="title589 text-center">
                <h2>Notre bureau</h2>
                <p>Cursus branches around the world</p >
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
            </div>
   </div>
    @endsection
        

