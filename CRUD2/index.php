<?php
include 'db.php';

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM books WHERE user_id='$user_id'";
$res = $con->query($sql);

$rows = $res->fetch_all(MYSQLI_ASSOC);

?>

<head>
  <style>
    table, th, td {
      border: 1px solid;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px 50px;
    }
  </style>
</head>
<body>
  <h1>Welcome <?= $_SESSION['username']?></h1>
  <table>
    <tr>
      <th>BookName</th>
      <th>Writer</th>
      <th>Rate</th>
      <th>Type</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
    <?php
      foreach ($rows as $row) {
        echo <<<"here"
          <tr>
            <td>{$row["Bookname"]}</td>
            <td>{$row["Writer"]}</td>
            <td>{$row["rate"]}/5</td>
            <td>{$row["type"]}</td>
            <td><a href='deletebook.php?id={$row["id"]}'>❌</a></td>
            <td><a href='update.php?id={$row["id"]}'>⚙️</a></td>
          </tr>
        here;
      }
    ?>
  </table>
  <a href='addbook.php'>add book</a>
  <a href='logout.php'>logout</a>
  <?php
    if ($_SESSION['user_id'] == 1) {
      echo "<a href='admin.php'>admin panel</a>";
    }
  ?>
</body>