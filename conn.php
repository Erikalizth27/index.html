
<!DOCTYPE html>
<html>

	<h1> Patients Records</h1>
<body>
<?php

$username = 'elr22';
$password = 'DCPdrQfW';
$hostname = 'mysql01.ucs.njit.edu';
$dsn = "mysql:host=$hostname;dbname=$username";
$vars;
try {
    $conn = new PDO($dsn, $username, $password);
    "Connected successfully<br>";

	    		$item = 0;
				foreach($conn->query('SELECT * from Records') as $row) {
		        $vars[$item][0] = $row[0];
		        $vars[$item][1] = $row[1];
		        $vars[$item][2] = $row[2];
		        $vars[$item][3] = $row[3];
		        $vars[$item][4] = $row[4];
		        $vars[$item][5] = $row[5];
		        $item = $item + 1;

}


} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
		
		echo (sizeof($vars).'   Patients Records' );
		
		echo '<table border="1">';
		echo '<tr>';
		echo '<th id="idRecords">idRecords</th>';
		echo '<th id="Patient Name">Patient NameL</th>';
		echo '<th id="Patient Email Address">Patient Email Address</th>';
		echo '<th id="Patient Doctor">Patient DoctorL</th>';
		echo '<th id="Patient Appoiment Date">Patient Appoiment Date</th>';
		echo '<th id="Patient Medical Record">Patient Medical Record</th>';
		echo '</tr>';
		
		foreach ($vars as $value) {			
			echo '<tr>';
 			echo '<td>'.$value[0].'</td>';
 			echo '<td>'.$value[1].'</td>';
 			echo '<td>'.$value[2].'</td>';
 			echo '<td>'.$value[3].'</td>';
 			echo '<td>'.$value[4].'</td>';
 			echo '<td>'.$value[5].'</td>';
 			echo '</tr>';			
 		}
		echo '</table>';
?>

</body>
</html>

