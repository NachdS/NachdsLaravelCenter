@extends('teacher.layout_public_teacher_interface')
@section('content_public_teacher_interface')

    <div class="wrapper">
        <div class="sa4d25">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="st_title"><i class="uil uil-dollar-sign"></i> Revenus</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains Années Précédente</p>
                            <h2>{{ $last_year }}dt</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains Sessions Précédente</p>
                            <h2>{{ $last_session }}dt</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains Mois Précédent</p>
                            <h2>{{ $last_month }}dt</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains Semaine Précédente</p>
                            <h2>{{ $last_7_days }}dt</h2>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 ">
                        <div class="date_selector" style="display: flow-root;">
                            <div class="dropdownList">
                                Filter By Year
                                <select id="dropdownField" style="width: 100px; height: 30px;">
                                    <option value="All" selected>All</option>
                                    @if (@$year)
                                        @foreach ($year as $y)
                                            <option value="{{ \Carbon\Carbon::parse(@$y->created_at)->format('Y') }}">
                                                {{ \Carbon\Carbon::parse(@$y->created_at)->format('Y') }}</option>
                                        @endforeach
                                    @endif
                                </select>


                                <!--<div class="date_list152">
                                    <a href="#">All Time</a> /
                                    <a href="#">2020</a> /
                                    <a href="#">April</a>
                                </div>-->
                            </div>
                            <div id="order_data" class="table-responsive mt-30">
                                <table id="myTable" class="table ucp-table earning__table">
                                    <thead id="headerRow" class="thead-s">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Montant reçu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (@$allpayementens)
                                            @foreach ($allpayementens as $pay)
                                                <tr year="{{ \Carbon\Carbon::parse(@$pay->created_at)->format('Y') }}">
                                                    <td>{{ @$pay->id }}</td>
                                                    <td>{{ \Carbon\Carbon::parse(@$pay->created_at)->format('j F, Y') }}
                                                    </td>
                                                    <td id="loop">{{ @$pay->montant }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td Total> Total</td>
                                            <td> </td>
                                            <td id="total"></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class='mt-10 mb-10' style="float: right;">
                                    {{ $allpayementens->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    @endsection
