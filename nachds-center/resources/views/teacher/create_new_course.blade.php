<!DOCTYPE html>
<html lang="en">

<!-- Copyright  create_new_course.html Nachd IT 13:31:20 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Cursus - Create New Course</title>

	<link rel="icon" type="image/png" href="{{ asset('assets/images/fav.png') }}">

	<link href="../https://fonts.googleapis.com/css?family=Roboto:400,700,500" rel='stylesheet'>
	<link href="{{ asset('assets/vendor/unicons-2.0.1/css/unicons.css') }}" rel='stylesheet'>
	<link href="{{ asset('assets/css/vertical-responsive-menu1.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/instructor-dashboard.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/instructor-responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/night-mode.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/jquery-steps.css') }}" rel="stylesheet">

	<link href="{{ asset('assets/css/vertical-responsive-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

	<link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/semantic/semantic.min.css') }}">
	<link href="{{ asset('assetsvendor/jquery-ui-1.12.1/jquery-ui.css') }}" rel="stylesheet">
</head>

<body>

	<div class="modal fade" id="add_section_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="lectureModalLabel">New Section</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="new-section-block">
						<div class="row">
							<div class="col-md-12">
								<div class="new-section">
									<div class="form_group">
										<label class="label25">Section Name*</label>
										<input class="form_input_1" type="text" placeholder="Section title here">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="main-btn cancel" data-dismiss="modal">Close</button>
					<button type="button" class="main-btn">Add Section</button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="add_lecture_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="lectureModalLabel">Add Lecture</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="new-section-block">
						<div class="row">
							<div class="col-md-12">
								<div class="course-main-tabs">
									<div class="nav nav-pills flex-column flex-sm-row nav-tabs" role="tablist">
										<a class="flex-sm-fill text-sm-center nav-link active" data-toggle="tab"
											href="#nav-basic" role="tab" aria-selected="true"><i
												class="fas fa-file-alt mr-2"></i>Basic</a>
										<a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab"
											href="#nav-video" role="tab" aria-selected="false"><i
												class="fas fa-video mr-2"></i>Video</a>
										<a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab"
											href="#nav-attachment" role="tab" aria-selected="false"><i
												class="fas fa-paperclip mr-2"></i>Attachments</a>
									</div>
									<div class="tab-content">
										<div class="tab-pane fade show active" id="nav-basic" role="tabpanel">
											<div class="new-section mt-30">
												<div class="form_group">
													<label class="label25">Lecture Title*</label>
													<input class="form_input_1" type="text" placeholder="Title here">
												</div>
											</div>
											<div class="ui search focus lbel25 mt-30">
												<label>Description*</label>
												<div class="ui form swdh30">
													<div class="field">
														<textarea rows="3" name="description" id=""
															placeholder="description here..."></textarea>
													</div>
												</div>
											</div>
											<div class="preview-dt">
												<span class="title-875">Free Preview</span>
												<label class="switch">
													<input type="checkbox" name="preview_op" value="">
													<span></span>
												</label>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-video" role="tabpanel">
											<div class="lecture-video-dt mt-30">
												<span class="video-info">Select your preferred video type. (.mp4,
													YouTube, Vimeo etc.)</span>
												<div class="video-category">
													<label><input type="radio" name="colorRadio" value="mp4"
															checked=""><span>HTML5(mp4)</span></label>
													<label><input type="radio" name="colorRadio"
															value="url"><span>External URL</span></label>
													<label><input type="radio" name="colorRadio"
															value="youtube"><span>YouTube</span></label>
													<label><input type="radio" name="colorRadio"
															value="vimeo"><span>Vimeo</span></label>
													<label><input type="radio" name="colorRadio"
															value="embedded"><span>embedded</span></label>
													<div class="mp4 video-box" style="display: block;">
														<div class="row">
															<div class="col-lg-6 col-md-6">
																<div class="upload-file-dt mt-30">
																	<div class="upload-btn">
																		<input class="uploadBtn-main-input" type="file"
																			id="VideoFile__input--source">
																		<label for="VideoFile__input--source"
																			title="Zip">Upload Video</label>
																	</div>
																	<span class="uploadBtn-main-file">File Format:
																		.mp4</span>
																	<span class="uploaded-id">Uploaded ID :
																		<b>12</b></span>
																</div>
															</div>
															<div class="col-lg-6 col-md-6">
																<div class="upload-file-dt mt-30">
																	<div class="upload-btn">
																		<input class="uploadBtn-main-input" type="file"
																			id="PosterFile__input--source">
																		<label for="PosterFile__input--source"
																			title="Zip">Video Poster</label>
																	</div>
																	<span class="uploadBtn-main-file color-b">Uploaded
																		ID : preview.jpg</span>
																	<span class="uploaded-id color-fmt">Size: 590x300
																		pixels. Supports: jpg,jpeg, or png</span>
																</div>
															</div>
														</div>
														<div class="video-duration">
															<label class="label25">Video Runtime -
																<strong>hh:mm:ss</strong>*</label>
															<div class="duration-time">
																<div class="input-group">
																	<input type="text" class="form_input_1"
																		name="video[runtime][hours]" value="00">
																	<input type="text" class="form_input_1"
																		name="video[runtime][mins]" value="1">
																	<input type="text" class="form_input_1"
																		name="video[runtime][secs]" value="00">
																</div>
															</div>
														</div>
													</div>
													<div class="url video-box">
														<div class="new-section">
															<div class="ui search focus mt-30 lbel25">
																<label>External URL*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text"
																		placeholder="External Video URL" name="" id=""
																		value="">
																</div>
															</div>
														</div>
														<div class="video-duration">
															<label class="label25">Video Runtime -
																<strong>hh:mm:ss</strong>*</label>
															<div class="duration-time">
																<div class="input-group">
																	<input type="text" class="form_input_1"
																		name="video[runtime][hours]" value="00">
																	<input type="text" class="form_input_1"
																		name="video[runtime][mins]" value="1">
																	<input type="text" class="form_input_1"
																		name="video[runtime][secs]" value="00">
																</div>
															</div>
														</div>
													</div>
													<div class="youtube video-box">
														<div class="new-section">
															<div class="ui search focus mt-30 lbel25">
																<label>Youtube URL*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text"
																		placeholder="Youtube Video URL" name="" id=""
																		value="">
																</div>
															</div>
														</div>
														<div class="video-duration">
															<label class="label25">Video Runtime -
																<strong>hh:mm:ss</strong>*</label>
															<div class="duration-time">
																<div class="input-group">
																	<input type="text" class="form_input_1"
																		name="video[runtime][hours]" value="00">
																	<input type="text" class="form_input_1"
																		name="video[runtime][mins]" value="1">
																	<input type="text" class="form_input_1"
																		name="video[runtime][secs]" value="00">
																</div>
															</div>
														</div>
													</div>
													<div class="vimeo video-box">
														<div class="new-section">
															<div class="ui search focus mt-30 lbel25">
																<label>Vimeo URL*</label>
																<div class="ui left icon input swdh19">
																	<input class="prompt srch_explore" type="text"
																		placeholder="Vimeo Video URL" name="" id=""
																		value="">
																</div>
															</div>
														</div>
														<div class="video-duration">
															<label class="label25">Video Runtime -
																<strong>hh:mm:ss</strong>*</label>
															<div class="duration-time">
																<div class="input-group">
																	<input type="text" class="form_input_1"
																		name="video[runtime][hours]" value="00">
																	<input type="text" class="form_input_1"
																		name="video[runtime][mins]" value="1">
																	<input type="text" class="form_input_1"
																		name="video[runtime][secs]" value="00">
																</div>
															</div>
														</div>
													</div>
													<div class="embedded video-box">
														<div class="new-section">
															<div class="ui search focus mt-30 lbel25">
																<label>Embedded Code*</label>
																<div class="ui form swdh30">
																	<div class="field">
																		<textarea rows="3" name="" id=""
																			placeholder="Place your embedded code here"></textarea>
																	</div>
																</div>
															</div>
														</div>
														<div class="video-duration">
															<label class="label25">Video Runtime -
																<strong>hh:mm:ss</strong>*</label>
															<div class="duration-time">
																<div class="input-group">
																	<input type="text" class="form_input_1"
																		name="video[runtime][hours]" value="00">
																	<input type="text" class="form_input_1"
																		name="video[runtime][mins]" value="1">
																	<input type="text" class="form_input_1"
																		name="video[runtime][secs]" value="00">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-attachment" role="tabpanel">
											<div class="row">
												<div class="col-lg-12">
													<div class="upload-file-dt mt-30">
														<div class="upload-btn">
															<input class="uploadBtn-main-input" type="file"
																id="SourceFile__input--source">
															<label for="SourceFile__input--source" title="Zip"><i
																	class="far fa-plus-square mr-2"></i>Attachment</label>
														</div>
														<span class="uploadBtn-main-file">Supports: jpg, jpeg, png, pdf
															or .zip</span>
														<div class="add-attachments-dt">
															<div class="attachment-items">
																<div class="attachment_id">Uploaded ID: 12</div>
																<button class="cancel-btn" type="button"><i
																		class="fas fa-trash-alt"></i></button>
															</div>
															<div class="attachment-items">
																<div class="attachment_id">Uploaded ID: 13</div>
																<button class="cancel-btn" type="button"><i
																		class="fas fa-trash-alt"></i></button>
															</div>
															<div class="attachment-items">
																<div class="attachment_id">Uploaded ID: 14</div>
																<button class="cancel-btn" type="button"><i
																		class="fas fa-trash-alt"></i></button>
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
				</div>
				<div class="modal-footer">
					<button type="button" class="main-btn cancel" data-dismiss="modal">Close</button>
					<button type="button" class="main-btn">Add Lecture</button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="add_quiz_model" tabindex="-1" aria-labelledby="lectureModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="lectureModalLabel">Add Quiz</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="new-section-block">
						<div class="row">
							<div class="col-md-12">
								<div class="course-main-tabs">
									<div class="nav nav-pills flex-column flex-sm-row nav-tabs" role="tablist">
										<a class="flex-sm-fill text-sm-center nav-link active" data-toggle="tab"
											href="#nav-quizbasic" role="tab" aria-selected="true"><i
												class="fas fa-file-alt mr-2"></i>Basic</a>
										<a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab"
											href="#nav-questions" role="tab" aria-selected="false"><i
												class="fas fa-question-circle mr-2"></i>Questions</a>
										<a class="flex-sm-fill text-sm-center nav-link" data-toggle="tab"
											href="#nav-setting" role="tab" aria-selected="false"><i
												class="fas fa-cog mr-2"></i>Setting</a>
									</div>
									<div class="tab-content">
										<div class="tab-pane fade show active" id="nav-quizbasic" role="tabpanel">
											<div class="new-section">
												<div class="form_group mt-30">
													<label class="label25">Quiz Title*</label>
													<input class="form_input_1" type="text" placeholder="Title here">
												</div>
											</div>
											<div class="ui search focus lbel25 mt-30">
												<label>Description*</label>
												<div class="ui form swdh30">
													<div class="field">
														<textarea rows="3" name="description" id=""
															placeholder="description here..."></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-questions" role="tabpanel">
											<div class="lecture-video-dt mt-30">
												<div class="add-ques-dt">
													<button type="button" class="main-btn color btn-hover w-100"
														data-toggle="collapse" data-target="#add-ques"><i
															class="far fa-plus-square mr-2"></i>Add Question</button>
													<div id="add-ques" class="collapse">
														<div class="lecture-video-dt mt-30">
															<span class="video-info">Question Type</span>
															<div class="video-category">
																<label><input type="radio" name="colorRadio"
																		value="schoice"><span><i
																			class="far fa-dot-circle mr-2"></i>Single
																		Choice</span></label>
																<label><input type="radio" name="colorRadio"
																		value="mchoice"><span><i
																			class="far fa-check-circle mr-2"></i>Multiple
																		Choice</span></label>
																<label><input type="radio" name="colorRadio"
																		value="sline"><span><i
																			class="far fa-edit mr-2"></i>Single Line
																		Text</span></label>
																<label><input type="radio" name="colorRadio"
																		value="mline"><span><i
																			class="far fa-file-alt mr-2"></i>Milti Line
																		Text</span></label>
																<div class="schoice quiz-box">
																	<div class="ques-box">
																		<div class="row">
																			<div class="col-lg-2 col-md-2">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Image*</label>
																					<div class="upload-thumb">
																						<input
																							class="uploadBtn-input-preview"
																							type="file"
																							accept="image/png"
																							id="thumbnail_source">
																						<label class="mx-0 my-0"
																							for="thumbnail_source"
																							title="Image"><img
																								class="img-thumbnail"
																								src="{{ asset('assets/images/placeholder-image.png') }}"
																								alt=""></label>
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-7 col-md-9">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Question
																						Title*</label>
																					<input class="form_input_1"
																						type="text"
																						placeholder="Write question title">
																				</div>
																			</div>
																			<div class="col-lg-3 col-md-12">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Score*</label>
																					<input class="form_input_1"
																						type="number"
																						placeholder="Score">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ans-box">
																		<div class="row">
																			<div class="col-lg-12 col-md-12">
																				<button
																					class="main-btn color btn-hover mt-30">Add
																					Option</button>
																			</div>
																			<div class="col-lg-12 col-md-12">
																				<div class="option-item">
																					<div class="opt-title">
																						<h4>1. Option</h4>
																						<span class="opt-del"><i
																								class="fas fa-trash-alt"></i></span>
																					</div>
																					<div class="option-wrap">
																						<div class="form_group">
																							<label
																								class="label25 text-left">Option
																								Title*</label>
																							<input class="form_input_1"
																								type="text"
																								placeholder="Option title">
																						</div>
																						<div class="agree_checkbox">
																							<input type="checkbox"
																								id="check1">
																							<label for="check1">Correct
																								answer</label>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="mchoice quiz-box">
																	<div class="ques-box">
																		<div class="row">
																			<div class="col-lg-2 col-md-2">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Image*</label>
																					<div class="upload-thumb">
																						<input
																							class="uploadBtn-input-preview"
																							type="file"
																							accept="image/png"
																							id="thumbnail_source1">
																						<label class="mx-0 my-0"
																							for="thumbnail_source1"
																							title="Image"><img
																								class="img-thumbnail"
																								src="{{ asset('assets/images/placeholder-image.png') }}"
																								alt=""></label>
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-7 col-md-9">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Question
																						Title*</label>
																					<input class="form_input_1"
																						type="text"
																						placeholder="Write question title">
																				</div>
																			</div>
																			<div class="col-lg-3 col-md-12">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Score*</label>
																					<input class="form_input_1"
																						type="number"
																						placeholder="Score">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ans-box">
																		<div class="row">
																			<div class="col-lg-12 col-md-12">
																				<button
																					class="main-btn color btn-hover mt-30">Add
																					Option</button>
																			</div>
																			<div class="col-lg-12 col-md-12">
																				<div class="option-item">
																					<div class="opt-title">
																						<h4>1. Option</h4>
																						<span class="opt-del"><i
																								class="fas fa-trash-alt"></i></span>
																					</div>
																					<div class="option-wrap">
																						<div class="form_group">
																							<label
																								class="label25 text-left">Option
																								Title*</label>
																							<input class="form_input_1"
																								type="text"
																								placeholder="Option title">
																						</div>
																						<div class="agree_checkbox">
																							<input type="checkbox"
																								id="check2">
																							<label for="check2">Correct
																								answer</label>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="sline quiz-box">
																	<div class="ques-box">
																		<div class="row">
																			<div class="col-lg-2 col-md-2">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Image*</label>
																					<div class="upload-thumb">
																						<input
																							class="uploadBtn-input-preview"
																							type="file"
																							accept="image/png"
																							id="thumbnail_source2">
																						<label class="mx-0 my-0"
																							for="thumbnail_source2"
																							title="Image"><img
																								class="img-thumbnail"
																								src="{{ asset('assets/images/placeholder-image.png') }}"
																								alt=""></label>
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-7 col-md-9">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Question
																						Title*</label>
																					<input class="form_input_1"
																						type="text"
																						placeholder="Write question title">
																				</div>
																			</div>
																			<div class="col-lg-3 col-md-12">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Score*</label>
																					<input class="form_input_1"
																						type="number"
																						placeholder="Score">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="mline quiz-box">
																	<div class="ques-box">
																		<div class="row">
																			<div class="col-lg-2 col-md-2">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Image*</label>
																					<div class="upload-thumb">
																						<input
																							class="uploadBtn-input-preview"
																							type="file"
																							accept="image/png"
																							id="thumbnail_source3">
																						<label class="mx-0 my-0"
																							for="thumbnail_source3"
																							title="Image"><img
																								class="img-thumbnail"
																								src="{{ asset('assetsplaceholder-image.png') }}"
																								alt=""></label>
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-7 col-md-9">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Question
																						Title*</label>
																					<input class="form_input_1"
																						type="text"
																						placeholder="Write question title">
																				</div>
																			</div>
																			<div class="col-lg-3 col-md-12">
																				<div class="form_group mt-30">
																					<label
																						class="label25 text-left">Score*</label>
																					<input class="form_input_1"
																						type="number"
																						placeholder="Score">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="share-submit-btns pl-0 pb-0">
															<button class="main-btn color btn-hover"><i
																	class="fas fa-save mr-2"></i>Save Question</button>
														</div>
													</div>
													<div class="added-ques">
														<div class="section-group-list pl-0 pr-0 sortable">
															<div class="section-list-item">
																<div class="section-item-title">
																	<i class="far fa-dot-circle mr-2"></i>
																	<span class="section-item-title-text">Question
																		Title</span>
																</div>
																<button type="button" class="section-item-tools"><i
																		class="fas fa-edit"></i></button>
																<button type="button" class="section-item-tools"><i
																		class="fas fa-trash-alt"></i></button>
																<button type="button"
																	class="section-item-tools ml-auto"><i
																		class="fas fa-bars"></i></button>
															</div>
															<div class="section-list-item">
																<div class="section-item-title">
																	<i class="far fa-check-circle mr-2"></i>
																	<span class="section-item-title-text">Question
																		Title</span>
																</div>
																<button type="button" class="section-item-tools"><i
																		class="fas fa-edit"></i></button>
																<button type="button" class="section-item-tools"><i
																		class="fas fa-trash-alt"></i></button>
																<button type="button"
																	class="section-item-tools ml-auto"><i
																		class="fas fa-bars"></i></button>
															</div>
															<div class="section-list-item">
																<div class="section-item-title">
																	<i class="far fa-edit mr-2"></i>
																	<span class="section-item-title-text">Question
																		Title</span>
																</div>
																<button type="button" class="section-item-tools"><i
																		class="fas fa-edit"></i></button>
																<button type="button" class="section-item-tools"><i
																		class="fas fa-trash-alt"></i></button>
																<button type="button"
																	class="section-item-tools ml-auto"><i
																		class="fas fa-bars"></i></button>
															</div>
															<div class="section-list-item">
																<div class="section-item-title">
																	<i class="far fa-file-alt mr-2"></i>
																	<span class="section-item-title-text">Question
																		Title</span>
																</div>
																<button type="button" class="section-item-tools"><i
																		class="fas fa-edit"></i></button>
																<button type="button" class="section-item-tools"><i
																		class="fas fa-trash-alt"></i></button>
																<button type="button"
																	class="section-item-tools ml-auto"><i
																		class="fas fa-bars"></i></button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-setting" role="tabpanel">
											<div class="new-section mt-30">
												<div class="quiz-cogs-step">
													<label class="label25 quiz-st-ft text-left">Gradable</label>
													<div class="cogs-toggle">
														<label class="switch">
															<input type="checkbox" id="gradable_quiz" value="">
															<span></span>
														</label>
														<label for="gradable_quiz" class="lbl-quiz">Quiz
															Gradable</label>
													</div>
													<p>If this quiz test affect on the students grading system for this
														course.</p>
												</div>
												<div class="quiz-cogs-step mt-30">
													<label class="label25 quiz-st-ft text-left">Remaining time
														display</label>
													<div class="cogs-toggle">
														<label class="switch">
															<input type="checkbox" id="show_time" value="">
															<span></span>
														</label>
														<label for="show_time" class="lbl-quiz">Show Time</label>
													</div>
													<p>By enabling this option, quiz taker will show remaining time
														during attempt.</p>
												</div>
												<div class="row">
													<div class="col-lg-4">
														<div class="form_group mt-30">
															<label class="label25">Time Limit*</label>
															<div class="input-group">
																<input class="form_input_1 white-bg" type="number"
																	placeholder="">
																<div class="input-group-append">
																	<span
																		class="input-group-text int4856">Minutes</span>
																</div>
																<span class="alt-text">Set zero to disable time
																	limit.</span>
															</div>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form_group mt-30">
															<label class="label25">Passing Score(%)*</label>
															<input class="form_input_1" type="number" placeholder="">
															<span class="alt-text">Student have to collect this score in
																percent for the pass this quiz.</span>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="form_group mt-30">
															<label class="label25">Questions Limit*</label>
															<input class="form_input_1" type="number" placeholder="">
															<span class="alt-text">The number of questions student have
																to answer in this quiz.</span>
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
					<button type="button" class="main-btn cancel" data-dismiss="modal">Close</button>
					<button type="button" class="main-btn">Add Quiz</button>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="add_assignment_model" tabindex="-1" aria-labelledby="lectureModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="lectureModalLabel">Add Assignment</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="new-section-block main-form">
						<div class="row">
							<div class="col-md-12">
								<div class="new-section">
									<div class="form_group">
										<label class="label25">Assignment Title*</label>
										<input class="form_input_1" type="text" placeholder="Assignment title here">
									</div>
									<div class="form_group mt-30">
										<label class="label25">Description*</label>
										<div class="text-editor">
											<div id="editor4"></div>
										</div>
									</div>
									<div class="form_group mt-30">
										<div class="row g-4">
											<div class="col-lg-4 mt-30">
												<label class="label25">Time Duration*</label>
												<div class="row no-gutters">
													<div class="col-6">
														<input class="form_input_1" type="number" value="0"
															placeholder="">
													</div>
													<div class="col-6 pl-2">
														<select
															class="ui hj145 dropdown cntry152 assignment prompt srch_explore">
															<option value="">Select</option>
															<option>Weeks</option>
															<option>Days</option>
															<option>Hours</option>
														</select>
													</div>
												</div>
												<span class="alt-text">Assignment time duration, set 0 for no
													limit.</span>
											</div>
											<div class="col-lg-4 mt-30">
												<label class="label25">Total Number*</label>
												<input class="form_input_1" type="number" value="10" placeholder="">
												<span class="alt-text">Maximum points a student can score</span>
											</div>
											<div class="col-lg-4 mt-30">
												<label class="label25">Minimum Pass Number*</label>
												<input class="form_input_1" type="number" value="5" placeholder="">
												<span class="alt-text">Minimum points required for the student to pass
													this assignment.</span>
											</div>
										</div>
									</div>
									<div class="assgn152 mt-30 pt-30">
										<div class="row g-6">
											<div class="col-lg-6 mt-30">
												<label class="label25">Upload attachment limit*</label>
												<input class="form_input_1" type="text" value="1" placeholder="">
												<span class="alt-text">Maximum attachment size limit</span>
											</div>
											<div class="col-lg-6 mt-30">
												<label class="label25">Maximum attachment size limit</label>
												<input class="form_input_1" type="text" value="10" placeholder="">
												<span class="alt-text">Define maximum attachment size in MB</span>
											</div>
										</div>
									</div>
									<div class="upload-file-dt mt-30">
										<div class="upload-btn">
											<input class="uploadBtn-main-input" type="file"
												id="AssignmentFile__input--source">
											<label for="AssignmentFile__input--source" title="Zip"><i
													class="far fa-plus-square mr-2"></i>Attachment</label>
										</div>
										<span class="uploadBtn-main-file">Supports: jpg, jpeg, png, pdf or .zip</span>
										<div class="add-attachments-dt">
											<div class="attachment-items">
												<div class="attachment_id">Uploaded ID: 5</div>
												<button class="cancel-btn" type="button"><i
														class="fas fa-trash-alt"></i></button>
											</div>
											<div class="attachment-items">
												<div class="attachment_id">Uploaded ID: 6</div>
												<button class="cancel-btn" type="button"><i
														class="fas fa-trash-alt"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="main-btn cancel" data-dismiss="modal">Close</button>
					<button type="button" class="main-btn">Add Assignment</button>
				</div>
			</div>
		</div>
	</div>


    <header class="header clearfix">
        <button type="button" id="toggleMenu" class="toggle_menu">
            <i class='uil uil-bars'></i>
        </button>
        <button id="collapse_menu" class="collapse_menu">
            <i class="uil uil-bars collapse_menu--icon "></i>
            <span class="collapse_menu--label"></span>
        </button>
        <div class="main_logo" id="logo">
            <a href="index.html"><img class="logo-main" src="{{ asset('assets/images/logo.png') }}" alt=""></a>
            <a href="index.html"><img class="logo-inverse" src="{{ asset('assets/images/ct_logo.png') }}" alt=""></a>
        </div>
        <div class="top-category">
            <div class="ui compact menu cate-dpdwn">
                <div class="ui simple dropdown item">
                    <a href="#" class="option_links p-0" title="categories"><i class="uil uil-apps"></i></a>
                    <div class="menu dropdown_category5">
                        <a href="#" class="item channel_item">Development</a>
                        <a href="#" class="item channel_item">Business</a>
                        <a href="#" class="item channel_item">Finance & Accounting</a>
                        <a href="#" class="item channel_item">IT & Software</a>
                        <a href="#" class="item channel_item">Office Productivity</a>
                        <a href="#" class="item channel_item">Personal Development</a>
                        <a href="#" class="item channel_item">Design</a>
                        <a href="#" class="item channel_item">Marketing</a>
                        <a href="#" class="item channel_item">Lifestyle</a>
                        <a href="#" class="item channel_item">Photography</a>
                        <a href="#" class="item channel_item">Health & Fitness</a>
                        <a href="#" class="item channel_item">Music</a>
                        <a href="#" class="item channel_item">Teaching & Academics</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="search120">
            <div class="ui search">
                <div class="ui left icon input swdh10">
                    <input class="prompt srch10" type="text"
                        placeholder="Search for Tuts Videos, Tutors, Tests and more..">
                    <i class='uil uil-search-alt icon icon1'></i>
                </div>
            </div>
        </div>
        <div class="header_right">
            <ul>

                <li>
                    <a href="shopping_cart.html" class="option_links" title="cart"><i
                            class='uil uil-shopping-cart-alt'></i><span class="noti_count">2</span></a>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="option_links" title="Messages"><i class='uil uil-envelope-alt'></i><span
                            class="noti_count">3</span></a>
                    <div class="menu dropdown_ms">
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-6.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Zoena Singh</h6>
                                    <p>Hi! Sir, How are you. I ask you one thing please explain it this video price.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-5.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Joy Dua</h6>
                                    <p>Hello, I paid you video tutorial but did not play error 404.</p>
                                    <span class="nm_time">10 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-8.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Jass</h6>
                                    <p>Thanks Sir, Such a nice video.</p>
                                    <span class="nm_time">25 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a class="vbm_btn" href="instructor_messages.html">View All <i
                                class='uil uil-arrow-right'></i></a>
                    </div>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="option_links" title="Notifications"><i class='uil uil-bell'></i><span
                            class="noti_count">3</span></a>
                    <div class="menu dropdown_mn">
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Rock William</h6>
                                    <p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
                                    <span class="nm_time">2 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-2.jpg') }}" alt="">
                                <div class="pd_content">
                                    <h6>Jassica Smith</h6>
                                    <p>Added New Review In Video <strong>Full Stack PHP Developer</strong>.</p>
                                    <span class="nm_time">12 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="channel_my item">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/left-imgs/img-9.jpg') }}" alt="">
                                <div class="pd_content">
                                    <p> Your Membership Approved <strong>Upload Video</strong>.</p>
                                    <span class="nm_time">20 min ago</span>
                                </div>
                            </div>
                        </a>
                        <a class="vbm_btn" href="instructor_notifications.html">View All <i
                                class='uil uil-arrow-right'></i></a>
                    </div>
                </li>
                <li class="ui dropdown">
                    <a href="#" class="opts_account" title="Account">
                        <img src="{{ asset('assets/images/hd_dp.jpg') }}" alt="">
                    </a>
                    <div class="menu dropdown_account">
                        <div class="channel_my">
                            <div class="profile_link">
                                <img src="{{ asset('assets/images/hd_dp.jpg') }}" alt="">
                                <div class="pd_content">
                                    <div class="rhte85">
                                        <h6>Joginder Singh</h6>
                                        <div class="mef78" title="Verify">
                                            <i class='uil uil-check-circle'></i>
                                        </div>
                                    </div>
                                    <span><a href="https://gambolthemes.net/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="3c5b5d515e535005080f7c5b515d5550125f5351">[email&#160;protected]</a></span>
                                </div>
                            </div>
                            <a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>
                        </div>
                        <div class="night_mode_switch__btn">
                            <a href="#" id="night-mode" class="btn-night-mode">
                                <i class="uil uil-moon"></i> Night mode
                                <span class="btn-night-mode-switch">
                                    <span class="uk-switch-button"></span>
                                </span>
                            </a>
                        </div>
                        <a href="instructor_dashboard.html" class="item channel_item">Cursus dashboard</a>
                        <a href="membership.html" class="item channel_item">Paid Memberships</a>
                        <a href="setting.html" class="item channel_item">Setting</a>
                        <a href="help.html" class="item channel_item">Help</a>
                        <a href="feedback.html" class="item channel_item">Send Feedback</a>
                        <a href="sign_in.html" class="item channel_item">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>



    <nav class="vertical_nav">
        <div class="left_section menu_left" id="js-menu">
            <div class="left_section mt-30 ">
                <ul>
                <li class="menu--item">
                <div class="menu--link ">
                    <div class="tutor_img">
                        <a href="instructor_profile_view.html"><img src="{{ asset('assets/images/left-imgs/img-1.jpg') }}" alt=""></a>
                    </div>
                    <div class="tutor_content_dt">
                        <div class="tutor150">
                            <a href="../instructor_profile_view.html" class="tutor_name">John Doe</a>
                            <div class="mef78" title="Verify">
                                <i class="uil uil-check-circle"></i>
                            </div>
                        </div>   
                    </div>
                </div>
                </li>
                </ul>
            </div>
            <div class="left_section">
                <ul>
                    <li class="menu--item">
                        <a href="instructor_dashboard.html" class="menu--link active" title="Dashboard">
                            <i class="uil uil-apps menu--icon"></i>
                            <span class="menu--label">Acceuil</span>
                        </a>
                    </li>

                    <li class="menu--item">
                        <a href="group.html" class="menu--link " title="Groupe">
                            <i class='uil uil-layers menu--icon'></i>
                            <span class="menu--label">Groupe</span>
                        </a>
                    </li>  
                    
                    <li class="menu--item">
                        <a href="instructor_courses.html" class="menu--link" title="Cours">
                            <i class='uil uil-book-alt menu--icon'></i>
                            <span class="menu--label">Cours</span>
                        </a>
                    </li>  
                    
                    <li class="menu--item">
                        <a href="teacher_schedule.html" class="menu--link" title="Emplois">
                            <i class='uil uil-star menu--icon'></i>
                            <span class="menu--label">Emplois</span>
                        </a>
                    </li>

                    

                    <li class="menu--item">
                        <a href="instructor_earning.html" class="menu--link" title="Earning">
                            <i class='uil uil-dollar-sign menu--icon'></i>
                            <span class="menu--label">Earning</span>
                        </a>
                    </li> 
        </div>
        <div class="left_section pt-2">
            <ul>
                <li class="menu--item">
                    <a href="../public_interface/index.html" class="menu--link" title="Send Feedback">
                        <i class='uil uil-home-alt  menu--icon'></i>
                        <span class="menu--label">Retour Vers Accueil</span>
                    </a>
                </li>
            </ul>
        </div>
       
        <div class="left_footer">
            <ul>
                <li><a href="about_us.html">About</a></li>
                <li><a href="press.html">Press</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="coming_soon.html">Advertise</a></li>
                <li><a href="coming_soon.html">Developers</a></li>
                <li><a href="terms_of_use.html">Copyright</a></li>
                <li><a href="terms_of_use.html">Privacy Policy</a></li>
                <li><a href="terms_of_use.html">Terms</a></li>
            </ul>
            <div class="left_footer_content">
                <p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
            </div>
        </div>

    </nav>


	<div class="wrapper">
		<div class="sa4d25">
			<div class="container">
				<div class="col-lg-12">
					<h2 class="st_title"><i class="uil uil-analysis"></i> Créer un nouveau cours</h2>
				</div>
				<form>
					<div class="general_info10">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="ui search focus mt-30 lbel25">
									<label>Titre de cours*</label>
									<div class="ui left icon input swdh19">
										<input class="prompt srch_explore" type="text"
											placeholder="Course title here" name="title"
											data-purpose="edit-course-title" maxlength="100"
											id="main[title]" value="">
										<div class="badge_num">60</div>
									</div>
									<div class="help-block">(Veuillez en faire un maximum de
										100 caractères et unique.)</div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<div class="mt-30 lbel25">
									<label>Course Level*</label>
								</div>
								<select
									class="ui hj145 dropdown cntry152 prompt srch_explore"
									multiple="">
									<option value="">Select Level</option>
									<option value="1">Beginner</option>
									<option value="2">Intermediate</option>
									<option value="3">Expert</option>
								</select>

								
							</div>
							<div class="col-lg-12 col-md-12">
							<div class="mt-30 lbel25">
							<button class="main-btn color btn-hover"><i
								class="fas fa-save mr-2"></i>Ajouter</button>
							</div>
						    </div>

						</div>
					</div>
				</form>
			</div>
		</div>
		<footer class="footer mt-40">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="item_f1">
							<a href="terms_of_use.html">Copyright Policy</a>
							<a href="terms_of_use.html">Terms</a>
							<a href="terms_of_use.html">Privacy Policy</a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="footer_bottm">
							<div class="row">
								<div class="col-md-6">
									<ul class="fotb_left">
										<li>
											<a href="index.html">
												<div class="footer_logo">
													<img src="{{ asset('assetslogo1.svg') }}" alt="">
												</div>
											</a>
										</li>
										<li>
											<p>© 2020 <strong>Cursus</strong>. All Rights Reserved.</p>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<div class="edu_social_links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-google-plus-g"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
										<a href="#"><i class="fab fa-pinterest-p"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
	<script src="{{ asset('assets/js/vertical-responsive-menu.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('assets/vendorbootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/vendorOwlCarousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('assets/vendorsemantic/semantic.min.js') }}"></script>
	<script src="{{ asset('assets/vendorjquery-ui-1.12.1/jquery-ui.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<script src="{{ asset('assets/js/night-mode.js') }}"></script>
	<script src="{{ asset('assets/js/jquery-steps.min.js') }}"></script>
	<script>
		$('#add-course-tab').steps({
			onFinish: function () {
				alert('Wizard Completed');
			}
		});		
	</script>
	<script>
		$(function () {
			$(".sortable").sortable();
			$(".sortable").disableSelection();
		});

	</script>
</body>

<!-- Copyright  create_new_course.html Nachd IT 13:31:24 GMT -->

</html>