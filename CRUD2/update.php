<?php
include 'db.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $updateSTMT = "UPDATE books SET Bookname='{$_POST['bookName']}' , Writer='{$_POST['bookWriter']}' , rate='{$_POST['bookRate']}' , type='{$_POST['bookType']}' ";
  $con->query($updateSTMT);
  header("Location: index.php");
}

$sql = "SELECT * FROM books WHERE id = '{$_GET['id']}' ";
$res = $con->query($sql);
$record = $res->fetch_assoc();

if ($_SESSION['user_id'] == $record['user_id']) {
  $Bookname = $record["Bookname"];
  $Writer = $record["Writer"];
  $rate = $record["rate"];
  $type = $record["type"];
}else {
  echo "Can't access this record";
  exit();
}

?>

<form method='POST' action=''>
  <?php
    echo <<<"here"
    Book Name: <input type="text" name="bookName" value="$Bookname" required> <br><br>
    Book Rriter: <input type="text" name="bookWriter" value="$Writer" required> <br><br>
    Book Rate: <input type="text" name="bookRate" value="$rate" required> <br><br>
    Book Type: <input type="text" name="bookType" value="$type" required> <br><br>
    <button type='submit'>Submit</button>
    here;
  ?>
  </form>