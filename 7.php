<!DOCTYPE html>
<html>

<head>
	<title>Arkademy</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">
</head>

<body>
	<table class="table table-dark">
		<thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">name</th>
				<th scope="col">person_hobbies</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$conn = mysqli_connect("localhost", "root", "", "arkademy");
				$query="SELECT persons.id, persons.name AS name, GROUP_CONCAT(hobbies.name) AS person_hobbies FROM persons, hobbies WHERE hobbies.person_id = persons.id GROUP BY persons.id ORDER BY name ASC;";
				$result=$conn->query($query);
				while($row=mysqli_fetch_array($result)){
					echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["person_hobbies"] ."</td></tr>";
				}
				echo "</table>";;
			$conn -> close();
			?>
		</tbody>
	</table>
</body>

</html>