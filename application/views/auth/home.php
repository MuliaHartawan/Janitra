<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start" style="height: 915px;">
            <div class="banner-content col-lg-9 col-md-12">
                <h1>
                    JANITRA <br>
                    Tour Organizer
                </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>
                <a href="<?=base_url('profil')?>" class="primary-btn">Selengkapnya<span class="lnr lnr-arrow-right"></span></a>
                <!-- <a href="<?=site_url('pesan/call')?>" class="primary-btn">Hubungi Kami<span class="lnr lnr-arrow-right"></span></a> -->
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start booking Area -->
<section class="booking-area" id="booking">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="#holidays" role="tab" data-toggle="tab">Liburan</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="holidays">
                        <h4>Atur Jadwal Liburanmu Sekarang!</h4>
                        <form class="booking-form" id="form-booking" action="<?=site_url('pesan')?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <select id="destinasi" name="from" class="single-in form-control" placeholder="From" onblur="this.placeholder = 'From'" required>
                                        <option value="">- Pilih Tujuan -</option>
                                        <?php foreach ($destinasi->result() as $key => $data) { ?>
                                            <option value="<?=$data->id_destinasi?>"><?=$data->kota?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="adults" class="single-in form-control" placeholder="Jumlah Orang" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Orang'" required>
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker" name="start" class="single-in form-control" onblur="this.placeholder = 'Berangkat'" type="datetime" placeholder="Berangkat" required>
                                </div>
                                <div class="col-md-3">
                                    <input id="datepicker2" name="return" class="single-in form-control" onblur="this.placeholder = 'Pulang'" type="datetime" placeholder="Pulang" required>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button class="primary-btn mt-20" type="submit">Buat Pesanan<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End booking Area -->


<!-- Start feature Area -->
<section class="feature-area section-gap">
    <div class="container">
        <div class="row">
            <div class="sigle-feature col-lg-3 col-md-6 fitur-area">
                <span class="lnr lnr-rocket"></span>
                <h4>Cari Tiket Pesawat</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">Lihat Detail</span></a>
            </div>
            <div class="sigle-feature col-lg-3 col-md-6 fitur-area">
                <span class="lnr lnr-magic-wand"></span>
                <h4>Dapatkan Penawaran <br> Hotel</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">Lihat Detail</span></a>
            </div>
            <div class="sigle-feature col-lg-3 col-md-6 fitur-area">
                <span class="lnr lnr-gift"></span>
                <h4>Paket Wisata</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">Lihat Detail</span></a>
            </div>
            <div class="sigle-feature col-lg-3 col-md-6 fitur-area">
                <span class="lnr lnr-phone"></span>
                <h4>Layanan Service Kami</h4>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct.
                </p>
                <a href="#" class="text-uppercase primary-btn2 primary-border circle">Lihat Detail</span></a>
            </div>

        </div>
    </div>
</section>
<!-- End feature Area -->

<!-- Start packages Area -->
<section class="packages-area" id="package">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 pb-80 header-text">
                <h1>Paket Wisata Populer</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore
                    et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-6 single-packages no-padding">
                <div class=" content">
                    <a href="http://anekatempatwisata.com/15-tempat-wisata-di-bali-yang-wajib-dikunjungi/" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="assets/img/bali.jpg" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Bali</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 single-packages no-padding">
                <div class=" content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="assets/img/banyuwangi.jpg" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Banyuwangi</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 single-packages no-padding">
                <div class=" content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="assets/img/jogja.jpg" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Jogja</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 single-packages no-padding">
                <div class=" content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="assets/img/malang.jpg" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Malang</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 single-packages no-padding">
                <div class=" content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="assets/img/bromo.jpg" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Bromo</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 single-packages no-padding">
                <div class=" content">
                    <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="assets/img/bandung.jpg" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Bandung</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End packages Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text">
                <h1>Blog Terbaru Kami</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore
                    et dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="row">
            <!-- <?php 
            if ($blog != "") {
                foreach ($blog as $content) { ?>
                <div class="single-blog col-lg-4 col-md-4">
                    <img class="f-img img-fluid mx-auto" src="assets/img/b1.jpg" alt="">
                    <h4>
                        <a href="https://www.indonesia.travel/gb/en/destinations/maluku-papua/raja-ampat" class="fitur-area"><?php echo $data->berita_judul; ?></a>
                    </h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.
                    </p>
                </div>
            <?php }
            } ?> -->
            <div class="single-blog col-lg-4 col-md-4">
                <img class="f-img img-fluid mx-auto" src="assets/img/b2.jpg" alt="">
                <h4>
                    <a href="#">Summer ware are coming</a>
                </h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="assets/img/user.jpg" alt="">
                        <a href="#"><span>Mark Wiens</span></a>
                    </div>
                    <div class="meta">
                        13th Dec
                        <span class="lnr lnr-heart"></span> 15
                        <span class="lnr lnr-bubble"></span> 04
                    </div>
                </div>
            </div>
            <div class="single-blog col-lg-4 col-md-4">
                <img class="f-img img-fluid mx-auto" src="assets/img/b3.jpg" alt="">
                <h4>
                    <a href="#">Summer ware are coming</a>
                </h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
                <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <img class="img-fluid" src="assets/img/user.jpg" alt="">
                        <a href="#"><span>Mark Wiens</span></a>
                    </div>
                    <div class="meta">
                        13th Dec
                        <span class="lnr lnr-heart"></span> 15
                        <span class="lnr lnr-bubble"></span> 04
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End blog Area -->

<!-- Start about Area -->
<section class="about-area">
    <div class="container-fluid">
        <div class="row d-flex justify-content-end align-items-center">
            <div class="col-lg-6 col-md-12 about-left">
                <h1>Tidak menemukan Paket? <br>
                    Jangan ragu tanyakan pada Kami. <br>
                    Kami akan membuatkan untuk Anda</h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,”women face higher conduct standards
                    especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond
                    reproach. inappropriate behavior is often laughed.
                </p>
                <button class="btn btn-black">Buat Paket Anda Sendiri</button>
            </div>
            <div class="col-lg-6 col-md-12 about-right no-padding">
                <img class="img-fluid" src="assets/img/c1.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End about Area -->

<!-- Start contact-info Area -->
<section class="contact-info-area section-gap">
    <div class="container">
        <div class="row">
            <div class="single-info col-lg-3 col-md-6">
                <h4>Kunjungi Kantor Kami</h4>
                <p>
                    Jl Gajah Mada No 34, Sukodadi, Lamongan 62253
                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Hubungi Kami</h4>
                <p>
                    Phone : 085746060446 (Arif) <br>
                    Phone : 081216203994 (Dito) <br>
                    Phone : 082333876945 (Eko)
                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Email Kami</h4>
                <p>
                    janitratour@gmail.com
                </p>
            </div>
            <div class="single-info col-lg-3 col-md-6">
                <h4>Customer Support</h4>
                <p>
                    Instagram : janitratour <br>
                    FansPage : janitratour
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End contact-info Area -->

<!-- Start Contact Area -->
<section class="contact-area" id="contact">
    <div class="container-fluid">
        <div class="row align-items-center d-flex justify-content-start">
            <div class="col-lg-6 col-md-12 contact-left no-padding">
                <div style=" width:100%;
	                height: 545px;" id="map"></div>
            </div>
            <div class="col-lg-4 col-md-12 pt-100 pb-100">
                <form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
                    <input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mt-10" required="" type="text">
                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
                    <textarea class="common-textarea mt-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                    <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                    <div class="alert-msg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->