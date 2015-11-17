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
		<div class="row" style="margin-top:20px;">
			<div class="col-sm-3" style="text-align:right;">เลขที่ใบสมัคร : </div>
			<div class="col-sm-3" style="text-align:left;">JK5811A10001 </div>
			<div class="col-sm-3" style="text-align:right;">คอร์สที่สมัคร : </div>
			<div class="col-sm-3" style="text-align:left;">คณิตศาสตร์ ม.6 </div>
		</div>
		<hr/> 
		<div class="row">
			<div class="col-sm-4">  
                <label >รหัสประจำประชาชน *</label>
                <p style="border-bottom: 2px solid #eee;"> 14854785423125</p>
			</div>
			<div class="col-sm-4"> 
	            <label >เบอร์ติดต่อ *</label>
                <p style="border-bottom: 2px solid #eee;"> 0821428742</p>
            </div>
            <div class="col-sm-4"> 
                <label >อีเมล์ *</label>
            	<p style="border-bottom: 2px solid #eee;"> aostudio.nilnama@gmail.com</p>
            </div>
        </div>
		<div class="row" style="padding-top:10px;">
			<div class="col-sm-4"> 
                <label >ชื่อ * </label>
                <p style="border-bottom: 2px solid #eee;"> นายดิษฐพงษ์</p>
            </div> 
			<div class="col-sm-4">
                <label >นามสกุล *</label>
                <p style="border-bottom: 2px solid #eee;"> นิลนามะ</p>
			</div> 
			<div class="col-sm-4">
                <label >ชื่อเล่น *</label>
                <p style="border-bottom: 2px solid #eee;"> โอ๋</p>
			</div> 
		</div>
		<div class="row" style="padding-top:10px;">
			<div class="col-sm-4">
                <label >วันเกิด *</label>
                <p style="border-bottom: 2px solid #eee;"> 20/12/2530</p>
			</div> 
			<div class="col-sm-4">
                <label >facebook</label>
            	<p style="border-bottom: 2px solid #eee;"> https://www.facebook.com/dnsoft</p>
            </div>  
			<div class="col-sm-4">
                <label >Line ID</label>
            	<p style="border-bottom: 2px solid #eee;"> ao_dnsoft</p>
            </div> 
        </div>
		<div class="row" style="padding-top:10px;">
			<div class="col-sm-4">
                <label >โรงเรียน</label>
            	<p style="border-bottom: 2px solid #eee;"> ศรีบุญเรือง</p>
	        </div>
	        <div class="col-sm-4">
                <label >ระดับชั้น </label>
                <p style="border-bottom: 2px solid #eee;"> มัธยมศึกษาปีที่ 6</p>
			</div>
			<div class="col-sm-4">
                <label >จังหวัด</label>
            	<p style="border-bottom: 2px solid #eee;"> ขอนแก่น</p>
			</div> 
		</div>
		<br/><br/>  
		<div class="row" style="text-align:right;font-size:18px;">
			<div class="col-sm-12"> ผู้สมัครร่วม 1</div>
		</div> 
		<hr/>
		<div class="row">
			<div class="col-sm-4">  
                <label >รหัสประจำประชาชน *</label>
                <p style="border-bottom: 2px solid #eee;"> 1254854587548</p>
			</div>
			<div class="col-sm-4"> 
	            <label >เบอร์ติดต่อ *</label>
                <p style="border-bottom: 2px solid #eee;"> 0854511634</p>
            </div>
            <div class="col-sm-4"> 
                <label >อีเมล์ *</label>
            	<p style="border-bottom: 2px solid #eee;"> te.chawat@gmail.com</p>
            </div>
        </div>
		<div class="row" style="padding-top:10px;">
			<div class="col-sm-4"> 
                <label >ชื่อ * </label>
                <p style="border-bottom: 2px solid #eee;"> นายไชยวัฒน์</p>
            </div> 
			<div class="col-sm-4">
                <label >นามสกุล *</label>
                <p style="border-bottom: 2px solid #eee;"> หอมแสง</p>
			</div> 
			<div class="col-sm-4">
                <label >ชื่อเล่น *</label>
                <p style="border-bottom: 2px solid #eee;"> เต้</p>
			</div> 
		</div>
		<div class="row" style="padding-top:10px;">
			<div class="col-sm-4">
                <label >วันเกิด *</label>
                <p style="border-bottom: 2px solid #eee;"> 13/04/2531</p>
			</div> 
			<div class="col-sm-4">
                <label >facebook</label>
            	<p style="border-bottom: 2px solid #eee;"> https://www.facebook.com/te</p>
            </div>  
			<div class="col-sm-4">
                <label >Line ID</label>
            	<p style="border-bottom: 2px solid #eee;"> te_chaiwat</p>
            </div> 
        </div>
		<div class="row" style="padding-top:10px;">
			<div class="col-sm-4">
                <label >โรงเรียน</label>
            	<p style="border-bottom: 2px solid #eee;"> ศรีบุญเรือง</p>
	        </div>
	        <div class="col-sm-4">
                <label >ระดับชั้น </label>
                <p style="border-bottom: 2px solid #eee;"> มัธยมศึกษาปีที่ 6</p>
			</div>
			<div class="col-sm-4">
                <label >จังหวัด</label>
            	<p style="border-bottom: 2px solid #eee;"> ขอนแก่น</p>
			</div> 
		</div>
		<hr/>
		<div class="row" >
			<div class="col-sm-8" style="text-align:right;">จำนวนผู้สมัคร รวม :</div>
	        <div class="col-sm-2"> 
                <p style="border-bottom: 2px solid #eee;text-align:right;"> 2 </p>
			</div>
			<div class="col-sm-2"> 
            	<p> คน</p>
			</div> 
		</div>
		<div class="row" >
			<div class="col-sm-8" style="text-align:right;">จำนวนค่าสมัคร ต่อคน :</div>
	        <div class="col-sm-2"> 
                <p style="border-bottom: 2px solid #eee;text-align:right;"> 7,000.00 </p>
			</div>
			<div class="col-sm-2"> 
            	<p> บาท</p>
			</div> 
		</div>
		<div class="row" >
			<div class="col-sm-8" style="text-align:right;">โปรโมชั่นส์ ส่วนลด :</div>
	        <div class="col-sm-2"> 
                <p style="border-bottom: 2px solid #eee;text-align:right;"> 0.00 </p>
			</div>
			<div class="col-sm-2"> 
            	<p> บาท</p>
			</div> 
		</div>
		<div class="row" >
			<div class="col-sm-8" style="text-align:right;">ยอดเงินที่ต้องชำระ :</div>
	        <div class="col-sm-2"> 
                <p style="border-bottom: 2px solid #eee;text-align:right;"> 14,000.00 </p>
			</div>
			<div class="col-sm-2"> 
            	<p> บาท</p>
			</div> 
		</div>
		
		<hr/> 
		<div class="row">
	        <div class="col-sm-12">
	        	<h4 align='center'><input type="checkbox" name="confirm" value="1" style="padding:10px;" > ข้าพเจ้าตรวจสอบ และยืนยันความถูกต้องของข้อมูลทุกประการณ์ </h4>
	        </div>
	    </div>
		<br/> 
		<div class="row">
			<div class="col-sm-3">
				<a href="<?=base_url()?>register/register_friend"><div  class="btn btn-warning" style="width:40%;margin-left:19%;"> ย้อนกลับ </div></a>
			</div>
			<div class="col-sm-6"></div>
			<div class="col-sm-3" style="text-align:right;">
				<a href="<?=base_url()?>register/register_download/"><div class="btn btn-success" style="width:40%;margin-right:19%"> ขั้นตอนถัดไป </div></a>
			</div>
		</div>
		<br/><br/>
 
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  