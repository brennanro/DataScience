<head> 
<link rel="stylesheet" type="text/css" href="Outcome.css">
</head>

<body>
<h1> Are Countries Sufficiently dealing with waste?</h1><br>
<?php
$con=mysqli_connect('localhost','root','fluffy22','dataScience');
	$sql="SELECT * FROM joinedtwo";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='list' id='list' class='fields' align='right' height='400' width='800'>";
	echo' <tr align="right">
    <th>Time</th>
	<th>Country</th>
	<th>Waste Gen Value(kg Per Capita)</th>
    <th>Recycle Value(kg Per Capita)</th> 
	<th>Compost Value(kg Per Capita)</th> 
	<th>Incineration Value(kg Per Capita)</th> 
	<th>Landfill Value(kg Per Capita)</th> 
	<th> Total Waste Unaccounted for</th>
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$TIME=$row['TIME'];
		$GEO=$row['GEO'];
		$Value=$row['Value'];
		$Value_from_ES2=$row['Value_from_ES2'];
		$Value_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2_from_ES2'];
		$Total=$row['Total'];
		
	
		echo"<tr><td> $TIME</td>
			<td>  $GEO  </td>
			<td>  $Value  </td>	 
			<td> $Value_from_ES2</td>
			<td>  $Value_from_ES2_from_ES2 </td>
			<td>  $Value_from_ES2_from_ES2_from_ES2  </td>	
			<td>  $Value_from_ES2_from_ES2_from_ES2_from_ES2  </td>	
			<td> $Total</td>
			</tr>";
			
	}
	
	echo "</table>";
