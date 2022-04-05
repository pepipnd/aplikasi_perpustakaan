<?php
  @$id = $_GET['id'];

  $sql   = "select * from tabel_user where Id_user=$id";
  $show  = $db->query($sql);
  $hasil = mysqli_fetch_assoc($show);

  $id_peg = $hasil['Id_petugas'];

  $pegawai = "select Id_pegawai, nama_pegawai from tabel_pegawai";
    $showpegawai = $db->query($pegawai);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data User</h4>
                        <br>
                        <form action="model/user/prosesupdateuser.php" method="POST">
                        <input type="hidden" name="Id_user" id="Id_user" value="<?php echo $hasil['Id_user']?>">
                            <table class="table">
                                <tr>
                                    <td>Nama pegawai</td>
                                    <td>:</td>
                                    <td>
                                    <select class="form-control" name="Id_pegawai" id="Id_pegawai">
                                            <?php foreach ($showpegawai as $pgw) :
                                                $id_pgw = $pgw['Id_pegawai'];    
                                            ?>
                                                <option value="<?php echo $pgw['Id_pegawai']?>"  
                                                <?php 
                                                    if($id_peg == $id_pgw) { echo "selected"; } 
                                                ?>
                                                ><?php echo $pgw['nama_pegawai']?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="username"
                                            id="Id_user" value="<?php echo $hasil['username']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="password"
                                            id="Id_user" value="<?php echo $hasil['password']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="1" name="level"
                                            id="Id_user" value="<?php echo $hasil['level']?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dibuat pada</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="dibuatpada"
                                            id="Id_user" value="<?php echo $hasil['dibuatpada']?>"></td>
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