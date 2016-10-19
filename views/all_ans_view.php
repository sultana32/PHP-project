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

				<div class="span9">    <!--show all ques by for loop-->
					<?php $var=0; ?>
					<?php foreach($query as $row):?>




					<? 
										
										echo $var+1; ?>  <!--ques no to show-->
					)
					<tr>
					<tr>
						<font size="4"><b>
								<?= $row->q_desc;?> <!--ques description-->
						</b></font>
						<br>
						<font size="4"> a) <input type="checkbox">  <!--4 check boxes to show options-->
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
						<font size="4">Right ans=
							<tr>
								<?= $row->q_ans;?>
								,
						</font>
					<tr>
					<tr>
						<font size="4">Your ans=
							<tr>
								<?php
											/* if the ans is not wrong and ans is not blank */
											if((strstr($ans_array[$var],'vul',true)==FALSE) && ($ans_array[$var]!='z'))
											{
												
													echo $ans_array[$var];
											}
											/* if the ans contains vul that means wrong */
											 else if(!(strstr($ans_array[$var],'vul',true)==FALSE))
												 {
													$vul_ans=strstr($ans_array[$var],'vul',true);
													echo $vul_ans;
												 }
											/* if the ans is blank */
											else if($ans_array[$var]=='z')
												 {
													
													echo "Blank";
												 }
										?>

								<br>
								<br>
								<?$var++;?>
								<?php endforeach;?>

								
								<?php
								/* show wrong ans */
										$attributes2 = array('name' => 'form2', 'id' => 'form2');
										echo form_open('du_old_c/wrong_ans',$attributes2);?>
								<input type="submit" name="submit2" value="Wrong ans">
								<?php echo form_close();?>

								<?php
								/* show blank ans */
										$attributes3 = array('name' => 'form3', 'id' => 'form3');
										echo form_open('du_old_c/uncheck_ans',$attributes3);?>
								<input type="submit" name="submit3" value="Blank ans">
								<?php echo form_close();?>


								<?php
								/* show all ans */
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