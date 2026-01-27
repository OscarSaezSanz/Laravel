

<?php $__env->startSection('title', 'Usuarios con Publicaciones - OSS'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .author-card {
        background: #f3f4f6;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 15px;
        border: 1px solid #d1d5db;
    }
    .author-card h3 {
        color: #333;
        margin-bottom: 10px;
        font-size: 1.5em;
    }
    .post-list {
        list-style: none;
        padding-left: 0;
    }
    .post-list li {
        background: white;
        padding: 10px;
        margin-bottom: 8px;
        border-radius: 3px;
        border-left: 3px solid #9ca3af;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2 style="color: #333; margin-bottom: 25px; text-align: center;">Usuarios con Publicaciones (Consulta Compleja)</h2>

<div style="background: #6b7280; color: white; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
    <p><strong>Total de autores activos:</strong> <?php echo e($usersWithPosts->count()); ?> usuarios</p>
</div>

<?php $__currentLoopData = $usersWithPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="author-card">
        <h3><?php echo e($user->name); ?></h3>
        <p style="color: #666; margin-bottom: 15px;"><?php echo e($user->email); ?> | <?php echo e($user->posts->count()); ?> publicaciones</p>
        
        <ul class="post-list">
            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <strong><?php echo e($post->title); ?></strong>
                    <p style="color: #666; margin: 5px 0 0 0;"><?php echo e(Str::limit($post->content, 80)); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app_oss', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel_RA7_OSS\resources\views/users/with-posts.blade.php ENDPATH**/ ?>