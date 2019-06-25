<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S8</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>img/favicon.ico"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/css/style.css">
    <?php if($_SESSION['lang'] == 'simplified-chinese'): ?>
    <style>
        body {
            font-family: 'KaiTi', sans-serif;
        }
        header .header-bottom .navbar .navbar-nav > li > a, header .header-bottom .navbar .dropdown-item {
            font-size: 20px;
        }
    </style>
    <?php endif; ?>
</head>

<body class="page page-<?= $page; ?>">
    <div class="wrapper">
        <div class="container-fluid">
            <header>
                <div class="header-top">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col align-self-center">
                            <div class="logo text-center">
                                <a href="<?= base_url() ?>web/"><img src="<?= base_url() ?>assets/web/images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col align-self-center text-right">
                            <div class="user-login">
                                <a href="https://perfects8.com/panel/login" target="_blank"><?= lang('sellerLogin'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="navbar-collapse collapse" id="navbar10">
                                <ul class="navbar-nav nav-fill w-100 m-auto">
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($page == 'index')?'active':''; ?>" href="<?= base_url() ?>web/"><?= lang('home'); ?></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle <?= ($page == 'about' || $page == 'product-cert')?'active':''; ?>" href="#" id="dropdown1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?= lang('about'); ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown1">
                                            <a class="dropdown-item" href="<?= base_url() ?>web/about"><?= lang('about'); ?></a>
                                            <a class="dropdown-item" href="<?= base_url() ?>web/productCert"><?= lang('productCert'); ?></a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle <?= ($page == 'ingredients' || $page == 'suitable' || $page == 'faq')?'active':''; ?>" href="#" id="dropdown2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?= lang('product'); ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown2">
                                            <a class="dropdown-item" href="<?= base_url() ?>web/ingredients"><?= lang('ingredients'); ?></a>
                                            <a class="dropdown-item" href="<?= base_url() ?>web/suitable"><?= lang('suitable'); ?></a>
                                            <a class="dropdown-item" href="<?= base_url() ?>web/faq"><?= lang('faq'); ?></a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($page == 'contact')?'active':''; ?>" href="<?= base_url() ?>web/contact"><?= lang('contact'); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($page == 'join')?'active':''; ?>" href="<?= base_url() ?>web/join"><?= lang('join'); ?></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown3"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?= lang('language'); ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown3">
                                            <a class="dropdown-item" href="<?= base_url() ?>language/set/english">English</a>
                                            <a class="dropdown-item" href="<?= base_url() ?>language/set/simplified-chinese">中文</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>