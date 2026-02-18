<?php
include 'db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $bookName = htmlspecialchars($_POST['bookName']);
  $bookWriter = htmlspecialchars($_POST['bookWriter']);
  $bookRate = $_POST['bookRate'];
  $bookType = htmlspecialchars($_POST['bookType']);
  $user_id = $_SESSION['user_id'];

  $sql = "INSERT INTO books (Bookname,Writer,rate,type, user_id ) VALUES ('$bookName','$bookWriter',$bookRate,'$bookType','$user_id')";
  $res = $con->query($sql);
  header("Location: index.php");
  exit();
}
?>

<form method='POST' action=''>
  Book Name: <input type="text" name="bookName" required> <br><br>
  Book Writer: <input type="text" name="bookWriter" required> <br><br>
  Book Rate: <input type="text" name="bookRate" required> <br><br>
  Book Type: <input type="text" name="bookType" required> <br><br>
  <button type='submit'>Submit</button>
</form>

