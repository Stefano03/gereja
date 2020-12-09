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
					
				<a href="#" class="btn btn-light ml-1" onclick="return confirm(`Tambahkan Melalui P&B/daftar baptis`)">Add Data</a>
					
				  <input type="text" class="form-control ml-3" placeholder="Cari Data Baptis..!" name="keyword" id="keyword" autofocus>
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
				  				<th>Kode</th>
				  				<th>Nij</th>
				  				<th>Nama</th>
				  				<th>Alamat Lahir</th>
				  				<th>Tanggal Lahir</th>
				  				<th>Tanggal Baptis</th>
				  				<th>Nama Ayah</th>
				  				<th>Nama Ibu</th>
				  				<th>Alamat</th>
				  				<th>Jemaat</th>
				  				<th>Pembaptis</th>
				  				<th>Bergabung</th>
				  				<th>Active</th>
				  				<th>Action</th>
				  			</tr>
				  		<?php foreach( $baptis as $bs ) : ?>

			  				<tr>  			
			  					<td><?= ++$start; ?></td>
			  					<td><?= $bs['kode']; ?></td>
			  					<td><?= $bs['nij']; ?></td>
			  					<td><?= $bs['nama']; ?></td>
								<td><?= $bs['lahir_di']; ?></td>
								<td><?= $bs['tgl_lahir']; ?></td>
								<td><?= $bs['tgl_baptis']; ?></td>
								<td><?= $bs['ayah']; ?></td>
								<td><?= $bs['ibu']; ?></td>
								<td><?= $bs['alamat']; ?></td>
								<td><?= $bs['jemaat']; ?></td>
								<td><?= $bs['pembaptis']; ?></td>
								<td><?= date('d F y', $bs['date']); ?></td>
								<td><?= $bs['status']; ?></td>
								
								<td>
								 	<a href="<?= base_url(); ?>lister/editbaptis/<?= $bs['id']; ?>" class="badge badge-success ml-1 ml-1 "  data-id="<?= $bs['id']; ?>"><li class="fas fa-fw fa-edit"></li>Edit</a>

									<a href="<?=base_url(); ?>lister/deletebaptis/<?= $bs['id']; ?>" class="badge badge-danger ml-1 mt-1" onclick="return confirm(`yakin`)"><li class="fas fa-fw fa-trash-alt"></li>Delete</a>
								</td>
							</tr>
						<?php endforeach; ?>
				  			
				  		</table>
							<!-- pencarian... -->
							<?php if( empty($baptis) ) : ?> 
							<div class="alert alert-warning" role="alert">
							  Maaf YaK.. Kak, Data baptis Tidak Ditemukan..
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








	<!-- <script src="<?= base_url(); ?>asset/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 -->
  <!-- Core plugin JavaScript-->
  <!-- <script src="<?= base_url(); ?>asset/vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for all pages-->
 <!--  <script src="<?= base_url(); ?>asset/js/sb-admin-2.min.js"></script>
   <script src="<?= base_url(); ?>asset/js/script.js"></script>
 -->
