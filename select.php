<?php 
	require_once("db.php");
	if ($conn->connect_error) {
		die("connection failed");
	}
	$sql="SELECT * FROM `products` WHERE 1";
	$result=$conn->query($sql);
	while ($row=$result->fetch_assoc()) {
		echo $row["id"]." - ".$row["product_name"]." - ".$row['description']." - ".$row['created_at'].'<br>';
	}

?>