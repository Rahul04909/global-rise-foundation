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
    <meta name="description" content="Nurturing the future of rural India. Join us in providing quality education, nutritional care, and modern learning tools to children in remote villages.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Professional & Vibrant Design for Rural Education -->
    <style>
        :root {
            --rural-primary: #006400; /* Dark Green - Nature/Growth */
            --rural-secondary: #FFD700; /* Gold/Yellow - Sunshine/Hope */
            --rural-accent: #8B4513; /* Earthy Brown */
            --rural-light: #F0FFF0; /* Honeydew - Freshness */
            --rural-sky: #87CEEB; /* Sky Blue */
            --white: #ffffff;
            --text-dark: #2F4F4F;
        }

        /* Hero Styling */
        .rural-hero {
            height: 85vh;
            background: linear-gradient(rgba(0, 100, 0, 0.6), rgba(0, 100, 0, 0.3)), url('<?php echo BASE_URL; ?>assets/frontend/rural-children-education.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            text-align: left;
        }
        .hero-vibrant-box {
            max-width: 800px;
            padding: 50px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            border-left: 10px solid var(--rural-secondary);
            border-radius: 0 40px 40px 0;
        }
        .rural-hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1;
            margin-bottom: 25px;
            text-shadow: 2px 2px 15px rgba(0,0,0,0.2);
        }
        .rural-hero h1 span { color: var(--rural-secondary); }
        .rural-hero p {
            font-size: 1.4rem;
            margin-bottom: 40px;
            opacity: 0.95;
            font-weight: 400;
        }

        .section-padding { padding: 120px 0; }
        .bg-fresh { background-color: var(--rural-light); }
        
        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }
        .section-header h2 {
            font-size: 3.5rem;
            color: var(--rural-primary);
            font-weight: 800;
            margin-bottom: 20px;
        }
        .header-decor {
            width: 100px;
            height: 6px;
            background: var(--rural-secondary);
            margin: 0 auto;
            border-radius: 10px;
        }

        /* Pillars of Growth */
        .pillar-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }
        .pillar-card {
            background: white;
            padding: 60px 40px;
            border-radius: 30px;
            box-shadow: 0 10px 40px rgba(0, 100, 0, 0.05);
            transition: all 0.4s ease;
            text-align: center;
            border-bottom: 8px solid transparent;
        }
        .pillar-card:hover {
            transform: translateY(-15px);
            border-bottom-color: var(--rural-secondary);
            box-shadow: 0 20px 60px rgba(0, 100, 0, 0.1);
        }
        .pillar-icon {
            font-size: 3.5rem;
            color: var(--rural-primary);
            margin-bottom: 30px;
            display: block;
        }
        .pillar-card h3 {
            font-size: 1.8rem;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        /* Infographic Style Section */
        .info-split {
            display: flex;
            align-items: center;
            gap: 80px;
            margin-bottom: 120px;
        }
        .info-text { flex: 1.2; }
        .info-visual { flex: 1; position: relative; }
        .info-visual img {
            width: 100%;
            border-radius: 100px 20px 100px 20px;
            box-shadow: 25px 25px 0 rgba(255, 215, 0, 0.3);
        }

        /* Stats Section */
        .stats-natural {
            background: linear-gradient(135deg, var(--rural-primary), #004d00);
            color: white;
            padding: 100px 0;
            border-radius: 0 150px 0 150px;
        }
        .stats-container {
            display: flex;
            justify-content: space-around;
            text-align: center;
            flex-wrap: wrap;
            gap: 50px;
        }
        .stat-circle h4 { font-size: 4rem; color: var(--rural-secondary); margin-bottom: 10px; font-weight: 900; }
        .stat-circle p { font-size: 1.1rem; text-transform: uppercase; letter-spacing: 2px; opacity: 0.8; }

        /* Success spotlight */
        .spotlight-section {
            background: var(--white);
            padding: 120px 0;
        }
        .spotlight-card {
            display: flex;
            background: var(--rural-light);
            border-radius: 40px;
            overflow: hidden;
            align-items: center;
            box-shadow: 0 30px 60px rgba(0,0,0,0.05);
        }
        .spotlight-img { flex: 1; min-height: 500px; background-size: cover; background-position: center; }
        .spotlight-info { flex: 1.5; padding: 80px; }
        .spotlight-info h3 { font-size: 2.5rem; color: var(--rural-primary); margin-bottom: 25px; }

        /* Buttons */
        .btn-rural {
            background: var(--rural-primary);
            color: white;
            padding: 18px 45px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 800;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(0, 100, 0, 0.2);
        }
        .btn-rural:hover { background: var(--rural-secondary); color: var(--rural-primary); transform: translateY(-5px); }

        /* Features List */
        .feature-list { list-style: none; margin-top: 30px; }
        .feature-list li { display: flex; align-items: center; gap: 15px; margin-bottom: 15px; font-size: 1.1rem; font-weight: 500; }
        .feature-list i { color: var(--rural-secondary); font-size: 1.4rem; }

        @media (max-width: 992px) {
            .rural-hero h1 { font-size: 3rem; }
            .info-split { flex-direction: column; gap: 50px; }
            .spotlight-card { flex-direction: column; }
            .spotlight-img { min-height: 350px; width: 100%; }
            .spotlight-info { padding: 40px; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="rural-hero">
        <div class="container" style="display: block;">
            <div class="hero-vibrant-box">
                <h1>Roots of <span>Knowledge</span>, Fruits of the Future</h1>
                <p>Bringing high-quality, modern education to the doorstep of every rural child in India. Join our mission to bridge the urban-rural learning divide.</p>
                <div style="display: flex; gap: 20px;">
                    <a href="#sponsor" class="btn-rural">Sponsor a Village School</a>
                    <a href="#our-work" class="btn-rural" style="background:transparent; border: 2px solid white;">Discover Our Impact</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. THE SEED OF CHANGE (Vision) -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>The Seed of <span>Change</span></h2>
                <div class="header-decor"></div>
                <p style="margin-top: 30px; font-size: 1.3rem; color: #555; max-width: 850px; margin: 30px auto 0;">
                    Education in rural India is not just about literacy; it's about empowerment. We work to transform village schools into vibrant centers of conceptual learning and holistic growth.
                </p>
            </div>
        </div>
    </section>

    <!-- 3. THE RURAL REALITY (Problem Gap) -->
    <section class="section-padding bg-fresh" style="border-radius: 0 0 150px 0;">
        <div class="container" style="display: block;">
            <div class="info-split">
                <div class="info-text">
                    <h2 style="font-size: 3rem; color: var(--rural-primary); margin-bottom: 30px;">Why Rural Education?</h2>
                    <p style="line-height: 1.8; color: #444; margin-bottom: 30px;">
                        Despite being the heartbeat of India, rural areas face severe educational challenges. From long commutes to lack of qualified teachers and digital tools, rural children often start their lives with a significant disadvantage.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-warning"></i> 70% of rural schools still lack basic infrastructure.</li>
                        <li><i class="fas fa-warning"></i> High dropout rates after primary schooling due to distance.</li>
                        <li><i class="fas fa-warning"></i> Limited exposure to STEM and digital learning tools.</li>
                    </ul>
                </div>
                <div class="info-visual">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/rural-about.jpg" alt="Rural Schooling Reality">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE EDUCATION PILLARS -->
    <section id="our-work" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Pillars of <span>Empowerment</span></h2>
            </div>
            
            <div class="pillar-grid">
                <div class="pillar-card">
                    <i class="fas fa-school-flag pillar-icon"></i>
                    <h3>Smart Village Schools</h3>
                    <p>Upgrading local infrastructure with solar power, clean water, and vibrant classrooms to inspire learning.</p>
                </div>
                <div class="pillar-card">
                    <i class="fas fa-microscope pillar-icon"></i>
                    <h3>Mobile Science Labs</h3>
                    <p>Bringing practical science and technology experiments to remote villages via fully-equipped mobile vans.</p>
                </div>
                <div class="pillar-card">
                    <i class="fas fa-chalkboard-user pillar-icon"></i>
                    <h3>Teacher Training</h3>
                    <p>Empowering local educators with modern pedagogical tools and child psychology workshops.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. NUTRITIONAL WELLNESS -->
    <section class="section-padding bg-fresh" style="border-radius: 150px 0 150px 0;">
        <div class="container" style="display: block;">
            <div class="info-split" style="flex-direction: row-reverse;">
                <div class="info-text">
                    <h2 style="font-size: 2.8rem; color: var(--rural-primary); margin-bottom: 25px;">Nourishing Young Minds</h2>
                    <p style="line-height: 1.8; color: #555;">
                        A hungry child cannot learn. Our nutritional program ensures that every student in our partner schools receives a balanced, high-protein meal every day. We also monitor cognitive development through regular health checkups.
                    </p>
                    <ul class="feature-list">
                        <li><i class="fas fa-apple-whole"></i> Fortified Mid-day Meals</li>
                        <li><i class="fas fa-hospital-user"></i> Regular Pediatric Screening</li>
                        <li><i class="fas fa-droplet"></i> Access to Pure Drinking Water</li>
                    </ul>
                </div>
                <div class="info-visual">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/Girl-Child-Education.jpg" alt="Nutritional Care">
                </div>
            </div>
        </div>
    </section>

    <!-- 6. DIGITAL OUTREACH -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="info-split">
                <div class="info-text">
                    <h2 style="font-size: 2.8rem; color: var(--rural-primary); margin-bottom: 25px;">The Digital Bridge</h2>
                    <p style="line-height: 1.8; color: #555;">
                        We are eliminating the digital divide by setting up "e-Learning Hubs" in community centers. These hubs provide high-speed internet and tablets, enabling rural students to access world-class educational resources and online courses.
                    </p>
                    <a href="#" class="btn-rural" style="margin-top: 20px;">Support a Digital Hub</a>
                </div>
                <div class="info-visual">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg" alt="Digital Hub">
                </div>
            </div>
        </div>
    </section>

    <!-- 7. IMPACT STATS -->
    <section class="stats-natural">
        <div class="container" style="display: block;">
            <div class="stats-container">
                <div class="stat-circle">
                    <h4>200+</h4>
                    <p>Partner Schools</p>
                </div>
                <div class="stat-circle">
                    <h4>45k+</h4>
                    <p>Active Students</p>
                </div>
                <div class="stat-circle">
                    <h4>85%</h4>
                    <p>Pass Percentage</p>
                </div>
                <div class="stat-circle">
                    <h4>1.2M</h4>
                    <p>Meals Served</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. COMMUNITY PARTICIPATION (SMC) -->
    <section class="section-padding bg-fresh">
        <div class="container" style="display: block; text-align: center;">
             <h2 style="color: var(--rural-primary); margin-bottom: 30px;">Built by the <span>Community</span></h2>
             <p style="max-width: 800px; margin: 0 auto 50px; color: #555; line-height: 1.8;">We believe in local ownership. Our School Management Committees (SMCs) consist of village elders and parents, ensuring the sustainability and transparency of our educational programs.</p>
             <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
                <div style="background: white; padding: 40px; border-radius: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                    <i class="fas fa-handshake-angle" style="font-size: 3rem; color: var(--rural-secondary); margin-bottom: 20px;"></i>
                    <h4>Parent Empowerment</h4>
                    <p>Training parents to monitor school quality and student progress.</p>
                </div>
                <div style="background: white; padding: 40px; border-radius: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                    <i class="fas fa-city" style="font-size: 3rem; color: var(--rural-secondary); margin-bottom: 20px;"></i>
                    <h4>Village Ownership</h4>
                    <p>Villagers contributing space and labor for school infrastructure upgrades.</p>
                </div>
             </div>
        </div>
    </section>

    <!-- 9. STORY OF HOPE -->
    <section class="spotlight-section">
        <div class="container" style="display: block;">
            <div class="spotlight-card">
                <div class="spotlight-img" style="background-image: url('<?php echo BASE_URL; ?>assets/frontend/rural-children-education.jpg');"></div>
                <div class="spotlight-info">
                    <span style="color: var(--rural-primary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px;">Success Story</span>
                    <h3>Arjun's Flight to Science</h3>
                    <p style="font-style: italic; font-size: 1.2rem; color: #444; line-height: 1.7; margin: 25px 0;">
                        "My father is a farmer, and I thought I would be one too. But when the Mobile Science Lab visited my village, I saw the stars through a telescope for the first time. Today, I am studying to become an Astrophysicist."
                    </p>
                    <p style="font-weight: 800; color: var(--rural-primary);">— Arjun, Alumni of Global Rise partner school</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. VOCATIONAL INTEGRATION -->
    <section class="section-padding">
        <div class="container" style="display: block;">
             <div class="info-split" style="flex-direction: row-reverse;">
                <div class="info-text">
                    <h2 style="font-size: 2.8rem; color: var(--rural-primary); margin-bottom: 25px;">Beyond Academics</h2>
                    <p style="line-height: 1.8; color: #555;">
                        We integrate basic vocational skills like organic farming techniques, sustainable carpentry, and digital basics into the curriculum to ensure that every student leaves school with practical skills for their local economy.
                    </p>
                    <a href="#" class="btn-rural" style="margin-top: 20px;">Learn More</a>
                </div>
                <div class="info-visual">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/animal-welfare.jpg" alt="Vocational Skills">
                </div>
             </div>
        </div>
    </section>

    <!-- 11. SUPPORT TIERS -->
    <section id="sponsor" class="section-padding bg-fresh">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Plant the Seeds of <span>Success</span></h2>
                <p>Choose your impact level and help a rural child dream big.</p>
            </div>
            
            <div class="we-grid">
                <div class="pillar-card">
                    <h4>Student Kit</h4>
                    <p>Provides textbooks, uniforms, and stationary for one rural student for a year.</p>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--rural-primary); margin: 30px 0;">₹3,500</div>
                    <a href="#" class="btn-rural" style="width: 100%;">Sponsor Student</a>
                </div>
                <div class="pillar-card" style="border-bottom-color: var(--rural-secondary); background: #fffcf0;">
                    <h4>Digital Lab Seat</h4>
                    <p>Sponsor a dedicated tablet and 1 year of internet access for a student.</p>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--rural-primary); margin: 30px 0;">₹8,500</div>
                    <a href="#" class="btn-rural" style="width: 100%;">Provide Access</a>
                </div>
                <div class="pillar-card">
                    <h4>Adopt a Classroom</h4>
                    <p>Help us upgrade a village classroom with solar power and modern furniture.</p>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--rural-primary); margin: 30px 0;">₹25,000</div>
                    <a href="#" class="btn-rural" style="width: 100%;">Upgrade Class</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. FINAL CALL TO ACTION -->
    <section style="background: var(--rural-primary); color: white; padding: 100px 0; text-align: center;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 30px;">Ignite the <span>Rural Spark</span>.</h2>
            <p style="font-size: 1.4rem; margin-bottom: 50px; opacity: 0.9;">Be the reason a village child steps into a modern classroom today.</p>
            <a href="#" class="btn-rural" style="background: var(--rural-secondary); color: var(--rural-primary); font-size: 1.3rem;">Get Involved Today</a>
        </div>
    </section>

    <?php include(BASE_URL . 'includes/footer.php'); ?>

    <!-- Smooth Scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
