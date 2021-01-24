<?php $__env->startSection('content'); ?>
<div class="container p-5 mb-5 border" >
    <div class="row">
        <div class="col-8">
            <img src="/storage/<?php echo e($post->image); ?>" class="w-100" alt="">
        </div>
        <div class="col-4">
                    <div class="pr-3">
                        <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="rounded-circle w-100" style="max-width: 60px; border: 4px solid #ccc">
                        <a style="text-decoration:none;" href="/profile/<?php echo e($post->user->id); ?>" class="text-dark font-weight-bold pl-2"><?php echo e($post->user->username); ?></a>
                    </div>

                <hr>

                <p>
                    <?php echo e($post->caption); ?>

                </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SocialNetwork\resources\views/posts/show.blade.php ENDPATH**/ ?>