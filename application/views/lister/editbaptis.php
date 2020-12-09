  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-10 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <div class="float-right"><a href="<?= base_url('lister/baptis'); ?>">
                  <button type="button" class="close">
                  <span aria-hidden="true">&times;</span>
                  </button></a></div>

                <h1 class="h4 text-gray-900 mb-4"><li class="fas fa-fw fa-ring"></li><?= $title; ?></h1>
                <hr class="sidebar-divider bg-secondary">
              </div>


              <form class="user" method="POST" action="">

                 <input type="hidden" name="id" id="id" value="<?= $baptis['id']; ?>">
                <input type="hidden" name="kode" id="kode" value="<?= $baptis['kode']; ?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nij" name="nij" placeholder="Nij" value="<?= $baptis['nij']; ?>">
                <?= form_error('nij','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $baptis['nama']; ?>">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="lahir_di" name="lahir_di" placeholder="Alamat Lahir" value="<?= $baptis['lahir_di']; ?>">
                  <?= form_error('lahir_di','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal lahir" value="<?= $baptis['tgl_lahir']; ?>">
                    <?= form_error('tgl_lahir','<small class="text-danger pl-3">', '</small> ' ); ?>
                  </div>    

                  <div class="col-sm-6">
                     <input type="date" class="form-control form-control-user" id="tgl_baptis" name="tgl_baptis" placeholder="Tanggal lahir" value="<?= $baptis['tgl_baptis']; ?>">
                    <?= form_error('tgl_baptis','<small class="text-danger pl-3">', '</small> ' ); ?>    
                  </div>           
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="ayah" name="ayah" placeholder="Nama Ayah" value="<?= $baptis['ayah']; ?>" >
                  <?= form_error('ayah','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="ibu" name="ibu" placeholder="Nama Ibu" value="<?= $baptis['ibu']; ?>">
                  <?= form_error('ibu','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= $baptis['alamat']; ?>">
                <?= form_error('alamat','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="jemaat" name="jemaat" placeholder="Jemaat" value="<?= $baptis['jemaat']; ?>">
                <?= form_error('jemaat','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="pembaptis" name="pembaptis" placeholder="Nama Pembaptis" value="<?= $baptis['pembaptis']; ?>">
                  <?= form_error('pembaptis','<small class="text-danger pl-3">', '</small> ' ); ?>
                </div>

                <div class="form-group">
                  <select class="custom-select-lg mb-3 form-control" id="status" name="status" value="<?= set_value('status'); ?>">
                      
                      <option value="0" <?php if($baptis['status'] == '0') {echo 'selected'; } ?> >Non Active</option>
                      <option value="1" <?php if($baptis['status'] == '1') {echo 'selected'; } ?>>Active</option>
                    </select>
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