<?php $this->load->view('header_register');?>
<div class="row" style="margin-top:-30px;">
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-size:25px;">สถานะการดำเนินการ</div>
		<div class="panel-body">
		<!-- insert register  --> 
		<br><br>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<h4>เลขประจำตัวประชาชน :&emsp;1485233458754</h4> <hr>
				<h4>คอร์สที่สมัคร :&emsp;BIG J DAY</h4><hr>
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
			<div class="col-sm-3"></div> 
		</div> 
		<div class="row" style="margin-top:40px;">
			<div class="col-sm-3"></div>
			<div class="col-sm-6" style="text-align:center;"> 
				<a href="<?=base_url()?>Register/"><button class="btn btn-warning" style="width:150px;font-size:20px;"> กลับหน้าหลัก </button></a>		
			</div>
			<div class="col-sm-3"></div>
		</div>
		<br><br>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  