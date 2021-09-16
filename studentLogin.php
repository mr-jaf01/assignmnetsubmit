<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="assets/fedpolybauchi.jpeg" alt="Workflow">
      <h2 class="mt-6 text-center text-2xl font-extrabold text-gray-900">
        Web based Assignment Submission and feedback With SMS and USSD FPTB
      </h2>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Student Login
      </h2>
<h4>
  <a  class="text-center font-weight-bold" href="/assignmentsubmit/lecturer/">LECTURER LOGIN</a>
</h4>

      <div>
      <?php
      session_start();
        include('db/connect_db.php');
        if(isset($_POST['login'])){
          $regno = $_POST['regno'];
          $password = $_POST['password'];

          $query = "SELECT * FROM student WHERE studReg='$regno'";
          $run = mysqli_query($conn, $query);
          $check = mysqli_num_rows($run);
          if($check > 0){

            while($studentdata = mysqli_fetch_assoc($run)){
              $dbregno = $studentdata['studReg'];
              $dbpassword = $studentdata['studPass'];
              $dbstudID = $studentdata['studID'];
              $dbstudName = $studentdata['studName'];
              $dbphone = $studentdata['studPhone'];
              $dbstudDepartment = $studentdata['studDepartment'];
              $dbstudlevel = $studentdata['studLevel'];
            }

            if($regno == $dbregno){
                if($password == $dbpassword){
                  ?>
                  <p class=" rounded-lg bg-green-400 p-4">Login Successfully<br>Redirecting ...</p>
                  <?php
                  header('Refresh:3, url=studentdash.php');
                  $_SESSION['studID'] =  $dbstudID;
                  $_SESSION['studReg'] = $dbregno;
                  $_SESSION['studName'] = $dbstudName;
                  $_SESSION['studPhone'] = $dbphone;
                  $_SESSION['studDepartment'] = $dbstudDepartment;
                  $_SESSION['studLevel'] = $dbstudlevel;
                }else{
                  ?>
                  <p class=" rounded-lg bg-red-400 p-4">Incorrect Password</p>
                  <?php
                   
                }
            }else{
              ?>
            <p class=" rounded-lg bg-red-400 p-4">Wrong Reg No</p>
            <?php
            }

          }else{
            ?>
            <p class=" rounded-lg bg-red-400 p-4">Opss! Student Not Found</p>
            <?php
          }

        }
      
      ?>
      
      
      
      </div>
    </div>

    <form class="mt-8 space-y-6" action="#" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="email-address" class="sr-only">Reg No</label>
          <input id="email-address" name="regno" type="text" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Reg No">
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
          <label for="remember-me" class="ml-2 block text-sm text-gray-900">
            Remember me
          </label>
        </div>

        <div class="text-sm">
          <a href="index.php?page=studentregister" class="font-medium text-indigo-600 hover:text-indigo-500">
            New Registration ? click Here
          </a>
        </div>
      </div>

      <div>
        <button name="login" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Login
        </button>
      </div>
    </form>
  </div>
</div>
