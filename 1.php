<?php
$name = "Andika Bayu Santoso";
$address = "Pasir Lor RT05/04";
$hobbies = array('Playing a Game', 'Listening Music');
$is_married = false;
$school  = [ 
    'highscool' => 'SMK Telkom Purwkerto',
    'university' => '-' 
];
$skills = [
    'Web' => ['Front End'],
    'Mobile' => ['Native,ReactNative']
];

function biodata($name, $address, $hobbies, $is_married, $school, $skills){
	return json_encode(array(
	'name' => $name,
	'adress' => $address,
	'hobbies' => $hobbies,
	'is_married' => $is_married,
	'school' => $school,
	'skills' => $skills ),JSON_PRETTY_PRINT);
}
	echo biodata($name, $address, $hobbies, $is_married, $school, $skills);
?>