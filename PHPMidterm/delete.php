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
if ($method == "DELETE") {
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $response = array();
  $id = $_GET['id'];
  if (isset($id)) {
    // sql to delete a record
    $sql = "DELETE FROM country WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
      $response["success"] = true;
      $response["message"] = "Data successfully deleted";
      echo json_encode($response);
    } else {
      $response["success"] = false;
      $response["message"] = "Required field is missing";
      echo json_encode($response);
    }
  }
  mysqli_close($conn);
}
