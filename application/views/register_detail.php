<?php $this->load->view('header_register');?>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading" style="font-size:25px;">สมัครเรียนออนไลน์ - รายละเอียด</div>
		<div class="panel-body">
		<!-- insert register  -->
		<?php echo form_open('Registration/insert_register','class="form-horizontal " role="form"');?>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group">
	                <label >เลขที่ใบสมัคร *</label>
	                <input type="text" id="idcard" name="idcard" class="form-control" style="font-size: 20px; height:40px;" value="R258110001" disabled>
            	</div>
            	<div class="form-group">
	                <label >รหัสประจำประชาชน *</label>
	                <input type="text" id="idcard" name="idcard" class="form-control" style="font-size: 20px; height:40px;" value="14854785423125" disabled>
            	</div>
				<div class="form-group">  
	                <label >ชื่อ *  
	                	<input type="radio" name="is_iti1" value="1"  checked> นาย 
	                	<input type="radio" name="is_iti1" value="2"> นางสาว 
	                </label>
	                <input type="text" id="firstname" name="firstname" class="form-control" style="font-size: 20px; height:40px;" value="ดิษฐพงษ์" disabled>
            	</div>
				<div class="form-group">
	                <label >นามสกุล *</label>
	                <input type="text" id="lastname" name="lastname" class="form-control" style="font-size: 20px; height:40px;" value="นิลนามะ" disabled>
            	</div>
				<div class="form-group">
	                <label >ชื่อเล่น *</label>
	                <input type="text" id="nickname" name="nickname" class="form-control" style="font-size: 20px; height:40px;" value="โอ๋" disabled>
            	</div>
				<div class="form-group">
	                <label >วันเกิด *</label>
	                <input type="text" id="birth_date" name="birth_date" class="form-control" style="font-size: 20px; height:40px;" value="11/11/2540"  disabled>
            	</div>
				<div class="form-group">
		            <label >เบอร์ติดต่อ *</label>
	                <input type="text" id="mobile" name="mobile" class="form-control" style="font-size: 20px; height:40px;" value="0821428742" disabled>
            	</div> 
				<div class="form-group">
	                <label >อีเมล์ *</label>
                	<input type="email" id="email" name="email" class="form-control" style="font-size: 20px; height:40px;" value="aostudio.nilnama@gmail.com" disabled>
            	</div>
				<div class="form-group">
	                <label >facebook</label>
                	<input type="text" id="facebook" name="facebook" class="form-control" style="font-size: 20px; height:40px;" value="https://www.facebook.com/dittaphong" disabled>
            	</div>
				<div class="form-group">
	                <label >Line ID</label>
                	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" value="DN_001" disabled>
            	</div>
				<div class="form-group">
	                <label >โรงเรียน</label>
                	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" value="โรงเรียนบ้านดอนข่า"  disabled>
            	</div>
				<div class="form-group">
	                <label >ระดับชั้น </label>
	                <select name="_id_course" class="form-control" style="font-size: 20px; height:40px;" disabled>
	                	<option value="sel" > -- เลือก -- </option>
					    <option value="1">มัธยมศึกษาปีที่ 1</option>
					    <option value="2">มัธยมศึกษาปีที่ 2</option>
					    <option value="3">มัธยมศึกษาปีที่ 3</option>
					    <option value="4">มัธยมศึกษาปีที่ 4</option>
					    <option value="5">มัธยมศึกษาปีที่ 5</option>
					    <option value="6" selected>มัธยมศึกษาปีที่ 6</option>
					</select>  
            	</div>
				<div class="form-group">
	                <label >จังหวัด</label>
                	<select name="id_province" class="form-control" style="font-size: 20px; height:40px;" disabled>
	                	<option value="sel" > -- เลือก -- </option>
					    <option value="1" selected>ขอนแก่น</option> 
					</select>
            	</div>
				<div class="form-group">
	                <label >คอร์สที่สมัครเรียน</label>
	                <select name="id_course" class="form-control" style="font-size: 20px; height:40px;" disabled>
	                	<option value="sel" > -- เลือก -- </option>
					    <option value="1" selected>คอร์สภาษาอังกฤษ ม.6</option> 
					</select>  
            	</div>
            	<div class="form-group">
	                <label >ค่าสมัคร</label>
                	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" value="7,000.00" disabled>
            	</div>
			</div>
			<div class="col-sm-3"></div> 
		</div>   
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<hr style="margin-left:-15px;margin-right:-15px;"> 
				<div class="form-group " style="text-align:right;"> 
					ผู้ร่วมสมัคร 1  
				</div>
				<div class="form-group ">  
	                <label>ชื่อ *  
	                	<input type="radio" name="is_iti" value="1"  checked> นาย 
	                	<input type="radio" name="is_iti" value="2"> นางสาว 
	                </label>
	                <input type="text" id="firstname" name="firstname" class="form-control" style="font-size: 20px; height:40px;" value="เต้" disabled>
				</div>
				<div class="form-group ">  
	                <label>นามสกุล *</label>
	                <input type="text" id="firstname" name="firstname" class="form-control" style="font-size: 20px; height:40px;" value="ไชยวัฒน์" disabled>
				</div>
				<div class="form-group">
	                <label >โรงเรียน</label>
                	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" value="โรงเรียนบ้านดอนข่า" disabled>
            	</div>
            	<div class="form-group">
	                <label >ระดับชั้น </label>
	                <select name="_id_course" class="form-control" style="font-size: 20px; height:40px;" disabled>
	                	<option value="sel" > -- เลือก -- </option>
					    <option value="1">มัธยมศึกษาปีที่ 1</option>
					    <option value="2">มัธยมศึกษาปีที่ 2</option>
					    <option value="3">มัธยมศึกษาปีที่ 3</option>
					    <option value="4">มัธยมศึกษาปีที่ 4</option>
					    <option value="5">มัธยมศึกษาปีที่ 5</option>
					    <option value="6" selected>มัธยมศึกษาปีที่ 6</option>
					</select>  
            	</div>
            	<div class="form-group">
	                <label >จังหวัด </label>
	                <select name="_id_course" class="form-control" style="font-size: 20px; height:40px;" disabled>
	                	<option value="sel" > -- เลือก -- </option>
					    <option value="1" selected>ขอนแก่น</option> 
					</select>  
            	</div>
            	<div class="form-group">
	                <label >ค่าสมัคร</label>
                	<input type="text" id="line_id" name="line_id" class="form-control" style="font-size: 20px; height:40px;" value="7,000.00" disabled>
            	</div>
            	<hr style="margin-left:-15px;margin-right:-15px;"> 
			</div>
			<div class="col-sm-3"></div> 
		</div> 
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="form-group" style="text-align:center">
					<button type="submit" class="btn btn-success" style="width:40%;"> กลับหน้าหลัก </button>  			
            	</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
		<?php echo form_close();?>
	</div> <!-- ./ end panel -->
</div> <!-- ./ end div.row --> 
<?php $this->load->view('footer');?>  