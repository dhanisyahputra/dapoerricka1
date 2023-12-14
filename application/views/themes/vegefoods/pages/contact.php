<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
<!--
.style1 {
	color: #FFFBF0;
	font-size: 42px;
	font-weight: bold;
}
-->
</style>

<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/slide11.jfif'); ?>');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span></p>
            <h1 class="style1">Hubungi Kami</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Alamat</span> <?php echo get_settings('store_address'); ?></p>
            </div>
        </div>
        <div class="right-content">
          <h4>Dapurricka</h4>
            <p>Kami siap membantu anda, silahkan hubungi kami.terima kasih</p>
            <a href="https://api.whatsapp.com/send?phone=+6285740229831&text=saya ingin melakukan pemesanan mobil." class="social" target='_BLANK'><i class="fab fa-whatsapp"></i></a> |
            <a href="https://instagram.com/lutfhiaryaa_" class="social" target='_BLANK'><i class="fab fa-instagram"></i></a>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Email:</span> <a href="#">dapurricka@gmail.com</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span>Website</span> www.Dapurricka.com</p>
            </div>
        </div>
      </div>
     
        
      </div>
    </div>
  </section>
  <section class="ftco-section" id="products">
      <div class="container">
          <div class="row no-gutters ftco-services">
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Gratis Ongkir</h3>
          <span>Belanja minimal Rp 100.000</span>
        </div>
      </div>      
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Kualitas No 1</h3>
          <span>Kualitas Terjamin</span>
        </div>
      </div>    
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Produk Terbaru</h3>
          <span>Selalu update kue terbaru </span>
        </div>
      </div>      
    </div>
    <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
      <div class="media block-6 services mb-md-0 mb-4">
        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
        </div>
        <div class="media-body">
          <h3 class="heading">Bantuan</h3>
          <span>Kami melayani selama 24 jam</span>
        </div>
      </div>      
    </div>
  </div>
      </div>
  </section>