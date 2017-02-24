<?php

require "../connection.php";

$a = $_POST['surname'];
$b = $_POST['other_name'];
$c = $_POST['gender'];
$d = $_POST['dob'];
$e = $_POST['state'];
$f = $_POST['address'];
$g = $_POST['phone_number'];
$h = $_POST['email'];
$i = $_POST['customer_type'];
$j = $_POST['status'];

$folderName = 'uploads';


//IMAGES
if (isset($_FILES))
{
  move_uploaded_file($_FILES["image"]["tmp_name"], getcwd() . "/" . $folderName . "/" . $_FILES["image"]["name"]);
}

//SQL QUERY
$image = $_FILES["image"]["name"];
try{
    $sql = "INSERT INTO customer (surname,other_name,gender,dob,state,address,phone_number,email,image,customer_type,status,create_date) VALUES(:a, :b, :c, :d, :e, :f, :g, :h, :image, :i, :j, NOW())";

$stmt = $pdo->prepare($sql);

//Bind Parameters to statments

    $stmt->bindParam(':a', $_POST['surname']);
    $stmt->bindParam(':b', $_POST['other_name']);
    $stmt->bindParam(':c', $_POST['gender']);
    $stmt->bindParam(':d', $_POST['dob']);
    $stmt->bindParam(':e', $_POST['state']);
    $stmt->bindParam(':f', $_POST['address']);
    $stmt->bindParam(':g', $_POST['phone_number']);
    $stmt->bindParam(':h', $_POST['email']);
    $stmt->bindParam(':image',$_POST['image']);
    $stmt->bindParam(':i', $_POST['customer_type']);
    $stmt->bindParam(':j', $_POST['status']);

//Run the STMT
$stmt->execute();
header("location: all_customer.php");
}  catch(PDOException $error){

    die("ERROR: Could not able to execute $sql. " . $error->getMessage());

}

unset($pdo);


?>
