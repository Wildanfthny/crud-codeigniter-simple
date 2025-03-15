
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
  <link href="<?php echo base_url();?>/assets/datatable/dataTables.min.css" rel="stylesheet">

</head>

<body>  
<div class="container">
  <h4 class="mt-3">CRUD Simpel</h4>
    <p class="mb-4">Aplikasi Create, Read, Update dan Delete menggunakan Codeigniter framework</p> 
      <?php if ($this->session->flashdata('success')): ?>
      <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success');?>
      </div> 
      <?php endif;?>   
      <?php if ($this->session->flashdata('delete')): ?>
      <div class="alert alert-danger" role="alert">
          <?php echo $this->session->flashdata('delete');?>
      </div> 
      <?php endif;?> 
      <a class="btn btn-primary mb-2" href="<?php echo base_url();?>mahasiswa"><i class="fa fa-upload"></i> Data Mahasiswa</a>

      <a class="btn btn-primary mb-2" href="<?php echo base_url();?>dosen"><i class="fa fa-upload"></i> Data dosen</a>

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
  <script src="<?php echo base_url(); ?>/assets/datatable/datatables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable();
    });
  </script>
</body>
</html>
