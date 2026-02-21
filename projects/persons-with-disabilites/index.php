<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persons with Disabilities | The Global Rise Foundation</title>
    <meta name="description" content="Empowering persons with disabilities through inclusive education, vocational training, and assistive technology. Helping build an accessible India.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Unique Professional Design for PWD Page -->
    <style>
        :root {
            --pwd-primary: #006D77; /* Deep Teal */
            --pwd-secondary: #83C5BE; /* Mint */
            --pwd-accent: #E29578; /* Coral Accent */
            --pwd-dark: #232931;
            --pwd-light: #EDF6F9;
            --white: #ffffff;
        }

        /* Hero Section */
        .pwd-hero {
            height: 90vh;
            background: linear-gradient(rgba(0, 109, 119, 0.8), rgba(0, 109, 119, 0.4)), url('<?php echo BASE_URL; ?>assets/frontend/persons-disabilites.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            clip-path: ellipse(150% 100% at 50% 0%);
        }
        .pwd-hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 25px;
            max-width: 800px;
        }
        .pwd-hero p {
            font-size: 1.4rem;
            max-width: 600px;
            margin-bottom: 40px;
            line-height: 1.6;
            font-weight: 300;
        }

        .section-padding { padding: 100px 0; }
        .section-header { margin-bottom: 60px; }
        .section-header h2 {
            font-size: 3rem;
            color: var(--pwd-dark);
            margin-bottom: 20px;
            font-weight: 700;
        }
        .section-header .underline {
            width: 80px;
            height: 5px;
            background: var(--pwd-accent);
            display: block;
        }

        /* Features/Pillars */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        .feature-card {
            background: var(--white);
            padding: 50px 40px;
            border-radius: 5px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .feature-card:hover {
            box-shadow: 0 15px 45px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 5px; height: 0;
            background: var(--pwd-primary);
            transition: height 0.3s ease;
        }
        .feature-card:hover::before { height: 100%; }
        .feature-icon {
            font-size: 2.5rem;
            color: var(--pwd-primary);
            margin-bottom: 25px;
            display: block;
        }
        .feature-card h3 {
            font-size: 1.5rem;
            color: var(--pwd-dark);
            margin-bottom: 15px;
        }

        /* Split Section */
        .info-split {
            display: flex;
            align-items: center;
            gap: 100px;
            margin-bottom: 150px;
        }
        .info-content { flex: 1; }
        .info-image { flex: 1; position: relative; }
        .info-image img {
            width: 100%;
            border-radius: 5px;
            z-index: 2;
            position: relative;
        }
        .info-image::after {
            content: '';
            position: absolute;
            top: 20px; right: -20px; width: 100%; height: 100%;
            border: 2px solid var(--pwd-secondary);
            z-index: 1;
        }

        /* Accessibility Box */
        .access-box {
            background: var(--pwd-primary);
            color: white;
            padding: 80px;
            border-radius: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
        }
        .access-text { flex: 1.5; }
        .access-items { flex: 1; display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
        .access-item {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            text-align: center;
            border-radius: 10px;
        }

        /* Stats Section */
        .stats-teal {
            background: var(--pwd-light);
            padding: 60px 0;
            border-radius: 150px 0 150px 0;
        }
        .stats-flex {
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        .stat-item h4 { font-size: 3.5rem; color: var(--pwd-primary); margin-bottom: 5px; }
        .stat-item p { color: var(--text-gray); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }

        /* Story Slider Mockup */
        .story-section {
            background: var(--white);
            padding: 120px 0;
        }
        .story-container {
            background: #fdfdfd;
            border-radius: 20px;
            padding: 60px;
            display: flex;
            gap: 50px;
            align-items: center;
            border: 1px solid #eee;
        }
        .story-img { flex: 1; }
        .story-img img { width: 100%; border-radius: 50%; border: 10px solid var(--pwd-light); }
        .story-txt { flex: 2; }
        .story-txt h3 { font-size: 2rem; color: var(--pwd-primary); margin-bottom: 20px; }
        .story-txt p { font-size: 1.2rem; line-height: 1.8; color: #555; font-style: italic; }

        /* Action Steps */
        .step-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        .step-item { text-align: center; }
        .step-circle {
            width: 80px; height: 80px;
            background: var(--pwd-secondary);
            color: var(--pwd-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 800;
            margin: 0 auto 25px;
        }

        /* Buttons */
        .btn-pwd {
            background: var(--pwd-primary);
            color: white;
            padding: 18px 45px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .btn-pwd:hover { background: var(--pwd-dark); transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }

        @media (max-width: 992px) {
            .pwd-hero h1 { font-size: 2.8rem; }
            .info-split { flex-direction: column; gap: 50px; margin-bottom: 80px; }
            .access-box { flex-direction: column; padding: 40px; }
            .story-container { flex-direction: column; text-align: center; padding: 30px; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="pwd-hero">
        <div class="container" style="display: block;">
            <h1>Empowering <span>Abilities</span>, Redefining Limits</h1>
            <p>We believe disability is not inability. Our mission is to build an inclusive society where every individual, regardless of their physical or cognitive challenge, has the opportunity to thrive.</p>
            <div style="display: flex; gap: 20px;">
                <a href="#how-to-help" class="btn-pwd">Support the Cause</a>
                <a href="#vision" class="btn-pwd" style="background:transparent; border: 2px solid white;">Our Inclusive Vision</a>
            </div>
        </div>
    </section>

    <!-- 2. INCLUSION STATEMENT -->
    <section id="vision" class="section-padding">
        <div class="container" style="display: block;">
            <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                <h2 style="font-size: 2.5rem; color: var(--pwd-primary); margin-bottom: 30px;">Architecture of Inclusion</h2>
                <p style="font-size: 1.25rem; line-height: 1.8; color: #555;">
                    The Global Rise Foundation works at the intersection of healthcare, education, and civil rights to ensure that persons with disabilities (PWDs) aren't just integrated into society, but are empowered to lead it. We tackle physical, institutional, and attitudinal barriers.
                </p>
            </div>
        </div>
    </section>

    <!-- 3. THE GAP (The Challenge) -->
    <section class="section-padding" style="background: #fafafa;">
        <div class="container" style="display: block;">
            <div class="info-split">
                <div class="info-content">
                    <div class="section-header">
                        <h2>The Reality of <span>Inaccessibility</span></h2>
                        <span class="underline"></span>
                    </div>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 30px;">
                        Over 26 million people in India live with various forms of disabilities. Yet, a vast majority of public spaces, educational institutions, and workplaces remain inaccessible, leading to social exclusion and economic hardship.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                        <div>
                            <h4 style="color: var(--pwd-primary); margin-bottom: 10px;"><i class="fas fa-exclamation-triangle"></i> Lack of Devices</h4>
                            <p style="font-size: 0.95rem; color: #777;">Access to quality wheelchairs, prosthetics, and hearing aids is limited in rural areas.</p>
                        </div>
                        <div>
                            <h4 style="color: var(--pwd-primary); margin-bottom: 10px;"><i class="fas fa-ban"></i> Physical Barriers</h4>
                            <p style="font-size: 0.95rem; color: #777;">90% of schools and offices lack ramps or disabled-friendly toilets.</p>
                        </div>
                    </div>
                </div>
                <div class="info-image">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/persons-disabilites.jpg" alt="Person with disability being empowered">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. PILLAR: HEALTH & REHAB -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2>Core Intervention <span>Pillars</span></h2>
                <p style="max-width: 700px; margin: 20px auto 0;">Comprehensive support from early detection to lifelong empowerment.</p>
            </div>
            
            <div class="feature-grid">
                <div class="feature-card">
                    <i class="fas fa-hand-holding-medical feature-icon"></i>
                    <h3>Early Intervention</h3>
                    <p>Detecting developmental delays and providing physiotherapy, occupational therapy, and speech therapy for children.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-graduation-cap feature-icon"></i>
                    <h3>Inclusive Education</h3>
                    <p>Training teachers and modifying curricula to ensure students with special needs can learn alongside their peers.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-briefcase feature-icon"></i>
                    <h3>Vocational Skills</h3>
                    <p>Skill-based training in digital arts, accessibility testing, and craft to enable financial independence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. ASSISTIVE TECH (High Impact) -->
    <section class="section-padding" style="background: var(--pwd-dark);">
        <div class="container" style="display: block;">
            <div class="access-box">
                <div class="access-text">
                    <h2 style="font-size: 2.8rem; margin-bottom: 25px;">Mobility & <span>Autonomy</span></h2>
                    <p style="font-size: 1.1rem; opacity: 0.9; margin-bottom: 30px;">
                        Technology is the great equalizer. We distribute and maintain smart-sticks, specialized wheelchairs, braille kits, and hearing aids to thousands of individuals annually.
                    </p>
                    <a href="#" class="btn-pwd" style="background: var(--pwd-accent);">Sponsor a Device</a>
                </div>
                <div class="access-items">
                    <div class="access-item">
                        <i class="fas fa-wheelchair" style="font-size: 2rem; margin-bottom: 15px;"></i>
                        <h5>Customized Chairs</h5>
                    </div>
                    <div class="access-item">
                        <i class="fas fa-ear-listen" style="font-size: 2rem; margin-bottom: 15px;"></i>
                        <h5>Smart Hearing</h5>
                    </div>
                    <div class="access-item">
                        <i class="fas fa-eye-slash" style="font-size: 2rem; margin-bottom: 15px;"></i>
                        <h5>Braille Kits</h5>
                    </div>
                    <div class="access-item">
                        <i class="fas fa-microchip" style="font-size: 2rem; margin-bottom: 15px;"></i>
                        <h5>Assistive Apps</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. IMPACT STATS -->
    <section class="stats-teal">
        <div class="container" style="display: block;">
             <div class="stats-flex">
                <div class="stat-item">
                    <h4>15k+</h4>
                    <p>Devices Distributed</p>
                </div>
                <div class="stat-item">
                    <h4>250+</h4>
                    <p>Inclusive Schools</p>
                </div>
                <div class="stat-item">
                    <h4>5k+</h4>
                    <p>PWDs Employed</p>
                </div>
                <div class="stat-item">
                    <h4>50+</h4>
                    <p>States Advocacy</p>
                </div>
             </div>
        </div>
    </section>

    <!-- 7. ADVOCACY & RIGHTS -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="info-split" style="flex-direction: row-reverse;">
                <div class="info-content">
                    <h2>Advocating for <span>Systemic Change</span></h2>
                    <p style="color: #666; line-height: 1.8; margin-top: 25px;">
                        Empowerment is incomplete without rights. We work with policymakers to enforce the Rights of Persons with Disabilities Act (2016) and ensure accessibility is built into the blueprint of our cities.
                    </p>
                    <ul style="list-style: none; margin-top: 30px;">
                        <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--pwd-primary); margin-right: 15px;"></i> Legal Aid for Disability Rights</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--pwd-primary); margin-right: 15px;"></i> Accessibility Audits for Corp Buildings</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--pwd-primary); margin-right: 15px;"></i> Sensitization Workshops for Employers</li>
                    </ul>
                </div>
                <div class="info-image">
                    <img src="<?php echo BASE_URL; ?>assets/pages/work-life-balance-for-students-advocating-for-systemic-change-313501328.jpg" alt="Advocacy workshop">
                </div>
            </div>
        </div>
    </section>

    <!-- 8. SUCCESS STORY -->
    <section class="story-section bg-light">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2>Voices of <span>Resilience</span></h2>
            </div>
            <div class="story-container">
                <div class="story-img">
                    <img src="<?php echo BASE_URL; ?>assets/pages/locomotor-disability.webp" alt="Successful individual">
                </div>
                <div class="story-txt">
                    <i class="fas fa-quote-left" style="font-size: 3rem; color: var(--pwd-secondary); margin-bottom: 20px;"></i>
                    <h3>Rohan's Journey to Independence</h3>
                    <p>"Born with a locomotor disability, I was told my world ended at my doorstep. The Foundation provided me with my first customized wheelchair and trained me in accessibility testing. Today, I am a lead QA at a global tech firm."</p>
                    <p style="font-weight: 700; color: var(--pwd-accent); margin-top: 20px;">— Rohan D., Alumni & Advocate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. SPORTS & ARTS -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2>Unleashing <span>Creative</span> Potential</h2>
                <p>From Para-sports to inclusive art festivals, we provide platforms for PWDs to shine in every arena.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 30px;">
                <div style="background: url('<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg') center/cover; height: 300px; border-radius: 15px; display: flex; align-items: flex-end; padding: 30px;">
                    <div style="background: rgba(255,255,255,0.9); padding: 20px; border-radius: 10px;">
                        <h4 style="color: var(--pwd-primary);">Inclusive Sports</h4>
                        <p style="font-size: 0.9rem;">Organizing regional Para-athletic meets annually.</p>
                    </div>
                </div>
                <div style="background: url('<?php echo BASE_URL; ?>assets/frontend/rural-children-education.jpg') center/cover; height: 300px; border-radius: 15px; display: flex; align-items: flex-end; padding: 30px;">
                    <div style="background: rgba(255,255,255,0.9); padding: 20px; border-radius: 10px;">
                        <h4 style="color: var(--pwd-primary);">Barrier-Free Arts</h4>
                        <p style="font-size: 0.9rem;">Promoting dance and painting by artists with challenges.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. HOW TO HELP -->
    <section id="how-to-help" class="section-padding" style="background: var(--pwd-light);">
        <div class="container" style="display: block;">
            <div class="section-header" style="text-align: center;">
                <h2>Support the <span>Journey</span></h2>
                <p>Your contribution directly impacts the quality of life for someone waiting for a chance.</p>
            </div>
            <div class="step-grid">
                <div class="step-item">
                    <div class="step-circle">₹</div>
                    <h4>Donate Funds</h4>
                    <p>Sponsor devices, therapy sessions, or vocational training modules.</p>
                </div>
                <div class="step-item">
                    <div class="step-circle"><i class="fas fa-hand-holding-heart"></i></div>
                    <h4>Volunteer</h4>
                    <p>Share your skills—be a mentor, a scribe, or an accessibility auditor.</p>
                </div>
                <div class="step-item">
                    <div class="step-circle"><i class="fas fa-city"></i></div>
                    <h4>Corporate Tie-up</h4>
                    <p>Hiring inclusive teams and implementing CSR for disability rights.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. PARTNERSHIP BANNER -->
    <section class="section-padding" style="border-top: 1px solid #ddd;">
        <div class="container" style="display: block; text-align: center;">
             <h2 style="margin-bottom: 30px;">Become an <span>Inclusion Partner</span></h2>
             <p style="margin-bottom: 40px; max-width: 800px; margin: 0 auto 40px;">Work with us to make your organization disability-friendly and benefit from a diverse, talented workforce.</p>
             <a href="#" class="btn-pwd">Request an Audit</a>
        </div>
    </section>

    <!-- 12. FINAL CALL TO ACTION -->
    <section style="background: var(--pwd-accent); padding: 80px 0; text-align: center; color: white;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 2.5rem; margin-bottom: 25px;">Accessibility is a Right, Not a Favor.</h2>
            <p style="font-size: 1.2rem; margin-bottom: 40px; opacity: 0.9;">Join us in our mission to build a barrier-free India for everyone.</p>
            <a href="#" class="btn-pwd" style="background: var(--pwd-dark);">Get Involved Today</a>
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
