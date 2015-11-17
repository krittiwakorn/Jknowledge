<?php $this->load->view('header');?>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">จัดการคอร์สเรียน</div>
		<div class="panel-body">
			<table class="display" cellspacing="0" width="100%">
				<thead  >
					<tr>
						<th >คอร์สเรียน</th>
						<th>ราคา</th>
						<th>ที่พัก	</th>
						<th>หมายเหตุ</th>
						<th>แก้ไข</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($getCourse as $course_row): ?>
						<tr>
							<td><?php echo $course_row->course_name;?></td>
							<td><?php echo $course_row->price."  บาท";?></td>
							<td><?php echo $require_room = ($course_row->is_require_room === '1'? "<label class='btn btn-success col-md-12'>รวมที่พัก</label>":"<label class='btn btn-danger col-md-12'>ไม่รวมที่พัก</label>");?></td>
							<td><?php echo $course_row->comment;?></td>
							<td class="col-md-2">
								<?php echo anchor('#', 'แก้ไข','class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg'.$course_row->id_course.'"');?>
								&nbsp;&nbsp;
								<?php echo anchor('Registration/delCourse/'.$course_row->id_course, 'ลบ','class="btn btn-danger" OnClick="JavaScript:confirm();" ');?>

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
												<?php echo form_open('Registration/updateCourse','class="form-horizontal" role="form"');?>
												<input type="hidden" name="course_update" id="course_update" value="course_update"/>
												<input type="hidden" name="id_course" id="id_course" value="<?php echo $course_row->id_course;?>" />
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
													<div class=" col-sm-6">
														<label for="is_require_room" class=" pull-left control-label">ที่พัก:</label>
														&nbsp;&nbsp;
														<?php
														if($course_row->is_require_room == '1'){
															?>
															<label >
																<input type="radio" name="is_require_room" id="is_require_room_1" value="1"  checked />
																รวมที่พัก
															</label>
															<label >
																<input type="radio" name="is_require_room" id="is_require_room_0" value="0"   />
																ไม่รวมที่พัก
															</label>

															<?php
														}else{
															?>
															<label >
																<input type="radio" name="is_require_room" id="is_require_room_1" value="1"  />
																พร้อมเปิด
															</label>
															<label >
																<input type="radio" name="is_require_room" id="is_require_room_0" value="2"   checked />
																ไม่พร้อมเปิด
															</label>
															<?php
														}
														?>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<div class="col-md-3"></div>
													<div class="col-sm-6">
														<label for="comment" class=" control-label">หมายเหตุ:</label>
														<textarea class="form-control" name="comment" id="comment" ><?php echo $course_row->comment;?></textarea>
														<?php echo form_error('comment','<span class="label label-warning">','</span>');?>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<div class="col-md-3"></div>
													<div class="col-sm-6">
														<button type="submit" class="btn btn-success ">UPDATE</button>
														<button type="cancel" class="btn btn-warning ">CANCEL</button>
													</div>
												</div>

												<?php echo form_close();?>
											</div>
										</div> <!-- ./ end panel -->
									</div> <!-- ./end div.row -->
								</div>
							</div>
						</div> <!-- ./ end modal -->
					<?php endforeach ?>
				</tbody>
			</table>
			<!-- </div> -->
		</div>   <!-- ./ end panel body -->
	</div>  <!-- ./  end panel-primay -->
</div> <!-- ./ div row -->
<?php $this->load->view('footer');?>