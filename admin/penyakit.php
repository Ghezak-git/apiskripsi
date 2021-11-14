<?php include 'header.php' ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Penyakit</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambah_siswa">Tambah Data</a>
            </div>
             <div class="modal fade" id="tambah_siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <form action="../function/f_tambah_penyakit.php" method="POST" enctype="multipart/form-data">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Tambah Penyakit</h4> </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Nama Penyakit:</label>
                                    <input type="text" name="nama_penyakit" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Gambar:</label>
                                    <input type="file" name="gambar" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Gejala:</label>
                                    <textarea type="email" name="gejala" class="form-control"></textarea> </div>
                                <div class="form-group">
                                    <label class="control-label">Artikel:</label>
                                    <textarea type="text" name="artikel" class="form-control"> </textarea> </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Penyakit</th>
                      <th>Gambar</th>
                      <th>Gejala</th>
                      <th>Artikel</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	 <?php 
                    	  include '../function/koneksi.php'; 
	                      $q = "select * from tbl_penyakit";
	                      $ex = mysqli_query($koneksi,$q);
	                      $a = 1;
	                      while ($r = mysqli_fetch_array($ex)) {
                     ?>
                    <tr>
                      <td><?php echo $a; ?></td>
                      <td><?php echo $r['nama_penyakit'] ?></td>
                      <td><img class="img-profile rounded-circle" width="100" src="../json/foto_penyakit/<?php echo $r['gambar'] ?>"></td>
                      <td><?php echo $r['gejala'] ?></td>
                      <td><?php echo $r['artikel'] ?></td>
                      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_penyakit<?php echo $r['id_penyakit']; ?>">Edit</button>
                      <a href="../function/f_delete_penyakit.php?id_penyakit=<?php echo $r['id_penyakit']; ?>&&file=<?php echo $r['gambar'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>

                   <div class="modal fade" id="edit_penyakit<?php echo $r['id_penyakit']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
		                <form action="../function/f_edit_penyakit.php" method="POST" enctype="multipart/form-data">
		                <div class="modal-dialog" role="document">
		                    <div class="modal-content">
		                        <div class="modal-header">
		                            <h4 class="modal-title" id="exampleModalLabel1">Edit Penyakit</h4> </div>
		                        	<?php
	                                    $id = $r['id_penyakit']; 
	                                    $query_edit = mysqli_query($koneksi,"SELECT * FROM tbl_penyakit WHERE id_penyakit='$id'");
	                                    while ($row = mysqli_fetch_array($query_edit)) {  
                                    ?>
		                            <div class="modal-body">
		                                <div class="form-group">
		                                    <label class="control-label">Nama Penyakit:</label>
		                                    <input type="hidden" name="id_penyakit" value="<?php echo $row['id_penyakit'] ?>">
		                                    <input type="text" name="enama_penyakit" class="form-control" value="<?php echo $row['nama_penyakit'] ?>"> </div>
		                                <div class="form-group">
		                                    <label class="control-label">Gambar:</label>
		                                    <input type="hidden" name="g_gambar" value="<?php echo $row['gambar']; ?>">
                                            <input type="file" name="e_gambar" class="form-control"> </div>	
		                                <div class="form-group">
		                                    <label class="control-label">Gejala:</label>
		                                    <textarea type="email" name="egejala" class="form-control" ><?php echo $row['gejala'] ; ?></textarea> </div>
		                                <div class="form-group">
		                                    <label class="control-label">Artikel:</label>
		                                    <textarea type="text" name="eartikel" class="form-control"><?php echo $row['artikel'] ; ?></textarea> </div>
		                            </div>
		                        <?php } ?>
		                        <div class="modal-footer">
		                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                            <button type="submit" class="btn btn-primary">Edit</button>
		                        </div>
		                    </div>
		                </div>
		                </form>
		            </div>

                    <?php $a = $a +1; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include 'footer.php' ?>