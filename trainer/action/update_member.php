<?php
include 'conn.php';

if(isset($_POST['save'])){
    $fullname = $_POST["fullname"];    
    $username = $_POST["username"];
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
$qry = "update members set fullname='$fullname', username='$username', gender='$gender',
 services='$services', amount='$totalamount', plan='$plan', address='$address',
  contact='$contact' where user_id='$id'";
$result = mysqli_query($conn,$qry); //query executes

if(!$result){
    echo "<html><head><script>alert('Member Not Updated');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../member.php'>";
}else {

    echo "<html><head><script>alert('Member Updated');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=../member.php'>";

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
}


          
?>