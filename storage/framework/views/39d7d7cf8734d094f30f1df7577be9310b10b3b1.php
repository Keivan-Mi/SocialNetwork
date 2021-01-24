<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="/profile/<?php echo e($user->id); ?>" enctype="multipart/form-data" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>

        <div class="row">
            <div class="col-8 offset-2">

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <input id="title" type="text" class="ml-2 form-control<?php echo e($errors->has('title') ? 'is-invalid' : ''); ?>" name="title" value="<?php echo e(old('title') ?? $user->profile->title); ?>" autocomplete="title" autofocus>

                    <?php if($errors->has('title')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>

                    <input id="description" type="text" class="ml-2 form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" name="description" value="<?php echo e(old('description') ?? $user->profile->description); ?>" autocomplete="description" autofocus>

                    <?php if($errors->has('description')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('description')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>

                    <input id="url" type="text" class=" ml-2 form-control<?php echo e($errors->has('url') ? ' is-invalid' : ''); ?>" name="url" value="<?php echo e(old('url') ?? $user->profile->url); ?>" autocomplete="url" autofocus>

                    <?php if($errors->has('url')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('url')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input type="file" class=" ml-2 form-control-file" id="image" name="image">

                    <?php if($errors->has('image')): ?>
                    <strong><?php echo e($errors->first('image')); ?></strong>
                    <?php endif; ?>
                </div>

                <div class="row pt-4">
                <button class=" ml-2 btn btn-primary" style="background-color:black; border: black">Save</button>
                </div>

            </div>
        </div>
    </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\SocialNetwork\resources\views/profiles/edit.blade.php ENDPATH**/ ?>