<table border='1'>
	<tr>
		<td><strong>Rectangle 1:</strong> Reece Wisdom 17033849
	</tr>
	
	<tr>
		<td><strong>Rectangle 2:</strong>
			<?php
				//Set Variables for server, user, password, database
				$server="localhost";
				$user="root";
				$password="";
				$database="sqlReece";
				
				//Setup connection
				$connect = new mysqli($server,$user,$password,$database);
				
				//Create SQL query
				$sql= "SELECT * FROM lab2 WHERE id = '13'";
				
				//Setup the query and store as result
				$result = $connect->query($sql);
				
				//If the query fails throw an error
				if(!$result){ die("Invalid query:" . $connect->error); }
				if ($result->num_rows> 0) {
				
				//create a table
				echo "<table><tr><th>ID</th><th>Username</th></tr>";
				
				//output data of each row
				while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td></tr>";     }    
				echo "</table>";
				} 
				else{echo "0 results";}
				
				//Close the connection
				//$connect->close();
			?>
	</tr>
	
	<tr>
		<td><strong>Rectangle 3:</strong>
			<?php
				//Create SQL query
				$sql= "SELECT * FROM lab2 WHERE password = 'e75032a5c757011c1ea2a68102025ccd'";
				
				//Setup the query and store as result
				$result = $connect->query($sql);
				
				//If the query fails throw an error
				if(!$result){ die("Invalid query:" . $connect->error); }
				if ($result->num_rows> 0) {
				
				//create a table
				echo "<table><tr><th>ID</th><th>Password</th></tr>";
				
				//output data of each row
				while($row = $result->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["password"]."</td></tr>";     }    
				echo "</table>";
				} 
				else{echo "0 results";}
			?>
	</tr>
	
	<tr>
		<td><strong>Rectangle 4:</strong>
		<?php
			//Create SQL query
			$sql= "SELECT * FROM lab2 WHERE name = 'Wallace  Jerome A.'";
			
			//Setup the query and store as result
			$result = $connect->query($sql);
			
			//If the query fails throw an error
			if(!$result){ die("Invalid query:" . $connect->error); }
			if ($result->num_rows> 0) {
			
			//create a table
			echo "<table><tr><th>Name</th><th>Password</th></tr>";
			
			//output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["name"]."</td><td>".$row["password"]."</td></tr>";     }    
			echo "</table>";
			} 
			else{echo "0 results";}
		?>
	</tr>
	
	<tr>
		<td><strong>Rectangle 5:</strong>
		<?php
			//Create SQL query
			$sql= "SELECT * FROM lab2 WHERE regnum < 100";
			
			//Setup the query and store as result
			$result = $connect->query($sql);
			
			//If the query fails throw an error
			if(!$result){ die("Invalid query:" . $connect->error); }
			if ($result->num_rows> 0) {
			
			//create a table
			echo "<table><tr><th>Name</th><th>RegNum</th></tr>";
			
			//output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["name"]."</td><td>".$row["regnum"]."</td></tr>";     }    
			echo "</table>";
			} 
			else{echo "0 results";}
		?>
	</tr>
