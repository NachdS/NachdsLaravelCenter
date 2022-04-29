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

    <div class="modal fade" id="add_lecture_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lectureModalLabel">Ajouter un chapitre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('store_new_chapter') }}" method="POST" enctype="multipart/form-data"
                    accept-charset="utf-8">
                    @csrf
                    <div class="modal-body">
                        <div class="new-section-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="course-main-tabs">
                                        <div class="nav nav-pills flex-column flex-sm-row nav-tabs" role="tablist">
                                            <a class="flex-sm-fill text-sm-center nav-link active" data-toggle="tab"
                                                href="#nav-basic" role="tab" aria-selected="true"><i
                                                    class="fas fa-file-alt mr-2"></i>Informations générales</a>
                                            <a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab"
                                                href="#nav-attachment" role="tab" aria-selected="false"><i
                                                    class="fas fa-paperclip mr-2"></i>Pièces jointes</a>
                                        </div>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-basic" role="tabpanel">
                                                <div class="form-group">
                                                    <div class="new-section mt-30">
                                                        <div class="form_group">
                                                            <label class="label25"> Titre*</label>
                                                            <input name="designation" class="form_input_1" type="text"
                                                                placeholder="Titre ici">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="cour_id" value="{{ $cour->id }}">
                                                </div>
                                                <div class="form-group">
                                                    <div class="new-section mt-30">
                                                        <div class="form_group">
                                                            <label class="label25"> Type*</label>
                                                            <input name="type" class="form_input_1" type="text"
                                                                placeholder="Type ici">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="ui search focus lbel25 mt-30">
                                                        <label>Description*</label>
                                                        <div class="ui form swdh30">
                                                            <div class="field">
                                                                <textarea rows="3" name="description" id="" placeholder="description ici..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="nav-attachment" role="tabpanel">
                                                <div class="row">
                                                    <div class="form-group col-12">
                                                        <div class="col-lg-12">
                                                            <div class="upload-file-dt mt-30">
                                                                <div class="upload-btn">
                                                                    <input multiple type="file" name="files[]"
                                                                        placeholder="Choose files"
                                                                        class="uploadBtn-main-input"
                                                                        id="SourceFile__input--source">
                                                                    <label for="SourceFile__input--source" title="Zip"><i
                                                                            class="far fa-plus-square mr-2"></i>Attachment</label>
                                                                </div>
                                                                <span class="uploadBtn-main-file">Supports: jpg, jpeg, png,
                                                                    pdf
                                                                    or .zip</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="main-btn cancel" data-dismiss="modal">Fermer</button>
                        <button type="Submit" class="main-btn">Ajouter Chapitre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <div class="wrapper">
        <div class="sa4d25 mb-50 ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="course_tabs_1">
                            <div id="add-course-tab" class="step-app">
                                <ul class="step-steps">
                                    <li>
                                        <a href="#tab_step2">
                                        </a>
                                    </li>
                                </ul>
                                <div class="step-content">
                                    <div class="step-tab-panel step-tab-gallery" id="tab_step2">
                                        <div class="tab-from-content">
                                            <div class="title-icon">
                                                <h3 class="title"><i class="uil uil-notebooks"></i>Chapitres</h3>
                                            </div>
                                            <div class="curriculum-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="curriculum-add-item">
                                                            <h4 class="section-title mt-0"><i
                                                                    class="fas fa-th-list mr-2"></i>{{ @$cour->designation }}
                                                            </h4>
                                                        </div>
                                                        <div class="added-section-item mb-30">
                                                            <div class="section-header">
                                                                <h4><i class="fas fa-bars mr-2"></i>listes de Chapitres</h4>
                                                            </div>

                                                            <div class="section-group-list sortable">

                                                                @if (@$detailchapitre)
                                                                    @foreach ($detailchapitre as $chp)
                                                                        <div class="section-list-item">
                                                                            <div class="section-item-title">
                                                                                <i class="fas fa-file-alt mr-2"></i>
                                                                                <span
                                                                                    class="section-item-title-text">{{ @$chp->designation}}
                                                                                </span>
                                                                            </div>
                                                                            <form
                                                                                action="{{ route('delete_new_chapter', $chp->id) }}"
                                                                                method="GET">

                                                                                @csrf
                                                                                @method('DELETE')

                                                                                <button type="submit" title="Delete"
                                                                                    class="gray-s" style="background-color: transparent !important;border: 0 !important;"><i class="uil uil-trash-alt"></i></button>
                                                                            </form>

                                                                            <form
                                                                                action="{{ route('edit_new_chapter', $chp->id) }}"
                                                                                method="GET">

                                                                                <a class="gray-s"
                                                                                    data-toggle="modal"
                                                                                    data-target="#edit_lecture_model"><i
                                                                                        class="uil uil-edit-alt"></i></a>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal fade" id="edit_lecture_model"
                                                                            tabindex="-1"
                                                                            aria-labelledby="lectureModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="lectureModalLabel">Modifier
                                                                                            chapitre</h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <form
                                                                                        action="{{ route('update_new_chapter', $chp->id) }}"
                                                                                        method="POST"
                                                                                        enctype="multipart/form-data"
                                                                                        accept-charset="utf-8">
                                                                                        @csrf
                                                                                        @method('PUT')
                                                                                        <div class="modal-body">
                                                                                            <div class="new-section-block">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-md-12">
                                                                                                        <div
                                                                                                            class="course-main-tabs">
                                                                                                            <div class="nav nav-pills flex-column flex-sm-row nav-tabs"
                                                                                                                role="tablist">
                                                                                                                <a class="flex-sm-fill text-sm-center nav-link active"
                                                                                                                    data-toggle="tab"
                                                                                                                    href="#nav-basic-edit"
                                                                                                                    role="tab"
                                                                                                                    aria-selected="true"><i
                                                                                                                        class="fas fa-file-alt mr-2"></i>Informations
                                                                                                                    générales</a>
                                                                                                                <a class="flex-sm-fill text-sm-center nav-link"
                                                                                                                    data-toggle="tab"
                                                                                                                    href="#nav-attachment-edit"
                                                                                                                    role="tab"
                                                                                                                    aria-selected="false"><i
                                                                                                                        class="fas fa-paperclip mr-2"></i>Pièces
                                                                                                                    jointes</a>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="tab-content">
                                                                                                                <div class="tab-pane fade show active"
                                                                                                                    id="#nav-basic-edit"
                                                                                                                    role="tabpanel">
                                                                                                                    <div
                                                                                                                        class="form-group">
                                                                                                                        <div
                                                                                                                            class="new-section mt-30">
                                                                                                                            <div
                                                                                                                                class="form_group">
                                                                                                                                <label
                                                                                                                                    class="label25">
                                                                                                                                    Titre*</label>
                                                                                                                                <input
                                                                                                                                    value="{{ $chp->designation }}"
                                                                                                                                    name="designation"
                                                                                                                                    class="form_input_1"
                                                                                                                                    type="text"
                                                                                                                                    placeholder="Titre ici">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-group">
                                                                                                                        <div
                                                                                                                            class="new-section mt-30">
                                                                                                                            <div
                                                                                                                                class="form_group">
                                                                                                                                <label
                                                                                                                                    class="label25">
                                                                                                                                    Type*</label>
                                                                                                                                <input
                                                                                                                                    value="{{ $chp->type }}"
                                                                                                                                    name="type"
                                                                                                                                    class="form_input_1"
                                                                                                                                    type="text"
                                                                                                                                    placeholder="Type ici">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="form-group">
                                                                                                                        <div
                                                                                                                            class="ui search focus lbel25 mt-30">
                                                                                                                            <label for="description">Description*</label>
                                                                                                                                    <div
                                                                                                                                      class="ui form swdh30">
                                                                                                                                        <div class="field">
                                                                                                                                            <textarea value="{{$chp->description}}" rows="3" name="description" id="description"></textarea>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                        </div>
                                                                                                                    </div>

                                                                                                                </div>
                                                                                                                <input
                                                                                                                    type="hidden"
                                                                                                                    name="cour_id"
                                                                                                                    value="{{ @$cour->id }}">

                                                                                                                <div class="tab-pane fade"
                                                                                                                    id="nav-attachment-edit"
                                                                                                                    role="tabpanel">
                                                                                                                    <div
                                                                                                                        class="row">
                                                                                                                        <div
                                                                                                                            class="form-group col-12">
                                                                                                                            <div
                                                                                                                                class="col-lg-12">
                                                                                                                                <div
                                                                                                                                    class="upload-file-dt mt-30">
                                                                                                                                    <div
                                                                                                                                        class="upload-btn">
                                                                                                                                        <input
                                                                                                                                            multiple
                                                                                                                                            type="file"
                                                                                                                                            value="{{ @$chp->files }}"
                                                                                                                                            name="files[]"
                                                                                                                                            placeholder="Choose files"
                                                                                                                                            class="uploadBtn-main-input"
                                                                                                                                            id="SourceFile__input--source">
                                                                                                                                        <label
                                                                                                                                            for="SourceFile__input--source"
                                                                                                                                            title="Zip"><i
                                                                                                                                                class="far fa-plus-square mr-2"></i>Attachment</label>
                                                                                                                                    </div>
                                                                                                                                    <span
                                                                                                                                        class="uploadBtn-main-file">Supports:
                                                                                                                                        jpg,
                                                                                                                                        jpeg,
                                                                                                                                        png,
                                                                                                                                        pdf
                                                                                                                                        or
                                                                                                                                        .zip
                                                                                                                                    </span>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                class="main-btn cancel"
                                                                                                data-dismiss="modal">Fermer</button>
                                                                                            <button type="Submit"
                                                                                                class="main-btn">Modifier
                                                                                                Chapitre</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif

                                                                <div class='mt-10' style="float: right;">
                                                                    {{ $detailchapitre->links() }}
                                                                </div>
                                                            </div>
                                                            <div class="section-add-item-wrap p-3 mt-35">
                                                                <button class="add_lecture" data-toggle="modal"
                                                                    data-target="#add_lecture_model"><i
                                                                        class="far fa-plus-square mr-2"></i>créer un
                                                                    chapitre</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-footer step-tab-pager">
                                        <button data-direction="prev" class="btn btn-default steps_btn"
                                            onclick="window.location.href = '{{ url('/instructor_courses') }}';">précédente</button>
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
