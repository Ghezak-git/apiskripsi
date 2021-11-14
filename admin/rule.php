<?php include 'header.php' ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Rule</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#tambah_siswa">Tambah Data</a>
            </div>
             <div class="modal fade" id="tambah_siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <form action="../function/f_tambah_rule.php" method="POST" enctype="multipart/form-data">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Tambah Rule</h4> </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Kode Gejala:</label>
                                    <input type="text" name="kd_gejala" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Solusi dan Pertanyaan:</label>
                                    <input type="text" name="solusi" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Bila Benar:</label>
                                    <input type="text" name="bilab" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Bila Salah:</label>
                                    <input type="text" name="bilas" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Mulai:</label>
                                    <input type="text" name="mulai" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Selesai:</label>
                                    <input type="text" name="selesai" class="form-control"> </div>
                                <div class="form-group">
                                    <label class="control-label">Suara:</label>
                                    <input type="file" name="gambar" class="form-control"> </div>
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
                      <th>Kode gejala</th>
                      <th>Solusi dan Pertanyaan</th>
                      <th>Bila Benar</th>
                      <th>Bila Salah</th>
                      <th>Mulai</th>
                      <th>Selesai</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	 <?php 
                    	  include '../function/koneksi.php'; 
	                      $q = "select * from tbl_pengetahuan";
	                      $ex = mysqli_query($koneksi,$q);
	                      $a = 1;
	                      while ($r = mysqli_fetch_array($ex)) {
                     ?>
                    <tr>
                      <td><?php echo $a; ?></td>
                      <td><?php echo $r['kd_gejala'] ?></td>
                      <td><?php echo $r['solusi_dan_pertanyaan'] ?></td>
                      <td><?php echo $r['bila_benar'] ?></td>
                      <td><?php echo $r['bila_salah'] ?></td>
                      <td><?php echo $r['mulai'] ?></td>
                      <td><?php echo $r['selesai'] ?></td>
                      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_rule<?php echo $r['ID']; ?>">Edit</button>
                      <a href="../function/f_delete_rule.php?ID=<?php echo $r['ID']; ?>&&file=<?php echo $r['suara'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>

                   <div class="modal fade" id="edit_rule<?php echo $r['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
		                <form action="../function/f_edit_rule.php" method="POST" enctype="multipart/form-data">
		                <div class="modal-dialog" role="document">
		                    <div class="modal-content">
		                        <div class="modal-header">
		                            <h4 class="modal-title" id="exampleModalLabel1">Edit Rule</h4> </div>
		                        	<?php
	                                    $id = $r['ID']; 
	                                    $query_edit = mysqli_query($koneksi,"SELECT * FROM tbl_pengetahuan WHERE ID='$id'");
	                                    while ($row = mysqli_fetch_array($query_edit)) {  
                                    ?>
		                            <div class="modal-body">
		                                <div class="form-group">
		                                    <label class="control-label">Kode Gejala:</label>
		                                    <input type="hidden" name="ID" value="<?php echo $row['ID'] ?>">
		                                    <input type="text" name="ekd_gejala" class="form-control" value="<?php echo $row['kd_gejala'] ?>"> </div>
                                    <div class="form-group">
                                        <label class="control-label">Solusi dan Pertanyaan:</label>
                                        <input type="text" name="esolusi" class="form-control" value="<?php echo $row['solusi_dan_pertanyaan'] ?>"> </div>
                                    <div class="form-group">
                                        <label class="control-label">Bila Benar:</label>
                                        <input type="text" name="ebilab" class="form-control" value="<?php echo $row['bila_benar'] ?>"> </div>
                                    <div class="form-group">
                                        <label class="control-label">Bila Salah:</label>
                                        <input type="text" name="ebilas" class="form-control" value="<?php echo $row['bila_salah'] ?>"> </div>
                                    <div class="form-group">
                                        <label class="control-label">Mulai:</label>
                                        <input type="text" name="emulai" class="form-control" value="<?php echo $row['mulai'] ?>"> </div>
                                    <div class="form-group">
                                        <label class="control-label">Selesai:</label>
                                        <input type="text" name="eselesai" class="form-control" value="<?php echo $row['selesai'] ?>"> </div>
                                    <div class="form-group">
                                        <label class="control-label">Suara:</label>
                                        <input type="hidden" name="g_gambar" value="<?php echo $row['suara']; ?>">
                                            <input type="file" name="e_gambar" class="form-control"> </div> 
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