
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CRUD Simpel Codeigniter</title>


  <link href="<?php echo base_url();?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body >
  <div class="container mt-3">
    <h4 class="mt-4">CRUD Tambah dosen</h4>
    <p class="mb-4">coba tambah data dosen</p>
    <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
      <?php echo $this->session->flashdata('success');?>. <u><a href="<?php echo base_url();?>dosen" style="color:rgb(223, 29, 29)">Lihat data dosen</a></u>
    </div>               
    <?php endif;?>
    <form method="POST" action="<?php echo base_url();?>dosen/simpandatadosen" enctype="multipart/form-data">                        
      <div class="card shadow-sm mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Data Dosen </h6>
        </div>
        <div class="card-body">
          <label for="nama_dosen">Nama Dosen</label>
          <div class="form-group">
            <input type="text" class="form-control form-control-user" placeholder="Masukkan Nama Dosen" name="nama_dosen" required="">
          </div>
          <label for="nip">NIP Dosen</label>
          <div class="form-group">
            <input type="number" class="form-control form-control-user" placeholder="Masukkan NIP Dosen" name="nip" required="">
          </div>
          <label for="fakultas_dosen">Fakultas Dosen</label>
          <div class="form-group">
          <input type="text" class="form-control form-control-user" placeholder="Masukkan Fakultas Dosen" name="fakultas_dosen" required="">
          </div>
          <label for="jurusan_dosen">Jurusan Dosen</label>
          <div class="form-group">
          <input type="text" class="form-control form-control-user" placeholder="Masukkan Jurusan Dosen" name="jurusan_dosen" required="">
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
          <a href="<?php echo base_url();?>" class="btn btn-default">Batal</a>
        </div>
      </div>
    </form>      
    <footer class="mt-5 mb-3">
    <div class="container my-auto">
      <div class="text-center my-auto">
        <span>developed by <a href="https://WILLZ.gitlab.io" target="_blank" style="color: #424242;"><b>WILLZ</b><a></span>
      </div>
    </div>
  </footer> 
  </div>                   

  <script src="<?php echo base_url(); ?>/assets/jquery/jquery.slim.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
