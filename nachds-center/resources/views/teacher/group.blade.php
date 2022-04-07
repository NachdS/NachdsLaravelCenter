
    @extends('teacher.layout_public_teacher_interface')
    @section('content_public_teacher_interface') 

    <div class="wrapper">
        <div class="col-lg-12">
            <h2 class="st_title"><i class="uil uil-apps"></i> Groupes</h2>
        </div>
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="section3125">
                            <h4 class="item_title">Groupes</h4>
                            <div class="la5lo1">
                                <div class="row">

                                    @if (@$allGroupe)
                                    @foreach ($allGroupe as $groupe )
                                    <div class="col-md-2">
                                        <div class="stream_1 mb-30">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt="">
                                                <a href="{{url('/student_list_eleve')}}">
                                                    <h4 style="    color: black;
                                                    text-align: center;
                                                    margin: 20px 0px 10px 0px;">{{$groupe -> designation}}</h4>
                                                </a>
                                                <p style="    color: black;
                                                text-align: center;
                                                margin: 10px 0px 10px 0px;">{{$groupe -> capacite}} élèves</p>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="right_side">
                            <div class="fcrse_3">
                                <div class="cater_ttle">
                                    <h4>Nombre de Groupes</h4>
                                </div>
                                <div class="live_text">
                                    <div class="live_icon"><i class="uil uil-kayak"></i></div>
                                    <div class="live-content">
                                        <p>Consulter vos groupe et vos élèves</p>
                                        <button class="live_link"
                                            onclick="window.location.href = '';">{{$totalGroupes}} Groupes</button>
                                        <span class="livinfo">.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="fcrse_3">
                                <div class="cater_ttle">
                                    <h4>Vos élèves en total</h4>
                                </div>
                                <div class="live_text">
                                    <div class="live_icon"><i class="uil uil-kayak"></i></div>
                                    <div class="live-content">
                                        <p>Consulter vos groupe et vos élèves</p>
                                        <button class="live_link"
                                            onclick="window.location.href = '';">{{$totalelevesGroupe}} élèves</button>
                                        <span class="livinfo">.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
   