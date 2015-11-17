
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

<!-- Bootstrap Switch -->
<script src="<?php echo base_url();?>js/bootstrap-switch/bootstrap-switch.js"></script>

<!-- Bootstrap Confirme -->
<script type="text/javascript" src="path/to/bootstrap-confirmation.js"></script>

<script>
	function myFunction() {
		var txt;
		var r = confirm("Press a button!");
		if (r == true) {
			txt = "You pressed OK!";
		} else {
			txt = "You pressed Cancel!";
		}
		document.getElementById("demo").innerHTML = txt;
	}
</script>
</body>

</html>
