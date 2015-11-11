<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Bare - Start Bootstrap Template</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?= base_url();?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Bootstrap Datable -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/media/css/jquery.dataTables.css">

	<!-- Custom CSS -->
	<style>
		body {
			padding-top: 70px;
			/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		}
	</style>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

     </head>

     <body>

     	<!-- Navigation -->
     	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     		<div class="container">
     			<!-- Brand and toggle get grouped for better mobile display -->
     			<div class="navbar-header">
     				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
     					<span class="sr-only">Toggle navigation</span>
     					<span class="icon-bar"></span>
     					<span class="icon-bar"></span>
     					<span class="icon-bar"></span>
     				</button>
     				<a class="navbar-brand" href="registration">Start Bootstrap</a>
     			</div>
     			<!-- Collect the nav links, forms, and other content for toggling -->
     			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     				<ul class="nav navbar-nav">
     					<li>
     						<!-- <a href="course">เพิ่มคอร์ส</a> -->
     						<?php echo anchor('registration/course', 'เพิ่มคอร์ส'); ?>
     					</li>
     					<li>
     						<a href="#">เพิ่มแอดมิน</a>
     					</li>
     					<li>
     						<a href="#">รายงาน</a>
     					</li>
     				</ul>
     			</div>
     			<!-- /.navbar-collapse -->
     		</div>
     		<!-- /.container -->
     	</nav>

     	<!-- Page Content -->
     	<div class="container">