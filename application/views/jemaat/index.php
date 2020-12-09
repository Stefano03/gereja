         <!-- Begin Page Content -->
        <div class="container-fluid auth">
         
          <div class="row mt-3">
            <div class="col-md-6">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

          <!-- Page Heading -->
  <div class="row">

      <div class="card">
        <div class="card-header text-primary contents">
          <center><h5><?= $title; ?> </h5>
            <hr class="sidebar-divider bg-secondary">
          <div class="card" style="width: 12rem; max-width: 100%; height: auto;">
          
              <img src="<?= base_url('asset/img/profile/') . $jemaat['image']; ?>" class="card-img">
           
          </div>
       
        </center>
        
        </div>
        <div class="card-body responsive">
          <table class="table table-borderless table-responsive text-dark">
            <tbody>

              <tr>
                <td>Nij</td>
                <th><?= $jemaat['nij']; ?></th>
              </tr>

              <tr>
                <td>Nama</td>
                <th><?= $jemaat['nama']; ?></th>
              </tr>

              <tr>
                <td>Jenis Kelamin</td>
                <th><?= $jemaat['jenis_kelamin']; ?></th>
              </tr>

              <tr>
                <td>Tanggal Lahir</td>
                <th><?= $jemaat['tanggal_lahir']; ?></th>
              </tr>

              <tr>
                <td>Alamat</td>
                <th><?= $jemaat['alamat']; ?></th>
              </tr>

              <tr>
                <td>Status</td>
                <th><?= $jemaat['status']; ?></th>
                </tr>

              <tr>
                <br>
                <td>Pekerjaan</td>
                <th><?= $jemaat['pekerjaan']; ?></th>
              </tr>

              <tr>
                <td>Nama Facebook</td>
                <th><?= $jemaat['facebook']; ?></th>
              </tr>

              <tr>
                <td> No Telepon</td>
                <th><?= $jemaat['telepon']; ?></th>
              </tr>

              <tr>
                <td>Email</td>
                <th><?= $jemaat['email']; ?></th>
              </tr>

              
              <tr>
                <td colspan="2"><br><p align="center"><small class="text-muted">Jemaat since <?= date('d F y', $jemaat['bergabung']); ?></small></p></td>
              </tr>

          </tbody>
        </table>
        </div>
      </div>
    </div>
 
</div>
     

    