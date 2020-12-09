  <div class="container-fluid auth">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
      <div class="card-body p-0">
       
        <div class="row">
          <div class="col-lg">
            <div class="p-1">
              <div class="text-center">
              	<div class="float-right"><a href="<?= base_url('pnb/baptis'); ?>">
      				  	<button type="button" class="close">
      					  <span aria-hidden="true">&times;</span>
      					  </button></a></div>

                <div class="h5 text-gray-900 mb-3"><li class="fas fa-fw fa-swimmer"></li><?= $title; ?></div>
                <hr class="sidebar-divider bg-secondary">
              </div>


              <form class="user" method="POST" action="">

                <input type="hidden" name="kode" id="kode" value="<?= $kode; ?>">

                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" readonly id="nij" name="nij" placeholder="N.i.j" value="<?= $jemaat['nij']; ?>">
                <?= form_error('nij','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" readonly id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $jemaat['nama']; ?>">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="lahir_di" name="lahir_di" placeholder="Alamat Lahir" value="<?= set_value('lahir_di'); ?>">
                  <?= form_error('lahir_di','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  Tanggal lahir
                    <input type="date" class="form-control form-control-user" readonly id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal lahir" value="<?= $jemaat['tanggal_lahir']; ?>">
                    <?= form_error('tgl_lahir','<small class="text-danger pl-3">', '</small> ' ); ?>                
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="ayah" name="ayah" placeholder="Nama Ayah" value="<?= set_value('ayah'); ?>" >
                  <?= form_error('ayah','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="ibu" name="ibu" placeholder="Nama Ibu" value="<?= set_value('ibu'); ?>">
                  <?= form_error('ibu','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" readonly id="alamat" name="alamat" placeholder="Alamat" value="<?= $jemaat['alamat']; ?>">
                <?= form_error('alamat','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="jemaat" name="jemaat" placeholder="Jemaat" value="<?= set_value('jemaat'); ?>">
                <?= form_error('jemaat','<small class="text-danger pl-3">', '</small> ' ); ?>
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
            </div>
          </div>
        </div>
      </div>
    </div>
</div>