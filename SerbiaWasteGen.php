<head> 
<link rel="stylesheet" type="text/css" href="serbia.css">
</head>

<body>
<h1> Serbia</h1>
<?php
$con=mysqli_connect('localhost','root','fluffy22','dataScience');
	$sql="SELECT * FROM serbiaWaste ORDER BY TIME DESC";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='list' id='list' class='fields' align='right' height='400' width='800'>";
	echo' <tr>
    <th>Year</th>
	<th>Place</th>
	<th>Type</th>
    <th>Unit</th> 
	<th>Value</th> 
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$TIME=$row['TIME'];
		$GEO=$row['GEO'];
		$WST_OPER=$row['WST_OPER'];
		$UNIT=$row['UNIT'];
		$Value=$row['Value'];
		
	
		echo"<tr><td> $TIME</td>
			<td>  $GEO  </td>
			<td>  $WST_OPER  </td>
			<td>  $UNIT </td> 
			<td>  $Value  </td>	 
			</tr>";
			
	}
	
	echo "</table>";
	mysqli_close($con);
	?><br><br>
<a href="links/serbiaWaste.csv" download>Download CSV</a><br><br>
<a href="links/serbiaWaste.xlsx" download>Download XLSX</a><br><br>
<a href="WasteGen4.php">Back</a>

</body>
</html>