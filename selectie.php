<!DOCTYPE html>
<html>
<body>

<?php
//database connection 'clienti'
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beauty_salon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT * from customer WHERE FirstName='".$_POST["FirstName"]."' and LastName='".$_POST["LastName"]."' and PhoneNumber='".$_POST["PhoneNumber"]."' and BirthDate='".$_POST["BirthDate"]."' and Gender='".$_POST["Gender"]."'";
echo $sql."<br>";

//$sql="SELECT * from customer WHERE IDclient=1000";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "IDclient: ".$row["IDclient"]."<br>";
		echo "FirstName:".$row["FirstName"]."<br>";
	    echo "LastName:".$row["LastName"]."<br>";
		echo "PhoneNumber:".$row["PhoneNumber"]."<br>";
		echo "BirthDate:".$row["BirthDate"]."<br>";
        echo "Gender:".$row["Gender"]."<br>";
    }
} else {
    echo "Nu exista clientul cu acest nume!";
}
$conn->close();

?>
</body>
</html>