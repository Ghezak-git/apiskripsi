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
                      <th>Username</th>
                      <th>Nama Lengkap</th>
                      <th>Jenis Kelamin</th>
                      <th>No Telpon</th>
                      <th>Umur</th>
                      <th>Tahun Lahir</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  	 <?php 
                    	  include '../function/koneksi.php'; 
	                      $q = "select * from tbl_user";
	                      $ex = mysqli_query($koneksi,$q);
	                      $a = 1;
	                      while ($r = mysqli_fetch_array($ex)) {
                     ?>
                    <tr>
                      <td><?php echo $a; ?></td>
                      <td><?php echo $r['username'] ?></td>
                      <td><?php echo $r['nama_lengkap'] ?></td>
                      <td><?php echo $r['jenis_kelamin'] ?></td>
                      <td><?php echo $r['no_telp'] ?></td>
                      <td><?php echo $r['umur'] ?></td>
                      <td><?php echo $r['tahun_lahir'] ?></td>
                      <td>
                      <a href="../function/f_delete_user.php?id_user=<?php echo $r['id_user']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
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