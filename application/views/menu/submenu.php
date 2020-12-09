         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


          <div class="row">
          	<div class="col-lg">
          		<?php if (validation_errors()) : ?>
          		<div class="alert alert-danger" role="alert">
          			<?= validation_errors(); ?>
          		</div>
          	<?php endif; ?>
          		 <?= $this->session->flashdata('message'); ?>

          		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newsubMenuModal"><li class="fas fa-fw fa-plus-circle"></li>Add SubMenu</a>


				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Title</th>
				      <th scope="col">Menu</th>
				      <th scope="col">Url</th>
				      <th scope="col">icon</th>
				      <th scope="col">Active</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i = 1; ?>
				  	<?php foreach ($subMenu as $sm) : ?>
				    <tr>
				      <th scope="row"><?= $i; ?></th>
				      <td><?= $sm ['title']; ?></td>
				      <td><?= $sm ['menu']; ?></td>
				      <td><?= $sm ['url']; ?></td>
				      <td><?= $sm ['icon']; ?></td>
				      <td><?= $sm ['is_active']; ?></td>
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
<div class="modal fade" id="newsubMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New SubMenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	     <form action="<?= base_url('menu/submenu'); ?>" method="post">
	      <div class="modal-body">
	       <div class="form-group">
		    <input type="text" class="form-control" name="title" id="title" placeholder="Sub Menu Title">
		 	</div>

		 	<div class="form-group">
		    <select class="form-control" name="menu_id" id="menu_id">
		    	<option value="">Select Menu</option>
		    	<?php foreach ($menu as $m) : ?>
		    	<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
		    <?php endforeach; ?>
		    </select>
		 	</div>

		 	<div class="form-group">
		    <input type="text" class="form-control" name="url" id="url" placeholder="Sub Menu Url">
		 	</div>

		 	<div class="form-group">
		    <input type="text" class="form-control" name="icon" id="icon" placeholder="Sub Menu Icon">
		 	</div>

		 	<div class="form-group">
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
				  <label class="form-check-label" for="is_active">Active</label>
				</div>
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
    