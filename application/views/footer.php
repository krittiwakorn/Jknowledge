
</div>
<!-- /.container -->

<!-- jQuery Version 1.11.1 -->
<script src="<?= base_url();?>js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= base_url();?>js/bootstrap.min.js"></script>

<!-- Boostrap JavaScript Datatable -->
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function () {
		$('table.display').dataTable();
	});
</script>
</body>

</html>
