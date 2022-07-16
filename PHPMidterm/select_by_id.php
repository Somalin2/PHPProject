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
if ($method == "GET") {
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  //$postdata = json_decode(file_get_contents("php://input"), true);
  //$id = $postdata['id'];
  $id = $_GET['id'];
  $sql = "SELECT id, name, size,other FROM country WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  $post = array();
  if (mysqli_num_rows($result) > 0) {
    if ($row = mysqli_fetch_assoc($result)) {
      
      $post["id"] = $row["id"];
      $post["name"] = $row["name"];
      $post["size"] = $row["size"];
      $post["other"] = $row["other"];

    }
    echo json_encode($post);
  } else {
    echo json_encode($post);
  }
  mysqli_close($conn);
}
