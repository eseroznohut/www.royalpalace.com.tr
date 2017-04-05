<script>
    $(document).ready(function () {
        $("#main-menu ul li").removeAttr("class");
        $("#main-menu").find("#home").addClass("active");
    });
</script>
<div class="slider-available-sec">
    <section id="main-slider">
        <div class="items">
            <div class="img-container" data-bg-img="images/slider/1.jpg"></div>
            <div class="slide-caption">
                <div class="inner-container clearfix">
                    <div class="up-sec">Royal Palace'a Hoşgeldiniz...</div>
                </div>
            </div>
        </div>
    </section>
    <section id="main-availability-form">
        <div class="inner-container container">
            <div class="l-sec col-md-2">
                <div class="ravis-title">
                    <div class="inner-box">
                        <div class="sub-title">Rezervasyon Yapın</div>
                    </div>
                </div>
            </div>
            <div class="r-sec col-md-10">
                <form class="booking-form clearfix" action="https://www.otelz.com/otel/royal-palace-kusadasi-hotel#.WM6e1GiLSM8" method="post">
                    <div class="col-md-4" style="font-size:13px;color:#D2BD7F;margin:0px;padding:0px;padding-top:20px;">
                        <p>Otelimiz Yarım Pansiyon Hizmet Vermektedir.</p>
                        <p>Sabah Kahvaltısı : 07:30 - 10:30</p>
                        <p>Akşam Yemeği	: 19:30 - 21:30</p>
                    </div>
                    <div class="col-md-6">
                        <div class="input-daterange row">
                            <div class="booking-fields col-md-6">
                                <input placeholder="Giriş Tarihi" value="" class="datepicker-fields check-in" type="text" name="datebas" />
                                <i class="fa fa-calendar"></i>
                            </div>
                            <div class="booking-fields col-md-6">
                                <input placeholder="Çıkış Tarihi" class="datepicker-fields check-out" value="" type="text" name="datebit" />
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="booking-fields col-md-6">
                                <select name="adult" id="adult">
                                    <option value="0">Yetişkin</option>
                                    <option value="a1">1</option>
                                    <option value="a2">2</option>
                                    <option value="a3">3</option>
                                    <option value="a4">4</option>
                                    <option value="a5">5</option>
                                    <option value="a6">6</option>
                                </select>
                            </div>
                            <div class="booking-fields col-md-6">
                                <select name="child" id="child">
                                    <option value="0">Çocuk</option>
                                    <option value="c0">0</option>
                                    <option value="c1">1</option>
                                    <option value="c2">2</option>
                                    <option value="c3">3</option>
                                    <option value="c4">4</option>
                                    <option value="c5">5</option>
                                    <option value="c6">6</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" style="margin-top: 10px;" name="rezervasyon" type="submit" class="ravis-btn btn-type-1">
                            <span class="inner-box">
                                Rezervasyon
                            </span>
                        </button>
                    </div>
                </form>
                <div style="margin-top:5px;">
                </div>
            </div>
        </div>
    </section>
</div>
<section id="welcome-section">
    <div class="inner-container container">
        <div class="l-sec col-md-7">
            <div class="ravis-title-t-1">
                <div class="sub-title">Hakkımızda</div>
            </div>
            <div class="content">
                <p>
                    Otel Royal Palace Kuşadası şehir merkezine 700 metre mesafede bulunmaktadır. İzmir'e yaklaşık olarak 90 km mesafededir. Ege Bölgesinde bulunan çok önemli antik kentlere oldukça yakın bir mesafededir.
                </p>
                <p> Otelimiz rahat ve stresten uzak, huzur içerisinde, harika bir oteldir. Royal Palace şehir merkezine 700 m. mesafede bulunmaktadır. Otelimizde 151 standart, 4 suit ve 2 engelli odası mevcuttur. Bütün odalarımız ince bir zevkle döşenmiş olup; odalarımızda direkt telefon hattı, split klima, elektronik değerli eşya kasası, TV, mini bar, saç kurutma makinesi, tuvalet, banyo, duş, küvet, elektronik kapı kilit sistemi ve balkon (139 oda) mevcuttur.</p>

            </div>
        </div>
        <div class="r-sec col-md-5">
            <img style="width:445px; max-width:100%;" src="images/hakkimizda/1.jpg" alt="Hakkımızda">
        </div>
    </div>
