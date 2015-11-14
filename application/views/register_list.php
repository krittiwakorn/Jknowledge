<?php $this->load->view('header_register');?>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-size:25px;">ระบบสมัครเรียนออนไลน์ - รายการใบสมัครเรียน</div>
		<div class="panel-body">
		<!-- insert register  --> 
		<div class="row">
			<div class="col-sm-12">
				<table class="display" cellspacing="0" width="100%"> 
					<thead>
						<tr>
							<td>เลขที่ใบสมัคร</td>
							<th>ชื่อ-นามสกุล</th>
							<th>รหัสประจำตัวประชาชน</th>
							<th>เบอร์ติดต่อ</th> 
							<th>คอร์สเรียน</th>
							<th>สถานะ</th> 
							<th width="180">ดำเนินการ</th>
						</tr>
					</thead>
					<tbody> 
						<tr>
							<td>R158110001</td>
							<td>นายโอ๋ ดิษฐพงษ์</td>
							<td>14854785423125</td>
							<td>0821428742</td> 
							<td>คอร์สคณิตศาสตร์ ม.6</td>
							<td>รอชำระเงิน</td> 
							<td>
								<a href="<?=base_url()?>Register/register_confirm/">
									<label class='btn btn-danger' style="width:130px;">แจ้งการชำระเงิน</label>
								</a>
								<a href="<?=base_url()?>Register/register_print/">
									<label class='btn btn-primary'>พิมพ์</label>
								</a>
							</td> 
						</tr> 
						<tr>
							<td>R258110001</td>
							<td>นายโอ๋ ดิษฐพงษ์</td>
							<td>14854785423125</td>
							<td>0821428742</td> 
							<td>คอร์สภาษาอังกฤษ ม.6</td>
							<td>ยืนยันการชำระเงินแล้ว</td> 
							<td>
								<a href="<?=base_url()?>Register/register_detail/">
									<label class='btn btn-success' style="width:130px;">ดูรายละเอียด</label> 
								</a>
							</td> 
						</tr>  
					</tbody>
				</table> 
			</div>
		</div> <!-- ./ div row -->  
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  