@extends('public_interface.layout_public_interface')
@section('content_public')

    @if (@$detailalbums->count() > 0)
        @foreach ($detailalbums as $img)
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
                                        <a class="nav-item nav-link active" href="{{ url('/gallery') }}">Galerie</a>
                                    </div>
                                </nav>
                            </div>
                            <div class="title129">
                                <h2> {{ @$img->title }}</h2>
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
            </div>
            <div class="index-content" style="min-height: 500px;;">
                <div class="col-lg-12 col-md-7">


                    <div class="gallery-single-view mt-50">
                        <div class="row">

                            @if (@$img->photos)
                                <?php $allimages = json_decode(@$img->photos); ?>

                                @if ($allimages != null)
                                    @foreach ($allimages as $image)
                                        <div class="column">

                                            <img class="hover-shadow" data-toggle="modal" data-target="#exampleModal"
                                                src="{{ asset($image) }}" />

                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade hover-shadow" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            {{ @$img->title }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img style="width: 100%; heigth:50%" src="{{ asset($image) }}" />
                                                    </div>
                                                    <div class="modal-body">
                                                        <h2>{{ \Carbon\Carbon::parse(@$img->date_album)->format('j F') }},
                                                            {{ @$img->lieu }}</h2>
                                                        <p> {{ @$img->description }}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                        </div>

                    </div>

                </div>
            </div>
        @endforeach
    @endif
@endsection


</div>
</div>
</div>
