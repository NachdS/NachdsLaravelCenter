
    @extends('student.layout_public_student_interface')
    @section('content_public_student_interface') 

    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="section3125">
                            <div class="user_dt5">
                                <div class="user_dt_left">
                                    <div class="live_user_dt">
                                        @foreach ($cours as $cour) 
                                        <div class="user_cntnt">
                                            <h4>{{$cour->designation}}</h4>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="live1452">
                                <iframe id="video1" frameborder="0" 
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
                                                <span class="_abc123">{{-- {{$cour->description}} --}}
                                                </p>
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
                                        @foreach ($cours as $cour) 
                                        <div id="accordion" class="ui-accordion ui-widget ui-helper-reset">
                                            <a href="javascript:void(0)"
                                                class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                <div class="section-header-left">
                                                    <span class="section-title-wrapper">
                                                        <i class='uil uil-presentation-play crse_icon'></i>
                                                        <span class="section-title-text">{{$cour->designation}}</span>
                                                    </span>
                                                </div>
                                                <div class="section-header-right">
                                                    <span class="section-header-length">22:08</span>
                                                </div>
                                            </a>
                                             
                                            <div
                                                class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                                                @foreach (@$cour->chapitres as $chap) 
                                                <div class="lecture-container">
                                                    <div class="left-content">
                                                        <i class='uil uil-file icon_142'></i>
                                                        <div class="top">
                                                            <div class="title"> <a href="#"  id="playvideo" onclick="playme('<?php echo($chap->files) ; ?>')">{{ @$chap->designation}} </a></div>
                                                        </div>
                                                    </div>
                                                    <div class="details">
                                                        <span class="content-summary">00:12</span>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endforeach
                                        <!--<a class="btn1458" href="#">20 More Sections</a>-->
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

