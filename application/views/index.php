<?php $this->load->view('header_register');?>
<div class="row">
	<div class="panel panel-primary"> 
		<div class="panel-body">
			<!-- insert register  --> 
			<br><br><br><br>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<?php echo anchor('registration/course', 'จัดการข้อมูลคอร์สเรียน', 'class="btn btn-success" style="width:100%;height:80px;font-size:40px;"');?>
				</div>
				<div class="col-sm-3"></div> 
			</div>
			<div class="row"><br><br><br></div>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6"> 
					<?php echo anchor('registration/manageUser', 'จัดการข้อมูลผู้ดูแลระบบ', 'class="btn btn-warning" style="width:100%;height:80px;font-size:40px;"');?>
				</div>
				<div class="col-sm-3"></div>
			</div>
			<div class="row"><br><br><br></div>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6"> 
				<?php echo anchor('registration/report', 'จัดการข้อมูลการสมัครเรียน', 'class="btn btn-primary" style="width:100%;height:80px;font-size:40px;"');?>	
				</div>
				<div class="col-sm-3"></div>
			</div>
			<br><br><br><br> 
		</div> <!-- ./ end panal body -->
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>