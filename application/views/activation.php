<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<title>S8 - Account Activation</title>
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

<main class="admin-main  bg-pattern">
    <div class="container">
        <div class="row m-h-100 ">
            <div class="col-md-8 col-lg-4  m-auto">
                <div class="card shadow-lg ">
                    <div class="card-body ">
                        <div class=" padding-box-2 ">
                            <div class="text-center p-b-20 pull-up-sm">
                                <div class="avatar avatar-lg">
                                    <span class="avatar-title rounded-circle bg-pink"> <i class="mdi mdi-account"></i> </span>
                                </div>
                            </div>
                            <h3 class="text-center">Account Activation</h3>
                            <?php if(isset($_SESSION['errmsg'])) { ?>
                            <div class="form-group m-t-30">
                                <p class="text-center text-danger">
                                    <?php echo $_SESSION['errmsg']; unset($_SESSION['errmsg']); ?>
                                </p>
                            </div>
                            <?php } else { ?>
                            <div class="form-group m-t-30">
                                <p class="text-center">
                                    Congratulations!<br />
                                    Your Account Is Successfully Activated!
                                </p>
                            </div>
                            <div class="form-group">
                                <a class="btn text-uppercase btn-block btn-primary" href='<?php echo base_url() ?>panel'>
                                    Login
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

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