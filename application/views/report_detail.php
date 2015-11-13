<?php $this->load->view('header');?>
<style type="text/css">

	body {
		background: #cccccc;
	}

	page[size="A4"] {
		background: white;
		width: 21cm;
		height: 29.7cm;
		display: block;
		margin: 0 auto;
		margin-bottom: 0.5cm;
		box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
	}

	@media print {
		body, page[size="A4"] {
			margin: 0;
			box-shadow: 0;
		}
	}
</style>
<div id="printpage">
	<page size="A4">
		<?php foreach ($get_hdr_id as $regist_hdr): ?>
			<div class='form-group'>

			</div>
			ชื่อ-สกุล <u><b> <?php echo $is_iti = ($regist_hdr->is_iti === '1' ? "นาย" : "นางสาว");?> <?php echo $regist_hdr->firstname . "  &nbsp;&nbsp;  " . $regist_hdr->lastname;?>   </b> </u>&nbsp;
			โรงเรียน <u><b><?php echo $regist_hdr->school;?>  </b></u>&nbsp;
			ระดับชั้น <u><b>ม. <?php echo $regist_hdr->is_class;?> </b></u>&nbsp;
			วัน/เดือน/ปีเกิด <u><b><?php echo $regist_hdr->birth_date;?> </b></u>&nbsp;
			เบอร์โทรศัพท์ <u><b><?php echo $regist_hdr->mobile;?></b></u>&nbsp;
			Facebook <u><b><?php echo $regist_hdr->facebook;?></b></u> &nbsp;
			Email <u><b><?php echo $regist_hdr->email;?></b></u>&nbsp;
			ID: บัตรประชาชน <u><b><?php echo $regist_hdr->idcard;?></b></u>&nbsp;
		<?php endforeach; ?>
		<a href="#" onclick="printdiv()">Print</a>
	</page>
</div>
<a href="#" onclick="printdiv()">Print</a>
<script type="text/javascript" charset="utf-8">
	function printdiv()
	{
		//your print div data
		//alert(document.getElementById("printpage").innerHTML);
		var newstr=document.getElementById("printpage").innerHTML;
		var header='<header><div align="center"><h3 style="color:#EB5005"> Your HEader </h3></div><br></header><hr><br>'
		var footer ="Your Footer";
		//You can set height width over here
		var popupWin = window.open('', '_blank', 'width=1100,height=600');
		popupWin.document.open();
		popupWin.document.write('<html> <body onload="window.print()">'+ newstr + '</html>' + footer);
		popupWin.document.close();
		return false;
	}
</script>
<?php $this->load->view('footer');?>