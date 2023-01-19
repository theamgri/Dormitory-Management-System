<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $status = $_POST['status'];
  $type = $_POST['type'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];

  $sql = "INSERT into `users` (`fname`,`lname`,`email`,`password`,`status`,`type`,`address`,`mobile`) VALUES('$fname','$lname','$email','$password','$status','$type','$address','$mobile')";
  $result = mysqli_query($con, $sql);

  if($result){
    echo "data inserted successfully";
  }else{
    die(mysqli_error($con));
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p class="text-2xl text-center">Tenant Profile</p>
  <div class="md:flex md:justify-center mb-6">


    <form class="w-1/2 text-center flex-col" method="post">
      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
            name</label>

          <input type="text" name="fname"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="John" required>
        </div>
        <div>
          <label for="lname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
          <input type="text" name="lname"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Doe" required>
        </div>
      </div>


      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
        <input type="email" name="email"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="john.doe@company.com" required>
      </div>
      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
        <input type="password" name="password"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="•••••••••" required>
      </div>


      <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
          <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>

          <input type="text" name="status"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="" required>
        </div>
        <div>
          <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Tenant</label>
          <input type="text" name="type"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="" required>
        </div>
      </div>

      <div class="mb-6">
        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
        <input name="address"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="" required>
      </div>


      <div>
        <label for="mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
        <input type="tel" name="mobile"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="123-45-678" required>
      </div>
   
      <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="submit">Submit</button>
    </form>

  </div>
</body>

</html>