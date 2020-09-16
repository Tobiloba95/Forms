<?php

$servername = "localhost";
$username = "root";
$password ="Tobi1234Loba*";
$db_name = "form10";

//create connection
$conn = mysqli_connect($servername,$username,$password,$db_name);
// Check connection
if (!$conn) {
    echo "Connection failed: ". mysqli_connect_error();

}
else{
    echo "Connected successfully <br>";
}
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];

    $sql = "INSERT INTO user(name,email) VALUES('$name','$email')";

    if(!mysqli_query($conn,$sql)){
        echo "Query failed".mysqli_error($conn);
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form10.php" method="get">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" name="submit" value="Submit">
        
    </form>
</body>
</html>