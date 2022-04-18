
    @extends('student.layout_public_student_interface')
    @section('content_public_student_interface') 

    <div class="wrapper _bg4586 _new89">
        <div class="_215b15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title125">
                            <div class="titleleft">
                                <div class="ttl121">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Search Results</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="titleright">
                                <div class="explore_search">
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh15">
                                            <input class="prompt srch_explore" type="text" placeholder="Search">
                                            <i class="uil uil-search-alt icon icon2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title126">
                            <h2>Search Results</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sa4d25 mb4d25 margin-search">
            <div class="container-fluid col-lg-9">
                <div class="row justify-content-between">
                     <div class="col-lg-3 col-md-4">
                        <div class="section3125 hstry142">
                            <div class="result_stitles">
                                <div class="rs6t_title">Filters</div>
                            </div>
                            @if(count($allformations)!="0")

                            <div class="col-lg-3 col-md-4">
                            <select id="grpID">
                               <option value="">Select a groupe</option>
                               @foreach(App\Models\Groupe::all() as $grp)
                               <option class="option" value="{{$grp->id}}">{{$grp->designation}}</option>
                               @endforeach
                            </select>
                          </div>

                          <div class="col-lg-3 col-md-4">
                            <select id="matID">
                              <option value="">Select Matiere</option>
                              @foreach(App\Models\Matiere::all() as $mat)
                              <option class="option" value="{{$mat->id}}">{{$mat->designation}}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="col-lg-3 col-md-4">
                            <div class="row">
                              <div class="col-sm-4 pull-right">
                                <button id="findBtn" class="btn btn-success">Find</button>
                              </div>
                              <div class="styleNm"></div>
                            </div>
                          </div>

                            @endif
                        </div>
                    </div> 

                    
                    
                 
                



                    <div class="col-lg-9 col-md-8" id="formationsData">
                        <div class="_14d25 mb-20">
                            <div class="row">
                                <div class="col-md-12 ">

                                    @if(@$allformations)
                                    @foreach (@$allformations as $formation )

                                    <div class="fcrse_1 mb-20">
                                        <a href="{{route('student_course_detail' , ['groupe_id' => @$formation->groupe_id])}}" class="hf_img">
                                            <img  src="{{ asset(@$formation->image) }}"  alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">{{@$formation->matiere}}</div>
                                                <!--<div class="crse_revues">
                                                    <i class="uil uil-star"></i>4.5
                                                </div>-->
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    {{@$formation->duree}} jours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="hs_content">
                                            <!--<div class="vdtodt">
                                                <span class="vdt14">{{\Carbon\Carbon::parse(@$formation->created_at)->format('j F')}}</span>
                                            </div>-->
                                            <a class="crse14s title900">{{@$formation->designation}}-{{$formation->groupe}}</a>
                                            <!--<a href="#" class="crse-cate"></a>-->
                                            <p class="cr1fot">{{@$formation->type}}</p>
                                            <div class="auth1lnkprce">
                                                <!--<p class="cr1fot">Par M.<a href="#">John Doe</a></p>-->
                                                <div class="prce142">{{@$formation->prix_acompte}} / {{@$formation->prix_total}}DT</div>
                                                <!--<button class="shrt-cart-btn" title="cart"><i
                                                        class="uil uil-shopping-cart-alt"></i></button>-->
                                                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class='mt-10 mb-10' style="float: right;">
                                        {{ $allformations->links() }} 
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
