<div class="content">
    <section class="banner">
        <img src="<?= base_url() ?>assets/web/images/banner-homepage.jpg" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <section class="benefits">
            <img src="<?= base_url() ?>assets/web/images/img-benefits-<?= ($_SESSION['lang']=='english')?'en':'zh';?>.png" alt="" class="img-fluid w-100">
        </section>

        <section class="steps text-center">
            <h2><?= lang('index_step'); ?></h2>
            <img src="<?= base_url() ?>assets/web/images/img-steps-<?= ($_SESSION['lang']=='english')?'en':'zh';?>.png" alt="detox, nourish, arouse" class="img-fluid">
        </section>
    </div>
</div>           