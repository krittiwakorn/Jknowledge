<?php 

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information


$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ระบบลงทะเบียนเรียนออนไลน์');
$pdf->SetTitle('ระบบลงทะเบียนเรียนออนไลน์');
$pdf->SetSubject('ระบบลงทะเบียนเรียนออนไลน์');
$pdf->SetKeywords('TCPDF, PDF, ระบบลงทะเบียนเรียนออนไลน์, test, guide');
/*
// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' test', PDF_HEADER_STRING);
//$pdf->SetHeaderData(สำหรับนักเรียน(ใช้เป็นหลักฐานการสมัครเรียน) โปรดเรียกเก็บค่าธรรมเนียมจากผู้ชำระเงิน');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
*/

// add a page
$pdf->AddPage();
// set font
// $pdf->SetFont('helvetica', '', 14);
$pdf->AddFont('THSarabun','B','THSarabun.php');
$pdf->SetFont('THSarabun','',14);

$pdf->Write(0, 'สำหรับนักเรียน(ใช้เป็นหลักฐานการสมัครเรียน) โปรดเรียกเก็บค่าธรรมเนียมจากผู้ชำระเงิน', '', 0, 'L', true, 0, false, false, 0); //ตำแหน่งซ้ายขวา L,R

$pdf->Ln(1);  //ความก้างของบรรทัด


ob_start();

			// HTML text with soft hyphens (&shy;)
