         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


          <div class="row">
          	<div class="col-lg-6">
          		 <?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>'); ?>
          		 <?= $this->session->flashdata('message'); ?>

          		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal"><li class="fas fa-fw fa-plus-circle"></li>Add New Menu</a>


				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Menu</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i = 1; ?>
				  	<?php foreach ($menu as $m) : ?>
				    <tr>
				      <th scope="row"><?= $i; ?></th>
				      <td><?= $m ['menu']; ?></td>
				      <td>
				      	<a href="" class="badge badge-success"><li class="fas fa-fw fa-edit"></li>Edit</a>
				      	<a href="" class="badge badge-danger"><li class="fas fa-fw fa-trash-alt"></li>Delete</a>
				      </td>
				    </tr>

				    <?php $i++; ?>

				<?php endforeach; ?>
				    
				  </tbody>
				</table>
          		
          	</div>
          	
          </div>

      </div>

      
      </div>
      <!-- End of Main Content -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	     <form action="<?= base_url('menu'); ?>" method="post">
	      <div class="modal-body">
	       <div class="form-group">
		    <input type="text" class="form-control" name="menu" id="menu" placeholder="Menu Name">
		 	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><li class="fas fa-fw fa-window-close"></li>Close</button>
	        <button type="submit" class="btn btn-primary"><li class="fas fa-fw fa-paper-plane"></li>Save changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>
    