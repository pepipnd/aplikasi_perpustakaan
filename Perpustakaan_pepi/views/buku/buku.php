
                <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Buku
        <a href="beranda.php?page=buku&aksi=add">
          <button class="btn btn-primary">Tambah Data</button>
          </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id buku</th>
                        <th>ISBN</th>
                        <th>Nama buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                        $sql = "select * from tabel_buku";
                        $show = $db->query($sql);

                        foreach($show as $agt):
                    ?>
                    <tr>
                        <td><?php echo $agt['Id_buku']?></td>
                        <td><?php echo $agt['isbn']?></td>
                        <td><?php echo $agt['nama_buku']?></td>
                        <td><?php echo $agt['penulis']?></td>
                        <td><?php echo $agt['penerbit']?></td>
                        <td><?php echo $agt['tahun_terbit']?></td>
                        <td>
                                <a href="beranda.php?page=buku&aksi=edit&id=<?php echo $agt['Id_buku']?>"
                                    class="btn btn-primary btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="model/buku/prosesdeletebuku.php?id=<?php echo $agt['Id_buku']?>"
                                    class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                        </td>
                   </tr>
                   <?php endforeach; ?>
                

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>