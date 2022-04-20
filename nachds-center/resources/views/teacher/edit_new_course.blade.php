@extends('teacher.layout_public_teacher_interface')
@section('content_public_teacher_interface')






    <div class="wrapper">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="wrapper" >
        <div class="sa4d25 min-heigth ">
            <div class="container">
                <div class="col-lg-12">
                    <h2 class="st_title"><i class="uil uil-analysis"></i> Modifier Cours</h2>
                </div>
                <form action="{{ route('update_new_course', $cour->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="general_info10">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="ui search focus mt-30 lbel25">
                                    <div class="form-group">
                                        <label>Titre de cours*</label>
                                        <div class="ui left icon input swdh19">
                                            <input class="prompt srch_explore" type="text" placeholder="Course title here"
                                                name="designation" data-purpose="edit-course-title" maxlength="100"
                                                id="main[title]" value="{{ $cour->designation }}">
                                            <div class="badge_num">100</div>
                                        </div>
                                        <div class="help-block">(Veuillez en faire un maximum de
                                            100 caractères et unique.)</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="mt-30 lbel25">
                                        <label>Image*</label>
                                    </div>
                                    <input value="{{ $cour->photo }}"
                                        style="height: calc(2em + 0.75rem + 2px);border: 1px solid #e5e5e5;" type="file"
                                        name="photo" class="form-control" placeholder="image">
                                    <img class="mt-10" src="{{ env('APP_STORAGE') }}{{ $cour->photo }}"
                                        width="100px">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="mt-30 lbel25">
                                        <label>Groupe*</label>
                                    </div>

                                    <select name="groupe_id" id="groupe_id" class="form-control" required>
                                        <option> choisir ...</option>
                                        @foreach ($groupes as $grp)
                                            <option value="{{ $grp->groupe_id }}"
                                                @if ($grp->id == $cour->groupe_id) selected @endif>
                                                {{ $grp->designation }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="mt-30 mb-30 lbel25">
                                    <button type="submit" class="main-btn color btn-hover"><i
                                            class="fas fa-save mr-2"></i>Mettre à jour</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
