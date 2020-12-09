  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                 <hr class="sidebar-divider">
              </div>
              <form class="user" method="post" action="<?= base_url(); ?>auth/register">

                <input type="hidden" name="nij" id="nij" value="<?= $nij; ?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= set_value('jenis_kelamin'); ?>">
                    <?= form_error('jenis_kelamin','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= set_value('tanggal_lahir'); ?>">
                    <?= form_error('tanggal_lahir','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div> -->

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
                <?= form_error('alamat','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="status" name="status" placeholder="Status" value="<?= set_value('status'); ?>" >
                    <?= form_error('status','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="<?= set_value('pekerjaan'); ?>">
                    <?= form_error('pekerjaan','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div> -->

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="facebook" name="facebook" placeholder="Facebook" value="<?= set_value('facebook'); ?>">
                    <?= form_error('facebook','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="Telepon" value="<?= set_value('telepon'); ?>">
                    <?= form_error('telepon','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <?= form_error('email','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url(); ?>auth">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>