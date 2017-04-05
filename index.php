<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Royal Palace</title>
    <meta name="description" content="Royal Palace" />
    <meta name="keywords" content="Royal Palace" />
    <meta name="author" content="Royal Palace" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="/assets/js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="/assets/js/helper.js"></script>
    <script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/assets/js/select2.min.js"></script>
    <script type="text/javascript" src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="/assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="/assets/js/template.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic%7cPlayfair+Display:400,700%7cGreat+Vibes' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
</head>
<body>
    <div class="main-wrapper">
        <header id="main-header">
            <div class="inner-container container">
                <div class="l-sec col-xs-8 col-sm-6 col-md-3">
                    <a href="index.php" id="t-logo">
                        <img src="/assets/img/royal_logo.png" />
                    </a>
                </div>
                <div class="r-sec col-xs-4 col-sm-6 col-md-9">
                    <nav id="main-menu">
                        <ul class="list-inline">
                            <li id="home">
                                <a href="/home.html">Anasayfa</a>
                            </li>
                            <li id="rooms">
                                <a href="/rooms.html">Odalarımız</a>
                            </li>
                            <li id="activities">
                                <a href="/activities.html">Aktiviteler</a>
                            </li>
                            <li id="restaurant-bar">
                                <a href="/restaurant-bar.html">Restoran & Bar</a>
                            </li>
                            <li id="gallery">
                                <a href="/gallery.html">Galeri</a>
                            </li>
                            <li id="contact">
                                <a href="/contact.html">İletişim</a>
                            </li>
                        </ul>
                    </nav>
                    <div id="main-menu-handle" class="ravis-btn btn-type-2"><i class="fa fa-bars"></i><i class="fa fa-close"></i></div>
                </div>
            </div>
            <div id="mobile-menu-container"></div>
        </header>
        <?php
        if(isset($_GET["p"])){
            $page = $_GET["p"];
        } else {
            $page = "anasayfa";
        }
        switch ($page)
        {
            case 'anasayfa':
                include_once("pages/anasayfa.php");
                break;
            case 'hakkimizda':
                include_once("pages/hakkimizda.php");
                break;
            case 'odalarimiz':
                include_once("pages/odalarimiz.php");
                break;
            case 'standart-oda':
                include_once("pages/standart-oda.php");
                break;
            case 'suit-oda':
                include_once("pages/suit-oda.php");
                break;
            case 'engelli-oda':
                include_once("pages/engelli-oda.php");
                break;
            case 'galeri':
                include_once("pages/galeri.php");
                break;
            case 'restoran-bar':
                include_once("pages/restoran-bar.php");
                break;
            case 'aktiviteler':
                include_once("pages/aktiviteler.php");
                break;
            case 'toplanti-salonu':
                include_once("pages/toplanti-salonu.php");
                break;
            case 'iletisim':
                include_once("pages/iletisim.php");
                break;
        	default:
                include_once("pages/anasayfa.php");
        }
        ?>
        <footer id="main-footer">
            <div class="inner-container container">
                <div class="t-sec clearfix">
                    <div class="widget-box col-sm-6 col-md-3">
                        <a href="hakkimizda.html" id="f-logo">
                            <img src="/assets/img/royal_logo_footer.png" />
                        </a> 
                    </div>
                    <div class="widget-box col-sm-6 col-md-3">
                        <h4 class="title">E-Bülten Aboneliği</h4>
                        <div class="widget-content newsletter">
                            <div class="desc">
                                E-posta adresinizi kaydederek gelişmelerden haberdar olabilirsiniz.
                            </div>
                            <form class="news-letter-form" id="news-letter-form" name="news-letter-form" method="post">
                                <input type="text" class="email" name="email" id="email" placeholder="E-Mail Adresiniz">
                                <input type="button" id="ebulten" class="ravis-btn btn-type-2" value="Kayıt Ol">
                            </form>
                        </div>
                    </div>
                    <div class="widget-box col-sm-6 col-md-3">
                        <br />
                        <p style="text-align: center;margin-bottom:35px;">
                            <a href="https://www.yakala.co/kusadasi-royal-palaceta-deluxe-konakla-2" target="_blank">
                                <img src="/images/logos/yakala.co.png" style="width:60%;" />
                            </a>
                        </p>
                        <p style="text-align: center;margin-bottom:35px;">
                            <a href="http://www.booking.com/hotel/tr/royal-palace-kusadasi.tr.html" target="_blank">
                                <img src="/images/logos/booking.png" style="width:60%;" />
                            </a>
                        </p>
                        <p style="text-align: center;"> 
                            <a href="https://www.etstur.com/Royal-Palace-Kusadasi" target="_blank">
                                <img src="/images/logos/etstur.png" style="width:60%;" />
                            </a>
                        </p>
                    </div>
                    <div class="widget-box col-sm-6 col-md-3">
                        <h4 class="title">İletişim Bilgilerimiz</h4>
                        <div class="widget-content contact">
                            <ul class="contact-info">
                                <li><i class="fa fa-map-marker "></i>Turgut Özal Bulvarı No: 64 09400 Kusadası - Aydın TÜRKİYE</li>
                                <li><i class="fa fa-phone"></i>+90 256 618 33 70 </li>
                                <li><i class="fa fa-envelope-o"></i>info[at]royalpalace.com.tr </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="b-sec clearfix">
                    <div class="copy-right">
                        Copyright 2017 © Royal Palace
                    </div>
                    <ul class="social-icons list-inline">
                        <li><a target="_blank" href="https://www.facebook.com/www.royalpalace.com.tr"><i class="fa fa-facebook "></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/?lang=tr"><i class="fa fa-twitter "></i></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/?hl=tr&amp;gl=TR"><i class="fa fa-google-plus "></i></a></li>
                    </ul>

                </div>
            </div>
        </footer>
    </div> 
    <script type="text/javascript">
        $(function () {
            function sonucGizle() {
                $("#note").hide();
            }
            $("#submit").click(function () {
                $("#note").show();
                $.ajax({
                    type: "POST",
                    url: "yorum.php",
                    data: $('#fixform').serialize(),
                    error: function () {
                        alert("Bir hata algılandı.");
                    },
                    success: function (veri) {
                        $('#note').html(veri);
                        setTimeout(sonucGizle, 3000);
                        document.forms["fixform"].reset();
                    }
                });
            });

            return false;
        });
    </script>

    <script type="text/javascript">
        $(function () {
            function sonucGizlee() {
                $("#iletisimsonuc").hide();
            }
            $("#send_message").click(function () {
                $("#iletisimsonuc").show();
                $.ajax({
                    type: "POST",
                    url: "mesaj.php",
                    data: $('#contact_form').serialize(),
                    error: function () {
                        alert("Bir hata algılandı.");
                    },
                    success: function (veri) {
                        $('#iletisimsonuc').html(veri);
                        setTimeout(sonucGizlee, 3000);
                        document.forms["contactForm"].reset();
                    }
                });
            });
            return false;
        });
    </script>

    <script type="text/javascript">
        $(function () {
            function sonucGizlee() {
                $("#ebultensonuc").hide();
            }
            $("#ebulten").click(function () {
                $("#ebultensonuc").show();
                $.ajax({
                    type: "POST",
                    url: "ebulten.php",
                    data: $('#news-letter-form').serialize(),
                    error: function () {
                        alert("Bir hata algılandı.");
                    },
                    success: function (veri) {
                        $('#ebultensonuc').html(veri);
                        setTimeout(sonucGizlee, 3000);
                        document.forms["news-letter-form"].reset();
                    }
                });
            });
            return false;
        });
    </script>
</body>
</html>