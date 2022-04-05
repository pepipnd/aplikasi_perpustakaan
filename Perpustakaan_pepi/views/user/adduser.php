<?php 
    $user = "select Id_pegawai, nama_pegawai from tabel_pegawai";
    $showuser = $db->query($user);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data User</h4>
                        <br>
                        <form action="model/user/prosesadduser.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nama pegawai</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="5" name="Id_petugas"
                                            id="Id_user">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="username"
                                            id="Id_user">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="50" name="password"
                                            id="Id_user">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" maxlength="1" name="level"
                                            id="Id_user"></td>
                                </tr>
                                <tr>
                                    <td>Dibuat pada</td>
                                    <td>:</td>
                                    <td><input type="date" class="form-control" name="dibuatpada"
                                            id="Id_user"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
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