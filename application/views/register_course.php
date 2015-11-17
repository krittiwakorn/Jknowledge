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
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;">
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  ข้อมูลผู้สมัคร
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;">
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  ข้อมูลผู้สมัครร่วม
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;"> 
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  ตรวจสอบและยืนยัน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #eee;"> 
					<i class="glyphicon glyphicon-plus-sign text-primary"></i>  เสร็จสิ้น (รอการชำระเงิน)
				</div> 
			</div>
		</div>
		<br/><br/>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10"> 
	            <input type="radio" name="id_course" value="1"  checked> คอร์สคณิตศาสตร์ ม.1 <br>
	            <input type="radio" name="id_course" value="2"> คอร์สคณิตศาสตร์ ม.2<br>
	            <input type="radio" name="id_course" value="2"> คอร์สคณิตศาสตร์ ม.3<br>
	            <input type="radio" name="id_course" value="2"> คอร์สคณิตศาสตร์ ม.4<br>
	            <input type="radio" name="id_course" value="2"> คอร์สคณิตศาสตร์ ม.5<br>
	            <input type="radio" name="id_course" value="2"> คอร์สคณิตศาสตร์ ม.6 <br>
	        </div>  
		</div> 
		<br><br>
		<div class="row">
			<div class="col-sm-3">
				<a href="<?=base_url()?>register/register_course"><div  class="btn btn-warning" style="width:40%;margin-left:19%;"> ย้อนกลับ </div></a>
			</div>
			<div class="col-sm-6"></div>
			<div class="col-sm-3" style="text-align:right;">
				<a href="<?=base_url()?>register/register_add/"><div class="btn btn-success" style="width:40%;margin-right:19%"> ขั้นตอนถัดไป </div></a>
			</div>
		</div>
		<br/><br/>
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  