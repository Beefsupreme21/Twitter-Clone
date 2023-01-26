<div class="pl-6 pt-4 pb-6 flex">
    <button>
        <a href="/"><i class="fa fa-close fa-lg"></i></a>
    </button>
    <div>
        <div class="fa-brands fa-twitter fa-2x pl-56"></div>
    </div>
</div>

<div class="w-4/6 mx-auto flex flex-col" x-data="{accept: false}">
    <div class="pb-60">
        <header class="">
            <h2 class="text-3xl font-semibold mb-6">
                Enter your password
            </h2>
        </header>
        <div class="mb-2">
            <input
                type="password"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="password"
                x-model="accept"
            />
            <?php $__errorArgs = ['password'];
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
        <div>
            <a href="/login" class="text-cyan-600 text-sm">
                Forgot password?
            </a>
        </div>
    </div>
    
    <div>
        <div class="mb-6" x-show="accept">
            <button
                class="bg-white rounded py-4 px-4 text-black w-full rounded-3xl font-bold"
                type="submit"
            >
                Log in
            </button>
        </div>
        <div class="mb-6" x-show="!accept">
            <button
                class="bg-gray-400 rounded py-4 px-4 text-black w-full rounded-3xl font-bold"
                type="submit" disabled
            >
                Log in
            </button>
        </div>
        <div>
            <p class="text-gray-500">
                Don't have an account?
                <a href="/register" class="text-cyan-600">
                    Sign up
                </a>
            </p>
        </div>
    </div>
</div>

<?php /**PATH C:\xampp\Projects\Twitter-Clone\resources\views/components/login/login-password.blade.php ENDPATH**/ ?>