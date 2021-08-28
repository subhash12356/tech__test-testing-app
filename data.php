   <?php
   include('connection.php');  //Add Connection string
   
   
$q = "SELECT * FROM reg";
$data = mysqli_query($conn, $q);
$result = mysqli_num_rows($data);
$cnt=0;

while ($row = mysqli_fetch_assoc($data)) {
	$cnt++;
	
	echo "<tr><td>".$cnt."</td>
	<td>".$row['Name']."</td>
	<td>".$row['email']."</td>
	<td>".$row['pass']."</td>
	</tr>";
	
	
}


?>