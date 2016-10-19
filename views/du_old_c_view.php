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
<script language="javascript"
	src='http://sultanasproject.x10host.com/sultana/myjs/jquery.js'></script>
<script language="javascript"
	src='http://sultanasproject.x10host.com/sultana/myjs/exam.js'></script>


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

					<font size="6" color="blue"><b><center>
								<?php echo "Exam: " . $this->session->userdata('xam_id'). "<br>";?>
							</center></b></font> <br>
					<div>
						<font size="4" color="blue"><i><center>
									Your remaining time <span id="time"></span> minutes!
								</center></i></font> <br>
						<?php
$var=0;
$q_count=0;
$attributes = array('name' => 'form1', 'id' => 'form1');

echo form_open('du_old_c/check_ans',$attributes);  // form to show ques?>



						<?php foreach($query as $row):               // show all ques by for loop ?>
						<?php	$var++; 
		$q_count++;
		$items=(string)$var;
		$fqno='ques'.$items.'[]';
		$hiden='h'.$items;
		?>

						<?php
			if ($var<26)
			{
 
?>
						<?echo $q_count;?>
						)
						<tr>
						<tr>
							<font size="4"><b>
									<?= $row->q_desc;?>
							</b></font>
							<br>
							<font size="4"> a) <input type="checkbox"
								name="<?php echo $fqno;?>" value="1">
							<tr>
									<?= $row->q_op1;?>
									<br> b)
									<input type="checkbox" name="<?php echo $fqno;?>" value="2">
									<?= $row->q_op2;?>
									<br> c)
									<input type="checkbox" name="<?php echo $fqno;?>" value="3">
									<?= $row->q_op3;?>
									<br> d)
									<input type="checkbox" name="<?php echo $fqno;?>" value="4">
									<?= $row->q_op4;?>
									<br></font>
							<br>
							<?php
			}
 
?>








							<?php endforeach;?>

							<input type="submit" name="mysub" value="End xam">

							<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
</body>
</html>