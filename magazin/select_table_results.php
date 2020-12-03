<html>
  <head>      
    <title>Afisare date</title>
	<meta http-equiv="refresh" content="55;URL='index.php'" />  
	<style>
		table, td {
		  border: 1px solid green;
		}
	</style>
  </head>
  <body> 
    <div>
		<table>
			<tr>
				<td>Id</td>
				<td>Nume</td>
				<td>Prenume</td>
			</tr>
			<?php 
			include 'connect_dbserver.php';
			 
			$sql = "SELECT idclienti, firstname, lastname FROM myguests";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc())
			{
				echo "<tr><td> ". $row["id"]. " </td><td> ". $row["firstname"]. " </td><td> " . $row["lastname"] . "</td></tr>";
			}
			} else {
				echo "0 results";
			}
			$conn->close();
			
			?>
		<table>
	</div> 
  </body>  
</html>