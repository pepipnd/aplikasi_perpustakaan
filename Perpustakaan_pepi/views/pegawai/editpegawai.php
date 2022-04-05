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
                            <table class="table">
                                <tr>
                                    <td>Nama pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="nama_pegawai"
                                            id="nama_pegawai" value="<?php echo $hasil['nama_pegawai']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="l" <?php if($jenis_kelamin=='l'){
                                            echo"selected"; } ?>>Laki Laki</option>
                                            <option value="p" <?php if($jenis_kelamin=='p'){
                                            echo"selected"; } ?>>Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="alamat" id="alamat" cols="10"
                                            rows="6"><?php echo $hasil ['alamat']?></textarea></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="15" name="no_hp"
                                            id="nama_pegawai" value="<?php echo $hasil['no_hp']?>"></td>
                                </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="30" name="jabatan"
                                            id="nama_pegawai" value="<?php echo $hasil['jabatan']?>"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>