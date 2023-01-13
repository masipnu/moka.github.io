<?php
   if(!defined('INDEX')) die("");
?>

<h4 class="mt-2">Data Guru</h4>
<hr>
<a class="btn btn-success" href="?hal=data-guru-tambah"><i class="bi-person"></i> Tambah</a>

<div class="table-responsive mt-3">
<table class="table table-striped table-hover table-bordered">
   <thead>
      <tr class="text-center">
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Jenis Kelamin</th>
         <th>Tanggal Lahir</th>
         <th>Alamat</th>
         <th>Role</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>

<!-- asli-apg -->
<?php
   // $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id-guru DESC");
   // $no = 0;
   // while($data = mysqli_fetch_array($query)){
   //    $no++;
?>

<!-- modif-moka -->
<?php
   $query = mysqli_query($con, "SELECT * FROM guru LEFT JOIN role ON guru.id_role=role.id_role ORDER BY guru.id_role ASC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td class="text-center"><?= $no ?></td>
         <!-- original -->
         <!-- <td><img src="images/<?= $data['foto'] ?>" width="100"></td> -->
         <td class="text-center"><i class="bi-person-fill text-info"></i></td>
         <td><?= $data['nama_guru'] ?></td>
         <td class="text-center"><?= $data['jk'] ?></td>
         <td><?= $data['ttl'] ?></td>
         <td><?= $data['alamat'] ?></td>
         <td class="text-center"><?= ucwords($data['nama_role']) ?></td>
         <td>
            <a class="btn btn-sm btn-info" href="?hal=pegawai_edit&id=<?= $data['id-guru'] ?>"> <i class="oi oi-pencil"></i> Edit </a>
            <a class="btn btn-sm btn-danger" href="?hal=pegawai_hapus&id=<?= $data['id-guru'] ?>&foto=<?= $data['foto'] ?>"> <i class="oi oi-trash"></i> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
</div>