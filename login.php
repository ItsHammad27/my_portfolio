<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="login.php" method="post">

<?php  
	if (!empty($_POST['UName']) && !empty($_POST['Password']))
	{
		$uname = $_POST['UName'];
		$pwd = $_POST['Password'];

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

		$sql_query = "SELECT * FROM users where name='".$uname."' and password='".$pwd."'";
		#echo $sql_query;
		$result = $conn->query($sql_query);
		if ($result->num_rows==0)
		{
			echo "<span style='color:red'>"."Wrong username/password!</span>"."<br>";
		}	
		else
		{
			header("Location: home.php");
		}		
		$conn->close();
	}
?>
</span>
User name : <input type="text" name="UName">
<br/>
Password : <input type="password" name="Password">
<br/>
<input type="submit" value="Login"/>
</body>
</html>