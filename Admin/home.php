<?php include 'layout/session.php'?>
<?php include 'layout/header.php'?>
<?php $page="dashboard"; include 'layout/sidebar.php';

  include '../timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
  ?>


<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">Dashboard/Home</p>
    </div>
    

       
    <section class="section">
        <div class="card">
            <div class="card-header">
            <div class="col-12 col-md-3">
               
        <section class="section">
            <div class="row mb-2"> 

               
            
            
            </div>
        </section>
        <h3>Data Analytics</h3>
            


            </div>
            </div>

            
            <div class="card-body">
                          <!-- Small boxes (Stat box) -->
      <div class="row">
          <!-- small box -->



          <!-- Chest Exercises -->

                    
          <div class="info-box col-lg-2 col-lg-2 ml-4 col-xs-6 p-4   text-center" style="background-color:#353593;  color:white;">
            <div class="info-box-content">


              <span class="info-box-text text-center mb-2">Chest <br> Exercises</span>

                              <?php

                          $sql = "SELECT * FROM todo ";
                          $tquery = $conn->query($sql);


                          $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
                          FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id 
                          WHERE exercises.Exercises = 'Chest'";
                          $query = $conn->query($sql);
                          $total = $query->num_rows/$tquery->num_rows*100;
                        ?>
          <br>

              <span class="info-box-number text-center"><?php echo $query->num_rows?></span>
              <div class="progress">
                <div class="progress-bar" style="width:<?php echo $total?>%"></div>
              </div>
              <span class="progress-description text-center">
              <?php echo $total?>%
              </span>
            </div>
          </div>




          <div class="info-box col-lg-2 col-xs-6 ml-4 p-4 text-center" style="background-color:#3e95cd;  color:white;">
  <div class="info-box-content">


    <span class="info-box-text text-center mb-2">Triceps <br> Excersise</span>

                    <?php

                  $sql = "SELECT * FROM todo ";
                  $tquery = $conn->query($sql);


                  $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
                  FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id
                  WHERE exercises.Exercises = 'Triceps'";

                  $query = $conn->query($sql);
                  $total = $query->num_rows/$tquery->num_rows*100;
              ?>
<br>
    <span class="info-box-number text-center"><?php echo $query->num_rows?></span>
    <div class="progress">
      <div class="progress-bar" style="width:<?php echo $total?>%"></div>
    </div>
    <span class="progress-description text-center">
    <?php echo $total?>%
    </span>
  </div>
</div>




<div class="info-box col-lg-2 col-xs-6 ml-4 p-4 text-center" style="background-color:#bfa839;  color:white;">
  <div class="info-box-content">


    <span class="info-box-text text-center mb-2">Biceps <br> Excersise</span>

                  <?php

              $sql = "SELECT * FROM todo ";
              $tquery = $conn->query($sql);


              $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
              FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id
              WHERE exercises.Exercises = 'Biceps'";

              $query = $conn->query($sql);
              $total = $query->num_rows/$tquery->num_rows*100;
              ?>
<br>

    <span class="info-box-number text-center"><?php echo $query->num_rows?></span>
    <div class="progress">
      <div class="progress-bar" style="width:<?php echo $total?>%"></div>
    </div>
    <span class="progress-description text-center">
    <?php echo $total?>%
    </span>
  </div>
</div>



<div class="info-box col-lg-2 col-xs-6 ml-4 p-4 text-center" style="background-color:#E45C12;  color:white;">
  <div class="info-box-content">


    <span class="info-box-text text-center mb-2">Legs <br> Excersise</span>

                <?php

            $sql = "SELECT * FROM todo ";
            $tquery = $conn->query($sql);


            $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
            FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id
            WHERE exercises.Exercises = 'Legs'";

            $query = $conn->query($sql);
            $total = $query->num_rows/$tquery->num_rows*100;
            ?>
<br>

    <span class="info-box-number text-center"><?php echo $query->num_rows?></span>
    <div class="progress">
      <div class="progress-bar" style="width:<?php echo $total?>%"></div>
    </div>
    <span class="progress-description text-center">
    <?php echo $total?>%
    </span>
  </div>
</div>





<div class="info-box col-lg-2 col-xs-6 ml-4 p-4 text-center" style="background-color:#bc292e;  color:white;">
  <div class="info-box-content">


    <span class="info-box-text text-center mb-2">Back <br> Excersise</span>

              <?php

          $sql = "SELECT * FROM todo ";
          $tquery = $conn->query($sql);


          $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
          FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id
          WHERE exercises.Exercises = 'Back'";

          $query = $conn->query($sql);
          $total = $query->num_rows/$tquery->num_rows*100;
