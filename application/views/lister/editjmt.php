  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
              	<div class="float-right"><a href="<?= base_url('lister'); ?>">
				  	<button type="button" class="close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </a></div>
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                <hr class="sidebar-divider bg-secondary">
              </div>
              
              <form class="user" action="" method="post">

                <input type="hidden" id="id" name="id" value="<?= $jemaat['id']; ?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" readonly id="nij" name="nij" placeholder="N.i.j" value="<?= $jemaat['nij']; ?>">
                <?= form_error('nij','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $jemaat['nama']; ?>">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= $jemaat['jenis_kelamin']; ?>">
                    <?= form_error('jenis_kelamin','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $jemaat['tanggal_lahir']; ?>">
                    <?= form_error('tanggal_lahir','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="<?= $jemaat['pekerjaan']; ?>" >
                    <?= form_error('pekerjaan','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="status" name="status" placeholder="Status" value="<?= $jemaat['status']; ?>">
                    <?= form_error('status','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>	
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= $jemaat['alamat']; ?>">
                <?= form_error('alamat','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="facebook" name="facebook" placeholder="Facebook" value="<?= $jemaat['facebook']; ?>">
                <?= form_error('facebook','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="No Telepon" value="<?= $jemaat['telepon']; ?>" >
                    <?= form_error('telepon','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="custom-select-lg form-control" id="is_active" name="is_active" value="<?= set_value('is_active'); ?>">
                      <option value="1" <?php if($jemaat['is_active'] == '1') {echo 'selected'; } ?> >Active</option>
                      <option value="0" <?php if($jemaat['is_active'] == '0') {echo 'selected'; } ?>>Non Active</option>
                    </select>
                     <?= form_error('is_active','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                 Submit
                </button>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>