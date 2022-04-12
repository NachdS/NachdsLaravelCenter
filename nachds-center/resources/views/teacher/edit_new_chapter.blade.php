
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
				<form action="{{ route('store_new_chapter') }}" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
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
													<input name="designation" class="form_input_1" type="text" placeholder="Titre ici">
												</div>
											</div>
										    </div>
											<div class="form-group">
											<div class="new-section mt-30">
												<div class="form_group">
													<label class="label25"> Type*</label>
													<input name="type" class="form_input_1" type="text" placeholder="Type ici">
												</div>
											</div>
										    </div>
											<div class="form-group">
											<div class="ui search focus lbel25 mt-30">
												<label>Description*</label>
												<div class="ui form swdh30">
													<div class="field">
														<textarea rows="3" name="description" id=""
															placeholder="description ici..."></textarea>
													</div>
												</div>
											</div>
										    </div>
			
										</div>

										<div class="tab-pane fade" id="nav-attachment" role="tabpanel">
											<div class="row">
												<div class="form-group">
												 <div class="col-lg-12">
													<div class="upload-file-dt mt-30">
														<div class="upload-btn">
															<input type="file" name="files[]" placeholder="Choose files" class="uploadBtn-main-input" id="SourceFile__input--source" >
															<label for="SourceFile__input--source" title="Zip" multiple ><i
																	class="far fa-plus-square mr-2"></i>Attachment</label>
														</div>
														<span class="uploadBtn-main-file">Supports: jpg, jpeg, png, pdf
															or .zip</span>
														<div class="add-attachments-dt">
															<div class="attachment-items">
																<div class="attachment_id">Uploaded ID: 14</div>
																<button class="cancel-btn" type="button"><i
																		class="fas fa-trash-alt"></i></button>
															</div>
														</div>
													</div>
												</div> 
												<!-- <div class="col-xs-12 col-sm-12 col-md-12">
													<div class="form-group">
														<strong>Image:</strong>
														<input type="file" name="files" class="form-control" placeholder="files...">
													</div>
												</div> -->
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
																	class="fas fa-th-list mr-2"></i>{{@$cour->designation}}</h4>
														</div>
														<div class="added-section-item mb-30">
															<div class="section-header">
																<h4><i class="fas fa-bars mr-2"></i>listes de Chapitres</h4>
															</div>
														
															<div class="section-group-list sortable">

																@if(@$detailchapitre)
																@foreach ($detailchapitre as $chp )
																<div class="section-list-item">
																	<div class="section-item-title">
																		<i class="fas fa-file-alt mr-2"></i>
																		<span class="section-item-title-text">{{@$chp->designation}}
																			</span>
																	</div>
																	<!--<button type="button" class="add_lecture section-item-tools" data-toggle="modal"
																	data-target="#add_lecture_model" ><i
																			class="fas fa-edit"></i></button>
																	<button type="button" class="section-item-tools"><i
																			class="fas fa-trash-alt"></i></button>
																	<button type="button"
																		class="section-item-tools ml-auto"><i
																			class="fas fa-bars"></i></button>-->
																	<form action="{{ route('delete_new_chapter',$chp->id)}}" method="GET">
																			@csrf
																			@method('DELETE')
																			<button type="submit" class="section-item-tools ml-auto"><i
																				class="fas fa-trash-alt"></i></button>
																	</form>
																</div>
																@endforeach
																@endif
												
															</div>
															<!-- <div class='mt-10 mb-10' style="float: right;">
																{{-- {{ $detailchapitre->links() }}  --}}
															</div> -->
															<div class="section-add-item-wrap p-3">
																<button class="add_lecture" data-toggle="modal"
																	data-target="#add_lecture_model"><i
																	class="far fa-plus-square mr-2"></i>créer un chapitre</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								<div class="step-footer step-tab-pager">
									<button data-direction="prev" class="btn btn-default steps_btn">PREVIOUS</button>
									<button data-direction="next" class="btn btn-default steps_btn">Next</button>
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
	