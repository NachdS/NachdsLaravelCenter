
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
                        <div class="table-responsive mt-30">
                            <table class="table ucp-table earning__table">
                                <thead class="thead-s">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Montant reçu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1, Wednesday</td>
                                        <td>$120.50</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2, Thursday</td>
                                        <td>$84.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>4, Saturday</td>
                                        <td>$150.50</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>5, Sunday</td>
                                        <td>$102.24</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td>$1146.78</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
    