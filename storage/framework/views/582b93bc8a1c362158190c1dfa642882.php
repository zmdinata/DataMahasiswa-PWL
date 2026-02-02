<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Hero Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <div class="card">
                <div class="card-body py-5">
                    <h1 class="display-4 fw-bold mb-3" style="color: #667eea;">
                        <i class="fas fa-graduation-cap"></i> Selamat Datang!
                    </h1>
                    <h2 class="mb-4">Mahasiswa STMIK IKMI</h2>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 mb-3">
                            <div class="card bg-primary text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-book fa-2x mb-3"></i>
                                    <h5>Mata Kuliah</h5>
                                    <p class="mb-0">Pemrograman Web Lanjut</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card bg-success text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-calendar-alt fa-2x mb-3"></i>
                                    <h5>Semester</h5>
                                    <p class="mb-0">5</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card bg-warning text-white">
                                <div class="card-body text-center">
                                    <i class="fas fa-laptop-code fa-2x mb-3"></i>
                                    <h5>Framework</h5>
                                    <p class="mb-0">Laravel 12</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="<?php echo e(route('mahasiswa.index')); ?>" class="btn btn-primary btn-lg mt-4">
                        <i class="fas fa-arrow-right me-2"></i> Mulai Kelola Data
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projects\modul1-web-lanjut\resources\views/welcome.blade.php ENDPATH**/ ?>