<!DOCTYPE html>
<html>
<head>
<title> FORM </title>
</head>
<body>

<h1> Please Kindly fill the form </h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname"><br>
Phone Number: <input type="number" name="phoneno"><br>
Email: <input type="email" name="email"><br>
Country: <input type="text" name="country"><br>
<input type = "submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
//collect value of input field
$name = htmlspecialchars($_REQUEST['fname']);
$number = htmlspecialchars($_REQUEST['phoneno']);
$email = htmlspecialchars($_REQUEST['email']);
$country = htmlspecialchars($_REQUEST['country']);
if (empty($name)) {
echo "Name is empty <br>";
}
else{
echo $name."<br>";
}

if (empty($number)) {
echo "No Number <br>";
}
else{
echo $number."<br>";
}

if (empty($email)) {
echo "Email is empty <br>";
}
else{
echo $email."<br>";
}

if (empty($country)) {
echo "Country is empty <br>";
}
else{
echo $country."<br>";
}
}


?>
</body>
</html>
