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
                <td><?= $nikah['kode']; ?></td>
              </tr>

              <tr>
                <td>Nama</td>
                <td><?= $nikah['nij_laki']; ?></td>
              </tr>

              <tr>
                <td>Alamat Lahir</td>
                <td><?= $nikah['laki_lahir_di']; ?></td>
              </tr>

              <tr>
                <td>Tanggal Lahir</td>
                <td><?= $nikah['tanggal_lahir_laki']; ?></td>
              </tr>

              <tr>
                <td>Nama Ayah</td>
                <td><?= $nikah['ayah_laki']; ?></td>
              </tr>

              <tr>
                <td>Nama Ibu</td>
                <td><?= $nikah['ibu_laki']; ?></td>
                </tr>
              <tr>
                <th colspan="2"><br><p align="center">Telah Melangsungkan Perkawinan Secara Kristen Protestan Dengan:</p></th>
              </tr>

              <tr>
                <br>
                <td>Nama</td>
                <td><?= $nikah['nij_wanita']; ?></td>
              </tr>

              <tr>
                <td>Alamat Lahir</td>
                <td><?= $nikah['wanita_lahir_di']; ?></td>
              </tr>

              <tr>
                <td> Tanggal Lahir</td>
                <td><?= $nikah['tanggal_lahir_wanita']; ?></td>
              </tr>

              <tr>
                <td>Nama Ayah</td>
                <td><?= $nikah['ayah_wanita']; ?></td>
              </tr>

              <tr>
                <td>Nama Ibu</td>
                <td><?= $nikah['ibu_wanita']; ?></td>
              </tr>

              <tr>
                <td>Dihadapan</td>
                <td><?= $nikah['dihadapan']; ?></td>
              </tr>

              <tr>
                <td>Di Beri Kebebaan Atas Halangan</td>
                <td><?= $nikah['dbkah']; ?></td>
              </tr>

              <tr>
              <td>Saksi 1</td>
                <td><?= $nikah['saksi1']; ?></td>
              </tr>

              <tr>
                <td>Saksi 2</td>
                <td><?= $nikah['saksi2']; ?></td>
              </tr>

              <tr>
                <td>Taggal Menikah</td>
                <td><?= $nikah['tanggal_nikah']; ?></td>
              </tr>

              <tr>
                <td>Yang Menyalin</td>
                <td><?= $nikah['yang_menyalin']; ?></td>
              </tr>

          </tbody>
  </tbody>
        </table>
          <a href="<?= base_url('pnb'); ?>" class="btn btn-light" title="Kembali"><li class="fas fa-fw fa-undo"></li>Back</a>
        </div>
      </div>

    </div>
  </div>
</div>