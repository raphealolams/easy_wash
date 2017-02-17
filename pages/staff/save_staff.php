<?php 

include '../connection.php';

$a = $_POST['staff_surname'];
$b = $_POST['staff_othername'];
$c = $_POST['staff_gender'];
$d = $_POST['staff_dob'];
$e = $_POST['staff_phone_number'];
$f = $_POST['staff_email'];
$g = $_POST['staff_nationality'];
$h = $_POST['staff_state'];
$i = $_POST['staff_address'];
$j = $_POST['highest_qualification'];
$k = $_POST['staff_employment_type'];
$l = $_POST['staff_dept'];
$m = $_POST['staff_level'];
$n = $_POST['staff_status'];


$folderName = 'uploads';


//IMAGES
if (isset($_FILES))
{
  move_uploaded_file($_FILES["staff_image"]["tmp_name"], getcwd() . "/" . $folderName . "/" . $_FILES["staff_image"]["name"]);
}

//RUN IMAGE QUERY
$staff_image = $_FILES[''][''];

//SQL QUERY
$sql = "INSERT INTO staff (staff_surname,staff_othername,staff_gender,staff_dob,staff_phone_number,staff_email,staff_nationality,staff_state,staff_address,staff_employment_type,staff_dept,staff_level,staff_status,staff_image,create_time) VALUES (:a,:b)";

$stmt = $pdo->prepare($sql);

//Blind The SQL with PDO
$stmt->bindParam(':a', $_POST['surname']);



?>