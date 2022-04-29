@extends('student.layout_public_student_interface')
@section('content_public_student_interface')

@php
    $s='http://127.0.0.1/nachds-center/storage/app/public/';
@endphp
<div class="wrapper" style="min-height: 650px;">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    {{-- @foreach ($cours as $cour) --}}
                    <div class="col-xl-8 col-lg-8">
                        <div class="section3125">
                            <div class="user_dt5">
                                <div class="user_dt_left">
                                    <div class="live_user_dt">
                                        <div class="user_cntnt">
                                            <h4 id="designation">Titre de chapitre</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="live1452">
                                <iframe id="video1" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="_215b17">
                            <div class="course_tab_content">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                                        <div class="_htg451">

                                            <!-- <div class="_htg452 mt-35">
                                                    <h3>Download Files</h3>
                                                    <button type="submit" class="main-btn color btn-hover"
                                                        style="background-color:#ed2a26 !important;"><i
                                                            class="fas fa-file-pdf"></i></button>
                                                    <button type="submit" class="main-btn color btn-hover"
                                                        style="background-color:#4bb866 !important;"><i
                                                            class="fas fa-file-word"></i></button>
                                                    <button type="submit" class="main-btn color btn-hover"
                                                        style="background-color:#0fd7e6 !important; "><i
                                                            class="fas fa-file-archive"></i></button>
                                                </div> -->
                                            <div class="_htg452 mt-35">
                                                <h3>Description</h3>
                                                <span id="description" class="_abc123">Description de chapitre
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>

                    <div class="col-lg-4" style="background-color: #fff ;">
                        <div class="course_tab_content">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-courses" role="tabpanel">
                                    <div class="crse_content">
                                        <h3>Le contenu des cours</h3>
                                        <div class="_112456">
                                            <ul class="accordion-expand-holder">
                                                <li><span class="accordion-expand-all _d1452"></span></li>
                                                <li><span class="_fgr123"></span></li>
                                            </ul>
                                        </div>
                                        @foreach ($cours as $cour)
                                            <div id="accordion{{ $cour->id }}"
                                                class="ui-accordion ui-widget ui-helper-reset">
                                                <a href="javascript:void(0)"
                                                    class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all">
                                                    <div class="section-header-left">
                                                        <span class="section-title-wrapper">
                                                            <i class='uil uil-presentation-play crse_icon'></i>
                                                            <span
                                                                class="section-title-text">{{ $cour->designation }}</span>
                                                        </span>
                                                    </div>
                                                    <div class="section-header-right">
                                                        <span class="section-header-length"></span>
                                                    </div>
                                                </a>

                                                <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom"
                                                    id="accordion2">
                                                    @foreach (@$cour->chapitres as $chap)
                                                        <div class="panel panel-default"
                                                            style="margin-bottom: 0px; border-bottom: 1px solid #efefef;">
                                                            <div class="panel-heading"
                                                                id="headingOne2_{{ @$chap->id }}">
                                                                <div class="panel-title" style="border:none;">
                                                                    <a onclick="chapitreInfo({{$chap}} , {{$cour}})" value={{ @$chap->designation }}
                                                                        class="" data-toggle="collapse"
                                                                        data-target="#collapseOne2_{{ @$chap->id }}"
                                                                        href="#" aria-expanded="false"
                                                                        aria-controls="collapseOne2"
                                                                        style="font-size: 16px; font-weight: 450;">
                                                                        <i class='uil uil-book-alt'></i>
                                                                        {{ @$chap->designation }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                          
                                                            @if (@$chap->files)
                                                                @if (json_decode(@$chap->files) !== null)
                                                                    @foreach (json_decode(@$chap->files) as $file)
                                                                        <?php $ext = pathinfo(@$file->download_link, PATHINFO_EXTENSION); ?>
                                                                        <div id="collapseOne2_{{ @$chap->id }}"
                                                                            class="panel-collapse collapse"
                                                                            data-parent="#accordion2">
                                                                            <div class="panel-body"
                                                                                style="border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; border-left: none; border-top: 1px solid #efefef; border-bottom: none; padding: 10px;">
                                                                                <a class="fileType" target="_blank"
                                                                                href="{{env('APP_STORAGE')}}{{$file->download_link}}"
                                                                                    data-file-name="{{@$file->original_name }}">
                                                                                    @if ($ext == 'pdf')
                                                                                        <div class="img_settings_container"
                                                                                            style="float:left;padding-right:15px;">
                                                                                            <i class="fas fa-file-pdf"></i>
                                                                                            <a href="{{$s}}{{$file->download_link}}"
                                                                                                target="_blank">

                                                                                                {{$file->original_name}}
                                                                                               {{--  {{ substr(@$file, 10) }} --}}
                                                                                               
                                                                                            </a>
                                                                                        </div>
                                                                                    @elseif($ext == 'doc' || $ext == 'docm' || $ext == 'docx')
                                                                                        <div class="img_settings_container"
                                                                                            style="float:left;padding-right:15px;">
                                                                                            <i class="fas fa-file-word"></i>
                                                                                            <a href="{{Storage::get(@$file) }}"
                                                                                                target="_blank">
                                                                                                {{ substr(@$file, 10) }}</a>
                                                                                        </div>
                                                                                    @elseif($ext == 'ptt' || $ext == 'pptx')
                                                                                    <div class="img_settings_container"
                                                                                    style="float:left;padding-right:15px;">
                                                                                    <i class="fas fa-file-powerpoint"></i>
                                                                                    <a href="{{Storage::get(@$file)}}"
                                                                                        target="_blank">
                                                                                        {{ substr(@$file, 10) }}</a>
                                                                                </div>
                                                                                    @elseif($ext == 'mp4' || $ext == 'mp4')
                                                                                        <div>
                                                                                            <a href="#" id="playvideo"
                                                                                                onclick="playme('<?php echo $file; ?>')">
                                                                                                {{ substr(@$file, 10) }}
                                                                                        </div>
                                                                                    @else
                                                                                        <div class="img_settings_container"
                                                                                            style="float:left;padding-right:15px;">
                                                                                            <img src="{{ asset('public/theme/img/icon_file.png') }}"
                                                                                                style="width: 65px;height: 65px;clear:both; display:block; padding:2px; border:1px solid #ddd;margin-top: -10px;">
                                                                                        </div>
                                                                                    @endif
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                        <!--<a class="btn1458" href="#">20 More Sections</a>-->
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
