<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Projects | The Global Rise Foundation</title>
    <meta name="description" content="Healing at the grassroots. Our health projects provide mobile medical units, maternal care, and emergency response training to underserved rural communities.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Unique Professional Design for Health Projects -->
    <style>
        :root {
            --health-primary: #03045E; /* Deep Navy */
            --health-secondary: #0077B6; /* Medical Blue */
            --health-accent: #E63946; /* Vitality Red */
            --health-soft: #CAF0F8; /* Sky Blue Soft */
            --health-dark: #023E8A;
            --health-light: #F8FDFF;
            --white: #ffffff;
        }

        /* Hero Section */
        .health-hero {
            height: 90vh;
            background: linear-gradient(rgba(3, 4, 94, 0.85), rgba(3, 4, 94, 0.5)), url('<?php echo BASE_URL; ?>assets/frontend/senior-citizen-care.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            clip-path: ellipse(150% 100% at 50% 0%);
        }
        .health-hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 25px;
            max-width: 900px;
            line-height: 1.1;
        }
        .health-hero h1 span { color: var(--health-secondary); }
        .health-hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin-bottom: 45px;
            line-height: 1.6;
            font-weight: 300;
            opacity: 0.95;
        }

        .section-padding { padding: 120px 0; }
        .section-header { margin-bottom: 80px; }
        .section-header h2 {
            font-size: 3.5rem;
            color: var(--health-primary);
            margin-bottom: 20px;
            font-weight: 800;
        }
        .section-header h2 span { color: var(--health-accent); }
        .section-header .underline {
            width: 100px;
            height: 6px;
            background: var(--health-secondary);
            display: block;
            border-radius: 10px;
        }

        /* Health Pillars Grid */
        .pillar-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }
        .pillar-card {
            background: var(--white);
            padding: 60px 45px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.03);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
            border: 1px solid #f0faff;
        }
        .pillar-card:hover {
            box-shadow: 0 30px 70px rgba(3, 4, 94, 0.1);
            transform: translateY(-12px);
        }
        .pillar-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 0; height: 6px;
            background: var(--health-secondary);
            transition: width 0.4s ease;
        }
        .pillar-card:hover::before { width: 100%; }
        .pillar-icon {
            font-size: 3.8rem;
            color: var(--health-secondary);
            margin-bottom: 30px;
            display: block;
        }
        .pillar-card h3 {
            font-size: 1.8rem;
            color: var(--health-primary);
            margin-bottom: 20px;
            font-weight: 800;
        }

        /* Split Section */
        .health-split {
            display: flex;
            align-items: center;
            gap: 120px;
            margin-bottom: 150px;
        }
        .health-content { flex: 1.2; }
        .health-image { flex: 1; position: relative; }
        .health-image img {
            width: 100%;
            border-radius: 30px;
            z-index: 2;
            position: relative;
            box-shadow: 40px 40px 0 var(--health-soft);
        }

        /* MMU High Impact Box */
        .mmu-box {
            background: var(--health-primary);
            color: white;
            padding: 100px 80px;
            border-radius: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 100px;
            position: relative;
            overflow: hidden;
        }
        .mmu-box::after {
            content: '';
            position: absolute;
            right: -100px; bottom: -100px;
            width: 400px; height: 400px;
            background: var(--health-secondary);
            border-radius: 50%;
            opacity: 0.1;
        }
        .mmu-text { flex: 1.5; position: relative; z-index: 2; }
        .mmu-items { flex: 1; display: grid; grid-template-columns: 1fr 1fr; gap: 20px; position: relative; z-index: 2; }
        .mmu-item {
            background: rgba(255,255,255,0.06);
            padding: 35px 25px;
            text-align: center;
            border-radius: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
            transition: var(--transition);
        }
        .mmu-item:hover { background: rgba(255,255,255,0.12); transform: translateY(-5px); }

        /* Stats Ribbon */
        .stats-ribbon {
            background: var(--health-light);
            padding: 80px 0;
            border-radius: 0 150px 0 150px;
            border: 1px solid #eefaff;
        }
        .stats-flex {
            display: flex;
            justify-content: space-around;
            text-align: center;
            flex-wrap: wrap;
            gap: 50px;
        }
        .stat-item h4 { font-size: 4.5rem; color: var(--health-primary); margin-bottom: 10px; font-weight: 900; }
        .stat-item p { color: var(--health-secondary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.9rem; }

        /* Story Spotlight */
        .recovery-story {
            background: var(--white);
            padding: 150px 0;
        }
        .story-wrapper {
            background: #fdfdfd;
            border-radius: 50px;
            padding: 100px;
            display: flex;
            gap: 100px;
            align-items: center;
            border: 1px solid #f5f5f5;
            box-shadow: 0 50px 100px rgba(3, 4, 94, 0.02);
        }
        .story-visual { flex: 1; }
        .story-visual img { width: 100%; border-radius: 50%; border: 20px solid var(--health-soft); }
        .story-data { flex: 1.8; }
        .story-data h2 { font-size: 3.2rem; color: var(--health-primary); margin-bottom: 30px; font-weight: 900; line-height: 1.1; }
        .story-data p { font-size: 1.4rem; line-height: 1.8; color: #444; font-style: italic; font-weight: 300; }

        /* Training Lab Cards */
        .training-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 35px;
        }
        .training-card {
            background-size: cover;
            background-position: center;
            height: 450px;
            border-radius: 40px;
            display: flex;
            align-items: flex-end;
            padding: 50px;
            overflow: hidden;
            position: relative;
            transition: var(--transition);
        }
        .training-card::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to top, rgba(3, 4, 94, 0.95), transparent);
        }
        .training-card:hover { transform: scale(1.02); }
        .training-info {
            position: relative;
            z-index: 2;
            color: white;
        }
        .training-info h4 { font-size: 2.2rem; margin-bottom: 15px; font-weight: 800; }

        /* Sponsorship Tiers */
        .tier-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }
        .tier-card { 
            text-align: center; 
            padding: 60px 45px; 
            background: white; 
            border-radius: 30px;
            transition: all 0.4s ease;
            box-shadow: 0 15px 40px rgba(0,0,0,0.02);
            border: 1px solid #f0f0f0;
        }
        .tier-card:hover { transform: translateY(-15px); box-shadow: 0 30px 60px rgba(0, 119, 182, 0.1); }
        .tier-circle {
            width: 110px; height: 110px;
            background: var(--health-soft);
            color: var(--health-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 900;
            margin: 0 auto 40px;
        }

        /* Buttons */
        .btn-health {
            background: var(--health-primary);
            color: white;
            padding: 24px 60px;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 800;
            display: inline-block;
            transition: all 0.4s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.95rem;
            border: none;
            cursor: pointer;
        }
        .btn-health:hover { background: var(--health-accent); transform: translateY(-5px); box-shadow: 0 20px 40px rgba(230, 57, 70, 0.2); }

        @media (max-width: 992px) {
            .health-hero h1 { font-size: 3.2rem; }
            .health-split { flex-direction: column; gap: 70px; margin-bottom: 100px; }
            .mmu-box { flex-direction: column; padding: 70px 45px; gap: 60px; }
            .story-wrapper { flex-direction: column; padding: 50px; text-align: center; }
            .training-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="health-hero">
        <div class="container" style="display: block;">
            <h1>Healing the <span>Grassroots</span> with Care.</h1>
            <p>We are bridging the gap between clinical excellence and remote accessibility, ensuring every village child and family has access to quality healthcare.</p>
            <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                <a href="#sponsor" class="btn-health" style="background: var(--health-accent);">Support a Life</a>
                <a href="#vision" class="btn-health" style="background:transparent; border: 2px solid white;">Our Medical Mandate</a>
            </div>
        </div>
    </section>

    <!-- 2. MISSION STATEMENT -->
    <section id="vision" class="section-padding">
        <div class="container" style="display: block;">
            <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: 3rem; color: var(--health-primary); margin-bottom: 40px; font-weight: 900;">Prescribing <span>Equality</span> in Health</h2>
                <p style="font-size: 1.45rem; line-height: 1.9; color: #333; font-weight: 300;">
                    Health is the foundation of human potential. Our comprehensive health projects move beyond basic medicine, tackling systemic issues of maternal mortality, malnutrition, and preventive care through a decentralized clinical network.
                </p>
            </div>
        </div>
    </section>

    <!-- 3. THE HEALTHCARE CHALLENGE (Crisis) -->
    <section class="section-padding" style="background: #fbfdff;">
        <div class="container" style="display: block;">
            <div class="health-split">
                <div class="health-content">
                    <div class="section-header">
                        <h2>The Reach of <span>Infrastructural Deficit</span></h2>
                        <span class="underline"></span>
                    </div>
                    <p style="color: #555; font-size: 1.25rem; line-height: 1.8; margin-bottom: 45px;">
                        In rural India, the nearest Primary Health Center is often a day's journey away. This isolation leads to preventable complications during childbirth, untreated chronic illnesses, and a reliance on unqualified practitioners.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 40px;">
                        <div>
                            <h4 style="color: var(--health-primary); margin-bottom: 15px; font-weight: 900;"><i class="fas fa-truck-medical"></i> Zero Transport</h4>
                            <p style="font-size: 1.05rem; color: #777;">Emergency response times in remote blocks exceed 4 hours on average.</p>
                        </div>
                        <div>
                            <h4 style="color: var(--health-primary); margin-bottom: 15px; font-weight: 900;"><i class="fas fa-stethoscope"></i> Doctor Scarcity</h4>
                            <p style="font-size: 1.05rem; color: #777;">Only 1 doctor is available for every 10,000 residents in tribal rural zones.</p>
                        </div>
                    </div>
                </div>
                <div class="health-image">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/senior-citizen-care.jpg" alt="Rural healthcare crisis">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE INTERVENTION PILLARS -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2>Our Clinical <span>Pillars</span></h2>
                <p style="max-width: 800px; margin: 25px auto 0; font-size: 1.2rem; color: #666;">A multi-layered approach to ensure every stage of health—from infancy to old age—is protected.</p>
            </div>
            
            <div class="pillar-grid">
                <div class="pillar-card">
                    <i class="fas fa-person-breastfeeding pillar-icon"></i>
                    <h3>Maternal Health</h3>
                    <p>Ensuring safe institutional deliveries, prenatal nutrition sessions, and neonatal care for village mothers.</p>
                </div>
                <div class="pillar-card">
                    <i class="fas fa-hand-holding-heart pillar-icon"></i>
                    <h3>Preventive Camps</h3>
                    <p>Regular specialized camps for eye-care, dental hygiene, and chronic disease screening in rural hubs.</p>
                </div>
                <div class="pillar-card">
                    <i class="fas fa-kit-medical pillar-icon"></i>
                    <h3>Essential Pharmacy</h3>
                    <p>Providing 100% free, high-quality generic medicines and diagnostic tests through our mobile network.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. MMU HIGH IMPACT BOX -->
    <section class="section-padding" style="background: var(--white);">
        <div class="container" style="display: block;">
            <div class="mmu-box">
                <div class="mmu-text">
                    <h2 style="font-size: 3.5rem; margin-bottom: 35px; font-weight: 900; line-height: 1.1;">The <span>"Hospital on Wheels"</span> Network</h2>
                    <p style="font-size: 1.3rem; opacity: 0.95; line-height: 1.8; margin-bottom: 45px;">
                        Our Mobile Medical Units (MMUs) are fully-equipped clinical vans that travel to the deep interior of India's hinterlands. Each van is staffed with a doctor, a nurse, and a pharmacist, bringing a mini-hospital directly to the village doorsteps.
                    </p>
                    <a href="#sponsor" class="btn-health" style="background: white; color: var(--health-primary);">Sponsor a Van Route</a>
                </div>
                <div class="mmu-items">
                    <div class="mmu-item">
                        <i class="fas fa-microscope" style="font-size: 2.8rem; margin-bottom: 15px; color: var(--health-secondary);"></i>
                        <h5 style="font-weight: 900;">On-spot Labs</h5>
                    </div>
                    <div class="mmu-item">
                        <i class="fas fa-satellite-dish" style="font-size: 2.8rem; margin-bottom: 15px; color: var(--health-secondary);"></i>
                        <h5 style="font-weight: 900;">Telemedicine</h5>
                    </div>
                    <div class="mmu-item">
                        <i class="fas fa-baby-carriage" style="font-size: 2.8rem; margin-bottom: 15px; color: var(--health-secondary);"></i>
                        <h5 style="font-weight: 900;">ANC Kits</h5>
                    </div>
                    <div class="mmu-item">
                        <i class="fas fa-droplet" style="font-size: 2.8rem; margin-bottom: 15px; color: var(--health-secondary);"></i>
                        <h5 style="font-weight: 900;">Blood Checks</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. VITAL STATS RIBBON -->
    <section class="stats-ribbon">
        <div class="container" style="display: block;">
             <div class="stats-flex">
                <div class="stat-item">
                    <h4>500k+</h4>
                    <p>Patients Treated</p>
                </div>
                <div class="stat-item">
                    <h4>25k+</h4>
                    <p>Immersion Camps</p>
                </div>
                <div class="stat-item">
                    <h4>98%</h4>
                    <p>Recovery Rate</p>
                </div>
                <div class="stat-item">
                    <h4>12</h4>
                    <p>States Covered</p>
                </div>
             </div>
        </div>
    </section>

    <!-- 7. COMMUNITY GOVERNANCE (ASHA Focus) -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="health-split" style="flex-direction: row-reverse;">
                <div class="health-content">
                    <h2 style="font-size: 3.2rem; color: var(--health-primary); font-weight: 900; margin-bottom: 35px;">Empowering Village <span>Health Warriors</span></h2>
                    <p style="color: #444; font-size: 1.25rem; line-height: 1.8;">
                        Our "Health Guardians" program trains local women as frontline healthcare providers. By equipping ASHA workers with digital diagnostic tools and advanced first-aid training, we ensure 24/7 medical vigilance in every cluster.
                    </p>
                    <ul style="list-style: none; margin-top: 50px;">
                        <li style="margin-bottom: 25px; font-weight: 700; color: #333;"><i class="fas fa-shield-virus" style="color: var(--health-secondary); margin-right: 15px; font-size: 1.3rem;"></i> 100% Vaccination Compliance Audits</li>
                        <li style="margin-bottom: 25px; font-weight: 700; color: #333;"><i class="fas fa-house-medical-circle-check" style="color: var(--health-secondary); margin-right: 15px; font-size: 1.3rem;"></i> Last-Mile Medicine Tracking System</li>
                        <li style="margin-bottom: 25px; font-weight: 700; color: #333;"><i class="fas fa-users-medical" style="color: var(--health-secondary); margin-right: 15px; font-size: 1.3rem;"></i> Village Health & Sanitation Councils</li>
                    </ul>
                </div>
                <div class="health-image">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/educating-slum-children.jpg" alt="ASHA workers training" style="box-shadow: -40px 40px 0 var(--health-soft);">
                </div>
            </div>
        </div>
    </section>

    <!-- 8. RECOVERY STORY -->
    <section class="recovery-story" style="background: var(--health-light);">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2 style="font-size: 3.2rem; font-weight: 900;">A Pulse <span>Restored</span></h2>
            </div>
            <div class="story-wrapper">
                <div class="story-visual">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/senior-citizen-care.jpg" alt="Patient Recovery">
                </div>
                <div class="story-data">
                    <i class="fas fa-quote-left" style="font-size: 4.5rem; color: var(--health-soft); margin-bottom: 40px; display: block;"></i>
                    <h2>Meena's Miracle Mid-Road</h2>
                    <p>"When I went into early labor in our remote forest hamlet, we thought we would lose the baby. Our village Health Warrior called the MMU. Within 30 minutes, the clinical van arrived with a specialized incubator. Today, my son is a healthy toddler."</p>
                    <p style="font-weight: 900; color: var(--health-accent); margin-top: 40px; letter-spacing: 3px; text-transform: uppercase; font-size: 1.1rem;">— Meena Devi, Project Beneficiary</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. PARAMEDIC TRAINING LABS -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div style="text-align: center; margin-bottom: 100px;">
                <h2 style="font-size: 3.5rem; color: var(--health-primary); font-weight: 900;">Developing rural <span>clinical talent</span>.</h2>
                <p style="max-width: 900px; margin: 30px auto 0; font-size: 1.3rem; color: #555;">We don't just provide care; we build careers. Our skill labs certify village youth as paramedics and dialysis technicians.</p>
            </div>
            <div class="training-grid">
                <div class="training-card" style="background-image: url('<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg');">
                    <div class="training-info">
                        <h4>First Response Academy</h4>
                        <p>Intensive certification for immediate emergency and trauma management.</p>
                    </div>
                </div>
                <div class="training-card" style="background-image: url('<?php echo BASE_URL; ?>assets/frontend/persons-with-disabilites.jpg');">
                    <div class="training-info">
                        <h4>Laboratory Technicians</h4>
                        <p>Training local youth to operate blood testing and diagnostic equipment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. SPONSORSHIP TIERS -->
    <section id="sponsor" class="section-padding" style="background: var(--health-light);">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2 style="font-size: 3.5rem; font-weight: 900;">Sponsor a <span>Healing Touch</span></h2>
                <p style="margin-top: 30px; font-size: 1.25rem; color: #444;">Your contribution funds life-saving medicines and outreach logistics.</p>
            </div>
            <div class="tier-grid">
                <div class="tier-card">
                    <div class="tier-circle">₹</div>
                    <h4 style="font-size: 1.8rem; font-weight: 900; color: var(--health-primary);">Primary Medical Kit</h4>
                    <p style="margin: 25px 0; color: #666;">Covers free essential medicines for 20 patients in one clinical trip.</p>
                    <a href="#" class="btn-health" style="font-size: 0.85rem; padding: 18px 45px;">Donate ₹5,000</a>
                </div>
                <div class="tier-card" style="border: 2px solid var(--health-secondary); scale: 1.05; background: #fffcfc;">
                    <div class="tier-circle" style="background: var(--health-accent); color: white;"><i class="fas fa-heart-pulse"></i></div>
                    <h4 style="font-size: 1.8rem; font-weight: 900; color: var(--health-primary);">Sponsor a Surgery</h4>
                    <p style="margin: 25px 0; color: #666;">Funds a life-altering surgery for a child or senior from a tribal zone.</p>
                    <a href="#" class="btn-health" style="font-size: 0.85rem; padding: 18px 45px;">Donate ₹15,000</a>
                </div>
                <div class="tier-card">
                    <div class="tier-circle"><i class="fas fa-truck-moving"></i></div>
                    <h4 style="font-size: 1.8rem; font-weight: 900; color: var(--health-primary);">MMU Fuel Link</h4>
                    <p style="margin: 25px 0; color: #666;">Covers the operational fuel cost of one clinical van for a full month.</p>
                    <a href="#" class="btn-health" style="font-size: 0.85rem; padding: 18px 45px;">Donate ₹30,000</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. PARTNERSHIP BANNER (CSR) -->
    <section class="section-padding" style="border-top: 1px solid #eefaff; background: #fff;">
        <div class="container" style="display: block; text-align: center;">
             <h2 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 35px; color: var(--health-primary);">Scaling <span>Corporate Compassion</span></h2>
             <p style="margin: 0 auto 60px; max-width: 900px; font-size: 1.4rem; line-height: 1.8; color: #555; font-weight: 300;">Adopt a district-wide health transformation. Our "Medical District" model provides full clinical coverage to over 100,000 residents through your CSR initiatives.</p>
             <a href="#" class="btn-health">Download Corporate Brochure</a>
        </div>
    </section>

    <!-- 12. FINAL CALL TO ACTION -->
    <section style="background: var(--health-primary); padding: 120px 0; text-align: center; color: white;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 4rem; font-weight: 900; margin-bottom: 35px; line-height: 1.1;">Every <span>Heartbeat</span> Matters.</h2>
            <p style="font-size: 1.6rem; margin-bottom: 60px; opacity: 0.9; font-weight: 200;">Join us in our relentless pursuit of an India where no child dies for want of medicine.</p>
            <a href="#" class="btn-health" style="background: var(--health-accent); font-size: 1.2rem; padding: 25px 80px;">Become a Health Partner Today</a>
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
