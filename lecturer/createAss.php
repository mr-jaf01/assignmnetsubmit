<div class="container mt-4">

<div class="row">
    <div class="col-md-8">
    

        <?php 
        include('db/connect_db.php');
        if(isset($_POST['saveqtion'])){

            $class = $_POST['class'];
            $course = $_POST['course'];
            $qtion = $_POST['qtion'];
            $author = $_SESSION['lecName'];
            $date = date('h:i:s Y-m-d');

            $saveqtion = "INSERT INTO asstable(assQtion,assCourse,assAuthor,assDate,assStatus,assClass) 
            VALUES('$qtion','$course','$author','$date', 'New', '$class')";
            $run_saveqtion = mysqli_query($conn, $saveqtion);
            if($run_saveqtion){

                ?>
                        
                <p class="alert alert-info">Assignment Created Successfully</p>
                
                <?php

            }else{
                
                ?>
                        
                <p class="alert alert-danger">Unable to create Assignment</p>
                
                <?php
            }


        }
        
        
        
        ?>



    </div>
</div>



<div class="row">
    <div class="col-md-8">
        <form action="" method="POST">
            <div class="form-group">
                Select Class
                <select class="form-control" name="class">
                    <option value="HND 2">HND 2</option>
                    <option value="HND 1">HND 1</option>
                    <option value="ND 2">ND 2</option>
                    <option value="ND 1">ND 1</option>
                </select>
            </div>

            <div class="form-group">
            Select Course
                <select class="form-control" name="course">
                    <option value="COM123">COM123</option>
                    <option value="COM323">COM323</option>
                    <option value="COM223">COM223</option>
                    <option value="COM423">COM423</option>
                </select>
            </div>

            <div class="form-group">
                Write Question
                <textarea name="qtion" class="form-control" placeholder="Write your Question Here"></textarea>
            </div>

            <button name="saveqtion" class="btn btn-success rounded-full">Create & Save Question</button>
        </form>
    </div>
</div>
</div>
