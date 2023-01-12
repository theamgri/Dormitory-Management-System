<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/logo.png">
    <title>Login</title>

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-1 rounded dark:bg-gray-100">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
          <a href="https://flowbite.com/" class="flex sm:items-left">
              <img src="/assets/logo.png" class="h-11" alt="KM Logo" /> 
              <span class="self-center align-middle pl-2 text-2xl font-Montserrat font-bold whitespace-nowrap" style="color: #22215B">Kuya Mic's Dormitory </span>
              
          </a>
          
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
              <li>
                <a href="#" class="block bg-blue-700 font-Montserrat rounded text-xl md:bg-transparent md:text-blue-700 md:p-4" aria-current="page" style="color: #5A5B6A">Login</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4" aria-current="page"><img src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-gris.png" class="h-1 mr-3 sm:h-10" alt="KM Logo" /></a>
              </li>
            </ul>
          </div>
          
        </div>
      </nav>
      
</head>
<body>
    <div class=" w-full bg-cover bg-bottom" style="height:32rem; background-image: url(/assets/dorm.png);">
        
        <div class="flex items-center justify-center h-full w-full bg-teal-200 bg-opacity-50">

        </div>
    </div>
      
        <div class="sm:items-center space-y-4 md:space-y-6 sm:p-8 sm:px-3" style="padding-top: 10rem; padding-left: 12rem">
            
                <div>
                    <label for="username" class="inline-block text-4xl text-sm font-medium text-gray-900" style="color: #22215B; padding-left: 2rem;">Username</label>
                    <input type="user" name="username" id="email" style="height: 4rem; width:30rem;" class="ml-6 inline-block bg-gray-10 text-gray-900 sm:text-sm rounded-full focus:ring-primary-600 focus:border-primary-600 block p-3.5 dark:bg-gray-100 dark:placeholder-gray-400  " required="">
                </div>
                <div>
                    <label for="password" class="sm:inline-block sm:text-4xl sm:font-medium text-gray-900" style="color: #22215B; padding-left: 2rem;">Password</label>
                    <input type="password" name="password" id="password" style="height: 4rem; width:30rem;" class="ml-7 inline-block bg-gray-50  sm:text-sm rounded-full focus:ring-primary-600 focus:border-primary-600 block p-3.5 dark:bg-gray-100 dark:placeholder-gray-400 " required="">
                    
                    
                  </div>
                

                
                  <button type="submit" class="text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-full text-md px-10 py-2.5 sm:text-center " style="margin-left: 22rem; background-color:#ADDDD0; height: 5rem; width: 13rem;">LOGIN</button>
                
            
        </div>
    
</body>
</html>

<?php
function gohome() {
	header("Location: home.html");
	
}

if(array_key_exists('home', $_POST)) {

gohome();
}
?>
</button>
</form>
</div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
  
$conn = mysqli_connect('localhost', 'root', '', 'school');

if ($conn->connect_errno) {

	printf("Failed to connect to database: %/s", $conn->connect_errno);
	exit();
}

$query = "SELECT * FROM account WHERE username='$username' and password='$password'";

$result = mysqli_query($conn, $query);

$account = mysqli_num_rows($result);

if($account > 0) {
	header("location: index.php");
}
else if(empty($username) && empty($password) || empty($username) || empty($password)) {
	echo '<script language="javascript">';
    echo 'alert("Username or Password cannot be blank")';
    echo '</script>';
}

else {
	echo '<script language="javascript">';
    echo 'alert("Account does not exist. Please Register.")';
	echo '</script>';
}
}
?>