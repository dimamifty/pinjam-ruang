
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

     <!-- jadwal -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Jadwal</span>
        </a>
        <!--dropdown-->
         <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <a class="dropdown-item" href="<?php echo site_url('tambah') ?>">Tambah Jadwal</a>
           <a class="dropdown-item" href="<?php echo site_url('listdata') ?>">Data Peminjaman</a>
          </div>
      </li>

      <!-- ruang -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Ruang</span>
        </a>
        <!--dropdown -->
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <a class="dropdown-item" href="<?php echo site_url('tambah_ruang') ?>">Tambah Ruang</a>
           <a class="dropdown-item" href="<?php echo site_url('list_ruang') ?>">Data Ruang</a>
          </div>
      </li>

      <!-- User -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>User</span></a>
          <!-- dropdown-->
           <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo site_url('tambah_ruang') ?>">Admin</a>
          <a class="dropdown-item" href="<?php echo site_url('list_ruang') ?>">User Ruang</a>
          </div>
      </li>
      <!-- logout -->
      <li class="nav-item dropdown">
        <a class="nav-link " href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw "></i>
          <span>Logout</span></a>
     
    </ul>