<?php
include 'session.php';

if(isset($_POST['save'])){
    $fname = $_POST["fname"]; 
    $mname = $_POST["mname"]; 
    $lname = $_POST["lname"];    
  $email = $_POST["email"];
  $password = $_POST["password"];
  $gender = $_POST["gender"];
  $status = "Active";
  // $paid_date='$curr_date';
  $amount = $_POST["amount"];
  $p_year = date('Y');
  $paid_date = date("Y-m-d");
  $plan = $_POST["plan"];
  $address = $_POST["address"];
  $contact = $_POST["contact"];
  $trainer_id = $_POST["trainer_id"];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $totalamount = $amount * $plan;
  // <!-- Visit codeastro.com for more projects -->
//code after connection is successfull
$qry = "INSERT INTO members(fname,mname,lname,email,password,date,gender,amount,p_year,paid_date,plan,address,contact,status,trainer_id) 
values ('$fname','$mname','$lname','$email','$password', NOW(),'$gender','$totalamount','$p_year','$paid_date','$plan','$address','$contact','$status','$trainer_id')";
$result = mysqli_query($conn,$qry); //query executes

if($conn->query($qry)){
    $_SESSION['success'] = 'Member  Added Successfully';

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