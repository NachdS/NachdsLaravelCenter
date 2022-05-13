    @extends('public_interface.layout_public_interface')
    @section('content_public')
        <div class="_215cd2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @include('global_common/bloc_menuicon')
                        <div class="back_link">
                            <a href="{{ url('/index') }}" class="hde151">Retour Vers Accueil</a>
                        </div>
                        <div class="course_tabs margin-top-tabs">
                            <nav>
                                <div class="nav nav-tabs tab_crse  justify-content-center">
                                    <a class="nav-item nav-link active" href="{{ url('/faqs') }}"> FAQs </a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>Questions fréquemment posées</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="_215b15">
            <div class="memb4d25 index-content" style="padding-bottom:5%">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title589 mt-25">
                                <p>Attendez, qu'en est-il…</p>
                            </div>
                            <div class="membership_faq_bg">
                                <div class="panel-group mt-4 accordion" id="accordion">
                                    @foreach ($allfaqs as $faqs)
                                        <div class="panel panel-default" style="border-top: 0px;">
                                            <div class="panel-heading" id="headingOne2{{ $faqs->id }}">
                                                <div class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-target="#collapseOne2{{ $faqs->id }}" href="#" aria-expanded="false"
                                                        aria-controls="collapseOne2{{ $faqs->id }}">
                                                        {{ $faqs->question }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapseOne2{{ $faqs->id }}" class="panel-collapse collapse"
                                                aria-labelledby="headingOne2{{ $faqs->id }}" data-parent="#accordion">
                                                <div class="panel-body">{{ $faqs->reponse }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
