<?php
  session_start();
  $email = $_SESSION['email'];
  if($email==null){
    header('location:login.php?id=home');
  }
?>
<?php
  $link = mysqli_connect("localhost", "root", "", "project_o2");
  $status = 'OK';
  $content = [];

if (mysqli_connect_errno()) {
	$status = 'ERROR';
	$content = mysqli_connect_error();
}

$query = "SELECT * FROM user WHERE email='$email'";
if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $content[] = $row;
    }
}
$data = ["status" => $status, "content" => $content];

header('Content-type: application/json');
echo json_encode($data);
?>