<div class="controller-fluid">
  <div class="row pl-3">

    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3 col-lg-8">
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

    <div class="col-lg-10">
       <h3> <?= $title; ?></h3>
       <hr class="sidebar-divider bg-secondary">
      <form method="POST" action="" enctype="multipart/form-data">
          <!-- <div class="form-group">
          <label>Kode</label>
          <input type="text" class="form-control" name="kode" id="kode" placeholder="kode">
        </div> -->

         <input type="hidden" name="kode" id="kode" value="<?= $kode; ?>">

        <div class="form-group">
          <label>title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?= set_value('title'); ?>">
          <?= form_error('title','<small class="text-danger pl-3">', '</small> ' ); ?>
        </div>

        <div class="form-group">
          <label>Poster</label>
          <input type="text" class="form-control" name="poster" id="poster" placeholder="Poster" value="<?= set_value('poster'); ?>">
          <?= form_error('poster','<small class="text-danger pl-3">', '</small> ' ); ?>
        </div>

        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?= set_value('judul'); ?>">
          <?= form_error('judul','<small class="text-danger pl-3">', '</small> ' ); ?>
        </div>

         <div class="form-group">
          <label>Kategori</label>
            <select class="custom-select-lg form-control" id="kategori" name="kategori" value="<?= set_value('kategori'); ?>">
              <option selected> Pilih Kategori </th></option>
              <option value="berita">Berita</option>
              <option value="renungan">Renungan</option>
              <option value="motivasi">Motivasi</option>
              <option value="oters">Oters</option>
            </select>
        </div>
        
        <div class="form-group">
          <label>Content</label>
          <textarea class="form-control" name="content" id="content" rows="14" placeholder="Ketik teks disini" value="<?= set_value('content'); ?>"></textarea>
          <?= form_error('content','<small class="text-danger pl-3">', '</small> ' ); ?>
        </div>

        <div class="form-group row">
          <div class="col-sm-1">Picture</div>
            <div class="row">
              <div class="col-sm-3">
                <img src="" class="img-thumbnail" style="width: 80px; height: 100px;">
              </div>
              <div class="col-sm-9">
                <div class="custom-file">
                <input type="file" id="gambar" name="gambar">      
              </div>
              </div>
            </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-user btn-block"><li class="fas fa-fw fa-paper-plane"></li>Upload Teks
          </button>
        </div>
      </form>
    </div>
  </div>
</div>