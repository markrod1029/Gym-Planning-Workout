<?php include 'layout/session.php'?>
<?php include 'layout/header.php'?>
<?php $page="report"; include 'layout/sidebar.php'?>
<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Member Status</h3>
        <p class="text-subtitle text-muted">Dashboard/Member</p>
    </div>


    <section class="section">
        <div class="card">
            <div class="card-header">
            <table class='table table-striped' id="">
                    <thead>
                        <tr>
                           
                            <th>Fullname</th>
                            <th class="head1 right">Initial Weight</th>
                            <th class="head0 right">Current Weight</th>
                            <th class="head0 right">Plans </th>
                            <th class="head0 right">Attendance Count </th>
                        </tr>
                    </thead>
                        <?php
                            $id=$_GET['id'];
                            $qry="SELECT * FROM members WHERE user_id='$id' ";
                            $cnt = 1;
                            $query = $conn->query($qry);
                            while($row = $query->fetch_assoc()){?>
                                <tr>
                                <td><?php echo $row['fname'].' ' .$row['mname']. ' ' .$row['lname']?></td>
                                <td><?php echo $row['ini_weight']?> KG</td>
                                <td><?php echo $row['curr_weight']?> KG</td>
                                <td><?php echo $row['plan']?> Month/s</td>
                                <td><?php echo $row['attendance_count']?>  Day/s</td>

                            </tr>

                     
                    <?php 
                    }
                    ?>
                </table>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task Description</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                        <?php
                            include "action/conn.php";
                            $qry="SELECT * FROM todo WHERE user_id='$id' AND task_status = 'Done' ";
                            $cnt = 1;
                            $query = $conn->query($qry);

                            
                            while($row = $query->fetch_assoc()){
                            $status = '<button class="btn btn-success btn">' . $row["task_status"] . '</button>';


                        ?>
                                <tr>
                                <td><?php echo $cnt ?></td>
                                <td><?php echo $row['description']?></td>
                                <td><?php echo $status?></td>
                                </tr>

                      
                    <?php 
                     $cnt++; 
                    }
                    ?>
                </table>



<?php include 'action/chart_report.php'?>
                
            </div>
        </div>

    </section>

</div>
    

<?php include 'layout/footer.php'?>
    