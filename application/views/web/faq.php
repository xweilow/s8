<div class="content">
    <section class="banner pb-0">
        <img src="<?= base_url() ?>assets/web/images/banner-product.jpg" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <section class="faq">
            <h2 class="text-center"><?= lang('faq_1'); ?></h2>
            <div class="row">
                <div class="col">
                    <div id="accordion">
                        <div class="card card-1">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                <h5 class="mb-0">
                                <?= lang('faq_2'); ?>
                                </h5>
                            </div>

                            <div id="collapse-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                <?= lang('faq_3'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card card-2">
                            <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                <h5 class="mb-0">
                                <?= lang('faq_4'); ?>
                                </h5>
                            </div>
                            <div id="collapse-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                <?= lang('faq_5'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card card-3">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                <h5 class="mb-0">
                                <?= lang('faq_6'); ?>
                                </h5>
                            </div>
                            <div id="collapse-3" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                <?= lang('faq_7'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card card-4">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                <h5 class="mb-0">
                                <?= lang('faq_8'); ?>
                                </h5>
                            </div>
                            <div id="collapse-4" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                <?= lang('faq_9'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card card-5">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                <h5 class="mb-0">
                                <?= lang('faq_10'); ?>
                                </h5>
                            </div>
                            <div id="collapse-5" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                <?= lang('faq_11'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>