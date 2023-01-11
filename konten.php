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
      "identitas-sekolah-view",
      "identitas-sekolah-tambah",
      "identitas-sekolah-add",
      "identitas-sekolah-edit",
      "identitas-sekolah-update",
      "identitas-sekolah-delete",
      // data-tapel
      "data-tapel-view",
      "data-tapel-tambah",
      "data-tapel-add",
      "data-tapel-edit",
      "data-tapel-update",
      "data-tapel-delete",
      // data-semester
      "data-semester-view",
      "data-semester-tambah",
      "data-semester-add",
      "data-semester-edit",
      "data-semester-update",
      "data-semester-delete",
      // data-jurusan
      "data-jurusan-view",
      "data-jurusan-tambah",
      "data-jurusan-add",
      "data-jurusan-edit",
      "data-jurusan-update",
      "data-jurusan-delete",
      // data-kelas
      "data-kelas-view",
      "data-kelas-tambah",
      "data-kelas-add",
      "data-kelas-edit",
      "data-kelas-update",
      "data-kelas-delete",
      // data-pelajaran
      "jadwal-pelajaran-view",
      "jadwal-pelajaran-tambah",
      "jadwal-pelajaran-add",
      "jadwal-pelajaran-edit",
      "jadwal-pelajaran-update",
      "jadwal-pelajaran-delete",
      // data-guru
      "data-guru-view",
      "data-guru-tambah",
      "data-guru-add",
      "data-guru-edit",
      "data-guru-update",
      "data-guru-delete",
      // data-siswa
      "data-siswa-view",
      "data-siswa-tambah",
      "data-siswa-add",
      "data-siswa-edit",
      "data-siswa-update",
      "data-siswa-delete",
      // data-ortu
      "data-ortu-view",
      "data-ortu-tambah",
      "data-ortu-add",
      "data-ortu-edit",
      "data-ortu-update",
      "data-ortu-delete",
      // saran
      "saran-view",
      "saran-tambah",
      "saran-add",
      "saran-edit",
      "saran-update",
      "saran-delete",
      // user
      "user-view",
      "user-tambah",
      "user-add",
      "user-edit",
      "user-update",
      "user-delete"
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