

<?php $__env->startSection('title', 'Data Mahasiswa'); ?>

<?php $__env->startSection('content'); ?>
<div class="row mb-4">
    <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">
                    <i class="fas fa-users me-2"></i>Data Mahasiswa
                </h4>
                <span class="badge bg-light text-dark">
                    <i class="fas fa-database me-1"></i> Total: <?php echo e($mahasiswas->count()); ?> Data
                </span>
            </div>
            <div class="card-body">
                <?php if($mahasiswas->count() > 0): ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIM</th>
                                <th>Nama Lengkap</th>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>Tanggal Daftar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($index + 1); ?></td>
                                <td>
                                    <span class="badge bg-primary">
                                        <i class="fas fa-id-card me-1"></i> <?php echo e($mahasiswa->nim); ?>

                                    </span>
                                </td>
                                <td><?php echo e($mahasiswa->nama); ?></td>
                                <td>
                                    <span class="badge bg-info text-dark">
                                        <?php echo e($mahasiswa->kelas); ?>

                                    </span>
                                </td>
                                <td><?php echo e($mahasiswa->matakuliah); ?></td>
                                <td><?php echo e($mahasiswa->created_at->format('d/m/Y')); ?></td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="<?php echo e(route('mahasiswa.show', $mahasiswa->nim)); ?>" 
                                           class="btn btn-sm btn-info action-btn" 
                                           title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa->nim)); ?>" 
                                           class="btn btn-sm btn-warning action-btn" 
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa->nim)); ?>" 
                                              method="POST" 
                                              class="d-inline"
                                              onsubmit="return confirmDelete()">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" 
                                                    class="btn btn-sm btn-danger action-btn" 
                                                    title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                <div class="text-center py-5">
                    <i class="fas fa-database fa-4x text-muted mb-3"></i>
                    <h5 class="text-muted">Belum ada data mahasiswa</h5>
                    <p class="text-muted">Mulai tambahkan data pertama Anda</p>
                    <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">
                        <i class="fas fa-plus-circle me-2"></i>Tambah Data Pertama
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <div class="card-footer text-end">
                <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary">
                    <i class="fas fa-plus-circle me-2"></i>Tambah Data Baru
                </a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Projects\modul1-web-lanjut\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>