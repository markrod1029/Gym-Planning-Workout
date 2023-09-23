<?php include 'layout/session.php'?>
<?php include 'layout/header.php'?>
<?php $page="health "; include 'layout/sidebar.php'?>
<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Health Progress</h3>
        <p class="text-subtitle text-muted">Dashboard/Health</p>
    </div>

    <?php
include 'action/conn.php';
$id=$_GET['id'];
$qry= "select * from members where user_id='$id'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
?> 
    <section class="section">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title text-primary">Update Progress of Member</h4>
            </div>
            <div class="card-body">
            <form class="form form-vertical" action="action/payment.php?=<?php echo $row['user_id'];?>" method="POST">
                <div class="form-body">
                    <div class="row">


                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Full Name</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="fullname" value="<?php echo $row['fname']. ' '.$row['mname']. ' '.$row['lname']; ?>" placeholder="FullName" readonly>
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    


                    <input type="hidden" name="paid_date" value="<?php echo $row['paid_date']; ?>">


                   

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="mobile-id-icon">Ammount Per Month/s</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="amount" value='<?php if($row['services'] == 'Fitness') { echo '55';} elseif ($row['services'] == 'Sauna') { echo '35';} else {echo '40';} ?>' name="ini_weight" placeholder="Weight" id="city-id-icon" required>
                                <div class="form-control-icon">
                                    <i >(P)</i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                            <label for="first-name-icon">Plan</label>

                                    <fieldset class="form-group">
                                        <select name="plan" class="form-select" id="basicSelect" required>
                                            <option value="1" selected="selected">One Month</option>
                                            <option value="3">Three Month</option>
                                            <option value="6">Six Month</option>
                                            <option value="12">One Year</option>
                                            <option value="0">None-Expired</option>

                                        </select>
                                    </fieldset>
                    </div>


                    <div class="col-12">
                            <label for="first-name-icon">Member's Status</label>

                                    <fieldset class="form-group">
                                        <select name="status" class="form-select" id="basicSelect" required>
                                        <option value="Active" selected="selected" >Active</option>
                                        <option value="Expired">Expired</option>
                                        </select>
                                    </fieldset>
                    </div>

                                       

                   
                  
                    <div class="col-12 d-flex justify-content-end">
                    <input type="hidden" name="id" value="<?php echo $row['user_id'];?>">

                        <button type="submit" name="save" class="btn btn-primary mr-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                    </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <?php
}
      ?>
    </section>

</div>
    

<?php include 'layout/footer.php'?>
    