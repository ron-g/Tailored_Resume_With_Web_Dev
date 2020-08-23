<?php

// Education Array is an array of objects having the form
//		[
//			'School Name',
//			'Campus',
//			'Date Range',
//			'Location',
//			[
//				'Highlight #3 re-ordered',
//				'Highlight #1',
//				'Highlight #2',
//				//'Commented Highlight #4',
//				'...',
//				'Highlight #n',
//			]
//		],
//		[
//			//Additional education
//		]

// The array is ordered chronologically here.
$arr_EDU = 
	array(
		array(
			'Hogwarts',
			'Main Campus',
			'08/02-05/07',
			'Scotland',
			array(
				"Wizard, 3.4 GPA",
				// "Turned myself into a newt and back again",
				"Turned myself into a newt and back again",
			)
		),
		array(
			'South Harmon Institute of Tech.',
			'Regional Campus',
			'01/09-08/10',
			'Wickliffe, OH',
			array(
				"Graduated August 2010 \"With Distinction\" (4.0 GPA)",
				"Computer Forensics & Information Security” certificate",
				"Associate of Science Degree",
			)
		),
	);

// Order the education newest to oldest
$arr_EDU = array_reverse($arr_EDU);

// Education section header
$sec_EDU = '' . 
	"	<tr>\n" . 
	"		<td colspan=6><b><i>Education</i></b></td>\n" . 
	"	</tr>\n";

// For each school object...
foreach ($arr_EDU as &$eachEdu) {
	$SCHOOL		= $eachEdu[0];
	$CAMPUS		= $eachEdu[1];
	$DATES		= $eachEdu[2];
	$LOCATION	= $eachEdu[3];
	$HIGHLTS	= $eachEdu[4];

	$sec_EDU .= '' .
		"	<tr>\n" . 
		"		<td></td>\n" . 
		"		<td><b>$SCHOOL</b></td>\n" . 
		"		<td>$CAMPUS</td>\n" . 
		"		<td>$LOCATION</td>\n" . 
		"		<td>$DATES</td>\n" . 
		// "		<td>6</td>\n" . 
		"	</tr>\n";

	foreach ($HIGHLTS as &$highlight) {
		$sec_EDU .= '' .
			"	<tr>\n" .
			"		<td></td>\n" . 
			"		<td colspan='5' style='padding-left: 1%;'>$BULLET$highlight</td>\n" . 
			"	</tr>\n";
	}
}
// echo $sec_EDU;
?>