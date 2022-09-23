<div class="pl-6 pt-4 pb-6 flex">
    <button>
        <a href="/"><i class="fa fa-close fa-lg"></i></a>
    </button>
    <div>
        <div class="fa-brands fa-twitter fa-2x pl-56"></div>
    </div>
</div>

<div class="w-2/4 mx-auto">
    <header class="">
        <h2 class="text-3xl font-semibold mb-6">
            Sign in to Twitter
        </h2>
    </header>


    <div class="mb-6 bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold">
        <div class="flex items-center justify-center">
            <div class="img-background pr-2">
                <img src="<?php echo e(asset('images/google.png')); ?>"  alt="">
            </div>
            <button>
                Sign in with Google
            </button>
        </div>

    </div>

    <div class="mb-6 bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold">
        <div class="flex items-center justify-center">

            <i class="fa-brands fa-apple fa-lg pr-2"></i>
            <button>
                Sign in with Apple
            </button>
        </div>
    </div>

    <div class="mb-6">
        <input
            type="text"
            class="bg-black border border-gray-800 rounded p-4 w-full"
            name="email"
            placeholder="Phone, email, or username"
            value="<?php echo e(old('name')); ?>"
        />
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-sm mt-1"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    
    <div class="mb-6">
        <button
            class="bg-white rounded py-1.5 text-black w-full rounded-3xl font-bold"
            @click="currentStep = 'password'"
            @click.prevent
        >
            Next
        </button>
    </div>

    <div class="mb-6">
        <button class="bg-black border border-gray-800 rounded py-1.5 text-white w-full rounded-3xl font-bold hover:bg-zinc-700">
            Forgot password?
        </button>
    </div>

    <div class="mt-8">
        <p class="text-sm text-gray-500">
            Don't have an account?
            <a href="/register" class="text-cyan-600 font-medium hover:underline">
                Sign up
            </a>
        </p>
    </div>
</div>


<?php /**PATH C:\xampp\Projects\Twitter-Clone\resources\views/components/login/login-register.blade.php ENDPATH**/ ?>