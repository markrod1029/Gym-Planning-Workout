<?php
include 'session.php';

if(isset($_POST['save'])){
    $curr_weight = $_POST["curr_weight"];

    $id=$_POST['id'];


    date_default_timezone_set('Asia/Manila');
    //$current_date = date('Y-m-d h:i:s');
        $current_date = date('Y-m-d h:i A');
      $exp_date_time = explode(' ', $current_date);
        $curr_date =  $exp_date_time['0'];
        $curr_time =  $exp_date_time['1']. ' ' .$exp_date_time['2'];
  // <!-- Visit codeastro.com for more projects -->
//code after connection is successfull
$qry = "update members set curr_weight='$curr_weight' where user_id='$id'";

if($conn->query($qry)){
    $_SESSION['success'] = 'Health Status Updated Successfully';
    echo "<meta http-equiv='refresh' content='0; url=../health.php'>";
}else {

    $_SESSION['error'] = $conn->error;

    echo "<meta http-equiv='refresh' content='0; url=../health.php'>";

}

}else{
    $_SESSION['error'] = 'Fill up add form first';
    echo "<meta http-equiv='refresh' content='0; url=../health.php'>";

}

          
?>