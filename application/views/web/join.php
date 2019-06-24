<div class="content">
    <section class="banner pb-0">
        <img src="<?= base_url() ?>assets/web/images/banner-join-<?= ($_SESSION['lang']=='english')?'en':'zh';?>.jpg" alt="" class="img-fluid w-100">  
    </section>
    <div class="container">
        <section class="join pt-5 pb-5">
            <div class="row no-gutters">
                <div class="col-md-6 box box-1">
                    <div class="box-header text-center">
                        <?= lang('join_1'); ?>
                    </div>
                    <div class="box-body">
                        <div class="text-center pb-4">
                            <img src="<?= base_url() ?>assets/web/images/img-join1.jpg" alt="" class="img-fluid">
                        </div>
                        <p><?= lang('join_2'); ?></p><p><?= lang('join_3'); ?></p>
                    </div>
                </div>
                <div class="col-md-6 box box-2">
                <div class="box-header text-center">
                    <?= lang('join_4'); ?>
                    </div>
                    <div class="box-body">
                        <div class="text-center pb-4">
                            <img src="<?= base_url() ?>assets/web/images/img-join2.jpg" alt="" class="img-fluid">
                        </div>
                        <p><?= lang('join_5'); ?></p><p><?= lang('join_6'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>