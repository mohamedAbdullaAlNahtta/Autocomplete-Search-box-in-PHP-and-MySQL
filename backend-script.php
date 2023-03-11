<?php

// Database configuration 
$dbHost     = "localhost";  //  your hostname
$dbUsername = "root";       //  your table username
$dbPassword = "root";          // your table password
$dbName     = "AutocompleteSearchBoxInPHPAndMySQ";  // your database name
 
// Create database connection 
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 

$searchTerm = $_GET['term'];
$sql = "SELECT * FROM tutorials WHERE tutorial_name LIKE '%".$searchTerm."%'"; 
$result = $conn->query($sql); 
$hint='<li style="border-top: 2px solid #0275d8;margin: 0px 20px 10px 20px;" class="ui-menu-item"><div id="ui-id-17" tabindex="-1" class="ui-menu-item-wrapper"></div></li>';
if ($result->num_rows > 0) {
	
  while($row = $result->fetch_assoc()) {
   $hint.= '<li class="ui-menu-item"><div id="ui-id-17" tabindex="-1" class="ui-menu-item-wrapper"><a href="'.'index.php'.'">'.$row['tutorial_name'].'</a></div></li>';
} 

}else{
	$hint.= '<li class="ui-menu-item"><div id="ui-id-17" tabindex="-1" class="ui-menu-item-wrapper">no suggestion</div></li>';

}

$response=$hint;
//output the response
echo $response;

?>