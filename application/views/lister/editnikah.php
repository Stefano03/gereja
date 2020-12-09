  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
              	<div class="float-right"><a href="<?= base_url('lister/nikah'); ?>">
      				  	<button type="button" class="close">
      					  <span aria-hidden="true">&times;</span>
      					  </button></a></div>

                <h1 class="h4 text-gray-900 mb-4"><li class="fas fa-fw fa-ring"></li><?= $title; ?></h1>
                <hr class="sidebar-divider bg-secondary">
              </div>


              <form class="user" method="POST" action="">

                <div class="form-group text-gray-900">
                  <li class="fas fa-fw fa-male"></li>Isi Data Diri Laki Laki
                </div>

                 <input type="hidden" name="id" id="id" value="<?= $nikah['id']; ?>">
                 <input type="hidden" name="kode" id="kode" value="<?= $nikah['kode']; ?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nij_laki" name="nij_laki" placeholder="Nij" value="<?= $nikah['nij_laki']; ?>">
                <?= form_error('nij_laki','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="laki_lahir_di" name="laki_lahir_di" placeholder="Alamat Lahir" value="<?= $nikah['laki_lahir_di']; ?>">
                    <?= form_error('laki_lahir_di','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="tanggal_lahir_laki" name="tanggal_lahir_laki" placeholder="Tanggal Lahir" value="<?= $nikah['tanggal_lahir_laki']; ?>">
                    <?= form_error('tanggal_lahir_laki','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="ayah_laki" name="ayah_laki" placeholder="Nama Ayah" value="<?= $nikah['ayah_laki']; ?>" >
                    <?= form_error('ayah_laki','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="ibu_laki" name="ibu_laki" placeholder="Nama Ibu" value="<?= $nikah['ibu_laki']; ?>">
                    <?= form_error('ibu_laki','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="saksi1" name="saksi1" placeholder="Nama Lengkap Saksi" value="<?= $nikah['saksi1']; ?>">
                <?= form_error('saksi1','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <hr class="sidebar-divider bg-secondary">


                <div class="form-group text-gray-900">
                  <li class="fas fa-fw fa-female"></li>Isi Data Diri Perempuan
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nij_wanita" name="nij_wanita" placeholder="Nij" value="<?= $nikah['nij_wanita']; ?>">
                <?= form_error('nij_wanita','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="wanita_lahir_di" name="wanita_lahir_di" placeholder="Alamat Lahir" value="<?= $nikah['wanita_lahir_di']; ?>">
                    <?= form_error('wanita_lahir_di','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="tanggal_lahir_wanita" name="tanggal_lahir_wanita" placeholder="Tanggal Lahir" value="<?= $nikah['tanggal_lahir_wanita']; ?>">
                    <?= form_error('tanggal_lahir_wanita','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="ayah_wanita" name="ayah_wanita" placeholder="Nama Ayah" value="<?= $nikah['ayah_wanita']; ?>" >
                    <?= form_error('ayah_wanita','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="ibu_wanita" name="ibu_wanita" placeholder="Nama Ibu" value="<?= $nikah['ibu_wanita']; ?>">
                    <?= form_error('ibu_wanita','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>
                </div>

                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="dihadapan" name="dihadapan" placeholder="Dihadapan" value="<?= $nikah['dihadapan']; ?>">
                <?= form_error('dihadapan','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="dbkah" name="dbkah" placeholder="Diberi Kebebasan Atas" value="<?= $nikah['dbkah']; ?>">
                <?= form_error('dbkah','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="saksi2" name="saksi2" placeholder="Nama Lengkap Saksi" value="<?= $nikah['saksi2']; ?>">
                <?= form_error('saksi2','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="yang_menyalin" name="yang_menyalin" placeholder="Yang Menyalin" value="<?= $nikah['yang_menyalin']; ?>">
                <?= form_error('yang_menyalin','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" id="tanggal_nikah" name="tanggal_nikah" placeholder="Tanggal Nikah" value="<?= $nikah['tanggal_nikah']; ?>" >
                    <?= form_error('tanggal_nikah','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>

                  <!-- <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="status" name="status" placeholder="Status Active" value="<?= $nikah['status']; ?>">
                    <?= form_error('status','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div> -->

                   <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="custom-select-lg mb-3 form-control" id="status" name="status" value="<?= set_value('status'); ?>">
                      
                      <option value="0" <?php if($nikah['status'] == '0') {echo 'selected'; } ?> >Non Active</option>
                      <option value="1" <?php if($nikah['status'] == '1') {echo 'selected'; } ?>>Active</option>
                    </select>
                  </div>
                </div>
             
                 <button type="submit" class="btn btn-primary btn-user btn-block"><li class="fas fa-fw fa-paper-plane"></li>
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