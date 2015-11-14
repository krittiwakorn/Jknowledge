<?php $this->load->view('header');?>
<div class="container">
	<section >
		<div class="panel panel-primary">
			<div class="panel-heading"> รายงานผู้สมัคร	</div>
			<div class="panel-body">
				<table id="" class="display" cellspacing="0" width="100%">
					<thead>
						<th>ที่</th>
						<th>ชื่อ - สกุล</th>
						<th>เลขประจำตัวประชาชน</th>
						<th>โรงเรียน</th>
						<th>เบอร์โทร</th>
						<th>คอร์สเรียน</th>
						<th>สถานะการโอนเงิน</th>
						<th>รายงานผู้สมัคร</th>
					</thead>
					<tbody>
						<?php
						$number =  count($get_regist_hdr);
						foreach ($get_regist_hdr as $regist_hdr):?>
						<?php $is_iti = ($regist_hdr->is_iti === '1'? "นาย":"นางสาว");?>
						<tr>
							<td><?php echo $number-- ;?></td>	<!--// ลำดับ -->
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
								<?php echo anchor('#', 'ดูรายละเอียด', 'class="btn btn-info"');?>
							</td>
						</tr>
					<?php endforeach;  ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
</div>

<?php $this->load->view('footer');?>