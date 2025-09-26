@extends('layouts.app')

@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    /* Custom Animations */
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    /* Skill Card Hover Effect */
    .skill-card {
        transition: all 0.3s ease;
        background: white;
        border: 1px solid rgba(0,0,0,0.05);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .skill-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
        opacity: 0;
        transition: all 0.3s ease;
        z-index: -1;
    }
    
    .skill-card:hover::before {
        opacity: 1;
    }
    
    .skill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    
    /* Hover Lift Effect */
    .hover-lift {
        transition: all 0.3s ease;
        background: rgba(255,255,255,0.9);
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }
    
    /* Progress Circle Animation */
    .progress-circle-fill {
        animation: progress-fill 1.5s ease-out forwards;
    }
    
    @keyframes progress-fill {
        from { stroke-dashoffset: 283; }
    }
    
    /* Gradient Text */
    .text-gradient {
        background: linear-gradient(90deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }
    
    /* Icon Box Hover */
    .icon-box {
        transition: all 0.3s ease;
    }
    
    .skill-card:hover .icon-box {
        transform: rotate(10deg) scale(1.1);
    }
    
    /* Badge Hover */
    .badge {
        transition: all 0.3s ease;
    }
    
    .badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* Animated Background */
    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23667eea' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
        z-index: -1;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .skill-card {
            margin-bottom: 20px;
        }
    }
    
    /* Skill Tag Animation */
    .skill-tag {
        transition: all 0.3s ease;
    }
    
    .skill-tag:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    /* Icon Wrapper */
    .icon-wrapper {
        width: 60px;
        height: 60px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(102, 126, 234, 0.1);
        border-radius: 50%;
        transition: all 0.3s ease;
    }
    
    .tech-item:hover .icon-wrapper {
        transform: scale(1.1) rotate(5deg);
        background: rgba(102, 126, 234, 0.2);
    }
    
    /* Section Header */
    .section-header {
        position: relative;
        margin-bottom: 60px;
    }
    
    .section-header::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 3px;
    }
        100% { transform: scale(1); }
    }
    
    /* Skill Card Hover Effect */
    .skill-card {
        transition: all 0.3s ease;
        background: white;
        border: 1px solid rgba(0,0,0,0.05);
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .skill-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.05) 0%, rgba(118, 75, 162, 0.05) 100%);
        opacity: 0;
        transition: all 0.3s ease;
        z-index: -1;
    }
    
    .skill-card:hover::before {
        opacity: 1;
    }
    
    .skill-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
    
    /* Hover Lift Effect */
    .hover-lift {
        transition: all 0.3s ease;
        background: rgba(255,255,255,0.9);
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }
    
    /* Progress Circle Animation */
    .progress-circle-fill {
        animation: progress-fill 1.5s ease-out forwards;
    }
    
    @keyframes progress-fill {
        from { stroke-dashoffset: 283; }
    }
    
    /* Gradient Text */
    .text-gradient {
        background: linear-gradient(90deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }
    
    /* Icon Box Hover */
    .icon-box {
        transition: all 0.3s ease;
    }
    
    .skill-card:hover .icon-box {
        transform: rotate(10deg) scale(1.1);
    }
    
    /* Badge Hover */
    .badge {
        transition: all 0.3s ease;
    }
    
    .badge:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* Animated Background */
    .particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23667eea' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
        z-index: -1;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .skill-card {
            margin-bottom: 20px;
        }
    }
    
    /* Skill Tag Animation */
    .skill-tag {
        transition: all 0.3s ease;
    }
    
    .skill-tag:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    /* Icon Wrapper */
    .icon-wrapper {
        width: 60px;
        height: 60px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(102, 126, 234, 0.1);
        border-radius: 50%;
        transition: all 0.3s ease;
    }
    
    .tech-item:hover .icon-wrapper {
        transform: scale(1.1) rotate(5deg);
        background: rgba(102, 126, 234, 0.2);
    }
    
    /* Section Header */
    .section-header {
        position: relative;
        margin-bottom: 60px;
    }
    
    .section-header::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 3px;
    }
    
    /* Skill Item */
    .skill-item {
        margin-bottom: 1.5rem;
    }
    
    /* Progress Bar */
    .progress {
        height: 10px;
        border-radius: 5px;
        background-color: #f0f2f5;
        overflow: visible;
    }
    
    .progress-bar {
        position: relative;
        overflow: visible;
        border-radius: 5px;
    }
    
    .progress-bar::after {
        content: '';
        position: absolute;
        right: -8px;
        top: 50%;
        transform: translateY(-50%);
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: white;
        border: 3px solid currentColor;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    /* Tooltip */
    .progress-tooltip {
        position: absolute;
        top: -35px;
        right: -10px;
        background: #2c3e50;
        color: white;
        padding: 2px 8px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: 600;
        transform: translateY(10px);
        opacity: 0;
        transition: all 0.3s ease;
    }
    
    .progress-tooltip::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 5px 5px 0;
        border-style: solid;
        border-color: #2c3e50 transparent transparent;
    }
    
    .progress-bar:hover .progress-tooltip {
        transform: translateY(0);
        opacity: 1;
    }
</style>
@endpush

