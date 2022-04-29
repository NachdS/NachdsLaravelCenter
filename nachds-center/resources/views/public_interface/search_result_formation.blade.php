 @extends('public_interface.layout_public_interface')
 @section('content_public')

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
                                 <a class="nav-item nav-link active" href="{{ url('/search_result_formation') }}">Nos
                                     Formations</a>
                             </div>
                         </nav>
                     </div>
                     <div class="title129">
                         <h2>S'abonner à une de nos formations variétés</h2>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="sa4d25 mb4d25 index-content" style="margin-top: 0px !important;
            padding-top: 50px;">
         <div class="container ">

             @include('global_common/bloc_menuicon')

             <div class="row justify-content-between ">
                 <div class="col-lg-3 col-md-4">
                    <div class="section3125 hstry142">
                        <div class="result_stitles">
                            <div class="rs6t_title">Filters</div>
                        </div>
                        @if (count($allformations) != '0')
                        <form action="{{ route('search_result_formation_filter') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-12 col-md-4 mt-50">
                                        <select class="form-control" id="grpID2" name="niveau_id">
                                            <option value="">Choisir niveau ...</option>
                                            @foreach (App\Models\Niv::all() as $niv)
                                                <option value="{{ $niv->id }}">
                                                    {{ $niv->designation }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-4" style="margin-top: 5px">
                                        <select class="form-control" class="form-controle" id="matID2" name="matiere_id">
                                            <option value="">Choisir Matière ...</option>
                                            @foreach (App\Models\Matiere::all() as $mat)
                                                <option value="{{ $mat->id }}">
                                                    {{ $mat->designation }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-4" style="margin-top: 5px">
                                        <select class="form-control" class="form-controle" id="matID2" name="type">
                                            <option value="">Choisir type ...</option>
                                            @foreach (App\Models\Formation::all() as $form)
                                                <option value="{{ $form->type }}">
                                                    {{ $form->type }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-4" style="margin-top: 20px">
                                        <div class="">
                                            <div class="">
                                                <input type="submit" style="width: 100%;" class="btn btn-default steps_btn" value="Find" class="btn btn-success">
                                            </div>
                                            <div class="styleNm"></div>
                                        </div>
                                    </div>
                                </form>
                        @endif
                    </div>
                </div>
                 <div class="col-lg-9 col-md-8">
                         <div class="row">
                             <div class="col-md-12 ">

                                 @if (@$allformations)
                                     @foreach (@$allformations as $formation)
                                         <div class="fcrse_1 mb-10">
                                             <a class="hf_img">
                                                 <img src="{{ asset($formation->image) }}" alt="">
                                                 <div class="course-overlay">
                                                    <div class="badge_seller">{{ @$formation->matiere }}</div>
                                                     <!--<div class="crse_revues">
                                                        <i class="uil uil-star"></i>4.5
                                                    </div>-->
                                                     <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                     <div class="crse_timer">
                                                         {{ @$formation->duree }} période
                                                     </div>
                                                 </div>
                                             </a>
                                             <div class="hs_content">
                                                 <div class="vdtodt">
                                                     <!--<span class="vdt14">109k élèves</span>-->
                                                     <span
                                                         class="vdt14">{{ @$formation->created_at->format('j F, Y') }}</span>
                                                 </div>
                                                 <a class="crse14s title900">{{ @$formation->designation }}</a>
                                                 <!--<a href="#" class="crse-cate"></a>-->
                                                 <p class="cr1fot">{{ @$formation->type }}</p>
                                                 <div class="auth1lnkprce">
                                                     <!--<p class="cr1fot">Par M.<a href="#">John Doe</a></p>-->
                                                     <div class="prce142">{{ @$formation->prix1 }}DT</div>
                                                     <!--<button class="shrt-cart-btn" title="cart"><i
                                                            class="uil uil-shopping-cart-alt"></i></button>-->
                                                 </div>
                                             </div>
                                         </div>
                                     @endforeach
                                 @endif
                                 <div class='mt-10 mb-10' style="float: right;">
                                     {{ $allformations->links() }}
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
