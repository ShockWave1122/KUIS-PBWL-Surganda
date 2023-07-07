

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Tambah Pelanggan</h3>

        <form action="<?php echo e(url('/pelanggan')); ?>" method="POST">
             <?php echo csrf_field(); ?>
            <div class="mb-2">
                <label>ID GOLONGAN</label>
                <select class="form-control select2" name="pel_id_gol" id="pel_id_gol" required>
                <?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->gol_id); ?>"><?php echo e($item->gol_nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-2">
                <label>KODE</label>
                <input type="text" class="form-control" name="pel_no">
            </div>
            <div class="mb-2">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="pel_nama">
            </div>
            <div class="mb-2">
                <label>ALAMAT PELANGGAN</label>
                <textarea name="pel_alamat" id="" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-2">
                <label>NO HP</label>
                <input type="text" class="form-control" name="pel_hp">
            </div>
            <div class="mb-2">
                <label>NO KTP</label>
                <input type="text" class="form-control" name="pel_ktp">
            </div>
            <div class="mb-2">
                <label>NO SERI</label>
                <input type="text" class="form-control" name="pel_seri">
            </div>
            <div class="mb-2">
                <label>NO METERAN</label>
                <input type="text" class="form-control" name="pel_meteran">
            </div>
            <div class="mb-2">
                <label>STATUS</label>
                <select id="pel_aktif" class="form-control" name="pel_aktif" required>
                <option value="Y">AKTIF</option>
                <option value="N">TIDAK AKTIF</option></select>
            </div>
            <div class="mb-2">
                <label>ID STAFF</label>
                <select class="form-control select2" name="pel_id_user" id="pel_id_user" required>
                <?php $__currentLoopData = $use; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-2">
                <input type="submit" value="SIMPAN">
            </div></form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kuis-Surganda\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>