$con=mysqli_connect('localhost','root','fluffy22','dataScience');
	$sql="SELECT * FROM joined";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='list' id='list' class='fields' align='right' height='400' width='800'>";
	echo' <tr align="right">
    <th>Time</th>
	<th>Country</th>
	<th>Waste Gen Value(kg Per Capita)</th>
    <th>Recycle Value(kg Per Capita)</th> 
	<th>Compost Value(kg Per Capita)</th> 
	<th>Incineration Value(kg Per Capita)</th> 
	<th>Landfill Value(kg Per Capita)</th> 
	<th> Total Waste Unaccounted for</th>
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$TIME=$row['TIME'];
		$GEO=$row['GEO'];
		$Value=$row['Value'];
		$Value_from_ES2=$row['Value_from_ES2'];
		$Value_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2_from_ES2'];
		$Total=$row['Total'];
		
	
		echo"<tr><td> $TIME</td>
			<td>  $GEO  </td>
			<td>  $Value  </td>	 
			<td> $Value_from_ES2</td>
			<td>  $Value_from_ES2_from_ES2 </td>
			<td>  $Value_from_ES2_from_ES2_from_ES2  </td>	
			<td>  $Value_from_ES2_from_ES2_from_ES2_from_ES2  </td>	
			<td> $Total</td>
			</tr>";
			
	}
	
	echo "</table>";
	
	$con=mysqli_connect('localhost','root','fluffy22','dataScience');
	$sql="SELECT * FROM joinedfour";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='list' id='list' class='fields' align='right' height='400' width='800'>";
	echo' <tr align="right">
    <th>Time</th>
	<th>Country</th>
	<th>Waste Gen Value(kg Per Capita)</th>
    <th>Recycle Value(kg Per Capita)</th> 
	<th>Compost Value(kg Per Capita)</th> 
	<th>Incineration Value(kg Per Capita)</th> 
	<th>Landfill Value(kg Per Capita)</th> 
	
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$TIME=$row['TIME'];
		$GEO=$row['GEO'];
		$Value=$row['Value'];
		$Value_from_ES2=$row['Value_from_ES2'];
		$Value_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2_from_ES2'];
		
		
	
		echo"<tr><td> $TIME</td>
			<td>  $GEO  </td>
			<td>  $Value  </td>	 
			<td> $Value_from_ES2</td>
			<td>  $Value_from_ES2_from_ES2 </td>
			<td>  $Value_from_ES2_from_ES2_from_ES2  </td>	
			<td>  $Value_from_ES2_from_ES2_from_ES2_from_ES2  </td>	
			
			</tr>";
			
	}
	
	echo "</table>";
	
	$con=mysqli_connect('localhost','root','fluffy22','dataScience');
	$sql="SELECT * FROM joinedthree";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='list' id='list' class='fields' align='right' height='400' width='800'>";
	echo' <tr align="right">
    <th>Time</th>
	<th>Country</th>
	<th>Waste Gen Value(kg Per Capita)</th>
    <th>Recycle Value(kg Per Capita)</th> 
	<th>Compost Value(kg Per Capita)</th> 
	<th>Incineration Value(kg Per Capita)</th> 
	<th>Landfill Value(kg Per Capita)</th> 
	
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$TIME=$row['TIME'];
		$GEO=$row['GEO'];
		$Value=$row['Value'];
		$Value_from_ES2=$row['Value_from_ES2'];
		$Value_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2_from_ES2'];
		
		
	
		echo"<tr><td> $TIME</td>
			<td>  $GEO  </td>
			<td>  $Value  </td>	 
			<td> $Value_from_ES2</td>
			<td>  $Value_from_ES2_from_ES2 </td>
			<td>  $Value_from_ES2_from_ES2_from_ES2  </td>	
			<td>  $Value_from_ES2_from_ES2_from_ES2_from_ES2  </td>	
			
			</tr>";
			
	}
	
	echo "</table>";
	
	$con=mysqli_connect('localhost','root','fluffy22','dataScience');
	$sql="SELECT * FROM joinedsix";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='list' id='list' class='fields' align='right' height='400' width='800'>";
	echo' <tr align="right">
    <th>Time</th>
	<th>Country</th>
	<th>Waste Gen Value(kg Per Capita)</th>
    <th>Recycle Value(kg Per Capita)</th> 
	<th>Compost Value(kg Per Capita)</th> 
	<th>Incineration Value(kg Per Capita)</th> 
	<th>Landfill Value(kg Per Capita)</th> 
	
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$TIME=$row['TIME'];
		$GEO=$row['GEO'];
		$Value=$row['Value'];
		$Value_from_ES2=$row['Value_from_ES2'];
		$Value_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2_from_ES2'];
		
		
	
		echo"<tr><td> $TIME</td>
			<td>  $GEO  </td>
			<td>  $Value  </td>	 
			<td> $Value_from_ES2</td>
			<td>  $Value_from_ES2_from_ES2 </td>
			<td>  $Value_from_ES2_from_ES2_from_ES2  </td>	
			<td>  $Value_from_ES2_from_ES2_from_ES2_from_ES2  </td>	

			</tr>";
			
	}
	
	echo "</table>";
	
	$con=mysqli_connect('localhost','root','fluffy22','dataScience');
	$sql="SELECT * FROM joinedfive";
	
	if(!$result= mysqli_query($con,$sql))
	{
		die('Error in querying the Database' .mysqli_error($con));
	}
	
	echo "<br><table name='list' id='list' class='fields' align='right' height='400' width='800'>";
	echo' <tr align="right">
    <th>Time</th>
	<th>Country</th>
	<th>Waste Gen Value(kg Per Capita)</th>
    <th>Recycle Value(kg Per Capita)</th> 
	<th>Compost Value(kg Per Capita)</th> 
	<th>Incineration Value(kg Per Capita)</th> 
	<th>Landfill Value(kg Per Capita)</th> 
	
	
	
  </tr>';
	while ($row= mysqli_fetch_array($result))
	{
	
		$TIME=$row['TIME'];
		$GEO=$row['GEO'];
		$Value=$row['Value'];
		$Value_from_ES2=$row['Value_from_ES2'];
		$Value_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2'];
		$Value_from_ES2_from_ES2_from_ES2_from_ES2=$row['Value_from_ES2_from_ES2_from_ES2_from_ES2'];
		
		
	
		echo"<tr><td> $TIME</td>
			<td>  $GEO  </td>
			<td>  $Value  </td>	 
			<td> $Value_from_ES2</td>
			<td>  $Value_from_ES2_from_ES2 </td>
			<td>  $Value_from_ES2_from_ES2_from_ES2  </td>	
			<td>  $Value_from_ES2_from_ES2_from_ES2_from_ES2  </td>	
			
			</tr>";
			
	}
	
	echo "</table>";
	mysqli_close($con);
	?><br><br>
	<h1> What We've learned</h1>
	<h2 style= "background-color:white;"> (Totals for 2010-2013 will have to be calculated by you as I have currently not got the time)</h2>
	<p style="font-size:36px;background-color:white;"><b>
Countries that send most of their waste to Landfills have much less waste unaccounted for than those that don't! We've found that Landfills are the most efficient ways for countries to dispose of their waste. However it is not the cleanest method as waste sits in these landfills until it eventually deteriorates. </b></p>
<br><br>
<p style="font-size:36px;background-color:white;"><b> Countries like Switzerland are trying to encourage their people to dispose of their waste in a cleaner fashion such as recycling or using compost! This is a much cleaner way to dispose of waste, however it is more work for people to recycle than it is for it to be sent to it to a landfill. This may be the main reason we see such a high amount of waste unaccounted for as Switzerland does not offer any landfill services.
		Other countries such as Germany, Finland and Netherlands are trying to follow Switzerland's example but as we can see with less use of landfills the unaccounted for waste is much higher than countries that are not implementing this change. Countries such as Kosovo who are solely reliant on landfills have only one kg per capita of waste unaccounted for. There has been change has been minor changes from year to year for some countries in regards to recycling and using compost but improvement is slow!
</p>
<h2 style= "background-color:white;"> If you have any input on what you see on these graphs believe leave your opinion in the opinion page! </h2>
<a href="opinion.php">Opinion Page</a><br><br><br><br><a href="main.php">Back</a><br><br><br><br>
