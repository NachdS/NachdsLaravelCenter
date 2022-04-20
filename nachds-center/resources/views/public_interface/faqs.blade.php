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
                                <div class="panel-group mt-4 accordion" id="accordion2">
                                    @foreach ($allfaqs as $faqs)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" id="headingOne2">
                                                <div class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-target="#collapseOne2" href="#" aria-expanded="false"
                                                        aria-controls="collapseOne2">
                                                        {{ $faqs->question }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapseOne2" class="panel-collapse collapse"
                                                aria-labelledby="headingOne2" data-parent="#accordion2">
                                                <div class="panel-body">{{ $faqs->reponse }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- <div class="panel panel-default">
                                    <div class="panel-heading" id="headingTwo2">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo2"
                                                href="#" aria-expanded="false" aria-controls="collapseTwo2">
                                                Can I cancel at any time?
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseTwo2" class="panel-collapse collapse" aria-labelledby="headingTwo2"
                                        data-parent="#accordion2">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingThree2">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseThree2"
                                                href="#" aria-expanded="false" aria-controls="collapseThree2">
                                                Are there any credit card or PayPal fees?
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseThree2" class="panel-collapse collapse"
                                        aria-labelledby="headingThree2" data-parent="#accordion2">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid. </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingfour2">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapsefour2"
                                                href="#" aria-expanded="false" aria-controls="collapsefour2">
                                                Do I have to choose my plan before I start my trial?
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapsefour2" class="panel-collapse collapse"
                                        aria-labelledby="headingfour2" data-parent="#accordion2">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid.le VHS.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingfive2">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapsefive2"
                                                href="#" aria-expanded="false" aria-controls="collapsefive2">
                                                Edututs+ isn’t for me. Can I have a refund?
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapsefive2" class="panel-collapse collapse"
                                        aria-labelledby="headingfive2" data-parent="#accordion2">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingsix2">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapsesix2"
                                                href="#" aria-expanded="false" aria-controls="collapsesix2">
                                                How do I get my money?
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapsesix2" class="panel-collapse collapse" aria-labelledby="headingsix2"
                                        data-parent="#accordion2">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid. </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingseven2">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseseven2"
                                                href="#" aria-expanded="false" aria-controls="collapseseven2">
                                                Do I need a credit card to sign up?
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseseven2" class="panel-collapse collapse"
                                        aria-labelledby="headingseven2" data-parent="#accordion2">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid.le VHS.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingeight2">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseeight2"
                                                href="#" aria-expanded="false" aria-controls="collapseeight2">
                                                Is Edututs+ safe and secure for online transactions?
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseeight2" class="panel-collapse collapse"
                                        aria-labelledby="headingeight2" data-parent="#accordion2">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" id="headingnine2">
                                        <div class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapsenine2"
                                                href="#" aria-expanded="false" aria-controls="collapsenine2">
                                                I still have questions. HELP!
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapsenine2" class="panel-collapse collapse"
                                        aria-labelledby="headingnine2" data-parent="#accordion2">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high
                                            life accusamus terry richardson ad squid. </div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
