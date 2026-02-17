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
                <li class="dropdown">
                    <a href="#">Our Work <i class="fas fa-chevron-down" style="font-size: 12px; margin-left: 5px;"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/animal-welfare/index.php">Animal Welfare</a></li>
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/disaster-management/index.php">Disaster Management</a></li>
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/educating-slum-children/index.php">Educating Slum Children</a></li>
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/health-projects/index.php">Health Projects</a></li>
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/persons-with-disabilites/index.php">Persons with Disabilities</a></li>
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/rural-children-education/index.php">Rural Children Education</a></li>
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/senior-citizen-care/index.php">Senior Citizen Care</a></li>
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/swachh-bharat-mission/index.php">Swachh Bharat Mission</a></li>
                        <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/women-empowerment/index.php">Women Empowerment</a></li>
                    </ul>
                </li>
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
            <li>
                <a href="#" class="mobile-dropdown-toggle">Our Work <i class="fas fa-chevron-down" style="font-size: 12px; margin-left: 5px; float: right;"></i></a>
                <ul class="mobile-submenu" style="list-style:none; padding-left: 20px; font-size: 0.9em; display: none;">
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/animal-welfare/index.php">Animal Welfare</a></li>
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/disaster-management/index.php">Disaster Management</a></li>
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/educating-slum-children/index.php">Educating Slum Children</a></li>
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/health-projects/index.php">Health Projects</a></li>
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/persons-with-disabilites/index.php">Persons with Disabilities</a></li>
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/rural-children-education/index.php">Rural Children Education</a></li>
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/senior-citizen-care/index.php">Senior Citizen Care</a></li>
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/swachh-bharat-mission/index.php">Swachh Bharat Mission</a></li>
                    <li><a href="<?php echo defined('BASE_URL') ? BASE_URL : './'; ?>projects/women-empowerment/index.php">Women Empowerment</a></li>
                </ul>
            </li>
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

    // Mobile Submenu Toggle
    const mobileDropdownToggle = document.querySelector('.mobile-dropdown-toggle');
    const mobileSubmenu = document.querySelector('.mobile-submenu');

    if (mobileDropdownToggle && mobileSubmenu) {
        mobileDropdownToggle.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            if (mobileSubmenu.style.display === 'none' || mobileSubmenu.style.display === '') {
                mobileSubmenu.style.display = 'block';
                this.querySelector('i').style.transform = 'rotate(180deg)';
            } else {
                mobileSubmenu.style.display = 'none';
                this.querySelector('i').style.transform = 'rotate(0deg)';
            }
        });
    }
</script>
