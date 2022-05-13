@extends('student.layout_public_student_interface')
@section('content_public_student_interface')

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

    <div class="wrapper">
        <div class="sa4d25 min-heigth ">
            <div class="container">
                <div class="col-lg-12">
                    <h2 class="st_title"><i class="uil uil-analysis"></i> Effectuer un nouveau paiement</h2>
                </div>
                <form action="{{ route('store_new_payement') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="general_info10">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="ui search focus mt-30 lbel25">
                                    <div class="form-group">
                                        <label>Montant*</label>
                                        <div class="ui left icon input swdh19">
                                            <input class="prompt srch_explore" type="number" placeholder="Montant"
                                                name="montant" data-purpose="edit-payement-title" id="main[title]" value=""
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="ui search focus mt-30 lbel25">
                                    <div class="form-group">
                                        <label>Date paimement*</label>
                                        <div class="ui left icon input swdh19">
                                            <input class="prompt srch_explore" type="date" placeholder="Date"
                                                name="date_paiement" data-purpose="edit-payement-title" id="main[title]"
                                                value="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="ui search focus mt-30 lbel25">
                                    <label class="inline-block text-sm text-gray-600" for="Multiselect">Choisir multiple
                                        periode</label>
                                    <div class="relative flex w-full">
                                        <select id="select-role" name="periode[]" multiple placeholder="Choisir periode..."
                                            autocomplete="off"
                                            class="block w-full rounded-sm cursor-pointer focus:outline-none" multiple
                                            required>
                                            @foreach ($formations as $form)
                                                <option value="{{ $form->duree_periode }}"> {{ $form->duree_periode }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="mt-30 lbel25">
                                        <label>Justification*</label>
                                    </div>
                                    <input style="height: calc(2em + 0.75rem + 2px);border: 1px solid #e5e5e5;" type="file"
                                        name="justification" class="form-control" placeholder="justification" required>

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="mt-30 lbel25">
                                        <label>Groupe*</label>
                                    </div>
                                    <select name="groupe_id" id="groupe_id" class="form-control" required>
                                        <option value="">Choisir..</option>
                                        @foreach ($groupes as $grp)
                                            <option value=" {{ $grp->id }} "> {{ $grp->designation }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="mt-30 mb-30 lbel25">
                                    <button type="submit" class="main-btn color btn-hover"
                                        style="background-color:#ed2a26;"><i class="fas fa-save mr-2"></i>Ajouter</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
