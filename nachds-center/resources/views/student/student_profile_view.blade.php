


 @extends('student.layout_public_student_interface')
 @section('content_public_student_interface') 


    <div class="wrapper _bg4586">
        <div class="_216b01">
            <div class="container-fluid">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <div class="section3125 rpt145 profile-section">
                            <div class="row">
                                <div class="col-lg-7">
                                    <a href="#" class="_216b22">
                                        <span><i class="uil uil-cog"></i></span>Setting
                                    </a>
                                    <div class="dp_dt150">
                                        <div class="img148">
                                            <img src="{{ asset('assets/images/hd_dp.jpg') }}" alt="">
                                        </div>
                                        <div class="prfledt1">
                                            <h2>Joginder Singh</h2>
                                            <span>UI / UX Designer and Web Developer</span>
                                        </div>
                                    </div>
                                    <ul class="_ttl120">
                                        <li>
                                            <div class="_ttl121">
                                                <div class="_ttl122">Groupe</div>
                                                <div class="_ttl123">Nom de son grp</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="_ttl121">
                                                <div class="_ttl122">Session</div>
                                                <div class="_ttl123">Nom du session</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="_ttl121">
                                                <div class="_ttl122">Nombre de cours</div>
                                                <div class="_ttl123">11</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <ul class="_bty149">
                                        <li><button class="msg125 btn500"
                                                onclick="window.location.href = 'setting.html';">Edit</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_215b15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="course_tabs">
                            <nav>
                                <div class="nav nav-tabs tab_crse" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab"
                                        href="#nav-about" role="tab" aria-selected="true">About</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_215b17">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="course_tab_content">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                                    <div class="_htg451">
                                        <div class="_htg452">
                                            <h3>À propos de moi</h3>
                                                <ul class="list-group">
                                                    <li class="list-group-item" style="background-color: #fff"><span><strong>Nom :</strong></span> <span>Nom Value</span></li>
                                                    <li class="list-group-item" style="background-color: #ffecec"><span><strong>Prenom :</strong></span> <span>Prenom Value</span></li>
                                                    <li class="list-group-item" style="background-color: #fff"><span><strong>Sexe :</strong></span> <span>Sexe Value</span></li>
                                                    <li class="list-group-item" style="background-color: #ffecec"><span><strong>Adress :</strong></span> <span>Adress Value</span></li>
                                                    <li class="list-group-item" style="background-color: #fff"><span><strong>Télèphone :</strong></span> <span>Télèphone Value</span></li>
                                                    <li class="list-group-item" style="background-color: #ffecec"><span><strong>Email :</strong></span> <span>Email Value</span></li>
                                                    <li class="list-group-item" style="background-color: #fff"><span><strong>Cin </strong></span> <span>Cin Value</span></li>
                                                    <li class="list-group-item" style="background-color: #ffecec"><span><strong>Spécialité :</strong></span> <span>Spécialité Value</span></li>
                                                    
                                                  </ul>
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
    @endsection
    