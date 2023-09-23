<?php include 'layout/session.php'?>
<?php include 'layout/header.php'?>
<?php $page = "workouts"; include 'layout/sidebar.php'?>
<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Workout List</h3>
        <p class="text-subtitle text-muted">Dashboard/Workout</p>
    </div>


    <section class="section">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title text-primary">Add New Workout</h4>
            </div>
            <div class="card-body">
            <form class="form form-vertical" action="action/update_work.php" method="POST">
                <div class="form-body">
                    <div class="row">




                    

                    <div class="col-12">
                            <label for="first-name-icon ">Workout Plan</label>

                                    <fieldset class="form-group">
                                        <select class="form-select" name="workout_id" required onchange="myplandetail(this.value)">
                                            <option value ="0"> --Please Select--</option>
                                            <?php
                                                $query="select * from exercises";
                                                $result=mysqli_query($conn,$query);
                                                if(mysqli_affected_rows($conn)!=0){
                                                    while($row=mysqli_fetch_row($result)){
                                                        echo "<option value=".$row[0].">".$row[1]." Exercises</option>";
                                                    }
                                                }

                                            ?>
                                        </select>
                                    </fieldset>
                    </div>



                    <div class="col-12">
                            <label for="first-name-icon">Member Exercises</label>

                                    <fieldset class="form-group">
                                        <select name="exercises" class="form-select" id="basicSelect">
                                            <option value="Basic"> Basic</option>
                                            <option value="Intermidiate">Intermidiate</option>
                                            <option value="Hard">Hard</option>
                                        </select>
                                    </fieldset>
                    </div>

                                                
                    <?php
      $id=$_GET['id'];
      $qry= "select * from workout where id='$id'";
      $result=mysqli_query($conn,$qry);
      while($row=mysqli_fetch_array($result)){
?> 




                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Workout Task</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="task" value='<?php echo $row['task']; ?>' placeholder="Workout">
                                <div class="form-control-icon">
                                    <i data-feather="activity"></i>
                                </div>
                            </div>
                        </div>
                    </div>

           

                  

                    <div class="col-12 d-flex justify-content-end">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" name="save" class="btn btn-primary mr-1 mb-1">UPDATE TASK</button>
                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                    </div>
                    </div>
                </div>
            </form>
            </div>
        </div>

    </section>

</div>
<script>
        $(document).ready(function() {
            $("#submit").click(function() {
                alert($("#myselection").val());
            });
        });
    </script>
        
<?php }
include 'layout/footer.php'?>
    