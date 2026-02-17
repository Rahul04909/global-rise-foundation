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
    
    <!-- Premium & High-End Design Style -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800;900&display=swap');

        :root {
            --rural-deep: #1B4332; /* Deep Jungle Green */
            --rural-mid: #2D6A4F; /* Forest Green */
            --rural-gold: #FFB703; /* Saffron Gold */
            --rural-cream: #FFFBED; /* Warm Cream */
            --rural-accent: #FB8500; /* Warm Orange */
            --text-main: #081C15;
            --glass: rgba(255, 251, 237, 0.85);
            --transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Outfit', sans-serif;
            color: var(--text-main);
            background-color: var(--white);
            overflow-x: hidden;
        }

        /* --- 1. PREMIUM HERO --- */
        .premium-hero {
            height: 95vh;
            background: linear-gradient(rgba(27, 67, 50, 0.85), rgba(27, 67, 50, 0.4)), url('<?php echo BASE_URL; ?>assets/frontend/rural-children-education.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            position: relative;
        }
        .hero-glass-card {
            background: var(--glass);
            backdrop-filter: blur(20px);
            padding: 60px;
            border-radius: 40px;
            max-width: 850px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.15);
            border: 1px solid rgba(255,255,255,0.4);
            margin-left: 5%;
            animation: slideIn 1.2s ease-out;
        }
        @keyframes slideIn { from { opacity: 0; transform: translateX(-50px); } to { opacity: 1; transform: translateX(0); } }
        
        .premium-hero h1 {
            font-size: 5.5rem;
            font-weight: 900;
            line-height: 1;
            color: var(--rural-deep);
            margin-bottom: 25px;
        }
        .premium-hero h1 span {
            color: var(--rural-accent);
            display: block;
            font-size: 0.7em;
            letter-spacing: 5px;
        }
        .premium-hero p {
            font-size: 1.4rem;
            color: #444;
            margin-bottom: 45px;
            line-height: 1.6;
            max-width: 600px;
        }

        /* --- 2. VISIONARY MANDATE (Asymmetrical) --- */
        .vision-section {
            padding: 150px 0;
            background: var(--rural-cream);
            position: relative;
        }
        .vision-flex {
            display: flex;
            align-items: center;
            gap: 120px;
        }
        .vision-images {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            position: relative;
        }
        .img-main {
            grid-column: 1 / 10;
            border-radius: 50px;
            box-shadow: 30px 30px 80px rgba(27, 67, 50, 0.1);
            z-index: 2;
        }
        .img-sub {
            grid-column: 7 / 13;
            margin-top: -40%;
            border-radius: 40px;
            border: 10px solid var(--white);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            z-index: 3;
        }
        .vision-content { flex: 1.2; }
        .vision-tag {
            background: var(--rural-gold);
            padding: 8px 25px;
            border-radius: 100px;
            font-weight: 800;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            display: inline-block;
        }

        /* --- 3. CRISIS DATA CARDS --- */
        .crisis-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 20px;
        }
        .crisis-card {
            background: var(--white);
            padding: 40px;
            border-radius: 30px;
            border-top: 10px solid var(--rural-deep);
            box-shadow: 0 15px 35px rgba(0,0,0,0.03);
        }
        .crisis-card h4 { font-size: 3rem; color: var(--rural-accent); font-weight: 900; margin-bottom: 10px; }

        /* --- 4. PILLAR MODULES (Interactive) --- */
        .pillars-section { padding: 150px 0; }
        .pillar-premium-card {
            background: var(--white);
            padding: 80px 50px;
            border-radius: 50px;
            text-align: center;
            transition: var(--transition);
            border: 1px solid #f0f0f0;
            position: relative;
            overflow: hidden;
        }
        .pillar-premium-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 0;
            background: var(--rural-deep);
            z-index: 1;
            transition: var(--transition);
        }
        .pillar-premium-card:hover { transform: translateY(-20px); box-shadow: 0 40px 80px rgba(27, 67, 50, 0.15); }
        .pillar-premium-card:hover::before { height: 10px; }
        .pillar-premium-card i {
            font-size: 4rem;
            color: var(--rural-gold);
            margin-bottom: 35px;
            display: block;
            position: relative;
            z-index: 2;
        }
        .pillar-premium-card h3 { font-size: 2rem; color: var(--rural-deep); position: relative; z-index: 2; margin-bottom: 20px; }
        .pillar-premium-card p { position: relative; z-index: 2; color: #666; font-size: 1.1rem; }

        /* --- 5. NUTRITION SOFT-FOCUS --- */
        .nutrition-wrap {
            background: linear-gradient(135deg, var(--white), var(--rural-cream));
            padding: 150px 0;
            border-radius: 200px 0 200px 0;
        }

        /* --- 6. IMPACT RIBBON --- */
        .impact-ribbon {
            background: var(--rural-deep);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        .impact-ribbon::after {
            content: 'GLOBAL RISE';
            position: absolute;
            font-size: 20rem;
            font-weight: 900;
            opacity: 0.03;
            bottom: -50px;
            right: -20px;
            white-space: nowrap;
        }
        .ribbon-stats {
            display: flex;
            justify-content: space-around;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        .ribbon-item h2 { font-size: 5rem; color: var(--rural-gold); font-weight: 900; margin-bottom: 0; }
        .ribbon-item p { font-size: 1.2rem; letter-spacing: 3px; text-transform: uppercase; color: var(--rural-cream); opacity: 0.8; }

        /* --- 7. MAGAZINE STYLE STORY --- */
        .magazine-story {
            padding: 150px 0;
        }
        .story-hero-box {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            background: var(--white);
            border-radius: 60px;
            overflow: hidden;
            box-shadow: 0 50px 100px rgba(0,0,0,0.08);
        }
        .story-image-canvas {
            background: url('<?php echo BASE_URL; ?>assets/frontend/Girl-Child-Education.jpg') center/cover;
            min-height: 700px;
        }
        .story-text-canvas {
            padding: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .story-text-canvas blockquote {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--rural-deep);
            line-height: 1.2;
            margin-bottom: 40px;
            position: relative;
        }
        .story-text-canvas blockquote::before {
            content: '“';
            font-size: 8rem;
            color: var(--rural-gold);
            position: absolute;
            top: -60px; left: -40px;
            opacity: 0.5;
        }

        /* --- 8. PREMIUM DONATION CARDS --- */
        .tier-card {
            background: var(--white);
            padding: 60px 45px;
            border-radius: 40px;
            text-align: center;
            border: 1px solid #f0f0f0;
            transition: var(--transition);
        }
        .tier-card.featured {
            background: var(--rural-deep);
            color: white;
            transform: scale(1.05);
            border: none;
        }
        .tier-card h3 { font-size: 1.8rem; margin-bottom: 25px; }
        .tier-card.featured h3 { color: var(--rural-gold); }
        .tier-price { font-size: 3.5rem; font-weight: 900; margin-bottom: 30px; display: block; }
        .tier-card.featured .tier-price { color: var(--white); }

        /* --- 9. BUTTONS --- */
        .btn-premium {
            background: var(--rural-deep);
            color: white;
            padding: 22px 60px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 900;
            display: inline-block;
            transition: var(--transition);
            text-transform: uppercase;
            letter-spacing: 2px;
            border: none;
            font-size: 0.9rem;
        }
        .btn-premium:hover {
            transform: translateY(-5px);
            background: var(--rural-accent);
            box-shadow: 0 20px 40px rgba(251, 133, 0, 0.3);
        }
        .btn-premium-outline {
            background: transparent;
            color: var(--rural-deep);
            border: 2px solid var(--rural-deep);
            padding: 20px 58px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 900;
            display: inline-block;
            transition: var(--transition);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .btn-premium-outline:hover { background: var(--rural-deep); color: white; }

        .btn-gold {
            background: var(--rural-gold);
            color: var(--rural-deep);
            padding: 22px 60px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 900;
            font-size: 1rem;
            transition: var(--transition);
        }
        .btn-gold:hover { transform: scale(1.05); box-shadow: 0 15px 30px rgba(255, 183, 3, 0.4); }

        @media (max-width: 992px) {
            .premium-hero h1 { font-size: 3.5rem; }
            .hero-glass-card { margin-left: 0; padding: 40px; }
            .vision-flex { flex-direction: column; }
            .crisis-grid { grid-template-columns: 1fr; }
            .ribbon-stats { flex-direction: column; gap: 40px; }
            .story-hero-box { grid-template-columns: 1fr; }
            .story-text-canvas { padding: 40px; }
            .story-text-canvas blockquote { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. PREMIUM HERO SECTION -->
    <section class="premium-hero">
        <div class="container" style="display: block;">
            <div class="hero-glass-card">
                <h1><span>RURAL INDIA</span> Nurturing <br>The Future.</h1>
                <p>We are reimagining village education through a fusion of traditional values and modern technological excellence.</p>
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <a href="#sponsor" class="btn-premium">Partner with a Child</a>
                    <a href="#vision" class="btn-premium-outline">Explore Our Vision</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. VISIONARY MANDATE (Asymmetrical) -->
    <section id="vision" class="vision-section">
        <div class="container" style="display: block;">
            <div class="vision-flex">
                <div class="vision-images">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/rural-about.jpg" alt="Rural Class" class="img-main">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/rural-children-education.jpg" alt="Happy Kids" class="img-sub">
                </div>
                <div class="vision-content">
                    <span class="vision-tag">The Growth Mandate</span>
                    <h2 style="font-size: 3.5rem; color: var(--rural-deep); margin-bottom: 30px; font-weight: 900; line-height: 1.1;">Igniting Every <span>Mind</span> in the Village.</h2>
                    <p style="font-size: 1.25rem; color: #555; line-height: 1.8; margin-bottom: 40px;">
                        Education is the most powerful tool to change the rural landscape. Our holistic approach integrates academic rigor, technical training, and ethical development to create future leaders from grassroots.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                         <div style="display: flex; gap: 15px; align-items: center;">
                            <i class="fas fa-check-double" style="color: var(--rural-accent); font-size: 1.5rem;"></i>
                            <span style="font-weight: 700; color: var(--rural-deep);">Smart Infrastructure</span>
                         </div>
                         <div style="display: flex; gap: 15px; align-items: center;">
                            <i class="fas fa-check-double" style="color: var(--rural-accent); font-size: 1.5rem;"></i>
                            <span style="font-weight: 700; color: var(--rural-deep);">Digital Parity</span>
                         </div>
                         <div style="display: flex; gap: 15px; align-items: center;">
                            <i class="fas fa-check-double" style="color: var(--rural-accent); font-size: 1.5rem;"></i>
                            <span style="font-weight: 700; color: var(--rural-deep);">Holistic Growth</span>
                         </div>
                         <div style="display: flex; gap: 15px; align-items: center;">
                            <i class="fas fa-check-double" style="color: var(--rural-accent); font-size: 1.5rem;"></i>
                            <span style="font-weight: 700; color: var(--rural-deep);">Youth Leadership</span>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. THE CRISIS DATA -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2 style="font-size: 1.5rem; letter-spacing: 5px; color: var(--rural-accent); text-transform: uppercase;">The Challenge</h2>
                <h3 style="font-size: 3.5rem; color: var(--rural-deep); font-weight: 900; margin-top: 10px;">Why We Intervene</h3>
            </div>
            <div class="crisis-grid">
                <div class="crisis-card">
                    <h4>70%</h4>
                    <p style="font-weight: 800; text-transform: uppercase; font-size: 0.9rem; color: #888;">Literacy Gap</p>
                    <p style="margin-top: 15px; color: #555;">Gap in functional literacy between urban centers and remote villages.</p>
                </div>
                <div class="crisis-card" style="border-top-color: var(--rural-gold);">
                    <h4>55%</h4>
                    <p style="font-weight: 800; text-transform: uppercase; font-size: 0.9rem; color: #888;">Digital Divide</p>
                    <p style="margin-top: 15px; color: #555;">Rural students lack access to basic computer and internet learning tools.</p>
                </div>
                <div class="crisis-card" style="border-top-color: var(--rural-accent);">
                    <h4>40%</h4>
                    <p style="font-weight: 800; text-transform: uppercase; font-size: 0.9rem; color: #888;">Dropout Rate</p>
                    <p style="margin-top: 15px; color: #555;">Estimated drop-out rate after primary education in marginalized rural hubs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. IMPACT RIBBON (Interactive Stats) -->
    <section class="impact-ribbon">
        <div class="container" style="display: block;">
            <div class="ribbon-stats">
                <div class="ribbon-item">
                    <h2>200+</h2>
                    <p>Villages Served</p>
                </div>
                <div class="ribbon-item">
                    <h2>50k+</h2>
                    <p>Children Enrolled</p>
                </div>
                <div class="ribbon-item">
                    <h2>500+</h2>
                    <p>Smart Schools</p>
                </div>
                <div class="ribbon-item">
                    <h2>1M+</h2>
                    <p>Books Distributed</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PILLAR MODULES (Interactive Cards) -->
    <section class="pillars-section bg-fresh">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2 style="font-size: 3.5rem; color: var(--rural-deep); font-weight: 900;">The Four <span>Pillars</span> of Excellence.</h2>
            </div>
            <div class="pillar-grid" style="margin-top: 50px;">
                <div class="pillar-premium-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Smart Curriculum</h3>
                    <p>Context-aware pedagogy that makes global concepts easy to understand for village children.</p>
                </div>
                <div class="pillar-premium-card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Digital Literacy</h3>
                    <p>Hands-on coding and computer workshops to prepare them for the modern global economy.</p>
                </div>
                <div class="pillar-premium-card">
                    <i class="fas fa-heart-pulse"></i>
                    <h3>Child Wellbeing</h3>
                    <p>Focusing on nutritional health, mental wellness, and regular medical checkups at school.</p>
                </div>
                <div class="pillar-premium-card">
                    <i class="fas fa-people-roof"></i>
                    <h3>Community Hub</h3>
                    <p>Schools that act as community centers for night classes and vocational training for adults.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. NUTRITION MODULE -->
    <section class="nutrition-wrap">
        <div class="container" style="display: block;">
            <div class="vision-flex" style="flex-direction: row-reverse;">
                <div class="vision-images">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/Girl-Child-Education.jpg" alt="Healthy Student" class="img-main">
                </div>
                <div class="vision-content">
                    <span class="vision-tag" style="background:#e9f5db;">Nutritional Shield</span>
                    <h2 style="font-size: 3rem; color: var(--rural-deep); font-weight: 900; margin-bottom: 25px;">Feed a Mind, <br>Change a Life.</h2>
                    <p style="font-size: 1.2rem; color: #555; line-height: 1.8; margin-bottom: 30px;">
                        Healthy bodies lead to sharp minds. Our "Poshan" program ensures high-protein, hygienic mid-day meals that reduce absenteeism and improve cognitive performance by 40%.
                    </p>
                    <div style="background: white; padding: 40px; border-radius: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.03);">
                        <div style="display: flex; gap: 20px; align-items: center;">
                            <div style="width: 60px; height: 60px; background: var(--rural-gold); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--rural-deep); font-size: 1.5rem;"><i class="fas fa-bowl-food"></i></div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Hygienic Kitchens</h4>
                                <p style="font-size: 0.9rem; color: #777;">FSSAI compliant community kitchens in every cluster.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. MAGAZINE STORY SPOTLIGHT -->
    <section class="magazine-story">
        <div class="container" style="display: block;">
            <div class="story-hero-box">
                <div class="story-image-canvas"></div>
                <div class="story-text-canvas">
                    <span style="color: var(--rural-accent); font-weight: 900; text-transform: uppercase; letter-spacing: 5px; margin-bottom: 20px; display: block;">The Alumni Chronicles</span>
                    <blockquote>"Global Rise didn't just give me books; they gave me a vision to see beyond the fields of my village."</blockquote>
                    <p style="font-size: 1.1rem; color: #555; line-height: 1.8; margin-bottom: 40px;">Arjun Singh, once a migrant laborer's son, is now pursuing his Bachelor's in Software Engineering thanks to the Foundation's Digital Lab scholarship.</p>
                    <div>
                        <a href="#" class="btn-premium">Read His Full Journey</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. VOCATIONAL & SKILLS -->
    <section class="section-padding bg-soft">
        <div class="container" style="display: block;">
            <div class="vision-flex">
                 <div class="vision-content">
                    <span class="vision-tag">Skill Integration</span>
                    <h2 style="font-size: 3rem; color: var(--rural-deep); font-weight: 800;">Learning by <span>Doing</span>.</h2>
                    <p style="color: #666; font-size: 1.2rem; line-height: 1.8; margin-top: 30px;">
                        Our "Gramin Skill Labs" teach students more than just theory. From sustainable agriculture techniques to basic robotics, we ensure children are prepared for both the farm and the factory of the future.
                    </p>
                    <div style="display: flex; gap: 40px; margin-top: 50px;">
                         <div style="text-align: center;">
                            <div style="font-size: 2.5rem; color: var(--rural-mid);"><i class="fas fa-seedling"></i></div>
                            <h5 style="margin-top: 10px;">Agri-Tech</h5>
                         </div>
                         <div style="text-align: center;">
                            <div style="font-size: 2.5rem; color: var(--rural-mid);"><i class="fas fa-screwdriver-wrench"></i></div>
                            <h5 style="margin-top: 10px;">Mechanics</h5>
                         </div>
                         <div style="text-align: center;">
                            <div style="font-size: 2.5rem; color: var(--rural-mid);"><i class="fas fa-code"></i></div>
                            <h5 style="margin-top: 10px;">Coding</h5>
                         </div>
                    </div>
                 </div>
                 <div class="vision-images" style="display: block;">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg" alt="Skills" style="width: 100%; border-radius: 40px; transform: rotate(3deg); box-shadow: 0 40px 80px rgba(0,0,0,0.1);">
                 </div>
            </div>
        </div>
    </section>

    <!-- 9. PREMIUM DONATION TIERS -->
    <section id="sponsor" class="section-padding" style="background: #fdfdfd;">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2 style="font-size: 3.5rem; color: var(--rural-deep); font-weight: 900;">Empower a <span>Village</span> Child.</h2>
                <p style="max-width: 650px; margin: 20px auto 0; color: #777;">Investing in a child's education is the highest ROI for humanity. Choose your sponsorship tier.</p>
            </div>
            <div class="pillar-grid" style="margin-top: 60px;">
                <div class="tier-card">
                    <h3>Basic Learning Kit</h3>
                    <p>Covers books, uniform, and a basic health insurance for one year.</p>
                    <span class="tier-price">₹5,000</span>
                    <a href="#" class="btn-premium-outline" style="width: 100%;">Sponsor Now</a>
                </div>
                <div class="tier-card featured">
                    <h3>The Scholar Shield</h3>
                    <p>Full year education, digital lab access, and 365 days of mid-day meals.</p>
                    <span class="tier-price">₹12,500</span>
                    <a href="#" class="btn-gold" style="width: 100%;">Adopt a Student</a>
                </div>
                <div class="tier-card">
                    <h3>Village School Hub</h3>
                    <p>Operational support for an entire classroom cluster for one month.</p>
                    <span class="tier-price">₹50,000</span>
                    <a href="#" class="btn-premium-outline" style="width: 100%;">Sponsor Hub</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. SCHOOL MANAGEMENT COUNCILS -->
    <section class="section-padding bg-clean">
        <div class="container" style="display: block; text-align: center;">
            <h2 style="font-size: 3rem; color: var(--rural-deep); margin-bottom: 30px; font-weight: 900;">Grassroots <span>Governance</span></h2>
            <p style="max-width: 800px; margin: 0 auto 50px; line-height: 1.8; color: #555;">Our success is based on local ownership. Each school is managed by a council of village elders, parents, and teachers, ensuring 100% accountability and cultural relevance.</p>
            <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
                 <div style="padding: 40px; background: white; border-radius: 30px; max-width: 300px; border-bottom: 5px solid var(--rural-gold);">
                    <h4 style="color: var(--rural-deep);">Transparent Audits</h4>
                    <p style="font-size: 0.9rem; color: #888;">Monthly reviews by community members.</p>
                 </div>
                 <div style="padding: 40px; background: white; border-radius: 30px; max-width: 300px; border-bottom: 5px solid var(--rural-gold);">
                    <h4 style="color: var(--rural-deep);">Cultural Fusion</h4>
                    <p style="font-size: 0.9rem; color: #888;">Curriculums that respect local traditions.</p>
                 </div>
            </div>
        </div>
    </section>

    <!-- 11. CORPORATE PARTNERSHIPS -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div style="background: var(--rural-cream); padding: 80px; border-radius: 60px; text-align: center; border: 2px dashed var(--rural-gold);">
                 <h2 style="font-size: 3rem; color: var(--rural-deep); font-weight: 800;">CSR for <span>Rural Bharat</span></h2>
                 <p style="max-width: 700px; margin: 30px auto 40px; color: #666; font-size: 1.2rem;">Scale your social impact by adopting an entire block or district for educational transformation.</p>
                 <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
                    <a href="#" class="btn-premium">Inquire Corporate Plan</a>
                    <a href="#" class="btn-premium-outline">Volunteer at a School</a>
                 </div>
            </div>
        </div>
    </section>

    <!-- 12. FINAL CTA -->
    <section style="background: var(--rural-deep); padding: 120px 0; text-align: center; color: white; border-radius: 120px 120px 0 0;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 4.5rem; font-weight: 900; margin-bottom: 30px; line-height: 1;">Be the <span>Sun</span> that <br>Nurtures the Seed.</h2>
            <p style="font-size: 1.5rem; margin-bottom: 60px; opacity: 0.9; font-weight: 300;">Your support defines the legacy of rural India's next generation.</p>
            <a href="#" class="btn-gold" style="font-size: 1.3rem; padding: 25px 80px;">Sponsor an Education Journey</a>
        </div>
    </section>

    <?php include(BASE_URL . 'includes/footer.php'); ?>

    <!-- Smooth Reveal Animation -->
    <script>
        const observerOptions = { threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.pillar-premium-card, .vision-content, .img-main, .story-hero-box').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 1s cubic-bezier(0.4, 0, 0.2, 1)';
            observer.observe(el);
        });

        // Smooth Scroll
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
