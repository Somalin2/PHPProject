<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lkw1";
$method = $_SERVER['REQUEST_METHOD'];
//if ($method == "POST") {
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $search = $_GET['name'];
  $sql = "SELECT id, name, size, other FROM country where name like '%$search%' ";
  $result = mysqli_query($conn, $sql);

 
  $response = array();
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $post = array();
      $post["id"] = $row["id"];
      $post["name"] = $row["name"];
      $post["size"] = $row["size"];
      $post["other"] = $row["other"];
      array_push($response, $post);
    }
    echo json_encode($response);
  } else {
    echo json_encode($response);
  }
  mysqli_close($conn);
//}
