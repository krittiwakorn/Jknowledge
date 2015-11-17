<?php $this->load->view('header');?>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">	เพิ่มคอร์สเรียน	</div>
		<div class="panel-body">
			<!-- insert course  -->
			<?php echo form_open('Registration/insertCourse', ' role="form" class="" ');?>

			<div class="form-group col-sm-12 ">
				<div class="col-md-3"></div>
				<div class="col-sm-6">
					<label for="course_name" class="control-label">ชื่ออคอร์ส:</label>
					<input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo set_value('course_name');?>"/>
					<?php echo form_error('course_name', '<span class="label label-warning">', '</span>');?>
				</div>
			</div>
			<div class="form-group col-sm-12 ">
				<div class="col-md-3"></div>
				<div class="col-sm-6">
					<label for="course_price" class=" control-label">ราคา:</label>
					<input type="text" class="form-control" id="course_price" name="course_price" />
					<?php echo form_error('course_price', '<span class="label label-warning">', '</span>');?>
				</div>
			</div>
			<div class="form-group col-sm-12 ">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<label for="is_require_room" class="control-label">พี่พัก:</label>&nbsp;&nbsp;
					<!-- <div class="radio col-sm-6"> -->
					<label >
						<input type="radio" name="is_require_room" id="room_1" value="1"  checked/>
						รวมที่พัก
					</label>
					<label >
						<input type="radio" name="is_require_room" id="room_0" value="0"/>
						ไม่รวมที่พัก
					</label>
					<?php echo form_error('is_require_room', '<span class="label label-warning">', '</span>');?>
					<!-- </div> -->
				</div>
			</div>
			<div class="form-group col-sm-12">
				<div class="col-md-3"></div>
				<div class="col-sm-6">
					<label for="comment" class=" control-label">หมายเหตุ:</label>
					<textarea class="form-control" name="comment" id="comment" ></textarea>
					<?php echo form_error('comment','<span class="label label-warning">','</span>');?>
				</div>
			</div>
			<div class="form-group col-sm-12">
				<div class="col-md-3"></div>
				<div class="col-sm-6">
					<button type="submit" class="btn btn-success ">บันทึก</button>
					<button type="reset" class="btn btn-warning ">ยกเลิก</button>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row -->

<?php $this->load->view('footer');?>