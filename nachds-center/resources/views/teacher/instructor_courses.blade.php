
    @extends('teacher.layout_public_teacher_interface')
    @section('content_public_teacher_interface')  

    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-book-alt"></i>Cours</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="card_dash1">
                            <div class="card_dash_left1">
                                <i class="uil uil-book-alt"></i>
                                <h1>Sautez dans la création de cours</h1>
                            </div>
                            <div class="card_dash_right1">
                                <button class="create_btn_dash"
                                    onclick="window.location.href = '{{url('/create_new_course')}}';">Créez votre cours</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-50">
                        <div class="my_courses_tabs">
                            <ul class="nav nav-pills my_crse_nav" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-my-courses-tab" data-toggle="pill"
                                        href="#pills-my-courses" role="tab" aria-controls="pills-my-courses"
                                        aria-selected="true"><i class="uil uil-book-alt"></i>My Courses</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-my-courses" role="tabpanel">
                                    <div class="table-responsive mt-30">
                                        <table class="table ucp-table">
                                            <thead class="thead-s">
                                                <tr>
                                                    <th class="text-center" scope="col">Numéro du cours</th>
                                                    <th>Titre</th>
                                                    <th class="text-center" scope="col">Date de publication</th>
                                                    <th class="text-center" scope="col">Formation</th>
                                                    <th class="text-center" scope="col">nombre de chapitre </th>
                                                    <th class="text-center" scope="col">Chapitre</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">IT-001</td>
                                                    <td>Course Title Here</td>
                                                    <td class="text-center">06 April 2020 | 08:31</td>
                                                    <td class="text-center">15</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center"><a href="{{url('/create_new_chapter')}}">voir chapitre</a></td>
                                                    <td class="text-center">
                                                        <a href="#" title="Edit" class="gray-s"><i
                                                                class="uil uil-edit-alt"></i></a>
                                                        <a href="#" title="Delete" class="gray-s"><i
                                                                class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">IT-002</td>
                                                    <td>Course Title Here</td>
                                                    <td class="text-center">05 April 2020 | 05:15</td>
                                                    <td class="text-center">30</td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center"> <a href="{{url('/create_new_chapter')}}">voir chapitre</a></td>
                                                    <td class="text-center">
                                                        <a href="#" title="Edit" class="gray-s"><i
                                                                class="uil uil-edit-alt"></i></a>
                                                        <a href="#" title="Delete" class="gray-s"><i
                                                                class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">IT-003</td>
                                                    <td>Course Title</td>
                                                    <td class="text-center">03 April 2020 | 01:30</td>
                                                    <td class="text-center">14</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center"> <a href="{{url('/create_new_chapter')}}">voir chapitre</a></td>
                                                    <td class="text-center">
                                                        <a href="#" title="Edit" class="gray-s"><i
                                                                class="uil uil-edit-alt"></i></a>
                                                        <a href="#" title="Delete" class="gray-s"><i
                                                                class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">IT-004</td>
                                                    <td>Course Title Here</td>
                                                    <td class="text-center">02 April 2020 | 05:15</td>
                                                    <td class="text-center">110</td>
                                                    <td class="text-center">9</td>
                                                    <td class="text-center"> <a href="{{url('/create_new_chapter')}}">voir chapitre</a></td>
                                                    <td class="text-center">
                                                        <a href="#" title="Edit" class="gray-s"><i
                                                                class="uil uil-edit-alt"></i></a>
                                                        <a href="#" title="Delete" class="gray-s"><i
                                                                class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">IT-002</td>
                                                    <td>Course Title Here</td>
                                                    <td class="text-center">28 March 2020 | 05:15</td>
                                                    <td class="text-center">185</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-center"><a href="#">C++</a></td>
                                                    <td class="text-center">
                                                        <a href="#" title="Edit" class="gray-s"><i
                                                                class="uil uil-edit-alt"></i></a>
                                                        <a href="#" title="Delete" class="gray-s"><i
                                                                class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr></tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    @endsection
