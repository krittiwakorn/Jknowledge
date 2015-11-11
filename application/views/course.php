<?php $this->load->view('header');?>
<style type="text/css">
	.error {
		color: red;
		position:absolute;
		display: inline;
	}
</style>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">	Course	</div>
		<div class="panel-body">
			<?php echo form_open('Registration/insert_course','class="form-horizontal" role="form"');?>
			<div class="form-group col-sm-12 ">
				<label for="course_code" class="col-sm-2 control-label">course code:</label>
				<div class="col-sm-4">
					<input type="numeric" class="form-control" id="course_code" name="course_code" value="<?php echo set_value('course_code');?>" max='11' />
					<?php echo form_error('course_code','<span class="label label-warning">','</span>');?>
				</div>

				<label for="course_name" class="col-sm-2 control-label">couse name:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="course_name" name="course_name" />
					<?php echo form_error('course_name','<span class="label label-warning">','</span>');?>
				</div>
			</div>
			<div class="form-group col-sm-12 ">
				<label for="status" class="col-sm-2 control-label">status:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="status" name="status" />
					<?php echo form_error('status','<span class="label label-warning">','</span>');?>
				</div>

				<label for="comment" class="col-sm-2 control-label">comment:</label>
				<div class="col-sm-4">
					<textarea class="form-control" name="comment" id="comment" >
					</textarea>
					<?php echo form_error('comment','<span class="label label-warning">','</span>');?>
				</div>
			</div>
			<div class="form-group pull-right">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="reset" class="btn btn-default">RESET</button>
					<button type="submit" class="btn btn-default">SAVE</button>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
	</div> <!-- ./ end panel -->
	<hr/>
	<div class="row">
		<table class="display" cellspacing="0" width="100%">
			<caption>จัดการคอร์สเรียน</caption>
			<thead  >
				<tr>
					<th >คอร์สเรียน</th>
					<th>สถานะ	</th>
					<th>คอมเม้น</th>
					<th>แก้ไข</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>data</td>
					<td>data</td>
					<td>data</td>
					<td class="col-md-2">
						<?php echo anchor('#', 'แก้ไข','class="btn btn-warning"');?>
						 &nbsp;&nbsp;
						<?php echo anchor('#', 'ลบ','class="btn btn-danger"');?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div> <!-- ./ div row -->
<?php $this->load->view('footer');?>