$img_url = base_url().'image/';
$first_name = "<input type='text' name='fname' />";
$html = '
<table width="100%" cellspacing="5" >
	<tr>
		<td align="left" colspan="2" valign="top"><h2> ใบสมัครเรียน </h2></td> 
		<td align="right" colspan="2">
			<img src="'.$img_url.'/logo.jpg " alt=""  width="40px;" height="40px;"><br/>
			<b e:16ppt;"style="font-siz>สถาบันกวดวิชา jknowledge</b><br/>
			<b>123/1203 อาคารยู-พลาซ่า ชั้น 2 หมู่ที่ 16 ถ.มิตรภาพ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น</b>
		</td>
	</tr> 
	<tr >
		<td width="90" align="right">
			<img src="'.$img_url.'/scb.png " alt="" height="50" width="50"> 
		</td>
		<td colspan="3" class="left" >
			ธนาคารไทยพาณิชย์ ประเภทออมทรัพย์<br/>
			เลขบัญชี 793-213146-6<br/>
			ชื่อบัญชี <b>นายสันฐิติ  บุญศรี</b>
		</td>
	</tr>
	<tr> 
		<td colspan="2" width="100%" align="center">
			<br/><br/> สาขา/BRANCH...............................................................................วันที่/DATE...................................................................
		</td>
	</tr>
	<tr height="30" >
		<td colspan="3"  align="right" width="40%">ชื่อโครงกำรที่สมัคร :</td>
		<td class="left" width="40%" style="border: 1px solid #eee;" align="left"> R258110001</td>
	</tr>

	<tr height="50"> 
		<td colspan="3" align="right" width="40%">ชื่อ-นามสกุล :</td>
		<td class="left" style="border: 1px solid #eee;"> นายดิษฐพงษ์ นิลนามะ</td>
	</tr>

	<tr height="50"> 
		<td colspan="3" align="right"  width="40%">รหัสประจำประชาชน :</td>
		<td class="left" style="border: 1px solid #eee;"> 14854785423125</td>
	</tr>

	<tr height="50"> 
		<td colspan="3" align="right" width="40%">เบอร์ติดต่อ :</td>
		<td class="left" width="40%" style="border: 1px solid #eee;"> 0821428742</td>
	</tr>

	<tr height="50"> 
		<td colspan="3" align="right" width="40%">ชื่อ – นามสกุล (ผู้ร่วมสมัคร 1) :</td>
		<td class="left" width="40%" style="border: 1px solid #eee;">แจ๊ค ยุทธนา</td>
	</tr>

	<tr height="50"> 
		<td colspan="3" align="right" width="40%">ชื่อ – นามสกุล (ผู้ร่วมสมัคร 2) :</td>
		<td class="left" width="40%" style="border: 1px solid #eee;">เต้ ไชยวัฒน์</td>
	</tr> 

	<tr height="10"><td colspan="4"></td></tr>
	<tr height="30">
		<td align="left" colspan="3" >จำนวนเงินเป็นตัวอักษร</td> 
		<td align="right">จำนวนเงิน (บาท)</td> 
	</tr>
	<tr height="30">
		<td align="left" colspan="3" style="border: 1px solid #eee;" width="45%">สองหมื่นหนึ่งพันบาทถ้วน</td> 
		<td align="right" style="border: 1px solid #eee;">21,000 บาท</td> 
	</tr>
	<tr height="20"><td colspan="4"></td></tr>
	<tr> 
		<td width="120px" align="left">หมายเหตุ<br/></td>
		<td colspan="4" class="left" >
			1. ใบชำระค่าเรียน 1 ใบต่อ 1 คอร์ส<br/>
			2. ผู้สมัครกรุณากรอกข้อมูลและตรวจสอบความถูกต้องก่อนยื่นชำระเงินที่เคาท์เตอร์ธนาคาร
		</td>
	</tr> 
	<tr>
		<td colspan="4"><br/>ผู้นำฝาก/Deposit by..................................................................................... เจ้าหน้าที่ธนาคาร ............................................................ <hr/></td>
	</tr> 
	<tr><td colspan="4" align="left"><h4>รายละเอียด</h4></td></tr>
	<tr><td colspan="4" align="left"  >
		<p style="font-size:11pt;">&emsp;1. กรุณาชำระเงิน ภายใน 7 วัน หลังการสมัคร หากไม่ชำระตามกำหมด การสมัครนั้นจะถือว่าเป็นโมฆะ <br/>
			&emsp;2. หลังการชำระเงินค่าเรียน กรุณาแจ้งชำระเงินทาง www.jknowledgetutor.com เป็นอันเสร็จสิ้นขั้นตอนการลงทะเบียน
			<br/>&emsp;&emsp;2.1 การแจ้งชำระเงินให้อัฟไฟล์ภาพใบเสร็จที่ชำระเงินแล้วในการแจ้งกำรชำระเงิน
			<br/>&emsp;&emsp;2.2 ให้เก็บใบเสร็จที่ทำการชำระเงินแล้วไว้กับตนเองเพื่อเป็นหลักฐานในการเข้าเรียน
			<br/>&emsp;3. เอกสารนี้ใช้แลกบัตรเข้างานที่โต๊ะลงทะเบียน พร้อมด้วย ใบเสร็จการชำระเงินกับทำงธนาคารและบัตรประจำตัวประชาชน
			<br/>&emsp;4. ประตูเปิดเวลา 08.00 น. (เริ่มรับบัตรเข้างาน 07.30 น.)
			<br/>&emsp;5. แต่งกายด้วยชุดนักเรียนhttp://kyleschaeffer.com/wordpress/wp-content/uploads/2008/09/font-size-1.gif
			<br/>&emsp;6. ห้ามทำเอกสำรนี้หายโดยเด็ดขาด
			<br/>&emsp;7. ผู้เข้าร่วมงานการมีสิทธิลุ้นรับรางวัลพิเศษจากสถาบันกวดวิชา jknowledge</p>

		</td>
	</tr> 
	<tr><td colspan="4" align="left"><h4>ติดต่อสอบถาม</h4></td></tr>
	<tr><td colspan="4" align="left">
		<p style="font-size:11pt;">&emsp;Tel : พี่พล 094-575-4777 Line ID : jtutor4, &nbsp;
		&emsp;Tel : พี่เว 094-575-6777 Line ID : jtutor6, &nbsp;
		&emsp;Tel : พี่มิ้ว 094-575-8777 Line ID : jtutor8, &nbsp;
		&emsp;Tel : พี่ผิง 061-093-7688 Line ID : jknowledge_sisaket , &nbsp;
		&emsp;Tel : พี่คาร์บอม 094-291-4542 Line ID : Cabomz</p>
	</td>
</tr> 
</table>
';

// กำหนด Font กรณีใช้ภาษาไทยใช้ freeserif

$pdf->SetDrawColor(255,0,0);
$pdf->SetTextColor(0,00,'b');

// print a cell
// สร้างเนื้อหาจาก  HTML code  
$pdf->writeHTML( iconv('UTF-8','',$html), true, 0, true, 0);

// ---------------------------------------------------------

//Close and output PDF document
	$pdf->Output('testpdf', 'I');	//load document
//============================================================+
// END OF FILE
//============================================================+
