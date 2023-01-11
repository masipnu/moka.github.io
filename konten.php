<?php
   if(!defined('INDEX')) die("");

   // asli dari sourcecode
   // $halaman = array("dashboard", 
   //    "pegawai", "pegawai_tambah", "pegawai_insert",
   //    "pegawai_edit", "pegawai_update", "pegawai_hapus",
   //    "jabatan", "jabatan_tambah", "jabatan_insert", 
   //    "jabatan_edit", "jabatan_update", "jabatan_hapus");

   // modif-moka
   $halaman=[
      "dashboard",
      // identitas-sekolah
      "identitas-sekolah-view.php",
      "identitas-sekolah-tambah.php",
      "identitas-sekolah-add.php",
      "identitas-sekolah-edit.php",
      "identitas-sekolah-update.php",
      "identitas-sekolah-delete.php",
      // data-tapel
      "data-tapel-view.php",
      "data-tapel-tambah.php",
      "data-tapel-add.php",
      "data-tapel-edit.php",
      "data-tapel-update.php",
      "data-tapel-delete.php",
      // data-semester
      "data-semester-view.php",
      "data-semester-tambah.php",
      "data-semester-add.php",
      "data-semester-edit.php",
      "data-semester-update.php",
      "data-semester-delete.php",
      // data-jurusan
      "data-jurusan-view.php",
      "data-jurusan-tambah.php",
      "data-jurusan-add.php",
      "data-jurusan-edit.php",
      "data-jurusan-update.php",
      "data-jurusan-delete.php",
      // data-kelas
      "data-kelas-view.php",
      "data-kelas-tambah.php",
      "data-kelas-add.php",
      "data-kelas-edit.php",
      "data-kelas-update.php",
      "data-kelas-delete.php",
      // data-pelajaran
      "jadwal-pelajaran-view.php",
      "jadwal-pelajaran-tambah.php",
      "jadwal-pelajaran-add.php",
      "jadwal-pelajaran-edit.php",
      "jadwal-pelajaran-update.php",
      "jadwal-pelajaran-delete.php",
      // data-guru
      "data-guru-view.php",
      "data-guru-tambah.php",
      "data-guru-add.php",
      "data-guru-edit.php",
      "data-guru-update.php",
      "data-guru-delete.php",
      // data-siswa
      "data-siswa-view.php",
      "data-siswa-tambah.php",
      "data-siswa-add.php",
      "data-siswa-edit.php",
      "data-siswa-update.php",
      "data-siswa-delete.php",
      // data-ortu
      "data-ortu-view.php",
      "data-ortu-tambah.php",
      "data-ortu-add.php",
      "data-ortu-edit.php",
      "data-ortu-update.php",
      "data-ortu-delete.php",
      // saran
      "saran-view.php",
      "saran-tambah.php",
      "saran-add.php",
      "saran-edit.php",
      "saran-update.php",
      "saran-delete.php",
      // user
      "user-view.php",
      "user-tambah.php",
      "user-add.php",
      "user-edit.php",
      "user-update.php",
      "user-delete.php"
   ];

   if(isset($_GET['hal'])) $hal = $_GET['hal'];
   else $hal = "dashboard";

   foreach($halaman as $h){
      if($hal == $h){
         include "content/$h.php";
         break;
      }
   }
?>