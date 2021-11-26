<?php 
    include('source/session.php');
    include('source/security.php');
    include('include/header.php');
    include('include/navbar.php');
    include('source/config.php');
?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <?php
            include('include/topbar.php');
        ?>
        <!-- End of Topbar -->

        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Add Guide</h6>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Guide's Name</label>
                            <input type="text" name="hotel_name" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <label>Guides's Contact</label>
                            <input type="text" name="hotel_sdes" class="form-control"  required>
                        </div>
                        
                        <div class="form-group">            
                        <label for="hotel_destination">Hotel's destination</label>
                        <select name="hotel_destination" class="form-control" requireed>
                            <?php 
                                $query = "SELECT * FROM destinations ";
                                $query_run = mysqli_query($con,$query);
                                
                                foreach ($query_run as $row)
                                {
                                    ?>
                                        <option value="<?php echo $row['destinations_id']; ?>"><?php echo $row['destinations_name']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                        </div>
  
                        
                        <a href="hotels.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="adddguidelbtn" class="btn btn-primary">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>




    </div>
    <!-- End of Main Content -->


<?php 
    include('include/scripts.php');
    include('include/footer.php');
?>