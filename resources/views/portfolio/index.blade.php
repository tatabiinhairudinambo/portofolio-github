@extends('layouts.app')

@section('title', 'Beranda - Portfolio Web Developer')

@section('content')
<!-- Bagian Hero -->
<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <!-- Foto Profil -->
                <div class="profile-image-container mb-4">
                    <img src="{{ asset('beranda.jpg') }}" 
                         alt="Tatabiin Hairudin Ambo" 
                         class="img-fluid rounded-circle shadow-lg mx-auto d-block"
                         style="width: 250px; height: 250px; object-fit: cover; border: 4px solid #fff;"
                         onerror="this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=350&h=350&fit=crop&crop=face&auto=format';">
                </div>
                
                <!-- Teks di bawah foto -->
                <div class="mt-4">
                    <div class="d-flex flex-column align-items-center">
                    <span class="badge bg-primary bg-gradient mb-3" style="font-size: 1.2rem; padding: 0.5rem 1.5rem;">Web Developer</span>
                        <h1 class="display-4 fw-bold mb-3 text-gradient">Halo, Saya</h1>
                        
                        <h1 class="display-4 fw-bold mb-3 text-gradient">Tatabiin Hairudin Ambo</h1>
                    </div>
<style>
    .text-gradient {
        background: linear-gradient(90deg, #ff0000, #00ff00, #0000ff, #ff00ff, #ff0000);
        background-size: 400% 100%;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: rgb 8s linear infinite;
        display: inline-block;
    }
    
    @keyframes rgb {
        0% { background-position: 0% 50%; }
        100% { background-position: 400% 50%; }
    }
</style>
                    <div class="divider mx-auto bg-white mb-4" style="width: 100px; height: 3px; opacity: 0.7;"></div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <p class="lead mb-5 text-center" style="line-height: 1.8;">
                                Mahasiswa semester 4 yang passionate dalam pengembangan web. 
                                Berpengalaman dalam PHP, JavaScript, Laravel, dan teknologi modern lainnya.
                            </p>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="{{ route('projects') }}" class="btn btn-primary-custom btn-lg">
                            <i class="fas fa-eye me-2"></i>Lihat Proyek
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-envelope me-2"></i>Hubungi Saya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bagian Preview Tentang -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fw-bold mb-4">Tentang Saya</h2>
                <p class="lead text-muted mb-4">
                    Saya adalah seorang mahasiswa Teknik Komputer dan Jaringan lulusan SMK YPPD Depok yang 
                    passionate dalam web development. Meskipun masih muda (20 tahun), saya memiliki pengalaman 
                    di bidang jaringan dari Telkomsel dan terus belajar teknologi web modern seperti Laravel, Vue.js, dan React.
                </p>
                <a href="{{ route('about') }}" class="btn btn-primary-custom">
                    Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bagian Layanan -->
<section class="section-padding position-relative" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%); color: white;">
    <div class="container position-relative z-index-2">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Layanan Saya</h2>
                <p class="lead text-white">
                    Saya menyediakan berbagai layanan pengembangan web yang dapat membantu bisnis Anda berkembang
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg card-hover" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-laptop-code fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold text-dark">Web Development</h5>
                        <p class="card-text text-muted">
                            Pengembangan website responsif dan modern menggunakan teknologi terkini seperti Laravel, Vue.js, dan React.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg card-hover" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold text-dark">Responsive Design</h5>
                        <p class="card-text text-muted">
                            Desain website yang optimal di semua perangkat, mulai dari desktop hingga smartphone.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg card-hover" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-database fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title fw-bold text-dark">Backend Development</h5>
                        <p class="card-text text-muted">
                            Pengembangan sistem backend yang robust dengan database yang terstruktur dan API yang efisien.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bagian Proyek Unggulan -->
<section class="section-padding position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1551103782-8ab07afd45c1?w=1920&h=1080&fit=crop&crop=center&auto=format') center/cover no-repeat; color: white;">
    <div class="container position-relative z-index-2">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Proyek Unggulan</h2>
                <p class="lead text-white">
                    Beberapa proyek terbaik yang telah saya kerjakan
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-lg card-hover position-relative overflow-hidden" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
                    <div class="position-relative video-preview-container">
                        <img src="https://via.placeholder.com/500x300/667eea/ffffff?text=E-Commerce+Project" 
                             class="card-img-top video-thumbnail" alt="E-Commerce Project">
                        <video class="card-img-top video-preview d-none" muted loop preload="metadata">
                            <source src="/videos/ecommerce-demo.mp4" type="video/mp4">
                            <source src="https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_1mb.mp4" type="video/mp4">
                        </video>
                        <div class="position-absolute top-50 start-50 translate-middle video-play-btn">
                            <i class="fas fa-play-circle fa-3x text-white opacity-75"></i>
                        </div>
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 video-overlay" 
                             style="background: rgba(0,0,0,0.7); transition: opacity 0.3s ease;">
                            <div class="text-center">
                                <button class="btn btn-light btn-sm me-2 play-video-btn">
                                    <i class="fas fa-play me-1"></i>Preview
                                </button>
                                <a href="{{ route('projects') }}" class="btn btn-outline-light btn-sm">
                                    <i class="fas fa-external-link-alt me-1"></i>Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">E-Commerce Website</h5>
                        <p class="card-text text-muted">
                            Platform e-commerce lengkap dengan sistem pembayaran, manajemen inventory, dan dashboard admin.
                        </p>
                        <div class="mb-3">
                            <span class="badge bg-primary me-1">Laravel</span>
                            <span class="badge bg-primary me-1">Vue.js</span>
                            <span class="badge bg-primary me-1">MySQL</span>
                        </div>
                        <a href="{{ route('projects') }}" class="btn btn-outline-primary">
                            Lihat Detail <i class="fas fa-external-link-alt ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-lg card-hover" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
                    <img src="https://via.placeholder.com/500x300/764ba2/ffffff?text=Task+Management" 
                         class="card-img-top" alt="Task Management">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Task Management App</h5>
                        <p class="card-text text-muted">
                            Aplikasi manajemen tugas kolaboratif dengan fitur real-time updates dan notifikasi.
                        </p>
                        <div class="mb-3">
                            <span class="badge bg-primary me-1">Laravel</span>
                            <span class="badge bg-primary me-1">Livewire</span>
                            <span class="badge bg-primary me-1">Tailwind</span>
                        </div>
                        <a href="{{ route('projects') }}" class="btn btn-outline-primary">
                            Lihat Detail <i class="fas fa-external-link-alt ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('projects') }}" class="btn btn-primary-custom btn-lg">
                Lihat Semua Proyek <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Bagian CTA -->
<section class="section-padding" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center text-white">
                <h2 class="fw-bold mb-4">Siap Memulai Proyek Anda?</h2>
                <p class="lead mb-4">
                    Mari diskusikan ide Anda dan wujudkan menjadi aplikasi web yang luar biasa!
                </p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                    <i class="fas fa-comments me-2"></i>Mari Berdiskusi
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Add smooth scrolling animation
    document.addEventListener('DOMContentLoaded', function() {
        // Animate skill bars when they come into view
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.card-hover').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    });
</script>
@endpush
