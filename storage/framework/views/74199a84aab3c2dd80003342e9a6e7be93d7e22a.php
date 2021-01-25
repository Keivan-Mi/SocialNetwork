    
<?php $__env->startSection('content'); ?>
    
    <div class="container">
        
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row" >
                 
            <div class="col-9 offset-2 mb-5 border">
                <span>
                    <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="rounded-circle w-100 mt-2 mb-2 mr-2" style="max-width: 60px; border: 4px solid #ccc; ">
                    <a style="text-decoration:none" href="/profile/<?php echo e($post->user->id); ?>">
                        <span class="text-dark "><?php echo e($post->user->username); ?></span>
                    </a>
                </span>
                <a href="/profile/<?php echo e($post->user->id); ?>">
                    <img src="/storage/<?php echo e($post->image); ?>" class="w-100 pb-2">
                </a>
                <p>
                <span class="font-weight-bold">
                    <a style="text-decoration:none" href="/profile/<?php echo e($post->user->id); ?>">
                        <span class="text-dark "><?php echo e($post->user->username); ?></span>
                    </a>
                </span> : <?php echo e($post->caption); ?>

                </p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="row pt-lg-5">
            <div class="col-10 offset-2">
                <?php echo e($posts -> links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\University\Term 7\Internet Engineering\Project\Final\SocialNetwork\resources\views/posts/index.blade.php ENDPATH**/ ?>