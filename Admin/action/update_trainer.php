<?php
include 'session.php';

if(isset($_POST['save'])){
    $fname = $_POST["fname"];    
    $mname = $_POST["mname"];    
    $lname = $_POST["lname"]; 
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $id = $_POST["id"];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);



$qry = "update staffs set  fname='$fname', mname='$mname', lname='$lname', email='$email', password='$password', 
gender='$gender', contact='$contact',  address='$address' where user_id='$id'";


if($conn->query($qry)){

    $_SESSION['success'] = 'Trainer Updated Successfully';
echo "<meta http-equiv='refresh' content='0; url=../trainer.php'>";

}else {

$_SESSION['error'] = $conn->error;
echo "<meta http-equiv='refresh' content='0; url=../trainer.php'>";

}

}else{
$_SESSION['error'] = 'Fill up add form first';
echo "<meta http-equiv='refresh' content='0; url=../trainer.php'>";

}


          
?>