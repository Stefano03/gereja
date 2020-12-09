         <!-- Begin Page Content -->
        <div class="container-fluid contents">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

       
       <div class="row">
       	<div class="col-lg-6">
       		<?= form_open_multipart('jemaat/edit'); ?>
       		
       		<div class="form-group row">
			    <label for="nij" class="col-sm-2 col-form-label">Nij</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="nij" name="nij" readonly value="<?= $jemaat['nij']; ?>">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="nij" class="col-sm-2 col-form-label">Nama</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" readonly id="nama" name="nama" value="<?= $jemaat['nama']; ?>">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
			    <div class="col-sm-10">
		      	<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>">
                  <option selected> </option>
                  <option value="Laki-Laki" <?php if($jemaat['jenis_kelamin'] == 'Laki-Laki') {echo 'selected'; } ?> >Laki-Laki</option>
                  <option value="Perempuan" <?php if($jemaat['jenis_kelamin'] == 'Perempuan') {echo 'selected'; } ?>>Perempuan</option>
                </select>
                     <?= form_error('jenis_kelamin','<small class="text-danger pl-3">', '</small> ' ); ?>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $jemaat['tanggal_lahir']; ?>">
			      <?= form_error('tanggal_lahir','<small class="text-danger pl-3">', '</small> ' ); ?>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $jemaat['alamat']; ?>">
			      <?= form_error('alamat','<small class="text-danger pl-3">', '</small> ' ); ?>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="status" class="col-sm-2 col-form-label">Status</label>
			    <div class="col-sm-10">
			      <select class="form-control" id="status" name="status" value="<?= set_value('status'); ?>">
                    <option selected> </option>
                    <option value="Belum Menikah" <?php if($jemaat['status'] == 'Belum Menikah') {echo 'selected'; } ?> >Belum Menikah</option>
                  	<option value="Menikah" <?php if($jemaat['status'] == 'Menikah') {echo 'selected'; } ?>>Menikah</option>
                    </select>
			      <?= form_error('status','<small class="text-danger pl-3">', '</small> ' ); ?>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= $jemaat['pekerjaan']; ?>">
			      <?= form_error('pekerjaan','<small class="text-danger pl-3">', '</small> ' ); ?>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $jemaat['facebook']; ?>">
			      <?= form_error('facebook','<small class="text-danger pl-3">', '</small> ' ); ?>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $jemaat['telepon']; ?>">
			      <?= form_error('telepon','<small class="text-danger pl-3">', '</small> ' ); ?>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="email" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="email" name="email" readonly value="<?= $jemaat['email']; ?>">
			    </div>
			  </div>

			  <div class="form-group row">
			    <div class="col-sm-2">Picture</div>
			    <div class="col-sm-10">
			    	<div class="row">
			    		<div class="col-sm-3">
			    			<img src="<?= base_url('asset/img/profile/') . $jemaat['image']; ?>" class="img-thumbnail">
			    		</div>
			    		<div class="col-sm-9">
			    			<div class="custom-file">
							  <input type="file" id="image" name="image">
							  <!-- <input type="file" class="custom-file-input" id="image" name="image">
   								<label class="custom-file-label" for="image">Choose file...</label> -->
							 
							</div>
			    		</div>
			    	</div>
			    </div>
			  </div>

			  <div class="form-group row justify-content-end">
			    <div class="col-sm-10">
			    	<button type="submit" class="btn btn-success" onclick="return confirm(`Anda Yakin Edit `)"><li class="fas fa-fw fa-edit"></li>Simpan</button>
			    </div>
			  </div>
       			
       		</form>
       	

       	</div>
       </div>

      </div>
      <!-- End of Main Content -->

    