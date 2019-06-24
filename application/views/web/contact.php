<div class="content">
    <section class="banner">
        <img src="<?= base_url() ?>assets/web/images/banner-contact-<?= ($_SESSION['lang']=='english')?'en':'zh';?>.jpg" alt="" class="img-fluid w-100">
    </section>
    <div class="container">
        <section class="contact">
            <h2 class="text-center"><?= lang('contact_1'); ?></h2>
            <form action="" id="form-contact" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control input-name" placeholder="<?= lang('contact_2'); ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control input-email" placeholder="<?= lang('contact_3'); ?>" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control input-subject" placeholder="<?= lang('contact_4'); ?>" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control input-message" placeholder="<?= lang('contact_5'); ?>" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary"><?= lang('contact_6'); ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        
        <section class="findus separatorLine">
            <h2 class="text-center text-gold">
            <?= lang('contact_7'); ?>
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-10">Perfect Body Corner (002787755-M)</div>
                    No 16, Jalan Penggawa 15/2, Seksyen 2,<br>Bandar Mahkota Cheras, 43200 Cheras,<br>Selangor.
                </div>
                <div class="col-md-4">
                    <div class="mb-10"><?= lang('contact_8'); ?></div>+6010-668 8325
                </div>
                <div class="col-md-4">
                    <div class="mb-10"><?= lang('contact_9'); ?></div><a href="mailto:support@perfectbodycorner.com"> support@perfectbodycorner.com</a>
                </div>
            </div>
        </section>
    </div>
</div>