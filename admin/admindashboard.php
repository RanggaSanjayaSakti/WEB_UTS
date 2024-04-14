<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/admindashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Admin Panel</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>Admin Panel</h1>
        </div>
        <nav class="navigation">
            <ul class="nav-menu">
                <li><a href="adminviewjourneys.php">View all Journeys</a></li>

                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="silhouette.png" alt="Silhouette Image"><br><br>
            </div>
            <h2 style="color: cornsilk;">Welcome, <?php echo $_SESSION['AdminLoginId'];?></h2>
            <ul class="sidebar-menu">
                <li><a href="#"><i class="fa fa-home"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-edit"></i> Content Management</a></li>
                <li><a href="#"><i class="fa fa-users"></i> User Management</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> Comments</a></li>
                <li><a href="adminviewjourneys.php"><i class="fa fa-pencil"></i> Update Journeys</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
            </ul>
            <div class="sidebar-footer" style="color: #333;">
                <p style="color:cornsilk;">Logged in as Admin</p>
                <a href="adminlogout.php" style="color: cornsilk;"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
        </div>

        <div class="content">
            <div class="dashboard-overview">
                <h2>Dashboard Overview</h2>
                <p>Welcome to Admin Dashboard. Here, you can manage journeys, users, and settings of the website.</p>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; Admin Panel</p>
    </footer>

</body>
</html>
