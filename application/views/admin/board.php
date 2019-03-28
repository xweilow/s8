<section class="admin-content">
    <div class="bg-dark ">
        <div class="container-fluid m-b-30">
            <div class="row">
                <div class="text-white col-lg-6">
                    <div class="p-all-15">
                        <div class="text-overline m-t-10 opacity-75">
                            Sales Graph
                        </div>
                        <div class="d-md-flex m-t-20 align-items-center">
                            <div class="avatar avatar-lg my-auto mr-2">
                                <div class="avatar-title bg-warning rounded-circle">
                                    <i class="mdi mdi-chart-areaspline"></i>
                                </div>
                            </div>
                            <h1 class="display-4">
                                <?php echo $totalSales ?>
                            </h1>
                            <h5 class="text-success ml-2"> Total (Boxes)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 p-b-60">
                    <div id="chart-090" class="chart-canvas invert-colors"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row d-none  pull-up d-lg-flex">
            <div class="col m-b-30">
                <div class="card ">

                    <div class="card-body">
                        <div class="card-controls">
                            <a href="#" class="badge badge-soft-success"> <i class="mdi mdi-arrow-down"></i> 12
                                %</a>
                        </div>
                        <div class="text-center p-t-30 p-b-20">
                            <div class="text-overline text-muted opacity-75">bitcoin price</div>
                            <h1 class="text-success">$ 7,560</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-b-30">
                <div class="card ">

                    <div class="card-body">
                        <div class="card-controls">
                            <a href="#" class="badge badge-soft-danger"> <i class="mdi mdi-arrow-down"></i> 35 %</a>
                        </div>
                        <div class="text-center p-t-30 p-b-20">
                            <div class="text-overline text-muted opacity-75">last month price</div>
                            <h1 class="text-danger">$ 1850</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col m-b-30">
                <div class="card ">

                    <div class="card-body">
                        <div class="card-controls">
                            <a href="#" class="badge badge-soft-success"> <i class="mdi mdi-arrow-up"></i> 32 %</a>
                        </div>
                        <div class="text-center p-t-30 p-b-20">
                            <div class="text-overline text-muted opacity-75">
                                Etherium
                            </div>
                            <h1 class="text-success">$ 4,540</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col m-b-30">
                <div class="card ">

                    <div class="card-body">
                        <div class="card-controls">
                            <a href="#" class="badge badge-soft-danger"> <i class="mdi mdi-arrow-down"></i> 10 %</a>
                        </div>
                        <div class="text-center p-t-30 p-b-20">
                            <div class="text-overline text-muted opacity-75">
                                lite coin
                            </div>
                            <h1 class="text-danger">$ 60,540</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-b-30">
                <div class="card ">

                    <div class="card-body">
                        <div class="card-controls">
                            <a href="#" class="badge badge-soft-success"> <i class="mdi mdi-arrow-up"></i> 65 %</a>
                        </div>
                        <div class="text-center p-t-30 p-b-20">
                            <div class="text-overline text-muted opacity-75">
                                ripple
                            </div>
                            <h1 class="text-success">$ 14,540</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col visible-xlg   m-b-30">
                <div class="card ">

                    <div class="card-body">
                        <div class="card-controls">
                            <a href="#" class="badge badge-soft-danger"> <i class="mdi mdi-arrow-down"></i> 10 %</a>
                        </div>
                        <div class="text-center p-t-30 p-b-20">
                            <div class="text-overline text-muted opacity-75">
                                EOS
                            </div>
                            <h1 class="text-danger">$ 9,540</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-8 m-b-30">
                <div class="row">
                    <div class="col-md-6 m-b-10">
                        <h3>Transactions</h3>

                    </div>
                    <div class="col-md-6 text-right p-b-10  my-auto">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-white shadow-none js-datepicker"><i
                                        class="mdi mdi-calendar"></i> Pick Date
                            </button>
                            <button type="button" class="btn btn-white shadow-none">Daily</button>
                            <button type="button" class="btn btn-primary shadow-none">Monthly</button>
                            <button type="button" class="btn btn-white shadow-none">Yearly</button>
                        </div>


                    </div>
                    <div class="col-md-12">
                        <div class="card m-b-30">
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover ">
                                        <thead>
                                        <tr>
                                            <th scope="col">#Transaction ID</th>
                                            <th scope="col">Currency</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Exchange</th>
                                            <th scope="col">USD</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Change In</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="border-left border-strong border-danger">#785612</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 4.25</td>
                                            <td>BTC 4.25</td>
                                            <td>$45,00</td>
                                            <td>25 June 2018</td>
                                            <td><span class="text-danger h5">-32.01%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="border-left border-strong border-danger">#785612</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 4.25</td>
                                            <td>BTC 4.25</td>
                                            <td>$45,00</td>
                                            <td>25 June 2018</td>
                                            <td><span class="text-danger h5">-32.01%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="border-left border-strong border-danger">#785612</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 4.25</td>
                                            <td>BTC 4.25</td>
                                            <td>$45,00</td>
                                            <td>25 June 2018</td>
                                            <td><span class="text-danger h5">-32.01%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="border-left border-strong border-danger">#785612</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 4.25</td>
                                            <td>BTC 4.25</td>
                                            <td>$45,00</td>
                                            <td>25 June 2018</td>
                                            <td><span class="text-danger h5">-32.01%</span></td>
                                        </tr>

                                        <tr>
                                            <td class="border-left border-strong border-success">#765320</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 14.25</td>
                                            <td>BTC 12.05</td>
                                            <td>$650</td>
                                            <td>26 June 2018</td>
                                            <td><span class="text-success h5">48%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="border-left border-strong border-danger">#65656</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 400.25</td>
                                            <td>BTC 390.25</td>
                                            <td>$50,000</td>
                                            <td>27 June 2018</td>
                                            <td><span class="text-danger h5">33%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="border-left border-strong border-danger">#785612</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 5.25</td>
                                            <td>BTC 7.25</td>
                                            <td>$8600</td>
                                            <td>30 Dec 2018</td>
                                            <td><span class="text-danger h5">2.01%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="border-left border-strong border-success">#785612</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 4.25</td>
                                            <td>BTC 4.25</td>
                                            <td>$45,00</td>
                                            <td>12 Nov 2018</td>
                                            <td><span class="text-success h5">58.01%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="border-left border-strong border-danger">#65656</td>
                                            <td>Bitcoin</td>
                                            <td>BTC 400.25</td>
                                            <td>BTC 390.25</td>
                                            <td>$50,000</td>
                                            <td>27 June 2018</td>
                                            <td><span class="text-danger h5">33%</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-dark card bg-dark m-b-30 bg-dots" >
                    <div class="card-body">
                        <div class="p-all-15 text-center">
                            <div>
                                <div class="avatar avatar-xl my-auto mr-2">
                                    <div class="avatar-title bg-warning rounded-circle">
                                        <i class="mdi mdi-bank-transfer "></i>
                                    </div>
                                </div>
                                <h3 class="m-t-20 m-b-20 text-white">Quick Transfer</h3>
                            </div>
                            <input type="text" placeholder="Enter receivers name"
                                   class=" search form-control form-control-lg m-b-10">
                            <input type="number" placeholder="Enter amount in BTC"
                                   class=" search form-control form-control-lg m-b-10">
                            <div class="">
                                <a href="#" class="btn btn-primary btn-lg btn-block">Transfer</a>
                            </div>
                            <p class="opacity-75 text-white p-t-10">
                                All Transfers are done via coinbase. if transfer fails please use #transferId send
                                to your mail in order to process dispute.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-body ">

                        <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                            <div class="row ">
                                <div class="col-md-7">
                                    <h6 class="">Bitcoin
                                    </h6>
                                    <p class="text-muted m-0 ">
                                        Awerage Weekly Profit

                                    </p>
                                </div>
                                <div class="col-md-5 my-auto  text-right">
                                    <h4 class="text-primary m-0">$5900</h4>

                                </div>
                            </div>

                        </div>
                        <div class="p-t-15 p-b-15  border-bottom border-bottom-dashed">
                            <div class="row ">
                                <div class="col-md-7">
                                    <h6 class="">Bitcoin Vs USD</h6>
                                    <p class="text-muted m-0 ">
                                        Growth Past Quarter
                                    </p>
                                </div>
                                <div class="col-md-5 my-auto  text-right">
                                    <h4 class="text-success m-0">$6400</h4>

                                </div>
                            </div>

                        </div>
                        <div class="p-t-15 p-b-15  ">
                            <div class="row ">
                                <div class="col-md-7">
                                    <h6 class="">Overall Transactions</h6>
                                    <p class="text-muted m-0 ">
                                        Market Liquidity
                                    </p>
                                </div>
                                <div class="col-md-5 my-auto  text-right">
                                    <h4 class="text-danger m-0">-15%</h4>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script> 
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-66116118-3'); </script>

