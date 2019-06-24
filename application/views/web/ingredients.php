<div class="content">
    <section class="banner pb-0">
        <img src="<?= base_url() ?>assets/web/images/banner-product.jpg" alt="" class="img-fluid w-100">  
    </section>
    <div class="container">
        <section class="main-ingredients">
            <img src="<?= base_url() ?>assets/web/images/img-ingredients-<?= ($_SESSION['lang']=='english')?'en':'zh';?>.jpg" alt="main ingredients" class="img-fluid w-100">  
        </section>
        <section class="ingredients-contain pb-3">
            <h2 class="text-center"><?= lang('ing_1'); ?></h2>
            <div class="row">
                <div class="col-md-3 box box-1 d-flex align-items-center justify-content-center"><?= lang('ing_2'); ?></div>
                <div class="col-md-3 box box-2 d-flex align-items-center justify-content-center"><?= lang('ing_3'); ?></div>
                <div class="col-md-3 box box-3 d-flex align-items-center justify-content-center"><?= lang('ing_4'); ?></div>
                <div class="col-md-3 box box-4 d-flex align-items-center justify-content-center"><?= lang('ing_5'); ?></div>
                <div class="col-md-3 box box-5 d-flex align-items-center justify-content-center"><?= lang('ing_6'); ?></div>
                <div class="col-md-3 box box-6 d-flex align-items-center justify-content-center"><?= lang('ing_7'); ?></div>
                <div class="col-md-3 box box-7 d-flex align-items-center justify-content-center"><?= lang('ing_8'); ?></div>
                <div class="col-md-3 box box-8 d-flex align-items-center justify-content-center"><?= lang('ing_9'); ?></div>
            </div>
        </section>
    </div>
</div>