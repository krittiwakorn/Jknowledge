<?php $this->load->view('header');?>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">	เพิ่มคอร์สเรียน	</div>
		<div class="panel-body">
			<!-- insert course  -->
			<?php echo form_open('Registration/insert_course', ' role="form" class="" ');?>
			<div class="form-group col-sm-12 ">
				<div class="col-md-3"></div>
				<div class="col-sm-6">
					<label for="course_code" class="control-label">รหัสคอร์ส:</label>
					<input type="numeric" class="form-control" id="course_code" name="course_code" value="<?php echo set_value('course_code');?>" max='11' />
					<?php echo form_error('course_code', '<span class="label label-warning">', '</span>');?>
				</div>
			</div>
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
				<label for="status" class=" pull-left control-label">สถานะ:</label>
				<div class="radio col-sm-3">
					<label class="btn btn-success">
						<input type="radio" name="status" id="status_1" value="1"  checked/>
						พร้อมเปิด
					</label>
					<label class="btn btn-danger">
						<input type="radio" name="status" id="status_0" value="2"/>
						ไม่พร้อมเปิด
					</label>
					<?php echo form_error('status', '<span class="label label-warning">', '</span>');?>
				</div>
			</div>
			<div class="form-group col-sm-12">
				<div class="col-md-3"></div>
				<div class="col-sm-6">
					<label for="comment" class=" control-label">comment:</label>
					<textarea class="form-control" name="comment" id="comment" ></textarea>
					<?php echo form_error('comment','<span class="label label-warning">','</span>');?>
				</div>
			</div>
			<div class="form-group col-sm-12">
				<div class="col-md-3"></div>
				<div class="col-sm-6">
					<button type="submit" class="btn btn-success ">SAVE</button>
					<button type="reset" class="btn btn-warning ">RESET</button>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row -->
<hr/>
<div class="row">
	<table class="display" cellspacing="0" width="100%">
		<caption>จัดการคอร์สเรียน</caption>
		<thead  >
			<tr>
				<th class="text-center">รหัสคอร์สเรียน</th>
				<th >คอร์สเรียน</th>
				<th>ราคา</th>
				<th>สถานะ	</th>
				<th>คอมเม้น</th>
				<th>แก้ไข</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($getCourse as $course_row) :?>
				<tr>
					<td class="col-md-2 text-center"><?php echo $course_row->course_code;?></td>
					<td><?php echo $course_row->course_name;?></td>
					<td><?php echo $course_row->price."  บาท";?></td>
					<td><?php echo $status = ($course_row->status === '2'? "<label class='btn btn-danger'>ไม่พร้อมเปิด</label>":"<label class='btn btn-success'>พร้อมเปิด</label>");?></td>
					<td><?php echo $course_row->comment;?></td>
					<td class="col-md-2">
						<?php echo anchor('#', 'แก้ไข','class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg'.$course_row->id_course.'"');?>
						&nbsp;&nbsp;
						<?php echo anchor('Registration/del_course/'.$course_row->course_code, 'ลบ','class="btn btn-danger"');?>

					</td>

				</tr>
				<!-- Large modal -->
				<div class="modal fade bs-example-modal-lg<?php echo $course_row->id_course;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					<div class="modal-dialog modal-lg">
						<div class="modal-content col-md-12">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">แสดงข้อมูล</h4>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading">แก้ไขข้อมูล คอร์สเรียน	</div>
								<div class="row">
									<div class="panel-body">
										<?php echo form_open('Registration/update_course','class="form-horizontal" role="form"');?>
										<input type="hidden" name="course_update" id="course_update" value="course_update"/>
										<input type="hidden" name="id_course" id="id_course" value="<?php echo $course_row->id_course;?>" />
										<div class="form-group col-sm-12 ">
											<div class="col-md-3"></div>
											<div class="col-sm-6">
												<label for="course_code" class="control-label">รหัสคอร์ส:</label>
												<input type="numeric" class="form-control" id="course_code" name="course_code" value="<?php echo $course_row->course_code;?>" max='11' />
												<?php echo form_error('course_code', '<span class="label label-warning">', '</span>');?>
											</div>
										</div>
										<div class="form-group col-sm-12 ">
											<div class="col-md-3"></div>
											<div class="col-sm-6">
												<label for="course_name" class="control-label">ชื่ออคอร์ส:</label>
												<input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo $course_row->course_name;?>"/>
												<?php echo form_error('course_name', '<span class="label label-warning">', '</span>');?>
											</div>
										</div>
										<div class="form-group col-sm-12 ">
											<div class="col-md-3"></div>
											<div class="col-sm-6">
												<label for="course_price" class=" control-label">ราคา:</label>
												<input type="text" class="form-control" id="course_price" name="course_price" value="<?php echo $course_row->price;?>"/>
												<?php echo form_error('course_price', '<span class="label label-warning">', '</span>');?>
											</div>
										</div>
										<div class="form-group col-sm-12 ">
											<div class="col-md-3"></div>
											<label for="status" class=" pull-left control-label">สถานะ:</label>
											<div class="radio col-sm-6">

												<?php
												if($course_row->status == '1'){
													?>
													<label class="btn btn-success">
														<input type="radio" name="status" id="status_1" value="1"  checked />
														พร้อมเปิด
													</label>
													<label class="btn btn-danger">
														<input type="radio" name="status" id="status_0" value="2"   />
														ไม่พร้อมเปิด
													</label>
													<?php echo form_error('status', '<span class="label label-warning">', '</span>');?>
													<?php
												}else{
													?>
													<label class="btn btn-success">
														<input type="radio" name="status" id="status_1" value="1"  />
														พร้อมเปิด
													</label>
													<label class="btn btn-danger">
														<input type="radio" name="status" id="status_0" value="2"   checked />
														ไม่พร้อมเปิด
													</label>
													<?php echo form_error('status', '<span class="label label-warning">', '</span>');?>
													<?php
												}
												?>
											</div>
										</div>
										<div class="form-group col-sm-12">
											<div class="col-md-3"></div>
											<div class="col-sm-6">
												<label for="comment" class=" control-label">comment:</label>
												<textarea class="form-control" name="comment" id="comment" ><?php echo $course_row->comment;?></textarea>
												<?php echo form_error('comment','<span class="label label-warning">','</span>');?>
											</div>
										</div>
										<div class="form-group col-sm-12">
											<div class="col-md-3"></div>
											<div class="col-sm-6">
												<button type="submit" class="btn btn-success ">SAVE</button>
												<button type="reset" class="btn btn-warning ">RESET</button>
											</div>
										</div>

										<?php echo form_close();?>
									</div>
								</div> <!-- ./ end panel -->
							</div> <!-- ./end div.row -->
						</div>
					</div>
				</div> <!-- ./ end modal -->
			<?php endforeach; ?>
		</tbody>
	</table>
	<!-- </div> -->
</div> <!-- ./ div row -->
<?php $this->load->view('footer');?>