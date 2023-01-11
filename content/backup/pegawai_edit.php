<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h4 class="mt-2">Edit Pegawai</h4>
<hr>
<form class="mb-5" method="post" action="?hal=pegawai_update" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">
   
   <div class="form-group row">
      <label class="col-sm-2 col-form-label">Foto</label>   
      <div class="col-sm-4">
	    <div class="custom-file">
		   <label for="foto" class="custom-file-label"></label>   
		   <input class="custom-file-input" type="file" id="foto" name="foto">
        </div>
		<img class="img-thumbnail mt-2" src="images/<?= $data['foto'] ?>" width="150">
	  </div>
   </div>

   <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>   
      <div class="col-sm-4">   
	    <input class="form-control" type="text" id="nama" name="nama" value="<?= $data['nama_pegawai'] ?>">
      </div> 
   </div>

   <div class="form-group row">
      <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
	  <div class="col-sm-4">  
      <?php 
         if($data['jenis_kelamin'] == "L"){
            $l = " checked";
            $p = "";
         }else{
            $l = "";
            $p = "checked";
         }
      ?>
      <div class="custom-control custom-radio custom-control-inline">
			 <input class="custom-control-input" type="radio" id="jkl" name="jk" value="L" <?= $l ?>> 
			 <label class="custom-control-label" for="jkl">Laki-laki</label>
		  </div>
		  <div class="custom-control custom-radio custom-control-inline">
			 <input class="custom-control-input" type="radio" id="jkp" name="jk" value="P" <?= $p ?>> 
			 <label class="custom-control-label" for="jkp">Perempuan</label>
		  </div> 
	  </div>
   </div>

   <div class="form-group row">
      <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>   
      <div class="col-sm-2">   
		  <input class="form-control" type="text"  id="tanggal" name="tanggal" value="<?= $data['tgl_lahir'] ?>">
      </div>
   </div>

   <div class="form-group row">
      <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label> 
      <div class="col-sm-4">
		 <select class="custom-select" id="jabatan" name="jabatan">
         <option value=""> -Pilih Jabatan-</option>
         <?php
            $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
            while($j = mysqli_fetch_array($queryjabatan)){
               echo "<option value='$j[id_jabatan]'";
               if($j['id_jabatan'] == $data['id_jabatan']) echo " selected";
               echo ">$j[nama_jabatan]</option>";
            }
         ?>
      </select>
      </div>
   </div>

   <div class="form-group row">
      <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>   
      <div class="col-sm-8">
	     <textarea class="form-control" rows="5" id="keterangan" name="keterangan"><?= $data['keterangan'] ?></textarea>
      </div>
   </div>

   <button type="submit" class="btn btn-info"><i class="oi oi-task"></i> Simpan</button>
   <button type="reset" class="btn btn-warning"><i class="oi oi-circle-x"></i> Batal</button>
</form>