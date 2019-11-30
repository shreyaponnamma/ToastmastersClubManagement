
<?php
include '../config/config.php';
include('../config/config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Meeting Page
    </title>
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

<body class=" sidebar-mini ">
<div class="wrapper ">
    <div class="sidebar" data-color="black">

        <div class="logo">
            <a href="http://www.toastmasters.org" class="simple-text logo-mini">
                TM
            </a>
            <a href="http://www.toastmaster.org" class="simple-text logo-normal">
                Toastmasters
            </a>
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-simple btn-icon btn-neutral btn-round">
                    <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
                    <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
                </button>
            </div>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="assets/img/tm.jpg" />
                </div>
                <div class="info">
                    <a  href="user.php" class="collapsed">
              <span>
                ADMIN
                <b class="caret"></b>
              </span>
                    </a>
                    <div class="clearfix"></div>
                    
                </div>
            </div>
            <ul class="nav">
                <li>
                    <a href="login_info.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Login Details</p>
                    </a>
                </li>
                <li>
                    <a href="member_info.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Member Details</p>
                    </a>
                </li>
                <li>
                    <a href="meeting_info.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Meeting Details</p>
                    </a>
                </li>
                <li>
                    <a href="speech_info.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Speech Details</p>
                    </a>
                </li>
                <li>
                    <a href="attendance_info.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Attendance</p>
                    </a>
                </li>
                <li>
                    <a href="special.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Special Event</p>
                    </a>
                </li>
                <li>
                    <a href="register.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Add New Member</p>
                    </a>
                </li>
                <li>
                    <a href="anew.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Sem Attendance</p>
                    </a>
                </li>
    </div>
    </div>

    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">

                    <a class="navbar-brand" href="user.php">Admin Pannel</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <ul class="navbar-nav">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="../function/logout.php">
                                <i class="now-ui-icons gestures_tap-01"></i>
                                <p> <br>Log Out
                                    <span class="d-lg-none d-md-block">Account</span>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Meeting Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                             <?php echo"   <table class='table'>
                                    <thead class='text-primary'>
                                    <th>
                                        Meeting No.
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                    <th>
                                        TMOD
                                    </th>
                                    <th >
                                        GE
                                    </th>
                                    <th>
                                        Timer
                                    </th>
                                    <th>
                                        Ah-Counter
                                    </th>
                                    <th>
                                        Grammarian
                                    </th>
                                    <th>
                                        TTM
                                    </th>
                                    </thead>";

                             $sql3 = "select * from Meeting";

                             $row = mysqli_query($connect,$sql3);
                             while ($result3=mysqli_fetch_assoc($row)){

                                 echo "<tr>
                                        <td>".$result3['M_no']."</td>
                                        <td>".$result3['Date']."</td>
                                        <td>".$result3['Tmod']."</td>
                                        <td>".$result3['Gen_Eva']."</td>
                                        <td>".$result3['Timer']."</td>
                                        <td>".$result3['Ah_Counter']."</td>
                                        <td>".$result3['Grammarian']."</td>
                                        <td>".$result3['Ttm']."</td>

                                    </tr>";
                             }
                             ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Add Meeting</h4>
                        </div>
                        <div class="card-body ">
                            <form class="form-horizontal" action="../function/newmeet.php" method="POST">
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Meeting Number</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="mno" type="text" class="form-control" required pattern="[0-9]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Date</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="date" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">TMOD</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="tmod" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">General Evaluator</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="gen_eva" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Timer</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="timer" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Ah-Counter</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="ah_counter" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Grammarian</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="gram" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Table Topic Master</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input name="ttm" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>

                        <div class="card-footer ">
                            <div class="row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="Submit" class="btn btn-fill btn-primary" value="Submit">
                                </div>
                            </div>
                        </div>
                            </form>
                </div>
        </div>
    </div>
                <footer class="footer">
                    <div class=" container-fluid ">

                        <div class="copyright" id="copyright">
                            &copy;
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>, Designed by Soujanya S Vernekar & Shreya Ponnamma. &#10084;
                        </div>
                    </div>
                </footer>
</div>
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
        demo.checkFullPageBackgroundImage();
    });
</script>
</body>

</html>