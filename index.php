<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login Page</title>
    <meta
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport" />

    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
</head>

<body>
    <div class="container">
        <div class="page-inner">
            <div class="row align-items-center justify-content-center" style="min-height: 90vh;">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"><a href="#">Library Books Management</a></div>
                        </div>
                        <div class="card-body">
                            <div class="card-title mb-2">Log In</div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <form action="home.php" method="post">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="email"
                                                placeholder="name@example.com" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="password"
                                                placeholder="Password" />
                                        </div>
                                        <div class="d-flex justify-content-center mb-4">
                                            <!-- <a href="forgot_password.php">Forgot Password</a> -->
                                        </div>
                                        <div class="card-action">
                                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="login_btn">Log In</button>
                                            <!-- <p class="text-center mb-0">Don't have an Account? <a href="staff_registration.php">Sign Up</a></p> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>ECharts Examples</h2>
    <div id="lineChart" style="width: 600px; height: 400px;"></div>
    <div id="barChart" style="width: 600px; height: 400px;"></div>
    <div id="pieChart" style="width: 600px; height: 400px;"></div>
    <div id="doughnutChart" style="width: 600px; height: 400px;"></div>
    <div id="radarChart" style="width: 600px; height: 400px;"></div>
    <div id="bubbleChart" style="width: 600px; height: 400px;"></div>
    <div id="multipleLineChart" style="width: 600px; height: 400px;"></div>
    <div id="multipleBarChart" style="width: 600px; height: 400px;"></div>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <script>
        // Line Chart
        var lineChart = echarts.init(document.getElementById('lineChart'));
        lineChart.setOption({
            title: {
                text: 'Line Chart'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900],
                type: 'line'
            }]
        });

        // Bar Chart
        var barChart = echarts.init(document.getElementById('barChart'));
        barChart.setOption({
            title: {
                text: 'Bar Chart'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4],
                type: 'bar'
            }]
        });

        // Pie Chart
        var pieChart = echarts.init(document.getElementById('pieChart'));
        pieChart.setOption({
            title: {
                text: 'Pie Chart'
            },
            series: [{
                name: 'Visitors',
                type: 'pie',
                radius: '50%',
                data: [{
                        value: 50,
                        name: 'New Visitors'
                    },
                    {
                        value: 35,
                        name: 'Subscribers'
                    },
                    {
                        value: 15,
                        name: 'Active Users'
                    }
                ]
            }]
        });

        // Doughnut Chart
        var doughnutChart = echarts.init(document.getElementById('doughnutChart'));
        doughnutChart.setOption({
            title: {
                text: 'Doughnut Chart'
            },
            series: [{
                name: 'Colors',
                type: 'pie',
                radius: ['40%', '70%'],
                data: [{
                        value: 10,
                        name: 'Red'
                    },
                    {
                        value: 20,
                        name: 'Yellow'
                    },
                    {
                        value: 30,
                        name: 'Blue'
                    }
                ]
            }]
        });

        // Radar Chart
        var radarChart = echarts.init(document.getElementById('radarChart'));
        radarChart.setOption({
            title: {
                text: 'Radar Chart'
            },
            radar: {
                indicator: [{
                    name: 'Running',
                    max: 100
                }, {
                    name: 'Swimming',
                    max: 100
                }, {
                    name: 'Eating',
                    max: 100
                }, {
                    name: 'Cycling',
                    max: 100
                }, {
                    name: 'Jumping',
                    max: 100
                }]
            },
            series: [{
                name: 'Team Stats',
                type: 'radar',
                data: [{
                    value: [20, 10, 30, 2, 30],
                    name: 'Team 1'
                }, {
                    value: [10, 20, 15, 30, 22],
                    name: 'Team 2'
                }]
            }]
        });

        // Bubble Chart
        var bubbleChart = echarts.init(document.getElementById('bubbleChart'));
        bubbleChart.setOption({
            title: {
                text: 'Bubble Chart'
            },
            xAxis: {
                type: 'value'
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name: 'Cars',
                type: 'scatter',
                symbolSize: function(data) {
                    return data[2];
                },
                data: [
                    [25, 17, 25],
                    [30, 25, 28],
                    [35, 30, 8]
                ]
            }, {
                name: 'Motorcycles',
                type: 'scatter',
                symbolSize: function(data) {
                    return data[2];
                },
                data: [
                    [10, 17, 20],
                    [30, 10, 7],
                    [35, 20, 10]
                ]
            }]
        });

        // Multiple Line Chart
        var multipleLineChart = echarts.init(document.getElementById('multipleLineChart'));
        multipleLineChart.setOption({
            title: {
                text: 'Multiple Line Chart'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'Python',
                    data: [30, 45, 45, 68, 69, 90, 100, 158, 177, 200, 245, 256],
                    type: 'line'
                },
                {
                    name: 'PHP',
                    data: [10, 20, 55, 75, 80, 48, 59, 55, 23, 107, 60, 87],
                    type: 'line'
                },
                {
                    name: 'Ruby',
                    data: [10, 30, 58, 79, 90, 105, 117, 160, 185, 210, 185, 194],
                    type: 'line'
                }
            ]
        });

        // Multiple Bar Chart
        var multipleBarChart = echarts.init(document.getElementById('multipleBarChart'));
        multipleBarChart.setOption({
            title: {
                text: 'Multiple Bar Chart'
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                    name: 'First time visitors',
                    data: [95, 100, 112, 101, 144, 159, 178, 156, 188, 190, 210, 245],
                    type: 'bar'
                },
                {
                    name: 'Visitors',
                    data: [145, 256, 244, 233, 210, 279, 287, 253, 287, 299, 312, 356],
                    type: 'bar'
                },
                {
                    name: 'Pageview',
                    data: [185, 279, 273, 287, 234, 312, 322, 286, 301, 320, 346, 399],
                    type: 'bar'
                }
            ]
        });
    </script>
</body>

</html>