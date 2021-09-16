
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
          <label for="level" class="sr-only">Level</label>
          <input id="level" name="level" type="text" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Level">
        </div>

<?php 
session_start();

echo $_SESSION['studID'];
echo $_SESSION['studReg'];
echo $_SESSION['studPhone'];
echo $_SESSION['studDepartment'];
echo $_SESSION['studLevel'];
echo $_SESSION['studName'];