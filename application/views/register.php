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
	                <input type="text" id="idcard" name="idcard" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group ">  
		                <label >ชื่อ *  
		                	<input type="radio" name="is_iti" value="1"  checked> นาย 
		                	<input type="radio" name="is_iti" value="2"> นางสาว 
		                </label>
		                <input type="text" id="firstname" name="firstname" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >นามสกุล *</label>
	                <input type="text" id="lastname" name="lastname" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >ชื่อเล่น *</label>
	                <input type="text" id="nickname" name="nickname" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >วันเกิด *</label>
	                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
		            <label >เบอร์ติดต่อ *</label>
	                <input type="text" id="mobile" name="mobile" class="form-control" style="font-size: 20px; height:40px;" required="required">
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
	                <label >facebook</label>
                	<input type="text" id="facebook" name="facebook" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >Line ID</label>
                	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >โรงเรียน</label>
                	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" required="required">
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >ระดับชั้น </label>
	                <select name="_id_course" class="form-control">
	                	<option value="sel" selected> -- เลือก -- </option>
					    <option value="1">มัธยมศึกษาปีที่ 1</option>
					    <option value="2">มัธยมศึกษาปีที่ 2</option>
					    <option value="3">มัธยมศึกษาปีที่ 3</option>
					    <option value="4">มัธยมศึกษาปีที่ 4</option>
					    <option value="5">มัธยมศึกษาปีที่ 5</option>
					    <option value="6">มัธยมศึกษาปีที่ 6</option>
					</select>  
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >จังหวัด</label>
                	<select name="id_province" class="form-control">
	                	<option value="sel" selected> -- เลือก -- </option>
					    <option value="1">คอร์ส 001</option>
					    <option value="2">คอร์ส 002</option>
					    <option value="3">คอร์ส 003</option>
					</select>
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >คอร์สที่สมัครเรียน</label>
	                <select name="id_course" class="form-control">
	                	<option value="sel" selected> -- เลือก -- </option>
					    <option value="1">คอร์ส 001</option>
					    <option value="2">คอร์ส 002</option>
					    <option value="3">คอร์ส 003</option>
					</select>  
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
					<button type="submit" class="btn btn-success" style="width:30%;">SAVE</button>
					<button type="reset"  class="btn btn-warning" style="width:30%;margin-right:20px;">RESET</button>			
            	</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  