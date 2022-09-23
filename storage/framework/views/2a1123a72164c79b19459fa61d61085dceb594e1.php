<div class="pl-6 pt-4 pb-6 flex">
    <button>
        <a href="/"><i class="fa fa-close fa-lg"></i></a>
    </button>
    <span class="pl-8 font-bold text-lg">Step 4 of 4</span>
</div>

<div class="w-4/5 mx-auto flex flex-col justify-between h-[540px]">
    <div>

        <header class="mb-6">
            <h2 class="text-3xl font-semibold">
                Pick a profile picture
            </h2>
            <p>Have a favorite selfie? Upload it now.</p>
        </header>
    
        <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-1">Image</label>
            <input
                type="file"
                class="bg-black border border-gray-800 rounded p-4 w-full"
                name="image"
            />
    
            <?php $__errorArgs = ['image'];
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
                type="submit"
            >
                Submit
            </button>
        </div>

    </div>

</div>

<?php /**PATH C:\xampp\Projects\Twitter-Clone\resources\views/components/register/register-step4.blade.php ENDPATH**/ ?>