@extends('public_interface.layout_public_interface')
@section('content_public')

    <!--    <div class="wrapper _bg4586 _new89 index-content"> -->
    <div class="_215cd2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="back_link">
                        <a href="{{ url('/index') }}" class="hde151">Retour Vers Accueil</a>
                    </div>
                    <div class="course_tabs margin-top-tabs">
                        <nav>
                            <div class="nav nav-tabs justify-content-center">
                                <a class="nav-item nav-link active" href="{{ url('/event') }}">Evénements</a>
                            </div>
                        </nav>
                    </div>
                    <div class="title129">
                        <h2> Liste des Evénements </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="wrapper _bg4586 _new89">
        <div class="_215cd2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        @include('global_common/bloc_menuicon')

                    </div>
                </div>
            </div>
        </div>
        <div class="_205ef5 index-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="fcrse_3 mt-50">
                            <ul class="blogleft12">
                                <li>
                                    <div class="explore_search blg152">
                                        <div class="ui search focus">
                                            <span class="vdt14">Nous joindre sur FB</span>
                                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v5.0">
                                            </script>
                                            <div class="fb-page" data-href="https://www.facebook.com/nachd.it"
                                                data-tabs="timeline" data-width="" data-height="400px"
                                                data-small-header="false" data-adapt-container-width="true"
                                                data-hide-cover="false" data-show-facepile="true">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!--<a href="#collapse1" class="category-topics cate-right collapsed"
                                            data-toggle="collapse" role="button" aria-expanded="true"
                                            aria-controls="collapse1">Labels</a>
                                        <div class="collapse" id="collapse1" >
                                            <ul class="category-card">
                                                <li>
                                                    <a href="#" class="category-item1 active">All</a>
                                                    <a href="#" class="category-item1">Students</a>
                                                    <a href="#" class="category-item1">Instructors</a>
                                                    <a href="#" class="category-item1">Ideas & Opinions</a>
                                                    <a href="#" class="category-item1">Edututs+ News</a>
                                                    <a href="#" class="category-item1">Social Innovation</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <a href="#collapse2" class="category-topics cate-right collapsed"
                                            data-toggle="collapse" role="button" aria-expanded="false"
                                            aria-controls="collapse2">Archive</a>
                                        <div class="collapse" id="collapse2" >
                                            <ul class="category-card">
                                                <li>
                                                    <a href="#" class="category-item1">January 2020</a>
                                                    <a href="#" class="category-item1">February 2020</a>
                                                    <a href="#" class="category-item1">March 2020</a>
                                                    <a href="#" class="category-item1">April 2020</a>
                                                </li>
                                            </ul>
                                        </div>-->
                                </li>
                                <li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7 mb-50">
                        @if (@$allEvenements->count() > 0)
                            @foreach (@$allEvenements as $event)
                                <div class="blogbg_1 mt-50">
                                    <a href="{{ route('event_single_view', ['id' => @$event->id]) }}"
                                        class="hf_img">
                                        <img src="{{ asset($event->cover) }}" />
                                        <div class="course-overlay"></div>
                                    </a>
                                    <div class="hs_content">
                                        <div class="vdtodt">

                                            <span
                                                class="vdt14">{{ @$event->created_at->format('j F, Y') }}</span>
                                        </div>
                                        <a href="{{ route('event_single_view', ['id' => @$event->id]) }}"
                                            class="crse14s title900">{{ @$event->title }}</a>
                                        <p class="blog_des">{{ @$event->short_description }}</p>
                                        <a href="{{ route('event_single_view', ['id' => @$event->id]) }}"
                                            class="view-blog-link">Lire la suite<i class="uil uil-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class='mt-10 mb-50' style="float: right;">
                            {{ $allEvenements->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
