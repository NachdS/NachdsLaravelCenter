@extends('student.layout_public_student_interface')
@section('content_public_student_interface')

    <div class="wrapper _bg4586 _new89">
        <div class="_215b15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title125">
                            <div class="titleleft">
                                <div class="ttl121">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Search Results</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="titleright">
                                <div class="explore_search">
                                    <div class="ui search focus">
                                        <div class="ui left icon input swdh11 swdh15">
                                            <input class="prompt srch_explore" type="text" placeholder="Search">
                                            <i class="uil uil-search-alt icon icon2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="title126">
                            <h2>Search Results</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sa4d25 mb4d25 margin-search" style="min-height: 500px;">
            <div class="container-fluid col-lg-9">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-4">
                        <div class="section3125 hstry142">
                            <div class="result_stitles">
                                <div class="rs6t_title">Filters</div>
                            </div>
                                <form action="{{ route('search_result_filtre') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-12 col-md-4 mt-50">
                                        <select class="form-control" id="grpID2" name="niveau_id">
                                            <option value="">Choisir niveau ...</option>
                                            @foreach (App\Models\Niv::all() as $niv)
                                                <option value="{{ $niv->id }}" {{ $niv->id == $niv_id ? 'selected' : '' }}>
                                                    {{ $niv->designation }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-4" style="margin-top: 5px">
                                        <select class="form-control" class="form-controle" id="matID2" name="matiere_id">
                                            <option value="">Choisir Matière ...</option>
                                            @foreach (App\Models\Matiere::all() as $mat)
                                                <option value="{{ $mat->id }}" {{ $mat->id == $mat_id ? 'selected' : '' }}>
                                                    {{ $mat->designation }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-4" style="margin-top: 5px">
                                        <select class="form-control" class="form-controle" id="matID2" name="type">
                                            <option value="">Choisir type ...</option>
                                            @foreach (App\Models\Formation::all() as $form)
                                                <option value="{{ $form->type }}" {{ $form->type == $type ? 'selected' : '' }}>
                                                    {{ $form->type }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-4" style="margin-top: 20px">
                                        <div class="">
                                            <div class="">
                                                <input type="submit" style="width: 100%;" class="btn btn-default steps_btn" value="Find" class="btn btn-success">
                                            </div>
                                            <div class="styleNm"></div>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>




                    <div class="col-lg-9 col-md-8" id="formationsData">
                        <div class="_14d25 mb-20">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="title129">
                                        <h2 style= "color:#ed2a26;">Formation inexistante !!</h2>
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
