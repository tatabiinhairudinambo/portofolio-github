<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'Portfolio - Web Developer'); ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            background: linear-gradient(90deg, #ff0000, #00ff00, #0000ff, #ff00ff, #ff0000);
            background-size: 400% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: rgb 8s linear infinite;
        }
        
        @keyframes rgb {
            0% { background-position: 0% 50%; }
            100% { background-position: 400% 50%; }
        }
        
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #ff0000, #00ff00, #0000ff, #ff00ff);
            background-size: 400% 100%;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
            animation: rgb 8s linear infinite;
        }
        
        .nav-link.active {
            background: linear-gradient(90deg, #ff0000, #00ff00, #0000ff, #ff00ff);
            background-size: 400% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: rgb 8s linear infinite;
            font-weight: 500;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .profile-image-container {
            position: relative;
            display: inline-block;
        }
        
        .profile-image-container::after {
            content: '';
            position: absolute;
            width: 110%;
            height: 110%;
            top: -5%;
            left: -5%;
            border: 2px dashed rgba(255,255,255,0.3);
            border-radius: 50%;
            animation: spin 15s linear infinite;
        }
        
        .icon-box {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .hover-effect {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }
        
        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #ff0000, #00ff00, #0000ff, #ff00ff);
            background-size: 300% 300%;
            opacity: 0.1;
            z-index: 0;
            animation: rgb 10s ease infinite;
        }
        
        .hero-section > .container {
            position: relative;
            z-index: 1;
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .skill-bar {
            height: 10px;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 5px;
            transition: width 2s ease-in-out;
        }
        
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 40px 0;
        }
        
        .social-links a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        
        .social-links a:hover {
            color: #667eea;
        }
        
        .btn-primary-custom {
            background: linear-gradient(90deg, #ff0000, #00ff00, #0000ff, #ff00ff);
            background-size: 400% 100%;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            color: white;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, #ff0000, #00ff00, #0000ff, #ff00ff);
            background-size: 400% 100%;
            border-radius: 25px;
            opacity: 0;
            z-index: -1;
            transition: opacity 0.3s ease;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .btn-primary-custom:hover::before {
            opacity: 1;
            animation: rgb 8s linear infinite;
        }
        
        .btn-primary-custom:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
        }
    </style>
    
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <i class="fas fa-code text-primary"></i> welcome my portofolio
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('projects') ? 'active' : ''); ?>" href="<?php echo e(route('projects')); ?>">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('skills') ? 'active' : ''); ?>" href="<?php echo e(route('skills')); ?>">Keahlian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main style="margin-top: 76px;">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>kami siap melayani anda</h5>
                    <p class="mb-0">untuk membuat project terbaru atau perbaikan project lama anda</p>
                </div>
                <div class="col-md-6 text-md-center">
                    <div class="social-links">
                        <a href="https://github.com" title="GitHub" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/tatabiin-hairudin-ambo" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.tiktok.com/@bungg_atta" title="TikTok" target="_blank"><i class="fab fa-tiktok"></i></a>
                        <a href="https://instagram.com/Attasjah_" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p class="mt-2 mb-0">&copy; <?php echo e(date('Y')); ?> tatabiin hairudin ambo.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\RND1\belajar pemula\portfolio-website\resources\views/layouts/app.blade.php ENDPATH**/ ?>