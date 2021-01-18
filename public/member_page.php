<?php
session_start();

include('../config/config.php');
if(!isset($_SESSION['role'])) {
    header("Location:../");
}
if($_SESSION['role'] != 'user') {
    header("Location:../");
}
$usn = $_SESSION['usn'];
$name = $_SESSION['name'];

$sql = "select * from speech where usn = '$usn' order by m_no";

$records = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../upload/tm.jpg">
    <link rel="icon" type="image/png" href="../upload/tm.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        VVCE Toastmasters</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.4.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="sidebar-mini ">

<div class="main-panel" id="main-panel">
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <h2>Hello Toastmasters</h2>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="change_pass.php">
                                <i class="now-ui-icons gestures_tap-01"></i>
                                Change Password
                                <p>
                                    <span class="d-lg-none d-md-block"></span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../function/logout.php">
                                <i class="now-ui-icons gestures_tap-01"></i>
                                Logout
                                <p>
                                    <span class="d-lg-none d-md-block"></span>
                                </p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
    <div class="panel-header panel-header-sm">

    </div>
    <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">My Speech Details</h4>
                        </div>
                        <!--Displaying Table-->
                        <div class="card-body">
                            <div class='table-responsive'>
                                <?php echo " <table class='table'>
                                    <thead class=' text-primary'>
                                    <th>
                                        Meeting Number
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                       Title
                                    </th>
                                    <th >
                                        Level
                                    </th>
                                    <th >
                                        Evaluator
                                    </th>
                                    </thead> ";

                                while ($member=mysqli_fetch_assoc($records)){

                                    echo "<tr>
                                        <td>".$member['m_no']."</td>
                                        <td>".$member['date']."</td>
                                         <td>".$member['title']."</td>
                                          <td>".$member['level']."</td> 
                                          <td>".$member['evaluator']."</td>
                                                                                                           
                                        </tr>";
                                }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="card-body">
                            <div class="author">
                                <?php
                                $sql1 = "select m.* ,a.* from members m,attendance a where m.usn = '$usn' and a.usn = m.usn ";

                                $record = mysqli_query($connect,$sql1);
                                while ($member = mysqli_fetch_assoc($record)) {
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<br>";
                                    echo "<h2>TM  " . $member['name'] . "</h2>";
                                    echo "<p> M_id : " . $member['m_id'] . "</p>";
                                    echo "<p> Year : " . $member['year'] . "</p>";
                                    echo "<p> Level: " . $member['level'] . "</p>";
                                    if($member['percentage'] < 65) {
                                        echo "<p class='text-danger'> Attendance : " . $member['percentage'] . "%</p>";
                                    }
                                    else {
                                        echo "<p class='text-info'> Attendance : " . $member['percentage'] . "%</p>";
                                    }
                                }
                                ?>

                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="../function/qrcode.php" class="btn-fill btn-outline-dark btn-round">Mark Attendance</a>

                                </div>
                            </div>

                        </div>
                    </div>
                    </div>
            </div>
    </div>
    <footer class="footer">
        <div class="copyrights">
            <div class=" container-fluid text-center">
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed & Developed by <a href="http://www.linkedin.com/in/soujanya-satish-vernekar" style="color: #00bbff"> Soujanya S Vernekar</a> & <a href="http://www.linkedin.com/in/shreya-ponnamma-13578b148" style="color: #00bbff">Shreya Ponnamma.</a> &#10084;
                </div>
            </div>
        </div>

    </footer>
</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="assets/js/plugins/sweetalert2.min.js"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="assets/js/plugins/bootstrap-datetimepicker.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-dashboard.min.js?v=1.4.1" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();

    });
</script>
</body>
</html>