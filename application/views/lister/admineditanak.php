  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <div class="float-right"><a href="<?= base_url('lister/anak'); ?>">
            <button type="button" class="close">
            <span aria-hidden="true">&times;</span>
          </button>
          </a></div>
                <h1 class="h4 text-gray-900 mb-4"><?= $title; ?></h1>
                <hr class="sidebar-divider bg-secondary">
              </div>
              
              <form class="user" action="" method="post">

                <input type="hidden" id="id" name="id" value="<?= $anak['id']; ?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nia" name="nia" placeholder="N.i.a" value="<?= $anak['nia']; ?>">
                <?= form_error('nia','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $anak['nama']; ?>">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= $anak['jenis_kelamin']; ?>">
                    <?= form_error('jenis_kelamin','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div> -->
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="custom-select-lg mb-3 form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>">
                      
                      <option value="Laki-Laki" <?php if($anak['jenis_kelamin'] == 'Laki-Laki') {echo 'selected'; } ?> >Laki-Laki</option>
                      <option value="Perempuan" <?php if($anak['jenis_kelamin'] == 'Perempuan') {echo 'selected'; } ?>>Perempuan</option>
                    </select>
                  </div>

                  <div class="col-sm-6">
                    <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $anak['tanggal_lahir']; ?>">
                    <?= form_error('tanggal_lahir','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?= $anak['pendidikan']; ?>" >
                    <?= form_error('pendidikan','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="anak_ke" name="anak_ke" placeholder="Anak Ke" value="<?= $anak['anak_ke']; ?>">
                    <?= form_error('anak_ke','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nij_ayah" name="nij_ayah" placeholder="Nij" value="<?= $anak['nij_ayah']; ?>">
                <?= form_error('nij_ayah','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nij_ibu" name="nij_ibu" placeholder="Nij" value="<?= $anak['nij_ibu']; ?>">
                <?= form_error('nij_ibu','<small class="text-danger pl-3">', '</small> ' ); ?>
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