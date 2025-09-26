<?php $__env->startSection('title', 'Proyek - Portfolio Web Developer'); ?>

<?php $__env->startSection('content'); ?>
<!-- Bagian Hero -->
<section class="hero-section position-relative" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo e(asset('anime.png')); ?>') center/cover no-repeat; color: white; min-height: 60vh; display: flex; align-items: center;">
    <div class="container position-relative z-index-2">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Proyek Saya</h1>
                <p class="lead">
                    Koleksi proyek web development yang telah saya kerjakan dengan berbagai teknologi modern
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Grid Proyek -->
<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm card-hover h-100">
                    <div class="position-relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x250/<?php echo e($index % 2 == 0 ? '667eea' : '764ba2'); ?>/ffffff?text=<?php echo e(urlencode($project['title'])); ?>" 
                             class="card-img-top" alt="<?php echo e($project['title']); ?>" style="height: 250px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 hover-overlay" 
                             style="background: rgba(0,0,0,0.7); transition: opacity 0.3s ease;">
                            <div class="text-center">
                                <a href="<?php echo e($project['demo']); ?>" class="btn btn-light btn-sm me-2" target="_blank">
                                    <i class="fas fa-external-link-alt me-1"></i>Demo
                                </a>
                                <a href="<?php echo e($project['github']); ?>" class="btn btn-outline-light btn-sm" target="_blank">
                                    <i class="fab fa-github me-1"></i>Code
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold"><?php echo e($project['title']); ?></h5>
                        <p class="card-text text-muted flex-grow-1"><?php echo e($project['description']); ?></p>
                        
                        <div class="mb-3">
                            <?php $__currentLoopData = $project['technologies']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="badge bg-primary me-1 mb-1"><?php echo e($tech); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                        <div class="d-flex gap-2 mt-auto">
                            <a href="<?php echo e($project['demo']); ?>" class="btn btn-primary-custom btn-sm flex-fill" target="_blank">
                                <i class="fas fa-eye me-1"></i>Live Demo
                            </a>
                            <a href="<?php echo e($project['github']); ?>" class="btn btn-outline-primary btn-sm flex-fill" target="_blank">
                                <i class="fab fa-github me-1"></i>GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- Kategori Proyek -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Kategori Proyek</h2>
                <p class="lead text-muted">
                    Saya memiliki pengalaman dalam berbagai jenis pengembangan web
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-shopping-cart fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">E-Commerce</h5>
                        <p class="text-muted">
                            Platform jual beli online dengan sistem pembayaran, inventory management, dan dashboard admin yang lengkap.
                        </p>
                        <ul class="list-unstyled small text-muted">
                            <li><i class="fas fa-check text-success me-2"></i>Payment Gateway</li>
                            <li><i class="fas fa-check text-success me-2"></i>Inventory System</li>
                            <li><i class="fas fa-check text-success me-2"></i>Admin Dashboard</li>
                            <li><i class="fas fa-check text-success me-2"></i>User Management</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-tasks fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Web Application</h5>
                        <p class="text-muted">
                            Aplikasi web interaktif untuk berbagai kebutuhan bisnis dengan fitur real-time dan responsive design.
                        </p>
                        <ul class="list-unstyled small text-muted">
                            <li><i class="fas fa-check text-success me-2"></i>Real-time Updates</li>
                            <li><i class="fas fa-check text-success me-2"></i>Responsive Design</li>
                            <li><i class="fas fa-check text-success me-2"></i>API Integration</li>
                            <li><i class="fas fa-check text-success me-2"></i>Database Design</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-blog fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Content Management</h5>
                        <p class="text-muted">
                            Sistem manajemen konten yang mudah digunakan dengan editor WYSIWYG dan SEO optimization.
                        </p>
                        <ul class="list-unstyled small text-muted">
                            <li><i class="fas fa-check text-success me-2"></i>WYSIWYG Editor</li>
                            <li><i class="fas fa-check text-success me-2"></i>SEO Friendly</li>
                            <li><i class="fas fa-check text-success me-2"></i>Media Management</li>
                            <li><i class="fas fa-check text-success me-2"></i>Multi-user Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teknologi yang Digunakan -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Teknologi yang Saya Gunakan</h2>
                <p class="lead text-muted">
                    Stack teknologi modern untuk menghasilkan aplikasi web yang berkualitas
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fab fa-laravel fa-4x text-danger"></i>
                    </div>
                    <h6 class="fw-bold">Laravel</h6>
                    <p class="small text-muted">PHP Framework</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fab fa-vuejs fa-4x text-success"></i>
                    </div>
                    <h6 class="fw-bold">Vue.js</h6>
                    <p class="small text-muted">Frontend Framework</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fab fa-react fa-4x text-info"></i>
                    </div>
                    <h6 class="fw-bold">React</h6>
                    <p class="small text-muted">JavaScript Library</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fas fa-database fa-4x text-primary"></i>
                    </div>
                    <h6 class="fw-bold">MySQL</h6>
                    <p class="small text-muted">Database</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fab fa-bootstrap fa-4x text-purple"></i>
                    </div>
                    <h6 class="fw-bold">Bootstrap</h6>
                    <p class="small text-muted">CSS Framework</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fab fa-git-alt fa-4x text-warning"></i>
                    </div>
                    <h6 class="fw-bold">Git</h6>
                    <p class="small text-muted">Version Control</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fab fa-docker fa-4x text-primary"></i>
                    </div>
                    <h6 class="fw-bold">Docker</h6>
                    <p class="small text-muted">Containerization</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fab fa-aws fa-4x text-dark"></i>
                    </div>
                    <h6 class="fw-bold">AWS</h6>
                    <p class="small text-muted">Cloud Platform</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bagian CTA -->
<section class="section-padding" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h2 class="fw-bold mb-4">Punya Ide Proyek?</h2>
                <p class="lead mb-4">
                    Mari diskusikan bagaimana saya dapat membantu mewujudkan ide Anda menjadi aplikasi web yang luar biasa!
                </p>
                <a href="<?php echo e(route('contact')); ?>" class="btn btn-light btn-lg">
                    <i class="fas fa-rocket me-2"></i>Mulai Proyek Baru
                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .card-hover:hover .hover-overlay {
        opacity: 1 !important;
    }
    
    .text-purple {
        color: #7952b3 !important;
    }
    
    @media (max-width: 768px) {
        .col-md-3.col-sm-6 {
            margin-bottom: 2rem;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\RND1\belajar pemula\portfolio-website\resources\views/portfolio/projects.blade.php ENDPATH**/ ?>