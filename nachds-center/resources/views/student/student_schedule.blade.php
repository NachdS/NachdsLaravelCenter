@extends('student.layout_public_student_interface')
@section('content_public_student_interface')
    <div class="wrapper" style="min-height: 650px;">
        <div class="sa4d25 min-heigth">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-clipboard-alt"></i> Emplois du temps</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="table-responsive mt-30">
                            <table class="table ucp-table earning__table">
                                <thead class="thead-s">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Séance</th>
                                        <th scope="col">Salle</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Nombre d'heures</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Séance 1</td>
                                        <td>Salle 2</td>
                                        <td>15 Mar 2020</td>
                                        <td>2h</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Séance 2</td>
                                        <td>Salle 4</td>
                                        <td>16 Mar 2020</td>
                                        <td>2h</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
