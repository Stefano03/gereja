<div class="container-fluid contents">
  <div class="row mt-2">
    <div class="col-md-5">

      <div class="card">
        <div class="card-header text-primary">
          <center><h5><?= $title; ?> </h5></center>
        </div>

        <div class="card-body">
          <table class="table table-borderless text-dark">
            <tbody>
              <tr>
                <td>Kode</td>
                <td><?= $baptis['kode']; ?></td>
              </tr>

              <tr>
                <td>Nij</td>
                <td><?= $baptis['nij']; ?></td>
              </tr>

              <tr>
                <td>Nama</td>
                <td><?= $baptis['nama']; ?></td>
              </tr>

              <tr>
                <td>Alamat Lahir</td>
                <td><?= $baptis['lahir_di']; ?></td>
              </tr>

              <tr>
                <td>Tanggal Lahir</td>
                <td><?= $baptis['tgl_lahir']; ?></td>
              </tr>

              <tr>
                <td>Tanggal Baptis</td>
                <td><?= $baptis['tgl_baptis']; ?></td>
              </tr>

              <tr>
                <td>Nama Ayah</td>
                <td><?= $baptis['ayah']; ?></td>
              </tr>

              <tr>
                <td>Nama Ibu</td>
                <td><?= $baptis['ibu']; ?></td>
                </tr>

              <tr>
                <td>Alamat</td>
                <td><?= $baptis['alamat']; ?></td>
              </tr>

              <tr>
                <td>Jemaat</td>
                <td><?= $baptis['jemaat']; ?></td>
              </tr>

              <tr>
                <td>Pembaptis</td>
                <td><?= $baptis['pembaptis']; ?></td>
              </tr>
          </tbody>
        </table>
          <a href="<?= base_url('pnb/baptis'); ?>" class="btn btn-light" title="Kembali"><li class="fas fa-fw fa-undo"></li>Back</a>
        </div>
      </div>

    </div>
  </div>
</div>