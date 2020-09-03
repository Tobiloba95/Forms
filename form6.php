<!DOCTYPE HTML>  
<html>
<head>
  <title>Forms</title>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $phone_number = $gender = $comment = $website = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone_number = test_input($_POST["phone_number"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> Form <h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" placeholder="name">
  <br><br>
  E-mail: <input type="text" name="email" placeholder="email">
  <br><br>
  Phone_Number: <input type="number" name="phonenumber" placeholder="number">
  <br><br>
  Website: <input type="text" name="website" placeholder="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Validate">  
</form>

<?php
echo "<h2>Result</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone_number;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>