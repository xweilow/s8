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
                                <?php echo number_format($totalSales, 2) ?>
                            </h1>
                            <h5 class="text-success ml-2"> Total (RM)</h5>
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
        <div class="row d-none pull-up d-lg-flex">
            <div class="col m-b-30">
                <div class="card ">
                    <div class="text-center card-body">
                        <div class="text-success">
                            <div class="avatar avatar-sm">
                                <span class="avatar-title rounded-circle badge-soft-success"><i class="mdi mdi-account mdi-18px"></i> </span>
                            </div>
                            <h6 class="m-t-5 m-b-0"> Total</h6>
                        </div>
                        <div class=" text-center">
                            <h3><?php echo $members ?> </h3>
                        </div>
                        <div class="text-overline ">
                            Members
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-b-30">
                <div class="card ">
                    <div class="text-center card-body">
                        <div class="text-warning">
                            <div class="avatar avatar-sm ">
                                <span class="avatar-title rounded-circle badge-soft-warning"><i class="mdi mdi-inbox mdi-18px"></i> </span>
                            </div>
                            <h6 class="m-t-5 m-b-0">Total</h6>
                        </div>
                        <div class=" text-center">
                            <h3><?php echo $totalBox ?></h3>
                        </div>
                        <div class="text-overline ">
                            Boxes
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-b-30">
                <div class="card ">
                    <div class="   text-center card-body">
                        <div class="text-primary">
                            <div class="avatar avatar-sm ">
                                <span class="avatar-title rounded-circle badge-soft-primary"><i class="mdi mdi-cash-usd mdi-18px"></i> </span>
                            </div>
                            <h6 class="m-t-5 m-b-0"> RM</h6>
                        </div>
                        <div class=" text-center">
                            <h3><?php echo number_format($totalComm, 2) ?></h3>
                        </div>
                        <div class="text-overline ">
                            Commission Payout
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-b-30">
                <div class="card ">
                    <div class="   text-center card-body">
                        <div class="text-danger">
                            <div class="avatar avatar-sm ">
                                <span class="avatar-title rounded-circle badge-soft-danger"><i class="mdi mdi-refresh mdi-18px"></i> </span>

                            </div>
                            <h6 class="m-t-5 m-b-0">RM</h6>
                        </div>


                        <div class=" text-center">
                            <h3><?php echo number_format($totalWr, 2) ?></h3>
                        </div>
                        <div class="text-overline ">
                            Withdrawal
                        </div>
                    </div>
                </div>
            </div>
            <div class="col m-b-30">
                <div class="card ">
                    <div class="   text-center card-body">
                        <div class="text-secondary">
                            <div class="avatar avatar-sm ">
                                <span class="avatar-title rounded-circle badge-soft-secondary"><i class="mdi mdi-wallet mdi-18px"></i> </span>
                            </div>
                            <h6 class="m-t-5 m-b-0">RM</h6>
                        </div>
                        <div class=" text-center">
                            <h3><?php echo number_format($totalWallet, 2) ?></h3>
                        </div>
                        <div class="text-overline ">
                            Wallet Amount
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-b-30">
                <div class="row">
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <h6>THIS MONTH</h6>
                            </div>
                            <div class="list-group list  list-group-flush">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="m-r-20">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title rounded-circle bg-primary">M</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="name"><?php echo $membersMonth ?></div>
                                        <div class="text-muted">Members</div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="m-r-20">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title rounded-circle bg-success">T</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="name">RM <?php echo number_format($salesMonth, 2) ?></div>
                                        <div class="text-muted">Total Sales</div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="m-r-20">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title rounded-circle bg-warning">C</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="name">RM <?php echo number_format($commMonth, 2) ?></div>
                                        <div class="text-muted">Commission Payout</div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="m-r-20">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title rounded-circle bg-secondary">A</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="name">RM <?php echo number_format($wrMonth, 2) ?></div>
                                        <div class="text-muted">Approved Withdrawal</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 m-b-30">
                        <div class="card">
                            <div class="card-header">
                                <h6>THIS WEEK</h6>
                            </div>
                            <div class="list-group list  list-group-flush">
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="m-r-20">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title rounded-circle bg-primary">M</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="name"><?php echo $membersWeek ?></div>
                                        <div class="text-muted">Members</div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="m-r-20">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title rounded-circle bg-success">T</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="name">RM <?php echo number_format($salesWeek, 2) ?></div>
                                        <div class="text-muted">Total Sales</div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="m-r-20">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title rounded-circle bg-warning">C</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="name">RM <?php echo number_format($commWeek, 2) ?></div>
                                        <div class="text-muted">Commission Payout</div>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex  align-items-center">
                                    <div class="m-r-20">
                                        <div class="avatar avatar-sm ">
                                            <div class="avatar-title rounded-circle bg-secondary">A</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="name">RM <?php echo number_format($wrWeek, 2) ?></div>
                                        <div class="text-muted">Approved Withdrawal</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">TOP 5 MEMBER OWN SALES</div>
                    </div>

                    <div class="table-responsive">

                        <table class="table table-hover table-sm ">
                            <thead>
                            <tr>
                                <th>Joined At</th>
                                <th>Username</th>
                                <th style="text-align: center;">Rank</th>
                                <th style="text-align: center;">Own Sales</th>
                                <th style="text-align: center;">Total Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($topSales as $sales) { ?>
                                <tr>
                                    <td class="align-middle"><span class="ml-2"><?php echo date("Y-m-d", strtotime($sales['created_at'])) ?></span></td>
                                    <td class="align-middle"<span class="ml-2"><?php echo $sales['account_name'] ?></span></td>
                                    <td style="text-align: center;"><span class="ml-2"><?php echo getRank($sales['rank']) ?></span></td>
                                    <td class="align-middle"<span class="ml-2" style="text-align: center;"><?php echo $sales['own_sales'] ?></span></td>
                                    <td class="align-middle"<span class="ml-2" style="text-align: center;"><?php echo $sales['total_sales'] ?></span></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-title">THIS WEEK</div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <div id="apexchart-01" class="chart-canvas"></div>
                        </div>
                    </div>
                </div>
                <div class="card m-b-30">
                    <div class="card-body">
                        <h6 class=" p-t-20 fw-600 text-center text-uppercase">Ranking Distribution</h6>
                        <div id="chart-widget-04" style="min-height: 200px"></div>
                        <div class="row text-center m-b-20">
                            <div class="col">
                                <div class="m-b-5">
                                    <div class="avatar avatar-xs">
                                        <div class="avatar-title rounded-circle" style="background-color: #12bfbb"><i class="mdi mdi-circle"></i></div>
                                    </div>
                                </div>
                                <h5 class="m-0"><?php echo getRank(0) ?></h5>
                            </div>
                            <div class="col">
                                <div class="m-b-5">
                                    <div class="avatar avatar-xs">
                                        <div class="avatar-title rounded-circle" style="background-color: #ffb058"><i class="mdi mdi-circle"></i></div>
                                    </div>
                                </div>
                                <h5 class="m-0"><?php echo getRank(1) ?></h5>
                            </div>
                            <div class="col">
                                <div class="m-b-5">
                                    <div class="avatar avatar-xs">
                                        <div class="avatar-title rounded-circle" style="background-color: #687ae8"><i class="mdi mdi-circle"></i></div>
                                    </div>
                                </div>
                                <h5 class="m-0"><?php echo getRank(2) ?></h5>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <div class="m-b-5">
                                    <div class="avatar avatar-xs">
                                        <div class="avatar-title rounded-circle" style="background-color: #f29494"><i class="mdi mdi-circle"></i></div>
                                    </div>
                                </div>
                                <h5 class="m-0"><?php echo getRank(3) ?></h5>
                            </div>
                            <div class="col">
                                <div class="m-b-5">
                                    <div class="avatar avatar-xs">
                                        <div class="avatar-title rounded-circle" style="background-color: #28304e"><i class="mdi mdi-circle"></i></div>
                                    </div>
                                </div>
                                <h5 class="m-0"><?php echo getRank(4) ?></h5>
                            </div>
                            <div class="col">
                                <div class="m-b-5">
                                    <div class="avatar avatar-xs">
                                        <div class="avatar-title rounded-circle" style="background-color: #f2545b"><i class="mdi mdi-circle"></i></div>
                                    </div>
                                </div>
                                <h5 class="m-0"><?php echo getRank(5) ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    name: "RM",
                    data: [<?php $comma = false; foreach($dailySales as $sales) { if($comma == true) { echo ','; } echo $sales['total_price']; $comma = true; } ?>]
                }],
                grid: {
                    borderColor: 'rgba(255,225,255,0.2)',
                    strokeDashArray: '3',

                },
                
                labels: [<?php $comma = false; foreach($dailySales as $sales) { if($comma == true) { echo ','; } echo "'".$sales['date']."'"; $comma = true; } ?>],
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
        if ($("#chart-widget-04").length) {
            var options = {
                colors: ["#12bfbb", "#ffb058", "#687ae8", "#f29494", "#28304e", "#f2545b"],

                chart: {
                    width: 240,
                    type: 'donut',
                },
                labels: ['<?php echo getRank(0) ?>', '<?php echo getRank(1) ?>', '<?php echo getRank(2) ?>', '<?php echo getRank(3) ?>', '<?php echo getRank(4) ?>', '<?php echo getRank(5) ?>'],
                series: [<?php echo $rank0 ?>, <?php echo $rank1 ?>, <?php echo $rank2 ?>, <?php echo $rank3 ?>, <?php echo $rank4 ?>, <?php echo $rank5 ?>],
                dataLabels: {
                    enabled: false
                },
                legend: {
                    position: 'bottom',
                    show: false
                }
            }

            var chart = new ApexCharts(
                document.querySelector("#chart-widget-04"),
                options
            );

            chart.render();
        }
        if ($("#apexchart-01").length) {
            var options = {
                chart: {

                    type: 'bar',
                },
                colors: "#687ae8",
                plotOptions: {
                    bar: {
                        horizontal: false,
                    }
                },
                dataLabels: {
                    enabled: false
                },
                series: [{
                    name: "RM",
                    data: [<?php $comma = false; foreach($weekSales as $sales) { if($comma == true) { echo ','; } echo $sales['sales']; $comma = true; } ?>]
                }],
                xaxis: {
                    categories: [<?php $comma = false; foreach($weekSales as $sales) { if($comma == true) { echo ','; } echo "'".substr($sales['date'], 0, 3)."'"; $comma = true; } ?>],
                },
                yaxis: {},
                tooltip: {}
            };

            var chart = new ApexCharts(
                document.querySelector("#apexchart-01"),
                options
            );

            chart.render();

        }
    })(window.jQuery);
    
</script>
<!--<script src='https://d33wubrfki0l68.cloudfront.net/bundles/9556cd6744b0b19628598270bd385082cda6a269.js'></script>
page specific scripts for demo

 Global site tag (gtag.js) - Google Analytics 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66116118-3"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-66116118-3'); </script>
apex charts includes
<script src='https://d33wubrfki0l68.cloudfront.net/bundles/8cb04aac8b977d9e900a8e3568243d4f46852049.js'></script>-->
