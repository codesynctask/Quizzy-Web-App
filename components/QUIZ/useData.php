<?php

$file_path_to_read = '../../data/quizDATA.json';

// Read
$jsonString = file_get_contents($file_path_to_read);

//Decoding JSON string => PHP associative array
$jsonDataArray = json_decode($jsonString, true);

$quizArray = $jsonDataArray["results"]

?>
