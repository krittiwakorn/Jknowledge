<?php $this->load->view('header');?>
<div  class='col-md-10 col-md-offset-1'>
	<div class="panel panel-primary">
		<div class="panel-heading"> รายงานผู้สมัครตามคอร์สเรียน</div>
		<div class="panel-body">
			เลือกคอร์สเรียน:
			<select name="list_course" id='list_course' >
				<option >---กรุณาเลือกคอร์ส---</option>
				<?php foreach ($get_course as $course_row):?>
				<option value='<?php echo $course_row->id_course;?>'><?php echo $course_row->course_name;?></option>
				<?php endforeach;?>
			</select>
			<hr/>
			<table class="display" cellspacing="0" width="100%" >
				<thead>
					<th>ชื่อ-นามสกุล</th>
					<th>เลขประจำตัวประชาชน</th>
					<th>โรงเรียน</th>
					<th>เบอร์ติดต่อ</th>
					<th>คอร์สเรียน</th>
					<th >การสำรองที่พัก</th>
					<th> เลขที่ใบสมัคร</th>
					<th >สถานะ</th>
					<th >ดำเนินการ</th>
				</thead>
				<tbody>
					<?php
					foreach ($get_regist_hdr as $regist_hdr):?>
					<?php $is_iti = ($regist_hdr->is_iti === '1'? "นาย":"นางสาว");?>
					<tr>
						<td class="col-md-2"> <!-- name & lastname -->
						<?php echo $is_iti;?>
						<?php echo $regist_hdr->firstname;?>&nbsp;&nbsp;
						<?php echo $regist_hdr->lastname;?>
					</td>
					<td><?php echo $regist_hdr->idcard;?></td> <!-- //เลขประจำตัวประชาชน -->
					<td><?php echo $regist_hdr->school;?></td>  <!-- //โรงเรียน -->
					<td><?php echo substr($regist_hdr->mobile,0,3)."-".substr($regist_hdr->mobile,3);?></td>	<!-- //เบอร์โทร -->
					<td><?php echo $regist_hdr->course_name;?></td>	<!-- //ชื่อคอร์ส -->
					<td> test</td>		<!-- ข้อมูลการจอง -->
					<td>ABCDEF123</td>
					<td>		<!-- //สถานะการโอนเงิน -->
					<?php
					switch ($regist_hdr->status_hdr) {
						case '1':
						echo '<h4><span class="label label-default col-md-11">สมัครแล้ว</span></h4>';
						break;
						case '2':
						echo '<h4><span class="label label-warnign col-md-11">รอการชำระเงิน</span></h4>';
						break;
						case '3':
						echo '<h4><span class="label label-primary col-md-11">แจ้งชำระเงิน</span></h4>';
						break;
						case '4':
						echo '<h4><span class="label label-warning">กำลังตรวจสอบ</span></h4>';
						break;
						case '5';
						echo '<h4><span class="label label-success col-md-11">ยืนยันผลการตรวจสอบ</span></h4>';
						default:
					//echo '<h4><span class="label label-danger">ยกเลิก</span></h4>';
						break;
					}
					?>
				</td>
				<td class="col-md-1">
					<?php echo anchor('#', 'ดูรายละเอียด','class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg'.$regist_hdr->id_register_hdr.'" ');?>
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
											<?php echo form_open('registration/updateReport','class="form-horizontal" role="form"');?>
											<div class="form-group col-sm-12 ">
												<!-- <div class="col-md-3"></div> -->
												<div class="col-md-6">
													<label for="hdr_name" class="control-label">ชื่อ - สกุล :</label>
													<input type="numeric" class="form-control" id="hdr_name" name="hdr_name" value="<?php echo $is_iti.' '.$regist_hdr->firstname.' '.$regist_hdr->lastname;?>"  />
												</div>
												<div class="col-sm-6">
													<label for="idcard" class="control-label">รหัสประจำตัวประชาชน:</label>
													<input type="numeric" class="form-control" id="idcard" name="idcard" value="<?php echo $regist_hdr->idcard;?>" max='13' />
												</div>
											</div>
											<div class="form-group col-sm-12 ">
												<!-- <div class="col-md-3"></div> -->
												<div class="col-sm-6">
													<label for="mobile" class="control-label">เบอร์ติดต่อ:</label>
													<input type="numeric" class="form-control" id="mobile" name="mobile" value="<?php echo substr($regist_hdr->mobile,0,3)."-".substr($regist_hdr->mobile,3);?>" />
												</div>
												<div class="col-sm-6">
													<label for="course_name" class="control-label">คอร์สเรียน:</label>
													<input type="numeric" class="form-control" id="course_name" name="course_name" value="<?php echo $regist_hdr->course_name;?>" />
												</div>
											</div>
											<div class="form-group col-sm-12 ">
												<div class="col-md-6">
													<label for="course_name" class="control-label">สำรองที่พัก:</label>
													<input type="numeric" class="form-control " id="course_name" name="course_name" value="ต้องการสำรองที่พัก" /><br/>
												</div>
											</div>
											<div class="form-group col-sm-12 ">
												<div class="col-sm-6">
													<label for="course_name" class=" control-label">ใบเสร็จชำระเงิน:</label><br/>
													<img src="<?php echo base_url().'image/nopicture.jpg';?>" alt="ultraman" class="thumbnail col-md-12" />
												</div>
												<div class="col-sm-6">
													<label for="status_hdr" class="control-label">สถานะการดำเนินการ:</label>
													<div class="col-md-12 thumbnail table">
														<!-- ใส่ข้อมูล -->
														<table cellspacing="0" cellpadding="3" width="100%" border="1" style="border-color:#337ab7;">
															<thead>
																<tr align="center" height="40px" style="background:#337ab7;font-size:18px;color:#fff;">
																	<td align="center" >วันที่ / เวลา</td>
																	<td align="center" >การดำเนินการ</td>
																	<td align="center" width="80" >สถานะ</td>
																</tr>
															</thead>
															<tbody>
																<tr height="30px" style="color:#5cb85c;">
																	<td> &emsp;17/11/2558 21:30</td>
																	<td> &emsp;สมัครแล้ว</td>
																	<td align="center"><i class="glyphicon glyphicon-ok" ></i> </td>
																</tr>
																<tr height="30px" style="color:#5cb85c;">
																	<td>&emsp;17/11/2558 21:45</td>
																	<td>&emsp;รอการชำระเงิน</td>
																	<td align="center"><i class="glyphicon glyphicon-ok" ></i></td>
																</tr>
																<tr height="30px" >
																	<td>&emsp;เหลือเวลา 6 วัน</td>
																	<td>&emsp;แจ้งชำระเงินแล้ว</td>
																	<td align="center"><i class="glyphicon glyphicon-time" ></i></td>
																</tr>
																<tr height="30px" >
																	<td>&emsp;เหลือเวลา 6 วัน</td>
																	<td>&emsp;กำลังตรวจสอบ</td>
																	<td align="center"><i class="glyphicon glyphicon-time" ></i></td>
																</tr>
																<tr height="30px" >
																	<td>&emsp;เหลือเวลา 6 วัน</td>
																	<td>&emsp;ยืนยันผลการลงทะเบียน</td>
																	<td align="center"><i class="glyphicon glyphicon-time" ></i></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<input type="hidden" name="id_hdr" value="<?php echo$regist_hdr->id_register_hdr;?>" />
											<div class="form-group col-sm-12 ">
												<!-- <div class="col-md-3"></div> -->
												<div class="col-sm-3 pull-right ">
													<button type="submit" class="btn btn-success ">อนุมัติ</button>
													<button type="cancel" class="btn btn-warning">ไม่อนุมัติ</button>
												</div>
											</div>
											<?php echo form_close();?>
										</div>
										</div> <!-- ./ end row -->
										</div> <!-- ./end div.panal -->
									</div>
								</div>
								</div> <!-- ./ end modal -->
							</td>
						</tr>
						<?php endforeach;  ?>
					</tbody>
				</table>
			</div>
		</div>
	</<section>
	<?php $this->load->view('footer');?>
	<script type="text/javascript">
		$( "select" ).change(function () {
			var v = $( "select option:selected" ).val();
						// alert(v);
	window.location = "<?php echo base_url();?>registration/report/"+v;
	});
	</script>