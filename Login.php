 <?php
$servername = "192.241.244.177";
$username = "root";
$password = "tecnics";
$conn = new mysqli($servername, $username, $password, "db_BP_Dmart", 3306);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$userName = $_GET["userName"];
$sqlQuery = "select UserName from Users where UserName = '".$userName."'";
$result = $conn->query($sqlQuery);
if ($result->num_rows > 0) 
{
	echo "Welcome: ".$userName;
}
else 
{
    echo "Please create an Account to chat!";
}
$conn->close();
?> 
