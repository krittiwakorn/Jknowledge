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
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i>  เสร็จสิ้น (รอการชำระเงิน)
				</div> 
			</div>
		</div>
		<br/>
		<div class="row" style="margin-top:80px;">
			<div class="col-sm-12" style="text-align:center;font-size:30px;">ดำเนินการเสร็จสิ้น </div> 
		</div> 
		<div class="row" style="margin-top:60px;">
			<div class="col-sm-3" style="text-align:center;">
				<a href="<?=base_url()?>register/register_down"><div  class="btn btn-success" style="width:250px;font-size:20px;"> ดาวน์โหลดใบสมัคร </div></a>
			</div>  
			<div class="col-sm-3" style="text-align:center;">
				<a href="<?=base_url()?>register/register_down"><div  class="btn btn-primary" style="width:250px;font-size:20px;"> รายการใบสมัคร </div></a>
			</div>  
			<div class="col-sm-3" style="text-align:center;">
				<a href="<?=base_url()?>register/register_down"><div  class="btn btn-warning" style="width:250px;font-size:20px;"> แจ้งชำระเงิน </div></a>
			</div>   
			<div class="col-sm-3" style="text-align:center;">
				<a href="<?=base_url()?>register/"><div  class="btn btn-info" style="width:250px;font-size:20px;"> กลับหน้าหลัก </div></a>
			</div>  
		</div>
		<br/><br/><br/><br/>
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  