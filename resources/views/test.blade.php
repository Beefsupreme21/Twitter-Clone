<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Twitter Clone</title>
        <link rel = "icon" href = 
"https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png" 
        type = "image/x-icon">

        <img  class="rounded-full w-12" alt="">

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://kit.fontawesome.com/19ab508515.js" crossorigin="anonymous"></script>

        <style>
            .custom-checkbox-input {
                display: none;
            }

            .custom-checkbox-text {
                padding: 1rem;
                background-color: #aaa;
                color: #555;
                cursor: pointer;
                user-select: none;
            }

            .custom-checkbox-input:checked ~ .custom-checkbox-text {
                background-color: red;
                color: white;
            }

        </style>
    </head>

    <body>
        <label class="custom-checkbox">
            <input type="hidden" name="alarm" value="False" />
            <input class="custom-checkbox-input" name="alarm" value="True" type="checkbox">
            <span class="custom-checkbox-text">Alarm</span>
        </label>
    </body>
</html>



