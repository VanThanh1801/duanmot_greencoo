<?php include_once "./header.php";
        include_once "./sidebar.php";
?>

<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h2>Biểu đồ thống kê</h2>

                        </div>

                        <div class="product_item">
                            <div id="piechart"></div>

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                            <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            // Draw the chart and set the chart values
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Danh Muc', 'So Luong San Pham'],
                                    <?php
                                        $tongdm = count($listthongke);
                                        $i = 1;

                                        foreach($listthongke as $thongke){
                                            extract($thongke);
                                            if($i ==$tongdm) $dauphay = ""; else $dauphay = ",";
                                            echo "
                                            ['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;

                                            $i += 1;
                                        
                                        
                                        }
                                        
                                        ?>

                                ]);

                                // Optional; add a title and set the width and height of the chart
                                var options = {
                                    'title': 'Thống kê sản phẩm theo danh mục',
                                    'width': 800,
                                    'height': 600
                                };

                                // Display the chart inside the <div> element with id="piechart"
                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                chart.draw(data, options);
                            }
                            </script>

                        </div>
                    </div>
                </div>
            </div>




        </div>
    </main>

    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
<?php include_once "./footer.php" ?>