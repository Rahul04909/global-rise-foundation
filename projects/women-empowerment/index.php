<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Empowerment | The Global Rise Foundation</title>
    <meta name="description" content="Empowering women to lead change. From skill development to financial independence, discover our holistic approach to gender equality.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Premium Design for Women Empowerment -->
    <style>
        :root {
            --we-primary: #800E13; /* Deep Maroon */
            --we-secondary: #AD2831; /* Rich Red */
            --we-accent: #D4AF37; /* Metallic Gold */
            --we-soft: #F9EAE1; /* Soft blush peach */
            --we-rose: #E29578; /* Muted Rose */
            --text-dark: #250902;
            --white: #ffffff;
        }

        /* Hero Section */
        .we-hero {
            height: 90vh;
            background: linear-gradient(rgba(128, 14, 19, 0.7), rgba(128, 14, 19, 0.4)), url('<?php echo BASE_URL; ?>assets/pages/9cf670cf-c74c-456b-89fa-496189fd50c8-wm.png');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        .we-hero::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; width: 100%; height: 100px;
            background: linear-gradient(transparent, var(--white));
        }
        .we-hero-txt {
            max-width: 800px;
            z-index: 2;
        }
        .we-hero h1 {
            font-size: 5rem;
            font-weight: 900;
            margin-bottom: 20px;
            line-height: 1;
            text-transform: uppercase;
        }
        .we-hero h1 span { color: var(--we-accent); }
        .we-hero p {
            font-size: 1.5rem;
            margin-bottom: 40px;
            font-weight: 300;
            opacity: 0.9;
        }

        .section-padding { padding: 120px 0; }
        .bg-soft { background-color: var(--we-soft); }
        
        .section-header {
            margin-bottom: 80px;
            text-align: center;
        }
        .section-header h2 {
            font-size: 3.2rem;
            color: var(--we-primary);
            font-weight: 800;
            margin-bottom: 20px;
            display: inline-block;
            position: relative;
        }
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -5px; right: 0; width: 60%; height: 4px;
            background: var(--we-accent);
        }

        /* Program Cards */
        .we-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }
        .we-card {
            background: white;
            padding: 60px 40px;
            border-radius: 0 50px 0 50px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.03);
            transition: all 0.4s ease;
            border: 1px solid #f0f0f0;
            text-align: center;
        }
        .we-card:hover {
            transform: translateY(-15px);
            border-color: var(--we-accent);
            box-shadow: 0 20px 60px rgba(128, 14, 19, 0.1);
        }
        .we-icon {
            width: 90px;
            height: 90px;
            background: var(--we-soft);
            color: var(--we-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            margin: 0 auto 30px;
            transition: 0.3s;
        }
        .we-card:hover .we-icon { background: var(--we-primary); color: white; }

        /* Split Section */
        .we-split {
            display: flex;
            align-items: center;
            gap: 100px;
            margin-bottom: 150px;
        }
        .we-split-info { flex: 1; }
        .we-split-img { flex: 1; position: relative; }
        .we-split-img img {
            width: 100%;
            border-radius: 300px 300px 0 0;
            box-shadow: 20px 20px 0 var(--we-accent);
        }

        /* Impact Section */
        .impact-dark {
            background: var(--we-primary);
            color: white;
            padding: 100px 0;
            border-radius: 100px 0 100px 0;
        }
        .impact-flex {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 50px;
            text-align: center;
        }
        .impact-item h4 { font-size: 4rem; font-weight: 900; color: var(--we-accent); margin-bottom: 10px; }
        .impact-item p { font-size: 1.1rem; text-transform: uppercase; letter-spacing: 2px; }

        /* Success Story */
        .story-spotlight {
            background: white;
            padding: 80px;
            border-radius: 40px;
            display: flex;
            gap: 60px;
            align-items: center;
            box-shadow: 0 30px 70px rgba(0,0,0,0.05);
            margin-top: -100px;
            position: relative;
            z-index: 5;
        }
        .story-img { flex: 1; }
        .story-img img { width: 100%; border-radius: 30px; }
        .story-txt { flex: 1.5; }
        .story-txt blockquote { font-size: 1.8rem; font-family: serif; font-style: italic; color: var(--text-dark); border-left: 10px solid var(--we-soft); padding-left: 30px; margin-bottom: 30px; }

        /* Buttons */
        .btn-we {
            background: var(--we-primary);
            color: white;
            padding: 20px 50px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 800;
            display: inline-block;
            transition:all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn-we:hover { background: var(--we-secondary); transform: translateX(5px); box-shadow: -5px 5px 0 var(--we-accent); }

        /* Sakhi Center list */
        .sakhi-list {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }
        .sakhi-list li { display: flex; align-items: center; gap: 15px; font-weight: 600; color: var(--we-primary); }
        .sakhi-list i { color: var(--we-accent); }

        @media (max-width: 992px) {
            .we-hero h1 { font-size: 3rem; }
            .we-split { flex-direction: column; gap: 50px; }
            .story-spotlight { flex-direction: column; padding: 40px; margin-top: 50px; }
            .sakhi-list { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="we-hero">
        <div class="container" style="display: block;">
            <div class="we-hero-txt">
                <h1>She Wins, <br><span>India</span> Wins.</h1>
                <p>Investing in women is the most effective way to change the trajectory of a community and a nation.</p>
                <div style="display: flex; gap: 20px;">
                    <a href="#impact" class="btn-we">See Our Impact</a>
                    <a href="#programs" class="btn-we" style="background:transparent; border: 2px solid white;">Active Programs</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. MISSION & MANDATE -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Empowerment <span>Philosophy</span></h2>
                <p style="max-width: 800px; margin: 30px auto 0; font-size: 1.25rem; line-height: 1.8; color: #555;">
                    Women are the backbone of society, yet they face disproportionate challenges. The Global Rise Foundation provides a lifecycle approach to empowerment—from adolescent mentoring to financial literacy for mothers.
                </p>
            </div>
        </div>
    </section>

    <!-- 3. CHALLENGES -->
    <section class="section-padding bg-soft">
        <div class="container" style="display: block;">
            <div class="we-split">
                <div class="we-split-info">
                   <h2 style="font-size: 3rem; color: var(--we-primary); margin-bottom: 30px; line-height: 1.1;">Closing the <span>Gender Gap</span></h2>
                   <p style="color: #444; line-height: 1.8; margin-bottom: 30px;">
                        Despite progress, women in rural and slum areas face extreme systemic barriers, including lack of education, early marriages, and zero financial autonomy.
                   </p>
                   <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                        <div style="background: white; padding: 30px; border-radius: 20px;">
                            <h4 style="color: var(--we-secondary); margin-bottom: 10px;">Literacy Gap</h4>
                            <p style="font-size: 0.9rem; color: #777;">Only 65% of Indian women are literate compared to 82% of men.</p>
                        </div>
                        <div style="background: white; padding: 30px; border-radius: 20px;">
                            <h4 style="color: var(--we-secondary); margin-bottom: 10px;">Unpaid Labor</h4>
                            <p style="font-size: 0.9rem; color: #777;">Women perform 10x more unpaid care work than men daily.</p>
                        </div>
                   </div>
                </div>
                <div class="we-split-img">
                   <img src="<?php echo BASE_URL; ?>assets/pages/UN0591783.jpg.webp" alt="Woman empowerment">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE MODULES -->
    <section id="programs" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Pillars of <span>Progress</span></h2>
                <p>Sustainable interventions creating permanent change.</p>
            </div>
            
            <div class="we-grid">
                <div class="we-card">
                    <div class="we-icon"><i class="fas fa-scissors"></i></div>
                    <h3>Vocational Skills</h3>
                    <p>Training in tailoring, beautician courses, digital literacy, and retail management for livelihood readiness.</p>
                </div>
                <div class="we-card">
                    <div class="we-icon"><i class="fas fa-piggy-bank"></i></div>
                    <h3>Financial Literacy</h3>
                    <p>Formation of Self-Help Groups (SHGs) and training in micro-savings, banking, and digital payments.</p>
                </div>
                <div class="we-card">
                    <div class="we-icon"><i class="fas fa-scale-balanced"></i></div>
                    <h3>Rights & Health</h3>
                    <p>Sensitization workshops on legal rights, domestic protection, and reproductive health management.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FINANCIAL INDEPENDENCE -->
    <section class="section-padding bg-soft" style="border-radius: 150px 0 0 0;">
        <div class="container" style="display: block;">
            <div class="we-split" style="flex-direction: row-reverse;">
                 <div class="we-split-info">
                    <h2 style="font-size: 2.8rem; color: var(--we-primary); margin-bottom: 25px;">The Power of <span>Self-Help Groups</span></h2>
                    <p style="line-height: 1.8; color: #555;">
                        Micro-credit is a tool for liberation. We help women form SHGs where they collectively save, lend, and start small enterprises. This system builds social capital and breaks the cycle of debt to informal moneylenders.
                    </p>
                    <ul class="sakhi-list">
                        <li><i class="fas fa-check-circle"></i> Collective Bargaining</li>
                        <li><i class="fas fa-check-circle"></i> Low-interest Internal Loans</li>
                        <li><i class="fas fa-check-circle"></i> Entrepreneurship Mentorship</li>
                        <li><i class="fas fa-check-circle"></i> Bank Linkage Support</li>
                    </ul>
                    <a href="#" class="btn-we" style="margin-top: 40px;">Form an SHG</a>
                 </div>
                 <div class="we-split-img">
                    <img src="<?php echo BASE_URL; ?>assets/pages/PRATHAM_JAMEEL_HERO_OG.webp" alt="SHG Meeting">
                 </div>
            </div>
        </div>
    </section>

    <!-- 6. IMPACT STATS -->
    <section id="impact" class="impact-dark">
        <div class="container" style="display: block;">
            <div class="impact-flex">
                <div class="impact-item">
                    <h4>85k+</h4>
                    <p>Women Trained</p>
                </div>
                <div class="impact-item">
                    <h4>12k+</h4>
                    <p>SHGs Formed</p>
                </div>
                <div class="impact-item">
                    <h4>₹15Cr</h4>
                    <p>Total Savings</p>
                </div>
                <div class="impact-item">
                    <h4>25k+</h4>
                    <p>Succesful Biz</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. STORY SPOTLIGHT -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="story-spotlight">
                <div class="story-img">
                    <img src="<?php echo BASE_URL; ?>assets/pages/anita.webp" alt="Anita Story">
                </div>
                <div class="story-txt">
                    <span style="color: var(--we-accent); font-weight: 800; text-transform: uppercase; letter-spacing: 2px;">Success Spotlight</span>
                    <h3 style="font-size: 2.2rem; margin: 15px 0;">Anita’s Stitch in Time</h3>
                    <blockquote>
                    "I used to work in the fields for ₹100 a day. After the Foundation’s tailoring course, I started my own boutique. Today, I employ 4 other women from my village and my daughters go to an English medium school."
                    </blockquote>
                    <p style="font-weight: 700; color: var(--we-primary);">Anita Devi, Boutique Owner & Mentor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. SAKHI CENTERS -->
    <section class="section-padding bg-soft" style="margin-top: 100px;">
        <div class="container" style="display: block;">
            <div class="we-split">
                <div class="we-split-info">
                   <h2 style="font-size: 2.8rem; color: var(--we-primary); margin-bottom: 25px;">Sanchar & Sakhi <span>Centers</span></h2>
                   <p style="color: #555; line-height: 1.8;">
                        Our community hubs, known as "Sakhi Centers," act as safe havens. These are one-stop centers for counseling, vocational learning, and digital access. It's where women gather to solve community problems.
                   </p>
                   <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
                        <div style="border-left: 5px solid var(--we-accent); padding: 20px; background: white;">
                             <h5>Counseling Lab</h5>
                        </div>
                        <div style="border-left: 5px solid var(--we-accent); padding: 20px; background: white;">
                             <h5>E-Seva Access</h5>
                        </div>
                        <div style="border-left: 5px solid var(--we-accent); padding: 20px; background: white;">
                             <h5>Skill Workshop</h5>
                        </div>
                        <div style="border-left: 5px solid var(--we-accent); padding: 20px; background: white;">
                             <h5>Leadership Hub</h5>
                        </div>
                   </div>
                </div>
                <div class="we-split-img">
                    <img src="<?php echo BASE_URL; ?>assets/pages/anchal_10_2000x.webp" alt="Sakhi Centers">
                </div>
            </div>
        </div>
    </section>

    <!-- 9. MENTORSHIP & LEADERSHIP -->
    <section class="section-padding">
        <div class="container" style="display: block; text-align: center;">
            <div class="section-header">
                <h2>Creating <span>Next-Gen</span> Leaders</h2>
            </div>
            <p style="max-width: 800px; margin: 0 auto 50px; color: #555; line-height: 1.8;">We identify potential "Change-Makers" in schools and colleges, providing them with mentorship to become advocates for gender equality in their own neighborhoods.</p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 30px;">
                <div style="background: var(--we-primary); color: white; padding: 50px; border-radius: 30px;">
                    <i class="fas fa-microphone-lines" style="font-size: 3rem; color: var(--we-accent); margin-bottom: 25px;"></i>
                    <h4>Public Speaking</h4>
                    <p style="opacity: 0.8;">Training young women to voice their concerns in local Panchayat meetings.</p>
                </div>
                <div style="background: var(--we-secondary); color: white; padding: 50px; border-radius: 30px;">
                    <i class="fas fa-handshake-angle" style="font-size: 3rem; color: var(--we-accent); margin-bottom: 25px;"></i>
                    <h4>Peer Mentorship</h4>
                    <p style="opacity: 0.8;">"Each one, Teach one"—alumni mentoring new trainees.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. SUPPORT TIERS -->
    <section id="donate" class="section-padding bg-soft">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Enable Her <span>Empire</span></h2>
                <p>Support a woman’s journey from dependency to leadership.</p>
            </div>
            
            <div class="we-grid">
                <div class="we-card">
                    <h4>Skill Scholarship</h4>
                    <p>Covers full vocational training and certification for one woman.</p>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--we-primary); margin: 30px 0;">₹4,500</div>
                    <a href="#" class="btn-we" style="width: 100%;">Sponsor Skill</a>
                </div>
                <div class="we-card" style="border-color: var(--we-accent); background: #fffcf5;">
                    <h4>Entrepreneur Kit</h4>
                    <p>Startup kit including essentials (sewing machine/tools) and base capital.</p>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--we-primary); margin: 30px 0;">₹10,500</div>
                    <a href="#" class="btn-we" style="width: 100%;">Setup a Business</a>
                </div>
                <div class="we-card">
                    <h4>Adopt a Sakhi Center</h4>
                    <p>Annual operations cost for a community hub impacting 500+ women.</p>
                    <div style="font-size: 2.5rem; font-weight: 900; color: var(--we-primary); margin: 30px 0;">₹50,000</div>
                    <a href="#" class="btn-we" style="width: 100%;">Sponsor Center</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. CORPORATE & VOLUNTEER -->
    <section class="section-padding">
        <div class="container" style="display: block; text-align: center;">
             <h2 style="color: var(--we-primary); margin-bottom: 30px;">Join the <span>Sisterhood</span> of Change</h2>
             <p style="max-width: 800px; margin: 0 auto 50px; color: #555;">Whether you are a professional wanting to mentor, or a corporate looking to drive gender-balanced CSR—your contribution defines the future.</p>
             <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
                  <a href="#" class="btn-we">Mentor a Woman</a>
                  <a href="#" class="btn-we" style="background: var(--we-accent); color: var(--we-primary);">Corporate Connect</a>
             </div>
        </div>
    </section>

    <!-- 12. FINAL CALL TO ACTION -->
    <section style="background: var(--we-primary); padding: 100px 0; text-align: center; color: white;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 30px;">Power is not <span>Given</span>, it is Taken.</h2>
            <p style="font-size: 1.5rem; margin-bottom: 50px; opacity: 0.9;">Join us in equipping women with the tools to take their rightful place in the world.</p>
            <a href="#" class="btn-we" style="background: var(--we-accent); color: var(--we-primary); font-size: 1.25rem;">Support Empowerment Now</a>
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
