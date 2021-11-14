<?php include 'header.php' ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data User</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Penyakit</th>
                      <th>Nama Lengkap</th>
                      <th>Tanggal</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	 <?php 
                    	  include '../function/koneksi.php'; 
	                      $q = "select id_hasil,penyakit,u.nama_lengkap,created_at from tbl_hasil h join tbl_user u on h.id_user=u.id_user";
	                      $ex = mysqli_query($koneksi,$q);
	                      $a = 1;
	                      while ($r = mysqli_fetch_array($ex)) {
                     ?>
                    <tr>
                      <td><?php echo $a; ?></td>
                      <td><?php echo $r['penyakit'] ?></td>
                      <td><?php echo $r['nama_lengkap'] ?></td>
                      <td><?php echo $r['created_at'] ?></td>
                      <td>
                      <a href="../function/f_delete_hasil.php?id_hasil=<?php echo $r['id_hasil']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                    <?php $a = $a +1; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include 'footer.php' ?>