<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Online Exam</title>
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>mycss/bootstrap1.css">
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>mycss/bootstrap2.css">
	<link rel="stylesheet" type="text/css" href="<? echo base_url();?>mycss/vmenu.css">
	<link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/ico">
	<script language="javascript" src='http://sultanasproject.x10host.com/sultana/myjs/jquery.js'></script>
	<script language="javascript" src='http://sultanasproject.x10host.com/sultana/myjs/show.js'></script>

	
	
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
				
				<table class="table table-striped table-bordered table-condensed">
				
				<thead>
        <tr>
            <th></th>
            <th>Marks</th>
            <th>Right</th>
            <th>Wrong</th>
			<th>Blank</th>
        </tr>
    </thead>
	
	<tbody>
        <tr>
            <td>Marks</td>
            <td><?php echo $i_marks;?></td>
            <td><?php echo $i_correct;?></td>
            <td><?php echo $i_vul;?></td>
			<td><?php echo 5-($i_vul+$i_correct);?></td>
        </tr>
        
		
		
		 
		
    </tbody>
  
</table>
<font size="5" color="blue"><b><center>Your position=<?php echo $better+1;?></center></b></font><br><br>


				<table class="table table-striped table-bordered table-condensed">
				
				<thead>
	        		<tr>
	            		<th></th>
	            		<th>Students</th>
	           
	        		</tr>	
   				 </thead>
	
				<tbody>
			        <tr>
			            <td>Total student took this exam</td>
			            <td><?php echo $total+1;?></td>
			        </tr>
			         <tr>
			            <td>Students got same as you</td>
			            <td><?php echo $same;?></td>
			          
			        </tr>
				</tbody>
  
			</table>
				<br>
					
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
