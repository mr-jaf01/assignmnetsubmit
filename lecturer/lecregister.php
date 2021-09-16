<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="assets/fedpolybauchi.jpeg" alt="Workflow">
      <h2 class="mt-6 text-center text-2xl font-extrabold text-gray-900">
      Web based Assignment Submission and feedback With SMS and USSD FPTB
      </h2>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Lecturer Registration
      </h2>
        <div>
            <?php 
            include('db/connect_db.php');
            if(isset($_POST['lecregister'])){
                $lecName = $_POST['lecName'];
                $lecPhone = $_POST['lecPhone'];
                $lecDepartment = $_POST['lecDepartment'];
                $lecCourse = $_POST['lecCourse'];
                $lecusername = $_POST['lecUser'];
                $lecPass = $_POST['lecPass'];

                $register_new = "INSERT INTO lecturer(lecName,lecPhone,lecDepartment,lecCourse,lecUsername,lecPass) 
                VALUES('$lecName','$lecPhone','$lecDepartment','$lecCourse','$lecusername','$lecPass')";
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
          <label for="regno" class="sr-only">Lecturer Name</label>
          <input id="regno" name="lecName" type="text" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Lecturer Name">
        </div>

        <div>
          <label for="fullname" class="sr-only">Lecturer Phone</label>
          <input id="fullname" name="lecPhone" type="text" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Lecturer Phone">
        </div>

        <div>
          <label for="phone" class="sr-only">Department</label>
          <input id="phone" name="lecDepartment" type="text" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Lecturer Department">
        </div>

        <div>
          <label for="department" class="sr-only">Lecturer Course</label>
          <input id="department" name="lecCourse" type="text" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Lecturer Course">
        </div>

        <div>
          <label for="level" class="sr-only">Username</label>
          <input id="level" name="lecUser" type="text" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="User Name">
        </div>

        <div>
          <label for="password" class="sr-only">Password</label>
          <input id="password" name="lecPass" type="password" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
        </div>
      </div>

      <div class="flex items-center justify-between">
        
        <div class="text-sm">
          <a href="index.php?page=lecLogin" class="font-medium text-indigo-600 hover:text-indigo-500">
           Login ? click Here
          </a>
        </div>
      </div>

      <div>
        <button name="lecregister" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
