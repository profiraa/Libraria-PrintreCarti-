<html>
  <head>      
    <title>Afisare date</title>
	<meta http-equiv="refresh" content="55;URL='Despre_Noi.php'" />  
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
                <td>idCarte</td>
				<td>Autor</td>
				<td>Titlu</td>
			</tr>
			<?php 
			include 'connect_dbserver.php';
			 
			$sql = "SELECT idCarte, Autor, Titlu FROM carti";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc())
			{
				echo "<tr><td> ". $row["idCarte"]. " </td><td> ". $row["Autor"]. " </td><td> ". $row["Titlu"]. " </td></tr>";
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