

<?php $__env->startSection('content'); ?>
<h2 class="mb-4">Listado de Productos</h2>

<?php if($productos->isEmpty()): ?>
    <p>No hay productos registrados.</p>
<?php else: ?>
    <div class="row">
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5><?php echo e($producto->nombre); ?></h5>
                    <p><?php echo e(Str::limit($producto->descripcion, 80)); ?></p>
                    <p><strong>Precio:</strong> €<?php echo e($producto->precio); ?></p>
                    <p><strong>Stock:</strong> <?php echo e($producto->stock); ?></p>
                    <a href="<?php echo e(route('productos.show', $producto->id)); ?>" class="btn btn-primary btn-sm">Ver Detalle</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\CampusFP\AE_OSS\resources\views/productos/index.blade.php ENDPATH**/ ?>