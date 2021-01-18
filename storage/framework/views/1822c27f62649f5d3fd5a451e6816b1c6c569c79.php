<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <!--Profile image -->
            <div class="col-3 p-5">
                <img src="/img/profileImg.jpg" class="rounded-circle w-100" alt="Not found!!!">
            </div>

            <!--Profile info section(post + followers + following + edit and follow buttons -->
            <div class="col-9 pt-5 ">
                <div class=" d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-1">
                        <div class="font-weight-bold mr-4 h1 pt-2"> <?php echo e($user->username); ?> </div>
                        <button class="btn btn-primary"> Follow</button>
                    </div> <a href="#"> Add New Post</a> </div>

                <a href="#"> Edit Profile </a>

                <div class="d-flex">
                    <div class="pr-3"><strong> 100 </strong> posts</div>
                    <div class="pr-3"><strong>25k</strong> followers</div>
                    <div class="pr-3"><strong>200</strong> following</div>
                </div>

                <!--Profile description section -->
                <div class="pt-3 font-weight-bold"><?php echo e($user->profile->title); ?></div>
                <div> <?php echo e($user->profile->description); ?> </div>
                <div><a href="#" class="font-weight-light"> <?php echo e($user->profile->url); ?> </a></div>
            </div>
        </div>

        <!--Show posts (at first, just using 3 images  -->
        <div class="row">
            <div class="col-4 pt-4">
                <a href="#"> <img src="/img/profileImg.jpg" class="w-100" alt="Not Found!!"> </a>
            </div>

            <div class="col-4 pt-4">
                <a href="#"> <img src="/img/profileImg.jpg" class="w-100" alt="Not Found!!"> </a>
            </div>

            <div class="col-4 pt-4">
                <a href="#"> <img src="/img/profileImg.jpg" class="w-100" alt="Not Found!!"> </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SocialNetwork\resources\views/profiles/index.blade.php ENDPATH**/ ?>