<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Atlet</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail atlet-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM atlet WHERE id_atlet='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Atlet KONI Asahan </h2>
                        <h4>Jalan Jendral Ahmad Yani, Sei Renggas, Kisaran  Barat <br> Kabupaten Asahan, Sumatera Utara, Kode Pos : 21211</h4>
                        <hr>
                        <h3>DATA ATLET</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td width="200">ID Atlet</td> <td><?= $data['id_atlet'] ?></td>
                                </tr>
                                <tr>
                                    <td>Cabang Olahraga</td> <td><?= $data['cabor'] ?></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jennis Kelamin</td> <td><?= $data['j_kelamin'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Medali</td> <td><?= $data['medali'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Event</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
                                <tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Ketua KONI Asahan<strong></u><br>
                                        NIP.11223344
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>