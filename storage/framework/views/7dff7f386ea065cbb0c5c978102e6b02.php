

<?php $__env->startSection('title', 'Todos los Usuarios - OSS'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .user-card {
        background: #f3f4f6;
        border-radius: 4px;
        padding: 20px;
        margin-bottom: 15px;
        border: 1px solid #d1d5db;
    }
    .user-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d1d5db;
    }
    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 3px;
        background: #6b7280;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: bold;
    }
    .user-info h3 {
        color: #333;
        font-size: 1.5em;
        margin-bottom: 5px;
    }
    .user-email {
        color: #666;
        font-size: 0.9em;
    }
    .posts-section {
        margin-top: 15px;
    }
    .posts-count {
        display: inline-block;
        background: #6b7280;
        color: white;
        padding: 4px 12px;
        border-radius: 3px;
        font-size: 0.85em;
        font-weight: 500;
        margin-bottom: 10px;
    }
    .post-item {
        background: white;
        padding: 12px;
        border-radius: 3px;
        margin-bottom: 8px;
        border-left: 3px solid #9ca3af;
    }
    .post-title {
        font-weight: 600;
        color: #333;
        margin-bottom: 5px;
    }
    .post-content {
        color: #666;
        font-size: 0.9em;
        line-height: 1.5;
    }
    .no-posts {
        color: #999;
        font-style: italic;
        padding: 15px;
        background: white;
        border-radius: 8px;
    }
    .stats {
        background: #6b7280;
        color: white;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
        text-align: center;
    }
    .stats h2 {
        font-size: 1.5em;
        margin-bottom: 8px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="stats">
    <h2>Estadísticas OSS</h2>
    <p><strong>Total de Usuarios:</strong> <?php echo e($users->count()); ?></p>
    <p><strong>Usuarios con Posts:</strong> <?php echo e($users->filter(fn($u) => $u->posts->count() > 0)->count()); ?></p>
    <p><strong>Total de Publicaciones:</strong> <?php echo e($users->sum(fn($u) => $u->posts->count())); ?></p>
</div>

<h2 style="color: #333; margin-bottom: 25px; font-size: 2em;">Todos los Usuarios</h2>

<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="user-card">
        <div class="user-header">
            <div class="user-avatar">
                <?php echo e(strtoupper(substr($user->name, 0, 1))); ?>

            </div>
            <div class="user-info">
                <h3><?php echo e($user->name); ?></h3>
                <p class="user-email"><?php echo e($user->email); ?></p>
            </div>
        </div>

        <div class="posts-section">
            <?php if($user->posts->count() > 0): ?>
                <span class="posts-count"><?php echo e($user->posts->count()); ?> <?php echo e($user->posts->count() == 1 ? 'Publicación' : 'Publicaciones'); ?></span>
                
                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post-item">
                        <div class="post-title"><?php echo e($post->title); ?></div>
                        <div class="post-content"><?php echo e(Str::limit($post->content, 100)); ?></div>
                        <small style="color: #999;"><?php echo e($post->published_at->format('d/m/Y H:i')); ?></small>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="no-posts">
                    Este usuario aún no tiene publicaciones
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app_oss', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Laravel_RA7_OSS\resources\views/users/index.blade.php ENDPATH**/ ?>