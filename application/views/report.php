<?php $this->load->view('header');?>

<div class="container">
	<section >
		<div class="panel panel-primary">
			<div class="panel-heading"> รายงานผู้สมัครตามคอร์สเรียน</div>
			<div class="panel-body">
				<span class="title">ดูจากคอร์สเรียน</span><br/>
				<ul class="nav nav-pills  ">
					<?php foreach ($get_course as $course_row):?>
						<li role="presentation" class="active"><?php echo anchor('registration/report/'.$course_row->id_course, $course_row->course_name, 'attributes');?>
						</li>
					<?php endforeach;?>
				</ul>
				<hr/>
				<table id="" class="display" cellspacing="0" width="100%">
					<thead>
						<th>ชื่อ-นามสกุล</th>
						<th>รหัสประจำตัวประชาชน</th>
						<th>โรงเรียน</th>
						<th>เบอร์ติดต่อ</th>
						<th>คอร์สเรียน</th>
						<th>สถานะ</th>
						<th class='col-md-2'>ดำเนินการ</th>
					</thead>
					<tbody>
						<?php
						foreach ($get_regist_hdr as $regist_hdr):?>
						<?php $is_iti = ($regist_hdr->is_iti === '1'? "นาย":"นางสาว");?>
						<tr>
							<td> <!-- name & lastname -->
								<?php echo $is_iti;?>
								<?php echo $regist_hdr->firstname;?>&nbsp;&nbsp;
								<?php echo $regist_hdr->lastname;?>
							</td>
							<td><?php echo $regist_hdr->idcard;?></td> <!-- //เลขประจำตัวประชาชน -->
							<td><?php echo $regist_hdr->school;?></td>  <!-- //โรงเรียน -->
							<td><?php echo substr($regist_hdr->mobile,0,3)."-".substr($regist_hdr->mobile,3);?></td>	<!-- //เบอร์โทร -->
							<td><?php echo $regist_hdr->course_name;?></td>	<!-- //ชื่อคอร์ส -->
							<td>		<!-- //สถานะการโอนเงิน -->
								<?php
								switch ($regist_hdr->status_hdr) {
									case '1':
									echo '<h4><span class="label label-danger col-md-11">ยังไม่ชำระเงิน</span></h4>';
									break;
									case '2':
									echo '<h4><span class="label label-primary col-md-11">จ่ายเงินแล้ว</span></h4>';
									break;
									case '3':
									echo '<h4><span class="label label-success col-md-11">ตรวจสอบการสมัครแล้ว</span></h4>';
									break;
									case '4':
									echo '<h4><span class="label label-warning">หมดอายุการสมัคร</span></h4>';
									break;
									default:
									echo '<h4><span class="label label-danger">ยกเลิกการสมัคร</span></h4>';
									break;
								}
								?>
							</td>
							<td class="col-md-2">
								<?php //echo anchor('registration/report_detail/'.$regist_hdr->id_register_hdr, 'รายละเอียด', 'class="btn btn-info"');?>
								<?php //echo anchor('registration/present_print', 'ปริ๊น', 'class="btn btn-primary"');?>
								<?php echo anchor('#', 'ดูรายละเอียด','class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg'.$regist_hdr->id_register_hdr.'"');?>
							</td>
						</tr>
						<!-- Large modal -->
						<div class="modal fade bs-example-modal-lg<?php echo $regist_hdr->id_register_hdr;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
							<div class="modal-dialog modal-lg">
								<div class="modal-content col-md-12">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<div class="panel panel-primary">
										<div class="panel-heading">รายละเอียดผู้สมัคร	</div>
										<div class="row">
											<div class="panel-body">
												<?php echo form_open('#','class="form-horizontal" role="form"');?>

												<div class="form-group col-sm-12 ">
													<div class="col-md-3"></div>
													<div class="col-md-6">
														<label for="hdr_name" class="control-label">ชื่อ - สกุล :</label>
														<input type="numeric" class="form-control" id="hdr_name" name="hdr_name" value="<?php echo $is_iti.' '.$regist_hdr->firstname.' '.$regist_hdr->lastname;?>"  />
													</div>
												</div>
												<div class="form-group col-sm-12 ">
													<div class="col-md-3"></div>
													<div class="col-sm-6">
														<label for="idcard" class="control-label">รหัสประจำตัวประชาชน:</label>
														<input type="numeric" class="form-control" id="idcard" name="idcard" value="<?php echo $regist_hdr->idcard;?>" max='13' />
													</div>
												</div>
												<div class="form-group col-sm-12 ">
													<div class="col-md-3"></div>
													<div class="col-sm-6">
														<label for="mobile" class="control-label">เบอร์ติดต่อ:</label>
														<input type="numeric" class="form-control" id="mobile" name="mobile" value="<?php echo substr($regist_hdr->mobile,0,3)."-".substr($regist_hdr->mobile,3);?>" />
													</div>
												</div>
												<div class="form-group col-sm-12 ">
													<div class="col-md-3"></div>
													<div class="col-sm-6">
														<label for="course_name" class="control-label">คอร์สเรียน:</label>
														<input type="numeric" class="form-control" id="course_name" name="course_name" value="<?php echo $regist_hdr->course_name;?>" />
													</div>
												</div>
												<div class="form-group col-sm-12 ">
													<div class="col-md-3"></div>
													<div class="col-sm-6">
														<label for="course_name" class=" control-label">ใบเสร็จชำระเงิน:</label><br/>
														<div class=" col-xs-9 col-md-6">
															<a href="#" class="thumbnail ">
																<img src="<?php echo base_url().'image/nopicture.jpg';?>" alt="ultraman" >
															</a>
														</div>
													</div>
												</div>

												<div class="form-group col-sm-12">
													<div class="col-md-3"></div>
													<div class="col-sm-6">
														<button type="submit" class="btn btn-success ">อนุมัติ</button>
														<button type="cancel" class="btn btn-warning ">ไม่อนุมัติ</button>
													</div>
												</div>

												<?php echo form_close();?>
											</div>
										</div> <!-- ./ end panel -->
									</div> <!-- ./end div.row -->
								</div>
							</div>
						</div> <!-- ./ end modal -->
					<?php endforeach;  ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
</div>

<?php $this->load->view('footer');?>