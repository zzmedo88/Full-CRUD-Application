<?php
include 'db.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST["username"];
  $password = md5($_POST["password"]);

  $checkSQL = "SELECT * FROM users WHERE username='$username'";
  $checkRes = $con->query($checkSQL);

  if ($checkRes->num_rows > 0) {
    $message ="User exists";
  } else {
    $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
    $res = $con->query($sql);
    header('Location: login.php');
  }
}
?>


<h2>Register</h2>
<?php
  if ($message != "") {
    echo "<p>$message</p>";
  }
?>
<form method="POST" action="">
  Username: <input type="text" name="username" required> <br><br>
  Password: <input type="password" name="password" required> <br><br>
  <input type="submit" value="Login" >
</form>