<!--     <div class="wrapper _bg4586 _new89"> -->
@extends('public_interface.layout_public_interface')
@section('content_public')
    @if (@$detailactualite->count() > 0)
        @foreach ($detailactualite as $actualite)
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
                                        <a class="nav-item nav-link active" href="{{ url('/news') }}"> Détail Actualité
                                        </a>
                                    </div>
                                </nav>
                            </div>
                            <div class="title129">
                                <h2>{{ $actualite->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faq1256 index-content ">
                <div class="container">
                    <div class="row justify-content-md-center">


                        <div class="col-md-8">

                            @include('global_common/bloc_menuicon')

                            <div class="bg_blog2">
                                <img src="{{ asset($actualite->cover) }}" />

                            </div>
                            <div class="vew120 frc123">
                                <div class="vdtodt55">
                                    <!--  <span class="vdt24">Par {{-- {{ $actualite->publier }} --}}</span> -->
                                    <span class="vdt24">{{ $actualite->created_at->format('j F, Y') }}</span>
                                </div>
                            </div>
                            <div class="vew120 mt-35 mb-30">
                                <h4>{{ $actualite->title }}</h4>
                                <p>{{ $actualite->description }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection
