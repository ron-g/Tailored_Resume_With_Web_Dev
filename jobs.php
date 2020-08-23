<?php

// Job Array is an array of objects having the form
//		[
//			'Company Name',
//			'Job Title',
//			'Date Range',
//			'Location',
//			[
//				'Job Description #3 re-ordered',
//				'Job Description #1',
//				'Job Description #2',
//				//'Commented Job Description #4',
//				'...',
//				'Job Description #n',
//			]
//		],
//		[
//			//Additional job
//		]

// The array is ordered chronologically here.
$arr_JOB = 
	array(
		array(
			'Company #1',
			'Manager',
			'02/02-06/11',
			'Cleveland, OH',
			array(
				"Curabitur non eros",
				// "Ut mattis ligula posuere velit",
				"Ut molestie magna at mi",
				// "Aliquam erat volutpat",
				"Duis pretium mi euismod erat",
				// "Quisque aliquam tempor magna",
				"Donec laoreet nonummy augue",
				// "Fusce aliquet pede non pede",
				"Nunc viverra imperdiet enim",
				// "Proin hendrerit tempus arcu",
				"Proin pharetra nonummy pede",
				// "Ut tincidunt volutpat urna",
				"Quisque ornare placerat risus",
				// "Sed aliquam odio vitae tortor",
				"Donec blandit feugiat ligula",
				// "Cras dapibus dapibus nisl",
				"Sed cursus quam id felis",
				// "Suspendisse potenti",
			)
		),
		array(
			'Company #1',
			'Maintenance Technician',
			'06/11-12/12',
			'Cleveland, OH',
			array(
				// "Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis",
				"Vivamus vitae massa adipiscing est lacinia sodales",
				// "Etiam at ligula et tellus ullamcorper ultrices",
				"Donec ut est in lectus consequat consequat",
				// "Duis a quam non neque lobortis malesuada",
				"Nunc lacus metus, posuere eget, lacinia eu, varius quis, libero",
				// "Sed velit urna, interdum vel, ultricies vel, faucibus at, quam",
				"Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
				// "Fusce in sapien eu purus dapibus commodo",
				"Sed at lorem in nunc porta tristique",
				// "Pellentesque cursus sagittis felis",
				"Vestibulum quis dolor a felis congue vehicula",
				// "Suspendisse dapibus lorem pellentesque magna",
				"Mauris eget neque at sem venenatis eleifend",
				// "Cras non magna vel ante adipiscing rhoncus",
				"Mauris eleifend nulla eget mauris",
			)
		),
		array(
			'Company #2',
			'IT Systems Administrator',
			'12/12-07/20',
			'Cleveland, OH',
			array(
				"Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos",
				// "Pellentesque libero lectus, tristique ac, consectetuer sit amet, imperdiet ut, justo",
				"Nunc viverra imperdiet enim",
				"Proin hendrerit tempus arcu",
				// "Donec metus massa, mollis vel, tempus placerat, vestibulum condimentum, ligula",
				// "Pellentesque cursus sagittis felis",
				"Mauris eleifend nulla eget mauris",
				// "Aliquam nonummy adipiscing augue",
				// "Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc",
				"Donec nulla augue, venenatis scelerisque, dapibus a, consequat at, leo",
				"Duis a quam non neque lobortis malesuada",
				// "Fusce in sapien eu purus dapibus commodo",
				"Sed at lorem in nunc porta tristique",
				"Donec ullamcorper fringilla eros",
				// "Nullam hendrerit bibendum justo",
				// "Mauris eget neque at sem venenatis eleifend",
				// "Cras non magna vel ante adipiscing rhoncus",
				"Maecenas pede purus, tristique ac, tempus eget, egestas quis, mauris",
				// "Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis",
				"Nunc lacus metus, posuere eget, lacinia eu, varius quis, libero",
				// "Suspendisse dapibus lorem pellentesque magna",
				"Donec ut est in lectus consequat consequat",
				"Donec elit est, consectetuer eget, consequat quis, tempus quis, wisi",
				// "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus",
				"Fusce aliquet pede non pede",
			)
		),
		array(
			'Company #2',
			'Technology Platforms Manager',
			'07/20-Present',
			'Cleveland, OH',
			array(
				// "In fermentum, lorem non cursus porttitor, diam urna accumsan lacus, sed interdum wisi nibh nec nisl",
				// "Fusce iaculis, est quis lacinia pretium, pede metus molestie lacus, at gravida wisi ante at libero",
				// "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas",
				// "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos",
				"Pellentesque libero lectus, tristique ac, consectetuer sit amet, imperdiet ut, justo",
				// "Donec metus massa, mollis vel, tempus placerat, vestibulum condimentum, ligula",
				"Pellentesque cursus sagittis felis",
				// "Mauris eleifend nulla eget mauris",
				"Aliquam nonummy adipiscing augue",
				"Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc",
				"Donec nulla augue, venenatis scelerisque, dapibus a, consequat at, leo",
				// "Mauris eget neque at sem venenatis eleifend",
				// "Cras non magna vel ante adipiscing rhoncus",
				"Maecenas pede purus, tristique ac, tempus eget, egestas quis, mauris",
				// "Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis",
				"Nunc lacus metus, posuere eget, lacinia eu, varius quis, libero",
				// "Suspendisse dapibus lorem pellentesque magna",
				"Donec ut est in lectus consequat consequat",
				"Donec elit est, consectetuer eget, consequat quis, tempus quis, wisi",
				// "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus",
				"Duis a quam non neque lobortis malesuada",
				// "Fusce in sapien eu purus dapibus commodo",
				// "Sed at lorem in nunc porta tristique",
				"Donec ullamcorper fringilla eros",
				"Nullam hendrerit bibendum justo",
			)
		),
	);

// To display newest to oldest, I reverse the array here
$arr_JOB = array_reverse($arr_JOB);

// Section header
$sec_JOB = '' . 
	"	<tr>\n" . 
	"		<td colspan=6><b><i>Employment</i></b></td>\n" . 
	"	</tr>\n";

// For each job object
foreach ($arr_JOB as &$eachjob) {
	$EMPLOYER	= $eachjob[0];
	$TITLE		= $eachjob[1];
	$DATES		= $eachjob[2];
	$LOCATION	= $eachjob[3];
	$DUTIES		= $eachjob[4];

	$sec_JOB .= '' .
		"	<tr>\n" . 
		"		<td></td>\n" . 
		"		<td><b>$TITLE</b></td>\n" . 
		"		<td>$EMPLOYER</td>\n" . 
		"		<td>$LOCATION</td>\n" . 
		"		<td>$DATES</td>\n" . 
		// "		<td>6</td>\n" . 
		"	</tr>\n";

	foreach ($DUTIES as &$duty) {
		$sec_JOB .= '' .
			"	<tr>\n" .
			"		<td></td>\n" . 
			"		<td colspan='5' style='padding-left: 1%;'>$BULLET$duty</td>\n" . 
			"	</tr>\n";
	}
}
// echo $sec_JOB;
?>