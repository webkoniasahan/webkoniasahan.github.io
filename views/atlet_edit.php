<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM atlet WHERE id_atlet ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Atlet</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="id_atlet" class="col-sm-3 control-label">ID Atlet</label>
                            <div class="col-sm-9">
                                <input type="text" name="id_atlet" value="<?=$data['id_atlet']?>"class="form-control" id="inputEmail3" placeholder="ID Atlet">
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
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal lahir-->           

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
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputPassword3" placeholder="Alamat">
                            </div>
                        </div>
                        <!---->
                        
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
                        <!--Akhir -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Atlet</button>
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
    $id_atlet=$_POST['id_atlet'];
    $cabor=$_POST['cabor'];
    $nama=$_POST['nama'];
    $tgl_lahir=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $j_kelamin=$_POST['j_kelamin'];
    $alamat=$_POST['alamat'];
    $medali=$_POST['medali'];
    $tgl_masuk=$_POST['tgl_masuk'];
    //buat sql
   $sql="UPDATE atlet SET id_atlet='$id_atlet',nama='$nama',tgl_lahir='$tgl_lahir',j_kelamin='$j_kelamin',alamat='$alamat',medali='$medali', tgl_masuk='tgl_masuk' WHERE id_atlet ='$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=atlet&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



