<?php $this->load->view('header_register');?>
<div class="row">
<?php echo form_open(base_url().'Register/add','class="form-horizontal " role="form"');?>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
		<div class="form-group">
            <h1 align='center'>เงื่อนไขการสมัครเรียน</h1>  
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
	<div class="col-sm-3"></div>
	<div class="col-sm-6"> 
		<div class="col-sm-3"></div>
		<button type="submit" class="btn btn-success col-sm-6" > สมัครเรียนออนไลน์ </button>			
	</div>
	<div class="col-sm-3"></div>
</div>
<?php echo form_close();?> 
</div>
<?php $this->load->view('footer');?>