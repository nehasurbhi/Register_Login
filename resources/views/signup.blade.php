<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Signup</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
          .signup-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            max-width: 400px;
            margin-top: 50px;
          }
          
          .signup-form form {
            width: 100%;
          }
          .checkbox{
            color: green !important;
          }
        </style> 
    </head>
    <body class="bg-cover " style="background-image: url(/images/Signup_bc.png)">

    <div class="grid grid-cols-6 h-screen justify-center">
      <div class="col-span-2 flex items-center  text-white h-full">
        <div class="mx-auto">
          <span class="text-6xl font-semibold">Unlock</span>
          <br>
          <span class="text-4xl font-semibold">a world of possibilities</span>
          <br>
          <span class="text-4xl"> with just a click</span>
          <img src="/images/lock.png" alt="lock" class="mx-auto">
        </div>
      </div>
       
      
      <div class="col-span-4  ">
        
        <div class="signup-form">
         <div class="text-center my-3 mx-auto">
          <h2 class="text-4xl font-semibold text-gray-500">Sign Up for an account !</h2>
          <p class="text-sm text-gray-500">Sign up for seamless access and personalized experiences!</p>
         </div>
         
          <form class=" " id="form" action="#" method="POST">
            <div class="mt-2">
              <label for="username" class="block text-sm font-medium leading-6 text-gray-400">Usernames</label>
                <input id="username" name="username" type="username" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green sm:text-sm sm:leading-6">
            </div>

            <div class="mt-2">
              <label for="email" class="block text-sm font-medium leading-6 text-gray-400">Email address</label>
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green sm:text-sm sm:leading-6">
            </div>

            <div class="mt-2">
                <label for="password" class="block text-sm font-medium leading-6 text-gray-400">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green sm:text-sm sm:leading-6">
            </div>

            <div class="my-2">
                <label for="confirmPassword" class="block text-sm font-medium leading-6 text-gray-400"> Confirm Password</label>
              
                <input id="confirmPassword" name="confirmPassword" type="Password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green sm:text-sm sm:leading-6"> 
            </div>


            <div class="my-5">
              <button type="submit" id="submit" class="flex mt-5 w-full justify-center rounded-md bg-green px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-700">Sign Up</button>
            </div>
          </form>

          <p class=" text-center text-sm text-gray-600 font-semibold">
          Already have an account ?
            <a href="{{ url('/sign') }}" class="font-semibold leading-6 text-green hover:text-green-800">Sign In</a>
          </p>
        </div>

      </div> 
        <!-- form end -->
    </div>

    <script>
      var obj = {
      username: "",
      email: "",
      password:"",
      password: "",
    }
  var form = document.getElementById("form")
   form.addEventListener('submit', function(event){
    event.preventDefault();
     obj.username = document.getElementById("username").value
     obj.email = document.getElementById("email").value
     obj.password = document.getElementById("password").value
     obj.confirmPassword = document.getElementById("confirmPassword").value
     sendData(obj);

   });
   function sendData(obj) {
    $.ajax({
  url: 'api/signup/create',
  method: 'POST',
  dataType: 'json',
  data: obj,
  success: function(response) {
    console.log(response);
  },
  error: function(error) {
    console.error('Error:', error);
  }
});
   }
 
    </script>

    </body>
</html>
