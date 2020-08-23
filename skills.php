<?php

// Skills Array is a single dimension array having the form
//		[
//			"Skills item #1",
//			"Re-ordered Skills item #3",
//			// "Commented Skills item #2",
//			...
//			"Skills item #n",
//		]

// Order however you want.
$arr_SKL = 
	array(
		"Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos",
		// "Sed aliquam odio vitae tortor",
		"Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus",
		// "Ut mattis ligula posuere velit",
		"Nunc viverra imperdiet enim",
		// "Proin hendrerit tempus arcu",
		"Donec metus massa, mollis vel, tempus placerat, vestibulum condimentum, ligula",
		// "Donec nulla augue, venenatis scelerisque, dapibus a, consequat at, leo",
		"Quisque ornare placerat risus",
		// "Donec blandit feugiat ligula",
		"Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc",
		// "Proin pharetra nonummy pede",
		"Pellentesque libero lectus, tristique ac, consectetuer sit amet, imperdiet ut, justo",
		// "Duis pretium mi euismod erat",
		"Quisque aliquam tempor magna",
		// "Donec laoreet nonummy augue",
	);

// Skill section header
$sec_SKL = '' . 
	"	<tr>\n" . 
	"		<td colspan=6><b><i>Skills</i></b></td>\n" . 
	"	</tr>\n";

// For each skill...
foreach ($arr_SKL as &$eachSkl) {
	$sec_SKL .= '' .
		"	<tr>\n" .
		"		<td></td>\n" . 
		"		<td colspan='5' style='padding-left: 1%;'>$BULLET$eachSkl</td>\n" . 
		"	</tr>\n";
}
// echo $sec_SKL;
?>