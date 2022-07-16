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
if ($method == "PUT") {
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $response = array();
  $postdata = json_decode(file_get_contents("php://input"), true);
  $id = $postdata['id'];
  $name = $postdata['name'];
  $size = $postdata['size'];
  $other = $postdata['other'];
  if (isset($id) && isset($name) && isset($size) && isset($other)) {
    $sql = "UPDATE country SET name='$name',size='$size',other='$other' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
      // successfully updated
      $response["success"] = true;
      $response["message"] = "Post successfully updated.";
      echo json_encode($response);
    } else {
      $response["success"] = false;
      $response["message"] = "Required field(s) is missing";
      echo json_encode($response);
    }
  }
  mysqli_close($conn);
}
