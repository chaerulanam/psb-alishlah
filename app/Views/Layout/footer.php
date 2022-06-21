<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Al-Ishlah</h3>
                    <p>
                        Jl. Raya Sudimampir Blok Tajug RT/RW 001/001 Desa Sudimampir Kec. Balongan Kab. Indramayu Jawa
                        Barat 45285 <br><br>
                        <strong>Phone:</strong> +62 811-642-512<br>
                        <strong>Email:</strong> al_ishlahtajug@yahoo.co.id<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4></h4>
                    <ul>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Orgnisasi dan Kegiatan</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">OSMI</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">PRAMUKA</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Pencak Silat</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Senam Lantai</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Barongsai</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Sosial Media</h4>
                    <p>Kenali kami lebih dekat di sosial media</p>
                    <div class="social-links mt-3">
                        <a href="https://web.facebook.com/officialpesantrenalishlahtajug" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/pesantrenalishlahtajug/" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCT4epiMdlDgDPs4ihQ-BHDA" class="youtube"><i
                                class="bx bxl-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Al-Ishlah</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script>
var url = '<?= base_url(); ?>/assets/js/wa.js';
var s = document.createElement('script');
s.type = 'text/javascript';
s.async = true;
s.src = url;
var options = {
    "enabled": true,
    "chatButtonSetting": {
        "backgroundColor": "#4dc247",
        "ctaText": "Butuh bantuan?",
        "borderRadius": "25",
        "marginLeft": "0",
        "marginBottom": "30",
        "marginLeft": "30",
        "position": "left"
    },
    "brandSetting": {
        "brandName": "PSB AL-ISHLAH",
        "brandSubTitle": "Penerimaan Santri Baru Pesantren Al-Ishlah Tajug",
        "brandImg": "https://al-ishlahtajug.sch.id/img/favicon.png",
        "welcomeText": "Assalamu'alaikum,\nAda yang bisa kami bantu ?",
        "messageText": "Assalamualikum Ust,%0AMau bertanya tentang PSB.",
        "backgroundColor": "#0a5f54",
        "ctaText": "Chat",
        "borderRadius": "25",
        "autoShow": false,
        "phoneNumber": "62811642512"
    }
};
s.onload = function() {
    CreateWhatsappChatWidget(options);
};
var x = document.getElementsByTagName('script')[0];
x.parentNode.insertBefore(s, x);
</script>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>