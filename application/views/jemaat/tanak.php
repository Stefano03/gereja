<div class="container-fluid contents">

  <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg">
          <!-- <div class="p-5"> -->
            <div class="text-center">
            	<div class="float-right"><a href="<?= base_url('jemaat/anaksm'); ?>">
      			  	<button type="button" class="close">
      				  <span aria-hidden="true">&times;</span>
      				  </button>
      			   </a>
             </div>
              <div class="h5 text-gray-900 mb-4"><?= $title; ?></div>
              <hr class="sidebar-divider bg-secondary">
            </div>
            <form class="user" method="post">

              <input type="hidden"  id="nia" name="nia"value="<?= $nia; ?>">
             
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
              <?= form_error('nama','<small class="text-danger pl-3">', '</small> ' ); ?>
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <select class="custom-select-lg form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>">
                    <option selected> Pilih Jenis Kelamin </th></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                   <?= form_error('jenis_kelamin','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="col-sm-6">
                  <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= set_value('tanggal_lahir'); ?>">
                  <?= form_error('tanggal_lahir','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?= set_value('pendidikan'); ?>" >
                  <?= form_error('pendidikan','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="anak_ke" name="anak_ke" placeholder="Anak Ke" value="<?= set_value('anak_ke'); ?>">
                  <?= form_error('anak_ke','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nij_ayah" name="nij_ayah" placeholder="Nij Ayah" value="<?= $jemaat['nij']; ?>">
              <?= form_error('nij_ayah','<small class="text-danger pl-3">', '</small> ' ); ?>
              </div>

              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nij_ibu" name="nij_ibu" placeholder="Nij Ibu" value="<?= $jemaat['nij']; ?>">
              <?= form_error('nij_ibu','<small class="text-danger pl-3">', '</small> ' ); ?>
              </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <button type="reset" class="btn btn-light btn-user btn-block"><li class="fas fa-fw fa-eraser"></li>
                    Clear
                    </button>
                  </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                   <button type="submit" class="btn btn-primary btn-user btn-block"><li class="fas fa-fw fa-paper-plane"></li>
                   Submit
                  </button>
                </div>
              </div>
            </form>
            <hr>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
</div>