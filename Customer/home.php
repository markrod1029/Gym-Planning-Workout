<?php include 'layout/session.php'?>
<?php include 'layout/header.php'?>
<script src="../calendar/fullcalendar/lib/main.min.js"></script>
    <link rel="stylesheet" href="../calendar/fullcalendar/lib/main.css">
    <script src="../calendar/js/bootstrap.min.js"></script> 
<?php $page="dashboard"; include 'layout/sidebar.php'?>

<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard </h3>
        <p class="text-subtitle text-muted">Dashboard/Home</p>
    </div>




    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
            
            <div class="container " id="page-container">
        <div class="row ">
            <div class=" card ">
            </div>
        <div  id="calendar"></div>



     <!-- Event Details Modal -->
     <div class="modal fade" tabindex="-1"  id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0 bg bg-primary">
                    <h5 class="modal-title text-center mx-auto  text-white">Workout Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Task Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>

              
                <div class="modal-footer rounded-0">
                    <div class="text-end">
        
                        <a type="button"  class="btn btn-success btn-sm rounded-0" id="done" data-id="">Done</a>

                    </div>
                </div>
               
        </div>
    </div>



            </div>
        </div>

    </section>

</div>
    



<?php 
$id = $user['user_id'];
$sched = $conn->query("SELECT * FROM `todo` Where user_id = '$id' AND task_status = 'On Going' OR task_status = 'Pending'  ");
$sched_res = [];
foreach($sched->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conn)) $conn->close();
?>

<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>

<?php include 'layout/footer.php'?>
    