@section('content')
<!-- Skills Section with Parallax Background -->
<section id="skills" class="section-padding position-relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="position-absolute particles"></div>
        <div class="position-absolute w-100 h-100 bg-light opacity-5"></div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4 section-header">Keahlian Saya</h1>
                <p class="lead">
                    Teknologi dan tools yang saya kuasai untuk mengembangkan aplikasi web modern
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Bagian Keahlian -->
<section class="section-padding">
    <div class="container">
        @foreach($skills as $category => $skillList)
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 fw-bold">
                            @if($category == 'Backend')
                                <i class="fas fa-server me-2"></i>
                            @elseif($category == 'Frontend')
                                <i class="fas fa-paint-brush me-2"></i>
                            @elseif($category == 'Database')
                                <i class="fas fa-database me-2"></i>
                            @else
                                <i class="fas fa-tools me-2"></i>
                            @endif
                            {{ $category }}
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-4">
                            @foreach($skillList as $skill => $level)
                            <div class="col-md-6">
                                <div class="skill-item">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="fw-bold mb-0">{{ $skill }}</h6>
                                        <span class="badge bg-primary">{{ $level }}%</span>
                                    </div>
                                    <div class="skill-bar bg-light">
                                        <div class="skill-progress" data-width="{{ $level }}%" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Sertifikasi -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Sertifikasi & Pencapaian</h2>
                <p class="lead text-muted">
                    Sertifikasi dan pencapaian yang mendukung keahlian saya
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-certificate fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Laravel Certified Developer</h5>
                        <p class="text-muted mb-2">Laravel LLC</p>
                        <p class="small text-muted">2023</p>
                        <span class="badge bg-success">Verified</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-award fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">AWS Cloud Practitioner</h5>
                        <p class="text-muted mb-2">Amazon Web Services</p>
                        <p class="small text-muted">2022</p>
                        <span class="badge bg-success">Active</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-medal fa-3x text-primary"></i>
                        </div>
                        <h5 class="fw-bold">Google Analytics Certified</h5>
                        <p class="text-muted mb-2">Google</p>
                        <p class="small text-muted">2022</p>
                        <span class="badge bg-success">Active</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jalur Pembelajaran -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Sedang Dipelajari</h2>
                <p class="lead text-muted">
                    Teknologi dan skill baru yang sedang saya pelajari untuk terus berkembang
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fab fa-node-js fa-3x text-success"></i>
                        </div>
                        <h6 class="fw-bold">Node.js</h6>
                        <div class="progress mb-2" style="height: 8px;">
                            <div class="progress-bar bg-success" style="width: 70%"></div>
                        </div>
                        <small class="text-muted">70% Progress</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fab fa-python fa-3x text-primary"></i>
                        </div>
                        <h6 class="fw-bold">Python</h6>
                        <div class="progress mb-2" style="height: 8px;">
                            <div class="progress-bar bg-primary" style="width: 60%"></div>
                        </div>
                        <small class="text-muted">60% Progress</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fab fa-docker fa-3x text-info"></i>
                        </div>
                        <h6 class="fw-bold">Docker</h6>
                        <div class="progress mb-2" style="height: 8px;">
                            <div class="progress-bar bg-info" style="width: 80%"></div>
                        </div>
                        <small class="text-muted">80% Progress</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center h-100">
                    <div class="card-body p-4">
                        <div class="mb-3">
                            <i class="fas fa-brain fa-3x text-warning"></i>
                        </div>
                        <h6 class="fw-bold">Machine Learning</h6>
                        <div class="progress mb-2" style="height: 8px;">
                            <div class="progress-bar bg-warning" style="width: 40%"></div>
                        </div>
                        <small class="text-muted">40% Progress</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Soft Skills -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Soft Skills</h2>
                <p class="lead text-muted">
                    Kemampuan non-teknis yang mendukung kinerja profesional saya
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fas fa-comments fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Komunikasi</h5>
                    <p class="text-muted">
                        Kemampuan berkomunikasi yang baik dengan klien dan tim untuk memahami kebutuhan proyek.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fas fa-puzzle-piece fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Problem Solving</h5>
                    <p class="text-muted">
                        Analisis dan penyelesaian masalah teknis dengan pendekatan yang sistematis dan efektif.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fas fa-clock fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Time Management</h5>
                    <p class="text-muted">
                        Manajemen waktu yang baik untuk menyelesaikan proyek sesuai deadline yang ditetapkan.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Teamwork</h5>
                    <p class="text-muted">
                        Kemampuan bekerja dalam tim dan berkolaborasi dengan berbagai stakeholder proyek.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fas fa-lightbulb fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Adaptability</h5>
                    <p class="text-muted">
                        Kemampuan beradaptasi dengan teknologi baru dan perubahan requirement proyek.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mb-3">
                        <i class="fas fa-eye fa-3x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Attention to Detail</h5>
                    <p class="text-muted">
                        Perhatian terhadap detail untuk menghasilkan kode yang bersih dan aplikasi yang berkualitas.
                    </p>
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
                <h2 class="fw-bold mb-4">Butuh Developer dengan Skills Ini?</h2>
                <p class="lead mb-4">
                    Mari diskusikan bagaimana keahlian saya dapat membantu proyek Anda!
                </p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-handshake me-2"></i>Mari Berkolaborasi
                    </a>
                    <a href="{{ route('projects') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-eye me-2"></i>Lihat Hasil Kerja
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate skill bars when they come into view
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const skillProgress = entry.target.querySelector('.skill-progress');
                    if (skillProgress) {
                        const width = skillProgress.getAttribute('data-width');
                        setTimeout(() => {
                            skillProgress.style.width = width;
                        }, 200);
                    }
                }
            });
        }, observerOptions);

        // Observe all skill items
        document.querySelectorAll('.skill-item').forEach(item => {
            observer.observe(item);
        });
    });
</script>
@endpush
