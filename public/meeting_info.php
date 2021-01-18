<?php
session_start();

include('../config/config.php');
if(!isset($_SESSION['role'])) {
    header("Location:../");
}
if($_SESSION['role'] != 'admin') {
    header("Location:../");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../upload/tm.jpg">
    <link rel="icon" type="image/png" href="../upload/tm.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Vvce Toastmasters </title>
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
    <div class="sidebar" data-color="">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="../public/admin.php" class="simple-text logo-mini">
                TM
            </a>
            <a href="../public/admin.php"  class="simple-text logo-normal">
                Toastmasters
            </a>
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-simple btn-icon btn-neutral btn-round">
                    <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
                    <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
                </button>
            </div>
        </div>
        <!--Sidebar-->
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="../upload/tm.jpg" alt="" />
                </div>
                <div class="info">
                    <a  href="admin.php" >
              <span>
                VVCE TM Officers
              </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>

            <ul class="nav">
                <!--Member Details Page-->
                <li>
                    <a data-toggle="collapse" href="#formsExamples">
                        <i class="now-ui-icons design_app"></i>
                        <p>
                            Members
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="formsExamples">
                        <ul class="nav">
                            <li>
                                <a href="login_info.php">
                                    <span class="sidebar-mini-icon">LD</span>
                                    <span class="sidebar-normal"> Login Details</span>
                                </a>
                            </li>
                            <li>
                                <a href="member_info.php">
                                    <span class="sidebar-mini-icon">D</span>
                                    <span class="sidebar-normal"> Details </span>
                                </a>
                            </li>
                            <li>
                                <a href="new_mem.php">
                                    <span class="sidebar-mini-icon">NM</span>
                                    <span class="sidebar-normal"> Add New Member </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Meeting Details Page-->
                <li>
                    <a data-toggle="collapse" href="#tablesExamples">
                        <i class="now-ui-icons design_app"></i>
                        <p>
                            Meetings
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="tablesExamples">
                        <ul class="nav">
                            <li>
                                <a href="meeting_info.php">
                                    <span class="sidebar-mini-icon">D</span>
                                    <span class="sidebar-normal"> Details</span>
                                </a>
                            </li>
                            <li>
                                <a href="speech_detail.php">
                                    <span class="sidebar-mini-icon">S</span>
                                    <span class="sidebar-normal"> Speeches </span>
                                </a>
                            </li>
                            <li>
                                <a href="special_event.php">
                                    <span class="sidebar-mini-icon">SE</span>
                                    <span class="sidebar-normal"> Special Events</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Attendance Page-->
                <li>
                    <a data-toggle="collapse" href="#mapsExamples">
                        <i class="now-ui-icons design_app"></i>
                        <p>
                            Attendance
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="mapsExamples">
                        <ul class="nav">
                            <li>
                                <a href="mark.php">
                                    <span class="sidebar-mini-icon">MA</span>
                                    <span class="sidebar-normal"> Mark attendance </span>
                                </a>
                            </li>
                            <li>
                                <a href="shortage.php">
                                    <span class="sidebar-mini-icon">SL</span>
                                    <span class="sidebar-normal"> Shortage list </span>
                                </a>
                            </li>
                            <li>
                                <a href="sem_attend.php">
                                    <span class="sidebar-mini-icon">SA</span>
                                    <span class="sidebar-normal"> Sem Attendance </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Guest Info-->
                <li>
                    <a href="guest_info.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Guest Details</p>
                    </a>
                </li>
                <!--Tesimonials-->
                <li>
                    <a href="views_table.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Testimonial </p>
                    </a>
                </li>
                <!--Edit home page-->
                <li>
                    <a href="home_page.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Edit Home Page</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="admin.php" style="color: cornflowerblue" ><h2><b>HELLO  OFFICERS</b></h2>
                    </a>
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
                <!--Table display-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Meeting Information</h4>
                        </div>
                        <div class="col-md-4">

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


                                    $sql3 = "select * from meeting";
                                    $row = mysqli_query($connect, $sql3);
                                    while ($result3 = mysqli_fetch_assoc($row)) {
                                        $id1 = $result3['m_no'];

                                        echo "<tr>
                                        <td>" . $result3['m_no'] . "</td>
                                        <td>" . $result3['date'] . "</td>
                                        <td>" . $result3['tmod'] . "</td>
                                        <td>" . $result3['gen_eva'] . "</td>
                                        <td>" . $result3['timer'] . "</td>
                                        <td>" . $result3['ah_counter'] . "</td>
                                        <td>" . $result3['grammarian'] . "</td>
                                        <td>" . $result3['ttm'] . "</td>   
                                        
                                        <td class=\"text-right\">
                                             <button id='".$id1."' onClick ='delete1(this.id)' type=\"button\" rel=\"tooltip\" class=\"btn btn-danger btn-icon btn-sm \">
                                                <i class=\"now-ui-icons ui-1_simple-remove\"></i>
                                             </button>
                                            </td>                                 
                                         
                                    </tr>";

                                }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add meeting form-->
                <div class="col-md-12">
                    <div class="card " style="background-color:   #cce0ff">
                        <div class="card-header ">
                            <h4 class="card-title">Add Meeting</h4>
                        </div>
                        <div class="card-body ">
                            <form class="form-horizontal" action="../function/newmeet.php" method="POST">
                                <div class="row">
                                    <label style="color: black" class="col-md-3 col-form-label">Meeting Number</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input style="background-color: white" name="mno" type="text" class="form-control" required pattern="[0-9]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-md-3 col-form-label">Date</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input style="background-color: white" name="date" type="date" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-md-3 col-form-label">TMOD</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input style="background-color: white" name="tmod" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-md-3 col-form-label">General Evaluator</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input style="background-color: white" name="gen_eva" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-md-3 col-form-label">Timer</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input style="background-color: white" name="timer" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-md-3 col-form-label">Ah-Counter</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input style="background-color: white" name="ah_counter" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-md-3 col-form-label">Grammarian</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input style="background-color: white" name="gram" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-md-3 col-form-label">Table Topic Master</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input style="background-color: white" name="ttm" type="text" class="form-control" required pattern="[A-Za-z\s]+">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-center ">
                                    <div class="row">
                                        <label style="color: black" class="col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="Submit" class="btn-fill btn-outline-dark btn-round" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
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
</div>

<!--Functions for Button-->
<script type ="text/javascript">
    function delete1(clicked_id) {
        if (window.confirm('Do you want to delete?')){
            window.location.href = ("../function/del_meeting.php?m_no="+clicked_id);

        } else {
            die();
        }
    }
</script>
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