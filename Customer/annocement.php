<?php include 'layout/header.php'?>
<?php $page="announce"; include 'layout/sidebar.php'?>
<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Announcement </h3>
        <p class="text-subtitle text-muted">Dashboard/Announcement</p>
    </div>

    <section class="tasks">
        <div class="row">
            <div class="col">
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        
                        <h4 class="card-title d-flex">
                            <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Announcement
                        </h4>
              
                        
                    </div>


                    <div class="card-body px-0 py-1">


                        
                        <ul class="widget-todo-list-wrapper" id="widget-todo-list">

                        <?php
                            include "action/conn.php";
                            $qry="select * from announcements";
                            $query = $conn->query($qry);
                            while($row = $query->fetch_assoc()){?>


                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class='cursor-move'></i>
                                     
                                        <span class="widget-todo-title ml-50"><?php echo $row['message']?></span>
                                        <small class="widget-todo-sub-title ml-50  font-weight-bold" ><?php echo $row['date']?></small>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="avatar bg-warning ">
                                            <img src="../images/logo.png" alt="" srcset="">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            


                            <?php 
                    }
                    ?>

                        </ul>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
</div>
    

<?php include 'layout/footer.php'?>
    