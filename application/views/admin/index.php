<!-- Begin Page Content -->
<div class="container-fluid contents">

<!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="card bg-primary text-white shadow">
        <div class="card-body">
          Jemaat Pending
          <div class="text-white-50 small"><li class="fas fa-fw fa-users"> </li> <?= $count; ?></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card bg-success text-white shadow">
        <div class="card-body">
          Baptis Pending
          <div class="text-white-50 small"><li class="fas fa-fw fa-swimmer"> </li> <?= $countb; ?></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card bg-info text-white shadow">
        <div class="card-body">
          Pernikahan Pending
          <div class="text-white-50 small"><li class="fas fa-fw fa-ring"> </li> <?= $countn; ?></div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 mb-4">
      <div class="card bg-warning text-white shadow">
        <div class="card-body">
         Total Jemaat
          <div class="text-white-50 small"><li class="fas fa-fw fa-users"> </li> <?= $countAllJ; ?></div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- End of Main Content -->

    