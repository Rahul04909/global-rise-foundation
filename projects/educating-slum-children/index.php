<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educating Slum Children | The Global Rise Foundation</title>
    <meta name="description" content="Bringing the light of education to India's urban slums. Join us in breaking the cycle of poverty through knowledge.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Premium Design Styles for Slum Education -->
    <style>
        :root {
            --slum-primary: #FFB703; /* Hopeful Yellow/Orange */
            --slum-secondary: #023047; /* Deep Blue for contrast */
            --slum-accent: #FB8500; /* Vibrant Orange */
            --slum-soft: #8ECAE6; /* Light Blue */
            --white: #ffffff;
            --text-gray: #555;
        }

        /* Hero Styling */
        .slum-hero {
            height: 85vh;
            background: linear-gradient(rgba(2, 48, 71, 0.7), rgba(2, 48, 71, 0.5)), url('<?php echo BASE_URL; ?>assets/pages/be5b3a2d-1438-4a4f-831d-11bb4f07829f-wm.png');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
        }
        .slum-hero-content {
            max-width: 650px;
        }
        .slum-hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 25px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }
        .slum-hero h1 span {
            color: var(--slum-primary);
        }
        .slum-hero p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            opacity: 0.9;
            font-weight: 400;
        }

        .section-padding { padding: 120px 0; }
        .bg-light { background-color: #f9fbff; }
        
        .section-header {
            text-align: center;
            margin-bottom: 70px;
        }
        .section-header h2 {
            font-size: 2.8rem;
            color: var(--slum-secondary);
            margin-bottom: 20px;
            font-weight: 800;
        }
        .section-header p {
            max-width: 700px;
            margin: 0 auto;
            color: var(--text-gray);
            font-size: 1.1rem;
            line-height: 1.7;
        }

        /* Mission Cards */
        .mission-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        .mission-card {
            background: white;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(2, 48, 71, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-top: 6px solid var(--slum-primary);
        }
        .mission-card:hover {
            transform: translateY(-15px);
        }
        .mission-icon {
            font-size: 3rem;
            color: var(--slum-accent);
            margin-bottom: 25px;
        }
        .mission-card h3 {
            font-size: 1.5rem;
            color: var(--slum-secondary);
            margin-bottom: 15px;
            font-weight: 700;
        }

        /* Problem Section */
        .split-section {
            display: flex;
            align-items: center;
            gap: 80px;
            flex-wrap: wrap;
        }
        .split-image {
            flex: 1;
            min-width: 400px;
            position: relative;
        }
        .split-image img {
            width: 100%;
            border-radius: 30px;
            box-shadow: 20px 20px 0 var(--slum-soft);
        }
        .split-content {
            flex: 1;
            min-width: 400px;
        }
        .accent-tag {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(255, 183, 3, 0.2);
            color: var(--slum-accent);
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        /* Pillars of Change */
        .pillar-row {
            display: flex;
            margin-bottom: 60px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .pillar-info { padding: 60px; flex: 1.5; }
        .pillar-pic { flex: 1; background-size: cover; background-position: center; }

        /* Stats Section */
        .stats-dark {
            background: var(--slum-secondary);
            color: white;
            padding: 80px 0;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }
        .stat-box h4 { font-size: 3.5rem; color: var(--slum-primary); margin-bottom: 10px; font-weight: 800; }
        .stat-box p { font-size: 1.1rem; opacity: 0.8; text-transform: uppercase; letter-spacing: 1px; }

        /* Story Quote */
        .quote-section {
            background: var(--slum-soft);
            padding: 100px 0;
            text-align: center;
        }
        .quote-box {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }
        .quote-box i {
            font-size: 4rem;
            color: rgba(2, 48, 71, 0.1);
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
        }
        .quote-text {
            font-size: 2.22rem;
            color: var(--slum-secondary);
            font-style: italic;
            font-weight: 600;
            line-height: 1.4;
            margin-bottom: 30px;
        }
        .quote-author {
            font-weight: 700;
            color: var(--slum-accent);
            font-size: 1.2rem;
        }

        /* Help Banner */
        .cta-banner {
            background: linear-gradient(135deg, var(--slum-accent), var(--slum-primary));
            padding: 80px 0;
            text-align: center;
            color: white;
        }
        .cta-banner h2 { font-size: 3rem; margin-bottom: 30px; font-weight: 800; }
        .btn-large {
            padding: 20px 50px;
            font-size: 1.2rem;
            background: var(--slum-secondary);
            color: white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s ease;
        }
        .btn-large:hover { transform: scale(1.05); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }

        @media (max-width: 992px) {
            .slum-hero h1 { font-size: 3rem; }
            .split-section { gap: 40px; }
            .split-image { min-width: 100%; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="slum-hero">
        <div class="container" style="display: flex;">
            <div class="slum-hero-content">
                <h1>Beyond the <span>Shadows</span> of Poverty</h1>
                <p>Ensuring every child in India's urban slums has access to quality education, nutritional care, and a future worth dreaming for.</p>
                <div style="display: flex; gap: 20px;">
                    <a href="#donate" class="btn-donate" style="padding: 15px 35px; font-size: 1.1rem;">Sponsor a Child</a>
                    <a href="#our-work" class="btn-donate" style="background:transparent; border: 2px solid white; color:white; padding:15px 35px; font-size: 1.1rem;">Explore Our Work</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. THE VISION -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <span class="accent-tag">Our Vision</span>
                <h2>Breaking Cycles, Building Futures</h2>
                <p>We don't just teach; we transform. Our mission is to provide an ecosystem where slum-dwelling children can transition from survival to success.</p>
            </div>
            
            <div class="mission-grid">
                <div class="mission-card">
                    <div class="mission-icon"><i class="fas fa-book-reader"></i></div>
                    <h3>Quality Education</h3>
                    <p>Moving beyond basic literacy to skill-based and conceptual learning designed for modern opportunities.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon"><i class="fas fa-apple-whole"></i></div>
                    <h3>Nutritional Support</h3>
                    <p>A hungry child cannot learn. We provide balanced mid-day meals to ensure physical and mental growth.</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Safe Learning Spaces</h3>
                    <p>Establishing vibrant community centers within slums that offer a sanctuary for focused education.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. THE REALITY (Problem Section) -->
    <section class="section-padding bg-light">
        <div class="container" style="display: block;">
            <div class="split-section">
                <div class="split-image">
                    <img src="<?php echo BASE_URL; ?>assets/pages/slum-education.webp" alt="Slum Education Reality">
                </div>
                <div class="split-content">
                    <span class="accent-tag">The Challenge</span>
                    <h2 style="font-size: 2.5rem; color: var(--slum-secondary); margin-bottom: 25px;">Why Slum Education Matters?</h2>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 25px;">
                        Millions of children living in India's urban slums are trapped in a cycle of generational poverty. Lack of resources, forced child labor, and inadequate nutrition often prevent them from ever stepping into a classroom.
                    </p>
                    <ul style="list-style: none; color: #444;">
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-times-circle" style="color: var(--slum-accent);"></i> Over 40% of slum children drop out by age 12.
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-times-circle" style="color: var(--slum-accent);"></i> High prevalence of malnutrition affects cognitive development.
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-times-circle" style="color: var(--slum-accent);"></i> Lack of safe playgrounds or study environments.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. KEY PILLARS (Our Approach) -->
    <section id="our-work" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>The Pillars of Our Impact</h2>
                <p>Our holistic approach addresses every barrier that keeps a child away from their potential.</p>
            </div>

            <div class="pillar-row">
                <div class="pillar-info">
                    <span class="accent-tag" style="background: #eef2f7; color: var(--slum-secondary);">Pillar 01</span>
                    <h3 style="font-size: 2rem; margin: 15px 0; color: var(--slum-secondary);">Remedial Learning Centers</h3>
                    <p style="color: #666; line-height: 1.8;">
                        We establish "Zindagi Centers" right in the heart of slum communities. These centers act as bridge-schools, helping children catch up to their age-appropriate grade levels and preparing them for mainstream formal education.
                    </p>
                </div>
                <div class="pillar-pic" style="background-image: url('<?php echo BASE_URL; ?>assets/pages/asap.png');"></div>
            </div>

            <div class="pillar-row" style="flex-direction: row-reverse;">
                <div class="pillar-info">
                    <span class="accent-tag" style="background: #eef2f7; color: var(--slum-secondary);">Pillar 02</span>
                    <h3 style="font-size: 2rem; margin: 15px 0; color: var(--slum-secondary);">Digital Literacy & STEM</h3>
                    <p style="color: #666; line-height: 1.8;">
                        Breaking the digital divide. We equip our centers with tablets and basic computer labs, introducing children to coding, digital art, and world-wide web resources to broaden their horizons.
                    </p>
                </div>
                <div class="pillar-pic" style="background-image: url('<?php echo BASE_URL; ?>assets/pages/asap-2.png');"></div>
            </div>
        </div>
    </section>

    <!-- 5. STATS SUMMARY -->
    <section class="stats-dark">
        <div class="container" style="display: block;">
            <div class="stats-grid">
                <div class="stat-box">
                    <h4>150+</h4>
                    <p>Learning Centers</p>
                </div>
                <div class="stat-box">
                    <h4>25k+</h4>
                    <p>Students Enrolled</p>
                </div>
                <div class="stat-box">
                    <h4>92%</h4>
                    <p>Attendance Rate</p>
                </div>
                <div class="stat-box">
                    <h4>10k+</h4>
                    <p>Mainstreamed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. HOLISTIC DEVELOPMENT -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="split-section">
                <div class="split-content">
                    <h2 style="font-size: 2.5rem; color: var(--slum-secondary); margin-bottom: 25px;">Developing the Whole Child</h2>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 30px;">
                        Education is more than books. We focus on the overall social and emotional well-being of our students through:
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="padding: 20px; border-left: 4px solid var(--slum-primary); background: #fdfdfd;">
                            <h4 style="margin-bottom: 10px;">Art & Expression</h4>
                            <p style="font-size: 0.9rem; color: #777;">Using creative therapy to process urban trauma.</p>
                        </div>
                        <div style="padding: 20px; border-left: 4px solid var(--slum-soft); background: #fdfdfd;">
                            <h4 style="margin-bottom: 10px;">Health & Hygiene</h4>
                            <p style="font-size: 0.9rem; color: #777;">Regular checkups and wash-training modules.</p>
                        </div>
                        <div style="padding: 20px; border-left: 4px solid var(--slum-accent); background: #fdfdfd;">
                            <h4 style="margin-bottom: 10px;">Soft Skills</h4>
                            <p style="font-size: 0.9rem; color: #777;">Communication and confidence building workshops.</p>
                        </div>
                        <div style="padding: 20px; border-left: 4px solid var(--slum-secondary); background: #fdfdfd;">
                            <h4 style="margin-bottom: 10px;">Vocational Guidance</h4>
                            <p style="font-size: 0.9rem; color: #777;">Mentoring for career paths and higher study.</p>
                        </div>
                    </div>
                </div>
                <div class="split-image" style="text-align: right;">
                    <img src="<?php echo BASE_URL; ?>assets/pages/asap-1.png" alt="Child Expression" style="box-shadow: -20px 20px 0 var(--slum-primary);">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. SUCCESS STORY (Quote) -->
    <section class="quote-section">
        <div class="container" style="display: block;">
            <div class="quote-box">
                <i class="fas fa-quote-left"></i>
                <p class="quote-text">
                    "I used to pick waste to help my family. Now, I pick up my backpack every morning. I want to become a teacher and help more girls from my community see the world beyond these narrow lanes."
                </p>
                <p class="quote-author">— Muskaan, 12 years old (Student at Lajpat Nagar Center)</p>
            </div>
        </div>
    </section>

    <!-- 8. HOW TO HELP -->
    <section id="donate" class="section-padding bg-light">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Join Our Circle of Hope</h2>
                <p>Your small contribution can provide the light of knowledge to a child waiting for a chance.</p>
            </div>

            <div class="mission-grid">
                <div class="mission-card" style="text-align: center;">
                    <h3>Sponsor a Child</h3>
                    <p>Just ₹1000/month covers education, meals, and medical support for one child.</p>
                    <a href="#" class="btn-donate" style="display: block; width: 100%; margin-top: 20px;">Donate Now</a>
                </div>
                <div class="mission-card" style="text-align: center; border-top-color: var(--slum-soft);">
                    <h3>Setup a Center</h3>
                    <p>Adopt an entire community center and impact 50+ children's lives directly.</p>
                    <a href="#" class="btn-donate" style="display: block; width: 100%; margin-top: 20px;">Corporate Connect</a>
                </div>
                <div class="mission-card" style="text-align: center; border-top-color: var(--slum-secondary);">
                    <h3>Volunteer</h3>
                    <p>Give your time. Teach a skill, mentor a student, or help us manage our centers.</p>
                    <a href="#" class="btn-donate" style="display: block; width: 100%; margin-top: 20px;">Sign Up</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FINAL CTA -->
    <section class="cta-banner">
        <div class="container" style="display: block;">
            <h2>Every Child Deserves a Choice.</h2>
            <p style="font-size: 1.4rem; margin-bottom: 40px; opacity: 0.9;">Be the reason a child starts learning today.</p>
            <a href="#" class="btn-large">Support Slum Education</a>
        </div>
    </section>

    <?php include(BASE_URL . 'includes/footer.php'); ?>

</body>
</html>
