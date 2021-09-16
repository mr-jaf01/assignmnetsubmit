<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
        <h4 class="font-weight-bold">Assignment Submit Form</h4>
        <?php 
                include('db/connect_db.php');
                if(isset($_POST['submit'])){

                    $regno = $_POST['regno'];
                    $coursecode = $_POST['course'];
                    $filename = $_FILES['file']['name'];
                    $filetmp = $_FILES['file']['tmp_name'];
                    $assQtion = $_GET['assQtion'];

                    $date = date('h:i:s Y-m-d');
                    
                    if(move_uploaded_file($filetmp,"filesfolder/$filename")){
                        $submitass = "INSERT INTO submittedass(assQtion,subBy,subDate,subFile,marks,comment,Class) 
                        VALUES('$assQtion','$regno','$date','$filename','','','".$_SESSION['studLevel']."')";
                        $savedata = mysqli_query($conn, $submitass);
                        if($savedata){
                            ?>
                            <p class="alert alert-success">Assignment Submitted Successfully</p>
                            
                            <?php
                        }else{

                            ?>
                            <p class="alert alert-danger">Unable to Save Assignment Record</p>
                            
                            <?php
                        }
                    }else{
                        ?>
                            <p class="alert alert-danger">Unable to Upload Assignment File</p>
                        <?php
                    }
                }
            
            
            ?>        
        
        <br>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-grouo">
                <input type="text" name="regno" class="form-control" placeholder="Enter Reg No" />
              </div>
              <br>
              <div class="form-group">
                    <select class="form-control" name="course">
                        <option>COM234</option>
                        <option>COM434</option>
                        <option>COM334</option>
                        <option>COM4223</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="file" name="file" class="form-control" />
                </div>

                <button name="submit" class="btn btn-primary">Upload & Submit</button>
            </form>


        </div>  
    </div>
</div>