@extends('layouts.app')

@section('title', 'Kontak - Portfolio Web Developer')

@section('content')
<!-- Bagian Hero -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Hubungi Saya</h1>
                <p class="lead">
                    Mari diskusikan proyek Anda dan bagaimana saya dapat membantu mewujudkannya
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Bagian Kontak -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <!-- Form Kontak -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 fw-bold">
                            <i class="fas fa-envelope me-2"></i>Kirim Pesan
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label fw-bold">Nama Lengkap *</label>
                                    <input type="text" 
                                           class="form-control @error('name') is-invalid @enderror" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name') }}" 
                                           required>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-bold">Email *</label>
                                    <input type="email" 
                                           class="form-control @error('email') is-invalid @enderror" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label fw-bold">Subjek *</label>
                                    <input type="text" 
                                           class="form-control @error('subject') is-invalid @enderror" 
                                           id="subject" 
                                           name="subject" 
                                           value="{{ old('subject') }}" 
                                           required>
                                    @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label fw-bold">Pesan *</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" 
                                              id="message" 
                                              name="message" 
                                              rows="6" 
                                              required>{{ old('message') }}</textarea>
                                    @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary-custom btn-lg">
                                        <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Info Kontak -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 fw-bold">
                            <i class="fas fa-info-circle me-2"></i>Informasi Kontak
                        </h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-envelope fa-lg text-primary me-3"></i>
                                <h6 class="mb-0 fw-bold">Email</h6>
                            </div>
                            <p class="text-muted ms-4">tataambo913@gmail.com</p>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-phone fa-lg text-primary me-3"></i>
                                <h6 class="mb-0 fw-bold">Telepon</h6>
                            </div>
                            <p class="text-muted ms-4">+62082213840415</p>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-map-marker-alt fa-lg text-primary me-3"></i>
                                <h6 class="mb-0 fw-bold">Lokasi</h6>
                            </div>
                            <p class="text-muted ms-4">Depok, Jawa Barat, Indonesia</p>
                        </div>

                        <div class="contact-item mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-clock fa-lg text-primary me-3"></i>
                                <h6 class="mb-0 fw-bold">Waktu Kerja</h6>
                            </div>
                            <p class="text-muted ms-4">
                                Senin - Jumat<br>
                                06:00 - 17:00 WIB
                            </p>
                        </div>

                        <hr>

                        <div class="text-center">
                            <h6 class="fw-bold mb-3">Ikuti Saya</h6>
                            <div class="social-links">
                                <a href="https://github.com" class="btn btn-outline-primary btn-sm me-2 mb-2" target="_blank">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                                <a href="https://www.linkedin.com/in/tatabiin-hairudin-ambo" class="btn btn-outline-primary btn-sm me-2 mb-2" target="_blank">
                                    <i class="fab fa-linkedin"></i> LinkedIn
                                </a>
                                <a href="https://www.tiktok.com/@bungg_atta" class="btn btn-outline-primary btn-sm me-2 mb-2" target="_blank">
                                    <i class="fab fa-tiktok"></i> TikTok
                                </a>
                                <a href="https://instagram.com/Attasjah_" class="btn btn-outline-primary btn-sm mb-2" target="_blank">
                                    <i class="fab fa-instagram"></i> Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bagian FAQ -->
<section class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Pertanyaan yang Sering Diajukan</h2>
                <p class="lead text-muted">
                    Beberapa pertanyaan umum yang mungkin Anda miliki
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Berapa lama waktu yang dibutuhkan untuk menyelesaikan proyek?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Waktu penyelesaian proyek bervariasi tergantung kompleksitas dan scope proyek. 
                                Website sederhana biasanya membutuhkan 2-4 minggu, sedangkan aplikasi web kompleks 
                                bisa membutuhkan 2-3 bulan. Saya akan memberikan estimasi yang akurat setelah 
                                memahami requirement proyek Anda.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Apakah Anda menyediakan layanan maintenance setelah proyek selesai?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Ya, saya menyediakan layanan maintenance dan support setelah proyek selesai. 
                                Ini termasuk bug fixes, update keamanan, dan penambahan fitur kecil. 
                                Paket maintenance dapat disesuaikan dengan kebutuhan Anda.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Bagaimana sistem pembayaran untuk proyek?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Sistem pembayaran biasanya dibagi menjadi beberapa tahap: 30% di awal sebagai down payment, 
                                40% saat pengembangan mencapai 50%, dan 30% sisanya saat proyek selesai dan diserahkan. 
                                Sistem ini dapat disesuaikan dengan kesepakatan bersama.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Apakah Anda bisa bekerja dengan tim yang sudah ada?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Tentu saja! Saya memiliki pengalaman bekerja dengan berbagai tim development. 
                                Saya dapat beradaptasi dengan workflow yang sudah ada, menggunakan tools 
                                kolaborasi seperti Git, Slack, atau Trello sesuai kebutuhan tim.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Waktu Respon -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <div class="mb-4">
                            <i class="fas fa-clock fa-4x text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Waktu Respon Cepat</h3>
                        <p class="lead text-muted mb-4">
                            Saya berkomitmen untuk merespon setiap pesan dalam waktu maksimal 24 jam. 
                            Untuk pertanyaan urgent, Anda dapat menghubungi saya melalui WhatsApp.
                        </p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h4 class="text-primary fw-bold">< 2 Jam</h4>
                                    <p class="small text-muted mb-0">Respon Email</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h4 class="text-primary fw-bold">< 30 Menit</h4>
                                    <p class="small text-muted mb-0">Respon WhatsApp</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h4 class="text-primary fw-bold">24/7</h4>
                                    <p class="small text-muted mb-0">Support Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-hide alerts after 5 seconds
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }, 5000);
        });

        // Form validation enhancement
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
                submitBtn.disabled = true;
            });
        }
    });
</script>
@endpush
