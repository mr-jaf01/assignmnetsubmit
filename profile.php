<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
        <h4 class="font-weight-bold">Profile Info</h4>
        <hr class="my-1" />
            <p>Student Reg No. : <span class="font-weight-bold"><?php echo $_SESSION['studReg']?></span></p>
            <br>

            <p>Student Name  : <span class="font-weight-bold"><?php echo $_SESSION['studName']?></span></p>
            <br>

            <p>Student Phone : <span class="font-weight-bold"><?php echo $_SESSION['studPhone']?></span></p>
            <br> 

            <p>Student Department : <span class="font-weight-bold"><?php echo  $_SESSION['studDepartment']?></span></p>
            <br>

            <p>Student Class: <span class="font-weight-bold"><?php echo $_SESSION['studLevel']?></span></p>
            <br>

            <p><a class="btn btn-danger rounded-full" href="logout.php">Logout</a></p>
            <br>

            
        </div>
    </div>
</div>