<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>assets/logo.png" alt="Global Rise Foundation Logo">
            </a>
        </div>
        
        <!-- Desktop Nav -->
        <nav class="main-nav desktop-nav">
            <ul class="nav-links">
                <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Get Involved</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" class="btn-donate">Donate Now</a>
            <a href="" class="btn-donate">Join as a Volunteer</a>
        </nav>

        <!-- Mobile Menu Toggle -->
        <div class="menu-toggle" id="mobile-menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</header>

<!-- Mobile Sidebar -->
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="mobile-sidebar" id="mobile-sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <img src="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>assets/logo.png" alt="Global Rise Foundation">
        </div>
        <div class="close-sidebar" id="close-sidebar">
            <i class="fas fa-times"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-links">
            <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Work</a></li>
            <li><a href="#">Get Involved</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="sidebar-donate">
            <a href="#" class="btn-donate">Donate Now</a>
        </div>
    </div>
</div>

<script>
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const closeSidebar = document.getElementById('close-sidebar');

    function openSidebar() {
        mobileSidebar.classList.add('active');
        sidebarOverlay.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
    }

    function closeSidebarFunc() {
        mobileSidebar.classList.remove('active');
        sidebarOverlay.classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    }

    mobileMenuToggle.addEventListener('click', openSidebar);
    closeSidebar.addEventListener('click', closeSidebarFunc);
    sidebarOverlay.addEventListener('click', closeSidebarFunc);
</script>
