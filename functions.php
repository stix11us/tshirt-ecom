<?php  

function mimic_count($array) {
	$count = 0;
	foreach($array as $element) {
		$count = $count + 1;
	}
	return $count;
}

$flavors = array("Vanilla", "Chocolate", "Strawberry", "Cookie Dough");
$count = mimic_count($flavors);
echo $count;



?>