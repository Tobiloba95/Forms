<html>
<head>
<title>FORMS</title>
</head>
<body>
<h1>Kindly Fill the Form</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname"><br>
Phone Number: <input type="number" name="phoneno"><br>
Email: <input type="text" name="email"><br>
Country: <input type="text" name="country"><br>
Institution: <input type="school" name="institution"><br>
<input type = "submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" ){
//collect value of input field
$name = $_POST['fname'];
$number = $_POST['phoneno'];
$email = $_POST['email'];
$country = $_POST['country'];
$institution = $_POST['institution'];

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

if (empty($institution)) {
echo "Institution is empty <br>";
}
else{
echo $institution."<br>";
}

}


?>
</body>
</html>



