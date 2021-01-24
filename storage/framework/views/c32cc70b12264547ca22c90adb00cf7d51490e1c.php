<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="pt-5" style="float: right" >
           <a  class="btn btn-dark"  href="/profile/<?php echo e($user->id); ?>"> Profile </a>
        </div>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row pt-5">
                <div class="col-10 offset-2">
                    <div class="d-flex align-items-center ">
                        <div class="pr-3 ml-3">
                            <img src="<?php echo e($post->user->profile->profileImage()); ?>" alt="Not found!!!"
                                 class="rounded-circle w-100" style="max-width: 50px">
                        </div>
                        <div class="font-weight-bold">
                            <a href="/profile/<?php echo e($post->user->id); ?>">
                                <span class="text-dark"> <?php echo e($post->user->username); ?> </span>
                            </a>
                        </div>
                    </div>

                    <hr class="m-1 " style="width: 64.5%">

                    <div class="col-8 pt-2">
                        <a href="/profile/<?php echo e($post->user->id); ?>">
                            <img src="/storage/<?php echo e($post->image); ?> " alt="Not found!" class="w-100">
                        </a>
                    </div>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SocialNetwork\resources\views/posts/index.blade.php ENDPATH**/ ?>