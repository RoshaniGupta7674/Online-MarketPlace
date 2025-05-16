<!DOCTYPE html>
<html>
<head>
    <title>USERS PAGE</title>
    <style>
        /* Your existing CSS styles */
        body {
            background: linear-gradient(to left, rgba(255, 157, 0, 0.24), rgba(36, 0, 79, 0.34));
            background-size: 100% 100%;
            align-items: center;
        }
        /* Other styles... */
        canvas {
            max-width: 600px;
            margin: 20px auto;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <form action="vendordb.php" method='post'>
        <h1>VENDOR'S LIST</h1>
        <?php
        $db = "marketplace";
        $con = mysqli_connect("localhost", "root", "", "$db");
        if (!$con) {
            die("not connected");
        }

        $result = mysqli_query($con, "SELECT `dtid`, `dname`, `dphno`, `dob`, `dadharcardno`, `status` FROM `deliveryteam`") or die(@mysqli_error());

        // Initialize counters for permitted and restricted vendors
        $permittedCount = 0;
        $restrictedCount = 0;

        while ($row = @mysqli_fetch_array($result)) {
            if ($row['status'] == 'Permit') {
                $permittedCount++;
            } else {
                $restrictedCount++;
            }
        }

        // Close the database connection
        @mysqli_close($con);
        ?>

        <!-- Canvas for Chart -->
        <canvas id="vendorChart"></canvas>

        <script>
            // Prepare data for the chart
            const ctx = document.getElementById('vendorChart').getContext('2d');
            const vendorChart = new Chart(ctx, {
                type: 'bar', // You can change this to 'line', 'pie', etc.
                data: {
                    labels: ['Permitted', 'Restricted'],
                    datasets: [{
                        label: 'Number of Vendors',
                        data: [<?php echo $permittedCount; ?>, <?php echo $restrictedCount; ?>],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

<canvas id="lineChart"></canvas>
<script>
    const ctxLine = document.getElementById('lineChart').getContext('2d');
    const lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May'],
            datasets: [{
                label: 'Line Chart Example',
                data: [65, 59, 80, 81, 56],
                fill: false,
                borderColor: 'rgba(75, 192, 192, 1)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<canvas id="pieChart"></canvas>
<script>
    const ctxPie = document.getElementById('pieChart').getContext('2d');
    const pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                label: 'Pie Chart Example',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        }
    });
</script>

<canvas id="doughnutChart"></canvas>
<script>
    const ctxDoughnut = document.getElementById('doughnutChart').getContext('2d');
    const doughnutChart = new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                label: 'Doughnut Chart Example',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        }
    });
</script>

<canvas id="radarChart"></canvas>
<script>
    const ctxRadar = document.getElementById('radarChart').getContext('2d');
    const radarChart = new Chart(ctxRadar, {
        type: 'radar',
        data: {
            labels: ['Eating', 'Drinking', 'Sleeping', 'Working', 'Playing'],
            datasets: [{
                label: 'Radar Chart Example',
                data: [20, 10, 4, 2, 5],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        }
    });
</script>

<canvas id="polarAreaChart"></canvas>
<script>
    const ctxPolarArea = document.getElementById('polarAreaChart').getContext('2d');
    const polarAreaChart = new Chart(ctxPolarArea, {
        type: 'polarArea ',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple'],
            datasets: [{
                label: 'Polar Area Chart Example',
                data: [11, 16, 7, 3, 14],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        }
    });
</script>
    </form>
</body>
</html>