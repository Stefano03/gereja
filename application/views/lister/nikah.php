<div class="container-fluid">
	<?php if( $this->session->flashdata('flash') ) : ?>
		<div class="row mt-3">
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

		<div class= " row col-lg-5">
			<center><h3><?= $title; ?></h3></center>
		
			<form action="" method="POST">
				<div class="input-group mb-2">
					
				<a href="#" class=" btn btn-light ml-1" onclick="return confirm(`Masuk Ke Menu Jemaat`)">Add Data</a>
					
				  <input type="text" class="form-control ml-3" placeholder="Cari Data Pernikahan..!" name="keyword" id="keyword" autofocus>
				  <div class="input-group-append">
				    <button class="btn btn-outline-success" type="submit" id="tombolSearch"><li class="fas fa-fw fa-search"></li></button>
				  </div>
				</div>
			</form>
		</div>
	

		<!-- pemberian nomor otomatis -->
		<?php $no=1; ?></td>

	<div class= "responsive table-responsive">
		<table class="table-bordered table-hover table">
			<tr class="table-active">
				<th rowspan="2">No</th>
				<th rowspan="2">Kode</th>
				<th colspan="2">Nama</th>
				<th rowspan="2">Terdaftar</th>
				<th rowspan="2">Status</th>
				<th rowspan="2">Action</th>

				<tr class="table-active">
					<th>Pria</th>
					<th>Wanita</th>
				</tr>
			</tr>

			<?php foreach( $nikah as $nk ) : ?>

				<tr>  			
				<td><?= ++$start; ?></td>
				<td><?= $nk['kode']; ?></td>
				<td><?= $nk['nij_laki']; ?></td>
				<td><?= $nk['nij_wanita']; ?></td>
				<td><?= date('d F y', $nk['date']); ?></td>
				<td><?= $nk['status']; ?></td>

				<td>
					<a href="<?= base_url(); ?>pnb/detail/<?= $nk['id']; ?>" class="badge badge-warning ml-1 ml-1 "  data-id="<?= $nk['id']; ?>"><li class="fas fa-fw fa-info-circle"></li>Detail</a>
					
				 	<a href="<?= base_url(); ?>lister/editnikah/<?= $nk['id']; ?>" class="badge badge-success mt-1 ml-1 "  data-id="<?= $nk['id']; ?>"><li class="fas fa-fw fa-edit"></li>Edit</a>

					<a href="<?=base_url(); ?>lister/deletenikah/<?= $nk['id']; ?>" class="badge badge-danger ml-1 mt-1" onclick="return confirm(`yakin`)"><li class="fas fa-fw fa-trash-alt"></li>Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
			
		</table>
		<!-- pencarian... -->
		<?php if( empty($nikah) ) : ?> 
		<div class="alert alert-warning" role="alert">
		  Maaf YaK.. Kak, Data Tidak Ditemukan..
		</div>
		<?php endif; ?>												  	
	</div>
		<?= $this->pagination->create_links(); ?>	
</div>

