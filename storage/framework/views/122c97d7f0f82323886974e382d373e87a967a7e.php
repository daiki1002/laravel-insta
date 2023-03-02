<?php if($suggested_users): ?>
    <div class="row align-items-center mb-3">
        <div class="col">
            <p class="text-muted fw-bold m-0">Suggestion For You</p>
        </div>
        <div class="col-auto">
            <a href="<?php echo e(route('suggested')); ?>" class="text-decoration-none fw-bold text-dark small">See all</a>
        </div>
    </div>
    <?php $__currentLoopData = array_slice($suggested_users, 0, 10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row mb-3 align-items-center">
        <div class="col-auto">
            <?php if($user->avatar): ?>
            <a href="<?php echo e(route('profile.show', $user->id)); ?>">
                <img src="<?php echo e(asset('/storage/avatars/' . $user->avatar)); ?>" alt="<?php echo e($user->avatar); ?>" class="rounded-circle user-avatar">
            </a>
            <?php else: ?>
            <a href="<?php echo e(route('profile.show', $user->id)); ?>">
                <i class="fa-solid fa-circle-user text-secondary user-icon"></i>
            </a>
            <?php endif; ?>
        </div>
        <div class="col ps-0 text-truncate">
            <a href="<?php echo e(route('profile.show', $user->id)); ?>" class="text-decoration-none text-dark small"><?php echo e($user->name); ?></a>
        </div>
        <div class="col-auto">
            <form action="<?php echo e(route('follow.store', $user->id)); ?>" method="post" class='d-inline'>
                <?php echo csrf_field(); ?>
                <button type="submit" class="border-0 bg-transparent text-primary p-0 btn-sm">Follow</button>
            </form>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /Users/kanbayashidaiki/Desktop/dev3-laravel/backend/resources/views/users/posts/contents/suggestions.blade.php ENDPATH**/ ?>