<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Online exam</title>
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>mycss/bootstrap1.css">
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>mycss/bootstrap2.css">
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
					<?php 
					 $var=5-($ndata['i_vul']+$ndata['i_correct']);   // how many blank
					echo "<font color=blue size=6 <b><center>Total blank=".$var."</b></center></font>";	
							echo "<br>";
							echo "<br>";
					$var=0;
					$wrong=0;
					$temp=5-($ndata['i_vul']+$ndata['i_correct']);
							
					?>
							<?php foreach($query as $row):?>
							
							
							
								
								
										<?php
											
											// if ans array contains z then it was blank by the student, show it
											  if($ans_array[$var]=='z')
												 {
												echo "<br>"; 
												echo "<br>";
													$wrong++;
													?>
										<font size="4"><b><?echo $wrong?>)<tr><tr><?= $row->q_desc;?></b></font> <br>
										<font size="4">
										a) <input type="checkbox"><tr><?= $row->q_op1;?><br>
										b) <input type="checkbox"><?= $row->q_op2;?><br>
										c) <input type="checkbox"><?= $row->q_op3;?><br>
										d) <input type="checkbox"><?= $row->q_op4;?><br>
										</font>
										<tr><tr><tr><font size="4">Right ans=<tr><?= $row->q_ans;?> </b></font><br>
										<?php 
													
													
												
												
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