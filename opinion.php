<?php
$con=mysqli_connect('localhost','root','fluffy22','datascience');

if (isset($_POST['submit'])) 
{
$name=$_POST['name'];
$opinion=$_POST['opinion'];






$sql= "INSERT INTO opinion (name,opinion)
Values ('$name','$opinion')";
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Activity Added Successfully')
        window.location.href='opinion.php'
        </SCRIPT>");
if (!mysqli_query($con,$sql))  {
	die('Error: ' . mysqli_error($con));
	
}

}

 
mysqli_close($con);

?>

<html>
    <head>
	<link rel="stylesheet" type="text/css" href="Outcome2.css">
        <title>Add Opinion</title>
    </head>
    <body>
        
        <form method="post" action="opinion.php">
		<h1>Add Opinion</h1>
<br><br><b><label style="background-color:white;font-size:36px;">Name</label></b><br><input type="text" name="name" class="textbox"><br><br><br>
<br><br><b><label style="background-color:white;font-size:36px;">Opinion</b></label><br><textarea name = "opinion" id ="opinion" cols="15" rows="5"></textarea>
<br><br><br>
<input type="submit" name="submit"value="Submit Details" class="btn2"><br><br><br>
<button><a href="joined.php">Go Back</button></a><br><br>
</form>


    
    </body>

</html>
<?php
$con=mysqli_connect('localhost','root','fluffy22','datascience');
	$sql="SELECT * FROM opinion ";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><br><table name='qualiferlist' id='qualifierlist' class='fields'>";
	echo' <tr>
    <th>Name</th>
	<th>Opinion</th>
	 
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$name=$row['name'];
		$opinion=$row['opinion'];

		echo"<tr><td> $name</td>
			<td>  $opinion   </td> 
			</tr>";
			
	}
	
	echo "</table>";
	mysqli_close($con);
	?>