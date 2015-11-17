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
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;">
					<i class="glyphicon glyphicon-ok text-success"></i>  ข้อมูลผู้สมัคร
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;">
					<i class="glyphicon glyphicon-ok text-success"></i>  เพิ่มเพื่อน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i>  ตรวจสอบและยืนยัน
				</div>
				<div class="col-sm-2" style="border-bottom: 8px solid #449d44;"> 
					<i class="glyphicon glyphicon-ok text-success"></i>  เสร็จสิ้น
				</div> 
			</div>
		</div>
		<br/>
		<div class="row" style="margin-top:30px;">
			<div class="col-sm-12" style="text-align:center;font-size:30px;"><h2>สมัครเรียบร้อย - รอโอน</h2></div> 
			<div class="col-sm-12" style="text-align:center;"> <p>ระบบส่งข้อมูลการสมัครของน้องไปยัง xxxxx@xxxxx.com แล้วนะคะ น้องๆ สามารถเช็คใบสมัครในอีเมล์ได้อีกทาง</p> </div>
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
					
					<h3>ขั้นตอนต่อไป</h3>
					<p>&emsp;1. ดาวน์โหลดใบสมัครที่ปุ่มด้านล่าง</p>
					<p>&emsp;2. นำยอดรวมไปโอนเข้าบัญชีธนาคาร ตามที่แจ้ง</p>
					<p>&emsp;3. แจ้งการชำระเงิน โอนเงิน ที่หน้าเว็บไซต์</p>
					<p>&emsp;4. เรียบร้อย</p> <br>
					<p>หมายเหตุ กรุณาชำระเงิน ภายใน 7 วัน หลังการสมัคร หากไม่ชำระตามกำหนด การสมัครนั้นถือเป็นโมฆะ</p>
			</div>
		</div> 
		<div class="row" style="margin-top:40px;"> 
			<div class="col-sm-12" style="text-align:center;">
				<a href="<?=base_url()?>register/register_down"><div  class="btn btn-success" style="width:250px;font-size:20px;"> ดาวน์โหลดใบสมัคร </div></a>
				<a href="<?=base_url()?>register/register_down"><div  class="btn btn-warning" style="width:250px;font-size:20px;margin-left:10px;margin-right:10px;"> แจ้งชำระเงิน </div></a>
				<a href="<?=base_url()?>register/"><div  class="btn btn-info" style="width:250px;font-size:20px;"> กลับหน้าหลัก </div></a>
			</div>  
		</div>
		<br/><br/>
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  