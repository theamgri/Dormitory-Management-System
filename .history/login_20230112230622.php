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
        <span class="self-center align-middle pl-2 text-2xl font-Montserrat font-bold whitespace-nowrap"
          style="color: #22215B">Kuya Mic's Dormitory </span>

      </a>

      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        aria-controls="navbar-default" aria-expanded="false">
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
          <li>
            <a href="#"
              class="block bg-blue-700 font-Montserrat rounded text-xl md:bg-transparent md:text-blue-700 md:p-4"
              aria-current="page" style="color: #5A5B6A">Login</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4" aria-current="page"><img
                src="https://icones.pro/wp-content/uploads/2021/02/icone-utilisateur-gris.png" class="h-1 mr-3 sm:h-10"
                alt="KM Logo" /></a>
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

  <div class="text-center pt-4">

    <div class="pt-4">
      <label for="usernme" id="username" class="inline-block sm:text-4xl text-sm font-medium text-gray-900"
        style="color: #22215B; ">Username</label>
      <input type="lname" name="username" style="height: 5rem; width:40rem;"
        class="inline-block ml-6 block p-3.5 bg-gray-10 text-gray-900 sm:text-2xl rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400">
    </div>

    <div class="sm:ml-1.5 pt-4">
      <label for="pass" id="password" class="sm:inline-block sm:text-4xl sm:font-medium text-gray-900"
        style="color: #22215B;">Password</label>
      <input type="password" name="password" style="height: 5rem; width:40rem;"
        class="inline-block block ml-6 p-3.5 bg-gray-10 text-gray-900 sm:text-2xl rounded-xl block dark:bg-gray-100 dark:placeholder-gray-400">

    </div>

    <div class="sm:text-center pb-6">
      <button type="submit" name="login"
        class="mt-8 text-white bg-primary-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-2xl text-2xl px-10 py-2.5 sm:text-center "
        style="background-color:#ADDDD0; height: 5rem; width: 15rem;">LOGIN


      </button>
    </div>

  </div>

</body>

</html>