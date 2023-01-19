<?php
include 'connect.php';
$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $status = $_POST['status'];
  $type = $_POST['type'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];

  $sql = "UPDATE `tenants` SET id=$id,`fname`='$fname',`lname`='$lname',`email`='$email',`password`='$password',`status`='$status',`type`='$type',`address`='$address',`mobile`='$mobile' WHERE id=$id";
  $result = mysqli_query($con, $sql);

  if ($result) {
    header('location:display.php');
  } else {
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
  <link rel="icon" type="image/x-icon" href="/assets/logo.png">
  <title>Update Tenant Profile</title>
</head>

<body>

  <div class="h-10 w-full h-screen bg-scroll bg-cover bg-bottom"
    style="height: 50rem; background-image: url(/assets/background.png);">

    <h1 class="font-Montserrat font-bold leading-tight text-4xl mt-0 mb-2"
      style="text-align:center; color: #22215B; padding-top:0%; padding-left: 10;">Update Tenant Profile</h1>


    <div class="pt-4 mx-auto w-64 text-center ">

      <div class="relative w-64">
        <img class="w-64 h-64 rounded-full absolute"
          src="https://i.pinimg.com/474x/25/23/b0/2523b07f62715045b1fc6b984c094704.jpg" alt="" />
        <div
          class="w-64 h-64 group hover:bg-gray-200 opacity-60 rounded-full absolute flex justify-center items-center cursor-pointer transition duration-500">
          <label class="cursor-pointer mt-6">
            <img class="hidden group-hover:block w-12" src="https://www.svgrepo.com/show/33565/upload.svg" alt="" />
            <input type='file' class="hidden" :multiple="multiple" :accept="accept" />
          </label>


        </div>
      </div>


    </div>
    <form style="float:center" method="post">
      <div style="text-align: center; margin-top: 15%">
        <h1 class="font-bold text-2xl">Upload Profile Picture</h1>
        <h1 class="font-bold text-gray-400 py-2">Room No. 5</h1>

      </div>
      <div class="text-center">
        <label for="name" class="text-l font-semibold font-Montserrat"
          style="margin-left: -12rem; color: #888888">Firstname</label>
        <label for="name" class="text-l font-semibold font-Montserrat"
          style="margin-left: 17rem; color: #888888">Lastname</label>
      </div>
      <div class="text-center pt-4">
        <input name="fname" type="text" style="height: 3rem; width:20rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"
          required>
        <input name="lname" type="text" style="height: 3rem; width:20rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"
          required>
      </div>
      <div class="text-center pt-4">
        <label name="email" class="text-l font-semibold font-Montserrat"
          style="margin-left: -35.5rem; color: #888888">Email</label>
      </div>
      <div class="text-center pt-4">
        <input name="email" type="email" style="height: 3rem; width:42rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"
          required>
      </div>
      <div class="text-center pt-4">
        <label for="password" class="pt-4 text-l font-semibold font-Montserrat"
          style="margin-left: -34rem; color: #888888">Password</label>
      </div>
      <div class="text-center pt-4">
        <input name="password" type="password" style="height: 3rem; width:42rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"
          required>
      </div>
      <div class="text-center">
        <label for="status" class="text-l font-semibold font-Montserrat"
          style="margin-left: -12rem; color: #888888">Status</label>
        <label for="ttyoe" class="text-l font-semibold font-Montserrat" style="margin-left: 17rem; color: #888888">Type
          of Tenant</label>
      </div>
      <div class="text-center pt-4">
        <input name="status" type="text" style="height: 3rem; width:20rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"
          required>
        <input name="type" type="text" style="height: 3rem; width:20rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"
          required>

      </div>

      <div class="text-center pt-4">
        <label for="add" class="text-l font-semibold font-Montserrat"
          style="margin-left: -34.5rem; color: #888888">Address</label>
      </div>
      <div class="text-center pt-4">
        <input name="address" type="text" style="height: 3rem; width:42rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"
          required>
      </div>

      <div class="text-center pt-4">

        <label for="phnum" class="text-l font-semibold font-Montserrat"
          style="margin-left: -32.5rem; color: #888888">Phone Number</label>
      </div>
      <div class="text-center pt-4">
        <input readonly type="text" style="height: 3rem; width:5rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"></input>
        <input name="mobile" type="tel" style="height: 3rem; width:35rem;"
          class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-sm rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400"
          required></input>


      </div>
      <label for="phnum" class="text-l font-semibold font-Montserrat"
        style="margin-top: 2%; margin-left: -32.5rem; color: #888888">Upload Contract</label>


      <div class="sm:text-center pb-6">
        <button onclick="location.href='display.php'" name="submit" type="submit"
          class="mt-6 text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-full text-md px-10 py-2.5 sm:text-center "
          style="margin-left: 0rem; background-color:#ADDDD0; height: 3rem; width: 20rem;">Update Profile</button>
      </div>


    </form>
  </div>




</body>

</html>