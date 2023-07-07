

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3> Edit Golongan</h3>

        <form action="<?php echo e(url('/golongan/' . $row->gol_id)); ?>" method="POST">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?> 
            <div class="mb-2">
                <label>KODE</label>
                <input type="text" class="form-control" name="gol_kode" value="<?php echo e($row->gol_kode); ?>"></>
            </div>
            <div class="mb-2">
                <label>NAMA GOLONGAN</label>
                <input type="text" class="form-control" name="gol_nama" value="<?php echo e($row->gol_nama); ?>"></>
            </div>
            <div class="mb-2">
                <input type="submit" value="UPDATE">
            </div></form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SI2-VI\Quis-Harun\resources\views/golongan/edit.blade.php ENDPATH**/ ?>