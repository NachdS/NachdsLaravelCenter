@extends('teacher.layout_public_teacher_interface')
@section('content_public_teacher_interface')

    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid" style="min-height: 550px;">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 mb-50">
                        <div class="section3125">
                            <h4 class="item_title">Listes d'élèves </h4>
                            <div class="la5lo1">
                                <div class="row">
                                    @if (@$candidats)
                                        @foreach ($candidats as $candidat)
                                            <div class="col-md-2">
                                                <div class="stream_1 mb-30">
                                                    <a href="live_output.html" class="stream_bg">
                                                        <img  src="{{ asset(@$candidat->avatar) }}"
                                                            alt="">
                                                        <h4>{{ @$candidat->name }}</h4>
                                                        <p>{{ @$candidat->email }}<span></span></p>
                                                    </a>
                                                </div>
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
