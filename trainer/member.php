<?php include 'layout/session.php'?>
<?php include 'layout/header.php'?>
<?php $page="members"; include 'layout/sidebar.php'?>
<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Member List</h3>
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
                            <th>Full Name</th>
                            <th>email</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Joining Date</th>
                        </tr>
                    </thead>
                        <?php

                        $id = $user['user_id'];
                            $qry="select * from members WHERE status = 'Active' and trainer_id = '$id'";
                            $cnt = 1;
                            $query = $conn->query($qry);
                            while($row = $query->fetch_assoc()){?>
                                <tr>
                                <td><?php echo $cnt ?></td>
                                <td><?php echo $row['fname'].' ' .$row['mname']. ' ' .$row['lname']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['gender']?></td>
                                <td><?php echo $row['contact']?></td>
                                <td><?php echo $row['address']?></td>
                                <td><?php echo $row['amount']?>Peso</td>
                                <td> <?php if( $row['status'] == 'Active' )
                                { echo '<button class="btn btn-success btn"> Active</button>';} 
                                            else if ($row['status'] == 'Expired') 
                                            { echo '<button class="btn btn-danger btn"> Expired</button>';} 
                                            else { echo '<button class="btn btn-warning btn"> Pendding</button>';}?>
                                            </td>

                                <td><?php echo $row['date']?></td>
                                
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
    