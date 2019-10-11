<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php $this->load->view('templates/head.php') ?>
<body id="page-top">

  <?php $this->load->view('templates/navbar.php') ?>  



  <div id="wrapper">
    <?php $this->load->view('templates/sidebar.php') ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>-->

        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">

            <i class="fas fa-table"></i>
          Jadwal Peminjaman Ruangan</div>
          <div class="card-body" id="load">
            <div class="">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama ruang</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Selesai</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $id_peminjaman=1; foreach ($list as $list): ?>
                  <tr>
                    <td>
                     <?php echo $list->id_peminjaman ?> </a>
                   </td>
                   <td width="150">
                     <?php echo $list->nama_ruang ?> </a>
                   </td>
                   <td height="20">
                    <?php 
                    $tgl = $list->date_start;
                    $date = date("d-m-Y", strtotime($tgl));
                    echo $date; ?>
                  </td>
                  <td>
                    <?php 
                    $tgl = $list->date_end;
                    $date = date("d-m-Y", strtotime($tgl));
                    echo $date; ?>
                  </td>
                  <td>
                    <?php 
                    $jam = $list->date_start;
                    $time = date("H:i:s", strtotime($jam));
                    echo $time; ?>                    
                  </td>
                  <td>
                    <?php 
                    $jam = $list->date_end;
                    $time = date("H:i:s", strtotime($jam));
                    echo $time; ?>
                  </td>
                  <td>
                    <?php
                    if($list->status == 0){                                        
                      echo "<p class='text-danger'>Booking</p>";                    
                    }
                    else
                    {         
                      echo "<p class='text-success'>Selesai</p>";
                    }
                    ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"><a href="<?php echo site_url('tambah') ?>">
        <button name="tambah" type="button" class="btn btn-primary col-md-2 col-xs-12 float-left mr-5">+ Tambah Data</button></a></div>
      </div>



    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Dinas Komunikasi, Informatika, dan Persandian Kab. Banyuwangi</span>
        </div>
      </div>
    </footer>

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>
