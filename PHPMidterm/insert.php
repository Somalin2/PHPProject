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
if ($method == "POST") {
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $response = array();
  $postdata = json_decode(file_get_contents("php://input"), true);

  $name = $postdata['name'];
  $size = $postdata['size'];
  $other = $postdata['other'];
  if (isset($name) && isset($size) && isset($other)) {
    $sql = "INSERT INTO country (name, size, other)
  VALUES ('$name', '$size', '$other')";
    if (mysqli_query($conn, $sql)) {
      $response["success"] = true;
      $response["message"] = "Post successfully created.";
      echo json_encode($response);
    } else {
      $response["success"] = false;
      $response["message"] = "Required field is missing";
      echo json_encode($response);
    }
  }
  mysqli_close($conn);
}
