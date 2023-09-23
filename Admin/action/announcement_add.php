<?php
include 'session.php';

if(isset($_POST['save'])){
    $message = $_POST["message"];    
    $date = $_POST["date"];

  // <!-- Visit codeastro.com for more projects -->
//code after connection is successfull
$qry = "insert into announcements(message,date) values ('$message','$date')";



if($conn->query($qry)){
    $_SESSION['success'] = 'Annoucement Added Successfully';
    echo "<meta http-equiv='refresh' content='0; url=../annoucement.php'>";
}else {

    $_SESSION['error'] = $conn->error;
    
    echo "<meta http-equiv='refresh' content='0; url=../annoucement.php'>";

}

}else{
    $_SESSION['error'] = 'Fill up add form first';
    echo "<meta http-equiv='refresh' content='0; url=../annoucement.php'>";
}


          
?>