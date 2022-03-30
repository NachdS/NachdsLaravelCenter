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

        @if(@$detailvideo_Pubs->count() > 0)
        @foreach ($detailvideo_Pubs as $video )

        <div class="col-xl-12 col-lg-12 mt-50 mb-50">

            <div class="section3125">
                <div class="user_dt5">
                    <div class="user_dt_left">
                        <div class="live_user_dt">
                            <div class="user_cntnt">
                                <h4>{{$video -> designation}}</h4>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="live1452"> 
                      <iframe src="{{ asset(@$video->file) }}"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen ></iframe>
                 </div> 


            </div>
            <div class="_215b17">
              <div class="course_tab_content">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                        <div class="_htg451">
                            
                            <div class="_htg452 mt-35">
                                <h3>Description</h3>
                                <span class="_abc123"></span>
                                <p>{{$video -> description}}</p>
                            </div>
                        </div>
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

    @endsection
      