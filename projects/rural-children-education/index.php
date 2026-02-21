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
    
    <!-- Unique Professional Design for Rural Education (Mirrors Disability Pattern) -->
    <style>
        :root {
            --rural-primary: #1B4332; /* Deep Jungle Green */
            --rural-secondary: #D8F3DC; /* Forest Mint */
            --rural-gold: #FFB703; /* Saffron Gold Accent */
            --rural-dark: #081C15;
            --rural-light: #F7FFF7;
            --white: #ffffff;
        }

        /* Hero Section */
        .rural-hero {
            height: 90vh;
            background: linear-gradient(rgba(27, 67, 50, 0.85), rgba(27, 67, 50, 0.4)), url('<?php echo BASE_URL; ?>assets/frontend/rural-children-education.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            clip-path: ellipse(150% 100% at 50% 0%);
        }
        .rural-hero h1 {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 25px;
            max-width: 900px;
            line-height: 1.1;
        }
        .rural-hero h1 span { color: var(--rural-gold); }
        .rural-hero p {
            font-size: 1.4rem;
            max-width: 650px;
            margin-bottom: 40px;
            line-height: 1.6;
            font-weight: 300;
            opacity: 0.9;
        }

        .section-padding { padding: 120px 0; }
        .section-header { margin-bottom: 80px; }
        .section-header h2 {
            font-size: 3.2rem;
            color: var(--rural-dark);
            margin-bottom: 20px;
            font-weight: 800;
        }
        .section-header h2 span { color: var(--rural-primary); }
        .section-header .underline {
            width: 100px;
            height: 6px;
            background: var(--rural-gold);
            display: block;
            border-radius: 10px;
        }

        /* Pillars Grid */
        .pillar-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }
        .pillar-card {
            background: var(--white);
            padding: 60px 45px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            border: 1px solid #f0f0f0;
        }
        .pillar-card:hover {
            box-shadow: 0 25px 60px rgba(27, 67, 50, 0.12);
            transform: translateY(-10px);
        }
        .pillar-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 6px; height: 0;
            background: var(--rural-primary);
            transition: height 0.4s ease;
        }
        .pillar-card:hover::before { height: 100%; }
        .pillar-icon {
            font-size: 3.5rem;
            color: var(--rural-primary);
            margin-bottom: 30px;
            display: block;
        }
        .pillar-card h3 {
            font-size: 1.8rem;
            color: var(--rural-dark);
            margin-bottom: 20px;
            font-weight: 700;
        }

        /* Split Info Section */
        .info-split {
            display: flex;
            align-items: center;
            gap: 120px;
            margin-bottom: 150px;
        }
        .info-content { flex: 1.2; }
        .info-image { flex: 1; position: relative; }
        .info-image img {
            width: 100%;
            border-radius: 15px;
            z-index: 2;
            position: relative;
            box-shadow: 30px 30px 0 var(--rural-secondary);
        }

        /* Dark Impact Box (Tech spotlight) */
        .tech-box {
            background: var(--rural-primary);
            color: white;
            padding: 100px 80px;
            border-radius: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 80px;
            position: relative;
            overflow: hidden;
        }
        .tech-text { flex: 1.5; position: relative; z-index: 2; }
        .tech-items { flex: 1; display: grid; grid-template-columns: 1fr 1fr; gap: 20px; position: relative; z-index: 2; }
        .tech-item {
            background: rgba(255,255,255,0.08);
            padding: 30px 20px;
            text-align: center;
            border-radius: 20px;
            backdrop-filter: blur(5px);
            transition: var(--transition);
        }
        .tech-item:hover { background: rgba(255,255,255,0.15); transform: scale(1.05); }

        /* Stats Section */
        .stats-ribbon {
            background: var(--rural-light);
            padding: 80px 0;
            border-radius: 150px 0 150px 0;
            border: 1px solid #e9f5db;
        }
        .stats-flex {
            display: flex;
            justify-content: space-around;
            text-align: center;
            flex-wrap: wrap;
            gap: 40px;
        }
        .stat-item h4 { font-size: 4rem; color: var(--rural-primary); margin-bottom: 10px; font-weight: 900; }
        .stat-item p { color: #555; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; }

        /* Success Story Module */
        .story-section {
            background: var(--white);
            padding: 150px 0;
        }
        .story-card {
            background: #fdfdfd;
            border-radius: 40px;
            padding: 80px;
            display: flex;
            gap: 80px;
            align-items: center;
            border: 1px solid #f0f0f0;
            box-shadow: 0 40px 100px rgba(0,0,0,0.03);
        }
        .story-img { flex: 1; }
        .story-img img { width: 100%; border-radius: 50%; border: 15px solid var(--rural-secondary); }
        .story-txt { flex: 1.8; }
        .story-txt h2 { font-size: 2.8rem; color: var(--rural-primary); margin-bottom: 25px; font-weight: 800; }
        .story-txt p { font-size: 1.4rem; line-height: 1.8; color: #444; font-style: italic; font-weight: 300; }

        /* Step Grid (How to Help) */
        .step-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        .step-item { 
            text-align: center; 
            padding: 40px; 
            background: white; 
            border-radius: 20px;
            transition: var(--transition);
        }
        .step-item:hover { transform: translateY(-10px); }
        .step-circle {
            width: 100px; height: 100px;
            background: var(--rural-gold);
            color: var(--rural-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.2rem;
            font-weight: 900;
            margin: 0 auto 35px;
            box-shadow: 0 10px 20px rgba(255, 183, 3, 0.3);
        }

        /* Feature Large Cards (Gramin Labs) */
        .lab-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 30px;
        }
        .lab-card {
            background-size: cover;
            background-position: center;
            height: 400px;
            border-radius: 30px;
            display: flex;
            align-items: flex-end;
            padding: 40px;
            overflow: hidden;
            position: relative;
        }
        .lab-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to top, rgba(8, 28, 21, 0.9), transparent);
        }
        .lab-info {
            position: relative;
            z-index: 2;
            color: white;
        }
        .lab-info h4 { font-size: 2rem; margin-bottom: 10px; font-weight: 800; }

        /* Buttons */
        .btn-rural {
            background: var(--rural-primary);
            color: white;
            padding: 22px 55px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 800;
            display: inline-block;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.9rem;
        }
        .btn-rural:hover { background: var(--rural-dark); transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.15); }

        @media (max-width: 992px) {
            .rural-hero h1 { font-size: 3rem; }
            .info-split { flex-direction: column; gap: 60px; margin-bottom: 100px; }
            .tech-box { flex-direction: column; padding: 60px 40px; }
            .story-card { flex-direction: column; padding: 40px; text-align: center; }
            .lab-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="rural-hero">
        <div class="container" style="display: block;">
            <h1>Cultivating <span>Brilliance</span> in Rural India</h1>
            <p>We provide world-class education, digital literacy, and holistic support to children in marginalized village communities, turning remote schools into centers of excellence.</p>
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                <a href="#sponsor" class="btn-rural" style="background: var(--rural-gold); color: var(--rural-primary);">Empower a Child</a>
                <a href="#vision" class="btn-rural" style="background:transparent; border: 2px solid white;">Our Learning Mandate</a>
            </div>
        </div>
    </section>

    <!-- 2. VISIONARY MANDATE -->
    <section id="vision" class="section-padding">
        <div class="container" style="display: block;">
            <div style="max-width: 950px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: 3rem; color: var(--rural-primary); margin-bottom: 35px; font-weight: 800;">The Roots of <span>Transformation</span></h2>
                <p style="font-size: 1.35rem; line-height: 1.9; color: #444; font-weight: 300;">
                    At Global Rise, we believe that geography should not determine a child's destiny. Our rural education model integrates conceptual learning with practical innovation, ensuring that every village child has the tools to dream as big as their urban counterparts.
                </p>
            </div>
        </div>
    </section>

    <!-- 3. THE RURAL REALITY (Challenge) -->
    <section class="section-padding" style="background: #fafafa;">
        <div class="container" style="display: block;">
            <div class="info-split">
                <div class="info-content">
                    <div class="section-header">
                        <h2>Closing the <span>Educational Divide</span></h2>
                        <span class="underline"></span>
                    </div>
                    <p style="color: #666; font-size: 1.2rem; line-height: 1.8; margin-bottom: 40px;">
                        Despite India's rapid growth, thousands of rural primary schools lack basic teaching aids, qualified staff, and digital connectivity. This gap forces millions of talented minds to drop out before they can realize their potential.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px;">
                        <div>
                            <h4 style="color: var(--rural-primary); margin-bottom: 12px; font-weight: 800;"><i class="fas fa-school-circle-exclamation"></i> Decaying Infra</h4>
                            <p style="font-size: 1rem; color: #777;">Over 60% of rural schools lack proper laboratory facilities or smart tools.</p>
                        </div>
                        <div>
                            <h4 style="color: var(--rural-primary); margin-bottom: 12px; font-weight: 800;"><i class="fas fa-user-xmark"></i> High Attrition</h4>
                            <p style="font-size: 1rem; color: #777;">Distance and poverty lead to high dropout rates among village girls and boys.</p>
                        </div>
                    </div>
                </div>
                <div class="info-image">
                    <img src="<?php echo BASE_URL; ?>assets/pages/classroom-small-size-1.png" alt="Rural student studying">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE EDUCATION PILLARS -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2>Core Intervention <span>Pillars</span></h2>
                <p style="max-width: 750px; margin: 25px auto 0; font-size: 1.1rem; color: #666;">Our holistic strategy targets the classroom, the teacher, and the community to create a sustainable ecosystem of growth.</p>
            </div>
            
            <div class="pillar-grid">
                <div class="pillar-card">
                    <i class="fas fa-book-open-reader pillar-icon"></i>
                    <h3>Smart Curriculum</h3>
                    <p>Implementing activity-based conceptual learning that replaces rote-memorization with deep understanding.</p>
                </div>
                <div class="pillar-card">
                    <i class="fas fa-chalkboard-user pillar-icon"></i>
                    <h3>Teacher Mentorship</h3>
                    <p>Empowering local village teachers with modern pedagogy training and child psychology workshops.</p>
                </div>
                <div class="pillar-card">
                    <i class="fas fa-vial-circle-check pillar-icon"></i>
                    <h3>Mobile STEM Labs</h3>
                    <p>Bringing practical science experiments to the schools through fully-equipped mobile laboratory vans.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. E-LEARNING HIGH IMPACT BOX -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container" style="display: block;">
            <div class="tech-box">
                <div class="tech-text">
                    <h2 style="font-size: 3.2rem; margin-bottom: 30px; font-weight: 900; line-height: 1.1;">The Digital <span>Bharat</span> Hub</h2>
                    <p style="font-size: 1.2rem; opacity: 0.9; line-height: 1.8; margin-bottom: 40px;">
                        We are eliminating the digital divide by installing "Smart Hubs" in remote village clusters. These hubs provide high-speed internet and solar-powered tablets to ensure no child is left behind in the AI era.
                    </p>
                    <a href="#sponsor" class="btn-rural" style="background: var(--rural-gold); color: var(--rural-primary);">Sponsor a Digital Hub</a>
                </div>
                <div class="tech-items">
                    <div class="tech-item">
                        <i class="fas fa-tablet-screen-button" style="font-size: 2.5rem; margin-bottom: 15px; color: var(--rural-gold);"></i>
                        <h5 style="font-weight: 800;">e-Learning</h5>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-solar-panel" style="font-size: 2.5rem; margin-bottom: 15px; color: var(--rural-gold);"></i>
                        <h5 style="font-weight: 800;">Solar Power</h5>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-wifi" style="font-size: 2.5rem; margin-bottom: 15px; color: var(--rural-gold);"></i>
                        <h5 style="font-weight: 800;">Satellite Net</h5>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-user-graduate" style="font-size: 2.5rem; margin-bottom: 15px; color: var(--rural-gold);"></i>
                        <h5 style="font-weight: 800;">Adult Lit</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. IMPACT STATS BANNER -->
    <section class="stats-ribbon">
        <div class="container" style="display: block;">
             <div class="stats-flex">
                <div class="stat-item">
                    <h4>200+</h4>
                    <p>Schools Adopted</p>
                </div>
                <div class="stat-item">
                    <h4>45k+</h4>
                    <p>Active Students</p>
                </div>
                <div class="stat-item">
                    <h4>85%</h4>
                    <p>Pass Percentage</p>
                </div>
                <div class="stat-item">
                    <h4>1.5M</h4>
                    <p>Meals Served</p>
                </div>
             </div>
        </div>
    </section>

    <!-- 7. SMC GOVERNANCE (Split Reverse) -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="info-split" style="flex-direction: row-reverse;">
                <div class="info-content">
                    <h2 style="font-size: 3rem; color: var(--rural-primary); font-weight: 800; margin-bottom: 30px;">Grassroots <span>Governance</span></h2>
                    <p style="color: #555; font-size: 1.15rem; line-height: 1.8;">
                        Authentic transformation only happens when the community takes ownership. Our School Management Committees (SMCs) empower village elders and parents to co-manage the educational journey of their children.
                    </p>
                    <ul style="list-style: none; margin-top: 40px;">
                        <li style="margin-bottom: 20px; font-weight: 700; color: #444;"><i class="fas fa-circle-check" style="color: var(--rural-primary); margin-right: 15px;"></i> Monthly Community Transparency Audits</li>
                        <li style="margin-bottom: 20px; font-weight: 700; color: #444;"><i class="fas fa-circle-check" style="color: var(--rural-primary); margin-right: 15px;"></i> Parent-Teacher Joint Development Plans</li>
                        <li style="margin-bottom: 20px; font-weight: 700; color: #444;"><i class="fas fa-circle-check" style="color: var(--rural-primary); margin-right: 15px;"></i> Cultural Fusion Curriculum Design</li>
                    </ul>
                </div>
                <div class="info-image">
                    <img src="<?php echo BASE_URL; ?>assets/pages/3-1-1024x640.jpg" alt="Community governance meeting" style="box-shadow: -30px 30px 0 var(--rural-secondary);">
                </div>
            </div>
        </div>
    </section>

    <!-- 8. SUCCESS STORY -->
    <section class="story-section bg-light" style="background: var(--rural-light);">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2 style="font-size: 3rem; font-weight: 800;">Voice of <span>Resilience</span></h2>
            </div>
            <div class="story-card">
                <div class="story-img">
                    <img src="<?php echo BASE_URL; ?>assets/pages/arjun.jpg" alt="Alumni Arjun">
                </div>
                <div class="story-txt">
                    <i class="fas fa-quote-left" style="font-size: 4rem; color: var(--rural-secondary); margin-bottom: 35px; display: block;"></i>
                    <h2>Arjun's Flight to Science</h2>
                    <p>"Growing up in a village with no library, I thought the stars were just lights. When the Foundation brought the Mobile Lab, I saw them through a telescope for the first time. Today, I am studying at an Indian Institute of Technology."</p>
                    <p style="font-weight: 800; color: var(--rural-gold); margin-top: 30px; letter-spacing: 2px; text-transform: uppercase;">— Arjun S., Alumni & Scholar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. GRAMIN SKILL LABS -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div style="text-align: center; margin-bottom: 80px;">
                <h2 style="font-size: 3.2rem; color: var(--rural-primary); font-weight: 800;">Gramin <span>Skill</span> Labs</h2>
                <p style="max-width: 850px; margin: 25px auto 0; font-size: 1.2rem; color: #555;">Beyond textbooks, we prepare students for the local and global economy through practical vocational integration.</p>
            </div>
            <div class="lab-grid">
                <div class="lab-card" style="background-image: url('<?php echo BASE_URL; ?>assets/pages/teaching-hub.webp');">
                    <div class="lab-info">
                        <h4>Agri-Tech Hubs</h4>
                        <p>Teaching sustainable farming and water management techniques to the youth.</p>
                    </div>
                </div>
                <div class="lab-card" style="background-image: url('<?php echo BASE_URL; ?>assets/pages/young-schoolboy-learning-electronic-circuit-board-detail-focus-board-component_1048944-6121110.avif');">
                    <div class="lab-info">
                        <h4>Digital Mechanics</h4>
                        <p>Basics of smartphone repair and small-scale electronic maintenance for local livelihoods.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. SUPPORT TIERS -->
    <section id="sponsor" class="section-padding" style="background: var(--rural-light);">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2 style="font-size: 3.2rem; font-weight: 900;">Empower a <span>Village Child</span></h2>
                <p style="margin-top: 25px; font-size: 1.15rem; color: #555;">Choose your level of participation in rural transformation.</p>
            </div>
            <div class="step-grid">
                <div class="step-item">
                    <div class="step-circle">₹</div>
                    <h4 style="font-size: 1.5rem; font-weight: 800; color: var(--rural-primary);">Student Kit</h4>
                    <p style="margin: 20px 0;">Provides one year of books, uniforms, and shoes for a marginalized student.</p>
                    <a href="#" class="btn-rural" style="font-size: 0.8rem; padding: 15px 35px;">Donate ₹3,500</a>
                </div>
                <div class="step-item">
                    <div class="step-circle"><i class="fas fa-tablet-button"></i></div>
                    <h4 style="font-size: 1.5rem; font-weight: 800; color: var(--rural-primary);">Digital Seat</h4>
                    <p style="margin: 20px 0;">Sponsor a solar-powered tablet and 1 year of internet for a village classroom.</p>
                    <a href="#" class="btn-rural" style="font-size: 0.8rem; padding: 15px 35px;">Donate ₹8,500</a>
                </div>
                <div class="step-item">
                    <div class="step-circle"><i class="fas fa-microscope"></i></div>
                    <h4 style="font-size: 1.5rem; font-weight: 800; color: var(--rural-primary);">Adopt a Lab</h4>
                    <p style="margin: 20px 0;">Support the operations of a Mobile Science Lab in one rural district.</p>
                    <a href="#" class="btn-rural" style="font-size: 0.8rem; padding: 15px 35px;">Donate ₹25,000</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. PARTNERSHIP BANNER -->
    <section class="section-padding" style="border-top: 1px solid #ddd;">
        <div class="container" style="display: block; text-align: center;">
             <h2 style="font-size: 3.2rem; font-weight: 800; margin-bottom: 30px;">Corporate <span>CSR</span> for Rural Bharat</h2>
             <p style="margin-bottom: 50px; max-width: 850px; margin: 0 auto 50px; font-size: 1.3rem; line-height: 1.8; color: #555;">Adopt an entire block or district for educational transformation. Scale your CSR impact at the grassroots.</p>
             <a href="#" class="btn-rural">Request a Block Proposal</a>
        </div>
    </section>

    <!-- 12. FINAL CALL TO ACTION -->
    <section style="background: var(--rural-primary); padding: 100px 0; text-align: center; color: white;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 25px; line-height: 1.1;">Ignite the <span>Rural Spark</span> Today.</h2>
            <p style="font-size: 1.4rem; margin-bottom: 50px; opacity: 0.9; font-weight: 300;">Your support defines the legacy of rural India's next generation.</p>
            <a href="#" class="btn-rural" style="background: var(--rural-gold); color: var(--rural-primary); font-size: 1.1rem;">Partner with us</a>
        </div>
    </section>

    <?php include(BASE_URL . 'includes/footer.php'); ?>

    <!-- Smooth Scroll Script -->
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
