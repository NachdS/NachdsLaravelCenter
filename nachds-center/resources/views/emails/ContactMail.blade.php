 <!-- <div class="wrapper _bg4586 _new89 index-content"> -->
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
                                    <a class="nav-item nav-link active" href="{{ url('/contact_us') }}">Contact Mail</a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>Restez en contact avec nous</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
   
        <div class="wrapper _bg4586 _new89 index-content">
   
            <div class="contact1256">
                <div class="container">
                    @include('global_common/bloc_menuicon')
                
                        <div class="col-lg-12 mt-50">
                            <h2 class="st_title"><i class="uil uil-comment-info-alt"></i> Contact Messsage</h2>
                            <div class="row">
                                <div class="col-lg-12 col-md-8">
                                    <p>Name : {{$details['name']}}</p>
                                    <p>Name : {{$details['email']}}</p>
                                    <p>Name : {{$details['phone']}}</p>
                                    <p>Name : {{$details['msg']}}</p>
                                </div>
                            </div>
                        </div>
   
   
                </div>
            </div>
        </div>
    @endsection
   