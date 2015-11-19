<?php $this->load->view('header');?>
<div class="container">
	<section >
		<div class="panel panel-primary">
			<div class="panel-heading"> จัดการข้อมูลผู้ดูแลระบบ	</div>
			<div class="panel-body">
				<table id="" class="display" cellspacing="0" width="100%">
					<thead>
						<th>ที่</th>
						<th>ชื่อ</th>
						<th>สกุล</th>
						<th>อีเมลล์</th>
						<th>เพศ</th>
						<th>แก้ไข</th>
					</thead>
					<tbody>
						<?php
						$number =  count($get_users);
						foreach ($get_users as $key_users => $row_users) {
							$user_status = ($row_users->user_status === 'committee'? "checked":"");
							?>
							<tr>
								<td><?php echo $number-- ;?></td>
								<td><?php echo $row_users->user_first_name;?></td>
								<td><?php echo $row_users->user_last_name;?></td>
								<td><?php echo $row_users->user_email;?></td>
								<td><?php echo $row_users->user_gender;?></td>
								<td class="col-md-2">
									<?php echo anchor('#', 'แก้ไข','class="btn btn-warning col-md-4" data-toggle="modal" data-target=".bs-example-modal-lg'.$row_users->user_id.'"');?>
									&nbsp;&nbsp; &nbsp;&nbsp; <div class='col-md-1'></div>
									<?php echo anchor('Registration/delMember/'.'1', 'ลบ','class="btn btn-danger col-md-4" OnClick="JavaScript:confirm();" ');?>
								</td>
							</tr>
							<!-- Large modal -->
							<div class="modal fade bs-example-modal-lg<?php echo $row_users->user_id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg">
									<div class="modal-content col-md-12">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="panel panel-primary">
											<div class="panel-heading">แก้ไขข้อมูลผู้ดูแลระบบ	</div>
											<div class="row">
												<div class="panel-body">
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
													<div class="form-group col-sm-12  ">
														<h3>ข้อมูลทั่วไป </h3>
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
										</div> <!-- ./end div.row -->
									</div>
								</div>
							</div> <!-- ./ end modal -->
							<?php }  ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>

	<div class="container">
		<h3>Popover Example</h3>
		<a class="btn btn-success" href="#" data-toggle="popover" data-placement="top" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a>
	</div>
	<?php $this->load->view('footer');?>
	<script>
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover('onclick');
		});
	</script>