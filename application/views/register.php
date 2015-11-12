<?php $this->load->view('header_register');?>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">สมัครเรียนออนไลน์</div>
		<div class="panel-body">
		<!-- insert register  -->
		<?php echo form_open('Registration/insert_register','class="form-horizontal " role="form"');?>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >รหัสประจำประชาชน *</label>
	                <input type="text" id="name" name="name" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >ชื่อ-นามสกุล * </label>
	                <input type="text" id="name" name="name" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >ชื่อ-นามสกุล *</label>
	                <input type="text" id="name" name="name" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >อีเมล์ *</label>
                <input type="email" id="email" name="email" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
					<button type="submit" class="btn btn-success" style="width:20%;">SAVE</button>
					<button type="reset" class="btn btn-warning" style="width:20%;margin-right:20px;">RESET</button>			
            	</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>