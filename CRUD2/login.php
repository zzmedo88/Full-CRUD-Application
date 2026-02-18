<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $stmt = $con->prepare("SELECT user_id, username FROM users WHERE username=? AND password=? ");
  $stmt -> bind_param("ss", $username, $password);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows == 1) {
    $stmt->bind_result($user_id, $user);
    $stmt->fetch();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['username'] = $user;
    header("Location: index.php");
    exit();
  }
}
?>

<form method="POST" action="">
  <h2>Login</h2>
    Username: <input type="text" name="username" required> <br><br>
    Password: <input type="password" name="password" required> <br><br>
    <input type="submit" value="Login" >
</form>
<a href="register.php">
  Register
</a>