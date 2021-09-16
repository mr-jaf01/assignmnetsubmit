
<div class="container">
    <div class="row">

        <div class="col-md-12">
        
        <table class="table table-border">
        
            <tr>
                <td class="font-weight-bold">Assignment ID</td>
                <td class="font-weight-bold">Assignment Course</td>
                <td class="font-weight-bold">Assignment Question</td>
                <td class="font-weight-bold">Created By</td>
                <td class="font-weight-bold">Assignment Date</td>
                <td class="font-weight-bold">Status</td>
            </tr>

            <?php 
            include('db/connect_db.php');

                $allassignment = "SELECT * FROM asstable WHERE assStatus='New' && assClass='".$_SESSION['studLevel']."'";
                $run = mysqli_query($conn,$allassignment);
                $check = mysqli_num_rows($run);
                if($check > 0){
                    while($assdata = mysqli_fetch_assoc($run)){
                        ?>
                        
                        <tr>
                            <td><?php echo $assdata['assID'] ?></td>
                            <td><?php echo $assdata['assCourse'] ?></td>
                            <td><?php echo $assdata['assQtion'] ?></td>
                            <td><?php echo $assdata['assAuthor'] ?></td>
                            <td><?php echo $assdata['assDate'] ?></td>
                            <td style="color:red"><?php echo $assdata['assStatus'] ?></td>
                            <td><a  href="studentdash.php?page=submitnewassignment&assQtion=<?php echo $assdata['assQtion'] ?>" class="btn btn-sm btn-success rounded-lg">Submit Your Assignment</a></td>
                        </tr>
                        
                        <?php
                    }
                }else{
                    ?>
                    <p class="alert alert-info">No New Assignment Yet!!</p>
                    <?php
                }
               
            
            
            ?>
            <tr></tr>


        </table>
        
        
        
        </div>
    </div>
</div>