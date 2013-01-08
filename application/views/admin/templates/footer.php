
	</div>
</div>
</div><!-- End div.Container-->
	<script src="<?php echo base_url('assets/js/jquery-1.8.3.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {
  	//buat reset modal ketika modal diclose
	$('body').on('hidden', '.modal', function () {
	  $(this).removeData('modal');
	});

	//jquery trigger buat modal delete
	$('button.deletedata').click(function()
		{
			$('div#modal-delete div.modal-footer form#form-delete input#id').val($(this).data('id'));
			$('div#modal-delete').modal();
		});
	});
	</script>
  </body>
</html>