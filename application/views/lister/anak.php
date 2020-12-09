<div class="container-fluid mt-3 ml-1">
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

	<div class="row col-lg-6">
		<form action="" method="POST">
			<div class="input-group">
				
			<a href="#" class=" btn btn-light ml-1" onclick="return confirm(`Masuk Ke Menu Jemaat`)"><li class="fas fa-fw fa-plus-circle"></li>Add Data</a>
				
			  <input type="text" class="form-control ml-3" placeholder="Cari Data Anak..!" name="keyword" id="keyword" autofocus>
			  <div class="input-group-append">
			    <button class="btn btn-outline-success" type="submit" id="tombolSearch"><li class="fas fa-fw fa-search"></li></button>
			  </div>
			</div>
		</form>
	</div>

		<!-- pemberian nomor otomatis -->
		<?php $no=1; ?></td>
	<h4 class="card-header text-primary "><?= $title; ?></h4>
    <div class="card-body">
		<div class= "responsive table-responsive">
			<table class="table-bordered table-hover table">
				<tr class="table-active">
					<th rowspan="2">No</th>
					<th rowspan="2">N.I.A</th>
					<th rowspan="2">Nama</th>
					<th rowspan="2">Jenis Kelamin</th>
					<th rowspan="2">Tanggal Lahir</th>
					<th rowspan="2">Anak Ke</th>
					<th rowspan="2">Pendidikan</th>
					<th colspan="2">Nama Orang Tua</th>			  				
					<th rowspan="2">Bergabung</th>
					<th rowspan="2">Action</th>
					<tr class="table-active">
	  				<th>Father</th>
	  				<th>Mother</th>
					</tr>
				</tr>

				<?php foreach( $anak as $an ) : ?>

					<tr>  			
						<td><?= ++$start; ?></td>
						<td><?= $an['nia']; ?></td>
						<td><?= $an['nama']; ?></td>
					<td><?= $an['jenis_kelamin']; ?></td>
					<td><?= $an['tanggal_lahir']; ?></td>
					<td><?= $an['anak_ke']; ?></td>
					<td><?= $an['pendidikan']; ?></td>
					<td><?= $an['nij_ayah']; ?></td>
					<td><?= $an['nij_ibu']; ?></td>
					<td><?= date('d F y', $an['bergabung']); ?></td>

					<td>
					 	<a href="<?= base_url(); ?>lister/admineditanak/<?= $an['id']; ?>" class="badge badge-success mt-1 ml-1 "  data-id="<?= $an['id']; ?>"><li class="fas fa-fw fa-edit"></li>Edit</a>

						<a href="<?=base_url(); ?>lister/deleteanak/<?= $an['id']; ?>" class="badge badge-danger ml-1 mt-1" onclick="return confirm(`yakin`)"><li class="fas fa-fw fa-trash-alt"></li>Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
				
			</table>
			<!-- pencarian... -->
			<?php if( empty($anak) ) : ?> 
			<div class="alert alert-warning" role="alert">
			  Maaf YaK.. Kak, Data Tidak Ditemukan..
			</div>
			<?php endif; ?>												  	
		</div>
		<?= $this->pagination->create_links(); ?>
	</div>	
</div>

