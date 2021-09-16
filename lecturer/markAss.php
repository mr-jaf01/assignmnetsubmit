<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <?php 
            include('db/connect_db.php');
            $subID = $_GET['subID'];
            $viewsubmit = "SELECT * FROM submittedass WHERE subID='$subID'";
            $runviewsubmit = mysqli_query($conn,$viewsubmit);
            while($subdata = mysqli_fetch_assoc($runviewsubmit)){
                $dbsubBy = $subdata['subBy'];
                $dbassQ = $subdata['assQtion'];
                $dbsubID = $subdata['subID'];
                $dbsubDate = $subdata['subDate'];
                $dbsubfile = $subdata['subFile'];
                $dbsubClass = $subdata['Class'];
            }


            
          ?>

          <p> Submitted By : <small><?php echo $dbsubBy ?></small></p>
          <p> Class : <small><?php echo $dbsubClass ?></small></p>
          <p> Date Submitted  : <small><?php echo $dbsubDate ?></small></p>
        </div>
    </div>

    <div class="row mt-4">
            <div class="col-md-12">
                <h4 class="font-weight-bold mt-2">Assignment File<h4>
                
                <a  class="btn btn-sm btn-black rounded-full" href="../filesfolder/<?php echo $dbsubfile ?>">View File</a>
            </div>
    </div>

    <div class="row">
            <div class="col-md-8">
            
                <?php 
                
                if(isset($_POST['submitmarks'])){

                    $marks = $_POST['marks'];
                    $comment = $_POST['comment'];


                    $updatequery = "UPDATE `submittedass` SET `marks` = '$marks', `comment` = '$comment' WHERE `submittedass`.`subID` = '$dbsubID'";
                    $runupdate = mysqli_query($conn,$updatequery);
                    if($runupdate){
                        ?>
                        
                        <p class="alert alert-info">Marks & Comment Updated Successfully</p>
                        
                        <script>
                        	
                        
                        
                        
                        </script>
                        
                        <?php
                    }else{
                        ?>
                         <p class="alert alert-danger">Unable to Update Marks</p>
                        <?php
                    }

                }
                
                
                
                
                ?>
            
            
            </div>
    </div>

    <div class="row mt-3">
            <div class="col-md-8">
                <form action="" method="POST">
                    <div class="form-group">
                        Marks 
                        <input class="form-control" required type="text" name="marks" placeholder="Enter Asssignment Marks" />
                        <br><br>
                        Comment (Optional) 
                        <textarea name="comment" class="form-control" placehokder="Comment Here if any"></textarea>
                        <br>
                    </div>

                    <div>
                        <button name="submitmarks" class="btn btn-success rounded-full">Save Marks</button>
                    </div>
                </form>
            </div>
    </div>
</div>
