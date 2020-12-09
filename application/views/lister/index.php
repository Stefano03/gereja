<div class="container-fluid mt-5">
	<?php if( $this->session->flashdata('flash') ) : ?>
		<div class="row mt3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				 <?= $this->session->flashdata('flash'); ?> .
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row">
		<div class= "col-lg-5">
			<h3><?= $title; ?></h3>
		
			<form action="" method="POST">
				<div class="input-group mb-2">
					
				<a href="#" class="btn btn-light ml-1" onclick="return confirm(`Logout dan Tambahkan Melalui registration`)">Add Data</a>
					
				  <input type="text" class="form-control ml-3" placeholder="Cari Data Jemaat..!" name="keyword" id="keyword" autofocus>
				  <div class="input-group-append">
				    <button class="btn btn-outline-success" type="submit" id="tombolCari"><li class="fas fa-fw fa-search"></li></button>
				  </div>
				</div>
			</form>
		</div>
	</div>

		<!-- pemberian nomor otomatis -->
		<?php $no=1; ?></td>

	<div class="row">
		<div class= "responsive table-responsive">
			<ul class="list-group">	
			  	<li class="list-group-item">
			  		<div class="table-responsive">
				  		<table class="table-bordered table-hover ">
				  			<tr class="table-active">
				  				<th>No</th>
				  				<th>NIJ</th>
				  				<th>Gambar</th>
				  				<th>Nama</th>
				  				<th>Jenis Kelamin</th>
				  				<th>Tanggal Lahir</th>
				  				<th>Alamat</th>
				  				<th>Status</th>
				  				<th>Pekerjaan</th>
				  				<th>Facebook</th>
				  				<th>Telepon</th>
				  				<th>Email</th>
				  				<th>Bergbung</th>
				  				<th>Active</th>
				  				<th>Action</th>
				  			</tr>
				  		<?php foreach( $jemaat as $jmt ) : ?>

				  				<tr>  			
				  					<td><?= ++$start; ?></td>
				  					<td><?= $jmt['nij']; ?></td>
				  					<td>
						              <img src="<?= base_url('asset/img/profile/') . $jmt['image']; ?>" style="width: 5rem;">
						      		</td>
						            <!-- <td><?= $jmt['image']; ?></td> -->
				  					<td><?= $jmt['nama']; ?></td>
									<td><?= $jmt['jenis_kelamin']; ?></td>
									<td><?= $jmt['tanggal_lahir']; ?></td>
									<td><?= $jmt['alamat']; ?></td>
									<td><?= $jmt['status']; ?></td>
									<td><?= $jmt['pekerjaan']; ?></td>
									<td><?= $jmt['facebook']; ?></td>
									<td><?= $jmt['telepon']; ?></td>
									<td><?= $jmt['email']; ?></td>
									<td><?= date('d F y', $jmt['bergabung']); ?></td>
									<td><?= $jmt['is_active']; ?></td>
									
									<td>
									 	<a href="<?= base_url(); ?>lister/editjemaat/<?= $jmt['id']; ?>" class="badge badge-success ml-1 ml-1 "  data-id="<?= $jmt['id']; ?>"><li class="fas fa-fw fa-edit"></li>Edit</a>

										<a href="<?=base_url(); ?>lister/deletejemaat/<?= $jmt['id']; ?>" class="badge badge-danger ml-1 mt-1" onclick="return confirm(`yakin`)"><li class="fas fa-fw fa-trash-alt"></li>Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
				  			
				  		</table>
							<!-- pencarian... -->
							<?php if( empty($jemaat) ) : ?> 
							<div class="alert alert-warning" role="alert">
							  Maaf YaK.. Kak, Data Jemaat Tidak Ditemukan..
							</div>
							<?php endif; ?>
							<br>
							<?= $this->pagination->create_links(); ?>
			  		</div>			  		
			  	</li>			  	
			</ul>
		</div>
	</div>
</div>








	<script src="<?= base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>asset/js/sb-admin-2.min.js"></script>
   <script src="<?= base_url(); ?>asset/js/script.js"></script>

