
                <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pegawai
        <a href="beranda.php?page=pegawai&aksi=add">
          <button class="btn btn-primary">Tambah Data</button>
          </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id pegawai</th>
                        <th>Nama pegawai</th>
                        <th>Jenis kelamin</th>
                        <th>Alamat</th>
                        <th>No hp</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "select * from tabel_pegawai";
                        $show = $db->query($sql);

                        foreach($show as $agt):
                    ?>
                    <tr>
                        <td><?php echo $agt['Id_pegawai']?></td>
                        <td><?php echo $agt['nama_pegawai']?></td>
                        <td><?php echo $agt['jenis_kelamin']?></td>
                        <td><?php echo $agt['alamat']?></td>
                        <td><?php echo $agt['no_hp']?></td>
                        <td><?php echo $agt['jabatan']?></td>
                        <td>
                                <a href="beranda.php?page=pegawai&aksi=edit&id=<?php echo $agt['Id_pegawai']?>"
                                    class="btn btn-primary btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="model/pegawai/prosesdeletepegawai.php?id=<?php echo $agt['Id_pegawai']?>"
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

</div>                                                                                                                                                                   ?>

                                       
                                        
                                        <tr>
                                            <td><?php echo $agt["nama_pegawai"]?></td>
                                            <td><?php echo $agt["alamat"]?></td>
                                            <td><?php echo $agt["jenis_kelamin"]?></td>
                                            <td><?php echo $agt["no_hp"]?></td>
                                            <td><?php echo $agt["jabatan"]?></td>
                                        </tr>
                                        <?php endforeach ; ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>                                                                            ��,�[n�����4X��W��5#�5�w#�y�{ Z���"����򽵡)<m8��^����C�8I�����gWHڭ���
�E�!��җ�B�&b[���Xj�����=�1c4�g�e�y��7�~��g��\eJ�Q�*�a�a�RpI������/�9��5����1W��>�G�B��:3j��l��bLC��Q��6Ůɒ.��q�i0 ۣ:�b�� G�I�?h����O7H9Gq��n�����U|q
VM��EP��t�S:%I%����C����� :F�@^������?d{�ى�W0eY���9����8�9�&�[��N/h���P)|O��m���UAAғ�Wӹ�[&�ț�L���[yi^j{��غ���-O+�J���y%���*�-v$�_��#@*�a`Ne,��������`h���z'�o�1��/߼P!j�guP��� �-(�-"�s�,��j*(���Zҫ�G'D���K�#�Gr�W���8.           `��R�R  ��R�,    ..          `��R�R  ��R�,    Bp h p   �� �������������  ����a d d t r  �a n s a k s   i . ADDTRA~1PHP  m��RS  ��oR�,�  B. p h p    W������������  ����e d i t t  Wr a n s a k   s i EDITTR~1PHP  ���RS  BiR�,N  At r a n s  oa k s i . p   h p TRANSA~1PHP  ���RS  �m�R�,�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                