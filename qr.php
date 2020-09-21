<?php
require('conn.php');
$sql = "SELECT * FROM datadurable ";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
	if ($row["durable_ID"]){
	echo "<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=.$row[durable_ID].' title='Link to my Website' />";
	echo "$row[durable_ID]";
		}
}
?>