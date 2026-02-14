<section class="hero-slider">
    <div class="slider-container">
        <!-- Slide 1 -->
        <div class="slide active" style="background-image: url('assets/hero/health-banner.png');">
            <div class="container">
                <div class="slide-content">
                    <h1>Empowering Communities, One Step at a Time</h1>
                    <p>Join us in our mission to create sustainable change and a brighter future for all.</p>
                    <a href="#" class="btn-hero">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('https://placehold.co/1920x800/1D3557/FFFFFF?text=Education+for+All');">
            <div class="container">
                <div class="slide-content">
                    <h1>Education is the Key to Freedom</h1>
                    <p>We believe every child deserves access to quality education and opportunities.</p>
                    <a href="#" class="btn-hero">Our Projects</a>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('https://placehold.co/1920x800/457B9D/FFFFFF?text=Health+&+Wellbeing');">
            <div class="container">
                <div class="slide-content">
                    <h1>Health & Wellbeing for Everyone</h1>
                    <p>Providing essential healthcare services to underserved regions around the world.</p>
                    <a href="#" class="btn-hero">Donate Now</a>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button class="prev-btn" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next-btn" onclick="moveSlide(1)">&#10095;</button>

        <!-- Dots -->
        <div class="slider-dots">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
</section>

<script>
    let slideIndex = 1;
    let slideInterval;

    // Initialize slider
    showSlides(slideIndex);
    startAutoplay();

    function moveSlide(n) {
        showSlides(slideIndex += n);
        resetAutoplay();
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
        resetAutoplay();
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.remove("active");
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove("active");
        }
        
        slides[slideIndex-1].classList.add("active");
        dots[slideIndex-1].classList.add("active");
    }

    function startAutoplay() {
        slideInterval = setInterval(function() {
            moveSlide(1);
        }, 5000); // Change image every 5 seconds
    }

    function resetAutoplay() {
        clearInterval(slideInterval);
        startAutoplay();
    }
</script>
