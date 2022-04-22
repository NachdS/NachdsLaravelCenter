@extends('teacher.layout_public_teacher_interface')
@section('content_public_teacher_interface')
    <div class="wrapper" >
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

    <div class="wrapper">
        <div class="sa4d25 min-heigth ">
            <div class="container">
                <div class="col-lg-12">
                    <h2 class="st_title"><i class="uil uil-analysis"></i> Créer un nouveau cours</h2>
                </div>
                <form action="{{ route('store_new_course') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="general_info10">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="ui search focus mt-30 lbel25">
                                    <div class="form-group">
                                        <label>Titre de cours*</label>
                                        <div class="ui left icon input swdh19">
                                            <input class="prompt srch_explore" type="text" placeholder="Course title here"
                                                name="designation" data-purpose="edit-course-title" maxlength="100"
                                                id="main[title]" value="">
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
                                    <input style="height: calc(2em + 0.75rem + 2px);border: 1px solid #e5e5e5;" type="file"
                                        name="photo" class="form-control" placeholder="image">

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="mt-30 lbel25">
                                        <label>Groupe*</label>
                                    </div>
                                    <select name="groupe_id" id="" class="form-control" required>
                                        <option value="">Choisir..</option>
                                        @foreach ($groupes as $grp)
                                            <option value="{{ $grp->id }}">{{ $grp->designation }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="mt-30 mb-30 lbel25">
                                    <button type="submit" class="main-btn color btn-hover"><i
                                            class="fas fa-save mr-2"></i>Ajouter</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
