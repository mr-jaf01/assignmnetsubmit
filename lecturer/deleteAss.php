<?php
include('db/connect_db.php');
$assID = $_GET['assID'];
$deletequery = "DELETE FROM asstable WHERE assID='$assID'";
if(mysqli_query($conn, $deletequery)){
?>
    <p class="alert alert-success"> Assignment Delete Successfully</p>
    <p><a href="lecturerDash.php?page=viewAss" class="btn btn-black rounded-full">Back</a></p>
<?php
}else{

    ?>
        <p class="alert alert-danger"> Unable To Delete Assignment</p>
    <?php
}