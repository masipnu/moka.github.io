<?php
   if(!defined('INDEX')) die("");
?>

<?php
    // ambil data sekolah dari database
    $query = mysqli_query($con, "SELECT * FROM sekolah");
    $data = mysqli_fetch_array($query);
?>

<h4 class="mt-2">Identitas Sekolah</h4>
<hr>
<!-- <a class="btn btn-success" href="?hal=jabatan_tambah"><i class="oi oi-plus"></i> Tambah</a> -->
<div class="row">
    <div class="col">
            <div class="form-group row">
            <label for="npsn" class="col-sm-4 col-form-label">NPSN</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="npsn"
                        name="npsn"
                        value="<?= $data['npsn']?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="nama-sekolah" class="col-sm-4 col-form-label">Nama Sekolah</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="nama-sekolah"
                        name="nama-sekolah"
                        value="<?= $data['nama-sekolah']?>"
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['alamat-sekolah']?>"
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="tgl-berdiri" class="col-sm-4 col-form-label">Tanggal Pendirian</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['tgl-berdiri']?>"
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="ks" class="col-sm-4 col-form-label">Kepala Sekolah</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['ks']?>"
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="no-telp" class="col-sm-4 col-form-label">No. Telp</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['no-telp']?>"
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">E-Mail</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['email']?>"
                        >
            </div>
        </div>

        <div class="form-group row">
            <label for="website" class="col-sm-4 col-form-label">Website</label>   
            <div class="col-sm-8">
                <input class="form-control readonly"
                        type="text"
                        id="alamat"
                        name="alamat"
                        value="<?= $data['website']?>"
                        >
            </div>
        </div>
    </div>
<div class="col">
<div class="form-group row">
            <div class="col-sm-12 text-center">
                <img src="images/<?= $data['logo']?>"
                        alt=""
                        style="height:250px">
            </div>
            <label for="logo" class="col-sm-12 col-form-label text-center">Logo : <?= $data['nama-sekolah']?></label>
        </div>
</div>
</div>
   </tbody>
</table>
</div>