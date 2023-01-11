<?php
   if(!defined('INDEX')) die("");
?>

<div class="jumbotron mt-3 pt-4 pb-4">
   <!-- <h1>Selamat Datang di </h1> -->
   <h1 class="display-4 mt-0 pt-0">☕</h1>
   <h1 class="display-4 mb-4"><b>Moka</b> | Monitoring Kehadiran</h1>
   <h3>Assalamu'alaikum <span class="text-warning"><?=ucwords($_SESSION['username']);?></span>..,</h3>
</div>

<!-- <?php
   $jml_pegawai = mysqli_num_rows(mysqli_query($con, "SELECT * FROM pegawai"));
   $jml_jabatan = mysqli_num_rows(mysqli_query($con, "SELECT * FROM jabatan"));
?> -->
<div class="row mb-3 pb-3">

   <!-- tile guru -->
   <div class="col-sm-4 col-6 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-dark">
            <i class="display-3 bi-person-vcard"></i> 
            <span class="display-3 float-right">25<?//=$jml_pegawai ?></span> 
         </li>
         <li class="list-group-item bg-warning">
            <a href="?hal=data-guru-view" class="nav-link text-white">Guru</a>  
         </li>
      </ul>
   </div>

   <!-- tile siswa -->
   <div class="col-sm-4 col-6 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-dark">
            <i class="display-3 bi-person-video2"></i> 
            <span class="display-3 float-right">99<?//=$jml_jabatan ?></span>
         </li>
         <li class="list-group-item bg-warning">
            <a href="?hal=data-siswa-view" class="nav-link text-white">Siswa</a>
         </li>
      </ul>      
   </div>
   
   <!-- tile siswa -->
   <div class="col-sm-4 col-6 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-dark">
            <i class="display-3 bi-person-video2"></i> 
            <span class="display-3 float-right">31<?//=$jml_jabatan ?></span>
         </li>
         <li class="list-group-item bg-warning">
            <a href="?hal=data-siswa-view" class="nav-link text-white">Mapel</a>
         </li>
      </ul>      
   </div>

   <!-- tile siswa -->
   <div class="col-sm-4 col-6 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-dark">
            <i class="display-3 bi-person-video2"></i> 
            <span class="display-3 float-right">2<?//=$jml_jabatan ?></span>
         </li>
         <li class="list-group-item bg-warning">
            <a href="?hal=data-siswa-view" class="nav-link text-white">Jurusan</a>
         </li>
      </ul>      
   </div>

   <!-- tile siswa -->
   <div class="col-sm-4 col-6 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-dark">
            <i class="display-3 bi-person-video2"></i> 
            <span class="display-3 float-right">7<?//=$jml_jabatan ?></span>
         </li>
         <li class="list-group-item bg-warning">
            <a href="?hal=data-siswa-view" class="nav-link text-white">Saran</a>
         </li>
      </ul>      
   </div>

   <!-- tile siswa -->
   <div class="col-sm-4 col-6 mb-3">
      <ul class="list-group">
         <li class="list-group-item text-dark">
            <i class="display-3 bi-person-video2"></i> 
            <span class="display-3 float-right">2<?//=$jml_jabatan ?></span>
         </li>
         <li class="list-group-item bg-warning">
            <a href="?hal=data-siswa-view" class="nav-link text-white">Operator</a>
         </li>
      </ul>      
   </div>
</div>