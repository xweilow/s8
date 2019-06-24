<div class="content">
    <section class="banner pb-0">
        <img src="<?= base_url() ?>assets/web/images/banner-product.jpg" alt="" class="img-fluid w-100">  
    </section>
    <div class="container">
        <section class="suitable">
            <h2 class="text-center">
            <?= lang('suit_1'); ?>
            </h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img src="<?= base_url()?>assets/web/images/img-suitable1.jpg" alt="" class="img-fluid">
                    <div class="suitable-text"><?= lang('suit_2'); ?></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="<?= base_url()?>assets/web/images/img-suitable2.jpg" alt="" class="img-fluid">
                    <div class="suitable-text"><?= lang('suit_3'); ?></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="<?= base_url()?>assets/web/images/img-suitable3.jpg" alt="" class="img-fluid">
                    <div class="suitable-text"><?= lang('suit_4'); ?></div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="<?= base_url()?>assets/web/images/img-suitable4.jpg" alt="" class="img-fluid">
                    <div class="suitable-text"><?= lang('suit_5'); ?></div>
                </div>
            </div>
        </section>
        <section class="majorbenefits separatorLine pb-5">
            <h2 class="text-center"><?= lang('suit_6'); ?></h2>
            <img src="<?= base_url()?>assets/web/images/img-majorbenefits-<?= ($_SESSION['lang']=='english')?'en':'zh';?>.png" alt="8 major benefits" class="img-fluid">
        </section>
    </div>
</div>