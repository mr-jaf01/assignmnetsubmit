
<div class="container">

<div class="row">
     <div class="col-md-12">
         <p>
             <a class="btn btn-sm btn-black rounded-full" href="lecturerDash.php?page=viewsubmit&pg=hndsubmit">View HND submission</a>
             <a class="btn btn-sm btn-black rounded-full" href="lecturerDash.php?page=viewsubmit&pg=ndsubmit">View ND Submission</a>
             
         </p>
     </div>
</div>
<hr class="my-1" />

<?php 
if(isset($_GET['pg'])){
    $pg = $_GET['pg'];
    include($pg.'.php');
}

?>
</div>