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
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">

    
    <style>
        /* 
         * Global Variables & Reset 
         */
        :root {
            --primary-green: #4CAF50;
            --secondary-blue: #2196F3;
            --soft-orange: #FF9800; /* Adjusted for softer look */
            --light-bg: #F9FAFB;
            --white: #ffffff;
            --text-dark: #333333;
            --text-light: #666666;
            --border-radius: 12px;
            --shadow: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-hover: 0 10px 15px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        p {
            margin-bottom: 1rem;
            color: var(--text-light);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
            border-radius: var(--border-radius);
        }

        section {
            padding: 4rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .container-fluid {
            width: 100%;
            padding: 0;
            margin: 0;
            max-width: 100%;
        }

        /* Utility Classes */
        .text-center { text-align: center; }
        .text-green { color: var(--primary-green); }
        .text-blue { color: var(--secondary-blue); }
        .text-orange { color: var(--soft-orange); } /* Assuming warm tone requested */
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: #388E3C; /* Darker green */
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover);
        }

        .btn-secondary {
            background-color: var(--white);
            color: var(--primary-green);
            border: 2px solid var(--primary-green);
        }
        
        .btn-secondary:hover {
            background-color: var(--primary-green);
            color: var(--white);
        }

        .btn-cta {
             background: linear-gradient(135deg, var(--soft-orange), #FF5722);
             color: white;
             font-size: 1.1rem;
             padding: 15px 30px;
        }
        
        .btn-cta:hover {
            transform: scale(1.05);
             box-shadow: 0 0 20px rgba(255, 152, 0, 0.4);
        }

        /* 
         * SECTION 1: Hero Section 
         */
        #hero {
            position: relative;
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo BASE_URL; ?>assets/images/rural-education-hero.jpg'); /* Placeholder path */
            background-size: cover;
            background-position: center;
            /* Fallback generic gradient if image missing */
            background-color: #2c3e50; 
            padding: 0 1rem;
            margin-bottom: 2rem;
            width: 100%;
            max-width: 100%;
        }
        
        /* If no image, use CSS gradient */
        #hero.no-img {
            background: linear-gradient(135deg, #4CAF50, #2196F3);
        }

        .hero-content {
            max-width: 800px;
            z-index: 2;
            animation: fadeInUp 1.2s ease-out;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* 
         * SECTION 2: About the Project 
         */
        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            align-items: center;
        }
        
        .about-text {
            padding: 1rem;
        }

        .about-cards {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .icon-card {
            background: var(--white);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            flex: 1;
            min-width: 150px;
            transition: var(--transition);
        }

        .icon-card:hover {
            transform: translateY(-5px);
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            background: rgba(76, 175, 80, 0.1);
            color: var(--primary-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* 
         * SECTION 3: The Problem 
         */
        .problem-section {
            background-color: #fff;
        }
        
        .problem-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .problem-card {
            background: var(--light-bg);
            padding: 2rem;
            border-radius: var(--border-radius);
            text-align: center;
            transition: var(--transition);
            border-top: 4px solid var(--soft-orange);
        }

        .problem-card:hover {
            background: var(--white);
            box-shadow: var(--shadow-hover);
        }
        
        .problem-icon {
            font-size: 2rem;
            color: var(--soft-orange);
            margin-bottom: 1rem;
        }

        /* 
         * SECTION 4: Mission & Vision 
         */
        .mission-vision-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .mv-box {
            flex: 1;
            min-width: 300px;
            background: var(--white);
            padding: 3rem;
            border-radius: var(--border-radius);
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow);
            text-align: center;
        }
        
        .mv-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary-green);
            transform: scaleX(0);
            transition: transform 0.4s ease;
            transform-origin: left;
        }
        
        .mv-box:hover::before {
            transform: scaleX(1);
        }

        .mv-box h3 {
            color: var(--secondary-blue);
        }

        /* 
         * SECTION 5: What We Do 
         */
        .activities-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }
        
        @media (max-width: 768px) {
            .activities-grid {
                grid-template-columns: 1fr;
            }
        }

        .activity-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            background: var(--white);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .activity-item:hover {
            transform: translateX(5px);
        }
        
        .activity-bullet {
            width: 12px;
            height: 12px;
            background-color: var(--primary-green);
            border-radius: 50%;
            margin-top: 8px;
            flex-shrink: 0;
        }

        /* 
         * SECTION 6: Our Impact (Stats) 
         */
        .impact-section {
            background: linear-gradient(135deg, #E8F5E9, #E3F2FD);
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-item {
            padding: 1rem;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary-green);
            display: block;
        }
        
        .stat-label {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* 
         * SECTION 7: Programs & Timeline 
         */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 2rem auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: var(--primary-green);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
        }
        
        .timeline-container {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }
        
        .timeline-container::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background-color: var(--white);
            border: 4px solid var(--soft-orange);
            top: 20px;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-left {
            left: 0;
        }

        .timeline-right {
            left: 50%;
        }
        
        .timeline-left::after {
            right: -10px;
        }
        
        .timeline-right::after {
            left: -10px;
        }

        .timeline-content {
            padding: 20px;
            background-color: white;
            position: relative;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .timeline-content:hover {
            transform: scale(1.02);
        }

        @media screen and (max-width: 600px) {
            .timeline::after { left: 31px; }
            .timeline-container { width: 100%; padding-left: 70px; padding-right: 25px; }
            .timeline-right { left: 0; }
            .timeline-left::after, .timeline-right::after { left: 21px; }
        }

        /* 
         * SECTION 8: Success Stories 
         */
        .stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .story-card {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .story-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }
        
        .story-img-placeholder {
            height: 200px;
            background-color: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
        }

        .story-content {
            padding: 1.5rem;
        }
        
        .story-name {
            font-size: 1.2rem;
            color: var(--primary-green);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        /* 
         * SECTION 9: How You Can Help 
         */
        .help-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .help-card {
            background: var(--white);
            padding: 2rem;
            text-align: center;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
        }
        
        .help-icon {
            font-size: 2.5rem;
            color: var(--secondary-blue);
            margin-bottom: 1rem;
            display: inline-block;
        }

        /* 
         * SECTION 10: Gallery 
         */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        .gallery-item {
            position: relative;
            height: 200px;
            border-radius: var(--border-radius);
            overflow: hidden;
            background-color: #eee;
            cursor: pointer;
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
            text-align: center;
            padding: 1rem;
            font-weight: 600;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        /* 
         * SECTION 11: FAQs 
         */
        .faq-item {
            background: var(--white);
            border-bottom: 1px solid #eee;
            margin-bottom: 1rem;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .faq-title {
            padding: 1.2rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }
        
        .faq-content {
            padding: 0 1.2rem 1.2rem;
            display: none;
            color: var(--text-light);
        }

        .faq-title.active {
            color: var(--primary-green);
        }
        
        .toggle-icon {
            transition: transform 0.3s;
        }
        
        .faq-title.active .toggle-icon {
            transform: rotate(180deg);
        }

        /* 
         * SECTION 12: Final CTA 
         */
        .cta-final {
            background: linear-gradient(135deg, var(--primary-green), #2E7D32);
            color: white;
            text-align: center;
            padding: 5rem 1rem;
        }
        
        .cta-final h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- SECTION 1: Hero -->
    <section id="hero" class="container-fluid no-img">
        <div class="hero-content">
            <h1 class="hero-title">Educating Rural Children, Empowering the Future</h1>
            <p class="hero-subtitle">Bringing quality education to the most remote villages of India, giving every child the chance to dream.</p>
            <button class="btn btn-cta" onclick="document.getElementById('how-to-help').scrollIntoView({behavior: 'smooth'})">Support Rural Education</button>
        </div>
    </section>

    <!-- SECTION 2: About the Project -->
    <section id="about">
        <div class="text-center">
            <h2 class="text-green">About The Initiative</h2>
            <p style="max-width: 700px; margin: 0 auto 3rem;">
                Education is the most powerful tool to break the cycle of poverty. Our Rural Children Education project focuses on bridging the gap between urban and rural educational standards across India.
            </p>
        </div>
        <div class="about-grid">
            <div class="about-text">
                <h3>Why Rural Education?</h3>
                <p>Millions of children in rural India lack access to basic schooling. We are changing that by building learning centers, training teachers, and providing digital resources.</p>
                <a href="#impact" class="btn btn-primary">See Our Impact</a>
            </div>
            <div class="about-cards">
                <div class="icon-card fade-in">
                    <div class="icon-circle">📚</div>
                    <h4>Quality Learning</h4>
                    <p>Standardized curriculum.</p>
                </div>
                <div class="icon-card fade-in">
                    <div class="icon-circle">🏫</div>
                    <h4>Safe Spaces</h4>
                    <p>Secure classrooms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: The Problem -->
    <section id="problem" class="problem-section">
        <div class="text-center">
            <h2>The Challenges We Face</h2>
            <p>The road to literacy is full of obstacles for a village child.</p>
        </div>
        <div class="problem-grid">
            <div class="problem-card fade-in">
                <div class="problem-icon">☹</div>
                <h4>Lack of Schools</h4>
                <p>Many villages have no school within a safe walking distance.</p>
            </div>
            <div class="problem-card fade-in">
                <div class="problem-icon">📉</div>
                <h4>High Dropouts</h4>
                <p>Children leave school early to support their families financially.</p>
            </div>
            <div class="problem-card fade-in">
                <div class="problem-icon">📶</div>
                <h4>Digital Divide</h4>
                <p>Zero access to computers or internet for modern learning.</p>
            </div>
            <div class="problem-card fade-in">
                <div class="problem-icon">💰</div>
                <h4>Poverty</h4>
                <p>Families cannot afford uniforms, books, or fees.</p>
            </div>
        </div>
    </section>

    <!-- SECTION 4: Mission & Vision -->
    <section id="mission">
        <div class="mission-vision-container">
            <div class="mv-box fade-in">
                <h3>Our Mission</h3>
                <p>To provide accessible, high-quality education to underprivileged rural children, ensuring no child is left behind due to poverty or location.</p>
            </div>
            <div class="mv-box fade-in">
                <h3>Our Vision</h3>
                <p>An India where every child, from the remotest village to the biggest city, has equal opportunity to learn, grow, and succeed.</p>
            </div>
        </div>
    </section>

    <!-- SECTION 5: What We Do -->
    <section id="activities">
        <h2 class="text-center text-blue">What We Do</h2>
        <div class="activities-grid" style="margin-top: 2rem;">
            <div class="activity-item fade-in">
                <div class="activity-bullet"></div>
                <div>
                    <h4>Free Education Programs</h4>
                    <p>We run evening schools and bridge courses for out-of-school children.</p>
                </div>
            </div>
            <div class="activity-item fade-in">
                <div class="activity-bullet"></div>
                <div>
                    <h4>School Supplies Distribution</h4>
                    <p>Providing bags, books, uniforms, and stationery to every student.</p>
                </div>
            </div>
            <div class="activity-item fade-in">
                <div class="activity-bullet"></div>
                <div>
                    <h4>Digital Literacy</h4>
                    <p>Setting up computer labs in village centers to teach basic tech skills.</p>
                </div>
            </div>
            <div class="activity-item fade-in">
                <div class="activity-bullet"></div>
                <div>
                    <h4>Teacher Training</h4>
                    <p>Empowering local youth to become certified educators in their communities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: Our Impact (Stats) -->
    <section id="impact" class="impact-section">
        <h2 class="text-center">Our Impact So Far</h2>
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number" data-target="5000">0</span>
                <span class="stat-label">Children Educated</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="120">0</span>
                <span class="stat-label">Villages Covered</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="350">0</span>
                <span class="stat-label">Teachers Trained</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="50">0</span>
                <span class="stat-label">Learning Centers</span>
            </div>
        </div>
    </section>

    <!-- SECTION 7: Programs Timeline -->
    <section id="programs">
        <h2 class="text-center">Our Process</h2>
        <div class="timeline">
            <div class="timeline-container timeline-left fade-in">
                <div class="timeline-content">
                    <h4>Step 1: Enrollment</h4>
                    <p>Surveying villages to identify out-of-school children and enrolling them.</p>
                </div>
            </div>
            <div class="timeline-container timeline-right fade-in">
                <div class="timeline-content">
                    <h4>Step 2: Learning & Growth</h4>
                    <p>Regular classes, nutritional support, and holistic development.</p>
                </div>
            </div>
            <div class="timeline-container timeline-left fade-in">
                <div class="timeline-content">
                    <h4>Step 3: Skill Development</h4>
                    <p>Introducing vocational and digital skills alongside academics.</p>
                </div>
            </div>
            <div class="timeline-container timeline-right fade-in">
                <div class="timeline-content">
                    <h4>Step 4: Future Ready</h4>
                    <p>Career counseling and scholarship support for higher studies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: Success Stories -->
    <section id="stories" style="background-color: var(--white);">
        <h2 class="text-center">Stories of Change</h2>
        <div class="stories-grid text-center" style="margin-top: 2rem;">
            <div class="story-card fade-in">
                <div class="story-img-placeholder">Image: Child Studying</div>
                <div class="story-content">
                    <div class="story-name">Raju, Age 10</div>
                    <p>"I used to work in the fields. Now I go to school and want to be a doctor."</p>
                </div>
            </div>
            <div class="story-card fade-in">
                <div class="story-img-placeholder">Image: Girl with Books</div>
                <div class="story-content">
                    <div class="story-name">Anjali, Age 12</div>
                    <p>"The computer center changed my life. I can now type and learn online."</p>
                </div>
            </div>
            <div class="story-card fade-in">
                <div class="story-img-placeholder">Image: Group Class</div>
                <div class="story-content">
                    <div class="story-name">Village Gothra</div>
                    <p>"Our entire village now has 100% literacy among children under 14."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 9: How You Can Help -->
    <section id="how-to-help">
        <h2 class="text-center text-orange">Join Our Mission</h2>
        <div class="help-grid" style="margin-top: 2rem;">
            <div class="help-card fade-in">
                <span class="help-icon">❤</span>
                <h4>Donate</h4>
                <p>Sponsor a child's education for just ₹1000/month.</p>
                <button class="btn btn-primary" style="margin-top: 1rem;">Donate Now</button>
            </div>
            <div class="help-card fade-in">
                <span class="help-icon">🤝</span>
                <h4>Volunteer</h4>
                <p>Teach, mentor, or help organize events in villages.</p>
                <button class="btn btn-secondary" style="margin-top: 1rem;">Join Us</button>
            </div>
            <div class="help-card fade-in">
                <span class="help-icon">🏢</span>
                <h4>CSR Partner</h4>
                <p>Collaborate with us for meaningful corporate social responsibility.</p>
                <button class="btn btn-secondary" style="margin-top: 1rem;">Partner</button>
            </div>
        </div>
    </section>

    <!-- SECTION 10: Gallery -->
    <section id="gallery">
        <h2 class="text-center">Gallery</h2>
        <div class="gallery-grid" style="margin-top: 2rem;">
            <div class="gallery-item fade-in">
                <div class="gallery-overlay">Education Changes Lives</div>
            </div>
            <div class="gallery-item fade-in">
                <div class="gallery-overlay">Smiles of Hope</div>
            </div>
            <div class="gallery-item fade-in">
                <div class="gallery-overlay">Classroom in Action</div>
            </div>
            <div class="gallery-item fade-in">
                <div class="gallery-overlay">Digital Learning</div>
            </div>
            <div class="gallery-item fade-in">
                <div class="gallery-overlay">Empowered Teachers</div>
            </div>
            <div class="gallery-item fade-in">
                <div class="gallery-overlay">Community Support</div>
            </div>
        </div>
    </section>

    <!-- SECTION 11: FAQs -->
    <section id="faq">
        <h2 class="text-center">Frequently Asked Questions</h2>
        <div style="max-width: 800px; margin: 2rem auto;">
            <div class="faq-item fade-in">
                <div class="faq-title">
                    How is my donation used?
                    <span class="toggle-icon">▼</span>
                </div>
                <div class="faq-content">
                    Your donation directly funds school supplies, teacher salaries, and infrastructure maintenance for our rural centers.
                </div>
            </div>
            <div class="faq-item fade-in">
                <div class="faq-title">
                    Can I visit the centers?
                    <span class="toggle-icon">▼</span>
                </div>
                <div class="faq-content">
                    Yes! We encourage donors and volunteers to visit our centers and see the impact firsthand. Please contact us to schedule a visit.
                </div>
            </div>
            <div class="faq-item fade-in">
                <div class="faq-title">
                    Is donation tax-exempt?
                    <span class="toggle-icon">▼</span>
                </div>
                <div class="faq-content">
                    Yes, all donations to The Global Rise Foundation are eligible for tax exemption under 80G.
                </div>
            </div>
            <div class="faq-item fade-in">
                <div class="faq-title">
                    How do I volunteer?
                    <span class="toggle-icon">▼</span>
                </div>
                <div class="faq-content">
                    Simply click the 'Join Us' button above and fill out the form. Our team will get in touch with you.
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 12: Final Call to Action -->
    <div class="container-fluid cta-final">
        <h2>Together, Let’s Educate Every Child</h2>
        <p style="color: rgba(255,255,255,0.9); margin-bottom: 2rem; font-size: 1.2rem;">Be the change you want to see in the world.</p>
        <button class="btn btn-secondary" style="background: white; color: var(--primary-green); padding: 15px 40px; font-size: 1.2rem;">Donate & Support</button>
    </div>

    <?php include(BASE_URL . 'includes/footer.php'); ?>

    <script>
        // Scroll Animation Logic
        document.addEventListener('DOMContentLoaded', function() {
            const faders = document.querySelectorAll('.fade-in');
            
            const appearOptions = {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            };

            const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) {
                        return;
                    } else {
                        entry.target.classList.add('visible');
                        appearOnScroll.unobserve(entry.target);
                    }
                });
            }, appearOptions);

            faders.forEach(fader => {
                appearOnScroll.observe(fader);
            });

            // Number Counter Animation
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200; // The lower the slower

            const countUp = (counter) => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(() => countUp(counter), 20);
                } else {
                    counter.innerText = target;
                }
            };

            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        countUp(counter);
                        observer.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });

            // FAQ Accordion
            const faqTitles = document.querySelectorAll('.faq-title');
            
            faqTitles.forEach(title => {
                title.addEventListener('click', () => {
                   const content = title.nextElementSibling;
                   title.classList.toggle('active');
                   if (content.style.display === "block") {
                       content.style.display = "none";
                   } else {
                       content.style.display = "block";
                   }
                });
            });
        });
    </script>
</body>
</html>
