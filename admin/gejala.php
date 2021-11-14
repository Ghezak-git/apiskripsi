<?php include 'header.php' ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Gejala</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambah_siswa">Tambah Data</a>
            </div>
             <div class="modal fade" id="tambah_siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <form action="../function/f_tambah_gejala.php" method="POST" enctype="multipart/form-data">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Tambah Gejala</h4> </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Kode Gejala:</label>
                                    <input type="text" name="kd_gejala" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Nama Gejala:</label>
                                    <input type="text" name="nama_gejala" class="form-control"> </div>
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
                      <th>Kode Gejala</th>
                      <th>Gejala</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	 <?php 
                    	  include '../function/koneksi.php'; 
	                      $q = "select * from tbl_gejala";
	                      $ex = mysqli_query($koneksi,$q);
	                      $a = 1;
	                      while ($r = mysqli_fetch_array($ex)) {
                     ?>
                    <tr>
                      <td><?php echo $a; ?></td>
                      <td><?php echo $r['kd_gejala'] ?></td>
                      <td><?php echo $r['nama_gejala'] ?></td>
                      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_gejala<?php echo $r['id_gejala']; ?>">Edit</button>
                      <a href="../function/f_delete_gejala.php?id_gejala=<?php echo $r['id_gejala']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>

                   <div class="modal fade" id="edit_gejala<?php echo $r['id_gejala']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
		                <form action="../function/f_edit_gejala.php" method="POST" enctype="multipart/form-data">
		                <div class="modal-dialog" role="document">
		                    <div class="modal-content">
		                        <div class="modal-header">
		                            <h4 class="modal-title" id="exampleModalLabel1">Edit Gejala</h4> </div>
		                        	<?php
	                                    $id = $r['id_gejala']; 
	                                    $query_edit = mysqli_query($koneksi,"SELECT * FROM tbl_gejala WHERE id_gejala='$id'");
	                                    while ($row = mysqli_fetch_array($query_edit)) {  
                                    ?>
		                            <div class="modal-body">
		                                <div class="form-group">
		                                    <label class="control-label">Kode Gejala:</label>
		                                    <input type="hidden" name="id_gejala" value="<?php echo $row['id_gejala'] ?>">
		                                    <input type="text" name="ekd_gejala" class="form-control" value="<?php echo $row['kd_gejala'] ?>"> </div>
		                                <div class="form-group">
		                                    <label class="control-label">Nama Gejala:</label>
		                                    <input type="text" name="enama_gejala" class="form-control" value="<?php echo $row['nama_gejala'] ?>"> </div>
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