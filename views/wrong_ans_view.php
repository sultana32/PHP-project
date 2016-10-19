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
	src='http://sultanasproject.x10host.com/sultana/myjs/show.js'></script>
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
					<?php $var=$ndata['i_vul'];
							$wrong=0;
							
							echo "<font color=red size=6 <b><center>Total wrong=".$var."</b></center></font>";
								$var=0;
							echo "<br>";

							?>


					<?php foreach($query as $row):?>





					<?php
											
											// if ans array contains vul ,that means student put wrong ans
											  if(!(strstr($ans_array[$var],'vul',true)==FALSE))
												 {
												echo "<br>"; 
												echo "<br>";
													$wrong++;
													?>
					<font size="4"><b>
							<?echo $wrong?>)
							<tr>
							<tr>
								<?= $row->q_desc;?>
					</b></font> <br> <font size="4"> a) <input type="checkbox">
					<tr>
							<?= $row->q_op1;?>
							<br> b)
							<input type="checkbox">
							<?= $row->q_op2;?>
							<br> c)
							<input type="checkbox">
							<?= $row->q_op3;?>
							<br> d)
							<input type="checkbox">
							<?= $row->q_op4;?>
							<br></font>
					<tr>
					<tr>
					<tr>
						<font size="4">Right ans=
							<tr>
								<?= $row->q_ans;?>
								</b>
						</font>
						<br>
					<tr>
					<tr>
					<tr>
						<font size="4">Your ans=
							<tr>
						</font>
						<?	$vul_ans=strstr($ans_array[$var],'vul',true);
												$length=strlen($vul_ans);
												if($length>1)
												{
													while($length>0)
													{
														echo $vul_ans[$length-1];
														
														$length=$length-1;
														if($length>0)
														{
																echo ",";
														}
													}
												}
												else{
													echo $vul_ans;
												}
														
													echo "<br>";
													
													
													
								
												} 
												
												 
											
										?>


						<?php	$var++;?>
						<?php endforeach;?>


						<?php
										$attributes2 = array('name' => 'form2', 'id' => 'form2');
										echo form_open('du_old_c/wrong_ans',$attributes2);?>
						<input type="submit" name="submit2" value="Wrong ans">
						<?php echo form_close();?>

						<?php
										$attributes3 = array('name' => 'form3', 'id' => 'form3');
										echo form_open('du_old_c/uncheck_ans',$attributes3);?>
						<input type="submit" name="submit3" value="Blank ans">
						<?php echo form_close();?>


						<?php
										$attributes5 = array('name' => 'form5', 'id' => 'form5');
										echo form_open('du_old_c/all_ans',$attributes5);?>
						<input type="submit" name="submit5" value="All ans">
						<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>