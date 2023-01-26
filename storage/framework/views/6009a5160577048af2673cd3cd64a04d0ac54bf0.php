<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="container mx-auto md:w-[600px] border-x border-gray-700">
        <div class="flex items-center text-white font-bold text-xl p-2 sticky top-0 z-10 main-background opacity-90 backdrop-blur">
            <a href="/">
                <i class="fa-solid fa-arrow-left p-2 rounded-full hover:bg-slate-700"></i>
            </a>
            <?php if($user->verified == 0): ?> 
                <h1 class="ml-6 opacity-100"><?php echo e($user->name); ?></h1>
            <?php else: ?> 
                <h1 class="ml-6 opacity-100"><?php echo e($user->name); ?></h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                </svg>
            <?php endif; ?>  
        </div>

        <div>
            <div class="w-full h-40 bg-black"></div>
            <div class="relative bottom-20 ml-5 w-1/3 -mb-20">
                <?php if($user->image): ?>
                    <img src="<?php echo e($user->image ? asset('storage/images/'. auth()->user()->image) : asset('images/default_profile.png')); ?>" class="rounded-full picture-background w-32" alt="">
                <?php else: ?>
                    <img src="https://i.pravatar.cc/128?u=<?php echo e($user->id); ?>" class="rounded-full shrink-0 w-32" alt="">
                <?php endif; ?>
            </div>
        </div>

        <div class="border-b border-gray-700 pb-4">
            <div class="ml-5 text-white text-lg">
                <a href="/users/<?php echo e($user->name); ?>" class="font-bold hover:underline"><?php echo e($user->name); ?></a> 
            </div>
            <div class="flex ml-4">
                <div class="ml-1 text-gray-400">@</div>
                <div class="text-gray-400"><?php echo e($user->handle); ?></div> 
            </div>

        </div>


        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/posts/<?php echo e($post->id); ?>">
            <article class="border-b border-gray-700 px-3 py-3 text-white text-base hover:bg-slate-800">
                <div class="flex">
                    <div>
                        <div class="w-12 rounded-full img-background">
                            <?php if($post->user->image): ?>
                                <img src="<?php echo e($post->user->image ? asset('storage/images/'. auth()->user()->image) : asset('images/default_profile.png')); ?>" class="rounded-full w-12" alt="">
                            <?php else: ?>
                                <img src="https://i.pravatar.cc/100?u=<?php echo e($post->user->id); ?>" class="rounded-full w-12 shrink-0" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="pl-4">
                        <div class="flex">
                            <?php if($post->user->verified == 0): ?> 

                                <a href="/users/<?php echo e($post->user->name); ?>" class="font-bold hover:underline"><?php echo e($post->user->name); ?></a> 
                                <p class="ml-1 text-gray-400">@</p>
                                <p class="text-gray-400"><?php echo e($post->user->handle); ?> · <?php echo e($post->created_at->diffForHumans()); ?></p> 

                            <?php else: ?> 

                                <a href="/users/<?php echo e($post->user->name); ?>" class="font-bold hover:underline"><?php echo e($post->user->name); ?></a> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                </svg>
                                <p class="ml-1 text-gray-400">@</p>
                                <p class="text-gray-400"><?php echo e($post->user->handle); ?> · <?php echo e($post->created_at->diffForHumans()); ?></p> 
                                
                            <?php endif; ?>

                        </div>
                        
                        <a href="/posts/<?php echo e($post->id); ?>">
                            <p class="text-md"><?php echo e($post->content); ?></p>
                        </a>
                    </div>
                </div>
    
                <div class="flex justify-around pt-4 px-6 text-slate-400">

                    <div x-data="{ reply: false, count: <?php echo e($post->replies); ?> }" class="flex hover:text-cyan-500" x-cloak>
                        <div x-show="!reply" x-on:click="reply = ! reply, count++" x-cloak >
                            <input type="hidden" name="replies" >
                            <input class="custom-checkbox-input" name="alarm" type="checkbox">
                            <span class="custom-checkbox-text flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                </svg>             
                                <p class="pl-3" x-text="count"></p> 
                            </span>
                        </div>
                        
                        <div x-show="reply" x-on:click="reply = ! reply, count--" class="text-cyan-600" x-cloak >
                            <input class="custom-checkbox-input" name="replies" type="checkbox hidden">
                            <span class="custom-checkbox-text flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="cyan" viewBox="0 0 24 24" class="w-6 h-6 border-0 outline-none">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                </svg>             
                                <p class="pl-3" x-text="count"></p> 
                            </span>
                        </div>
                    </div>

                    <?php if($post->retweets->contains('user_id', auth()->id())): ?>

                        <div class="flex text-green-500">
                            <form action="/retweets/<?php echo e($post->retweets->where('user_id', auth()->id())->first()->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                    </svg>          
                                </button>
                            </form>
                            <p class="pl-3"><?php echo e($post->retweets->count()); ?></p> 
                        </div>

                    <?php else: ?>

                        <div class="flex hover:text-green-500">
                            <form action="/retweets" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                                    </svg>          
                                </button>
                            </form>
                            <p class="pl-3"><?php echo e($post->retweets->count()); ?></p> 
                        </div>

                    <?php endif; ?>

                    <div x-data="{ like: false, count: <?php echo e($post->likes); ?> }" class="flex hover:text-pink-600">
                        <div x-show="!like" x-on:click="like = ! like, count++" x-cloak >
                            <input type="hidden" name="replies" >
                            <input class="custom-checkbox-input" name="alarm" type="checkbox">
                            <span class="custom-checkbox-text flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>       
                                <p class="pl-3" x-text="count"></p> 
                            </span>
                        </div>
                        
                        <div x-show="like" x-on:click="like = ! like, count--" class="pink-color" x-cloak >
                            <input class="custom-checkbox-input" name="like" type="checkbox hidden">
                            <span class="custom-checkbox-text flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#F91880" viewBox="0 0 24 24" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>       
                                <p class="pl-3" x-text="count"></p> 
                            </span>
                        </div>
                    </div>

                    <div x-data="{ share: false }" class="flex hover:text-cyan-500">
                        <div x-show="!share" x-on:click="share = ! share" x-cloak >
                            <input type="hidden" name="replies" >
                            <input class="custom-checkbox-input" name="alarm" type="checkbox">
                            <span class="custom-checkbox-text flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>                
                            </span>
                        </div>
                        
                        <div x-show="share" x-on:click="share = ! share" class="text-cyan-600" x-cloak >
                            <input class="custom-checkbox-input" name="replies" type="checkbox hidden">
                            <span class="custom-checkbox-text flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="cyan" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>                
                            </span>
                        </div>
                    </div>                           
                </div>
            </article>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\Projects\Twitter-Clone\resources\views/users/show.blade.php ENDPATH**/ ?>