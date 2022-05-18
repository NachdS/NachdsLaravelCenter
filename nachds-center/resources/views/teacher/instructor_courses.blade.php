@extends('teacher.layout_public_teacher_interface')
@section('content_public_teacher_interface')
    <div class="wrapper" style="min-height: 650px;">
        <div class="sa4d25" >
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
                                    onclick="window.location.href = '{{ url('/create_new_course') }}';">Créez votre
                                    cours</button>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">

                        <p>{{ $message }}</p>

                    </div>
                @endif
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
                                                    <!--<th class="text-center" scope="col">Formation</th>-->
                                                    <th class="text-center" scope="col">nombre de chapitre </th>
                                                    <th class="text-center" scope="col">Chapitre</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cours as $cour)
                                                    <tr>
                                                        <td class="text-center" style="text-align: center;">
                                                            {{ ++$i }}</td>
                                                        <td class="text-center" style="text-align: center;">
                                                            {{ $cour->designation }}</td>
                                                        <td class="text-center" style="text-align: center;">
                                                            {{ \Carbon\Carbon::parse(@$cour->created_at)->format('j F, Y') }}
                                                        </td>
                                                        <!--<td class="text-center"> </td>-->
                                                        <td class="text-center" style="text-align: center;">
                                                            {{ $cour->chapitres->count() }}</td>
                                                        <td class="text-center" style="text-align: center;"><a
                                                                href="{{ route('create_new_chapter', ['id' => @$cour->id]) }}">voir
                                                                chapitre</a></td>
                                                        <td class="text-center d-flex" style="place-content: center;">
                                                            <form action="{{ route('delete_new_course', $cour->id) }}"
                                                                method="GET">

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" title="Delete" class="gray-s"
                                                                    style="background-color: transparent !important;
                                                                border: 0 !important;"><i
                                                                        class="uil uil-trash-alt"></i></button>
                                                            </form>

                                                            <form action="{{ route('delete_new_course', $cour->id) }}"
                                                                method="GET">

                                                                <a class="gray-s"
                                                                    href="{{ route('edit_new_course', $cour->id) }}"><i
                                                                        class="uil uil-edit-alt"></i></a>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr></tr>
                                            </tfoot>
                                        </table>
                                        <div class='mt-10 mb-10' style="float: right;">
                                            {{ $cours->links() }}
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
