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
                <li class="breadcrumb-item active"><span>Kategori Produk</span></li>
              </ol>
            </nav>
          </div>
        </header>
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col">
            <div class="card">
            <div class="card-header border-0">
              <h3 class="mb-0">Kategori Produk</h3>
            </div>
            <div class="card-header border-0right">
              <button type="button" class="btn btn-primary" data-coreui-toggle="modal" data-coreui-target="addmodel">Tambah</button>
            </div>
            <div div class="packageContainer">
              <div class="table-responsive">
              <table class="table" id="#packageList" style="width: 100%">
              <thead>
                <tr role="row">
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col"></th>
                </tr>
              </thead>

            </table>
            </div>
            </div>
            <div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="modal fade" id="addmodel" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCategoryForm">Add Kategori</h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="mb-3">
      <label for="formFile" class="form-label">Default file input example</label>
      <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
      <label for="formFileMultiple" class="form-label">Multiple files input example</label>
      <input class="form-control" type="file" id="formFileMultiple" multiple>
    </div>
    <div class="mb-3">
  <label for="formFileDisabled" class="form-label">Disabled file input example</label>
  <input class="form-control" type="file" id="formFileDisabled" disabled>
</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label">Small file input example</label>
  <input class="form-control form-control-sm" id="formFileSm" type="file">
</div>
<div>
  <label for="formFileLg" class="form-label">Large file input example</label>
  <input class="form-control form-control-lg" id="formFileLg" type="file">
</div>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
          
          <!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent">
                      <h3 class="card-heading text-center mt-2">Tambah Kategori</h3>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                      <form role="form" action="#" method="POST" id="addCategoryForm">

                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                  </div>
                                  <input name="name" class="form-control" placeholder="Nama " type="text" minlength="4" maxlength="255" required>
                                </div>
                                <div class="text-danger err name-error"></div>
                          </div>
                          
                          <div class="text-left">
                              <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
                          </div>
                          <div class="float-right" style="margin-top: -90px">
                            <button type="submit" class="btn btn-primary my-4 addPackageBtn">Tambah</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
 -->
