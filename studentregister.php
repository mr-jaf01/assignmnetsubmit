<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="assets/fedpolybauchi.jpeg" alt="Workflow">
      <h2 class="mt-6 text-center text-2xl font-extrabold text-gray-900">
      Web based Assignment Submission and feedback With SMS and USSD FPTB
      </h2>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Student Registration
      </h2>
        <div>
            <?php 
            include('db/connect_db.php');
            if(isset($_POST['register'])){
                $regno = $_POST['regno'];
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $department = $_POST['department'];
                $level = $_POST['level'];
                $password = $_POST['password'];

                $register_new = "INSERT INTO student(studReg,studName,studPhone,studDepartment,studLevel,studPass) 
                VALUES('$regno','$fullname','$phone','$department','$level','$password')";
                $run = mysqli_query($conn, $register_new);
                if($run){
                    ?>
                    <p class="bg-green-400 p-4">Registration Successfully</p>
                    <?php
                }else{
                    ?>
                    <p class="bg-red-400 p-4">Opss! Registration Fail</p>
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
          <label for="regno" class="sr-only">Reg No.</label>
          <input id="regno" name="regno" type="text" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Reg No">
        </div>

        <div>
          <label for="fullname" class="sr-only">Full Name</label>
          <input id="fullname" name="fullname" type="text" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Full Name">
        </div>

        <div>
          <label for="phone" class="sr-only">Phone Number</label>
          <input id="phone" name="phone" type="text" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Phone Number">
        </div>

        <div>
          <label for="department" class="sr-only">Department</label>
          <input id="department" name="department" type="text" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Department">
        </div>

        <div>
                <select class="form-control" name="level">
                    <option value="HND 2">HND 2</option>
                    <option value="HND 1">HND 1</option>
                    <option value="ND 2">ND 2</option>
                    <option value="ND 1">ND 1</option>
                </select>
        </div>

        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div class="flex items-center justify-between">
        
        <div class="text-sm">
          <a href="index.php?page=studentLogin" class="font-medium text-indigo-600 hover:text-indigo-500">
            Login ? click Here
          </a>
        </div>
      </div>

      <div>
        <button name="register" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <!-- Heroicon name: solid/lock-closed -->
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Regiter
        </button>
      </div>
    </form>
  </div>
</div>
