<?php
include 'session.php';

if(isset($_POST['save'])){
    $fname = $_POST["fname"];    
    $mname = $_POST["mname"];    
    $lname = $_POST["lname"];    
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $services = $_POST["services"];
    $amount = $_POST["amount"];
    $plan = $_POST["plan"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $id = $_POST["id"];

  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


  $totalamount = $amount * $plan;
  // <!-- Visit codeastro.com for more projects -->
//code after connection is successfull
$qry = "update members set fname='$fname', mname='$mname', lname='$lname', email='$email', gender='$gender',
 services='$services', amount='$totalamount', plan='$plan', address='$address',
  contact='$contact' where user_id='$id'";
$result = mysqli_query($conn,$qry); //query executes

if($conn->query($qry)){
    $_SESSION['success'] = 'Member Updated Successfully';

    echo "<meta http-equiv='refresh' content='0; url=../member.php'>";
}else {

	$_SESSION['error'] = $conn->error;
    echo "<meta http-equiv='refresh' content='0; url=../member.php'>";

}

}else{
    $_SESSION['error'] = 'Fill up add form first';
    echo "<meta http-equiv='refresh' content='0; url=../member.php'>";

}


          
?>