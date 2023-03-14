<html>
  <body>
    <form action="gamesubmit.php">
      <label for="fname">Name:</label><br>
      <input type="text" id="name" name="fname" value=""><br>
      <label for="lname">Game name:</label><br>
      <input type="text" id="gname" name="game" value=""><br><br>
      <input type="submit" value="Submit">
    </form>
<html>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
