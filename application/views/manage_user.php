<?php $this->load->view('header');?>
<div class="container">
	<section >
		<div class="panel panel-primary">
			<div class="panel-heading"> จัดการสิทธิ์	</div>
			<div class="panel-body">
				<table id="" class="display" cellspacing="0" width="100%">
					<thead>
						<th>ที่</th>
						<th>ชื่อ</th>
						<th>สกุล</th>
						<th>อีเมลล์</th>
						<th>เพศ</th>
						<th>จัดการสิทธิ์</th>
					</thead>
					<tbody>
						<?php
						$number =  count($get_users);
						foreach ($get_users as $key_users => $row_users) {
							$user_status = ($row_users->user_status === 'committee'? "checked":"");
							?>
							<tr>
								<td><?php echo $number-- ;?></td>
								<td><?php echo $row_users->user_first_name;?></td>
								<td><?php echo $row_users->user_last_name;?></td>
								<td><?php echo $row_users->user_email;?></td>
								<td><?php echo $row_users->user_gender;?></td>
								<td>
									<form class="check_status" name="check_status">
										<input type="hidden" name="user_id" id="user_id" value="<?php echo $row_users->user_id;?>"/>
										<input type="hidden" name="user" id="user" value="<?php echo $row_users->user_first_name;?>"/>
										<input type="checkbox" id="my-checkbox" name="my-checkbox" <?php echo $status = ($row_users->user_status === 'admin'? "checked":"");?>/>
									</form>
								</td>
							</tr>
							<?php }  ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>

	<?php $this->load->view('footer');?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("[name = 'my-checkbox']").bootstrapSwitch({ onSwitchChange : function(e,s){
				if(s){
					$.ajax({
						url: "<?php echo site_url('Registration/manage_status');?>",
						type: "POST",
						data: $(this).closest('form').serialize(),
					}).success(function(data){
						alert("อัพเดทสถานะแล้ว");
					//alert(data);
				});
				}else{
					$.ajax({
						url: "<?php echo site_url('Registration/manage_status');?>",
						type: "POST",
						data: $(this).closest('form').serialize(),
					}).success(function(data){
						alert("ยกเลิกสถานะแล้ว");
					// alert(data);
				});
				}
			}
		});
		});
	</script>