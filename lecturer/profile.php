<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
        <h4 class="font-weight-bold">Profile Info</h4>
        <hr class="my-1" />
            <p>Lecturer Name : <span class="font-weight-bold"><?php echo $_SESSION['lecName']?></span></p>
            <br>

            <p>Lecturer Phone  : <span class="font-weight-bold"><?php echo $_SESSION['lecPhone']?></span></p>
            <br>

            <p>Lecturer Department : <span class="font-weight-bold"><?php echo $_SESSION['lecDepartment']?></span></p>
            <br> 

            <p>Lecturer Course : <span class="font-weight-bold"><?php echo $_SESSION['lecCourse']?></span></p>
            <br>

            <p>Lecturer Username : <span class="font-weight-bold"><?php echo $_SESSION['lecUsername']?></span></p>
            <br>

            <p><a class="btn btn-danger rounded-full" href="logout.php">Logout</a></p>
            <br>

            
        </div>
    </div>
</div>