<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swachh Bharat Mission | The Global Rise Foundation</title>
    <meta name="description" content="Join The Global Rise Foundation in our commitment to a cleaner, healthier India. Swachh Bharat Mission - more than a project, a national responsibility.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Professional & Hygienic Design Style -->
    <style>
        :root {
            --clean-primary: #0077B6; /* Oceanic Blue */
            --clean-secondary: #00B4D8; /* Sky Blue */
            --clean-accent: #2D6A4F; /* Deep Forest Green */
            --clean-bright: #90E0EF; /* Ice Blue */
            --clean-light: #F0F9FF; /* Near White Blue */
            --white: #ffffff;
            --text-dark: #1D3557;
        }

        /* Hero Styling */
        .swachh-hero {
            height: 85vh;
            background: linear-gradient(rgba(0, 119, 182, 0.7), rgba(0, 119, 182, 0.4)), url('<?php echo BASE_URL; ?>assets/frontend/rural-about.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }
        .swachh-hero-content {
            max-width: 900px;
            margin: 0 auto;
        }
        .swachh-hero h1 {
            font-size: 4.5rem;
            font-weight: 900;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: -1px;
        }
        .swachh-hero p {
            font-size: 1.4rem;
            margin-bottom: 40px;
            opacity: 0.9;
            font-weight: 300;
        }

        .section-padding { padding: 100px 0; }
        .bg-clean { background-color: var(--clean-light); }
        
        .section-header {
            text-align: center;
            margin-bottom: 70px;
        }
        .section-header h2 {
            font-size: 3rem;
            color: var(--clean-primary);
            font-weight: 800;
            margin-bottom: 20px;
        }
        .section-header .line {
            width: 100px;
            height: 4px;
            background: var(--clean-secondary);
            margin: 0 auto;
        }

        /* Program Cards */
        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }
        .program-card {
            background: white;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            text-align: center;
            border: 1px solid #f0f0f0;
        }
        .program-card:hover {
            transform: translateY(-10px);
            border-color: var(--clean-secondary);
        }
        .program-icon {
            font-size: 3rem;
            color: var(--clean-secondary);
            margin-bottom: 25px;
            display: block;
        }
        .program-card h3 {
            font-size: 1.5rem;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        /* Large Feature section */
        .feature-split {
            display: flex;
            align-items: center;
            gap: 80px;
            margin-bottom: 120px;
        }
        .feature-info { flex: 1.2; }
        .feature-img { flex: 1; }
        .feature-img img { width: 100%; border-radius: 20px; box-shadow: 20px 20px 0 var(--clean-bright); }

        /* Stats Section */
        .stats-blue {
            background-color: var(--clean-primary);
            color: white;
            padding: 80px 0;
            border-radius: 50px;
            margin: 0 20px;
        }
        .stats-flex {
            display: flex;
            justify-content: space-around;
            text-align: center;
            flex-wrap: wrap;
            gap: 40px;
        }
        .stat-item h4 { font-size: 3.5rem; color: var(--clean-bright); margin-bottom: 5px; font-weight: 900; }
        .stat-item p { font-size: 1rem; opacity: 0.8; text-transform: uppercase; letter-spacing: 2px; }

        /* Interactive Process */
        .process-row {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-top: 50px;
            flex-wrap: wrap;
            gap: 30px;
        }
        .process-row::before {
            content: '';
            position: absolute;
            top: 40px; left: 0; width: 100%; height: 2px;
            background: #eee;
            z-index: -1;
        }
        .process-step {
            text-align: center;
            flex: 1;
            min-width: 150px;
        }
        .step-num {
            width: 80px; height: 80px;
            background: white;
            border: 4px solid var(--clean-secondary);
            color: var(--clean-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0 auto 20px;
        }

        /* Buttons */
        .btn-swachh {
            background: var(--clean-primary);
            color: white;
            padding: 18px 45px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 119, 182, 0.2);
        }
        .btn-swachh:hover { background: var(--clean-secondary); transform: translateY(-3px); }

        @media (max-width: 992px) {
            .swachh-hero h1 { font-size: 2.8rem; }
            .feature-split { flex-direction: column; gap: 40px; }
            .process-row::before { display: none; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="swachh-hero">
        <div class="container" style="display: block;">
            <div class="swachh-hero-content">
                <h1>Swachh Bharat <span>Mission</span></h1>
                <p>Cleanliness is next to Godliness. Join our movement for a waste-free, hygienic, and sustainable India.</p>
                <div style="display: flex; gap: 20px; justify-content: center;">
                    <a href="#volunteer" class="btn-swachh">Take the Pledge</a>
                    <a href="#programs" class="btn-swachh" style="background:transparent; border:2px solid white;">Active Programs</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. NATIONAL MANDATE -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>A Cleaner India <span>Starts Here</span></h2>
                <div class="line"></div>
                <p style="margin-top: 30px; font-size: 1.25rem; color: #555;">The Swachh Bharat Mission (SBM) is India's largest hygiene and sanitation movement. At Global Rise Foundation, we align our efforts to drive grassroots change in waste management, toilet accessibility, and public hygiene awareness.</p>
            </div>
        </div>
    </section>

    <!-- 3. THE WASTE CRISIS -->
    <section class="section-padding bg-clean">
        <div class="container" style="display: block;">
            <div class="feature-split">
                <div class="feature-info">
                    <h2 style="font-size: 2.5rem; color: var(--clean-primary); margin-bottom: 25px;">The Sanitation Crisis</h2>
                    <p style="line-height: 1.8; color: #555; margin-bottom: 30px;">
                        India generates over 62 million tons of waste annually. Without proper segregation and management, this waste ends up in landfills, polluting our groundwater and air.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="background: white; padding: 25px; border-radius: 15px;">
                            <h4 style="color: #e63946;"><i class="fas fa-trash-can"></i> Mismanaged Waste</h4>
                            <p style="font-size: 0.9rem; color: #777;">Over 45% of urban waste remains untreated.</p>
                        </div>
                        <div style="background: white; padding: 25px; border-radius: 15px;">
                            <h4 style="color: #e63946;"><i class="fas fa-biohazard"></i> Health Impact</h4>
                            <p style="font-size: 0.9rem; color: #777;">Poor sanitation causes thousands of preventable diseases daily.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-img">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg" alt="Waste Crisis">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE PROGRAMS -->
    <section id="programs" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Mission <span>Programs</span></h2>
                <p>Strategic interventions targeted at different sectors of society.</p>
            </div>
            
            <div class="program-grid">
                <div class="program-card">
                    <i class="fas fa-building program-icon"></i>
                    <h3>Urban Waste Mgmt</h3>
                    <p>Redefining waste collection in urban hubs through door-to-door segregation and smart collection systems.</p>
                </div>
                <div class="program-card">
                    <i class="fas fa-tractor program-icon"></i>
                    <h3>Rural Sanitation</h3>
                    <p>Focusing on ODF Plus status by providing sustainable community toilets and liquid waste management in villages.</p>
                </div>
                <div class="program-card">
                    <i class="fas fa-recycle program-icon"></i>
                    <h3>Plastic Neutrality</h3>
                    <p>Recovering and recycling single-use plastics from coastal and urban areas to prevent environmental damage.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. STATS SUMMARY -->
    <section class="stats-blue">
        <div class="container" style="display: block;">
            <div class="stats-flex">
                <div class="stat-item">
                    <h4>500+</h4>
                    <p>Villages ODF+</p>
                </div>
                <div class="stat-item">
                    <h4>50k+</h4>
                    <p>Toilets Built</p>
                </div>
                <div class="stat-item">
                    <h4>100T</h4>
                    <p>Plastic Recycled</p>
                </div>
                <div class="stat-item">
                    <h4>1M+</h4>
                    <p>Lives Impacted</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. THE PROCESS -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>How We <span>Implement</span></h2>
                <p>A systematic 4-step approach to community cleanliness.</p>
            </div>
            
            <div class="process-row">
                <div class="process-step">
                    <div class="step-num">01</div>
                    <h4>Sensitization</h4>
                    <p style="font-size: 0.9rem; color: #777;">Educating communities on the importance of hygiene.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">02</div>
                    <h4>Infrastructure</h4>
                    <p style="font-size: 0.9rem; color: #777;">Setting up collection points and sanitation blocks.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">03</div>
                    <h4>Management</h4>
                    <p style="font-size: 0.9rem; color: #777;">Daily operations of waste segregation and composting.</p>
                </div>
                <div class="process-step">
                    <div class="step-num">04</div>
                    <h4>Sustainability</h4>
                    <p style="font-size: 0.9rem; color: #777;">Handing over management to local community committees.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. RECYCLING INNOVATION -->
    <section class="section-padding bg-clean">
        <div class="container" style="display: block;">
            <div class="feature-split" style="flex-direction: row-reverse;">
                 <div class="feature-info">
                    <h2 style="font-size: 2.5rem; color: var(--clean-primary); margin-bottom: 25px;">Innovation in Recycling</h2>
                    <p style="line-height: 1.8; color: #555;">
                        We use advanced composting technologies and plastic-to-fuel conversion processes to ensure that waste becomes a resource. Our "Waste to Wealth" centers empower local women by training them in upcycling products from discarded materials.
                    </p>
                    <ul style="list-style: none; margin-top: 30px;">
                        <li style="margin-bottom: 12px;"><i class="fas fa-check-circle" style="color: var(--clean-secondary);"></i> Mechanical Aerobic Composting</li>
                        <li style="margin-bottom: 12px;"><i class="fas fa-check-circle" style="color: var(--clean-secondary);"></i> Plastic Shredding & Paving</li>
                        <li style="margin-bottom: 12px;"><i class="fas fa-check-circle" style="color: var(--clean-secondary);"></i> Biogas Generation from Wet Waste</li>
                    </ul>
                </div>
                <div class="feature-img">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/animal-welfare.jpg" alt="Innovation">
                </div>
            </div>
        </div>
    </section>

    <!-- 8. BEHAVIORAL CHANGE -->
    <section class="section-padding">
        <div class="container" style="display: block; text-align: center;">
             <h2 style="color: var(--clean-primary); margin-bottom: 30px;">Changing <span>Mindsets</span></h2>
             <p style="max-width: 800px; margin: 0 auto 50px; line-height: 1.8; color: #555;">Cleanliness is a habit, not just an act. We conduct street plays, school workshops, and door-to-door awareness drives to eliminate open defecation and littering permanently.</p>
             <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div style="background: url('<?php echo BASE_URL; ?>assets/frontend/rural-children-education.jpg') center/cover; height: 300px; border-radius: 20px; display: flex; align-items: flex-end; padding: 30px;">
                    <div style="background: rgba(255,255,255,0.9); padding: 20px; border-radius: 10px; width: 100%;">
                        <h4>School Hygiene Clubs</h4>
                    </div>
                </div>
                <div style="background: url('<?php echo BASE_URL; ?>assets/frontend/Girl-Child-Education.jpg') center/cover; height: 300px; border-radius: 20px; display: flex; align-items: flex-end; padding: 30px;">
                    <div style="background: rgba(255,255,255,0.9); padding: 20px; border-radius: 10px; width: 100%;">
                        <h4>Nukkad Natak (Street Plays)</h4>
                    </div>
                </div>
             </div>
        </div>
    </section>

    <!-- 9. SUCCESS STORY -->
    <section class="section-padding bg-clean">
        <div class="container" style="display: block;">
            <div style="background: white; border-radius: 30px; padding: 60px; box-shadow: 0 20px 50px rgba(0,0,0,0.05); text-align: center;">
                <i class="fas fa-quote-left" style="font-size: 3rem; color: var(--clean-bright); margin-bottom: 25px;"></i>
                <h3 style="color: var(--clean-primary); margin-bottom: 20px;">The Clean Village Initiative</h3>
                <p style="font-size: 1.25rem; font-style: italic; line-height: 1.7; color: #555; max-width: 800px; margin: 0 auto 30px;">
                    "Our village used to have open drains and piles of plastic. Global Rise Foundation helped us set up a community waste unit. Today, our village earns revenue by selling organic compost produced from our own waste."
                </p>
                <p style="font-weight: 800; color: var(--clean-accent);">— Sarpanch of Mukhligadh Village</p>
            </div>
        </div>
    </section>

    <!-- 10. PLASTIC-FREE ZONES -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="feature-split">
                <div class="feature-info">
                   <h2 style="font-size: 2.5rem; color: var(--clean-primary); margin-bottom: 25px;">Plastic-Free Corridors</h2>
                   <p style="line-height: 1.8; color: #555;">
                       We are creating "Plastic-Free Corridors" in major tourist spots and religious cities. By installing smart recycling bins and providing alternatives to single-use plastics, we are preserving the heritage and ecology of these sites.
                   </p>
                   <a href="#" class="btn-swachh" style="margin-top: 30px;">Support a Corridor</a>
                </div>
                <div class="feature-img">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/educating-slum-children.jpg" alt="Plastic Free">
                </div>
            </div>
        </div>
    </section>

    <!-- 11. PARTNERSHIP -->
    <section id="volunteer" class="section-padding bg-clean" style="border-radius: 100px 0;">
        <div class="container" style="display: block;">
             <div class="section-header">
                <h2>Partner in <span>Cleanliness</span></h2>
                <p>Join forces with us to scale up our sanitation operations.</p>
             </div>
             <div class="program-grid">
                <div class="program-card">
                    <h4>Volunteer</h4>
                    <p>Participate in weekend cleaning drives and awareness rallies.</p>
                    <a href="#" class="btn-swachh" style="width: 100%; margin-top: 20px;">Sign Up</a>
                </div>
                <div class="program-card" style="border-color: var(--clean-secondary);">
                    <h4>Corporate CSR</h4>
                    <p>Adopt a district for comprehensive solid waste management.</p>
                    <a href="#" class="btn-swachh" style="width: 100%; margin-top: 20px;">Inquire CSR</a>
                </div>
                <div class="program-card">
                    <h4>Community Lead</h4>
                    <p>Start a "Global Clean" club in your neighborhood or school.</p>
                    <a href="#" class="btn-swachh" style="width: 100%; margin-top: 20px;">Start Now</a>
                </div>
             </div>
        </div>
    </section>

    <!-- 12. FINAL CALL TO ACTION -->
    <section style="background: linear-gradient(135deg, var(--clean-primary), var(--clean-secondary)); padding: 100px 0; text-align: center; color: white;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 3rem; margin-bottom: 30px; font-weight: 800;">A Clean India is a Prosperous India.</h2>
            <p style="font-size: 1.4rem; margin-bottom: 40px; opacity: 0.9;">Will you be the change you want to see? Take the Swachhata Pledge today.</p>
            <a href="#" class="btn-swachh" style="background: var(--white); color: var(--clean-primary); font-size: 1.2rem;">Take the Pledge Now</a>
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
