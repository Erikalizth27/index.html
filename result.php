<?php 
require('conection.php');
foreach($conn->query('SELECT id,email from accounts WHERE id < 6') as $row) {
print_r($row) ;
echo "<br>";
	       