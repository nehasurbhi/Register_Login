<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Sign</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
          .signup-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            max-width: 400px;
            margin-top: 100px;
          }
          
          .signup-form form {
            width: 100%;
          }
          .checkbox{
            color: green !important;
          }
        </style> 
    </head>
    <body class="">

    <div class="grid grid-cols-6 h-screen justify-center">
      <div class="col-span-2 flex items-center  text-white h-full" >
        <div class="">  
          <img src="/images/Login1.png" alt="lock" class="mx-auto">
        </div>
      </div>
       
      
      <div class="col-span-4  ">
        
        <div class="signup-form">
         <div class="text-center my-3 mx-auto">
          <h2 class="text-4xl font-semibold text-gray-500">Welcome Back !</h2>
          <p class="text-sm text-gray-500">Please LogIn your Account</p>
         </div>
         
          <form class=" " action="#" method="POST">

            <div class="mt-2">
              <label for="email" class="block text-sm font-medium leading-6 text-gray-400">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green sm:text-sm sm:leading-6">
            </div>

            <div class="mt-2">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-400">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green sm:text-sm sm:leading-6">
            </div>


            <div class="flex items-center justify-between my-4">
                <!--Default checkbox-->
                <div class="flex items-center ">
                    <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 checkbox ">
                    <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-800 dark:text-gray-600">Remember Me</label>
                </div>
                <div class="text-sm">
                  <a href="#" class="font-semibold text-green ">Forgot password?</a>
                </div>
            </div>

            <div>
              <button type="submit" class="flex mt-5 w-full justify-center rounded-md bg-green px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700">Sign in</button>
            </div>
          </form>

          <p class="mt-10 text-center text-sm text-gray-600 font-semibold">
            Don’t have an account yet ?  
           <a href="#" class="font-semibold leading-6 text-green hover:text-green-800">Create an account </a>
          </p>
        </div>

      </div> 
        <!-- form end -->
    </div>

    </body>
</html>
