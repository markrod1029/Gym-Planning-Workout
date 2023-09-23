<?php include 'layout/header.php'?>
<?php $page="announce"; include 'layout/sidebar.php'?>
<?php include 'layout/menu.php'?>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Announcement Add</h3>
        <p class="text-subtitle text-muted">Dashboard/Announcement</p>
    </div>


    <section class="section">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title text-primary">Add New Announcement</h4>
            </div>
            <div class="card-body">
            <form class="form form-vertical" action="action/announcement_add.php" method="POST">
                <div class="form-body">
                    <div class="row">


                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="first-name-icon">Date</label>
                            <div class="position-relative">
                                <input type="date" class="form-control" name="date" placeholder="Annoucement Date" id="first-name-icon" required>
                                <div class="form-control-icon">
                                    <i data-feather="calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Announcement</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="6" placeholder="Announcement Here" required> </textarea>
                        </div>

                   


                
                   
                  
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" name="save" class="btn btn-primary mr-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                    </div>
                    </div>
                </div>
            </form>
            </div>
        </div>

    </section>

</div>
    

<?php include 'layout/footer.php'?>
    