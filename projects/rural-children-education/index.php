<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rural Children Education | The Global Rise Foundation</title>
    <meta name="description" content="Empowering rural children in India through education. Join The Global Rise Foundation in our mission to provide quality education to every child.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles & Component Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/hero.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/about.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/mission.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/programs.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/impact.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/gallery.css">
    
    <!-- Additional Project Specific Styles (Minimal) -->
    <style>
        /* Specific tweaks for this page content if needed, overriding only where necessary */
        .project-hero-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }
        .hero-title-project {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero-subtitle-project {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        
        /* Process Section Styles */
        .process-section {
            padding: 80px 0;
            background: #fff;
            text-align: center;
        }
        
        .process-steps {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 50px;
            position: relative;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Connecting Line */
        .process-steps::before {
            content: '';
            position: absolute;
            top: 40px; /* Aligns with circle center */
            left: 50px;
            right: 50px;
            height: 4px;
            background-color: #e0e0e0;
            z-index: 1;
        }
        
        .step-item {
            flex: 1;
            position: relative;
            z-index: 2;
            padding: 0 15px;
        }
        
        .step-circle {
            width: 80px;
            height: 80px;
            background: #fff;
            border: 4px solid var(--primary-color, #E63946);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color, #E63946);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .step-item:hover .step-circle {
            background: var(--primary-color, #E63946);
            color: #fff;
            transform: scale(1.1);
        }
        
        .step-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }
        
        .step-desc {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.5;
        }
        
        @media screen and (max-width: 768px) {
            .process-steps {
                flex-direction: column;
                align-items: center;
                gap: 40px;
            }
            .process-steps::before {
                width: 4px;
                height: 100%; /* Vertical line for mobile */
                top: 0;
                left: 50%;
                margin-left: -2px;
                right: auto;
            }
            .step-circle {
                width: 70px;
                height: 70px;
                font-size: 20px;
            }
        }
        
        /* Promo Banner */
        .promo-banner-section {
            width: 100%;
            overflow: hidden;
            display: block;
            margin-top: -5px; /* Adjusting spacing */
        }
        .promo-banner-img {
            width: 100%;
            height: auto;
            display: block;
        }
        
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- HERO SECTION (Using hero.css structure) -->
    <section class="hero-section">
        <div class="hero-slider-container" id="heroSlider">
            <!-- Reuse slide structure but with project images -->
            <div class="hero-slide active">
                <img src="<?php echo BASE_URL; ?>assets/frontend/promo-banner.png" alt="Rural Education" style="filter: brightness(0.6);">
                <div class="project-hero-overlay">
                    <div class="container" style="flex-direction: column;">
                        <h1 class="hero-title-project">Educating Rural Children</h1>
                        <p class="hero-subtitle-project">Empowering the Future of India</p>
                        <button class="btn-donate" onclick="document.getElementById('how-to-help').scrollIntoView({behavior: 'smooth'})">Support This Cause</button>
                    </div>
                </div>
            </div>
            <!-- Additional slides can be added here if we have more images -->
        </div>
    </section>

    <!-- ABOUT SECTION (Using about.css structure) -->
    <section class="about-section">
        <div class="container" style="display: block;">
            <h2 class="about-heading">About The Initiative</h2>
            
            <div class="about-content">
                <!-- Video/Image Column -->
                <div class="about-video-wrapper">
                    <!-- Placeholder for project specific video or image -->
                    <img src="<?php echo BASE_URL; ?>assets/frontend/AKM_7992-scaled.jpg" alt="Classroom" style="width:100%; height:100%; object-fit:cover;">
                </div>

                <!-- Text Column -->
                <div class="about-text">
                    <p class="about-desc">
                        Education is the most powerful tool to break the cycle of poverty. Our Rural Children Education project focuses on bridging the gap between urban and rural educational standards across India.
                    </p>
                    <p class="about-desc">
                        Millions of children in rural India lack access to basic schooling. We are changing that by building learning centers, training teachers, and providing digital resources to ensure every child gets a fair chance at life.
                    </p>
                    <a href="#impact" class="about-read-more">See Our Impact ></a>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION SECTION (Using mission.css structure) -->
    <section class="mission-section">
        <div class="container" style="display: block;">
            <h2 class="mission-heading">Our <span>Goal</span></h2>
            
            <div class="mission-content">
                <div class="mission-col">
                    <h3 class="mission-title">Our <span>Mission</span></h3>
                    <p class="mission-desc">
                        To provide accessible, high-quality education to underprivileged rural children, ensuring no child is left behind due to poverty or location.
                    </p>
                </div>
                <div class="mission-col">
                    <h3 class="mission-title">Our <span>Vision</span></h3>
                    <p class="mission-desc">
                        An India where every child, from the remotest village to the biggest city, has equal opportunity to learn, grow, and succeed.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- PROMO BANNER SECTION -->
    <section class="promo-banner-section">
        <img src="<?php echo BASE_URL; ?>assets/frontend/rural-promo-banner.png" alt="Help Rural Children" class="promo-banner-img">
    </section>
    
    <!-- THE PROBLEM SECTION (Custom grid reusing program card styles for consistency) -->
    <section class="programs-section" style="background:#fff;">
        <div class="container" style="display: block;">
            <h2 class="programs-heading">The Challenges</h2>
            <div class="programs-grid">
                <div class="program-card">
                     <div class="card-content">
                        <i class="fas fa-school fa-3x" style="color:#FFA000; margin-bottom:15px;"></i>
                        <h4 class="card-title">Lack of Schools</h4>
                        <p style="color:#666; font-size:14px; margin-top:10px;">Many villages have no school within a safe walking distance.</p>
                     </div>
                </div>
                <div class="program-card">
                     <div class="card-content">
                        <i class="fas fa-user-minus fa-3x" style="color:#FFA000; margin-bottom:15px;"></i>
                        <h4 class="card-title">High Dropouts</h4>
                         <p style="color:#666; font-size:14px; margin-top:10px;">Children leave early to support families financially.</p>
                     </div>
                </div>
                <div class="program-card">
                     <div class="card-content">
                        <i class="fas fa-wifi fa-3x" style="color:#FFA000; margin-bottom:15px;"></i>
                        <h4 class="card-title">Digital Divide</h4>
                         <p style="color:#666; font-size:14px; margin-top:10px;">Zero access to computers or modern learning tools.</p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAMS / WHAT WE DO SECTION (Using programs.css structure) -->
    <section class="programs-section">
        <div class="container" style="display: block;">
            <h2 class="programs-heading">What We Do</h2>

            <!-- Featured Activity -->
            <div class="featured-program">
                <div class="featured-image-wrapper">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/Girl-Child-Education.jpg" alt="Digital Literacy" class="featured-image">
                </div>
                <div class="featured-content">
                    <h3 class="featured-title">Digital Literacy</h3>
                    <p class="featured-desc">
                        We are setting up computer labs in village centers to teach basic tech skills. In today's world, digital literacy is as important as basic literacy. Our program ensures rural children are not left behind in the digital revolution.
                    </p>
                </div>
            </div>

            <!-- Other Activities Grid -->
            <div class="programs-grid">
                <div class="program-card">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/women-empowerment.jpg" alt="Evening Schools" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">Evening Schools</h4>
                        <p style="font-size:13px; color:#555; margin-top:5px;">Bridge courses for out-of-school children.</p>
                    </div>
                </div>
                
                <div class="program-card">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg" alt="School Supplies" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">School Supplies</h4>
                        <p style="font-size:13px; color:#555; margin-top:5px;">Providing bags, books, and uniforms.</p>
                    </div>
                </div>

                <div class="program-card">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/persons-disabilites.jpg" alt="Teacher Training" class="card-image">
                    <div class="card-content">
                        <h4 class="card-title">Teacher Training</h4>
                        <p style="font-size:13px; color:#555; margin-top:5px;">Empowering local youth as educators.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- IMPACT SECTION (Using impact.css structure) -->
    <section id="impact" class="impact-section">
         <div class="container-fluid p-0">
            <h2 class="impact-heading">Our Impact So Far</h2>
            
            <div class="impact-stats-grid">
                <div class="impact-stat-item">
                    <div class="stat-label-top">Children Educated</div>
                    <div class="stat-number">5,000+</div>
                    <div class="stat-desc">across rural India</div>
                </div>

                <div class="impact-stat-item">
                    <div class="stat-label-top">Villages Covered</div>
                    <div class="stat-number">120</div>
                    <div class="stat-desc">remote locations</div>
                </div>

                <div class="impact-stat-item">
                    <div class="stat-label-top">Teachers Trained</div>
                    <div class="stat-number">350</div>
                    <div class="stat-desc">community educators</div>
                </div>

                <div class="impact-stat-item">
                    <div class="stat-label-top">Learning Centers</div>
                    <div class="stat-number">50</div>
                    <div class="stat-desc">active evening schools</div>
                </div>
            </div>

            <div class="impact-bottom-image-wrapper">
                <img src="<?php echo BASE_URL; ?>assets/frontend/rural-education.png" alt="Children Smiling" class="impact-bottom-image">
            </div>
        </div>
    </section>
    
    <!-- PROCESS SECTION (Redesigned Horizontal Flow) -->
    <section class="process-section">
        <div class="container" style="display:block;">
            <h2 class="programs-heading">Our Process</h2>
            
            <div class="process-steps">
                <!-- Step 1 -->
                <div class="step-item">
                    <div class="step-circle">
                        <i class="fas fa-search"></i>
                    </div>
                    <h4 class="step-title">Enrollment</h4>
                    <p class="step-desc">Identifying and enrolling out-of-school children.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="step-item">
                    <div class="step-circle">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h4 class="step-title">Learning</h4>
                    <p class="step-desc">Regular classes and nutritional support.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="step-item">
                    <div class="step-circle">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4 class="step-title">Skilling</h4>
                    <p class="step-desc">Vocational and digital skills training.</p>
                </div>
                
                <!-- Step 4 -->
                <div class="step-item">
                    <div class="step-circle">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4 class="step-title">Future Ready</h4>
                    <p class="step-desc">Career guidance and higher education support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW YOU CAN HELP (Reusing featured program style simplified) -->
    <section id="how-to-help" class="about-section" style="background-color: #f4f6f8;">
        <div class="container" style="display: block; text-align: center;">
            <h2 class="about-heading" style="margin-bottom: 30px;">Join Our Mission</h2>
            <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                <div style="background: white; padding: 40px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); max-width: 300px;">
                    <i class="fas fa-heart fa-3x" style="color: #E63946; margin-bottom: 20px;"></i>
                    <h3>Donate</h3>
                    <p style="margin: 15px 0; color: #666;">Sponsor a child's education for just ₹1000/month.</p>
                    <a href="#" class="btn-donate">Donate Now</a>
                </div>
                <div style="background: white; padding: 40px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); max-width: 300px;">
                    <i class="fas fa-hands-helping fa-3x" style="color: #1D3557; margin-bottom: 20px;"></i>
                    <h3>Volunteer</h3>
                    <p style="margin: 15px 0; color: #666;">Teach, mentor, or help organize events in villages.</p>
                    <a href="#" class="btn-donate" style="background: #1D3557; border-color: #1D3557;">Join Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- GALLERY SECTION (Using gallery.css structure) -->
    <section class="gallery-section">
        <div class="container-fluid" style="padding: 0;">
            <h2 class="programs-heading" style="text-align: center;">Gallery</h2>
            <div class="gallery-container">
                <!-- Row 1: Moves Left -->
                <div class="gallery-track scroll-left">
                    <!-- Duplicate logic for infinite scroll illusion -->
                    <?php
                    $gallery_images = [
                        BASE_URL . 'assets/frontend/disaster-management.jpg',
                        BASE_URL . 'assets/frontend/Girl-Child-Education.jpg',
                        BASE_URL . 'assets/frontend/persons-disabilites.jpg',
                        BASE_URL . 'assets/frontend/women-empowerment.jpg',
                        BASE_URL . 'assets/frontend/disaster-management.jpg',
                        BASE_URL . 'assets/frontend/Girl-Child-Education.jpg',
                    ];
                    foreach($gallery_images as $img) {
                        echo '<div class="gallery-item"><img src="'.$img.'" alt="Gallery"></div>';
                    }
                    foreach($gallery_images as $img) {
                        echo '<div class="gallery-item"><img src="'.$img.'" alt="Gallery"></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    


    <?php include(BASE_URL . 'includes/footer.php'); ?>


</body>
</html>
