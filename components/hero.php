<?php
// Hero Section Component
?>
<section class="hero-section">
    <div class="hero-slider">
        <!-- Slide 1 -->
        <div class="hero-slide active" style="background-image: url('assets/hero/health-banner.png');">
            <div class="container">
                <div class="hero-content">
                    <h1>Empowering Communities for a Better Future</h1>
                    <p>Join us in our mission to bring sustainable change to the world.</p>
                    <a href="#" class="btn-hero">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="hero-slide" style="background-image: url('assets/frontend/mission-banner.avif');">
            <div class="container">
                <div class="hero-content">
                    <h1>Health & Well-being for Everyone</h1>
                    <p>Providing essential healthcare services to those in need.</p>
                    <a href="#" class="btn-hero">Our Programs</a>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="hero-slide" style="background-image: url('assets/hero/health-banner.png');">
             <div class="container">
                <div class="hero-content">
                    <h1>Education for Every Child</h1>
                    <p>Building a brighter future through quality education.</p>
                    <a href="#" class="btn-hero">Donate Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <button class="slider-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
    <button class="slider-btn next-btn"><i class="fas fa-chevron-right"></i></button>

    <!-- Dots -->
    <div class="slider-dots"></div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const dotsContainer = document.querySelector('.slider-dots');
    const nextBtn = document.querySelector('.next-btn');
    const prevBtn = document.querySelector('.prev-btn');
    let currentSlide = 0;
    const slideInterval = 5000; // 5 seconds

    // Create dots
    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.dot');

    function goToSlide(n) {
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        
        currentSlide = (n + slides.length) % slides.length;
        
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function prevSlide() {
        goToSlide(currentSlide - 1);
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Auto play
    let slideTimer = setInterval(nextSlide, slideInterval);

    // Pause on hover
    const heroSection = document.querySelector('.hero-section');
    heroSection.addEventListener('mouseenter', () => {
        clearInterval(slideTimer);
    });

    heroSection.addEventListener('mouseleave', () => {
        slideTimer = setInterval(nextSlide, slideInterval);
    });
});
</script>
