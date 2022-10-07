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
    </head>

    <body class="bg-blue-800 text-black">
        <form action="/comments/replies" method="POST">
            <?php echo csrf_field(); ?>
            <div class="relative">
                <input
                    type="text"
                    name="body"
                    class="main-background text-xl pb-6 focus:outline-none"
                    placeholder="Tweet your reply"
                />             
                <input
                    type="text"
                    name="user_id"
                    class="main-background text-xl pb-6 focus:outline-none"
                    placeholder="User ID"
                />                
                <input
                    type="text"
                    name="comment_id"
                    class="main-background text-xl pb-6 focus:outline-none"
                    placeholder="Comment ID"
                />                
                <input
                    type="text"
                    name="post"
                    class="main-background text-xl pb-6 focus:outline-none"
                    placeholder="Post ID"
                />
            </div>

            <div class="flex justify-between pt-4">
                <div>
                    <button type="submit" class="bg-blue-500 rounded-full text-white px-6 py-2 mr-4 mb-4">Reply</button>
                </div>
            </div>
        </form>
    </body>
</html>



<?php /**PATH C:\xampp\Projects\Twitter-Clone\resources\views/test.blade.php ENDPATH**/ ?>