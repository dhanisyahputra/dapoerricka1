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
                <li class="breadcrumb-item active"><span>Tambah Produk</span></li>
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
              <h6 class="h2 text-white d-inline-block mb-0">Tambah Produk</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo site_url('admin/products'); ?>">Produk</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
      <?php echo form_open_multipart('admin/products/add_product'); ?>

      <div class="row">
        <div class="col-md-8">
          <div class="card-wrapper">
            <div class="card">
              <div class="card-header">
                <h3 class="mb-0">Data Produk</h3>
                <?php if ($flash) : ?>
                <span class="float-right text-success font-weight-bold" style="margin-top: -30px">
                  <?php echo $flash; ?>
                </span>
                <?php endif; ?>
              </div>
        
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-control-label" for="pakcage">Kategori:</label>
                      <select name="category_id" class="form-control" id="package">
                        <option>Pilih kategori</option>
                        <?php if ( count($categories) > 0) : ?>
                          <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category->id; ?>"<?php echo set_select('category_id', $category->id); ?>>› <?php echo $category->name; ?></option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>
                      <?php echo form_error('category_id'); ?>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-control-label" for="name">Nama produk:</label>
                  <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" id="name">
                  <?php echo form_error('name'); ?>
                </div>

                <div class="form-group">
                  <label class="form-control-label" for="price">Harga:</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text" name="price" value="<?php echo set_value('price'); ?>" class="form-control" id="price">
                  </div>
                    <?php echo form_error('price'); ?>
                </div>

                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label" for="stock">Stok:</label>
                      <input type="text" name="stock" value="<?php echo set_value('stock'); ?>" class="form-control" id="stock">
                      <?php echo form_error('stock'); ?>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label class="form-control-label" for="unit">Satuan:</label>
                      <input type="text" name="unit" value="<?php echo set_value('unit'); ?>" class="form-control" id="unit">
                      <?php echo form_error('unit'); ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="form-control-label" for="desc">Deskripsi:</label>
                  <textarea name="descript" class="form-control" id="descript"><?php echo set_value('descript'); ?></textarea>
                  <?php echo form_error('descript'); ?>
                </div>
              
              </div>
              
            </div>
            
          </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Foto</h3>
                </div>
                <div class="card-body">
                   <div class="form-group">
                     <label class="form-control-label" for="pic">Foto:</label>
                     <input type="file" name="picture" class="form-control" id="pic">
                     <small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
                   </div>
                </div>
                <div class="card-footer text-right">
                    <input type="submit" value="Tambah Produk Baru" class="btn btn-primary">
                </div>
            </div>
        </div>
      </div>

    </form>