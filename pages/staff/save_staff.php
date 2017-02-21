<?php 

require '../connection.php';

$a = $_POST['surname'];
$b = $_POST['othername'];
$c = $_POST['gender'];
$d = $_POST['dob'];
$e = $_POST['phone_number'];
$f = $_POST['email'];
$g = $_POST['nationality'];
$h = $_POST['state'];
$i = $_POST['address'];
$j = $_POST['qualification'];
$k = $_POST['employment_type'];
$l = $_POST['dept'];
$m = $_POST['level'];
$n = $_POST['status'];


$folderName = 'uploads';


//IMAGES
if (isset($_FILES))
{
  move_uploaded_file($_FILES["image"]["tmp_name"], getcwd() . "/" . $folderName . "/" . $_FILES["image"]["name"]);
}

//RUN IMAGE QUERY
$staff_image = $_FILES['image']['name'];

try{
    //SQL QUERY
$sql = "INSERT INTO staff (staff_surname,staff_othername,staff_gender,staff_dob,staff_phone_number,staff_email,staff_nationality,staff_state,staff_address,highest_qualification,staff_employment_type,staff_dept,staff_level,staff_status,staff_image,create_time) VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :m, :n, staff_image, NOW() )";
    
    
    $stmt = $pdo->prepare($sql);
    
     $stmt->bindParam(':a', $_POST['surname']);
     $stmt->bindParam(':b', $_POST['othername']);
     $stmt->bindParam(':c', $_POST['gender']);
     $stmt->bindParam(':d', $_POST['dob']);
     $stmt->bindParam(':e', $_POST['phone_number']);
     $stmt->bindParam(':f', $_POST['email']);
     $stmt->bindParam(':g', $_POST['nationality']);
     $stmt->bindParam(':h', $_POST['state']);
     $stmt->bindParam(':i', $_POST['address']);
     $stmt->bindParam(':j', $_POST['qualification']);
     $stmt->bindParam(':k', $_POST['employment_type']);
     $stmt->bindParam(':l', $_POST['dept']);
     $stmt->bindParam(':m', $_POST['level']);
     $stmt->bindParam(':n', $_POST['status']);
    
        
        $stmt->execute();
header('location: all_staff.php');

} catch(PDOException $error){

    die("ERROR: Could not able to execute $sql. " . $error->getMessage());

}

unset($pdo); 



?>