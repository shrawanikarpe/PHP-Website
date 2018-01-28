<?php
$servername = "172.17.0.2";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=counter", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
	// gets the user IP Address
	$user_ip=$_SERVER['REMOTE_ADDR'];
	$sql ="select userip from pageview where page='13.126.145.237' and userip='$user_ip'";
	$insert = "insert into pageview(page,userip) values('13.126.145.237','183.87.152.194')";
	$stmt = $conn->prepare($sql);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

if (sizeOf($stmt->fetchAll() ) > 0) {
   
} else {
    $conn->exec($insert);
}
$sql ="select userip from pageview";
$stmt = $conn->prepare($sql);
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	echo "You are vistor: ".sizeOf($stmt->fetchAll() );
$conn = null;
	
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
