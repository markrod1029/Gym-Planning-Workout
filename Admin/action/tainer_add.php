<?php
include 'session.php'; 

if(isset($_POST['save'])){
    $fname = $_POST["fname"];    
    $mname = $_POST["mname"];    
    $lname = $_POST["lname"];    
    $password = $_POST["password"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $designation = "Trainer";
    $gender = $_POST["gender"];
    $contact = $_POST["contact"];
    $status = "Active";
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


  // <!-- Visit codeastro.com for more projects -->
//code after connection is successfull

$qry = "insert into staffs(fname,mname,lname,password,email,address,designation,gender,contact,status) 
values ('$fname','$mname','$lname','$password','$email','$address','$designation','$gender','$contact','$status')";

if($conn->query($qry)){

    $_SESSION['success'] = 'Trainer Added Successfully';
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