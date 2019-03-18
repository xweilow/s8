<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>Atmos Admin Panel- Bootstrap 4 Based Admin Panel</title>
<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/logo.png"/>
<link rel="icon" href="<?= base_url() ?>assets/img/logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/pace/pace.css">
<script src="<?= base_url() ?>assets/vendor/pace/pace.min.js"></script>
<!--vendors-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/jquery-scrollbar/jquery.scrollbar.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/timepicker/bootstrap-timepicker.min.css">
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url() ?>assets/fonts/jost/jost.css">
<!--Material Icons-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/materialdesignicons/materialdesignicons.min.css">
<!--Bootstrap + atmos Admin CSS-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/atmos.min.css">
<!-- Additional library for page -->

</head>
<body class="jumbo-page">
<section class="gradient-01">
    <div class="container ">
        <div class="row m-h-100 ">
            <div class="col-md-10 col-lg-8 m-auto">
                <div class="bg-white rounded m-t-100 m-b-80  shadow-lg  ">
                    <div class=" padding-box-2 p-all-25">
                        <div class="">
                            <div class="text-center p-b-20 pull-up-sm">
                                <div class="avatar avatar-lg">
                                    <span class="avatar-title rounded-circle bg-success"> <i class="mdi mdi-server"></i> </span>
                                </div>

                            </div>
                            <h3 class="text-center">System Status</h3>
                            <p class="text-muted text-center">
                                General overview of System
                            </p>
                            <div class="list-group">
                                <a href="#"
                                   class="list-group-item d-flex justify-content-between align-items-center active">
                                    <span> <i class="mdi mdi-circle text-success"></i>  All Vital Systems are operational</span>

                                </a>
                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center ">
                                    <span><i class="mdi mdi-circle text-success"></i>  Database System</span>
                                    <span class="opacity-75">99.99%</span>
                                </a>

                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center ">
                                    <span><i class="mdi mdi-circle text-success"></i>  File System</span>
                                    <span class="opacity-75">99.99%</span>
                                </a>

                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center ">
                                    <span><i class="mdi mdi-circle text-success"></i>  Backup Servers</span>
                                    <span class="opacity-75">99.99%</span>
                                </a>

                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center ">
                                    <span><i class="mdi mdi-circle text-danger"></i>  Content Delivery Networks <span
                                                class="badge-dark badge">Under Review</span></span>
                                    <span class="opacity-75">45%</span>
                                </a>

                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center ">
                                    <span><i class="mdi mdi-circle text-success"></i>  API v3</span>
                                    <span class="opacity-75">99.99%</span>
                                </a>
                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center ">
                                      <span>
                                           <i class="mdi mdi-circle text-warning"></i>  API v1
                                      </span> <span class="opacity-75 ">  Going Offline 1 <sup>st</sup> Dec 2018</span>
                                </a>

                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center ">
                                    <span><i class="mdi mdi-circle text-success"></i>  Load Balancer</span>
                                    <span class="opacity-75">99.99%</span>
                                </a>
                            </div>
                            <h5 class="m-t-30">Past Incidents</h5>
                            <div class="p-t-20">
                                <p class="font-secondary m-b-0">Aug 28, 2018
                                </p>
                                <hr class="m-t-5 m-b-5">
                                <span class="badge-success badge">Resolved</span> - Between 19:05 and 20:30 UTC, some
                                customers may have experienced issues with charts and Insights queries. Impacted
                                customers can expect no lasting impact as a result of this issue.
                                Aug 28, 13:34 PDT
                            </div>
                            <div class="p-t-20">
                                <p class="font-secondary m-b-0">Jan 8, 2018
                                </p>
                                <hr class="m-t-5 m-b-5">
                                <span class="badge-success badge">Resolved</span> - Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Accusantium deleniti ducimus expedita incidunt, ipsam nemo
                                numquam rem sit ullam voluptas? Dolores eum laboriosam magni odit perspiciatis quod
                                recusandae repellat ut.
                            </div>

                            <div class="p-t-20">
                                <p class="font-secondary m-b-0">Nov 13, 2017
                                </p>
                                <hr class="m-t-5 m-b-5">
                                <span class="badge-success badge">Resolved</span> - Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Accusantium deleniti ducimus expedita incidunt, ipsam nemo
                                numquam rem sit ullam voluptas? Dolores eum laboriosam magni odit perspiciatis quod
                                recusandae repellat ut.
                            </div>

                            <div class="p-t-20 text-md-right">
                                <a href="#!" class="btn btn-light">Show Older</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/popper/popper.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/select2/js/select2.full.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/listjs/listjs.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?= base_url() ?>assets/js/atmos.min.js"></script>
<!--page specific scripts for demo-->


</body>
</html>