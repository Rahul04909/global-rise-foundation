<?php 
define('BASE_URL', '../../'); // Adjust path for subdirectory
include '../../includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rural Children Education - Global Rise Foundation</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/rural-education.css">
</head>
<body class="rural-edu-page">

    <!-- 1. Hero Section -->
    <section class="hero-section-inner">
        <div class="hero-content-inner">
            <h1>Lighting the Lamp of Knowledge in Rural India</h1>
            <p>Millions of children in rural India dream of a better future. Education is the bridge to that dream. Join us in our mission to reach every village, every child.</p>
            <a href="#donate" class="btn-hero-cta">Support a Child Today</a>
        </div>
    </section>

    <!-- 2. Introduction -->
    <section class="intro-section">
        <div class="container">
            <div class="intro-content">
                <div class="intro-text">
                    <h2>Bridging the Urban-Rural Divide</h2>
                    <p>In rural India, education faces numerous challenges: lack of infrastructure, qualified teachers, and learning resources. At Global Rise Foundation, we believe that geography should not dictate destiny.</p>
                    <p>Our Rural Education Initiative focuses on holistic development—transforming not just schools, but entire communities through the power of literacy and learning.</p>
                </div>
                <div class="intro-image">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/Girl-Child-Education.jpg" alt="Rural Education Classroom">
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Key Statistics -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-box">
                    <h3>70%</h3>
                    <p>of India lives in rural areas</p>
                </div>
                <div class="stat-box">
                    <h3>50%</h3>
                    <p>Grade 5 students can't read Grade 2 text</p>
                </div>
                <div class="stat-box">
                    <h3>1000+</h3>
                    <p>Villages Reached</p>
                </div>
                <div class="stat-box">
                    <h3>50k+</h3>
                    <p>Children Educated</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. The Challenge -->
    <section class="challenges-section">
        <div class="container">
            <h2 class="section-title">Barriers to Education</h2>
            <div class="challenges-grid">
                <div class="challenge-card">
                    <i class="fas fa-school challenge-icon"></i>
                    <h4>Infrastructure Gap</h4>
                    <p>Dilapidated classrooms and lack of sanitation facilities keep children, especially girls, away from school.</p>
                </div>
                <div class="challenge-card">
                    <i class="fas fa-laptop-code challenge-icon"></i>
                    <h4>Digital Divide</h4>
                    <p>Limited access to technology and internet creates a significant learning gap in the digital age.</p>
                </div>
                <div class="challenge-card">
                    <i class="fas fa-users-slash challenge-icon"></i>
                    <h4>Social Barriers</h4>
                    <p>Poverty and social norms often force children into labor or early marriage instead of classrooms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Our Approach (Timeline/Steps) -->
    <section class="approach-section">
        <div class="container">
            <h2 class="section-title">How We Make a Difference</h2>
            <div class="steps-timeline">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <h4>Infrastructure Upgrade</h4>
                    <p>Building safe, conducive learning environments.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">2</div>
                    <h4>Teacher Training</h4>
                    <p>Empowering educators with modern skills.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">3</div>
                    <h4>Digital Literacy</h4>
                    <p>Introducing smart classes and tablets.</p>
                </div>
                <div class="step-item">
                    <div class="step-number">4</div>
                    <h4>Community Engagement</h4>
                    <p>Involving parents in the learning journey.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Success Stories (Refined) -->
    <section class="stories-section">
        <div class="container">
            <div class="stories-layout">
                <div class="stories-sidebar">
                    <h2 class="section-title-left">Stories of Change</h2>
                    <p class="stories-intro">Real people, real impact. See how education is transforming lives in rural India one child at a time.</p>
                    <div class="stories-deco-line"></div>
                </div>
                <div class="stories-list">
                    <!-- Story 1 -->
                    <div class="story-card-refined">
                        <div class="story-img-refined">
                            <img src="<?php echo BASE_URL; ?>assets/frontend/women-empowerment.jpg" alt="Riya's Story">
                        </div>
                        <div class="story-content-refined">
                            <h3>Riya's Journey to Medical School</h3>
                            <p>"Coming from a small village where girls rarely study past 8th grade, Global Rise Foundation gave me the wings to dream. Today, I am preparing for my medical entrance exams because of the scholarship and mentorship I received."</p>
                            <p class="story-author">- Riya, 17, Bihar</p>
                        </div>
                    </div>

                    <!-- Story 2 -->
                    <div class="story-card-refined">
                        <div class="story-img-refined">
                            <img src="<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg" alt="Community Story">
                        </div>
                        <div class="story-content-refined">
                            <h3>A Village Transformed</h3>
                            <p>"Our village school was in ruins. The Foundation not only rebuilt the school but trained our youth. Now, every child in our village attends school regularly."</p>
                            <p class="story-author">- Village Sarpanch, Rajasthan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Gallery (Refined) -->
    <section class="page-gallery">
        <div class="container">
            <h2 class="section-title">Gallery</h2>
            <div class="gallery-grid-polished">
                <div class="gallery-item-polished">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/Girl-Child-Education.jpg" alt="Classroom">
                    <div class="gallery-overlay"><i class="fas fa-plus"></i></div>
                </div>
                <div class="gallery-item-polished">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/persons-disabilites.jpg" alt="Students">
                    <div class="gallery-overlay"><i class="fas fa-plus"></i></div>
                </div>
                <div class="gallery-item-polished">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/women-empowerment.jpg" alt="Community">
                    <div class="gallery-overlay"><i class="fas fa-plus"></i></div>
                </div>
                <div class="gallery-item-polished">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg" alt="Training">
                    <div class="gallery-overlay"><i class="fas fa-plus"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Volunteer Call to Action -->
    <section class="cta-section">
        <div class="container cta-content">
            <h2>Be the Change You Wish to See</h2>
            <p>Your contribution can rewrite the destiny of a child. Whether you donate, volunteer, or advocate, you are building a stronger nation.</p>
            <a href="#" class="btn-hero-cta">Donate Now</a>
            <br><br>
            <a href="#" style="color: #fff; text-decoration: underline;">Apply to Volunteer</a>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>

</body>
</html>
