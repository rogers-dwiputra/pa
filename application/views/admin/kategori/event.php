<div class="row">
	<div class="span7">
	<h4>Manage Kategori Event</h4>
	</div>
	<div class="span2">
		<a href="#modal-tambah" data-toggle="modal" class="btn btn-primary pull-right">Tambah Kategori</a>
	</div>
</div>
<div class="row">
	<div class="span9">
		<hr>
		<table class="table table-hover">
			<thead>
			<tr>
				<th>No.</th>
				<th>Kategori Event</th>
				<th>Keterangan</th>
				<th colspan="3">Actions</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			foreach ($kategori as $key) 
			{
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $key['kategori_event']; ?></td>
				<td><?php echo $key['keterangan']; ?></td>
				<td>
					<a data-toggle="modal" data-target="#modal-view" href="<?php echo site_url('admin/kategori_event/view/'.$key['id_kategori_event']); ?>" class="btn btn-info">View</a></td>
				<td><a href="#" class="btn btn-warning">Edit</a></td>
				<td><a href="#" class="btn btn-danger">Delete</a></td>
			</tr>
			<?php
			$no++;
			}
			?>
			</tbody>
		</table>
	</div>
</div>

<!-- Modal Tambah Kategori -->
<div id="modal-tambah" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Tambah Kategori</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" method="POST" action="<?php echo site_url('admin/kategori_event/insert'); ?>">
    		<div class="control-group">
		    <label class="control-label" for="kategori_event">Kategori Event</label>
		    <div class="controls">
		      <input type="text" name="kategori_event" id="kategori_event"/>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="keterangan">Keterangan</label>
		    <div class="controls">
		      <textarea name="keterangan" id="keterangan"></textarea>
		    </div>
		  	</div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" type="submit">Submit</button>
    <a href="#" class="btn" data-dismiss="modal">Cancel</a>
    </form>
  </div>
</div>
<!-- END Modal Tambah Kategori -->
<!-- Modal View Kategori -->
<div id="modal-view" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>View</h3>
  </div>
  <div class="modal-body">
    
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Cancel</a>
  </div>
</div>
<!-- END Modal View Kategori -->