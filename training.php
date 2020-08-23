<?php

// Training Array is a single dimension array having the form
//		[
//			"Training item #1",
//			"Re-ordered Training item #3",
//			// "Commented Training item #2",
//			...
//			"Training item #n",
//		]

// Order however you want.
$arr_TRN = 
	array(
		"Cras non magna vel ante adipiscing rhoncus",
		// "Fusce in sapien eu purus dapibus commodo",
		"Sed at lorem in nunc porta tristique",
		// "Pellentesque cursus sagittis felis",
		"Mauris eleifend nulla eget mauris",
		// "Donec ut est in lectus consequat consequat",
		"Aliquam nonummy adipiscing augue",
		// "Donec ullamcorper fringilla eros",
		"In hac habitasse platea dictumst",
		"Duis a quam non neque lobortis malesuada",
		// "Curabitur posuere quam vel nibh",
		"Curabitur varius fringilla nisl",
	);

// Training section header
$sec_TRN = '' . 
	"	<tr>\n" . 
	"		<td colspan=6><b><i>Training</i></b></td>\n" . 
	"	</tr>\n";

// For each training item...
foreach ($arr_TRN as &$eachTrn) {
	$sec_TRN .= '' .
		"	<tr>\n" .
		"		<td></td>\n" . 
		"		<td colspan='5' style='padding-left: 1%;'>$BULLET$eachTrn</td>\n" . 
		"	</tr>\n";
}
// echo $sec_TRN;
?>