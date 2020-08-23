<?php

// Successes Array is a single dimension array having the form
//		[
//			"Successes item #1",
//			"Re-ordered Successes item #3",
//			// "Commented Successes item #2",
//			...
//			"Successes item #n",
//		]

// Order however you want.
$arr_SUC = 
	array(
		// "Maecenas odio dolor, vulputate vel, auctor ac, accumsan id, felis",
		// "Ut mattis ligula posuere velit",
		// "Sed velit urna, interdum vel, ultricies vel, faucibus at, quam",
		"Integer aliquet mauris et nibh",
		"Vivamus vitae massa adipiscing est lacinia sodales",
		"Curabitur varius fringilla nisl",
		// "Mauris eget neque at sem venenatis eleifend",
		// "Cras non magna vel ante adipiscing rhoncus",
		// "In hac habitasse platea dictumst",
		"Duis a quam non neque lobortis malesuada",
		"Fusce in sapien eu purus dapibus commodo",
		"Sed at lorem in nunc porta tristique",
		// "Aliquam nonummy adipiscing augue",
		// "Pellentesque cursus sagittis felis",
		// "Mauris eleifend nulla eget mauris",
		"Donec ut est in lectus consequat consequat",
		"Donec ullamcorper fringilla eros",
		// "Suspendisse dapibus lorem pellentesque magna",
		// "Curabitur posuere quam vel nibh",
		// "Etiam at ligula et tellus ullamcorper ultrices",
		"Maecenas porttitor congue massa",
		"Lorem ipsum dolor sit amet, consectetuer adipiscing elit",
		"Cras faucibus condimentum odio",
		// "Nunc lacus metus, posuere eget, lacinia eu, varius quis, libero",
		"Integer ultrices lobortis eros",
		// "Maecenas pede purus, tristique ac, tempus eget, egestas quis, mauris",
		"Quisque ornare placerat risus",
		"Sed aliquam odio vitae tortor",
	);

// Successes section header
$sec_SUC = '' . 
	"	<tr>\n" . 
	"		<td colspan=6><b><i>Successes</i></b></td>\n" . 
	"	</tr>\n";

// For each success item...
foreach ($arr_SUC as &$eachSuc) {
	$sec_SUC .= '' .
		"	<tr>\n" .
		"		<td></td>\n" . 
		"		<td colspan='5' style='padding-left: 1%;'>$BULLET$eachSuc</td>\n" . 
		"	</tr>\n";
}
// echo $sec_SUC;
?>