﻿
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
                            <p>Gains/Années</p>
                            <h2>$1146.78</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains/Sessions</p>
                            <h2>$1146.78</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains/Mois</p>
                            <h2>$1146.78</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="earning_steps">
                            <p>Gains/Heures</p>
                            <h2>$1146.78</h2>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12">
                        <div class="date_selector">
                            <div class="ui selection dropdown skills-search vchrt-dropdown">
                                <input name="date" type="hidden" value="default">
                                <i class="dropdown icon d-icon"></i>
                                <div class="text">Item Sales</div>
                                <div class="menu">
                                    <div class="item" data-value="0">Total Sales</div>
                                    <div class="item" data-value="1">2020</div>
                                </div>
                            </div>
                            <div class="date_list152">
                                <a href="#">All Time</a> /
                                <a href="#">2020</a> /
                                <a href="#">April</a>
                            </div>
                        </div>
                        <div id="order_data" class="table-responsive mt-30">
                            <table class="table ucp-table earning__table">
                                <thead class="thead-s">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Montant reçu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (@$allpayementens)
                                    @foreach ($allpayementens as $pay )
                                    <tr>
                                        <td >{{@$pay->num}}</td>
                                        <td >{{\Carbon\Carbon::parse(@$pays->created_at)->format('j F, Y')}}</td>
                                        <td id="loop">{{@$pay->montant}}</td>
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
    
