<!DOCTYPE html>
<?php
$BULLET = '»';				// Set your preferred bullet point
require('jobs.php');		// This provides jobs and descriptions
require('edu.php');			// This provides education
require('training.php');	// This provides extra training you've had
require('skills.php');		// This provides extra skills you'd like to advertise
require('successes.php');	// This provides stuff you'd like to highlight about yourself
?>
<html>
<head>
	<meta charset="utf-8"/>
	<link media='screen' rel="stylesheet" type="text/css" href="resume_screen.css"/>
	<link media='print' rel="stylesheet" type="text/css" href="resume_print.css"/>
	<title></title>
</head>
<body>
<center>

<table>
	<tr>
		<th style='width: 02%;'></th><!--- Tweak the percentages to fit your columns, total to 100% --->
		<th style='width: 33%;'></th><!--- Tweak the percentages to fit your columns, total to 100% --->
		<th style='width: 25%;'></th><!--- Tweak the percentages to fit your columns, total to 100% --->
		<th style='width: 20%;'></th><!--- Tweak the percentages to fit your columns, total to 100% --->
		<th style='width: 20%;'></th><!--- Tweak the percentages to fit your columns, total to 100% --->
	</tr>
	<tr>
		<td colspan='6'>
			<!--- Name and contact information --->
			<div class='td_name'>
				Johnathan Q Doe
			</div>
			<div class='td_contact'>
				<!--- Address or general location --->
				<a 
					target='_blank' 
					href='https://goo.gl/maps/arAhmoruak7QaPqn6'>
					&#128205; J648+93 Cleveland, Ohio
				</a>
				<br>
				<!--- Email --->
				<a 
					target='_blank' 
					href='mailto:na@example.com?Subject=Saw%20your%20resume.'>
					&#9993; na@example.com
				</a>
				<br>
				<!--- Phone number --->
				<a 
					target='_blank' 
					href='tel:+15555552160'>
					&#9742; 555-555-2160
				</a>
				<br>
				<!--- Optional Social Media, LinkedIn, GitHub, etc. --->
				<a 
					target='_blank' 
					href='https://www.linkedin.com/in/MyLinkedIn/'>
					<img 
						style='max-width: 16px; max-height: 16px;' 
						src='https://www.linkedin.com/favicon.ico' />
				</a>
				<!--- some sort of separator --->
				&nbsp;&vellip;&nbsp; 
				<a 
					target='_blank' 
					href='https://github.com/MyGitHub'>
					<img 
						style='max-width: 16px; max-height: 16px;' 
						src='https://github.com/favicon.ico'>
				</a>
				<br>
			</div>
		</td>
	</tr>	
	<tr>
		<td colspan='6'><b><i>Objective</i></b></td>
	</tr>
	<tr>
		<td></td>
		<td colspan='5'>
			To apply existing skills & gain new knowledge in a Systems/Network Admin role in an enterprise environment
		</td>
	</tr>

	<?php echo $sec_JOB;?>

	<?php echo $sec_EDU;?>

	<?php echo $sec_TRN;?>

	<?php echo $sec_SKL;?>

	<?php echo $sec_SUC;?>

</table>
</center>
</body>
</html>