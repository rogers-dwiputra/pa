<div class="row">
	<div class="span7">
	<h4>Manage Events</h4>
	</div>
	<div class="span2">
		<a href="#modal-tambah" data-toggle="modal" class="btn btn-primary pull-right">Tambah Event</a>
	</div>
</div>
<div class="row">
	<div class="span9">
		<hr>
		<table class="table table-hover">
			<thead>
			<tr>
				<th>No.</th>
				<th>Event</th>
				<th>Kategori</th>
				<th>Created by</th>
				<th colspan="3">Actions</th>
			</tr>
			</thead>
			<tbody>
			<?php
			$no = 1;
			foreach ($events as $key) 
			{
			?>
			<tr>
				<td><?php echo $no; ?>.</td>
				<td><?php echo $key['nama_event']; ?></td>
				<td><?php echo $key['kategori_event']; ?></td>
				<td>
					<a data-toggle="modal" data-target="#modal-view" href="<?php echo site_url('admin/events/view/'.$key['id_event']); ?>" class="btn btn-info">View</a>
				</td>
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
    <h3>Tambah Event</h3>
  </div>
  <div class="modal-body">
    <form class="form-horizontal" method="POST" action="<?php echo site_url('admin/events/insert'); ?>">
    		<div class="control-group">
		    <label class="control-label" for="kategori">Kategori</label>
		    <div class="controls">
		      <select name="id_kategori">
		      	<?php foreach ($kategori as $key) 
		      	{
		      	?>
		      	<option value="<?php echo $key['id_kategori_event']; ?>"><?php echo $key['kategori_event']; ?></option>
		      	<?php
		      	}
		      	?>
		      </select>
		    </div>
		  	</div>
    		<div class="control-group">
		    <label class="control-label" for="nama_event">Nama Event</label>
		    <div class="controls">
		      <input type="text" name="nama_event" id="nama_event"/>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="alamat_event">Alamat Event</label>
		    <div class="controls">
		      <input type="text" name="alamat_event" id="alamat_event"/>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="latitude">Latitude</label>
		    <div class="controls">
		      <input type="text" name="latitude" id="latitude"/>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="longitude">Longitude</label>
		    <div class="controls">
		      <input type="text" name="longitude" id="longitude"/>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="event_start">Event Start</label>
		    <div class="controls">
		      <input type="text" name="event_start" id="event_start"/>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="event_end">Event End</label>
		    <div class="controls">
		      <input type="text" name="event_end" id="event_end"/>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="ticket">Ticket</label>
		    <div class="controls">
		      <input type="text" name="ticket" id="ticket"/>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="telp">Telp</label>
		    <div class="controls">
		      <input type="text" name="telp" id="telp"/><span class="help-inline">Optional</span>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="email">Email</label>
		    <div class="controls">
		      <input type="text" name="email" id="email"/><span class="help-inline">Optional</span>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="twitter">twitter</label>
		    <div class="controls">
		      <input type="text" name="twitter" id="twitter"/><span class="help-inline">Optional</span>
		    </div>
		  	</div>
		  	<div class="control-group">
		    <label class="control-label" for="website">Website</label>
		    <div class="controls">
		      <input type="text" name="website" id="website"/><span class="help-inline">Optional</span>
		    </div>
		  	</div>
  </div>
  <div class="modal-footer">
  	<input type="hidden" name="id_user" value="2"/>
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