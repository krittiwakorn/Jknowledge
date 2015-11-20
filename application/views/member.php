<?php $this->load->view('header');?>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">	เพิ่มผู้ดูแลระบบ	</div>
		<div class="panel-body">
			<!-- insert course  -->
			<?php echo form_open('Registration/insertMember', ' role="form" class="" ');?>
			<div class="form-group col-sm-12 well ">
				<h3>ข้อมูลใช้ Login </h3>
				<div class="col-sm-6">
					<label for="username" class="control-label">Username:</label>
					<input type="text" class="form-control" id="username" name="username" />
				</div>
				<div class="col-sm-6">
					<label for="password" class="control-label">Password:</label>
					<input type="password" class="form-control" id="password" name="password" />
				</div>
			</div>
			<h3>ข้อมูลทั่วไป </h3>
			<div class="form-group col-sm-12  ">
				<div class="col-sm-4">
					<label for="firstname" class="control-label">ชื่อ:</label>&nbsp;&nbsp;
					<!-- <div class="radio col-sm-6"> -->
					<label >
						<input type="radio" name="is_iti" id="is_iti_1" value="1"  checked/>
						นาย
					</label>
					<label >
						<input type="radio" name="is_iti" id="is_iti_2" value="2"/>
						นางสาว
					</label>
					<label >
						<input type="radio" name="is_iti" id="is_iti_3" value="3"/>
						นาง
					</label>
					<input type="text" class="form-control" id="firstname" name="firstname" />
				</div>
				<div class="col-sm-4">
					<label for="lastname" class="control-label">นามสกุล:</label>
					<input type="text" class="form-control" id="lastname" name="lastname" />
				</div>
				<div class="col-sm-4">
					<label for="email" class="control-label">อีเมลล์:</label>
					<input type="email" class="form-control" id="email" name="email" />
				</div>
			</div>
			<div class="form-group col-sm-12  ">
				<div class="col-sm-4">
					<label for="line_id" class="control-label">เบอร์โทร:</label>
					<input type="text" class="form-control" id="line_id" name="line_id" />
				</div>
				<div class="col-sm-4">
					<label for="mobile" class="control-label">มือถือ:</label>
					<input type="text" class="form-control" id="mobile" name="mobile" />
				</div>
				<div class="col-sm-4">
					<label for="comment" class=" control-label">หมายเหตุ:</label>
					<textarea class="form-control" name="comment" id="comment" ></textarea>
					<?php echo form_error('comment','<span class="label label-warning">','</span>');?>
				</div>
			</div>
			<div class="form-group col-sm-12">
				<div class="col-sm-12 col-md-offset-10">
					<button type="submit" class="btn btn-success ">บันทึก</button>
					<button type="reset" class="btn btn-warning ">ยกเลิก</button>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row -->

<?php $this->load->view('footer');?>