<!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal-modal-dialog-centered modal-" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Hapus Kategori</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <form action="#" id="deleteCategory" method="POST">
        
            <input type="hidden" name="id" value="" class="deleteID">

          <div class="modal-body">
              <p>Yakin ingin menghapus? Tindakan ini tidak dapat dibatalkan.</p>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-delete">Hapus</button>
              <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
          </div>
          </form>
      </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent">
                      <h3 class="card-heading text-center mt-2">Edit Kategori</h3>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                      <form role="form" action="#" method="POST" id="editCategoryForm">
                        
                        <input type="hidden" name="id" value="" class="edit-id">

                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                  </div>
                                  <input name="name" class="form-control edit-name" placeholder="Nama paket" type="text" minlength="4" maxlength="100" required>
                                </div>
                                <div class="text-danger err name-error"></div>
                          </div>
                          
                          <div class="text-left">
                              <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
                          </div>
                          <div class="float-right" style="margin-top: -90px">
                            <button type="submit" class="btn btn-primary my-4 editPackageBtn">Simpan</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
        </div>
          </div>
        </div>
      </div>
    </div>
 -->    <script>
  $(document).ready(function() {
    $(document).on('click', '.btnDelete', function() {
      var id  = $(this).data('id');

      $('.deleteID').val(id);
      $('#deleteModal').modal('show');
    });

    $(document).on('click', '.btnEdit', function() {
      var id  = $(this).data('id');

      $.ajax({
        method: 'GET',
        url: '<?php echo site_url('admin/products/category_api?action=view_data'); ?>',
        data: {id: id},
        success: function(res) {
          if (res.data) {
            var d  = res.data;

            $('.edit-id').val(d.id);
            $('.edit-name').val(d.name);
            
            $('#editModal').modal('show');
          }
        }
      });
    });

    $('#editCategoryForm').submit(function(e) {
      e.preventDefault();

      var btn = $('.editPackageBtn');
      var id = $('.edit-id').val();
      var data = $(this).serialize();
      btn.html('<i class="fa fa-spin fa-spinner"></i> Menyimpan...').attr('disabled', true);

      $.ajax({
        method: 'POST',
        url: '<?php echo site_url('admin/products/category_api?action=edit_category'); ?>',
        data: data,
        success: function (res) {
          if (res.code == 201) {
            btn.html('<i class="fa fa-check"></i> Berhasil').removeAttr('disabled');

            setTimeout(() => {
              $('#editModal').modal('hide');
              table.ajax.reload();
              btn.html('Simpan');
            }, 1500);
          }
        }
      })
    });

    $('#deleteCategory').submit(function(e) {
      e.preventDefault();

      var id = $('.deleteID').val();
      var btn = $('.btn-delete');

      btn.html('<i class="fa fa-spin fa-spinner"></i> Menghapus...');

      $.ajax({
        method: 'POST',
        url: '<?php echo site_url('admin/products/category_api?action=delete_category'); ?>',
        data: {
            id: id
        },
        success: function (res) {
          if (res.code == 204) {
            btn.html('<i class="fa fa-check"></i> Terhapus!');

            setTimeout(() => {
              $('#deleteModal').modal('hide');
              table.ajax.reload();
              btn.html('Hapus');
            }, 1500);
          }
        }
      })
    });

    var  = $('#packageList').DataTable({
      "ajax" : "<?php echo site_url('admin/products/category_api?action=list'); ?>",
      "columns" : [
        {"data": "id"},
        {"data": "name"},
        {"mRender": function (data, type, row) {
          return '<div class="text-right"><a href="#" data-id="'+row.id+'" class="btn btn-warning btn-sm btnEdit"><i class="fa fa-edit"></i></a><a href="#" data-id="'+row.id+'" class="btn btn-danger btn-sm btnDelete"><i class="fa fa-trash"></i></a></div>';}
        }
      ],
      "language" : {
        "search" : "Cari:",
        "lengthMenu" : "Menampilkan _MENU_ data",
        "info" : "Menampilkan _START_ sampai _END_ data dari _TOTAL_ data",
        "infoEmpty" : "Tidak ada data yang ditampilkan",
        "infoFiltered" : "(dari total _MAX_ data)",
        "zeroRecords" : "Tidak ada hasil pencarian ditemukan",
        "paginate": {
          "first":"&laquo;",
          "last":"&raquo;",
          "next":       "&rsaquo;",
          "previous":   "&lsaquo;"
        },
      }
    });


    $('#addCategoryForm').submit(function(e) {
      e.preventDefault();

      var data = $(this).serialize();
      var btn = $('.addPackageBtn');

      btn.html('<i class="fa fa-spin fa-spinner"></i> Menambah...');
      $('.err').empty();

      $.ajax({
        method: 'POST',
        url: '<?php echo site_url('admin/products/category_api?action=add_category'); ?>',
        data: data,
        context: this,
        success: function(res) {
          if (res.data) {
            btn.html('<i class="fa fa-check"></i> Berhasil!');

            setTimeout(function() {
              $('#addCategoryForm .form-control').val(null);
              btn.html('Tambah');
            }, 2000);
            setTimeout(() => {
              $('#addModal').modal('hide');
            }, 2222);

            table.ajax.reload();
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          btn.html('Tambah');

          var errors = xhr.responseJSON.errors;

          $.each(errors, function(keys, val) {
            $.each(val, function(key, val) {
              $('.'+ keys +'-error').text(val);
            });
          });
        }
      })
    })
  });
</script>
    <!-- Header -->
    <!-- <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Kelola Kategori Produk</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo site_url('admin/products'); ?>">Produk</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-sm btn-neutral">Tambah</a>
            </div>
          </div>
        </div>
      </div>
    </div>
     --><!-- Page content -->
    <!-- <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            Card header -->
            <!-- <div class="card-header border-0">
              <h3 class="mb-0">Kategori Produk</h3>
            </div>

            <div class="packageContainer">
             --><!-- Light table -->
            <!-- <div class="table-responsive">
              <table class="table align-items-center table-flush" id="packageList" style="width: 100%">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
               
              </table>
            </div>
          </div>
            
          </div>
        </div>
      </div>


<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent">
                      <h3 class="card-heading text-center mt-2">Tambah Kategori</h3>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                      <form role="form" action="#" method="POST" id="addCategoryForm">

                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                  </div>
                                  <input name="name" class="form-control" placeholder="Nama " type="text" minlength="4" maxlength="255" required>
                                </div>
                                <div class="text-danger err name-error"></div>
                          </div>
                          
                          <div class="text-left">
                              <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
                          </div>
                          <div class="float-right" style="margin-top: -90px">
                            <button type="submit" class="btn btn-primary my-4 addPackageBtn">Tambah</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
  <div class="modal-dialog modal-modal-dialog-centered modal-" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Hapus Kategori</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <form action="#" id="deleteCategory" method="POST">
        
            <input type="hidden" name="id" value="" class="deleteID">

          <div class="modal-body">
              <p>Yakin ingin menghapus? Tindakan ini tidak dapat dibatalkan.</p>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-delete">Hapus</button>
              <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
          </div>
          </form>
      </div>
  </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
  <div class="modal-dialog modal- modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-body p-0">
              <div class="card bg-secondary border-0 mb-0">
                  <div class="card-header bg-transparent">
                      <h3 class="card-heading text-center mt-2">Edit Kategori</h3>
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                      <form role="form" action="#" method="POST" id="editCategoryForm">
                        
                        <input type="hidden" name="id" value="" class="edit-id">

                          <div class="form-group mb-3">
                              <div class="input-group input-group-merge input-group-alternative">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                  </div>
                                  <input name="name" class="form-control edit-name" placeholder="Nama paket" type="text" minlength="4" maxlength="100" required>
                                </div>
                                <div class="text-danger err name-error"></div>
                          </div>
                          
                          <div class="text-left">
                              <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Batal</button>
                          </div>
                          <div class="float-right" style="margin-top: -90px">
                            <button type="submit" class="btn btn-primary my-4 editPackageBtn">Simpan</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div> -->

   <script src="<?php echo get_theme_uri('assets/vendors/@coreui/coreui/js/coreui.bundle.min.js');?>"></script>
    <script src="<?php echo get_theme_uri('assets/vendors/simplebar/js/simplebar.min.js');?>"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo get_theme_uri('assets/vendors/chart.js/js/chart.min.js');?>"></script>
    <script src="<?php echo get_theme_uri('assets/vendors/@coreui/chartjs/js/coreui-chartjs.js');?>"></script>
    <script src="<?php echo get_theme_uri('assets/vendors/@coreui/utils/js/coreui-utils.js');?>"></script>
    <script src="<?php echo get_theme_uri('assets/js/main.js');?>"></script>
<script>
  $(document).ready(function() {
    $(document).on('click', '.btnDelete', function() {
      var id  = $(this).data('id');

      $('.deleteID').val(id);
      $('#deleteModal').modal('show');
    });

    $(document).on('click', '.btnEdit', function() {
      var id  = $(this).data('id');

      $.ajax({
        method: 'GET',
        url: '<?php echo site_url('admin/products/category_api?action=view_data'); ?>',
        data: {id: id},
        success: function(res) {
          if (res.data) {
            var d  = res.data;

            $('.edit-id').val(d.id);
            $('.edit-name').val(d.name);
            
            $('#editModal').modal('show');
          }
        }
      });
    });

    $('#editCategoryForm').submit(function(e) {
      e.preventDefault();

      var btn = $('.editPackageBtn');
      var id = $('.edit-id').val();
      var data = $(this).serialize();
      btn.html('<i class="fa fa-spin fa-spinner"></i> Menyimpan...').attr('disabled', true);

      $.ajax({
        method: 'POST',
        url: '<?php echo site_url('admin/products/category_api?action=edit_category'); ?>',
        data: data,
        success: function (res) {
          if (res.code == 201) {
            btn.html('<i class="fa fa-check"></i> Berhasil').removeAttr('disabled');

            setTimeout(() => {
              $('#editModal').modal('hide');
              table.ajax.reload();
              btn.html('Simpan');
            }, 1500);
          }
        }
      })
    });

    $('#deleteCategory').submit(function(e) {
      e.preventDefault();

      var id = $('.deleteID').val();
      var btn = $('.btn-delete');

      btn.html('<i class="fa fa-spin fa-spinner"></i> Menghapus...');

      $.ajax({
        method: 'POST',
        url: '<?php echo site_url('admin/products/category_api?action=delete_category'); ?>',
        data: {
            id: id
        },
        success: function (res) {
          if (res.code == 204) {
            btn.html('<i class="fa fa-check"></i> Terhapus!');

            setTimeout(() => {
              $('#deleteModal').modal('hide');
              table.ajax.reload();
              btn.html('Hapus');
            }, 1500);
          }
        }
      })
    });

    var table = $('#packageList').DataTable({
      "ajax" : "<?php echo site_url('admin/products/category_api?action=list'); ?>",
      "columns" : [
        {"data": "id"},
        {"data": "name"},
        {"mRender": function (data, type, row) {
          return '<div class="text-right"><a href="#" data-id="'+row.id+'" class="btn btn-warning btn-sm btnEdit"><i class="fa fa-edit"></i></a><a href="#" data-id="'+row.id+'" class="btn btn-danger btn-sm btnDelete"><i class="fa fa-trash"></i></a></div>';}
        }
      ],
      "language" : {
        "search" : "Cari:",
        "lengthMenu" : "Menampilkan _MENU_ data",
        "info" : "Menampilkan _START_ sampai _END_ data dari _TOTAL_ data",
        "infoEmpty" : "Tidak ada data yang ditampilkan",
        "infoFiltered" : "(dari total _MAX_ data)",
        "zeroRecords" : "Tidak ada hasil pencarian ditemukan",
        "paginate": {
          "first":"&laquo;",
          "last":"&raquo;",
          "next":       "&rsaquo;",
          "previous":   "&lsaquo;"
        },
      }
    });


    $('#addCategoryForm').submit(function(e) {
      e.preventDefault();

      var data = $(this).serialize();
      var btn = $('.addPackageBtn');

      btn.html('<i class="fa fa-spin fa-spinner"></i> Menambah...');
      $('.err').empty();

      $.ajax({
        method: 'POST',
        url: '<?php echo site_url('admin/products/category_api?action=add_category'); ?>',
        data: data,
        context: this,
        success: function(res) {
          if (res.data) {
            btn.html('<i class="fa fa-check"></i> Berhasil!');

            setTimeout(function() {
              $('#addCategoryForm .form-control').val(null);
              btn.html('Tambah');
            }, 2000);
            setTimeout(() => {
              $('#addModal').modal('hide');
            }, 2222);

            table.ajax.reload();
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          btn.html('Tambah');

          var errors = xhr.responseJSON.errors;

          $.each(errors, function(keys, val) {
            $.each(val, function(key, val) {
              $('.'+ keys +'-error').text(val);
            });
          });
        }
      })
    })
  });
</script>