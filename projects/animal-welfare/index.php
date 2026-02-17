<?php
// Define base URL for assets and includes
define('BASE_URL', '../../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Welfare | The Global Rise Foundation</title>
    <meta name="description" content="Dedicated to the protection, rescue, and rehabilitation of street animals. Join Global Rise Foundation's mission to create a compassionate world for all creatures.">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Global Styles -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css">
    
    <!-- Professional & Interactive Design for Animal Welfare -->
    <style>
        :root {
            --animal-primary: #588157; /* Sage Green */
            --animal-secondary: #3A5A40; /* Forest Green */
            --animal-accent: #BC6C25; /* Terracotta/Earth */
            --animal-light: #DAD7CD; /* Pale Green */
            --animal-cream: #FEFAE0; /* Cream */
            --white: #ffffff;
            --text-dark: #344E41;
        }

        /* Hero Section */
        .animal-hero {
            height: 90vh;
            background: linear-gradient(rgba(58, 90, 64, 0.6), rgba(58, 90, 64, 0.4)), url('<?php echo BASE_URL; ?>assets/frontend/animal-welfare.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            text-align: left;
        }
        .animal-hero-box {
            max-width: 700px;
            padding: 40px;
            background: rgba(58, 90, 64, 0.1);
            backdrop-filter: blur(10px);
            border-left: 8px solid var(--animal-accent);
        }
        .animal-hero h1 {
            font-size: 4rem;
            font-weight: 900;
            margin-bottom: 25px;
            line-height: 1.1;
        }
        .animal-hero p {
            font-size: 1.4rem;
            margin-bottom: 40px;
            opacity: 0.95;
            line-height: 1.6;
        }

        .section-padding { padding: 120px 0; }
        .bg-cream { background-color: var(--animal-cream); }
        
        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }
        .section-header h2 {
            font-size: 3rem;
            color: var(--animal-secondary);
            margin-bottom: 20px;
            font-weight: 800;
        }
        .section-header p {
            max-width: 750px;
            margin: 0 auto;
            color: #555;
            font-size: 1.15rem;
            line-height: 1.8;
        }

        /* Mission/Feature Cards */
        .animal-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }
        .animal-card {
            background: white;
            padding: 60px 40px;
            border-radius: 40px 10px;
            box-shadow: 0 15px 35px rgba(58, 90, 64, 0.05);
            transition: all 0.4s ease;
            position: relative;
        }
        .animal-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(58, 90, 64, 0.1);
        }
        .animal-icon {
            width: 80px;
            height: 80px;
            background: var(--animal-light);
            color: var(--animal-secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        .animal-card:hover .animal-icon {
            background: var(--animal-accent);
            color: white;
            transform: rotate(15deg);
        }
        .animal-card h3 {
            font-size: 1.6rem;
            color: var(--animal-secondary);
            margin-bottom: 15px;
            font-weight: 700;
        }

        /* Split Section Design */
        .flex-split {
            display: flex;
            align-items: center;
            gap: 100px;
            margin-bottom: 100px;
        }
        .split-content { flex: 1; }
        .split-image { flex: 1; position: relative; }
        .split-image img {
            width: 100%;
            border-radius: 30px 100px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.1);
        }
        .split-image::after {
            content: '';
            position: absolute;
            top: -20px; right: -20px; width: 100px; height: 100px;
            background: var(--animal-accent);
            border-radius: 50%;
            z-index: -1;
            opacity: 0.3;
        }

        /* Interactive Counter Section */
        .stats-banner {
            background: var(--animal-secondary);
            padding: 100px 0;
            color: white;
            text-align: center;
            border-radius: 100px 0;
        }
        .stats-flex {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 50px;
        }
        .stat-circle { border: 2px solid rgba(255,255,255,0.2); padding: 40px; border-radius: 50%; width: 220px; height: 220px; display: flex; flex-direction: column; justify-content: center; }
        .stat-circle h4 { font-size: 3rem; color: var(--animal-accent); margin-bottom: 5px; font-weight: 800; }
        .stat-circle p { font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase; }

        /* Story Spotlight */
        .highlight-bg { background-color: #fdfdfd; padding: 100px 0; }
        .spotlight-box {
            display: flex;
            background: white;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 40px 80px rgba(0,0,0,0.05);
        }
        .spotlight-img { flex: 1; min-height: 500px; background-size: cover; background-position: center; }
        .spotlight-txt { flex: 1.2; padding: 80px; }
        .spotlight-txt h3 { font-size: 2.5rem; color: var(--animal-secondary); margin-bottom: 25px; }

        /* Action Buttons */
        .btn-animal {
            background: var(--animal-accent);
            color: white;
            padding: 20px 50px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 800;
            display: inline-block;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn-animal:hover { background: var(--animal-secondary); transform: scale(1.05); }

        /* Adoption Spotlight */
        .adoption-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        .pet-card {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .pet-img { height: 300px; background-size: cover; background-position: center; position: relative; }
        .pet-info { padding: 30px; text-align: center; }
        .tag-available { position: absolute; top: 20px; right: 20px; background: var(--animal-primary); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; }

        @media (max-width: 992px) {
            .animal-hero h1 { font-size: 2.8rem; }
            .flex-split { flex-direction: column; gap: 50px; }
            .spotlight-box { flex-direction: column; }
            .spotlight-img { height: 350px; }
        }
    </style>
</head>
<body>

    <?php include(BASE_URL . 'includes/header.php'); ?>

    <!-- 1. HERO SECTION -->
    <section class="animal-hero">
        <div class="container" style="display: block;">
            <div class="animal-hero-box">
                <h1>Voices for the <span>Voiceless</span></h1>
                <p>Protecting, rescuing, and giving a second chance to India's street animals. Because every life deserves dignity, health, and a home.</p>
                <div style="display: flex; gap: 20px;">
                    <a href="#rescue" class="btn-animal">Enquire Rescue</a>
                    <a href="#donate" class="btn-animal" style="background:transparent; border: 2px solid white;">Support Our Shelter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. OUR MANDATE -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Our Compassionate <span>Mission</span></h2>
                <p>We are a dedicated network of animal lovers, rescuers, and medical professionals working to create a safe world for all animals.</p>
            </div>
            
            <div class="animal-grid">
                <div class="animal-card">
                    <div class="animal-icon"><i class="fas fa-truck-medical"></i></div>
                    <h3>24/7 Animal Rescue</h3>
                    <p>On-call rescue units for animals in distress, accidents, or requiring immediate medical attention.</p>
                </div>
                <div class="animal-card">
                    <div class="animal-icon"><i class="fas fa-hospital"></i></div>
                    <h3>Medical Rehabilitation</h3>
                    <p>Specialized treatment for injuries, diseases, and recovery care at our restorative shelter centers.</p>
                </div>
                <div class="animal-card">
                    <div class="animal-icon"><i class="fas fa-paw"></i></div>
                    <h3>ABC Program</h3>
                    <p>Animal Birth Control & Rabies Vaccination to maintain a healthy and stable street animal population.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. THE CRISIS -->
    <section class="section-padding bg-cream" style="border-radius: 0 0 150px 0;">
        <div class="container" style="display: block;">
            <div class="flex-split">
                <div class="split-content">
                    <h2 style="font-size: 2.8rem; color: var(--animal-secondary); margin-bottom: 30px;">The Invisible Lives on Our Streets</h2>
                    <p style="color: #444; line-height: 1.8; margin-bottom: 25px;">
                        India is home to over 60 million street animals. They face a daily struggle against hunger, road accidents, disease, and human cruelty. Without a dedicated support system, their lives are often short and painful.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 40px;">
                        <div>
                            <h4 style="color: var(--animal-accent); margin-bottom: 10px;"><i class="fas fa-bone"></i> Hunger Epidemic</h4>
                            <p style="font-size: 0.95rem; color: #666;">Over 70% of street dogs struggle to find one clean meal a day.</p>
                        </div>
                        <div>
                            <h4 style="color: var(--animal-accent); margin-bottom: 10px;"><i class="fas fa-car-burst"></i> Road Trauma</h4>
                            <p style="font-size: 0.95rem; color: #666;">Accidents are the leading cause of permanent disability in street animals.</p>
                        </div>
                    </div>
                </div>
                <div class="split-image">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/animal-welfare.jpg" alt="Animal Rescue Reality">
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CORE INTERVENTION (Detailed) -->
    <section id="rescue" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Our Impact <span>Blueprint</span></h2>
            </div>

            <div style="display: flex; gap: 30px; flex-direction: column;">
                 <div style="display: flex; gap: 50px; align-items: center; background: white; padding: 40px; border-radius: 30px; border: 1px solid #eee; flex-wrap: wrap;">
                    <div style="flex: 1; min-width: 300px;">
                        <h3 style="color: var(--animal-secondary); margin-bottom: 15px;">Advanced Rescue Hub</h3>
                        <p style="color: #666; line-height: 1.7;">Our fleet is equipped with specialized equipment for large and small animal rescues, including hydraulic lifts and medical stretchers.</p>
                    </div>
                    <div style="flex: 1; min-width: 300px; display: flex; gap: 20px;">
                        <div style="text-align: center;">
                            <h4 style="font-size: 2.5rem; color: var(--animal-primary);">12</h4>
                            <p style="font-size: 0.8rem; text-transform: uppercase;">Active Ambulances</p>
                        </div>
                        <div style="text-align: center;">
                            <h4 style="font-size: 2.5rem; color: var(--animal-primary);">50+</h4>
                            <p style="font-size: 0.8rem; text-transform: uppercase;">Para-vets</p>
                        </div>
                    </div>
                 </div>

                 <div style="display: flex; gap: 50px; align-items: center; background: white; padding: 40px; border-radius: 30px; border: 1px solid #eee; flex-wrap: wrap; flex-direction: row-reverse;">
                    <div style="flex: 1; min-width: 300px;">
                        <h3 style="color: var(--animal-secondary); margin-bottom: 15px;">Community Feeding Centers</h3>
                        <p style="color: #666; line-height: 1.7;">Establishing clean water troughs and regular feeding points across major urban hubs to eliminate hunger-driven aggression.</p>
                    </div>
                    <div style="flex: 1; min-width: 300px; display: flex; gap: 20px;">
                        <div style="text-align: center;">
                            <h4 style="font-size: 2.5rem; color: var(--animal-primary);">100+</h4>
                            <p style="font-size: 0.8rem; text-transform: uppercase;">Feeding Spots</p>
                        </div>
                        <div style="text-align: center;">
                            <h4 style="font-size: 2.5rem; color: var(--animal-primary);">2T</h4>
                            <p style="font-size: 0.8rem; text-transform: uppercase;">Food/Month</p>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>

    <!-- 5. STATS SUMMARY -->
    <section class="stats-banner">
        <div class="container" style="display: block;">
            <div class="stats-flex">
                <div class="stat-circle">
                    <h4>45k+</h4>
                    <p>Rescues Done</p>
                </div>
                <div class="stat-circle">
                    <h4>10k+</h4>
                    <p>Vaccinations</p>
                </div>
                <div class="stat-circle">
                    <h4>2k+</h4>
                    <p>Happy Adoptions</p>
                </div>
                <div class="stat-circle">
                    <h4>5M+</h4>
                    <p>Meals Served</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. ADOPTION SPOTLIGHT (Interactive Feeling) -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Find Your <span>Best Friend</span></h2>
                <p>Our shelter is full of beautiful souls waiting for a family. Adoption saves two lives - the one you take home, and the one we can now rescue.</p>
            </div>
            
            <div class="adoption-grid">
                <div class="pet-card">
                    <div class="pet-img" style="background-image: url('<?php echo BASE_URL; ?>assets/frontend/Girl-Child-Education.jpg');"> <!-- Placeholder Pet Image -->
                        <span class="tag-available">Foster Home</span>
                    </div>
                    <div class="pet-info">
                        <h4>Bruno (3Y)</h4>
                        <p style="color: #777; margin-bottom: 15px;">Accident survivor, full of love and energy.</p>
                        <a href="#" class="btn-animal" style="padding: 10px 25px; font-size: 0.8rem;">Meet Bruno</a>
                    </div>
                </div>
                <div class="pet-card">
                    <div class="pet-img" style="background-image: url('<?php echo BASE_URL; ?>assets/frontend/rural-children-education.jpg');"> <!-- Placeholder Pet Image -->
                        <span class="tag-available">Shelter Resident</span>
                    </div>
                    <div class="pet-info">
                        <h4>Luna (1Y)</h4>
                        <p style="color: #777; margin-bottom: 15px;">Gentle soul, loves playing with other dogs.</p>
                        <a href="#" class="btn-animal" style="padding: 10px 25px; font-size: 0.8rem;">Meet Luna</a>
                    </div>
                </div>
                <div class="pet-card">
                    <div class="pet-img" style="background-image: url('<?php echo BASE_URL; ?>assets/frontend/disaster-management.jpg');"> <!-- Placeholder Pet Image -->
                        <span class="tag-available">Under Treatment</span>
                    </div>
                    <div class="pet-info">
                        <h4>Milo (5Y)</h4>
                        <p style="color: #777; margin-bottom: 15px;">Wise and calm. Needs a quiet forever home.</p>
                        <a href="#" class="btn-animal" style="padding: 10px 25px; font-size: 0.8rem;">Meet Milo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. STORY TAPE (Case Study) -->
    <section class="highlight-bg">
        <div class="container" style="display: block;">
            <div class="spotlight-box">
                <div class="spotlight-img" style="background-image: url('<?php echo BASE_URL; ?>assets/frontend/disaster-management.png');"></div>
                <div class="spotlight-txt">
                    <span style="color: var(--animal-accent); font-weight: 700;">Rescue Tape #442</span>
                    <h3>The Transformation of Sheru</h3>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 30px;">
                        Found near a bypass road with multiple fractures and extreme dehydration, Sheru's chances of survival were less than 10%. Over 4 months of intensive care, 2 surgeries, and a lot of love, Sheru didn't just walk again—he ran. Today, he is our official shelter guardian.
                    </p>
                    <div style="display: flex; gap: 20px;">
                        <a href="#" class="btn-animal">Read Full Tale</a>
                        <a href="#" style="color: var(--animal-secondary); font-weight: 700; text-decoration: none;">Watch Video <i class="fas fa-play-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. BIRTH CONTROL (Why it's important) -->
    <section class="section-padding">
        <div class="container" style="display: block;">
            <div class="flex-split" style="flex-direction: row-reverse;">
                <div class="split-content">
                    <h2>Scientific <span>Compassion</span>: ABC</h2>
                    <p style="color: #666; line-height: 1.8; margin-top: 25px;">
                        Animal Birth Control (ABC) is the only humane and scientific way to manage the street dog population. We operate high-standard sterilization centers that ensure safety and quick recovery for every animal. 
                    </p>
                    <ul style="list-style: none; margin-top: 30px;">
                        <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--animal-accent); margin-right: 15px;"></i> Professional Veterinary Surgeons</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--animal-accent); margin-right: 15px;"></i> Pre & Post Operative Care Units</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--animal-accent); margin-right: 15px;"></i> Mass Anti-Rabies Vaccination Drives</li>
                    </ul>
                </div>
                <div class="split-image" style="transform: rotate(-2deg);">
                    <img src="<?php echo BASE_URL; ?>assets/frontend/rural-about.jpg" alt="Scientific Care">
                </div>
            </div>
        </div>
    </section>

    <!-- 9. ANIMAL LAWS & RIGHTS -->
    <section class="section-padding bg-cream">
        <div class="container" style="display: block;">
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="color: var(--animal-secondary);">Know Their <span>Rights</span></h2>
                <p>Animals in India are protected under various laws. We help citizens understand and enforce these rights.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                <div style="padding: 30px; background: white; border-radius: 20px;">
                    <h4 style="margin-bottom: 10px; color: var(--animal-accent);">PCA Act 1960</h4>
                    <p style="font-size: 0.9rem; color: #777;">The primary law protecting animals from cruelty and unnecessary pain.</p>
                </div>
                <div style="padding: 30px; background: white; border-radius: 20px;">
                    <h4 style="margin-bottom: 10px; color: var(--animal-accent);">ABC Rules 2001</h4>
                    <p style="font-size: 0.9rem; color: #777;">Governs the humane management of the street animal population.</p>
                </div>
                <div style="padding: 30px; background: white; border-radius: 20px;">
                    <h4 style="margin-bottom: 10px; color: var(--animal-accent);">Art 51A(g)</h4>
                    <p style="font-size: 0.9rem; color: #777;">Constitutional duty for citizens to have compassion for living creatures.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. HOW TO SUPPORT (Tiers) -->
    <section id="donate" class="section-padding">
        <div class="container" style="display: block;">
            <div class="section-header">
                <h2>Empower a <span>Rescue</span></h2>
                <p>Your support is the backbone of our rescue operations. Choose a kit to sponsor today.</p>
            </div>

            <div class="animal-grid">
                <div class="animal-card" style="text-align: center; border: 1px solid #eee;">
                    <h4>Rescue First Aid Kit</h4>
                    <p>Covers basic wound care and pain meds for 10 street animals.</p>
                    <div style="font-size: 2.2rem; font-weight: 800; margin: 25px 0; color: var(--animal-accent);">₹2,500</div>
                    <a href="#" class="btn-animal" style="width: 100%;">Sponsor Kit</a>
                </div>
                <div class="animal-card" style="text-align: center; border: 2px solid var(--animal-primary);">
                    <span style="background: var(--animal-primary); color: white; padding: 5px 20px; border-radius: 20px; font-size: 0.8rem; position: absolute; top: -15px; left: 50%; transform: translateX(-50%);">POPULAR</span>
                    <h4>Lifetime Sterilization</h4>
                    <p>Surgery, post-op care, and lifetime vaccination for 1 dog.</p>
                    <div style="font-size: 2.2rem; font-weight: 800; margin: 25px 0; color: var(--animal-accent);">₹5,000</div>
                    <a href="#" class="btn-animal" style="width: 100%;">Sponsor Surgery</a>
                </div>
                <div class="animal-card" style="text-align: center; border: 1px solid #eee;">
                    <h4>Shelter Sanctuary</h4>
                    <p>Covers food and boarding for a disabled animal for 3 months.</p>
                    <div style="font-size: 2.2rem; font-weight: 800; margin: 25px 0; color: var(--animal-accent);">₹12,000</div>
                    <a href="#" class="btn-animal" style="width: 100%;">Sponsor Shelter</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 11. BE THE CHANGE (Volunteer) -->
    <section class="section-padding bg-light">
        <div class="container" style="display: block; text-align: center;">
            <h2 style="color: var(--animal-secondary); margin-bottom: 25px;">Become a <span>Animal Hero</span></h2>
            <p style="max-width: 700px; margin: 0 auto 40px; color: #555;">Whether you can feed an animal in your lane, or help us at our shelter, every small effort counts.</p>
            <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
                 <a href="#" class="btn-animal" style="background: var(--animal-secondary);">Volunteer at Shelter</a>
                 <a href="#" class="btn-animal" style="background: transparent; border: 2px solid var(--animal-secondary); color: var(--animal-secondary);">Become a Virtual Parent</a>
            </div>
        </div>
    </section>

    <!-- 12. FINAL CALL TO ACTION -->
    <section style="background: var(--animal-accent); padding: 100px 0; text-align: center; color: white;">
        <div class="container" style="display: block;">
            <h2 style="font-size: 3rem; margin-bottom: 30px; font-weight: 900;">Because Humanity Includes All Species.</h2>
            <p style="font-size: 1.4rem; margin-bottom: 40px; opacity: 0.9;">Help us create a kinder India for our street animals.</p>
            <a href="#" class="btn-animal" style="background: var(--animal-secondary); font-size: 1.2rem;">Contribute to Welfare</a>
        </div>
    </section>

    <?php include(BASE_URL . 'includes/footer.php'); ?>

    <script>
        // Interactive hover effect for pet cards or simple scroll animations can be added here
    </script>
</body>
</html>
