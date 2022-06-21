<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PSB | AL-ISHLAH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    
    <!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">


        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto d-none d-lg-block"><img src="img/logo-light.png" width="200" height="80" alt=""
                class="img-fluid"></a>
        <a href="/" class="logo me-auto d-lg-none"><img src="img/logo-light.png" width="150" height="80" alt=""
                class="img-fluid"></a>
        <!-- <h1 class="logo me-auto"><a href="index.html">Al-Ishlah</a></h1> -->

        <nav id="navbar" class="navbar">
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
    
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 d-flex justify-content-center"
                data-aos="fade-up" data-aos-delay="200">
                <h2> Comming Soon</h2>
            </div>
            <div class="col-lg-12 d-flex justify-content-center"
                data-aos="fade-up" data-aos-delay="200">
                <h1 id="count"></h1>
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 15, 2021 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="count"
  document.getElementById("count").innerHTML = days + "d : " + hours + "h : "
  + minutes + "m : " + seconds + "s";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("count").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

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
