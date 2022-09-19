<div class="pb-6">
    <button>
        <a href="/"><i class="fa fa-close pr-11"></i></a>
    </button>
    <span>Step 3 of 4</span>
</div>

<div class="w-4/5 mx-auto flex flex-col justify-between h-[540px]">
    <div>

        <header class="mb-6">
            <h2 class="text-3xl font-semibold">
                You'll need a password
            </h2>
            <p>Make sure it's 8 characters or more.</p>
        </header>
    
        <div class="mb-2">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="password"
                placeholder="Password"
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
    </div>

    <div>
        <div class="mb-6">
            <button
                class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold"
                @click="registerStep = 'registerStep4'"
                @click.prevent
            >
                Log in
            </button>
        </div>
    
        <div class="mt-8">
            <p class="text-gray-500">
                Don't have an account?
                <a href="/login" class="text-cyan-600">
                    Next
                </a>
            </p>
        </div>

    </div>

</div>
<?php /**PATH C:\xampp\Projects\laravel-student\resources\views/components/register/register-step3.blade.php ENDPATH**/ ?>