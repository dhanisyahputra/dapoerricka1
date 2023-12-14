<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
          <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" >
              <svg class="icon icon-lg">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
              </svg>
            </button><a class="header-brand d-md-none" href="#">
              <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
              </svg></a>
            <ul class="header-nav d-none d-md-flex">
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin'); ?>">Dashboard</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/settings/profile'); ?>">Users</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/settings'); ?>">Settings</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('auth/logout'); ?>">Logout</a></li>
            </ul>
            <ul class="header-nav ms-auto">
              <li class="nav-item"><a class="nav-link" href="#">
                  <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg></a></li>
              <li class="nav-item"><a class="nav-link" href="#">
                  <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                  </svg></a></li>
              <li class="nav-item"><a class="nav-link" href="#">
                  <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg></a></li>
            </ul>
            <ul class="header-nav ms-3">
              <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
                </a>
              </li>
            </ul>
          </div>
          <div class="header-divider"></div>
          <div class="container-fluid">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                <span>Home</span>
                </li>
                <li class="breadcrumb-item active"><span>Pembayaran Order #<?php echo $payment->order_number; ?></span></li>
              </ol>
              <div class="breadcrumb my-0 md-2">
              <a href="<?php echo site_url('admin/products/add_new_product'); ?>" class="btn btn-sm btn-neutral">Tambah</a>
            </div>
            </nav>
          </div>
        </header>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Pembayaran Order #<?php echo $payment->order_number; ?></h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><?php echo anchor('admin/payments', 'Pembayaran'); ?></li>
                  <li class="breadcrumb-item active" aria-current="page">#<?php echo $payment->order_number; ?></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-md-8">
          <div class="card-wrapper">
            <div class="card">
              <div class="card-header">
                <h3 class="mb-0">Pembayaran #<?php echo $payment->order_number; ?></h3>
                <?php if ($flash) : ?>
                <span class="float-right text-success font-weight-bold" style="margin-top: -30px;"><?php echo $flash; ?></span>
                <?php endif; ?>
              </div>
              <div class="card-body p-0">
              <table class="table align-items-center table-flush table-hover">
                    <tr>
                        <td>Transfer</td>
                        <td><b>Rp <?php echo format_rupiah($payment->payment_price); ?></b></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><b><?php echo $payment->payment_date; ?></b></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><b>
                          <?php if ($payment->payment_status == 1) : ?>
                            <span class="badge badge-info">Menunggu konfirmasi</span>
                          <?php elseif ($payment->payment_status == 2) : ?>
                            <span class="badge badge-success">Dikonfirmasi</span>
                          <?php elseif ($payment->payment_status == 3) : ?>
                            <span class="badge badge-danger">Gagal</span>
                          <?php endif; ?>
                        </b></td>
                    </tr>
                    <tr>
                        <td>Transfer ke</td>
                        <td><div style="white-space: initial;"><b>
                            <?php
                                $bank_data = json_decode($payment->payment_data);
                                $bank_data  = (Array) $bank_data;
                                $transfer_to = $bank_data['transfer_to'];

                                $transfer_to = $banks[$transfer_to];
                                $transfer_from = $bank_data['source'];
                            ?>
                            <?php echo $transfer_to->bank; ?> a.n <?php echo $transfer_to->name; ?> (<?php echo $transfer_to->number; ?>)
                        </b></div></td>
                    </tr>
                    <tr>
                        <td>Transfer dari</td>
                        <td><div style="white-space: initial;">
                            <b><?php echo $transfer_from->bank; ?> a.n <?php echo $transfer_from->name; ?> (<?php echo $transfer_from->number; ?>)</b>
                        </div></td>
                    </tr>
                </table>
              </div>
              
            </div>
            
          </div>

        </div>
        <div class="col-md-4">
            <div class="card card-primary">
              <div class="card-header">
                  <h3 class="mb-0">Bukti Pembayaran</h3>
              </div>
              <div class="card-body p-0">
                <img alt="Pembayaran Order #<?php echo $payment->order_number; ?>" class="img img-fluid" src="<?php echo base_url('assets/uploads/payments/'. $payment->picture_name); ?>">
              </div>
              <div class="card-footer">
                        <form action="<?php echo site_url('admin/payments/verify'); ?>" method="POST">
                        <input type="hidden" name="redir" value="1">

                        <div class="row">
                          <input type="hidden" name="id" value="<?php echo $payment->id; ?>">
                          <input type="hidden" name="order" value="<?php echo $payment->order_id; ?>">
                            <div class="col-md-9">
                                <select class="form-control" name="action">
                                  <?php if ($payment->payment_status == 1) : ?>
                                    <option value="1">Konfirmasi Pembayaran</option>
                                    <option value="2">Pembayaran Tidak Ada</option>
                                  <?php else : ?>
                                    <option value="4" readonly>Tidak ada pilihan</option>
                                  <?php endif; ?>
                                </select>
                            </div>
                            <div class="col-md-3 text-right">
                                <input type="submit" class="btn btn-primary" value="OK">
                            </div>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
      </div>