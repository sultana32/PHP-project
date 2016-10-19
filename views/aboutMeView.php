<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Online Exam</title>
<link rel="stylesheet" type="text/css"
	href="<? echo base_url();?>mycss/bootstrap1.css">
<link rel="stylesheet" type="text/css"
	href="<? echo base_url();?>mycss/bootstrap2.css">

<link rel="stylesheet" type="text/css"
	href="<? echo base_url();?>mycss/vmenu.css">
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
					<p></p>
					</br> <b>I'm giving my linked in profile link <a
						href="<?php echo 'https://www.linkedin.com/in/sultanarashid'; ?>"
						target="_blank">here</a><br> <b> <br> <br> and
							<b>Here is a 2 minute video on me.</b> <br> <br> <iframe
								width="560" height="315"
								src="https://www.youtube.com/embed/6jUI7thp-S4" frameborder="0"
								allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

</body>
</html>