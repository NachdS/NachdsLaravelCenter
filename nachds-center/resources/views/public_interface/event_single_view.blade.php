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
                                    <a class="nav-item nav-link active" href="{{url('/event')}}"> Détail Evénement </a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>Event Title</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq1256 index-content ">
            <div class="container">
                <div class="row justify-content-md-center">
                    @if(@$detailEvenement->count() > 0)
                    @foreach ($detailEvenement as $event )
        
                    <div class="col-md-8">

                        @include('global_common/bloc_menuicon')

                        <div class="bg_blog2">
                            <img src="{{ asset($event->cover) }}" />

                        </div>
                        <div class="vew120 frc123">
                            <div class="vdtodt55">
                                <span class="vdt24">Par {{$event -> publier}}</span>
                                <span class="vdt24">{{$event -> created_at->format('j F, Y')}}</span>
                            </div>
                        </div>
                        <div class="vew120 mt-35 mb-30">
                            <h4>{{$event -> title}}</h4>
                            <p>{{$event -> description}}</p>
                        </div>
                    </div>

                    @endforeach
                    @endif
                    <div class="col-md-12">
                        <div class="blog_pagination">
                            <a href="#" class="bp_left">
                                <i class="uil uil-angle-double-left"></i>
                                <div class="kslu15">
                                    <div class="prevlink">Précédent</div>
                                </div>
                            </a>
                            <a href="#" class="bp_right">
                                <div class="kslu16">
                                    <div class="prevlink1">Suivant</div>
                                <i class="uil uil-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
