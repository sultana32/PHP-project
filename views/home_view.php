<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Online Exam</title>
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>mycss/bootstrap1.css">
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>mycss/bootstrap2.css">
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>mycss/vmenu.css">
	<link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/ico">
</head>


<body>
	<?php include('header_view.php'); ?>
	<div class="container">  
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<?php include ('sidebar.php');?>
				</div>
				
				<div class="span9">
				<p> </p>
				</br>
				<p> This is an on line MCQ examination system. It is designed according to the university admission test rules of Bangladesh.</p>
				
				<b>Marking </b> <br>
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Correct answer = 1  <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wrong answer = -.25 <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Every question has 36 seconds
				
				
				</div>
			</div>
		</div>
	</div>
		
</body>
</html>