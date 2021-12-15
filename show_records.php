<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
}


$sql_query = "SELECT * FROM users";
$result = $conn->query($sql_query);

if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>Name</th><th>Password</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>";
    echo $row["name"];
    echo "</td>";
    echo "<td>";
    echo $row["password"];
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
 $conn->close();
?>