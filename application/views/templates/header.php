<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <title>S8 - <?php echo $title ?></title>
        <link rel="icon" type="image/x-icon" href="<?= base_url() ?>img/favicon.ico"/>
        <link rel="icon" href="<?= base_url() ?>img/favicon.ico" type="image/png" sizes="16x16">
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
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/dashboard.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/DataTables/datatables.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
        <link rel='stylesheet' href='<?php echo base_url() ?>assets/vendor/summernote/summernote-bs4.css'/>
        
        <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>js/LLC.js"></script>
        
        <script src="<?= base_url() ?>assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap-notify-data.js"></script>
        <script>
            var baseURL = '<?php echo base_url() ?>';
        </script>
    </head>
    <body class="pace-done sidebar-pinned">
        <aside class="admin-sidebar">
            <div class="admin-sidebar-brand">
                <!-- begin sidebar branding-->
                <img class="admin-brand-logo" src="<?= base_url() ?>img/logo.png" width="100" alt="Logo">
                <!-- <span class="admin-brand-content font-secondary"><a href="index.html">  S-8</a></span> -->
                <!-- end sidebar branding-->
                <div class="ml-auto">
                    <!-- sidebar pin-->
                    <!-- <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle pinned"></a> -->
                    <!-- sidebar close for mobile device-->
                    <a href="#" class="admin-close-sidebar"></a>
                </div>
            </div>
            <?php echo $menu; ?>
        </aside>
        <main class="admin-main">
        <!--site header begins-->
        <header class="admin-header">
            <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>
            <nav class=" ml-auto">
                <ul class="nav align-items-center">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#"   role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-sm avatar-online">
                                <span class="avatar-title rounded-circle bg-dark"><?php echo strtoupper(AN()[0]) ?></span>
                            </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo base_url() ?>auth/logout"> Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <!--site header ends -->