<!--Additional Page includes-->
<script src='<?php echo base_url() ?>assets/vendor/apexchart/apexcharts.min.js'></script>

<script>
    (function ($) {
        'use strict';
        if ($("#chart-090").length) {
            var options = {
                chart: {
                    height: 350,
                    type: 'area',

                    animations: {
                        enabled: true,
                    },
                },
                colors: "#fff",
                dataLabels: {
                    enabled: false
                },


                stroke: {
                    colors: ["#fff"],
                    curve: 'straight',
                    width: 3
                },
                series: [{
                    name: "Bitcoin Price",
                    data: [8107.85, 8128, 8122.9, 8165.5, 8340.7, 8423.7, 8423.5, 8514.3, 8481.85, 8487.7, 8506.9, 8626.2, 8668.95, 8602.3, 8607.55, 8512.9, 8496.25, 8600.65, 8881.1, 9340.85]
                }],
                grid: {
                    borderColor: 'rgba(255,225,255,0.2)',
                    strokeDashArray: '3',

                },

//                labels: ["13 Nov 2017", "14 Nov 2017", "15 Nov 2017", "16 Nov 2017", "17 Nov 2017", "20 Nov 2017", "21 Nov 2017", "22 Nov 2017", "23 Nov 2017", "24 Nov 2017", "27 Nov 2017", "28 Nov 2017", "29 Nov 2017", "30 Nov 2017", "01 Dec 2017", "04 Dec 2017", "05 Dec 2017", "06 Dec 2017", "07 Dec 2017", "08 Dec 2017"],
//                xaxis: {
//                    type: 'datetime',
//
//                },
//                yaxis: {},
//                legend: {
//                    horizontalAlign: 'left'
//                }
//                labels: [<?php // foreach() ?>],
                xaxis: {
                    type: 'datetime',

                },
                yaxis: {},
                legend: {
                    horizontalAlign: 'left'
                }
            }

            var chart = new ApexCharts(
                document.querySelector("#chart-090"),
                options
            );

            chart.render();

        }
    })(window.jQuery);
</script>