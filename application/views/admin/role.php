         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


          <div class="row">
          	<div class="col-lg-6">
          		 <?= form_error('role', '<div class="alert alert-danger" role="alert">','</div>'); ?>
          		 <?= $this->session->flashdata('message'); ?>

          		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal"><li class="fas fa-fw fa-plus-circle"></li>Add New Role</a>


				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Role</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i = 1; ?>
				  	<?php foreach ($role as $r) : ?>
				    <tr>
				      <th scope="row"><?= $i; ?></th>
				      <td><?= $r ['role']; ?></td>
				      <td>
				      	<a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning"><li class="fas fa-fw fa-user-check"></li>access</a>
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
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	     <form action="<?= base_url('role'); ?>" method="post">
	      <div class="modal-body">
	       <div class="form-group">
		    <input type="text" class="form-control" name="role" id="role" placeholder="Role Name">
		 	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
      </form>
    </div>
  </div>
</div>
    