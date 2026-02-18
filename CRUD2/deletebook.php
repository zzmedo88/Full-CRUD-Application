<?php
include 'db.php';

if (!isset($_GET['id'])) {
  header("Location: index.php");
}

$id = $_GET['id'];
$check_id = " SELECT * FROM books WHERE id='$id' ";
$row = $con->query($check_id)->fetch_assoc();

if ($id == $row['id']) {
  $sql = "DELETE FROM books WHERE id=? ";
  $stmt = $con->prepare($sql);
  
  $stmt->bind_param('i', $id);
  $stmt->execute();
  header("Location: index.php");
}else {
  echo "Access Denied";
  exit();
}


