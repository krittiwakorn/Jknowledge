<?php $this->load->view('header_register');?>
<div class="row" style="margin-top:-40px;">
<div class="panel panel-primary">
	<div class="panel-heading" style="font-size:20px;">สมัครเรียน</div>
	<div class="panel-body">
	<!-- insert register  -->
	<br/>
<?php echo form_open(base_url().'Register/add','class="form-horizontal " role="form"');?>
<div class="row">
	<div class="col-sm-12" style="text-align:center;">
		<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
			<i class="glyphicon glyphicon-ok text-success"></i> อ่านก่อน
		</div>
		<div class="col-sm-2" style="border-bottom: 8px solid #eee;"> 
			<i class="glyphicon glyphicon-plus-sign text-primary"></i> เลือกคอร์สเรียน
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
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="form-group">
            <h1 align='center'>อ่านก่อน</h1>  
	            <h4>&emsp;&emsp;1. น้องๆ ต้องพิจารณารายละเอียดแต่ละโครงการให้รอบคอบก่อนสมัคร ตรวจเช็ค วัน เวลา สถานที่จัดโครงการ ว่าน้องๆสะดวกเข้าร่วมโครงการนี้หรือไม่ ก่อนยืนยันการสมัคร</h4>
	            <h4>&emsp;&emsp;2. เมื่อยืนยันการสมัครเข้าร่วมโครงการใดๆ แล้วน้องๆต้องชาระเงินค่าธรรมเนียม เข้าบัญชีธนาคารตามที่กาหนด จึงจะถือว่าเป็นการยืนยันสิทธิ์เมื่อชาระเงินแล้ว ไม่สามารถขอคืนเงินได้ในทุกกรณี </h4>
	            <h4>&emsp;&emsp;3. การชาระเงินค่าธรรมเนียม ต้องชาระตามเวลาที่กาหนดไว้ให้ หากเลยกาหนดระยะเวลาดังกล่าว การสมัครและสิทธิ์ใดๆที่ได้รับจากโครงการนั้นจะถือเป็นโมฆะทันที</h4>
            </label>
            <h3 align='center'><input type="checkbox" name="confirm" value="1" style="padding:10px;" > ข้าพเจ้ายอมรับเงื่อนไขทุกประการ </h3>
    	</div>
	</div>
	<div class="col-sm-3"></div> 
</div> 
<div class="row">
	<div class="col-sm-3">
		<a href="<?=base_url()?>register/"><div  class="btn btn-warning" style="width:120px;margin-left:50px;"> ยกเลิก </div></a>
	</div>
	<div class="col-sm-6"></div>
	<div class="col-sm-3" style="text-align:right;">
		<a href="<?=base_url()?>register/register_course/"><div class="btn btn-success" style="width:120px;margin-right:50px"> ขั้นตอนถัดไป </div></a>
	</div>
</div>
<br/><br/>
<?php echo form_close();?> 
	</div> <!-- panel-heading -->
	</div> <!-- panel-body -->
</div> <!-- panel panel-primary -->
</div>
<?php $this->load->view('footer');?>