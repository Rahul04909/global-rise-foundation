<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="assets/logo.png" alt="Global Rise Foundation Logo">
            </a>
        </div>
        
        <nav class="main-nav">
            <div class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Get Involved</a></li>
                <li><a href="#">Contact</a></li>
                <!-- Mobile only donate button could go here if needed, but keeping it simple -->
            </ul>
            <a href="#" class="btn-donate">Donate Now</a>
        </nav>
    </div>
</header>
<script>
    document.getElementById('mobile-menu').addEventListener('click', function() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
        
        // Simple icon toggle
        const icon = this.querySelector('i');
        if (navLinks.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-times');
        } else {
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        }
    });
</script>
