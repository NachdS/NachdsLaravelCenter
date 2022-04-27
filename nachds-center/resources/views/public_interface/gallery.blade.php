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
                                <a class="nav-item nav-link active" href="{{ url('/gallery') }}">Gallerie</a>
                            </div>
                        </nav>
                    </div>
                    <div class="title129">
                        <h2>Nos photos</h2>
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
                    <div class="col-lg-12 col-md-7">
                        @if (@$allalbums->count() > 0)
                            @foreach (@$allalbums as $image)
                                <div class="blogbg_1 mt-50">
                                    <a href="{{ route('gallery_single_view', ['id' => @$image->id]) }}"
                                        class="hf_img">
                                        <img src="{{ asset($image->cover) }}" />
                                        <div class="course-overlay"></div>
                                    </a>
                                    <div class="hs_content">
                                        <div class="vdtodt">

                                            <span class="vdt14">
                                                {{ \Carbon\Carbon::parse(@$image->date_album)->format('j F') }} </span>
                                        </div>
                                        <a href="{{ route('gallery_single_view', ['id' => @$image->id]) }}"
                                            class="crse14s title900">{{ @$image->title }}</a>
                                        <p class="blog_des">{{ @$image->short_description }}</p>
                                        <a href="{{ route('gallery_single_view', ['id' => @$image->id]) }}"
                                            class="view-blog-link">Lire la suite<i class="uil uil-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
                <div class='mt-10 mb-50' style="float: right;">
                    {{ $allalbums->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
