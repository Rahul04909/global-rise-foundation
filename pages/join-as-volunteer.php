<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join as Volunteer | Women Empowerment | The Global Rise Foundation</title>
    <meta name="description" content="Join our mission to empower women. Become a volunteer and help us create a world of gender equality and financial independence.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Premium Design for Volunteer Page -->
    <style>
        :root {
            --we-primary: #800E13; /* Deep Maroon */
            --we-secondary: #AD2831; /* Rich Red */
            --we-accent: #D4AF37; /* Metallic Gold */
            --we-soft: #F9EAE1; /* Soft blush peach */
            --we-rose: #E29578; /* Muted Rose */
            --text-dark: #250902;
            --white: #ffffff;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            overflow-x: hidden;
        }

        .section-padding { padding: 100px 0; }
        .bg-soft { background-color: var(--we-soft); }

        /* Hero Section */
        .volunteer-hero {
            height: 70vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(128, 14, 19, 0.5)), url('<?php echo BASE_URL; ?>assets/pages/9cf670cf-c74c-456b-89fa-496189fd50c8-wm.png');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }
        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            z-index: 2;
        }
        .volunteer-hero h1 {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: -1px;
        }
        .volunteer-hero h1 span { color: var(--we-accent); }
        .volunteer-hero p {
            font-size: 1.4rem;
            margin-bottom: 30px;
            opacity: 0.9;
            font-weight: 300;
        }

        /* Stats Strip */
        .stats-strip {
            background: var(--white);
            padding: 40px 0;
            margin-top: -60px;
            position: relative;
            z-index: 10;
            box-shadow: 0 20px 50px rgba(0,0,0,0.05);
            border-radius: 20px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: center;
        }
        .stat-item h3 { font-size: 2.5rem; color: var(--we-primary); font-weight: 800; margin-bottom: 5px; }
        .stat-item p { font-size: 0.9rem; color: #666; text-transform: uppercase; letter-spacing: 1px; }

        /* Section Header */
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        .section-header h2 {
            font-size: 3rem;
            color: var(--we-primary);
            font-weight: 800;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--we-accent);
        }

        /* Role Cards */
        .roles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        .role-card {
            background: white;
            padding: 50px 30px;
            border-radius: 20px;
            text-align: center;
            transition: var(--transition);
            border: 1px solid #eee;
        }
        .role-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(128, 14, 19, 0.1);
            border-color: var(--we-accent);
        }
        .role-icon {
            width: 80px;
            height: 80px;
            background: var(--we-soft);
            color: var(--we-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin: 0 auto 25px;
            transition: var(--transition);
        }
        .role-card:hover .role-icon {
            background: var(--we-primary);
            color: white;
        }
        .role-card h3 { font-size: 1.5rem; color: var(--we-primary); margin-bottom: 15px; }
        .role-card p { color: #666; line-height: 1.6; }

        /* Split Section Support */
        .we-split {
            display: flex;
            align-items: center;
            gap: 60px;
        }
        .we-split-info { flex: 1; }
        .we-split-img { flex: 1; position: relative; }
        .we-split-img img {
            width: 100%;
            border-radius: 30px;
            box-shadow: 20px 20px 0 var(--we-accent);
        }

        /* Form Styling */
        .registration-box {
            background: white;
            padding: 60px;
            border-radius: 40px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.08);
            max-width: 1000px;
            margin: 0 auto;
        }
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        .form-group { margin-bottom: 25px; position: relative; }
        .form-group.full-width { grid-column: span 2; }
        .form-control {
            width: 100%;
            padding: 18px 25px;
            border: 2px solid #eee;
            border-radius: 12px;
            font-size: 1rem;
            transition: var(--transition);
            background: #f8f8f8;
            outline: none;
        }
        .form-control:focus {
            border-color: var(--we-primary);
            background: white;
            box-shadow: 0 10px 20px rgba(128, 14, 19, 0.05);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--we-primary);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .btn-submit {
            background: var(--we-primary);
            color: white;
            padding: 20px 50px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 800;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        .btn-submit:hover {
            background: var(--we-secondary);
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(128, 14, 19, 0.2);
        }
        .btn-submit i { transition: var(--transition); }
        .btn-submit:hover i { transform: translateX(8px); }

        /* Responsive */
        @media (max-width: 992px) {
            .volunteer-hero h1 { font-size: 3rem; }
            .stats-grid { grid-template-columns: repeat(2, 1fr); }
            .we-split { flex-direction: column; }
            .form-grid { grid-template-columns: 1fr; }
            .form-group.full-width { grid-column: span 1; }
            .registration-box { padding: 40px 25px; }
        }
        @media (max-width: 576px) {
            .volunteer-hero h1 { font-size: 2.22rem; }
            .stats-grid { grid-template-columns: 1fr; }
            .section-header h2 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- HERO SECTION -->
    <section class="volunteer-hero">
        <div class="container" style="display: block;">
            <div class="hero-content">
                <span style="color: var(--we-accent); font-weight: 800; text-transform: uppercase; letter-spacing: 3px; display: block; margin-bottom: 10px;">Be the Change</span>
                <h1>Impact a Life, <br><span>Empower</span> a Woman.</h1>
                <p>Join our global community of volunteers dedicated to breaking systemic barriers and building futures.</p>
                <a href="#volunteer-form" class="btn-submit" style="display: inline-flex; width: auto; padding: 20px 60px;">Start Your Journey <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- STATS STRIP -->
    <div class="container" style="display: block;">
        <div class="stats-strip">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>500+</h3>
                    <p>Active Volunteers</p>
                </div>
                <div class="stat-item">
                    <h3>20+</h3>
                    <p>Cities Covered</p>
                </div>
                <div class="stat-item">
                    <h3>150k+</h3>
                    <p>Impacted Lives</p>
                </div>
                <div class="stat-item">
                    <h3>50+</h3>
                    <p>Corporate Partners</p>
                </div>
            </div>
        </div>
    </div>

    <!-- WHY VOLUNTEER -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="we-split">
                <div class="we-split-img">
                    <img src="<?php echo BASE_URL; ?>assets/pages/UN0591783.jpg.webp" alt="Volunteer with us">
                </div>
                <div class="we-split-info">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <h2>Why <span>Volunteer?</span></h2>
                    </div>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        Volunteering with the Global Rise Foundation isn't just about giving back; it's about becoming part of a movement that reshapes society. You'll gain a unique perspective, develop leadership skills, and most importantly, witness the direct impact of your efforts.
                    </p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px; font-weight: 600;">
                            <i class="fas fa-circle-check" style="color: var(--we-accent);"></i> Create meaningful social change
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px; font-weight: 600;">
                            <i class="fas fa-circle-check" style="color: var(--we-accent);"></i> Build your professional network
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px; font-weight: 600;">
                            <i class="fas fa-circle-check" style="color: var(--we-accent);"></i> Develop cross-cultural understanding
                        </li>
                        <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 15px; font-weight: 600;">
                            <i class="fas fa-circle-check" style="color: var(--we-accent);"></i> Get certified for your social contribution
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- VOLUNTEER ROLES -->
    <section class="section-padding bg-soft">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Choose Your <span>Role</span></h2>
                <p>Find the perfect way to contribute based on your skills and passion.</p>
            </div>
            
            <div class="roles-grid">
                <div class="role-card">
                    <div class="role-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h3>Skill Mentor</h3>
                    <p>Teach vocational skills like tailoring, digital literacy, or business management to aspiring women entrepreneurs.</p>
                </div>
                <div class="role-card">
                    <div class="role-icon"><i class="fas fa-heart-pulse"></i></div>
                    <h3>Health Advocate</h3>
                    <p>Conduct workshops on reproductive health, hygiene, and nutrition in rural and slum communities.</p>
                </div>
                <div class="role-card">
                    <div class="role-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3>Awareness Leader</h3>
                    <p>Help us organize campaigns and legal rights sensitization programs for women in underserved areas.</p>
                </div>
                <div class="role-card">
                    <div class="role-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>Digital Support</h3>
                    <p>Assist in backend operations, social media advocacy, or tech support for our Sakhi centers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REGISTRATION FORM -->
    <section id="volunteer-form" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Register <span>Now</span></h2>
                <p>Fill in the details below and our team will get back to you shortly.</p>
            </div>

            <div class="registration-box">
                <form action="#" method="POST">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                        </div>
                        <div class="form-group">
                            <label>Area of Interest</label>
                            <select name="interest" class="form-control" required>
                                <option value="" disabled selected>Select Area</option>
                                <option value="skill-mentor">Skill Mentorship</option>
                                <option value="health-advocate">Health Advocacy</option>
                                <option value="awareness">Awareness Campaigns</option>
                                <option value="digital">Digital Support</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" placeholder="Your City" required>
                        </div>
                        <div class="form-group">
                            <label>Availability</label>
                            <select name="availability" class="form-control" required>
                                <option value="" disabled selected>Select Frequency</option>
                                <option value="weekends">Weekends Only</option>
                                <option value="weekdays">Weekdays</option>
                                <option value="flexible">Flexible</option>
                            </select>
                        </div>
                        <div class="form-group full-width">
                            <label>Why do you want to join us?</label>
                            <textarea name="message" class="form-control" rows="4" placeholder="Tell us about your motivation..."></textarea>
                        </div>
                        <div class="form-group full-width">
                            <button type="submit" class="btn-submit">Submit Application <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section style="background: var(--we-primary); padding: 80px 0; text-align: center; color: white;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 20px;">Questions about volunteering?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 40px; opacity: 0.8;">Our volunteer coordinators are here to help you find the right fit.</p>
            <a href="mailto:volunteer@globalrise.org" class="btn-submit" style="background: var(--we-accent); color: var(--we-primary); width: auto; display: inline-flex; padding: 20px 60px;">Contact Coordinator</a>
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
