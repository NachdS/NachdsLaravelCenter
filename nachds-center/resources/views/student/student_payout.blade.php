@extends('student.layout_public_student_interface')
@section('content_public_student_interface')
    <div class="wrapper" style="min-height: 650px;">
        <div class="sa4d25 min-heigth">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-wallet"></i> Paiement</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="top_countries mt-30">
                            <div class="top_countries_title">
                                <h2>Reçu Total </h2>
                            </div>
                            <div class="payout_content">
                                <span><strong>$4568.50</strong></span>
                                <div class="payout__via">
                                </div>
                                <div class="">
                                    <p><small class="payout__small-notification">Etat Formation
                                            <strong>Payé/ Pas encore Payé</strong></small>
                                        <button class="main-btn color btn-hover" style="float: right;"
                                            onclick="window.location.href = '{{ url('/make_new_payement') }}';"><i
                                                class="fas fa-dollar-sign mr-2"></i>Effectuer paiement</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="top_countries mt-30">
                            <div class="top_countries_title">
                                <h2>Le reste à payer</h2>
                            </div>
                            <div class="payout_content">
                                <img src="" alt="">
                                <span><strong>$4568.50</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="table-responsive mt-30">
                            <table class="table ucp-table earning__table">
                                <thead class="thead-s">
                                    <tr>
                                        <th scope="col">Montant Reçu</th>
                                        <th scope="col">Nom de la formation</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Periode(jours)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>$2550.54</td>
                                        <td>Payoneer</td>
                                        <td>15 Mar 2020</td>
                                        <td>15 Mar 2020</td>
                                    </tr>
                                    <tr>
                                        <td>$1950.14</td>
                                        <td>Payoneer</td>
                                        <td>15 Feb 2020</td>
                                        <td>15 Mar 2020</td>
                                    </tr>
                                    <tr>
                                        <td>$1950.14</td>
                                        <td>Payoneer</td>
                                        <td>15 Feb 2020</td>
                                        <td>15 Mar 2020</td>
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
