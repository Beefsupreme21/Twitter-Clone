<div class="pl-6 pt-4 pb-6 flex">
    <button>
        <a href="/"><i class="fa fa-close fa-lg"></i></a>
    </button>
    <span class="pl-8 font-bold text-lg">Step 2 of 4</span>
</div>

<div class="w-4/5 mx-auto flex flex-col justify-between h-[540px]">
    <div>
        <header class="">
            <h2 class="text-3xl font-semibold mb-6">
                Create your account
            </h2>
        </header>
    
    
        <div class="mb-6">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="name"
                placeholder="Beefsupreme21"
                value="<?php echo e(old('name')); ?>"
                disabled
            />
            <?php $__errorArgs = ['name'];
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
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="email"
                placeholder="beefsupreme21@hotmail.com"
                value="<?php echo e(old('email')); ?>"
                disabled
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
    
        <div class="mb-2">
            <input
                type="text"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="dob"
                placeholder="Jul 21, 1989"
            />
            <?php $__errorArgs = ['dob'];
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
                @click="registerStep = 'registerStep3'"
                @click.prevent
                class="bg-white rounded py-2 px-4 text-black w-full rounded-3xl font-bold">
                    Sign up
            </button>
        </div>
    </div>

</div>

<?php /**PATH C:\xampp\Projects\Twitter-Clone\resources\views/components/register/register-step2.blade.php ENDPATH**/ ?>