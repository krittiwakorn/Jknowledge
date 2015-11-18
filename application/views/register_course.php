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
					<i class="glyphicon glyphicon-ok text-success"></i> อ่านก่อน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i> เลือกคอร์สเรียน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;">
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  ข้อมูลผู้สมัคร
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;">
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  เพิ่มเพื่อน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;"> 
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  ตรวจสอบและยืนยัน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;"> 
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  เสร็จสิ้น
				</div> 
			</div>
		</div>
		<br/><br/>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-7" style="font-size:18px;"> 
	            <p><input type="radio" name="id_course" value="1"  checked> BIG J DAY<br> </p>
	            <p><input type="radio" name="id_course" value="2"> J KKU Camp -- ครู<br> </p>
	            <p><input type="radio" name="id_course" value="2"> J KKU Camp -- วิศวะ<br> </p>
	            <p><input type="radio" name="id_course" value="2"> J KKU Camp -- เภสัช พยาบาล<br> </p>
	            <p><input type="radio" name="id_course" value="2"> J KKU Camp -- มนุษย์ นิติ วิทยาการ<br></p>
	            <p><input type="radio" name="id_course" value="2"> J Med Camp<br></p>
	            <p><input type="radio" name="id_course" value="2"> ปูพื้นฐาน ม.4 <br></p>
	            <p><input type="radio" name="id_course" value="2"> ปูพื้นฐาน ม. 5<br></p> 
	        </div>  
	        <div class="col-sm-4" style="font-size:16px;">
	        		<h4 style="margin-top:30%;">หมายเหตุ </h4>
	        		<p>คอร์ส  Big J Day</p>
					<p>&emsp;&emsp;สมัคร 1 คน คนละ  900 บาท</p>
					<p>&emsp;&emsp;สมัคร 5 คนขึ้นไป เหลือคนละ 700 บาท</p>  
					<p>คอสที่เหลือ จ่ายค่ามัดจำ 5000 บาท</p>
	        </div>
		</div> 
		<br><br>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?=base_url()?>register/register_course"><div  class="btn btn-warning" style="width:120px;margin-left:50px;"> ย้อนกลับ </div></a>
			</div>
			<div class="col-sm-6"></div>
			<div class="col-sm-3" style="text-align:right;">
				<a href="<?=base_url()?>register/register_add/"><div class="btn btn-success" style="width:120px;margin-right:50px"> ขั้นตอนถัดไป </div></a>
			</div>
		</div>
		<br/><br/>
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  