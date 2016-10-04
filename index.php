<?php

	echo 'hello world';
	//this is how you store a value in a variable
	$myvar = 'Some Text I want to store in a varible';

	//this is an example of the difference between sinle quotes and double quote
	echo '<br>';
	echo '$myvar';
	echo '<br>';
	echo "$myvar"

	//this is an example of php array

	$myarray = array();
	$myarray[] = 'some value 1';
	$myarray[] = 'some value 2';
	$myarray[] = 'some value 3';

	print_r($myarray);
	//this is an example of an associative array and a nested array
	$myAssoc = array('value1' => $myarray, 'value 2' => $myarray);

	print_r($myAssoc);


