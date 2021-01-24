<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!--Profile image -->
            <div class="d-flex">
                <div class="col-3 p-5">
                    <img src="<?php echo e($user->profile->profileImage()); ?>" class="rounded-circle w-100" alt="Not found!!!">
                </div>

                <!--Profile info section _ using View.js (post + followers + following) -->
                <div class="row d-inline-block">
                    <follow-button
                        user-id="<?php echo e($user->id); ?>"
                        follow="<?php echo e($follows); ?>"
                        username="<?php echo e($user->username); ?>"
                        posts="<?php echo e($user->posts->count()); ?>"
                        followers="<?php echo e($user->profile->followers->count()); ?>"
                        following="<?php echo e($user->following->count()); ?>"
                        ownprofile="<?php echo e($ownProfile); ?>">
                    </follow-button>

                    <!--Profile description section -->
                    <div class="pt-2">
                        <div class="font-weight-bold "><?php echo e($user->profile->title); ?></div>
                        <div> <?php echo e($user->profile->description); ?> </div>
                        <div><a target="_blank" href="<?php echo e($user->profile->url); ?>" class="font-weight-light"> <?php echo e($user->profile->url); ?> </a></div>
                    </div>
                </div>

                <!--Edit profile and Add post section -->
                <div class="m-auto">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update',$user->profile)): ?>
                    <a href="/profile/<?php echo e($user->id); ?>/edit" class="btn btn-light mr-1" style="background-color:white; border:none" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><img src="https://img.icons8.com/material-rounded/24/000000/settings.png"/></a>
                    <a href="/" class="btn btn-light mr-1" style="background-color:white; border:none"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/home.png"/></a>
                    <a href="/p/create" class="btn btn-light mr-1" style="background-color:white; border:none"><img src="https://img.icons8.com/metro/26/000000/plus-2-math.png"/></a>
                    <?php endif; ?>
                </div>
            </div>

            <!--Show posts (at first, just using 3 images  -->
            <div class="container row pt-4 border-top mt-3">
                <!-- show all posts of this user from DB -->
                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-4" >
                    <div class=" p-2 mb-4 border">
                        <a href="/p/<?php echo e($post->id); ?>">
                            <img src="/storage/<?php echo e($post->image); ?>" class="w-100"alt="not found">
                        </a>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SocialNetwork\resources\views/profiles/index.blade.php ENDPATH**/ ?>