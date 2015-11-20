<?php $this->load->view('header');?>
<div class="container">
	<section >
		<div class="panel panel-primary">
			<div class="panel-heading"> จัดการข้อมูลผู้ดูแลระบบ	</div>
			<div class="panel-body">
				<table id="" class="display" cellspacing="0" width="100%">
					<thead>
						<th>ที่</th>
						<th>ชื่อ - นามสกุล</th>
						<th>เบอร์มือถือ</th>
						<th>อีเมลล์</th>
						<th>สถานะ</th>
						<th>แก้ไข</th>
					</thead>
					<tbody>
						<?php
						$number =  count($get_member);
						$id_members = '';
						foreach ($get_member as  $row_member) {
							$id_members = $row_member->id_member;
							$is_iti = ($row_member->is_iti === '1'? "นาย":"นางสาว");
							?>
							<tr>
								<td class="col-sm-1"><?php echo $number-- ;?></td>
								<td><?php echo $is_iti.''.$row_member->firstname.' '.$row_member->lastname;?></td>
								<td><?php echo $row_member->mobile;?></td>
								<td><?php echo $row_member->email;?></td>
								<td><?php echo $is_iti = ($row_member->status === '1'? "ผู้ดูแลระบบ":"สมาชิก");?></td>
								<td class="col-md-2  ">
									<?php echo anchor('#', 'แก้ไข','class="btn btn-warning  " data-toggle="modal" data-target=".bs-example-modal-lg'.$row_member->id_member.'"');?>

									<?php echo anchor('Registration/delMember/'.$row_member->id_member, 'ลบ',' id="member_del"  title="คุณต้องการลบข้อมูล ?" class="btn btn-danger  "  trigger="hover "');?>
								</td>
							</tr>
							<!-- Large modal -->
							<div class="modal fade bs-example-modal-lg<?php echo $row_member->id_member;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
								<div class="modal-dialog modal-lg">
									<div class="modal-content col-md-12">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										</div>
										<div class="panel panel-primary">
											<div class="panel-heading">แก้ไขข้อมูลผู้ดูแลระบบ	</div>
											<div class="row">
												<div class="panel-body">
													<?php echo form_open('Registration/updateMember', ' role="form" class="" ');?>
													<input type="hidden" name="id_member" value="<?php echo $row_member->id_member;?>" />
													<div class="form-group col-sm-12 well ">
														<h3>ข้อมูลใช้ Login </h3>
														<div class="col-sm-6">
															<label for="username" class="control-label">Username:</label>
															<input type="text" class="form-control" id="username" name="username" value="<?php echo $row_member->username;?>" />
														</div>
														<div class="col-sm-6">
															<label for="password" class="control-label">Password:</label>
															<input type="password" class="form-control" id="password" name="password" value="<?php echo $row_member->password;?>" />
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
															<input type="text" class="form-control" id="firstname" name="firstname"  value="<?php echo $row_member->firstname;?>"/>
														</div>
														<div class="col-sm-4">
															<label for="lastname" class="control-label">นามสกุล:</label>
															<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $row_member->lastname;?>"/>
														</div>
														<div class="col-sm-4">
															<label for="email" class="control-label">อีเมลล์:</label>
															<input type="email" class="form-control" id="email" name="email" value="<?php echo $row_member->email;?>" />
														</div>
													</div>
													<div class="form-group col-sm-12  ">
														<div class="col-sm-4">
															<label for="line_id" class="control-label">เบอร์โทร:</label>
															<input type="text" class="form-control" id="line_id" name="line_id" value="<?php echo $row_member->line_id;?>" />
														</div>
														<div class="col-sm-4">
															<label for="mobile" class="control-label">มือถือ:</label>
															<input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $row_member->mobile;?>" />
														</div>
														<div class="col-sm-4">
															<label for="comment" class=" control-label">หมายเหตุ:</label>
															<textarea class="form-control" name="comment" id="comment" ><?php echo $row_member->comment;?></textarea>
															<?php echo form_error('comment','<span class="label label-warning">','</span>');?>
														</div>
													</div>
													<div class="form-group col-sm-12">
														<div class="col-sm-12 col-md-offset-10">
															<button type="submit" class="btn btn-success ">บันทึก</button>
															<button type="close" class="btn btn-warning" onclick="javascript:window.location='www.google.com';" >ออก</button>
														</div>
													</div>
													<?php echo form_close();?>
												</div>
											</div> <!-- ./ end panel -->
										</div> <!-- ./end div.row -->
									</div>
								</div>
							</div> <!-- ./ end modal -->
							<?php  } //end forearch  ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
	<?php $this->load->view('footer');?>

	<script>
		$(document).ready(function(){
			$("[id = 'member_del']").confirmation({popout:true});
		});
	</script>
