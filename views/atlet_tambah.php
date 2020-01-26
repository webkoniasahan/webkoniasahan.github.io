<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Atlet</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="id_atlet" class="col-sm-3 control-label">ID Atlet</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_atlet" class="form-control" id="inputEmail3" placeholder="Inputkan ID Atlet" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cabor" class="col-sm-3 control-label">Cabang Olahraga</label>
                            <div class="col-sm-9">
                                <select name="cabor" class="form-control">
                                    <option value="Badminton">Badminton</option>
                                    <option value="Atletik">Atletik</option>
                                    <option value="Gulat">Gulat</option>
                                    <option value="Pencak Silat">Pencak Silat</option>
                                    <option value="Catur">Catur</option>
                                    <option value="karate">Karate</option>
                                    <option value="Bulu Tangkis">Bulu Tangkis</option>
                                    <option value="Tenis Meja">Tenis Meja</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="j_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="j_kelamin" class="form-control">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputPassword3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="medali" class="col-sm-3 control-label">Medali</label>
                            <div class="col-sm-9">
                                <select name="medali" class="form-control">
                                    <option value="Emas">Emas</option>
                                    <option value="Perak">Perak</option>
                                    <option value="Perunggu">Perunggu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Event</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Event" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Atlet</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=atlet&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Atlet
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $id=$_POST['id_atlet'];
  $cabor=$_POST['cabor'];
  $nama=$_POST['nama'];
  $tgllahir=$_POST['tgl_lahir'];
  $jkelamin=$_POST['j_kelamin'];
  $alamat=$_POST['alamat'];
  $medali=$_POST['medali'];
  $tglmasuk=$_POST['tgl_masuk'];
    //buat sql
    $sql="INSERT INTO atlet VALUES ('','$id','$cabor','$nama','$tgllahir','$jkelamin','$alamat','$medali','$tglmasuk')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Atlet Error");
    if ($query){
        echo "<script>window.location.assign('?page=atlet&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
