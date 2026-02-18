<?php
include 'db.php';

if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
  header("Location: login.php");
  exit();
}
$sql = "SELECT * FROM users";
$res = $con->query($sql);
$rows = $res->fetch_all(MYSQLI_ASSOC);
?>
<head>
  <style>
    table, th, td {
      width:50%;
      border: 1px solid;
      border-collapse: collapse;
    }
    th, td{
      padding: 10px 50px;
      text-align: center;
    }
    h3 {
      margin: 5px 0px;
    }
  </style>
</head>
<body>
<h3>Users</h3>
<table>
  <tr>
    <th>user-id</th>
    <th>username</th>
  </tr>
  <?php
    foreach ($rows as $row) {
      echo <<<"here"
      <tr>
        <td>{$row['user_id']}</td>
        <td>{$row['username']}</td>
      </tr>
      here;
    }
  ?>

</table>
<a href="index.php">My Books</a>
</body>