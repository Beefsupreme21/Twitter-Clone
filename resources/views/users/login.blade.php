<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twitter Clone</title>
        <link rel = "icon" href = "https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png" 
        type = "image/x-icon">

        <img  class="rounded-full w-12" alt="">

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>

        <style>
            .main-background {
                background-color: #15202B; 
            }
            .hover-background {
                background-color: #2d3741;
            }
            .main-font {
                font-family: 'Segoe UI';
            }

        </style>
    </head>

    <body class="main-background text-white m-auto main-font ">

        <div class="bg-black p-10 rounded-lg mx-auto max-w-[600px] h-[600px] mt-24">

            <form method="POST" action="/users/authenticate">
            @csrf

                <div x-data="{ currentStep: 'login' }">

                    <div x-show="currentStep === 'login'">
                        <x-login.login-register />   
                    </div>  

                    <div x-show="currentStep === 'password'">
                        <x-login.login-password />   
                    </div>

                </div>

            </form>

        </div>

    </body>

</html>



