<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>S8 - Login</title>
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
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/LLC.js"></script>
    <script>
        var baseURL = '<?php echo base_url() ?>';
    </script>
</head>
<body class="jumbo-page">

<main class="admin-main">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4  bg-white">
                <div class="row align-items-center m-h-100">
                    <div class="mx-auto col-md-8">
                        <div class="p-b-20 text-center">
                            <p>
                                <img src="<?= base_url() ?>img/logo.png" width="150" alt="">
                            </p>
                        </div>
                        <h3 class="text-center p-b-20 fw-400">Login</h3>
                        <?php if(isset($_SESSION['errmsg'])) { ?>
                        <div class="alert alert-border-danger alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="icon mdi mdi-alert-octagram"></i>
                                </div>
                                <div class="content" style="margin-top: 7px;">
                                    <?php echo $_SESSION['errmsg']; unset($_SESSION['errmsg']); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <form class="form-validation" method="POST" action="<?php echo base_url() ?>auth/login">
                            <div class="form-row">
                                <div class="form-group floating-label col-md-12">
                                    <label>Username</label>
                                    <input type="text" required class="form-control" placeholder="Username" name="account_name" autocomplete="new-password">
                                </div>
                                <div class="form-group floating-label col-md-12">
                                    <label>Password</label>
                                    <input type="password" required class="form-control" placeholder="Password" name="password" autocomplete="new-password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block llc_submit">Login</button>
                        </form>
                        <p class="text-right p-t-10">
                            <a href="#!" class="text-underline">Forgot Password?</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-none d-md-block bg-cover" style="background-image: url('<?= base_url() ?>assets/img/login.svg');"></div>
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
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap-notify-data.js"></script>
<!--page specific scripts for demo-->
</body>
</html>