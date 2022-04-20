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
                             <div class="filter_selector">
                                 <div class="ui inline dropdown flt145">
                                     <div class="text">Sort</div>
                                     <i class="dropdown icon"></i>
                                     <div class="menu">
                                         <div class="item">Most Relevant</div>
                                         <div class="item">Most Reviewed</div>
                                         <div class="item">Highest Rated</div>
                                         <div class="item">Newest</div>
                                         <div class="item">Lowest Price</div>
                                         <div class="item">Highest Price</div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="tb_145">
                             <div class="panel-group accordion" id="accordionfilter">
                                 <div class="panel panel-default">
                                     <div class="panel-heading" id="headingOne">
                                         <div class="panel-title10">
                                             <a class="collapsed" data-toggle="collapse" data-target="#collapseOne"
                                                 href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                 Matière
                                             </a>
                                         </div>
                                     </div>
                                     <div id="collapseOne" class="panel-collapse collapse" aria-labelledby="headingOne"
                                         data-parent="#accordionfilter">
                                         <div class="panel-body">
                                             <div class="ui form">
                                                 <div class="grouped fields">
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>SEO<span
                                                                         class="filter__counter">(428)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Php<span
                                                                         class="filter__counter">(1526)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Wordpress Pro<span
                                                                         class="filter__counter">(428)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>WooCommerce<span
                                                                         class="filter__counter">(958)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Bootstrap<span
                                                                         class="filter__counter">(748)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Web Development<span
                                                                         class="filter__counter">(2256)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Web Design<span
                                                                         class="filter__counter">(4859)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Digital Marketing<span
                                                                         class="filter__counter">(2458)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>E-commerce<span
                                                                         class="filter__counter">(1245)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Wordpress Themes<span
                                                                         class="filter__counter">(5879)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Wordpress Plugins<span
                                                                         class="filter__counter">(2654)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0" class="hidden">
                                                                 <label>Wordpress Hosting<span
                                                                         class="filter__counter">(1485)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Elementor<span
                                                                         class="filter__counter">(3658)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Wordpress for Ecommerce<span
                                                                         class="filter__counter">(5894)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="panel panel-default">
                                     <div class="panel-heading" id="headingTwo">
                                         <div class="panel-title10">
                                             <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                 href="#" aria-expanded="false" aria-controls="collapseTwo">
                                                 Niveau
                                             </a>
                                         </div>
                                     </div>
                                     <div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordionfilter">
                                         <div class="panel-body">
                                             <div class="ui form">
                                                 <div class="grouped fields">
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>All Levels<span
                                                                         class="filter__counter">(5000)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Beginner<span
                                                                         class="filter__counter">(3517)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Intermediate<span
                                                                         class="filter__counter">(1560)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Expert<span
                                                                         class="filter__counter">(240)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="panel panel-default">
                                     <div class="panel-heading" id="headingThree">
                                         <div class="panel-title10">
                                             <a class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                 href="#" aria-expanded="false" aria-controls="collapseThree">
                                                 Groupe
                                             </a>
                                         </div>
                                     </div>
                                     <div id="collapseThree" class="panel-collapse collapse" aria-labelledby="headingThree"
                                         data-parent="#accordionfilter">
                                         <div class="panel-body">
                                             <div class="ui form">
                                                 <div class="grouped fields">
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>English<span
                                                                         class="filter__counter">(500)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Español<span
                                                                         class="filter__counter">(250)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Português<span
                                                                         class="filter__counter">(270)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>日本語<span
                                                                         class="filter__counter">(190)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Deutsch<span
                                                                         class="filter__counter">(120)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Français<span
                                                                         class="filter__counter">(105)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Türkçe<span
                                                                         class="filter__counter">(90)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>हिन्दी<span
                                                                         class="filter__counter">(80)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Italiano<span
                                                                         class="filter__counter">(178)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Polski<span
                                                                         class="filter__counter">(50)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>ภาษาไทย<span
                                                                         class="filter__counter">(27)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Română<span
                                                                         class="filter__counter">(157)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Telugu<span
                                                                         class="filter__counter">(110)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>मराठी<span
                                                                         class="filter__counter">(50)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="panel panel-default">
                                     <div class="panel-heading" id="headingfour">
                                         <div class="panel-title10">
                                             <a class="collapsed" data-toggle="collapse" data-target="#collapsefour"
                                                 href="#" aria-expanded="false" aria-controls="collapsefour">
                                                 Prix
                                             </a>
                                         </div>
                                     </div>
                                     <div id="collapsefour" class="panel-collapse collapse" aria-labelledby="headingfour"
                                         data-parent="#accordionfilter">
                                         <div class="panel-body">
                                             <div class="ui form">
                                                 <div class="grouped fields">
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Paid<span
                                                                         class="filter__counter">(3000)</span></label>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="ui form checkbox_sign">
                                                         <div class="inline field">
                                                             <div class="ui checkbox mncheck">
                                                                 <input type="checkbox" tabindex="0"
                                                                     class="hidden">
                                                                 <label>Free<span
                                                                         class="filter__counter">(50)</span></label>
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
                 </div>
                 <div class="col-lg-9 col-md-8">
                     <div class="_14d25 mb-20">
                         <div class="row">
                             <div class="col-md-12 ">

                                 @if (@$allformations)
                                     @foreach (@$allformations as $formation)
                                         <div class="fcrse_1 mb-20">
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
