    @extends('public_interface.layout_public_interface')
    @section('content_public') 

        <div class="_215cd2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @include('global_common/bloc_menuicon')
                        <div class="back_link">
                            <a href="{{url('/index')}}" class="hde151">Retour Vers Accueil</a>
                        </div>
                        
                        <div class="course_tabs margin-top-tabs">
                            <nav>
                                <div class="nav nav-tabs tab_crse  justify-content-center">
                                    <a class="nav-item nav-link active" href="{{url('/video_pub_detail')}}"> Video Detail </a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>Nos Videos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
<div class="index-content">
    <div class="sa4d25">
      <div class="container">
       <div class="row">
        <div class="col-xl-12 col-lg-12 mt-50 mb-50">

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
                      <iframe src="{{ asset($event->file) }}"
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
       </div>
      </div>
    </div>
</div>

    @endsection
      