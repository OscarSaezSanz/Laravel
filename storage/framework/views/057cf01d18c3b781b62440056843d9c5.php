

<?php $__env->startSection('title', 'Publicaciones Publicadas - OSS'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .published-post {
        background: #f3f4f6;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 15px;
        border: 1px solid #d1d5db;
    }
    .published-post h3 {
        color: #333;
        font-size: 1.5em;
        margin-bottom: 10px;
    }
    .published-post p {
        color: #555;
        line-height: 1.7;
        margin-bottom: 15px;
    }
    .author-tag {
        background: white;
        padding: 4px 12px;
        border-radius: 3px;
        display: inline-block;
        color: #6b7280;
        font-weight: 500;
        margin-right: 10px;
        border: 1px solid #d1d5db;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2 style="color: #333; margin-bottom: 25px; text-align: center;">Publicaciones Publicadas (Consulta Compleja)</h2>

<div style="background: #6b7280; color: white; padding: 20px; border-radius: 10px; margin-bottom: 25px; text-align: center;">
    <h3 style="margin-bottom: 10px;">Resumen OSS</h3>
    <p><strong>Total de publicaciones publicadas:</strong> <?php echo e($publishedPosts->count()); ?></p>
    <p><strong>Ordenadas por:</strong> Fecha de publicación (más recientes primero)</p>
</div>

<?php $__empty_1 = true; $__currentLoopData = $publishedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="published-post">
        <h3><?php echo e($post->title); ?></h3>
        <p><?php echo e($post->content); ?></p>
        <div>
            <span class="author-tag"><?php echo e($post->user->name); ?></span>
            <span style="color: #999;"><?php echo e($post->published_at->format('d/m/Y H:i')); ?></span>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p style="text-align: center; color: #999; padding: 40px;">No hay publicaciones publicadas</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app_oss', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel_RA7_OSS\resources\views/posts/published.blade.php ENDPATH**/ ?>