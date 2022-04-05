<?php
  @$id = $_GET['id'];

  $sql   = "select * from tabel_buku where Id_buku=$id";
  $show  = $db->query($sql);
  $hasil = mysqli_fetch_assoc($show);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Buku</h4>
                        <br>
                        <form action="model/buku/prosesupdatebuku.php" method="POST">
                        <input type="hidden" name="Id_buku" id="Id_buku" value="<?php echo $hasil['Id_buku']?>">
                            <table class="table">
                                <tr>
                                    <td>ISBN</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="15" name="isbn"
                                            id="isbn" value="<?php echo $hasil['isbn']?>">
                                    </td>
                                </tr>
                    
                                <tr>
                                    <td>Nama buku</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="nama_buku"
                                            id="nama_buku" value="<?php echo $hasil['nama_buku']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penulis</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="penulis"
                                            id="nama_buku" value="<?php echo $hasil['penulis']?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Penerbit</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="penerbit"
                                            id="nama_buku" value="<?php echo $hasil['penerbit']?>">
                                    </td>
                                </tr>

                                <tr>
                                    <td>Tahun terbit</td>
                                    <td>:</td>
                                    <td><input type="year" class="form-control" maxlength="4" name="tahun_terbit"
                                            id="nama_buku" value="<?php echo $hasil['tahun_terbit']?>"></td>
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