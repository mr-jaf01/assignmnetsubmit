<div class="row">

<div class="col-md-12">

<table class="table table-border">

    <tr>
        <td class="font-weight-bold">Submit ID</td>
        <td class="font-weight-bold">Assignment Question</td>
        <td class="font-weight-bold">Submitted By</td>
        <td class="font-weight-bold">Submitted Date</td>
        <td class="font-weight-bold">Assignment File</td>
        <td class="font-weight-bold">Class</td>
        <td class="font-weight-bold">Marks</td>
        <td class="font-weight-bold">Comment</td>
    </tr>

    <?php 
    include('db/connect_db.php');

        $allassignment = "SELECT * FROM submittedass WHERE Class='HND 2' || Class='HND 1'";
        $run = mysqli_query($conn,$allassignment);
        $check = mysqli_num_rows($run);
        if($check > 0){
            while($assdata = mysqli_fetch_assoc($run)){
                $dbsubBy = $assdata['subBy'];
                $getStudent = "SELECT * FROM student WHERE studReg='$dbsubBy'";
                    $rungetstudent = mysqli_query($conn,$getStudent);
                    while($subdata1 = mysqli_fetch_assoc($rungetstudent)){
                        $studentphone = $subdata1['studPhone'];
                        //$dbassQ1 = $subdata1['assQtion'];
                        //$dbsubID1 = $subdata1['subID'];
                        
                    }
                ?>
                
                <tr>
                    <td><?php echo $assdata['subID'] ?></td>
                    <td><?php echo $assdata['assQtion'] ?></td>
                    <td><?php echo $assdata['subBy'] ?></td>
                    <td><?php echo $assdata['subDate'] ?></td>
                    <td><?php echo $assdata['subFile'] ?></td>
                    <td><?php echo $assdata['Class'] ?></td>
                    <td style="color:red"><?php echo $assdata['marks'] ?></td>
                    <td ><?php echo $assdata['comment'] ?></td>

                    
                    <td ><a class="btn btn-sm btn-danger rounded-full" href="lecturerDash.php?page=markAss&subID=<?php echo $assdata['subID'] ?>&subBy=<?php echo $assdata['subBy'] ?>">Review & Mark</a></td>
                    <td><a href="https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=LEI5Na0RX4QyLxo36kQy8Yqn7RyVLh08efBVWSrflcf7gEnJAz7PuPqti3rQ&from=Assignment&to=<?php echo $studentphone;  ?>&body=Dear <?php echo $dbsubBy ?> your Marks for Assignemnt is <?php  echo $assdata['marks'] ?>" class="btn btn-primary btn-sm">Send Msg</a></td>
                    
                </tr>
                
                <?php
            }
        }else{
            ?>
            <p class="alert alert-info">No Assignment Submitted Yet!!</p>
            <?php
        }
       
    
    
    ?>
    <tr></tr>


</table>



</div>
</div>