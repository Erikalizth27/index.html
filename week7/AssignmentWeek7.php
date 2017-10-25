
<!DOCTYPE html>
<html>
<body>
	<?php 
		echo "<h1>PDO demo!</h1>";
	$username = 'elr22';
	$password = 'DCPdrQfW';
	$hostname = 'mysql01.ucs.njit.edu';
	$dsn = "mysql:host=$hostname;dbname=$username";
	$vars;
	try {
		$conn = new PDO($dsn, $username, $password);
		echo "Connected successfully<br>";
		
		$item = 0;

			foreach($conn->query('SELECT id,email from accounts WHERE id < 6') as $row) {
	        $vars[$item][0] = $row[0];
	        $vars[$item][1] = $row[1];
	        $item = $item + 1;

    }


	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
		$conn = null;
		
		echo 'Result: '.(sizeof($vars));	    
		echo '<table border="1">';
		echo '<tr>';
		echo '<th id="id">ID</th>';
		echo '<th id="email">EMAIL</th>';
		echo '</tr>';
		

		foreach ($vars as $value) {			
			echo '<tr>';
 			echo '<td>'.$value[0].'</td>';
 			echo '<td>'.$value[1].'</td>';
 			echo '</tr>';			
 		}
		echo '</table>';
 		
	?>	

</body>
</html>







