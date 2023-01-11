<?php
   if(!defined('INDEX')) die("");
?>

<h4 class="mt-2">Data Pegawai</h4>
<hr>
<a class="btn btn-success" href="?hal=pegawai_tambah"><i class="oi oi-plus"></i> Tambah</a>

<div class="table-responsive mt-3">
<table class="table table-striped table-hover table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Jenis Kelamin</th>
         <th>Tanggal Lahir</th>
         <th>Jabatan</th>
         <th>Keterangan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><img src="images/<?= $data['foto'] ?>" width="100"></td>
         <td><?= $data['nama_pegawai'] ?></td>
         <td><?= $data['jenis_kelamin'] ?></td>
         <td><?= $data['tgl_lahir'] ?></td>
         <td><?= $data['nama_jabatan'] ?></td>
         <td><?= $data['keterangan'] ?></td>
         <td>
            <a class="btn btn-sm btn-info" href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>"> <i class="oi oi-pencil"></i> Edit </a>
            <a class="btn btn-sm btn-danger" href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>"> <i class="oi oi-trash"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>