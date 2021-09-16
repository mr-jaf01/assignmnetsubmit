
<div class="container">
    <div class="row">

        <div class="col-md-12">
        
        <table class="table table-border">
        
            <tr>
                <td class="font-weight-bold">Submit ID</td>
                <td class="font-weight-bold">Assignment Question</td>
                <td class="font-weight-bold">Submitted By</td>
                <td class="font-weight-bold">Submitted Date</td>
                <td class="font-weight-bold">Assignment File</td>
                <td class="font-weight-bold">Marks</td>
                <td class="font-weight-bold">Comment</td>
            </tr>

            <?php 
            include('db/connect_db.php');

                $allassignment = "SELECT * FROM submittedass WHERE subBy='".$_SESSION['studReg']."'";
                $run = mysqli_query($conn,$allassignment);
                $check = mysqli_num_rows($run);
                if($check > 0){
                    while($assdata = mysqli_fetch_assoc($run)){
                        ?>
                        
                        <tr>
                            <td><?php echo $assdata['subID'] ?></td>
                            <td><?php echo $assdata['assQtion'] ?></td>
                            <td><?php echo $assdata['subBy'] ?></td>
                            <td><?php echo $assdata['subDate'] ?></td>
                            <td><?php echo $assdata['subFile'] ?></td>
                            <td style="color:red"><?php echo $assdata['marks'] ?></td>
                            <td ><?php echo $assdata['comment'] ?></td>
                            
                        </tr>
                        
                        <?php
                    }
                }else{
                    ?>
                    <p class="alert alert-info">No submission Yet!!</p>
                    <?php
                }
               
            
            
            ?>
            <tr></tr>


        </table>
        
        
        
        </div>
    </div>
</div>