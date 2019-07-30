<div class="content">
    <section class="banner">
        <?php if(sizeof($banners) > 0) { ?>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <?php if(sizeof($banners) > 1) { ?>
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <?php foreach($banners as $key => $banner) { ?>
                <li data-target="#demo" data-slide-to="<?= $key; ?>" class="<?= $key==0?'active':''; ?>"></li>
                <?php } ?>
            </ul>
            <?php } ?>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php foreach($banners as $key => $banner) { 
                    $banner_mobile = base_url().$banner['banner_desktop'];
                    $banner_desktop = base_url().$banner['banner_desktop'];

                    if($banner['banner_mobile']) {
                        $banner_mobile = base_url().$banner['banner_mobile'];
                    }
                ?>
                <div class="carousel-item <?= $key==0?'active':''; ?>">
                <?php if($banner['link']) { ?><a href="<?= $banner['link'] ?>" target="_blank"><?php } ?>
                    <img src="<?= $banner_desktop; ?>" alt="<?= $banner['title'] ?>" class="img-fluid w-100 d-none d-sm-block">
                    <img src="<?= $banner_mobile; ?>" alt="<?= $banner['title'] ?>" class="img-fluid w-100 d-block d-sm-none">
                <?php if($banner['link']) { ?></a><?php } ?>
                </div>
                <?php } ?>
            </div>
            
            <?php if(sizeof($banners) > 1) { ?>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            <?php } ?>

        </div>
        <?php } else { ?>
        <img src="<?= base_url() ?>assets/web/images/banner-homepage.jpg" alt="" class="img-fluid w-100">
        <?php } ?>
    </section>
    <div class="container">
        <section class="benefits">
            <img src="<?=base_url()?>assets/web/images/img-benefits-<?=($_SESSION['lang'] == 'english') ? 'en' : 'zh';?>.png" alt="" class="img-fluid w-100">
        </section>

        <section class="steps text-center">
            <h2><?=lang('index_step');?></h2>
            <img src="<?=base_url()?>assets/web/images/img-steps-<?=($_SESSION['lang'] == 'english') ? 'en' : 'zh';?>.png" alt="detox, nourish, arouse" class="img-fluid">
        </section>
    </div>
</div>