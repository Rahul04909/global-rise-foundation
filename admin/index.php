<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Global Rise Foundation</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/admin-style.css">
</head>
<body>

    <?php include('includes/sidebar.php'); ?>

    <div class="main-wrapper">
        <?php include('includes/header.php'); ?>

        <main class="dashboard-container">
            <h1 class="page-title">Dashboard Overview</h1>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Total Donations</h3>
                        <p class="value">₹12,45,000</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Active Volunteers</h3>
                        <p class="value">342</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Ongoing Projects</h3>
                        <p class="value">12</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="stat-details">
                        <h3>Impacted Lives</h3>
                        <p class="value">50,000+</p>
                    </div>
                </div>
            </div>

            <div class="data-card">
                <h3>Recent Donations</h3>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Donor Name</th>
                                <th>Project</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rahul Sharma</td>
                                <td>Rural Education</td>
                                <td>₹5,000</td>
                                <td>17 Feb 2026</td>
                                <td><span class="status-badge status-completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>Priya Singh</td>
                                <td>Women Empowerment</td>
                                <td>₹2,500</td>
                                <td>16 Feb 2026</td>
                                <td><span class="status-badge status-pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Amit Patel</td>
                                <td>Disaster Relief</td>
                                <td>₹10,000</td>
                                <td>15 Feb 2026</td>
                                <td><span class="status-badge status-completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>Anjali Verma</td>
                                <td>Animal Welfare</td>
                                <td>₹1,200</td>
                                <td>14 Feb 2026</td>
                                <td><span class="status-badge status-completed">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script>
        const sidebarToggler = document.getElementById('sidebarToggler');
        const adminSidebar = document.getElementById('adminSidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        sidebarToggler.addEventListener('click', () => {
            adminSidebar.classList.toggle('show');
            sidebarOverlay.classList.toggle('show');
        });

        sidebarOverlay.addEventListener('click', () => {
            adminSidebar.classList.remove('show');
            sidebarOverlay.classList.remove('show');
        });
    </script>
</body>
</html>
