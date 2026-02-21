<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senior Citizen Care | The Global Rise Foundation</title>
    <meta name="description" content="Dedicated to the dignity, health, and happiness of our elders. Global Rise Foundation's Senior Citizen Care program provides holistic support to India's silver generation.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Compassionate Design Styles for Senior Care -->
    <style>
        :root {
            --senior-primary: #6D597A; /* Deep Lavender/Purple */
            --senior-secondary: #B56576; /* Soft Rose */
            --senior-accent: #E56B6F; /* Coral Peach */
            --senior-gold: #EAAC8B; /* Soft Gold/Tan */
            --senior-bg: #F9F7F9; /* Very light lavender tint */
            --white: #ffffff;
            --text-dark: #355070;
        }

        /* Hero Styling */
        .senior-hero {
            height: 85vh;
            background: linear-gradient(rgba(109, 89, 122, 0.6), rgba(109, 89, 122, 0.4)), url('<?php echo BASE_URL; ?>assets/pages/dignity.webp'); /* Placeholder image, should be replaced with elder care image */
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }
        .senior-hero h1 {
            font-size: 4.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.2);
        }
        .senior-hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 40px;
            font-weight: 300;
        }

        .section-padding { padding: 120px 0; }
        .section-header {
            text-align: center;
            margin-bottom: 70px;
        }
        .section-header h2 {
            font-size: 3rem;
            color: var(--senior-primary);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--senior-gold);
        }

        /* Grid Layouts */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        .senior-card {
            background: white;
            padding: 50px 40px;
            border-radius: 30px 5px 30px 5px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.03);
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }
        .senior-card:hover {
            transform: translateY(-10px);
            border-color: var(--senior-gold);
        }
        .senior-card i {
            font-size: 3rem;
            color: var(--senior-secondary);
            margin-bottom: 25px;
            display: block;
        }
        .senior-card h3 {
            margin-bottom: 15px;
            color: var(--senior-primary);
        }

        /* Story Block */
        .story-block {
            display: flex;
            align-items: center;
            gap: 80px;
            background: var(--senior-bg);
            padding: 80px;
            border-radius: 40px;
            margin: 60px 0;
        }
        .story-img { flex: 1; position: relative; }
        .story-img img { width: 100%; border-radius: 20px; box-shadow: 0 20px 50px rgba(0,0,0,0.1); }
        .story-content { flex: 1.2; }
        .story-content h3 { font-size: 2.2rem; margin-bottom: 20px; color: var(--senior-primary); }
        .story-quote { font-style: italic; font-size: 1.1rem; color: #555; position: relative; padding-left: 30px; border-left: 4px solid var(--senior-gold); }

        /* Stats Section */
        .stats-soft { background-color: var(--senior-primary); color: white; padding: 100px 0; }
        .stats-flex { display: flex; justify-content: space-around; text-align: center; flex-wrap: wrap; gap: 40px; }
        .stat-circle {
            width: 180px; height: 180px;
            border: 2px dashed rgba(255,255,255,0.3);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .stat-circle .count { font-size: 2.5rem; font-weight: 800; color: var(--senior-gold); }
        .stat-circle .label { font-size: 0.9rem; margin-top: 5px; text-transform: uppercase; }

        /* Support Tiers */
        .tier-row { display: flex; gap: 30px; flex-wrap: wrap; margin-top: 40px; }
        .tier-box {
            flex: 1;
            min-width: 250px;
            background: white;
            padding: 40px;
            border-radius: 20px;
            border: 2px solid #eee;
            text-align: center;
        }
        .tier-box.highlight { border-color: var(--senior-secondary); background: #fffafb; }
        .tier-price { font-size: 2rem; font-weight: 800; color: var(--senior-secondary); margin: 20px 0; }

        /* General styles */
        .btn-senior {
            background-color: var(--senior-primary);
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .btn-senior:hover { background: var(--senior-secondary); transform: scale(1.02); }

        @media (max-width: 992px) {
            .senior-hero h1 { font-size: 3rem; }
            .story-block { flex-direction: column; padding: 40px; text-align: center; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="senior-hero">
        <div class="container" style="display: block;">
            <h1>Adding <span>Life</span> to Years</h1>
            <p>Every elder deserves a life of dignity, health, and companionship. We are dedicated to honoring the generation that built our world.</p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="#suppport" class="btn-senior">Sponsor an Elder</a>
                <a href="#how-we-care" class="btn-senior" style="background:transparent; border: 2px solid white;">Our Care Program</a>
            </div>
        </div>
    </section>

    <!-- 2. OUR VISION -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>A Vision of <span>Dignity</span></h2>
                <p style="max-width: 800px; margin: 20px auto 0; color: #666; font-size: 1.2rem;">
                    At Global Rise Foundation, we believe that aging should be a journey of grace, not a struggle for survival. We provide a holistic safety net for senior citizens who lack family or financial support.
                </p>
            </div>
        </div>
    </section>

    <!-- 3. THE SILENT CRISIS -->
    <section class="section-padding bg-light" style="background: #fdfafb;">
        <div class="container" style="display: block;">
            <div style="display: flex; align-items: center; gap: 80px; flex-wrap: wrap;">
                <div style="flex: 1; min-width: 350px;">
                    <h3 style="font-size: 2.5rem; color: var(--senior-primary); margin-bottom: 25px;">The Silent Crisis</h3>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 25px;">
                        With changing social structures, millions of elders in India find themselves isolated. Lack of specialized geriatric medical care, financial dependence, and loneliness are the new epidemics facing our seniors.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="padding: 20px; background: white; border-radius: 15px;">
                            <h4 style="color: var(--senior-secondary);"><i class="fas fa-heart-circle-exclamation"></i> Health Gap</h4>
                            <p style="font-size: 0.9rem; color: #888;">Limited access to specialized age-related medical treatments.</p>
                        </div>
                        <div style="padding: 20px; background: white; border-radius: 15px;">
                            <h4 style="color: var(--senior-secondary);"><i class="fas fa-user-slash"></i> Isolation</h4>
                            <p style="font-size: 0.9rem; color: #888;">Rising cases of elder abandonment and deep-seated loneliness.</p>
                        </div>
                    </div>
                </div>
                <div style="flex: 1; min-width: 350px;">
                    <img src="<?php echo BASE_URL; ?>assets/pages/the-silent-crisis.webp" alt="Elderly Care" style="width: 100%; border-radius: 50% 10% 50% 10%; border: 15px solid white; box-shadow: 0 20px 40px rgba(0,0,0,0.05);">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE PILLARS (3 Sections merged) -->
    <section id="how-we-care" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Our <span>Care</span> Ecosystem</h2>
                <p>A multi-faceted approach to ensure physical, mental, and social wellbeing.</p>
            </div>
            
            <div class="card-grid">
                <div class="senior-card">
                    <i class="fas fa-hand-holding-medical"></i>
                    <h3>Geriatric Health</h3>
                    <p>Mobile clinics and specialized health camps providing geriatric check-ups, medication, and physiotherapy.</p>
                </div>
                <div class="senior-award">
                    <i class="fas fa-hands-holding-heart"></i>
                    <h3>Companionship</h3>
                    <p>Connecting elders with youth volunteers through physical visits and "Silver Line" telephone companionship.</p>
                </div>
                <div class="senior-card">
                    <i class="fas fa-house-chimney-medical"></i>
                    <h3>Sneh Bhavans</h3>
                    <p>Safe day-care centers and assisted living homes providing nutritional meals and high-hygiene shelter.</p>
                </div>
                <div class="senior-card">
                    <i class="fas fa-laptop-medical"></i>
                    <h3>Digital Literacy</h3>
                    <p>Helping seniors learn smartphones and social media to stay connected with distant family member and world news.</p>
                </div>
                <div class="senior-card">
                    <i class="fas fa-book-open-reader"></i>
                    <h3>Silver Skilling</h3>
                    <p>Enabling seniors to teach traditional arts and wisdom to the next generation, restoring their sense of purpose.</p>
                </div>
                <div class="senior-card">
                    <i class="fas fa-user-shield"></i>
                    <h3>Rights & Advocacy</h3>
                    <p>Legal aid and awareness programs to protect elders from abuse and ensure they receive their government pensions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. IMPACT STATS -->
    <section class="stats-soft">
        <div class="container" style="display: block;">
            <div class="stats-flex">
                <div class="stat-circle">
                    <span class="count">12k+</span>
                    <span class="label">Seniors Assisted</span>
                </div>
                <div class="stat-circle">
                    <span class="count">250k+</span>
                    <span class="label">Meals Served</span>
                </div>
                <div class="stat-circle">
                    <span class="count">50+</span>
                    <span class="label">Sneh Bhavans</span>
                </div>
                <div class="stat-circle">
                    <span class="count">800+</span>
                    <span class="label">Active Volunteers</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. VOICES OF SILVER (Story) -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="story-block">
                <div class="story-img">
                    <img src="<?php echo BASE_URL; ?>assets/pages/pmpuja.png" alt="Story Image">
                </div>
                <div class="story-content">
                    <span style="color: var(--senior-secondary); font-weight: 700; text-transform: uppercase;">Feature Story</span>
                    <h3>Mrs. Kamla's New Family</h3>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 25px;">
                        After losing her husband and being separated from her children, 72-year-old Kamla ji spent her days in silence. Sneh Bhavan became her sanctuary. "I didn't just get a room; I found a family. Now I teach embroidery to college girls who visit us every weekend."
                    </p>
                    <div class="story-quote">
                        "They didn't just give me medicine; they gave me a reason to wake up with a smile."
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. NUTRITION & HEALTH -->
    <section class="section-padding bg-light" style="background: #fafafa; border-radius: 100px 0 100px 0;">
        <div class="container" style="display: block;">
            <div style="display: flex; gap: 50px; align-items: center; flex-wrap: wrap;">
                  <div style="flex: 1; min-width: 300px;">
                      <img src="<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg" alt="Health Camp" style="width: 100%; border-radius: 20px;">
                  </div>
                  <div style="flex: 1.5; min-width: 300px;">
                      <h2 style="color: var(--senior-primary); margin-bottom: 20px;">Holistic Longevity Programs</h2>
                      <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                          Our specialized medical wing focuses on chronic ailment management and preventative care for the silver generation.
                      </p>
                      <ul style="list-style: none;">
                          <li style="margin-bottom: 12px;"><i class="fas fa-check-circle" style="color: var(--senior-secondary); margin-right: 12px;"></i> Monthly Eye & Dental Checkups</li>
                          <li style="margin-bottom: 12px;"><i class="fas fa-check-circle" style="color: var(--senior-secondary); margin-right: 12px;"></i> Free Hypertension & Diabetes Screening</li>
                          <li style="margin-bottom: 12px;"><i class="fas fa-check-circle" style="color: var(--senior-secondary); margin-right: 12px;"></i> Group Yoga & Light Exercise sessions</li>
                      </ul>
                  </div>
            </div>
        </div>
    </section>

    <!-- 10. WAYS TO SUPPORT -->
    <section id="suppport" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Join Our <span>Circle</span> of Compassion</h2>
                <p>Small acts of kindness can change an entire lifetime for an elder.</p>
            </div>
            
            <div class="tier-row">
                <div class="tier-box">
                    <h4>Nutritional Meal</h4>
                    <p>Provide a week of healthy, balanced meals for one senior.</p>
                    <div class="tier-price">₹1,500</div>
                    <a href="#" class="btn-senior" style="width: 100%;">Donate Meal</a>
                </div>
                <div class="tier-box highlight">
                    <h4>Medical Sponsorship</h4>
                    <p>Monthly meds and routine checkups for a chronically ill elder.</p>
                    <div class="tier-price">₹3,000</div>
                    <a href="#" class="btn-senior" style="width: 100%;">Support Health</a>
                </div>
                <div class="tier-box">
                    <h4>Adopt an Elder</h4>
                    <p>Complete holistic care including shelter, food, and companionship.</p>
                    <div class="tier-price">₹8,000</div>
                    <a href="#" class="btn-senior" style="width: 100%;">Adopt Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. VOLUNTEER SECTION -->
    <section class="section-padding" style="background: var(--senior-bg);">
        <div class="container" style="display: block; text-align: center;">
            <h2 style="color: var(--senior-primary); margin-bottom: 25px;">Become a <span>Grandchild</span> by Choice</h2>
            <p style="max-width: 700px; margin: 0 auto 40px; color: #555;">Spend your weekends sharing stories, teaching tech, or simply listening. Your time is the most precious gift you can give.</p>
            <a href="#" class="btn-senior" style="background: var(--senior-accent);">Register as a Volunteer</a>
        </div>
    </section>

    <!-- 12. FINAL CALL TO ACTION -->
    <section style="background-color: var(--senior-secondary); color: white; padding: 100px 0; text-align: center;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 3rem; margin-bottom: 30px;">Because Age is a <span>Golden</span> Chapter.</h2>
            <p style="font-size: 1.3rem; margin-bottom: 40px; opacity: 0.9;">Help us make it beautiful for those who paved the way for us.</p>
            <a href="#" class="btn-senior" style="background: var(--white); color: var(--senior-secondary); font-size: 1.2rem;">Contribute to Senior Care</a>
        </div>
    </section>

    <?php include(BASE_URL . 'includes/footer.php'); ?>

</body>
</html>
