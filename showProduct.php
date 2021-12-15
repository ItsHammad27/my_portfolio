<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- creating connection -->

    <?php 
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "myshop";

    $conn = new mysqli($servername,$username, $password, $dbname);
    
    #checking connection

    if($conn ->connect_error)
    {
        echo "Connection Failed : " . $conn->connect_error;
    
    }

    #preparing statement or query

    $sql_query = "Select * from laptops";
    
    # execute query
    $result = $conn->query($sql_query);

    $query = "SELECT id, name, price, availability, image FROM laptops";


    $result = $conn->query($query);


    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo $row["id"]. " " . $row["name"] . " "
    . $row["price"]. " " . $row["availability"] . $row["image"];
    }
        echo nl2br("\n ");
    }
?>


</body>
</html>