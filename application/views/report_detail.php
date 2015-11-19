<?php $this->load->view('header');?>
<style type="text/css">
	body {
		background: #cccccc;
	}
	page[size="A4"] {
		background: white;
		width: 21cm;
		height: 29.7cm;
		display: block;
		margin: 0 auto;
		margin-bottom: 0.5cm;
		box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
	}
	@media print {
		body, page[size="A4"] {
			margin: 20;
			box-shadow: 10;
		}
	}
</style>
<page size="A4">
	<div id="printpage" style="margin: 15px;">
		<div class="row col-md-12">
			<div class="col-xs-6 col-md-3 col-md-offset-5">
				<a href="#" class="thumbnail">
					<img src="<?php echo base_url().'image/nopicture.jpg';?>" alt="ultraman" width="140px" height="120px" align="center"/>
				</a>
			</div>
			<div class="col-md-12 text-center">
				asdfasdf;laksjdf;alksjdf;alksjdf;lakjsdf;lkajsdf;lkj
			</div>
			<table id="" class="display" cellspacing="0" width="100%" border="1">
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
					foreach ($get_hdr_id as $regist_hdr):?>
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
								echo '<h4><span class="label label-danger col-md-11">สมัครแล้ว</span></h4>';
								break;
								case '2':
								echo '<h4><span class="label label-primary col-md-11">รอการชำระเงิน</span></h4>';
								break;
								case '3':
								echo '<h4><span class="label label-success col-md-11">แจ้งชำระเงิน</span></h4>';
								break;
								case '4':
								echo '<h4><span class="label label-warning">กำลังตรวจสอบ</span></h4>';
								break;
								case '5';
								echo '<h4><span class="label label-danger col-md-11">ยืนยันผลการตรวจสอบ</span></h4>';
								default:
								echo '<h4><span class="label label-danger">สมัครแล้ว</span></h4>';
								break;
							}
							?>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
	<?php foreach ($get_hdr_id as $regist_hdr): ?>
		ชื่อ-สกุล <u><b> <?php echo $is_iti = ($regist_hdr->is_iti === '1' ? "นาย" : "นางสาว");?> <?php echo $regist_hdr->firstname . "  &nbsp;&nbsp;  " . $regist_hdr->lastname;?>   </b> </u>&nbsp;
		โรงเรียน <u><b><?php echo $regist_hdr->school;?>  </b></u>&nbsp;
		ระดับชั้น <u><b>ม. <?php echo $regist_hdr->is_class;?> </b></u>&nbsp;
		วัน/เดือน/ปีเกิด <u><b><?php echo $regist_hdr->birth_date;?> </b></u>&nbsp;
		เบอร์โทรศัพท์ <u><b><?php echo $regist_hdr->mobile;?></b></u>&nbsp;
		Facebook <u><b><?php echo $regist_hdr->facebook;?></b></u> &nbsp;
		Email <u><b><?php echo $regist_hdr->email;?></b></u>&nbsp;
		ID: บัตรประชาชน <u><b><?php echo $regist_hdr->idcard;?></b></u>&nbsp;
	<?php endforeach; ?>
	<a href="#" onclick="printdiv()">Print</a>
</div>
</page>
<a href="#" onclick="printdiv()">Print</a>
<script type="text/javascript" charset="utf-8">
	function printdiv()
	{
		//your print div data
		//alert(document.getElementById("printpage").innerHTML);
		var newstr=document.getElementById("printpage").innerHTML;
		var header='<header><div align="center"><h3 style="color:#EB5005"> Your HEader </h3></div><br></header><hr><br>'
		var footer ="Your Footer";
		//You can set height width over here
		var popupWin = window.open('', '_blank', 'width=21cm,height=29.7cm');
		popupWin.document.open();
		popupWin.document.write('<html> <body onload="window.print()">'+ newstr + '</html>' + footer);
		popupWin.document.close();
		return false;
	}
</script>
<?php $this->load->view('footer');?>