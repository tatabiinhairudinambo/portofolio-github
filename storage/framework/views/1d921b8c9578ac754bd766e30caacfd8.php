<?php $__env->startSection('title', 'Tentang Saya - Portfolio Web Developer'); ?>

<?php $__env->startSection('content'); ?>
<!-- Bagian Hero -->
<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <!-- Foto Profil -->
                <div class="profile-image-container mb-4">
                    <img src="<?php echo e(asset('profile.jpg')); ?>" 
                         alt="Tatabiin Hairudin Ambo" 
                         class="img-fluid rounded-circle shadow-lg mx-auto d-block"
                         style="width: 250px; height: 250px; object-fit: cover; border: 4px solid #fff;"
                         onerror="this.src='<?php echo e(asset('images/profile.jpg')); ?>';">
                </div>
                
                <!-- Teks di bawah foto -->
                <div class="mt-4">
                    <h1 class="display-4 fw-bold mb-3">Tentang Saya</h1>
                    <p class="lead mb-5">
                        Mengenal lebih dekat perjalanan saya sebagai Web Developer
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Konten Tentang -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Profil Singkat -->
                <div class="text-center mb-5">
                    <div class="mb-4">
                        <span class="badge bg-primary bg-gradient mb-3">Web Developer</span>
                        <h2 class="fw-bold mb-3">Halo, Saya Tatabiin Hairudin Ambo</h2>
                        <div class="divider mx-auto bg-primary" style="width: 100px; height: 3px; opacity: 0.7;"></div>
                    </div>
                    <p class="lead text-muted px-lg-5">
                        Mahasiswa Semester 4 dengan passion dalam Web Development dan Teknologi Jaringan. 
                        Saya senang menciptakan solusi digital yang kreatif dan fungsional.
                    </p>
                </div>
                
                <!-- Kartu Pendidikan & Pengalaman -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-effect">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-user-graduate fa-2x text-white"></i>
                                    </div>
                                    <h5 class="mb-0 fw-bold">Pendidikan</h5>
                                </div>
                                <div class="ms-5 ps-3">
                                    <p class="text-muted mb-2"><strong>SMK Teknik Komputer dan Jaringan</strong></p>
                                    <p class="text-muted small">SMK YPPD Depok (2020-2023)</p>
                                    <span class="badge bg-light text-dark">Lulusan 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100 hover-effect">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box me-3">
                                        <i class="fas fa-briefcase fa-2x text-white"></i>
                                    </div>
                                    <h5 class="mb-0 fw-bold">Pengalaman</h5>
                                </div>
                                <div class="ms-5 ps-3">
                                    <p class="text-muted mb-2"><strong>Mahasiswa Aktif</strong></p>
                                    <p class="text-muted small">Web Development & Networking</p>
                                    <span class="badge bg-light text-dark">Ex-Telkomsel Network</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h3 class="fw-bold mb-4">Cerita Saya</h3>
                    <p class="text-muted mb-4">
                        Perjalanan saya di dunia teknologi dimulai sejak SMK di tahun 2020 dengan jurusan Teknik Komputer 
                        dan Jaringan. Lahir di Masohi, Maluku Tengah pada 15 April 2006, saya selalu tertarik dengan 
                        teknologi dan ingin menciptakan sesuatu yang bermanfaat. Setelah lulus SMK YPPD Depok di tahun 2023, 
                        saya melanjutkan kuliah dan fokus pada web development.
                    </p>
                    <p class="text-muted mb-4">
                        Saya pernah mendapat pengalaman berharga bekerja di Telkomsel pada bidang jaringan, yang memberikan 
                        pemahaman mendalam tentang infrastruktur teknologi. Meskipun saat ini belum bekerja karena fokus 
                        kuliah semester 4, saya terus mengasah kemampuan coding dan mempelajari teknologi web modern.
                    </p>
                    <p class="text-muted">
                        Saat ini, saya fokus pada pengembangan aplikasi web menggunakan PHP, JavaScript, dan Laravel. 
                        Saya juga menguasai Vue.js dan React untuk frontend. Tujuan saya adalah menambah wawasan dan 
                        relasi di dunia kerja sambil terus belajar teknologi terbaru.
                    </p>
                </div>

                <div class="mb-5">
                    <h3 class="fw-bold mb-4">Filosofi Kerja</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="text-center">
                                <div class="mb-3">
                                    <i class="fas fa-lightbulb fa-3x text-primary"></i>
                                </div>
                                <h5 class="fw-bold">Inovasi</h5>
                                <p class="text-muted small">
                                    Selalu mencari solusi kreatif untuk setiap tantangan
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <div class="mb-3">
                                    <i class="fas fa-users fa-3x text-primary"></i>
                                </div>
                                <h5 class="fw-bold">Kolaborasi</h5>
                                <p class="text-muted small">
                                    Bekerja sama dengan tim untuk hasil terbaik
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <div class="mb-3">
                                    <i class="fas fa-rocket fa-3x text-primary"></i>
                                </div>
                                <h5 class="fw-bold">Kualitas</h5>
                                <p class="text-muted small">
                                    Mengutamakan kualitas dalam setiap baris kode
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bagian Timeline -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="fw-bold text-center mb-5">Perjalanan Karir</h2>
                
                <div class="timeline">
                    <div class="timeline-item mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="timeline-date">
                                    <span class="badge bg-primary px-3 py-2">2025 - Sekarang</span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="fw-bold text-primary">Mahasiswa Aktif</h5>
                                        <p class="text-muted mb-2">Semester 4 - Web Development Focus</p>
                                        <p class="small text-muted">
                                            Fokus pada pembelajaran web development dengan teknologi modern seperti Laravel, 
                                            Vue.js, dan React. Aktif mengerjakan proyek-proyek coding untuk mengasah kemampuan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="timeline-date">
                                    <span class="badge bg-secondary px-3 py-2">2022 - 2024</span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="fw-bold text-primary">Network Technician</h5>
                                        <p class="text-muted mb-2">Telkomsel - Bidang Jaringan</p>
                                        <p class="small text-muted">
                                            Pengalaman berharga dalam bidang jaringan dan infrastruktur teknologi. 
                                            Mempelajari konfigurasi jaringan, troubleshooting, dan maintenance sistem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item mb-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="timeline-date">
                                    <span class="badge bg-secondary px-3 py-2">2020 - 2023</span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h5 class="fw-bold text-primary">SMK Student</h5>
                                        <p class="text-muted mb-2">SMK YPPD Depok - Teknik Komputer dan Jaringan</p>
                                        <p class="small text-muted">
                                            Mempelajari dasar-dasar teknologi komputer, jaringan, dan hardware. 
                                            Lulus tahun 2023 dengan pemahaman solid tentang infrastruktur IT.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Informasi Personal -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="fw-bold text-center mb-5">Informasi Personal</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <div>
                                <strong>Email:</strong><br>
                                <span class="text-muted">tataambo913@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone text-primary me-3"></i>
                            <div>
                                <strong>Telepon:</strong><br>
                                <span class="text-muted">+62082213840415/+6288294160210
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <div>
                                <strong>Lokasi:</strong><br>
                                <span class="text-muted">Depok, Jawa Barat, Indonesia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fab fa-github text-primary me-3"></i>
                            <div>
                                <strong>GitHub:</strong><br>
                                <a href="https://github.com" class="text-decoration-none">github.com/tatabiin</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fab fa-linkedin text-primary me-3"></i>
                            <div>
                                <strong>LinkedIn:</strong><br>
                                <a href="https://www.linkedin.com/in/tatabiin-hairudin-ambo" class="text-decoration-none">linkedin.com/in/tatabiin-hairudin-ambo</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fab fa-instagram text-primary me-3"></i>
                            <div>
                                <strong>Instagram:</strong><br>
                                <a href="https://instagram.com/Attasjah_" class="text-decoration-none">@Attasjah_</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BAGIAN CTA-->
<section class="section-padding" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h2 class="fw-bold mb-4">Tertarik Bekerja Sama?</h2>
                <p class="lead mb-4">
                    Mari diskusikan proyek Anda dan bagaimana saya dapat membantu mewujudkannya!
                </p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="<?php echo e(route('contact')); ?>" class="btn btn-light btn-lg">
                        <i class="fas fa-envelope me-2"></i>Hubungi Saya
                    </a>
                    <a href="<?php echo e(route('projects')); ?>" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-eye me-2"></i>Lihat Proyek
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .timeline-item {
        position: relative;
    }
    
    .timeline-date {
        text-align: center;
    }
    
    @media (max-width: 768px) {
        .timeline-date {
            text-align: left;
            margin-bottom: 1rem;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\RND1\belajar pemula\portfolio-website\resources\views/portfolio/about.blade.php ENDPATH**/ ?>