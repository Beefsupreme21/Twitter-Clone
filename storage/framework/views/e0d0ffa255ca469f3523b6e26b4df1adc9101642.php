<header class="sticky top-0 h-screen">
    <div class="text-white flex flex-col px-3 justify-between m-auto" style="height:100vh">
        <div class="text-xl pt-4 xl:items-start">
            <div class="fa-brands fa-twitter fa-xl mb-6 pl-2 hover:text-gray-500"></div>
            <a href="/">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.home','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <p class="pl-4 hidden xl:block">Home</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.explore','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.explore'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <p class="pl-4 hidden xl:block">Explore</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.notifications','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.notifications'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <p class="pl-4 hidden xl:block">Notifications</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.messages','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.messages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <p class="pl-4 hidden xl:block">Messages</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.bookmarks','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.bookmarks'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <p class="pl-4 hidden xl:block">Bookmarks</p>
                </div>
            </a>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.lists','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.lists'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <p class="pl-4 hidden xl:block">Lists</p>
                </div>
            </a>
            <?php if(auth()->guard()->check()): ?>
                <a href="/users/<?php echo e(auth()->user()->id); ?>/edit">
                    <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.profile','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <p class="pl-4 hidden xl:block">Profile</p>
                    </div>
                </a>
            <?php else: ?>
                <a href="/login">
                    <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.profile','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <p class="pl-4 hidden xl:block">Profile</p>
                    </div>
                </a>
            <?php endif; ?>
            <a href="#">
                <div class="flex py-2 pl-2 pr-2 xl:pr-8 mb-2 items-center rounded-full hover:bg-slate-700">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.svg.more','data' => ['class' => 'w-8 h-8']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('svg.more'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <p class="pl-4 hidden xl:block">More</p>
                </div>
            </a>
            <a href="#">
                <div>
                    <button class="hidden bg-blue-400 text-xl text-white font-bold mt-4 mr-12 py-3 px-20 rounded-full xl:block hover:bg-blue-500">
                        Tweet
                    </button>
    
                    <button class="bg-blue-500 mt-4 p-2 rounded-full xl:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>              
                    </button>
                </div>
            </a>
        </div>
        <?php if(auth()->guard()->check()): ?>
            <div>
                <a href="/">
                    <form action="/logout" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="hidden bg-black text-white font-bold mt-4 py-3 px-12 rounded-full xl:block hover:bg-blue-500">
                            Sign Out
                        </button>
                        <button class="bg-black mt-4 p-2 rounded-full xl:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>              
                        </button>
                    </form>
                </a>
                <div class="text-white p-2 my-3 flex justify-between items-center rounded-full hover:bg-slate-700">
                    <div class="flex">
                        <div class="w-12 rounded-full img-background">
                            <img src="<?php echo e(auth()->user()->image ? asset('storage/images/'. auth()->user()->image) : asset('images/default_profile.png')); ?>" class="rounded-full w-12" alt="">
                        </div>
                        <div class="pl-3 hidden xl:block">
                            <p class="font-bold"><?php echo e(auth()->user()->name); ?></p>
                            <div class="flex text-slate-400">
                                <p>@</p>
                                <p><?php echo e(auth()->user()->handle); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden xl:block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>                  
                    </div>
                </div>
            </div>
        <?php else: ?>
            <a href="/login">
                <div class="mb-6">
                    <button class="hidden bg-black text-xl font-bold py-3 px-10 rounded-full xl:block hover:bg-green-700">
                        Login/Register
                    </button>

                    <button class="bg-black mt-4 p-2 rounded-full xl:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>              
                    </button>
                </div>
            </a>
        <?php endif; ?>
    </div>
</header>
<?php /**PATH C:\xampp\Projects\Twitter-Clone\resources\views/components/header.blade.php ENDPATH**/ ?>