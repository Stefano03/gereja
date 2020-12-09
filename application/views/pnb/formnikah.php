  <div class="container-fluid auth">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-1">
              <div class="text-center">
              	<div class="float-right"><a href="<?= base_url('pnb'); ?>">
      				  	<button type="button" class="close">
      					  <span aria-hidden="true">&times;</span>
      					  </button></a></div>

                <div class="h5 text-gray-900 mb-4"><li class="fas fa-fw fa-ring"></li><?= $title; ?></div>
                <hr class="sidebar-divider bg-secondary">
              </div>


              <form class="user" method="POST" action="">

                <div class="form-group text-gray-900">
                  <li class="fas fa-fw fa-male"></li>Isi Data Diri Laki Laki
                </div>
                <input type="hidden" name="kode" id="kode" value="<?= $kode; ?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nij_laki" name="nij_laki" placeholder="Nij" value="<?= $jemaat['nij']; ?>">
                <?= form_error('nij_laki','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="laki_lahir_di" name="laki_lahir_di" placeholder="Alamat Lahir" value="<?= set_value('laki_lahir_di'); ?>">
                    <?= form_error('laki_lahir_di','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="date" class="form-control form-control-user" id="tanggal_lahir_laki" name="tanggal_lahir_laki" placeholder="Tanggal Lahir" value="<?= $jemaat['tanggal_lahir']; ?>">
                    <?= form_error('tanggal_lahir_laki','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="ayah_laki" name="ayah_laki" placeholder="Nama Ayah" value="<?= set_value('ayah_laki'); ?>" >
                    <?= form_error('ayah_laki','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="ibu_laki" name="ibu_laki" placeholder="Nama Ibu" value="<?= set_value('ibu_laki'); ?>">
                    <?= form_error('ibu_laki','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="saksi1" name="saksi1" placeholder="Nama Lengkap Saksi" value="<?= set_value('saksi1'); ?>">
                <?= form_error('saksi1','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

              <hr class="sidebar-divider bg-secondary">


                <div class="form-group text-gray-900">
                  <li class="fas fa-fw fa-female"></li>Isi Data Diri Perempuan
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nij_wanita" name="nij_wanita" placeholder="Nij" value="<?= $jemaat['nij']; ?>">
                <?= form_error('nij_wanita','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="wanita_lahir_di" name="wanita_lahir_di" placeholder="Alamat Lahir" value="<?= set_value('wanita_lahir_di'); ?>">
                    <?= form_error('wanita_lahir_di','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                   <div class="col-sm-6">
                    <input type="date" class="form-control form-control-user" id="tanggal_lahir_wanita" name="tanggal_lahir_wanita" placeholder="Tanggal Lahir" value="<?= $jemaat['tanggal_lahir']; ?>">
                    <?= form_error('tanggal_lahir_wanita','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="ayah_wanita" name="ayah_wanita" placeholder="Nama Ayah" value="<?= set_value('ayah_wanita'); ?>" >
                    <?= form_error('ayah_wanita','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="ibu_wanita" name="ibu_wanita" placeholder="Nama Ibu" value="<?= set_value('ibu_wanita'); ?>">
                    <?= form_error('ibu_wanita','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="saksi2" name="saksi2" placeholder="Nama Lengkap Saksi" value="<?= set_value('saksi2'); ?>">
                <?= form_error('saksi2','<small class="text-danger pl-3">', '</small> ' ); ?>
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

<script type="text/javascript">
        $(document).ready(function(){
            $( "#nama_laki" ).autocomplete({
              source: "<?= base_url('pnb/getautocomplete/?');?>"
            });
        });
</script>