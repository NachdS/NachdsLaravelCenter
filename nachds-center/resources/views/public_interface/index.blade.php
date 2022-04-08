 @extends('public_interface.layout_public_interface')

 @section('content_public') 
    <div class="">
      <!--Carousel Wrapper-->
      <div
        id="video-carousel-example2"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <!--Indicators-->
        <ol class="carousel-indicators">
          <li
            data-target="#video-carousel-example2"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#video-carousel-example2" data-slide-to="1"></li>
          <li data-target="#video-carousel-example2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
          <!-- First slide -->
          @if(@$allsliders)
          @foreach (@$allsliders as $slider )
          <div class="carousel-item active">
            <!--Mask color-->
            <div class="view">
              <!--Video source-->
              <video class="video-fluid" autoplay loop muted>
                <source
                src="{{ asset(@$slider->photo) }}"
                  type="video/mp4"
                />
              </video>
              <div class="mask rgba-indigo-light"></div>
            </div>

            <!--Caption-->
            <div class="carousel-caption">
              <div class="animated fadeInDown">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
              </div>
            </div>
            <!--Caption-->
          </div>
          @endforeach
          @endif
          <!-- /.First slide -->

        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a
          class="carousel-control-prev"
          href="#video-carousel-example2"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#video-carousel-example2"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
      </div>
      <!--Carousel Wrapper-->

      <!-- </div>
            </div>
        </div> -->
    </div>

    <div class="index-content">
      <div class="sa4d25">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-8">
              @include('global_common/bloc_menuicon')

              <div class="section3125 mt-30">
                <h4 class="item_title">Video</h4>
                <!--<a href="#" class="see150">Voir tout</a>-->
                <div class="la5lo1">
                  <div class="owl-carousel featured_courses owl-theme">
                    

                    @if(@$allvideo_Pubs)
                      @foreach (@$allvideo_Pubs as $video )
                        <div class="item">
                          <div class="fcrse_1 mb-20">
                              <a href="{{route('video_pub_detail' , ['id' => @$video->id])}}"  class="fcrse_img">
                              <video style="width:338px !important; heigth:150px !important;"  class="video-fluid" autoplay loop muted>
                                <source
                                src="{{ asset(@$video->file) }}"
                                  type="video/mp4"
                                />
                              </video>
                              <div class="course-overlay">
                                <span class="play_btn1">
                                  <i class="uil uil-play"></i></span>
                              </div>
                            </a>
                            <div class="fcrse_content">
                              <div class="vdtodt">
                                <!--<span class="vdt14">15 vues</span>-->
                                <span class="vdt14">{{\Carbon\Carbon::parse(@$video->created_at)->format('j F')}}</span>
                              </div>
                              <a href="course_detail_view.html" class="crse14s"
                                >{{@$video -> designation}}</a> 

                            </div>
                          </div> 
                        </div>
                      @endforeach
                   @endif


                  </div>
                </div>
              </div>
              <div class="section3125 carousel-section mt-50">
                <h4 class="item_title">Nos instructeurs populaires</h4>
                <!--<a href="all_instructor.html" class="see150">Voir tout</a>-->
                <div class="la5lo1">
                  <div class="owl-carousel top_instrutors owl-theme">
                    
                  @if(@$allenseignants)
                    @foreach (@$allenseignants as $enseignant )

                        <div class="item">
                          <div class="fcrse_1 mb-20">
                            <div class="tutor_img">
                              <a href="instructor_profile_view.html"
                                ><img  src="{{ asset(@$enseignant->avatar) }}" alt=""
                              /></a>
                            </div>
                            <div class="tutor_content_dt">
                              <div class="tutor150">
                                <a
                                  href="instructor_profile_view.html"
                                  class="tutor_name"
                                  >{{@$enseignant -> name}}</a
                                >
                                <div class="mef78" title="Verify">
                                  <i class="uil uil-check-circle"></i>
                                </div>
                              </div>
                              <div class="tutor_cate">
                                {{@$enseignant -> specialite}}
                              </div>
                              <!-- <ul class="tutor_social_links">
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
                              </ul> -->
                            </div>
                          </div>
                        </div>

                      @endforeach
                    @endif 

                  </div>
                </div>
              </div>
              <div class="section3126">
                <div class="row">
                  <div class="col-xl-6 col-lg-12 col-md-6">
                    <div class="value_props">
                      <div class="value_icon">
                        <i class="uil uil-history"></i>
                      </div>
                      <div class="value_content">
                        <h4>{{@$totalCondidats}} élèves en ligne</h4>
                        <p>
                          Apprendre et progresser dans un environnement adapté
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-12 col-md-6">
                    <div class="value_props">
                      <div class="value_icon">
                        <i class="uil uil-user-check"></i>
                      </div>
                      <div class="value_content">
                        <h4>{{@$totalEnseignants}} professeurs experts</h4>
                        <p>Choisissez parmi les meilleurs professeurs du site</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-12 col-md-6">
                    <div class="value_props">
                      <div class="value_icon">
                        <i class="uil uil-play-circle"></i>
                      </div>
                      <div class="value_content">
                        <h4>{{@$totalCours}} Obtenir une meilleure éducation</h4>
                        <p>
                          Trouvez des cours vidéo sur presque tous les matières
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-12 col-md-6">
                    <div class="value_props">
                      <div class="value_icon">
                        <i class="uil uil-presentation-play"></i>
                      </div>
                      <div class="value_content">
                        <h4> {{@$totalFormations}} Formations en ligne</h4>
                        <p>Découvrez une grande variété de formations de haute qualité</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            
            <div class="col-xl-12 col-lg-12 mb-30">
              <div class="section3125 color-section mt-30">
                <h4 class="item_title">Nos Partenaires</h4>
                <div class="la5lo1">
                  <div class="owl-carousel Student_says owl-theme">
                    
                    @if(@$allpartenaires)
                    @foreach (@$allpartenaires as $partenaire )

                    <div class="item">
                      <div class="fcrse_4 mb-20">
                        <div class="say_content">
                          <p>
                            {{@$partenaire -> description}}
                          </p>
                        </div>
                        <div class="st_group">
                          <div class="stud_img">
                            <img src="{{ asset(@$partenaire->logo) }}" alt="" />
                          </div>
                          <h4>{{@$partenaire -> name}}</h4>
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
    </div>
  @endsection
