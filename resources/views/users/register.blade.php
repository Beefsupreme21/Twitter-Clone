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
        <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    </head>

    <body class="main-background text-white m-auto main-font ">

        <div class="bg-black rounded-2xl mx-auto max-w-[600px] h-[600px] md:mt-24">

            <form method="POST" action="/users" enctype="multipart/form-data">
            @csrf

                <div x-data="{ registerStep: 'registerStep1' }">

                    <div x-show="registerStep === 'registerStep1'">
                        <x-register.register-step1 />   
                    </div>  

                    <div x-show="registerStep === 'registerStep2'">
                        <x-register.register-step2 />   
                    </div>

                    <div x-show="registerStep === 'registerStep3'">
                        <x-register.register-step3 />   
                    </div>

                    <div x-show="registerStep === 'registerStep4'">
                        <x-register.register-step4 />   
                    </div>
                    
                </div>

            </form>

        </div>

    </body>

</html>



