<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      
    </div>
  </section>
  <footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                      <a href="#" class="mouse-icon">
                          <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                      </a>
                  </div>
        </div>
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"><a href="#">Dapurricka</a></h2>
            <p><a href="#">Semua produk kue kami berkualitas</a></p>
            <ul class="ftco-footer-social list-unstyled float-md-center float-lft mt-5" >
              <center>
              <li class="ftco-animate"><a href="https://api.whatsapp.com/send?phone=+6285740229831&text=saya ingin melakukan pemesanan kue." target='_BLANK'><span
                                        class="fab fa-whatsapp"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/summer_beat.co/"><span class="icon-instagram"></span></a></li>
              <li class="ftco-animate"><a href="https://myaccount.google.com/u/0/?utm_source=YouTubeWeb&tab=rk&utm_medium=act&tab=rk&hl=id&pli=1" target='_BLANK'><span
                                        class="icon-youtube"></span></a></li>
			  </center>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="<?php echo site_url('pages/about'); ?>" class="py-2 d-block">About Us</a></li>
              <li><a href="<?php echo site_url('pages/contact'); ?>" class="py-2 d-block">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
           <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Bantuan</h2>
            <div class="d-flex">
                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                  <li><a href="<?php echo site_url('shop/cart'); ?>" class="py-2 d-block">Keranjang Belanja</a></li>
                  <li><a href="<?php echo site_url('customer/payments/confirm'); ?>" class="py-2 d-block">Konfirmasi Pembayaran</a></li>
                </ul>
              </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Adakah pertanyaan?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"><?php echo get_settings('store_address'); ?></span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo get_settings('store_phone_number'); ?></span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo get_settings('store_email'); ?></span></a></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                       Dapurricka
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
        </div>
      </div>
    </div>
  </footer>
  


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script src="<?php echo get_theme_uri('js/popper.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.easing.1.3.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.waypoints.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.stellar.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/aos.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/jquery.animateNumber.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/scrollax.min.js'); ?>"></script>
<script src="<?php echo get_theme_uri('js/main.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
<!-- CoreUI and necessary plugins-->
<script src="assets/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
<script src="assets/vendors/simplebar/js/simplebar.min.js"></script>
<!-- Plugins and scripts required by this view-->
<script src="assets/vendors/chart.js/js/chart.min.js"></script>
<script src="assets/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
<script src="assets/vendors/@coreui/utils/js/coreui-utils.js"></script>
<script src="assets/js/main.js"></script>
<script>
    </script>


<script>
  toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

  $.ajax({
    method: 'GET',
    url: '<?php echo site_url('shop/cart_api?action=cart_info'); ?>',
    success: function (res) {
      var data = res.data;

      var total_item = data.total_item;
      $('.cart-item-total').text(total_item);
    }
  });

  $('.add-cart').click(function(e) {
    e.preventDefault();

    var id = $(this).data('id');
    var sku = $(this).data('sku');
    var qty = $(this).data('qty');
    qty = (qty > 0) ? qty : 1;
    var price = $(this).data('price');
    var name = $(this).data('name');

    $.ajax({
      method: 'POST',
      url: '<?php echo site_url('shop/cart_api?action=add_item'); ?>',
      data: {
        id: id,
        sku: sku,
        qty: qty,
        price: price,
        name: name
      },
      success: function (res) {
        if (res.code == 200) {
          var totalItem = res.total_item;

          $('.cart-item-total').text(totalItem);
          toastr.info('Item ditambahkan dalam keranjang');
        }
        else {
          console.log('Terjadi kesalahan');
        }
      }
    });
  });
</script>
  
</body>
</html>