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
                                    <a class="nav-item nav-link active" href="{{ url('/news') }}">Actualités</a>
                                </div>
                            </nav>
                        </div>
                        <div class="title129">
                            <h2>Liste des Actualités</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                            @php
                            $coor = App\Models\Coordonnee::first();
                            @endphp
                            <ul class="blogleft12">
                                <li>
                                    <div class="socl148">
                                        <button class="twiter158" data-href="{{@$coor->facebook}}" onclick="sharingPopup(this);"
                                            id="twitter-share"><i class="uil uil-twitter ic45"></i>Follow</button>
                                        <button class="facebook158" data-href="{{@$coor->linkedin}}" onclick="sharingPopup(this);"
                                            id="facebook-share"><i class="uil uil-facebook ic45"></i>Follow</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="help_link">
                                        <p>Learn More</p>
                                        <a href="#">Cursus Help Center</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="press_news">
                            @if (@$allactualites->count() > 0)
                                @foreach (@$allactualites as $actualite)
                                    <div class="press_item mt-35">
                                        <div class="vdtopress">{{ @$actualite->created_at->format('j F, Y') }}</div>
                                        <h4>{{ @$actualite->title }}</h4>
                                        <p class="blog_des">
                                            {{ $actualite->short_description }}</p>

                                        <a href="{{ route('news_detail', ['id' => @$actualite->id]) }}"
                                            class="press_dt_view">lire la suite<i
                                                class="uil uil-angle-double-right"></i></a>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class='mt-10 mb-50' style="float: right;">
                            {{ $allactualites->links() }}
                        </div>
                        <br> <br>
                    </div>
                </div>
            </div>
        </div>
    @endsection
