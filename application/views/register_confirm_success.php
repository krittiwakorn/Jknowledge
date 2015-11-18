<?php $this->load->view('header_register');?>
<div class="row" style="margin-top:-30px;">
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-size:25px;">แจ้งการชำระเงิน</div>
		<div class="panel-body">
		<!-- insert register  -->  
		<?php echo form_open('Register/register_confirm_success','class="form-horizontal " role="form"');?>
		<br> 
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >เลขที่ใบสมัคร</label>
	                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" value="R158110001" disabled>
            	</div>
            	<div class="form-group">
	                <label >ชื่อ-นามสกุล</label>
	                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" value="นายโอ๋ ดิษฐพงษ์" disabled>
            	</div>
            	<div class="form-group">
	                <label >รหัสประจำตัวประชาชน</label>
	                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" value="14854785423125" disabled>
            	</div>
            	<div class="form-group">
	                <label >คอร์สเรียน</label>
	                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" value="BIG J DAY" disabled>
            	</div>
            	<div class="form-group">
	                <label >ยอดเงินที่ต้องชำระ</label>
	                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" value="1,900.00" disabled>
            	</div>
            	<div class="form-group">
	                <label >ยอดเงินที่ชำระ</label>
	                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" value="1,900.00" placeholder='-- กรุณาระบุยอดเงินที่ชำระ --' required="required">
            	</div>
            	<div class="form-group">
	                <label >แนบใบเสร็จที่ชาระเงินแล้ว</label>
	                <div class='input-group date' id='datetimepicker3'>
	                    <input type='text' class="form-control" style="font-size: 20px; height:40px;" placeholder='-- เลือก --' value="ใบเสร็จ.jpg" required="required">
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-paperclip"></span>
	                    </span>
	                </div><br>
	                <h3 style="color:#ff0000;">ระบบรับแจ้งแล้ว ขอบคุณค่ะ</h3>
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>  
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
					<button type="submit" class="btn btn-success" style="width:40%;"> แจ้งการชำระเงิน </button> 
					<button type="reset"  class="btn btn-warning" style="width:40%;margin-left:19%;"> ยกเลิก </button>			
            	</div>
			</div>
			<div class="col-sm-3"></div>
		</div> 
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  