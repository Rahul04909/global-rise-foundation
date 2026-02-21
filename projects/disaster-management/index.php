<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Management | The Global Rise Foundation</title>
    <meta name="description" content="Global Rise Foundation's Disaster Management program: rapid response, relief, and rehabilitation in times of crisis.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Professional Design Styles for Disaster Management -->
    <style>
        :root {
            --disaster-accent: #E63946;
            --disaster-dark: #1D3557;
            --disaster-muted: #457B9D;
            --white: #ffffff;
        }

        /* Hero Styling */
        .dm-hero {
            height: 90vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }
        .dm-hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }
        .dm-hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin: 0 auto 30px;
            font-weight: 300;
        }

        .section-padding { padding: 100px 0; }
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--disaster-dark);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        .section-title span { color: var(--disaster-accent); }

        /* Pillars Section */
        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        .pillar-card {
            background: white;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border-bottom: 5px solid transparent;
        }
        .pillar-card:hover {
            transform: translateY(-10px);
            border-bottom-color: var(--disaster-accent);
        }
        .pillar-icon {
            width: 70px;
            height: 70px;
            background: rgba(230, 57, 70, 0.1);
            color: var(--disaster-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 25px;
        }
        .pillar-card h3 { margin-bottom: 15px; color: var(--disaster-dark); }
        .pillar-card p { color: #666; line-height: 1.6; }

        /* Rapid Response Action */
        .action-container {
            display: flex;
            background: var(--disaster-dark);
            color: white;
            border-radius: 20px;
            overflow: hidden;
        }
        .action-content { flex: 1; padding: 60px; }
        .action-image { flex: 1; background: url('<?php echo BASE_URL; ?>assets/pages/disaster-management-hero-banners.webp') center/cover; }
        .action-content h2 { font-size: 2.2rem; margin-bottom: 20px; }
        .action-list { list-style: none; margin-top: 30px; }
        .action-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .action-list i { color: var(--disaster-accent); font-size: 1.2rem; }

        /* Counters */
        .stat-banner {
            background: #f8f9fa;
            border-top: 1px solid #eee;
        }
        .stats-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            text-align: center;
            gap: 40px;
        }
        .stat-item .num { font-size: 3rem; font-weight: 800; color: var(--disaster-accent); }
        .stat-item .label { color: #555; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; margin-top: 10px; }

        /* Process Steps */
        .process-flow {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            position: relative;
        }
        .step { flex: 1; text-align: center; padding: 0 15px; position: relative; }
        .step-num {
            width: 50px;
            height: 50px;
            background: var(--disaster-muted);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-weight: 700;
            font-size: 1.2rem;
            z-index: 2;
        }
        .step h4 { margin-bottom: 10px; color: var(--disaster-dark); }
        .step p { font-size: 0.9rem; color: #666; }

        /* Help Section */
        .help-banner {
            background-color: var(--disaster-accent);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .help-banner h2 { font-size: 2.5rem; margin-bottom: 25px; }
        .btn-white {
            background: white;
            color: var(--disaster-accent);
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .btn-white:hover { transform: scale(1.05); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }

        @media (max-width: 768px) {
            .dm-hero h1 { font-size: 2.5rem; }
            .dm-hero p { font-size: 1.1rem; }
            .action-container { flex-direction: column; }
            .action-image { height: 300px; }
            .process-flow { flex-direction: column; gap: 40px; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="dm-hero">
        <div class="container" style="flex-direction: column;">
            <h1>Saving Lives & Restoring Hope</h1>
            <p>Rapid response, humanitarian aid, and long-term recovery for communities struck by disasters across India.</p>
            <div style="display: flex; gap: 15px; justify-content: center;">
                <a href="#how-we-help" class="btn-donate">Donate to Relief</a>
                <a href="#rapid-response" class="btn-donate" style="background:transparent; border-color:white; color:white;">Our Readiness</a>
            </div>
        </div>
    </section>

    <!-- 2. OUR MANDATE -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-title">
                <h2>Our <span>Mission</span> in Crisis</h2>
                <p style="max-width: 800px; margin: 0 auto; color: #666; line-height: 1.8;">
                    When disaster strikes, every second counts. The Global Rise Foundation is committed to being the first on the ground, 
                    providing essential life-saving assistance, clinical support, and restorative aid to the most vulnerable.
                </p>
            </div>
        </div>
    </section>

    <!-- 3. INTERVENTION PILLARS -->
    <section class="section-padding" style="background: #fdfdfd;">
        <div class="container" style="display: block;">
            <div class="pillars-grid">
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Rapid Response</h3>
                    <p>Deploying specialized emergency teams within 24-48 hours of a disaster notice to initiate rescue operations.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fas fa-parachute-box"></i></div>
                    <h3>Essential Relief</h3>
                    <p>Distribution of vital resources including clean water, food supplies, hygiene kits, and emergency shelters.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fas fa-heart-pulse"></i></div>
                    <h3>Medical Aid</h3>
                    <p>Setting up mobile medical camps and providing psychological support to survivors of natural disasters.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fas fa-screwdriver-wrench"></i></div>
                    <h3>Rehabilitation</h3>
                    <p>Long-term commitment to rebuilding homes, livelihoods, and schools to restore normalcy in affected areas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. RAPID RESPONSE (Visual Focus) -->
    <section id="rapid-response" class="section-padding">
        <div class="container" style="display: block;">
            <div class="action-container">
                <div class="action-content">
                    <h2>24/7 Readiness Mechanism</h2>
                    <p>Our disaster unit remains on high alert throughout the year, monitored by our central emergency desk.</p>
                    <ul class="action-list">
                        <li><i class="fas fa-check-circle"></i> Early Warning Systems for Flood & Cyclones</li>
                        <li><i class="fas fa-check-circle"></i> Stockpiled Relief Warehouses in Strategic Hubs</li>
                        <li><i class="fas fa-check-circle"></i> Specialized Search & Rescue Personnel</li>
                        <li><i class="fas fa-check-circle"></i> Local Volunteer Networks in Vulnerable States</li>
                    </ul>
                </div>
                <div class="action-image"></div>
            </div>
        </div>
    </section>

    <!-- 5. IMPACT STATS -->
    <section class="section-padding stat-banner">
        <div class="container" style="display: block;">
            <div class="stats-wrapper">
                <div class="stat-item">
                    <div class="num">25+</div>
                    <div class="label">Major Missions</div>
                </div>
                <div class="stat-item">
                    <div class="num">100k+</div>
                    <div class="label">Families Helped</div>
                </div>
                <div class="stat-item">
                    <div class="num">1.2M</div>
                    <div class="label">Meals Distributed</div>
                </div>
                <div class="stat-item">
                    <div class="num">10</div>
                    <div class="label">States Reached</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. THE PROCESS (Infographic style) -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-title">
                <h2>Our <span>Response</span> Lifecycle</h2>
            </div>
            <div class="process-flow">
                <div class="step">
                    <div class="step-num">01</div>
                    <h4>Detection</h4>
                    <p>Monitoring climate data and news alerts globally.</p>
                </div>
                <div class="step" style="border-top: none;">
                    <div class="step-num">02</div>
                    <h4>Assessment</h4>
                    <p>Ground-level evaluation of immediate needs.</p>
                </div>
                <div class="step">
                    <div class="step-num">03</div>
                    <h4>Deployment</h4>
                    <p>Dispatching relief materials and rescue teams.</p>
                </div>
                <div class="step">
                    <div class="step-num">04</div>
                    <h4>Restoration</h4>
                    <p>Commencing long-term community rebuilding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. COMMUNITY TRAINING -->
    <section class="section-padding" style="background-color: #f0f4f8;">
        <div class="container" style="display: block;">
             <div style="display: flex; gap: 50px; align-items: center; flex-wrap: wrap;">
                <div style="flex: 1; min-width: 300px;">
                    <h2 style="font-size: 2.2rem; margin-bottom: 20px; color: var(--disaster-dark);">Community Resilience Training</h2>
                    <p style="color: #555; line-height: 1.7; margin-bottom: 20px;">
                        The best way to manage a disaster is to be prepared. We conduct specialized training for local youth and communities on:
                    </p>
                    <ul class="action-list" style="color: #333;">
                        <li><i class="fas fa-chevron-right"></i> Basic First Aid & CPR</li>
                        <li><i class="fas fa-chevron-right"></i> Emergency Evacuation Drills</li>
                        <li><i class="fas fa-chevron-right"></i> Managing Emergency Resources</li>
                    </ul>
                </div>
                <div style="flex: 1; min-width: 300px;">
                    <img src="<?php echo BASE_URL; ?>assets/pages/mock-drill.jpg" alt="Training" style="width: 100%; border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.1);">
                </div>
             </div>
        </div>
    </section>

    <!-- 8. JOIN THE MISSION -->
    <section class="section-padding">
        <div class="container" style="display: block; text-align: center;">
            <div class="section-title" style="margin-bottom: 40px;">
                <h2>Support Our <span>Preparedness</span></h2>
                <p>Help us stay ready. Your contribution builds the reserves that save lives during the first 24 hours of any crisis.</p>
            </div>
            <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
                 <div style="padding: 30px; border: 1px solid #ddd; border-radius: 15px; max-width: 400px; text-align: left;">
                    <h3 style="margin-bottom: 15px;"><i class="fas fa-handshake-angle" style="color: var(--disaster-accent);"></i> Become a Partner</h3>
                    <p style="font-size: 0.95rem; color: #666; margin-bottom: 20px;">Corporate or institutional partnership for disaster management and CSR initiatives.</p>
                    <a href="#" class="btn-donate" style="width: 100%; text-align: center;">Enquire Now</a>
                 </div>
                 <div style="padding: 30px; border: 1px solid #ddd; border-radius: 15px; max-width: 400px; text-align: left;">
                    <h3 style="margin-bottom: 15px;"><i class="fas fa-user-shield" style="color: var(--disaster-accent);"></i> Disaster Volunteer</h3>
                    <p style="font-size: 0.95rem; color: #666; margin-bottom: 20px;">Join our rapid response network. Get trained and be ready to deploy when needed.</p>
                    <a href="#" class="btn-donate" style="width: 100%; text-align: center;">Sign Up</a>
                 </div>
            </div>
        </div>
    </section>

    <!-- 9. CALL TO ACTION BANNER -->
    <section id="how-we-help" class="help-banner">
        <div class="container" style="display: block;">
            <h2>Be the Light in Someone's Darkest Hour</h2>
            <p style="margin-bottom: 40px;">Every contribution helps us stock up medicine, food, and life-saving kits.</p>
            <a href="#" class="btn-white">Donate to Emergency Fund</a>
        </div>
    </section>

    <?php include(BASE_URL . 'includes/footer.php'); ?>

    <script>
        // Smooth scroll for anchors
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
