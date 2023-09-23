<?php include 'layout/header.php'?>
<?php include 'layout/session.php'?>
<?php $page="announce"; include 'layout/sidebar.php'?>
<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Annocement List</h3>
        <p class="text-subtitle text-muted">Dashboard/Annocement</p>
    </div>


    <section class="section">

    
                            
<?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4 class ='text-white'><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4 class ='text-white'><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>

      
        <div class="card">
            <div class="card-header">
            
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                        <?php
                            $qry="select * from announcements";
                            $cnt = 1;
                            $query = $conn->query($qry);
                            while($row = $query->fetch_assoc()){?>
                                <tr>
                                <td><?php echo $cnt ?></td>
                                <td><?php echo $row['date']?></td>
                                <td><?php echo $row['message']?></td>

                                <td><a onclick="return confirm('Are you sure you want to remove this Annoucement?')" href='action/delete_announcement.php?id=<?php echo $row['id']?>' ><button class='btn btn-danger btn'>Remove</button></a></td>
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
    