<?php $this->load->view('header_register');?>
<div class="row" style="margin-top:-30px;">
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-size:25px;">แจ้งการชำระเงิน</div>
		<div class="panel-body">
		<!-- insert register  --> 
		<br><br><br><br>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<input type="text" id="idcard" name="idcard" class="form-control" style="font-size: 20px; height:60px;" required="required" placeholder='--กรอกรหัสประจำตัวประชาชน--'>
			</div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row" style="margin-top:30px;">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<label >คอร์สที่สมัคร</label>
		 		<p>&emsp;&emsp;<input type="radio" name="id_course" value="1"  checked> BIG J DAY<br> </p>
	            <p>&emsp;&emsp;<input type="radio" name="id_course" value="2"> J SUMMER CAMP 2016 -- J MED Camp<br> </p>
	            <p>&emsp;&emsp;<input type="radio" name="id_course" value="2"> J SUMMER CAMP 2016 -- J KKU Camp<br> </p>
	        </div>
			<div class="col-sm-3"></div> 
		</div>
		<div class="row" style="margin-top:40px;">
			<div class="col-sm-3"></div>
			<div class="col-sm-6" style="text-align:center;"> 
				<a href="<?=base_url()?>Register/register_check_status/"><button class="btn btn-warning" style="width:100%;height:70px;font-size:40px;"> ค้นหา </button></a>		
			</div>
			<div class="col-sm-3"></div>
		</div>
		<br><br><br><br> 
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  