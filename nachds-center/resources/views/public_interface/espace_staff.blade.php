 @extends('public_interface.layout_public_interface')
 @section('content_public') 

  <div class="wrapper _bg4586 _new89">
        <div class="_215cd2" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="back_link">
                            <a href="{{url('/index')}}" class="hde151">Retour Vers Accueil</a>
                        </div>
                        <div class="course_tabs margin-top-tabs">
                            <nav>
                                <div class="nav nav-tabs tab_crse  justify-content-center">
                                    <a class="nav-item nav-link active" href="about_us.html">Espace Staff</a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>Découvrir l'identité et les talents de l'entreprise</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="index-content ">
        <div class="sa4d25 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                      @include('global_common/bloc_menuicon')
                        <div class="title589 text-center">
                            <h2>Rencontrez notre équipe</h2>
                            <p>Le mélange parfait de professionnels du monde de l'éducation. La meilleure formule pour apprendre et progresser dans un environnement adapté !</p>
                            <img class="line-title" src="{{ asset('assets/images/line.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="jmio125">
                            <p>Morbi eget elit eget turpis varius mollis eget vel massa. Donec porttitor, sapien eget
                                commodo vulputate, erat felis aliquam dolor, non condimentum libero dolor vel ipsum. Sed
                                porttitor nisi eget nulla ullamcorper eleifend. Fusce tristique sapien nisi, vel feugiat
                                neque luctus sit amet. Quisque consequat quis turpis in mattis. Maecenas eget mollis
                                nisl. Cras porta dapibus est, quis malesuada ex iaculis at. Vestibulum egestas tortor in
                                urna tempor, in fermentum lectus bibendum. In leo leo, bibendum at pharetra at,
                                tincidunt in nulla. In vel malesuada nulla, sed tincidunt neque. Phasellus at massa vel
                                sem aliquet sodales non in magna. Ut tempus ipsum sagittis neque cursus euismod. Vivamus
                                luctus elementum tortor, ac aliquet dolor vehicula et.</p>
                            <a href="{{url('/sign_up_steps')}}" class="crer_btn_link">rejoins l'équipe</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="jmio125">
                            <img src="{{ asset('assets/images/about/team.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="sa4d25 mt-50" >
         <div class="container">
           <div class="owl-carousel top_instrutors owl-theme">
            <div class="item">
              <div class="fcrse_1 mb-20">
                <div class="tutor_img">
                  <a href="instructor_profile_view.html"
                    ><img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="tutor_content_dt">
                  <div class="tutor150">
                    <a
                      href="instructor_profile_view.html"
                      class="tutor_name"
                      >John Doe</a
                    >
                    <div class="mef78" title="Verify">
                      <i class="uil uil-check-circle"></i>
                    </div>
                  </div>
                  <div class="tutor_cate">
                    Wordpress &amp; Plugin Tutor
                  </div>
                  <ul class="tutor_social_links">
                    <li>
                      <a href="#" class="fb"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tw"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="ln"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="yu"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <div class="tut1250">
                    <span class="vdt15">100K Students</span>
                    <span class="vdt15">15 Courses</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="fcrse_1 mb-20">
                <div class="tutor_img">
                  <a href="instructor_profile_view.html"
                    ><img src="{{ asset('assets/images/left-imgs/img-2.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="tutor_content_dt">
                  <div class="tutor150">
                    <a
                      href="instructor_profile_view.html"
                      class="tutor_name"
                      >Kerstin Cable</a
                    >
                    <div class="mef78" title="Verify">
                      <i class="uil uil-check-circle"></i>
                    </div>
                  </div>
                  <div class="tutor_cate">
                    Language Learning Coach, Writer, Online Tutor
                  </div>
                  <ul class="tutor_social_links">
                    <li>
                      <a href="#" class="fb"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tw"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="ln"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="yu"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <div class="tut1250">
                    <span class="vdt15">14K Students</span>
                    <span class="vdt15">11 Courses</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="fcrse_1 mb-20">
                <div class="tutor_img">
                  <a href="instructor_profile_view.html"
                    ><img src="{{ asset('assets/images/left-imgs/img-3.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="tutor_content_dt">
                  <div class="tutor150">
                    <a
                      href="instructor_profile_view.html"
                      class="tutor_name"
                      >Jose Portilla</a
                    >
                    <div class="mef78" title="Verify">
                      <i class="uil uil-check-circle"></i>
                    </div>
                  </div>
                  <div class="tutor_cate">
                    Head of Data Science, Pierian Data Inc.
                  </div>
                  <ul class="tutor_social_links">
                    <li>
                      <a href="#" class="fb"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tw"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="ln"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="yu"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <div class="tut1250">
                    <span class="vdt15">1M Students</span>
                    <span class="vdt15">25 Courses</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="fcrse_1 mb-20">
                <div class="tutor_img">
                  <a href="instructor_profile_view.html"
                    ><img src="{{ asset('assets/images/left-imgs/img-4.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="tutor_content_dt">
                  <div class="tutor150">
                    <a
                      href="instructor_profile_view.html"
                      class="tutor_name"
                      >Farhat Amin</a
                    >
                    <div class="mef78" title="Verify">
                      <i class="uil uil-check-circle"></i>
                    </div>
                  </div>
                  <div class="tutor_cate">Cookery Coach</div>
                  <ul class="tutor_social_links">
                    <li>
                      <a href="#" class="fb"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tw"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="ln"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="yu"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <div class="tut1250">
                    <span class="vdt15">1.5K Students</span>
                    <span class="vdt15">9 Courses</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="fcrse_1 mb-20">
                <div class="tutor_img">
                  <a href="instructor_profile_view.html"
                    ><img src="{{ asset('assets/images/left-imgs/img-5.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="tutor_content_dt">
                  <div class="tutor150">
                    <a
                      href="instructor_profile_view.html"
                      class="tutor_name"
                      >Kyle Pew</a
                    >
                    <div class="mef78" title="Verify">
                      <i class="uil uil-check-circle"></i>
                    </div>
                  </div>
                  <div class="tutor_cate">
                    Microsoft Certified Trainer - 380,000+ Udemy
                    Students
                  </div>
                  <ul class="tutor_social_links">
                    <li>
                      <a href="#" class="fb"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tw"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="ln"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="yu"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <div class="tut1250">
                    <span class="vdt15">300K Students</span>
                    <span class="vdt15">18 Courses</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="fcrse_1 mb-20">
                <div class="tutor_img">
                  <a href="instructor_profile_view.html"
                    ><img src="{{ asset('assets/images/left-imgs/img-7.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="tutor_content_dt">
                  <div class="tutor150">
                    <a
                      href="instructor_profile_view.html"
                      class="tutor_name"
                      >Jaysen Batchelor</a
                    >
                    <div class="mef78" title="Verify">
                      <i class="uil uil-check-circle"></i>
                    </div>
                  </div>
                  <div class="tutor_cate">
                    Illustrator &amp; Designer
                  </div>
                  <ul class="tutor_social_links">
                    <li>
                      <a href="#" class="fb"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tw"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="ln"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="yu"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <div class="tut1250">
                    <span class="vdt15">491K Students</span>
                    <span class="vdt15">13 Courses</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="fcrse_1 mb-20">
                <div class="tutor_img">
                  <a href="instructor_profile_view.html"
                    ><img src="{{ asset('assets/images/left-imgs/img-8.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="tutor_content_dt">
                  <div class="tutor150">
                    <a
                      href="instructor_profile_view.html"
                      class="tutor_name"
                      >Quinton Batchelor</a
                    >
                    <div class="mef78" title="Verify">
                      <i class="uil uil-check-circle"></i>
                    </div>
                  </div>
                  <div class="tutor_cate">
                    Photographer & Instructor
                  </div>
                  <ul class="tutor_social_links">
                    <li>
                      <a href="#" class="fb"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tw"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="ln"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="yu"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <div class="tut1250">
                    <span class="vdt15">364K Students</span>
                    <span class="vdt15">6 Courses</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="fcrse_1 mb-20">
                <div class="tutor_img">
                  <a href="instructor_profile_view.html"
                    ><img src="{{ asset('assets/images/left-imgs/img-6.jpg') }}" alt=""
                  /></a>
                </div>
                <div class="tutor_content_dt">
                  <div class="tutor150">
                    <a
                      href="instructor_profile_view.html"
                      class="tutor_name"
                      >Eli Natoli</a
                    >
                    <div class="mef78" title="Verify">
                      <i class="uil uil-check-circle"></i>
                    </div>
                  </div>
                  <div class="tutor_cate">
                    Entrepreneur - Passionate Teacher
                  </div>
                  <ul class="tutor_social_links">
                    <li>
                      <a href="#" class="fb"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="tw"
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="ln"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#" class="yu"
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                  </ul>
                  <div class="tut1250">
                    <span class="vdt15">615K Students</span>
                    <span class="vdt15">12 Courses</span>
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
