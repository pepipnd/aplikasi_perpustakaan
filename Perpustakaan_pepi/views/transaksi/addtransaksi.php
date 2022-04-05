
<?php 
    $anggota = "select id_anggota, Nama_anggota from tabel_anggota";
    $showanggota = $db->query($anggota);

    
    $pegawai = "select Id_pegawai, nama_pegawai from tabel_pegawai";
    $showpegawai = $db->query($pegawai);

    $buku = "select Id_buku, nama_buku from tabel_buku";
    $showbuku = $db->query($buku);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data Transaksi</h4>
                        <br>
                        <form action="model/transaksi/prosesaddtransaksi.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Tanggal transaksi</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="tanggal_transaksi"
                                            id="Id_transaksi">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama anggota</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="Id_anggota" id="Id_anggota">
                                            <?php foreach ($showanggota as $agt) :?>
                                                <option value="<?php echo $agt['id_anggota']?>"><?php echo $agt['Nama_anggota']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama pegawai</td>
                                    <td>:</td>
                                    <td>    
                                        <select class="form-control" name="Id_pegawai" id="Id_pegawai">
                                            <?php foreach ($showpegawai as $pgw) :?>
                                                <option value="<?php echo $pgw['Id_pegawai']?>"><?php echo $pgw['nama_pegawai']?></option>
                                            <?php endforeach;?>
                                            pp
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama buku</td>
                                    <td>:</td>
                                    <td>
                                    <select class="form-control" name="Id_buku" id="Id_buku">
                                            <?php foreach ($showbuku as $bk) :?>
                                                <option value="<?php echo $bk['Id_buku']?>"><?php echo $bk['nama_buku']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="2" name="quantity"
                                            id="Id_transaksi">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis transaksi</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_transaksi" id="jenis_transaksi">
                  <?php
  @$id = $_GET['id'];

  $sql   = "select * from tabel_pegawai where Id_pegawai=$id";
  $show  = $db->query($sql);
  $hasil = mysqli_fetch_assoc($show);
  $jenis_kelamin = $hasil['jenis_kelamin'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Pegawai</h4>
                        <br>
                        <form action="model/pegawai/prosesupdatepegawai.php" method="POST">
                        <input type="hidden" name="Id_pegawai" id="Id_pegawai" value="<?php echo $hasil['Id_pegawai']?>">
            