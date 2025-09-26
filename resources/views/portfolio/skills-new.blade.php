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
        height: 100%;
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
        display: inline-block;
        margin: 0.25rem;
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
        margin-bottom: 3rem;
        text-align: center;
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
    
    /* Tech Stack Icons */
    .tech-stack {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
    }
    
    .tech-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .tech-icon:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    
    .tech-icon img {
        max-width: 30px;
        max-height: 30px;
    }
</style>
@endpush

@section('content')
<!-- Skills Section with Parallax Background -->
<section id="skills" class="py-5 position-relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="position-absolute particles"></div>
        <div class="position-absolute w-100 h-100 bg-light opacity-5"></div>
    </div>
    
    <div class="container position-relative py-5">
        <!-- Section Header -->
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-3">My Expertise</span>
                <h2 class="display-5 fw-bold text-gradient mb-3">Technical Skills</h2>
                <div class="divider mx-auto" style="width: 80px; height: 4px; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 2px;"></div>
                <p class="lead text-muted mt-4">
                    Here are the technical skills I've mastered through years of experience and continuous learning
                </p>
            </div>
        </div>

        <!-- Skills Grid -->
        <div class="row g-4">
            <!-- Programming Languages -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="skill-card p-4 rounded-4 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-code text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Programming Languages</h4>
                    </div>
                    
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-html5 text-orange me-2"></i>
                                <span>HTML5 & CSS3</span>
                            </div>
                            <span class="badge bg-primary bg-opacity-10 text-primary">Advanced</span>
                        </div>
                        <div class="progress" style="height: 10px; border-radius: 5px; background-color: #f0f2f5;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%; background: linear-gradient(90deg, #ff6b6b, #ff8e8e);" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-tooltip">95%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-js text-warning me-2"></i>
                                <span>JavaScript (ES6+)</span>
                            </div>
                            <span class="badge bg-primary bg-opacity-10 text-primary">Advanced</span>
                        </div>
                        <div class="progress" style="height: 10px; border-radius: 5px; background-color: #f0f2f5;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%; background: linear-gradient(90deg, #f9ca24, #f6e58d);" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-tooltip">90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-php text-primary me-2"></i>
                                <span>PHP</span>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success">Expert</span>
                        </div>
                        <div class="progress" style="height: 10px; border-radius: 5px; background-color: #f0f2f5;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%; background: linear-gradient(90deg, #6c5ce7, #a29bfe);" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-tooltip">85%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Frameworks & Libraries -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="skill-card p-4 rounded-4 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-layer-group text-success fs-4"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Frameworks & Libraries</h4>
                    </div>
                    
                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-laravel text-danger me-2"></i>
                                <span>Laravel</span>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success">Expert</span>
                        </div>
                        <div class="progress" style="height: 10px; border-radius: 5px; background-color: #f0f2f5;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%; background: linear-gradient(90deg, #ff6b6b, #ff8e8e);" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-tooltip">90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-react text-info me-2"></i>
                                <span>React.js</span>
                            </div>
                            <span class="badge bg-primary bg-opacity-10 text-primary">Advanced</span>
                        </div>
                        <div class="progress" style="height: 10px; border-radius: 5px; background-color: #f0f2f5;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%; background: linear-gradient(90deg, #00cec9, #81ecec);" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-tooltip">85%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill-item mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-bootstrap text-purple me-2"></i>
                                <span>Bootstrap 5</span>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success">Expert</span>
                        </div>
                        <div class="progress" style="height: 10px; border-radius: 5px; background-color: #f0f2f5;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%; background: linear-gradient(90deg, #6c5ce7, #a29bfe);" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <span class="progress-tooltip">95%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tools & Technologies -->
            <div class="col-lg-6 mt-4" data-aos="fade-right" data-aos-delay="200">
                <div class="skill-card p-4 rounded-4 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box bg-warning bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-tools text-warning fs-4"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Tools & Technologies</h4>
                    </div>
                    
                    <div class="row g-3">
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="tech-item text-center p-3 rounded-3 hover-lift h-100">
                                <div class="icon-wrapper mb-3">
                                    <i class="fab fa-git-alt text-primary" style="font-size: 2rem;"></i>
                                </div>
                                <h6 class="mb-2 fw-bold">Git & GitHub</h6>
                                <div class="progress" style="height: 6px; border-radius: 3px; background-color: #f0f2f5;">
                                    <div class="progress-bar" role="progressbar" style="width: 90%; background: linear-gradient(90deg, #f093fb, #f5576c);">
                                        <span class="progress-tooltip">90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="150">
                            <div class="tech-item text-center p-3 rounded-3 hover-lift h-100">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-database text-info" style="font-size: 2rem;"></i>
                                </div>
                                <h6 class="mb-2 fw-bold">MySQL</h6>
                                <div class="progress" style="height: 6px; border-radius: 3px; background-color: #f0f2f5;">
                                    <div class="progress-bar" role="progressbar" style="width: 85%; background: linear-gradient(90deg, #4facfe, #00f2fe);">
                                        <span class="progress-tooltip">85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="tech-item text-center p-3 rounded-3 hover-lift h-100">
                                <div class="icon-wrapper mb-3">
                                    <i class="fab fa-docker text-primary" style="font-size: 2rem;"></i>
                                </div>
                                <h6 class="mb-2 fw-bold">Docker</h6>
                                <div class="progress" style="height: 6px; border-radius: 3px; background-color: #f0f2f5;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%; background: linear-gradient(90deg, #4facfe, #00f2fe);">
                                        <span class="progress-tooltip">80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6" data-aos="zoom-in" data-aos-delay="250">
                            <div class="tech-item text-center p-3 rounded-3 hover-lift h-100">
                                <div class="icon-wrapper mb-3">
                                    <i class="fab fa-figma text-danger" style="font-size: 2rem;"></i>
                                </div>
                                <h6 class="mb-2 fw-bold">Figma</h6>
                                <div class="progress" style="height: 6px; border-radius: 3px; background-color: #f0f2f5;">
                                    <div class="progress-bar" role="progressbar" style="width: 75%; background: linear-gradient(90deg, #ff6b6b, #ff8e8e);">
                                        <span class="progress-tooltip">75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Skills -->
            <div class="col-lg-6 mt-4" data-aos="fade-left" data-aos-delay="250">
                <div class="skill-card p-4 rounded-4 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box bg-info bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="fas fa-star text-info fs-4"></i>
                        </div>
                        <h4 class="mb-0 fw-bold">Other Skills</h4>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary p-2 rounded-pill skill-tag">
                            <i class="fas fa-mobile-alt me-1"></i> Responsive Design
                        </span>
                        <span class="badge bg-primary bg-opacity-10 text-primary p-2 rounded-pill skill-tag">
                            <i class="fas fa-plug me-1"></i> RESTful APIs
                        </span>
                        <span class="badge bg-primary bg-opacity-10 text-primary p-2 rounded-pill skill-tag">
                            <i class="fas fa-sitemap me-1"></i> MVC Architecture
                        </span>
                        <span class="badge bg-primary bg-opacity-10 text-primary p-2 rounded-pill skill-tag">
                            <i class="fas fa-paint-brush me-1"></i> UI/UX Design
                        </span>
                        <span class="badge bg-primary bg-opacity-10 text-primary p-2 rounded-pill skill-tag">
                            <i class="fas fa-lightbulb me-1"></i> Problem Solving
                        </span>
                        <span class="badge bg-primary bg-opacity-10 text-primary p-2 rounded-pill skill-tag">
                            <i class="fas fa-users me-1"></i> Team Collaboration
                        </span>
                    </div>

                    <!-- Tech Stack Icons -->
                    <div class="tech-stack">
                        <div class="tech-icon" data-aos="zoom-in" data-aos-delay="100">
                            <i class="fab fa-html5 text-orange" style="font-size: 1.75rem;"></i>
                        </div>
                        <div class="tech-icon" data-aos="zoom-in" data-aos-delay="150">
                            <i class="fab fa-css3-alt text-primary" style="font-size: 1.75rem;"></i>
                        </div>
                        <div class="tech-icon" data-aos="zoom-in" data-aos-delay="200">
                            <i class="fab fa-js text-warning" style="font-size: 1.75rem;"></i>
                        </div>
                        <div class="tech-icon" data-aos="zoom-in" data-aos-delay="250">
                            <i class="fab fa-php text-primary" style="font-size: 1.75rem;"></i>
                        </div>
                        <div class="tech-icon" data-aos="zoom-in" data-aos-delay="300">
                            <i class="fab fa-laravel text-danger" style="font-size: 1.75rem;"></i>
                        </div>
                        <div class="tech-icon" data-aos="zoom-in" data-aos-delay="350">
                            <i class="fab fa-react text-info" style="font-size: 1.75rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Soft Skills Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="fw-bold mb-4">Soft Skills</h2>
                <p class="lead text-muted">
                    Essential skills that enhance my technical abilities and contribute to successful project delivery
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="icon-wrapper mx-auto mb-4" style="width: 80px; height: 80px;">
                        <i class="fas fa-comments fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Communication</h5>
                    <p class="text-muted mb-0">
                        Effectively conveying ideas and collaborating with team members and stakeholders.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="icon-wrapper mx-auto mb-4" style="width: 80px; height: 80px;">
                        <i class="fas fa-lightbulb fa-2x text-warning"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Problem Solving</h5>
                    <p class="text-muted mb-0">
                        Analyzing complex issues and developing effective solutions efficiently.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                    <div class="icon-wrapper mx-auto mb-4" style="width: 80px; height: 80px;">
                        <i class="fas fa-users fa-2x text-success"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Teamwork</h5>
                    <p class="text-muted mb-0">
                        Collaborating effectively with cross-functional teams to achieve common goals.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center text-white">
                <h2 class="display-5 fw-bold mb-4">Interested in Working Together?</h2>
                <p class="lead mb-4">
                    I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
                </p>
                <a href="#contact" class="btn btn-light btn-lg px-4 me-3">
                    <i class="fas fa-paper-plane me-2"></i>Get In Touch
                </a>
                <a href="#portfolio" class="btn btn-outline-light btn-lg px-4">
                    <i class="fas fa-code me-2"></i>View My Work
                </a>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<!-- Initialize AOS -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Animate progress bars on scroll
        const animateProgressBars = () => {
            const progressBars = document.querySelectorAll('.progress-bar');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
        };
        
        // Run animation when skills section is in view
        const skillsSection = document.getElementById('skills');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateProgressBars();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        if (skillsSection) {
            observer.observe(skillsSection);
        }
    });
</script>
@endpush
@endsection
