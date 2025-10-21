

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        <h2><?php echo e($producto->nombre); ?></h2>
    </div>
    <div class="card-body">
        <p><strong>Descripción:</strong> <?php echo e($producto->descripcion); ?></p>
        <p><strong>Precio:</strong> $<?php echo e($producto->precio); ?></p>
        <p><strong>Stock:</strong> <?php echo e($producto->stock); ?></p>
        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Volver al listado</a>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\CampusFP\AE_OSS\resources\views/productos/show.blade.php ENDPATH**/ ?>