?>
<br>

    <span class="info-box-number text-center"><?php echo $query->num_rows?></span>
    <div class="progress">
      <div class="progress-bar" style="width:<?php echo $total?>%"></div>
    </div>
    <span class="progress-description text-center">
    <?php echo $total?>%
    </span>
  </div>
</div>




      </div>
      
            <div class="box-tools pull-right">

      




                <form class="form-inline">
                  <div class="form-group">
                    <label>Select Year: </label>
                    <select class="form-control input-sm" id="select_year">
                      <?php
                        for($i=2022; $i<=2065; $i++){
                          $selected = ($i==$year)?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }
                      ?>
                    </select>

                  </div>
                </form>

              </div>
            <canvas id="bar-chart" width="800" height="450"></canvas>

            


            
<?php
$and = 'AND YEAR(date) = '.$year;
$months = array();
$Chest = array();
$Triceps = array();
$Biceps = array();
$Legs = array();
$Back = array();
for( $m = 1; $m <= 12; $m++ ) {

  $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
  FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id 
  WHERE MONTH(date) = '$m' AND exercises.Exercises = 'Chest' $and ";
  $oquery = $conn->query($sql);
  array_push($Chest, $oquery->num_rows);


  $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
  FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id 
  WHERE MONTH(date) = '$m' AND exercises.Exercises = 'Triceps' $and ";
  $lquery = $conn->query($sql);
  array_push($Triceps, $lquery->num_rows);


  $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
  FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id 
  WHERE MONTH(date) = '$m' AND exercises.Exercises = 'Biceps' $and ";
  $bquery = $conn->query($sql);
  array_push($Biceps, $bquery->num_rows);


  $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
  FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id 
  WHERE MONTH(date) = '$m' AND exercises.Exercises = 'Legs' $and ";
  $lequery = $conn->query($sql);
  array_push($Legs, $lequery->num_rows);


  $sql = "SELECT *, exercises.id AS eid, todo.id AS wid 
  FROM todo LEFT JOIN exercises ON exercises.id=todo.workout_id 
  WHERE MONTH(date) = '$m' AND exercises.Exercises = 'Back' $and ";
  $baquery = $conn->query($sql);
  array_push($Back, $baquery->num_rows);


  $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
  $month =  date('M', mktime(0, 0, 0,  $m, 1));
  array_push($months, $month);
}

$months = json_encode($months);
$Triceps = json_encode($Triceps);
$Chest = json_encode($Chest);
$Biceps = json_encode($Biceps);
$Legs = json_encode($Legs);
$Back = json_encode($Back);

?>
                            
                                <Script>
    
                                // Bar chart
                                    new Chart(document.getElementById("bar-chart"), {
                                        type: 'bar',
                                        data: {
                                        labels:  <?php echo $months ; ?>,
                                        datasets: [
                                            {
                                                label               : 'Triceps Excersise',
                                                backgroundColor: "#3e95cd",
                                            data:  <?php echo $Triceps ; ?>,
                                            },
                                            {
                                                label               : 'Chest Excersise',
                                                backgroundColor:"#3cba9f",
                                            data: <?php echo $Chest ; ?>,
                                            },

                                            {
                                                label               : 'Biceps Excersise',
                                                backgroundColor:"#bfa839",
                                            data: <?php echo $Biceps ; ?>,
                                            },
                                            {
                                                label               : 'Legs Excersise',
                                                backgroundColor:"#E45C12",
                                            data: <?php echo $Legs ; ?>,
                                            },
                                            
                                            {
                                                label               : 'Back Excersise',
                                                backgroundColor:"#bc292e",
                                            data: <?php echo $Back ; ?>,
                                            },

                                           
                                             


                                            
                                            
                                        ]
                                        },
                                        options: {
                                        legend: { display: false },
                                        title: {
                                            display: true,
                                        }
                                        }
                                    });


                                 
                                    </Script>
                                    <script>
                                    $(function(){
                                    $('#select_year').change(function(){
                                    window.location.href = 'home.php?year='+$(this).val();
                                    });
                                    });
                                        </script>

              
            </div>
        </div>

        
    </section>

<?php include 'layout/footer.php'?>
    