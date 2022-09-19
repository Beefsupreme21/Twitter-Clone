<div class="pb-6">
    <button>
        <a href="/"><i class="fa fa-close pr-11"></i></a>
    </button>
</div>

<div class="w-3/5 mx-auto ">
    <div class="text-center">
        <div class="fa-brands fa-twitter fa-2x mb-6"></div>
    </div>

    <header class="">
        <h2 class="text-3xl font-semibold mb-6">
            Sign in to Twitter
        </h2>
    </header>

    <div class="mb-6">
        <button
            class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold"
        >
            Sign in with Google
        </button>
    </div>

    <div class="mb-6">
        <button
            class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold"
        >
            Sign in with Apple
        </button>
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
        <button class="bg-black border border-gray-800 rounded py-1.5 text-white w-full rounded-3xl font-bold">
            Forgot password?
        </button>
    </div>

    <div class="mt-8">
        <p class="text-gray-500">
            Don't have an account?
            <a href="/register" class="text-cyan-600">
                Sign up
            </a>
        </p>
    </div>
</div>


<?php /**PATH C:\xampp\Projects\laravel-student\resources\views/components/login/login-register.blade.php ENDPATH**/ ?>