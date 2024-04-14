<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/admindashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Staff Panel</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h1>Staff Panel</h1>
        </div>
        <nav class="navigation">
            <ul class="nav-menu">
                <li><a href="./adminviewusers.php">View user</a></li>
                <li><a href="./adminusers.php">View admin</a></li>
                <li><a href="./stafflogout.php">logout</a></li>

                <li><a href="#">Settings</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">

        <div class="content">
            <div class="dashboard-overview">
                <h2>Dashboard Overview</h2>
                <p>Welcome to staff Dashboard. Here, you can manage users, and settings of the website.</p>
            </div>

            <br>
            <div class="dashboard-container">
                <div class="dashboard-widget pie-chart-container">
                    <h2>User Distribution</h2>
                    <canvas id="userPieChart" class="pie-chart" width="400" height="400"></canvas>
                </div>

                <div class="dashboard-widget userGrowth-chart">
                    <h2>User Growth</h2>
                    <canvas id="userLineChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; staff Panel</p>
    </footer>

    <script>
        var userPieData = {
            labels: ['Admins', 'Regular Users', 'Guests'],
            datasets: [{
                data: [30, 60, 10],
                backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384']
            }]
        };

        var userLineData = {
            labels: ['2019', '2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Number of Users',
                data: [200, 400, 600, 800, 1000],
                borderColor: '#ff6384',
                fill: false
            }]
        };

        var userPieChart = new Chart(document.getElementById('userPieChart'), {
            type: 'pie',
            data: userPieData
        });

        var userLineChart = new Chart(document.getElementById('userLineChart'), {
            type: 'line',
            data: userLineData
        });
    </script>
</body>
</html>
