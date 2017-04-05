
<style>
    .amenities .list-inline li {
        display: block !important;
        color: #d2bd7f;
    }
</style>
<script>
    $(document).ready(function () {
        $("#main-menu ul li").removeAttr("class");
        $("#main-menu").find("#rooms").addClass("active");
    });
</script>
<section id="breadcrumb-section" data-bg-img="assets/img/breadcrumb.jpg">
    <div class="inner-container container">
        <div class="ravis-title">
            <div class="inner-box">
                <div class="title sub-title" style="font-size:38px;"><span>Royal Palace</span></div>
            </div>
        </div>
        <div class="breadcrumb">
            <ul class="list-inline">
                <li><a href="/home.html">Anasayfa</a></li>
                <li class="current"><a href="/rooms.html">Odalarımız</a></li>
            </ul>
        </div>
    </div>
</section>

<section id="other-rooms">
    <div class="inner-container container">
        <div class="ravis-title-t-2">
            <div class="title sub-title" style="font-size:50px;"><span> Odalarımız</span></div>
        </div>
        <div class="room-container clearfix">


            <div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp">
                <div class="inner-box" data-bg-img="/images/odalar/standart_oda/1.jpg">
                    <a href="/rooms/standard-room.html" class="more-info"></a>
                    <div class="caption">
                        <div class="title" style="color:#d2bd7f;">Standart Oda</div>
                        <div class="desc">
                            <div class="inner-box">
                               Detayları görmek için tıklayın
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp">
                <div class="inner-box" data-bg-img="/images/odalar/suit_oda/1.jpg">
                    <a href="/rooms/suit-room.html" class="more-info"></a>
                    <div class="caption">
                        <div class="title" style="color:#d2bd7f;">Suit Oda</div>
                        <div class="desc">
                            <div class="inner-box">
                                Detayları görmek için tıklayın
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="room-box col-xs-6 col-md-4 animated-box" data-animation="fadeInUp">
                <div class="inner-box" data-bg-img="/images/odalar/suit_oda/1.jpg">
                    <a href="/rooms/disabled-room.html" class="more-info"></a>
                    <div class="caption">
                        <div class="title" style="color:#d2bd7f;">Engelli Odası</div>
                        <div class="desc">
                            <div class="inner-box">
                                Detayları görmek için tıklayın
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

        </div>
    </div>
</section>