

<?php $__env->startSection('title', 'Edit Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">
                    <i class="fas fa-edit me-2"></i>Edit Data Mahasiswa
                </h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->nim)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nim" class="form-label">
                                <i class="fas fa-id-card me-1"></i>NIM
                            </label>
                            <input type="text" 
                                   class="form-control bg-light" 
                                   id="nim" 
                                   value="<?php echo e($mahasiswa->nim); ?>"
                                   readonly>
                            <small class="text-muted">NIM tidak dapat diubah</small>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">
                                <i class="fas fa-user me-1"></i>Nama Lengkap
                            </label>
                            <input type="text" 
                                   class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="nama" 
                                   name="nama" 
                                   value="<?php echo e(old('nama', $mahasiswa->nama)); ?>"
                                   required>
                            <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kelas" class="form-label">
                                <i class="fas fa-users me-1"></i>Kelas
                            </label>
                            <select class="form-select <?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    id="kelas" 
                                    name="kelas"
                                    required>
                               <option value="SI-KIP-P1" <?php echo e(old('kelas') == 'SI-KIP-P1' ? 'selected' : ''); ?>>SI-KIP-P1</option>
                                <option value="SI-KIP-P2" <?php echo e(old('kelas') == 'SI-KIP-P2' ? 'selected' : ''); ?>>SI-KIP-P2</option>
                                <option value="SI-KIP-P3" <?php echo e(old('kelas') == 'SI-KIP-P3' ? 'selected' : ''); ?>>SI-KIP-P3</option>
                            </select>
                            <?php $__errorArgs = ['kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="matakuliah" class="form-label">
                                <i class="fas fa-book me-1"></i>Mata Kuliah
                            </label>
                            <select class="form-select <?php $__errorArgs = ['matakuliah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    id="matakuliah" 
                                    name="matakuliah"
                                    required>
                                <option value="Pemrograman Web" <?php echo e(old('matakuliah', $mahasiswa->matakuliah) == 'Pemrograman Web' ? 'selected' : ''); ?>>Pemrograman Web</option>
                                <option value="Basis Data" <?php echo e(old('matakuliah', $mahasiswa->matakuliah) == 'Basis Data' ? 'selected' : ''); ?>>Basis Data</option>
                                <option value="Algoritma" <?php echo e(old('matakuliah', $mahasiswa->matakuliah) == 'Algoritma' ? 'selected' : ''); ?>>Algoritma</option>
                                <option value="Struktur Data" <?php echo e(old('matakuliah', $mahasiswa->matakuliah) == 'Struktur Data' ? 'selected' : ''); ?>>Struktur Data</option>
                            </select>
                            <?php $__errorArgs = ['matakuliah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-secondary me-md-2">
                            <i class="fas fa-times me-2"></i>Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Update Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projects\modul1-web-lanjut\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>