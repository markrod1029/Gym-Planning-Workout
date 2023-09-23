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
            
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fullname</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <?php
                            $qry="select * from members";
                            $cnt = 1;
                            $query = $conn->query($qry);
                            while($row = $query->fetch_assoc()){?>
                                <tr>
                                <td><?php echo $cnt ?></td>
                                <td><?php echo $row['fname'].' ' .$row['mname']. ' ' .$row['lname']?></td>
                                <td><a href="view_progress_report.php?id=<?php echo $row['user_id'] ?>"><button class='btn btn-primary btn'>View Progress Report</button></a></td>
                                </tr>

                     
                    <?php 
                     $cnt++; 
                    }
                    ?>
                </table>
            </div>
        </div>



    </section>

</div>
    

<?php include 'layout/footer.php'?>
    