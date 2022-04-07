
    @extends('student.layout_public_student_interface')
    @section('content_public_student_interface') 
   

    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section3125">
                            <h4 class="item_title">Mes Amis De Groupe</h4>
                            <div class="la5lo1">
                                <div class="row">
                                @if (@$amisGroupe)
                                @foreach ($amisGroupe as $amis )
                                    <div class="col-md-2">
                                        <div class="stream_1 mb-30">
                                            <a href="live_output.html" class="stream_bg">
                                                <img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt="">
                                                <h4>{{$amis -> name}}</h4>
                                                <p>{{$amis -> phone}}</p>
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

     