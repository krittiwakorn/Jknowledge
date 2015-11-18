<?php $this->load->view('header');?>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">	เพิ่มผู้ดูแลระบบ	</div>
		<div class="panel-body">
			<!-- insert course  -->
			<?php echo form_open('Registration/insertMember', ' role="form" class="" ');?>
			<div class="form-group col-sm-12 well ">
				<h3>ข้อมูลใช้ Login </h3>
				<div class="col-sm-6">
					<label for="is_type" class="control-label">Username:</label>
					<input type="text" class="form-control" id="is_type" name="is_type" />
				</div>
				<div class="col-sm-6">
					<label for="memp_code" class="control-label">Password:</label>
					<input type="text" class="form-control" id="memp_code" name="memp_code" />
				</div>
			</div>
			<h3>ข้อมูลทั่วไป </h3>
			<div class="form-group col-sm-12  ">
				<div class="col-sm-4">
					<label for="is_require_room" class="control-label">ชื่อ:</label>&nbsp;&nbsp;
					<!-- <div class="radio col-sm-6"> -->
					<label >
						<input type="radio" name="is_require_room" id="room_1" value="1"  checked/>
						นาย
					</label>
					<label >
						<input type="radio" name="is_require_room" id="room_0" value="0"/>
						นางสาว
					</label>
					<label >
						<input type="radio" name="is_require_room" id="room_0" value="0"/>
						นาง
					</label>
					<input type="text" class="form-control" id="memp_code" name="memp_code" />
				</div>
				<div class="col-sm-4">
					<label for="memp_code" class="control-label">นามสกุล:</label>
					<input type="text" class="form-control" id="memp_code" name="memp_code" />
				</div>
				<div class="col-sm-4">
					<label for="is_type" class="control-label">อีเมลล์:</label>
					<input type="text" class="form-control" id="is_type" name="is_type" />
				</div>
			</div>
			<div class="form-group col-sm-12  ">
				<div class="col-sm-4">
					<label for="memp_code" class="control-label">เบอร์โทร:</label>
					<input type="text" class="form-control" id="memp_code" name="memp_code" />
				</div>
				<div class="col-sm-4">
					<label for="memp_code" class="control-label">มือถือ:</label>
					<input type="text" class="form-control" id="memp_code" name="memp_code" />
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