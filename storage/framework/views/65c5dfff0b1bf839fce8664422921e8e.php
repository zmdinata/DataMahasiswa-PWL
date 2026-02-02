

<?php $__env->startSection('title', 'Tambah Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">
                    <i class="fas fa-user-plus me-2"></i>Tambah Data Mahasiswa Baru
                </h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('mahasiswa.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nim" class="form-label">
                                <i class="fas fa-id-card me-1"></i>NIM
                            </label>
                            <input type="text" 
                                   class="form-control <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   id="nim" 
                                   name="nim" 
                                   value="<?php echo e(old('nim')); ?>"
                                   placeholder="Masukkan NIM">
                            <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <small class="text-muted">Contoh: 2023081001</small>
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
                                   value="<?php echo e(old('nama')); ?>"
                                   placeholder="Masukkan nama lengkap">
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
                                    name="kelas">
                                <option value="" selected disabled>Pilih Kelas</option>
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
                                    name="matakuliah">
                                <option value="" selected disabled>Pilih Mata Kuliah</option>
                                <option value="Pemrograman Web Lanjut" <?php echo e(old('matakuliah') == 'Pemrograman Web Lanjut' ? 'selected' : ''); ?>>Pemrograman Web Lanjut</option>
                                <option value="Data Mining" <?php echo e(old('matakuliah') == 'Data Mining' ? 'selected' : ''); ?>>Data Mining</option>
                                <option value="Manajemen proyek SI" <?php echo e(old('matakuliah') == 'Manajemen proyek SI' ? 'selected' : ''); ?>>Manajemen proyek SI</option>
                                <option value="AI Automation" <?php echo e(old('matakuliah') == 'AI Automation' ? 'selected' : ''); ?>>AI Automation</option>
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
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projects\modul1-web-lanjut\resources\views/mahasiswa/create.blade.php ENDPATH**/ ?>