</section>
<section id="luxury-rooms" class="clearfix">
    <div class="room-boxes col-sm-12 col-md-4">
        <a href="/rooms/standard-room.html" class="inner-container" data-bg="images/odalar/standart_oda/1.jpg">
            <span class="ravis-title">
                <span class="inner-box">
                    <span class="title" style="color:#d2bd7f;">Standart Oda</span>
                </span>
            </span>
        </a>
    </div>
    <div class="room-boxes col-sm-12 col-md-4">
        <a href="/rooms/suit-room.html" class="inner-container" data-bg="images/odalar/suit_oda/1.jpg">
            <span class="ravis-title">
                <span class="inner-box">
                    <span class="title" style="color:#d2bd7f;">Suit Oda</span>
                </span>
            </span>
        </a>
    </div>
    <div class="room-boxes col-sm-12 col-md-4">
        <a href="/rooms/disabled-room.html" class="inner-container" data-bg="images/odalar/suit_oda/1.jpg">
            <span class="ravis-title">
                <span class="inner-box">
                    <span class="title" style="color:#d2bd7f;">Engelli Odası</span>
                </span>
            </span>
        </a>
    </div>
</section>
<section id="gallery">
    <div class="inner-container container">
        <div class="ravis-title">
            <div class="inner-box">
                <div class="sub-title">Fotoğraf Galerisi</div>
            </div>
        </div>
        <div class="gallery-container">
            <div class="sort-section">
                <div class="sort-section-container">
                    <div class="sort-handle">Filtrele</div>
                    <ul class="list-inline">
                        <li><a href="#" data-filter="*" class="active">Tümü</a></li>
                        <li><a href="#" data-filter=".Standart-Oda">Standart Oda</a></li>
                        <li><a href="#" data-filter=".Suit-Oda">Suit Oda</a></li>
                        <li><a href="#" data-filter=".Restaurant">Restaurant</a></li>
                        <li><a href="#" data-filter=".Banquet">Banquet</a></li>
                        <li><a href="#" data-filter=".Turk-Hamami">Türk Hamamı</a></li>
                        <li><a href="#" data-filter=".Fitness">Fitness</a></li>
                        <li><a href="#" data-filter=".Royal-Palace">Royal Palace</a></li>
                    </ul>
                </div>
            </div>
            <ul class="image-main-box clearfix">

                <!--STANDART ODA-->
                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/1.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/1.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/2.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/2.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/3.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/3.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/4.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/4.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/5.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/5.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/6.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/6.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/7.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/7.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/8.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/8.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/9.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/9.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Standart-Oda">
                    <figure>
                        <img src="images/galeri/standart_oda/10.jpg" alt="Standart Oda" />
                        <a href="images/galeri/standart_oda/10.jpg" class="more-details" data-title="Standart Oda">Standart Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <!--STANDART ODA-->
                <!--SUİT ODA-->
                <li class="item col-xs-6 col-md-3 Suit-Oda">
                    <figure>
                        <img src="images/galeri/suit_oda/1.jpg" alt="Suit Oda" />
                        <a href="images/galeri/suit_oda/1.jpg" class="more-details" data-title="Suit Oda">Suit Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Suit-Oda">
                    <figure>
                        <img src="images/galeri/suit_oda/2.jpg" alt="Suit Oda" />
                        <a href="images/galeri/suit_oda/2.jpg" class="more-details" data-title="Suit Oda">Suit Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Suit-Oda">
                    <figure>
                        <img src="images/galeri/suit_oda/3.jpg" alt="Suit Oda" />
                        <a href="images/galeri/suit_oda/3.jpg" class="more-details" data-title="Suit Oda">Suit Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Suit-Oda">
                    <figure>
                        <img src="images/galeri/suit_oda/4.jpg" alt="Suit Oda" />
                        <a href="images/galeri/suit_oda/4.jpg" class="more-details" data-title="Suit Oda">Suit Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Suit-Oda">
                    <figure>
                        <img src="images/galeri/suit_oda/5.jpg" alt="Suit Oda" />
                        <a href="images/galeri/suit_oda/5.jpg" class="more-details" data-title="Suit Oda">Suit Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Suit-Oda">
                    <figure>
                        <img src="images/galeri/suit_oda/6.jpg" alt="Suit Oda" />
                        <a href="images/galeri/suit_oda/6.jpg" class="more-details" data-title="Suit Oda">Suit Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Suit-Oda">
                    <figure>
                        <img src="images/galeri/suit_oda/7.jpg" alt="Suit Oda" />
                        <a href="images/galeri/suit_oda/7.jpg" class="more-details" data-title="Suit Oda">Suit Oda</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <!--SUİT ODA-->


                <!-- BANQUET -->
                <li class="item col-xs-6 col-md-3 Banquet">
                    <figure>
                        <img src="images/galeri/banquet/1.jpg" alt="Banquet" />
                        <a href="images/galeri/banquet/1.jpg" class="more-details" data-title="Banquet">Banquet</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Banquet">
                    <figure>
                        <img src="images/galeri/banquet/2.jpg" alt="Banquet" />
                        <a href="images/galeri/banquet/2.jpg" class="more-details" data-title="Banquet">Banquet</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Banquet">
                    <figure>
                        <img src="images/galeri/banquet/3.jpg" alt="Banquet" />
                        <a href="images/galeri/banquet/3.jpg" class="more-details" data-title="Banquet">Banquet</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Banquet">
                    <figure>
                        <img src="images/galeri/banquet/4.jpg" alt="Banquet" />
                        <a href="images/galeri/banquet/4.jpg" class="more-details" data-title="Banquet">Banquet</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Banquet">
                    <figure>
                        <img src="images/galeri/banquet/5.jpg" alt="Banquet" />
                        <a href="images/galeri/banquet/5.jpg" class="more-details" data-title="Banquet">Banquet</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                <li class="item col-xs-6 col-md-3 Banquet">
                    <figure>
                        <img src="images/galeri/banquet/6.jpg" alt="Banquet" />
                        <a href="images/galeri/banquet/6.jpg" class="more-details" data-title="Banquet">Banquet</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                </li>
                <!-- BANQUET -->

                <!-- FİTNESS -->
                <li class="item col-xs-6 col-md-3 Fitness">
                    <figure>
                        <img src="images/galeri/fitness/1.jpg" alt="Fitness" />
                        <a href="images/galeri/fitness/1.jpg" class="more-details" data-title="Fitness">Fitness</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <!-- FİTNESS -->
                <!-- TÜRK HAMAMI -->
                <li class="item col-xs-6 col-md-3 Turk-Hamami">
                    <figure>
                        <img src="images/galeri/hamam/1.jpg" alt="Turk Hamamı" />
                        <a href="images/galeri/hamam/1.jpg" class="more-details" data-title="Turk Hamamı">Turk Hamamı</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Turk-Hamami">
                    <figure>
                        <img src="images/galeri/hamam/2.jpg" alt="Turk Hamamı" />
                        <a href="images/galeri/hamam/2.jpg" class="more-details" data-title="Turk Hamamı">Turk Hamamı</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <!-- TÜRK HAMAMI -->
                <!-- RESTAURANT -->
                <li class="item col-xs-6 col-md-3 Restaurant">
                    <figure>
                        <img src="images/galeri/restaurant/1.jpg" alt="Restaurant" />
                        <a href="images/galeri/restaurant/1.jpg" class="more-details" data-title="Restaurant">Restaurant</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Restaurant">
                    <figure>
                        <img src="images/galeri/restaurant/2.jpg" alt="Restaurant" />
                        <a href="images/galeri/restaurant/2.jpg" class="more-details" data-title="Restaurant">Restaurant</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Restaurant">
                    <figure>
                        <img src="images/galeri/restaurant/3.jpg" alt="Restaurant" />
                        <a href="images/galeri/restaurant/3.jpg" class="more-details" data-title="Restaurant">Restaurant</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Restaurant">
                    <figure>
                        <img src="images/galeri/restaurant/4.jpg" alt="Restaurant" />
                        <a href="images/galeri/restaurant/4.jpg" class="more-details" data-title="Restaurant">Restaurant</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Restaurant">
                    <figure>
                        <img src="images/galeri/restaurant/5.jpg" alt="Restaurant" />
                        <a href="images/galeri/restaurant/5.jpg" class="more-details" data-title="Restaurant">Restaurant</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <li class="item col-xs-6 col-md-3 Restaurant">
                    <figure>
                        <img src="images/galeri/restaurant/6.jpg" alt="Restaurant" />
                        <a href="images/galeri/restaurant/6.jpg" class="more-details" data-title="Restaurant">Restaurant</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <!-- RESTAURANT -->
                <!-- ROYAL PALACE -->
                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/1.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/1.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/2.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/2.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/3.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/3.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/4.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/4.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/5.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/5.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/6.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/6.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/7.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/7.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/8.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/8.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/9.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/9.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/10.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/10.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/11.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/11.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/12.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/12.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/13.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/13.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/14.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/14.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/15.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/15.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>

                <li class="item col-xs-6 col-md-3 Royal-Palace">
                    <figure>
                        <img src="images/galeri/royal-palace/16.jpg" alt="Royal Palace" />
                        <a href="images/galeri/royal-palace/16.jpg" class="more-details" data-title="Royal Palace">Royal Palace</a>
                        <figcaption>
                            <h4><span>Resmi</span> Büyüt</h4>
                        </figcaption>
                    </figure>
                </li>
                <!-- ROYAL PALACE -->

            </ul>
        </div>
    </div>
</section>