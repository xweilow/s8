            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 footer-left">
                            <h5><?= lang('followus'); ?>:</h5>
                            <div class="socials">
                                <a href="https://www.facebook.com/S-8-2094595877319903/" target="_blank"><img src="<?= base_url() ?>assets/web/images/icon-fb.png" alt=""></a>
                                <a href="#"><img src="<?= base_url() ?>assets/web/images/icon-twitter.png" alt=""></a>
                                <a href="#"><img src="<?= base_url() ?>assets/web/images/icon-linkedin.png" alt=""></a>
                                <a href="#"><img src="<?= base_url() ?>assets/web/images/icon-instagram.png" alt=""></a>
                                <a href="#"><img src="<?= base_url() ?>assets/web/images/icon-youtube.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-3 footer-center">
                            <h5><?= lang('paymentMethods'); ?></h5>
                            <img src="<?= base_url() ?>assets/web/images/icon-maybank.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-3 footer-right">
                            <h5><?= lang('deliveryServices'); ?></h5>
                            <img src="<?= base_url() ?>assets/web/images/icon-delivery.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-12 footer-bottom">
                            <small class="copyright">
                                Perfect Body Corner &copy; <?= date('Y'); ?>. <?= lang('copyright') ?>.
                            </small>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        var baseURL = '<?= base_url() ?>';
    </script>
    <script src="<?= base_url() ?>assets/web/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>assets/web/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>js/LLC.js"></script>
    <script src="<?= base_url() ?>assets/web/js/script.js"></script>
<!-- Matomo -->
<script type="text/javascript">
  var _paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://sohotrack.com/analytics/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d3b1b429b94cd38bbe97aa8/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>