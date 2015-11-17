<?php $this->load->view('header_register');?>
<div class="row" style="margin-top:-40px;">
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-size:20px;">สมัครเรียน</div>
		<div class="panel-body">
		<!-- insert register  -->
		<br/>
		<?php echo form_open('Registration/insert_register','class="form-horizontal " role="form"');?>
		<div class="row">
			<div class="col-sm-12" style="text-align:center;">
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i> เงื่อนไขการสมัคร
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i> เลือกคอร์สเรียน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;">
					<i class="glyphicon glyphicon-ok text-success"></i>  ข้อมูลผู้สมัคร
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;">
					<i class="glyphicon glyphicon-ok text-success"></i>  ข้อมูลผู้สมัครร่วม
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i>  ตรวจสอบและยืนยัน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;"> 
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  เสร็จสิ้น (รอการชำระเงิน)
				</div> 
			</div>
		</div>
		<br/>

<div class="col-sm-12"> 
	<div class="row">
			<p>* สำหรับนักเรียน/for Student (ใช้เป็นหลักฐานการสมัครเรียน) โปรดเรียกเก็บค่าธรรมเนียมจากผู้ชำระเงิน<p/>
		<div class="col-sm-12"> 
		<table width="100%" border='0' cellspacing='5'>
			<tr>
				<td align="left" colspan="2" valign="top"><h2> ใบสมัครเรียน </h2></td> 
				<td align="right" colspan="2">
					<img src="<?=base_url()?>image/logo.jpg" width="140px;"></img><br/>
					<b style="font-size:20px;">สถาบันกวดวิชา jknowledge</b><br/>
					<b>123/1203 อาคารยู-พลาซ่า ชั้น 2 หมู่ที่ 16 ถ.มิตรภาพ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น</b>
				</td>
			</tr> 
			<tr>
				<td rowspan="4" width="100px"><img src="<?=base_url()?>image/logo_scb.png" width="100px;"></img></td>
				<td width="120px" align="right">ธนาคาร : </td>
				<td colspan="3" class="left" >ไทยพำณิชย์</td>
			</tr>
			<tr>
				<td width="120px" align="right">ประเภท :</td>
				<td colspan="3" class="left">ออมทรัพย์</td>
			</tr>
			<tr>
				<td width="120px" align="right">เลขที่บัญชี :</td>
				<td colspan="3" class="left" >793-213146-6</td>
			</tr>
			<tr>
				<td width="120px" align="right">ชื่อบัญชี :</td>
				<td colspan="3" class="left" >นายสัณฐิติ บุญศรี</td>
			</tr>
			<tr> 
				<td colspan="4" ><hr/></td>
			</tr>
			<tr height="30">
				<td colspan="3" align="right">ชื่อโครงกำรที่สมัคร :</td>
				<td class="left" width="40%" style="border: 1px solid #eee;"> R258110001</td>
			</tr>
			<tr height="10"><td colspan="4"></td></tr>
			<tr height="30"> 
				<td colspan="3" align="right">ชื่อ-นามสกุล :</td>
				<td class="left" style="border: 1px solid #eee;"> นายดิษฐพงษ์ นิลนามะ</td>
			</tr>
			<tr height="10"><td colspan="4"></td></tr>
			<tr height="30"> 
				<td colspan="3" align="right">รหัสประจำประชาชน :</td>
				<td class="left" style="border: 1px solid #eee;"> 14854785423125</td>
			</tr>
			<tr height="10"><td colspan="4"></td></tr>
			<tr height="30">
				<td colspan="3" align="right">เบอร์ติดต่อ :</td>
				<td class="left" width="40%" style="border: 1px solid #eee;"> 0821428742</td>
			</tr>
			<tr height="10"><td colspan="4"></td></tr>
			<tr height="30">
				<td colspan="3" align="right">ชื่อ – นามสกุล (ผู้ร่วมสมัคร 1) :</td>
				<td class="left" width="40%" style="border: 1px solid #eee;">แจ๊ค ยุทธนา</td>
			</tr>
			<tr height="10"><td colspan="4"></td></tr>
			<tr height="30">
				<td colspan="3" align="right">ชื่อ – นามสกุล (ผู้ร่วมสมัคร 2) :</td>
				<td class="left" width="40%" style="border: 1px solid #eee;">เต้ ไชยวัฒน์</td>
			</tr> 
			<tr height="10"><td colspan="4"></td></tr>
			<tr height="30">
				<td align="left" colspan="3">จำนวนเงินเป็นตัวอักษร</td> 
				<td align="right">จำนวนเงิน (บาท)</td> 
			</tr>
			<tr height="30">
				<td align="left" colspan="3" style="border: 1px solid #eee;">สองหมื่นหนึ่งพันบาทถ้วน</td> 
				<td align="right" style="border: 1px solid #eee;">21,000 บาท</td> 
			</tr>
			<tr height="20"><td colspan="4"></td></tr>
			<tr> 
				<td width="120px" align="left">หมายเหตุ<br/><br/></td>
				<td colspan="4" class="left" >
					1. ใบชำระค่าเรียน 1 ใบต่อ 1 คอร์ส<br/>
					2. ผู้สมัครกรุณากรอกข้อมูลและตรวจสอบความถูกต้องก่อนยื่นชำระเงินที่เคาท์เตอร์ธนาคาร
				</td>
			</tr> 
			<tr>
				<td colspan="4"><br/>ผู้นำฝาก/Deposit by............................................................ เจ้าหน้าที่ธนาคาร ............................................................ <hr/></td>
			</tr> 
			<tr><td colspan="4" align="left"><h4>รายละเอียด</h4></td></tr>
			<tr><td colspan="4" align="left">
					<p>&emsp;1. กรุณาชำระเงิน ภายใน 7 วัน หลังการสมัคร หากไม่ชำระตามกำหมด การสมัครนั้นจะถือว่าเป็นโมฆะ</p>
					<p>&emsp;2. หลังการชำระเงินค่าเรียน กรุณาแจ้งชำระเงินทาง www.jknowledgetutor.com เป็นอันเสร็จสิ้นขั้นตอนการลงทะเบียน</p>
					<p>&emsp;&emsp;2.1 การแจ้งชำระเงินให้อัฟไฟล์ภาพใบเสร็จที่ชำระเงินแล้วในการแจ้งกำรชำระเงิน</p>
					<p>&emsp;&emsp;2.2 ให้เก็บใบเสร็จที่ทำการชำระเงินแล้วไว้กับตนเองเพื่อเป็นหลักฐานในการเข้าเรียน</p>
					<p>&emsp;3. เอกสารนี้ใช้แลกบัตรเข้างานที่โต๊ะลงทะเบียน พร้อมด้วย ใบเสร็จการชำระเงินกับทำงธนาคารและบัตรประจำตัวประชาชน</p>
					<p>&emsp;4. ประตูเปิดเวลา 08.00 น. (เริ่มรับบัตรเข้างาน 07.30 น.)</p>
					<p>&emsp;5. แต่งกายด้วยชุดนักเรียน</p>
					<p>&emsp;6. ห้ามทำเอกสำรนี้หายโดยเด็ดขาด</p>
					<p>&emsp;7. ผู้เข้าร่วมงานการมีสิทธิลุ้นรับรางวัลพิเศษจากสถาบันกวดวิชา jknowledge</p>
				</td>
			</tr> 
			<tr><td colspan="4" align="left"><h4>ติดต่อสอบถาม</h4></td></tr>
			<tr><td colspan="4" align="left"> 
					<p>&emsp;Tel : พี่พล 094-575-4777 Line ID : jtutor4 </p>
					<p>&emsp;Tel : พี่เว 094-575-6777 Line ID : jtutor6 </p>
					<p>&emsp;Tel : พี่มิ้ว 094-575-8777 Line ID : jtutor8</p>
					<p>&emsp;Tel : พี่ผิง 061-093-7688 Line ID : jknowledge_sisaket </p>
					<p>&emsp;Tel : พี่คาร์บอม 094-291-4542 Line ID : Cabomz</p>
				</td>
			</tr> 
		</table>
		</div> 
		</div> <!-- ./ end div.row -->  
	</div>
</div> 
	<br> 
	<div class="row">
		<div class="col-sm-3">
			<a href="<?=base_url()?>register/register_add"><div  class="btn btn-warning" style="width:40%;margin-left:19%;"> ย้อนกลับ </div></a>
		</div>
		<div class="col-sm-6"></div>
		<div class="col-sm-3" style="text-align:right;">
			<a href="<?=base_url()?>register/register_friend/"><div class="btn btn-success" style="width:40%;margin-right:19%"> ขั้นตอนถัดไป </div></a>
		</div>
	</div>
	<br/><br/> 
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  