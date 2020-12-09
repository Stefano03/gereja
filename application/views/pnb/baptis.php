<div class="contents">
  <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
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

    <div class= " row col-lg-5">
      <form action="" method="POST">
        <div class="input-group ">   
          <input type="text" class="form-control ml-3" placeholder="Cari Data Baptis" name="keyword" id="keyword" autofocus>
          <div class="input-group-append mb-4">
            <button class="btn btn-outline-success" type="submit" id="tombolSearch"><li class="fas fa-fw fa-search"></li></button>
          </div>
        </div>
      </form>
    </div>

<?php $no=1; ?></td>

  <div class= "responsive table-responsive alert" role="alert">
    <table class="table-bordered table-hover table">
    <h4 class="col-lg-3 mt-2"><?= $title; ?></h4>
    <div class="card-body">
      <div class="responsive table-responsive">
        <table class="table table-borderless text-dark">
          <tr class="table-active bg-light">
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
          </tr>

          <?php foreach( $baptis as $bs ) : ?>
            
            <tr>        
              <td><?= $no++; ?></td>
              <th><?= $bs['nama']; ?></th>

              <td>
                <a href="<?= base_url(); ?>pnb/detailbs/<?= $bs['id']; ?>" class="badge badge-warning ml-1 ml-1 "  data-id="<?= $bs['id']; ?>"><li class="fas fa-fw fa-low-vision"></li>Detail</a>
              </td>
          </tr>

        <?php endforeach; ?>
          
        </table>
    <!-- pencarian... -->
       <?php if( empty($baptis) ) : ?> 
        <div class="alert alert-warning" role="alert">
          Maaf YaK.. Kak, Data Tidak Ditemukan..
        </div>
        <?php endif; ?>
        <br>
        <!-- <?= $this->pagination->create_links(); ?> -->            
      </div>

     
    </div>
  </div>