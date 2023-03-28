<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="/assets/logo.png">

    <nav class="bg-white border-gray-200 px-2 lg:px-4 py-1 rounded dark:bg-gray-100">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
          <a href="https://flowbite.com/" class="flex items-left">
              <img src="/assets/logo.png" class="h-11" alt="KM Logo" /> 
              <span class="self-center align-middle pl-2 text-2xl font-Montserrat font-bold whitespace-nowrap" style="color: #22215B">Kuya Mic's Dormitory </span>  
          </a>
          
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
              <li>
                <a href="login.html" class="block bg-blue-700 font-Montserrat rounded text-xl md:bg-transparent md:text-blue-700 md:p-4" aria-current="page" style="color: #5A5B6A">Logout</a>
              </li>
              <li>
                <a href="home.html" class="block shadow-xl bg-gray-100 font-Montserrat rounded-3xl text-base md:text-gray-700 md:p-4" aria-current="page">Dashboard</a>
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
    <div class="container">
        @yield('content')
    </div>
</body>
</html>