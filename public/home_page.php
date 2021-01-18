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
        <title>Vvce Toastmasters </title>

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
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-plain card-subcategories">
                        <div class="card-header ">
                            <h4 class="card-title text-center">Home Page Updates</h4>
                            <p class="text-center" style="color:  #000033"><b>Kindly follow the instructions!!</b></p>
                            <br />
                        </div>
                        <div class="card-body ">
                            <!--
                                   color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                      -->
                            <ul class="nav nav-pills nav-pills-info nav-pills-icons justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                                        <i class="now-ui-icons ui-2_time-alarm"></i> Meeting details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                                        <i class="now-ui-icons shopping_shop"></i> Front Page
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                                        <i class="now-ui-icons business_briefcase-24"></i> Officers
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tab-space tab-subcategories">
                                <!--Meeting Details Update-->
                                <div class="tab-pane active" id="link1">
                                    <div class="row">
                                    <div class="col-md-7">
                                        <form id="RegisterValidation" action="../function/img_change.php" method="post">
                                            <h4 class="card-title">Meeting Details</h4>
                                            <div class="card" style="background-color:  #cce0ff">
                                                <div class="card-body ">
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Title *
                                                        </label>
                                                        <input style="background-color: white" class="form-control" name="title"  type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Date *
                                                        </label>
                                                        <input style="background-color: white" class="form-control" name="date"  type="date" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Time *
                                                        </label>
                                                        <input style="background-color: white" class="form-control" name="time" type="time" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Venue *
                                                        </label>
                                                        <input style="background-color: white" class="form-control" name="venue"  type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>
                                                            TMOD *
                                                        </label>
                                                        <input style="background-color: white" class="form-control" name="tmod"  type="text" required="true" />
                                                    </div>

                                                    <div class="category form-category">* Required fields</div>
                                                </div>

                                                <div class="card-footer text-center">
                                                    <input type="submit" class=" btn-outline-dark btn-round " name="meeting_up">
                                                </div>
                                            </div>
                                        </form>
                                            <div class="card " style="background-color:   #cce0ff">
                                                <div class="card-header ">
                                                    <h4 class="card-title">Poster</h4>
                                                </div>
                                                <!--Poster image-->
                                                <div class="card-body ">
                                                    <form method="post" action="../function/poster_change.php" enctype="multipart/form-data">
                                                        <div class="form-group form-file-upload form-file-simple">
                                                            <p>Please upload image with name 'poster.jpg'</p>
                                                            <input style="background-color: white" type="text" class="form-control inputFileVisible" placeholder="Select image...">
                                                            <input  type="file" class="inputFileHidden" name="file">
                                                            <div class="card-footer text-center">
                                                                <input type='submit' value='UPLOAD' name='but_upload' class="btn-outline-dark btn-round">
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        <div class="col-md-5">
                                            <div class="card card-timeline card-plain">
                                                <div class="card-body">
                                                    <ul class="timeline timeline-simple">
                                                        <li class="timeline-inverted">
                                                            <div class="timeline-badge danger">
                                                                <i class="now-ui-icons business_bulb-63"></i>
                                                            </div>
                                                            <div class="timeline-panel">
                                                                <div class="timeline-heading">
                                                                    <span class="badge badge-danger">NOTE</span>
                                                                </div>
                                                                <div class="timeline-body">

                                                                    <p><b>Fill All details which have to displayed on the home screen</b></p>
                                                                    <br>
                                                                    <p><b>Kindly Upload images with following names:</b></p>
                                                                    <ul>
                                                                        <li>poster.jpg</li>
                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Home page Updates-->
                                <div class="tab-pane" id="link2">
                                    <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="card-title">Front Page Images</h4>
                                        <div class="card " style="background-color: #cce0ff">
                                            <div class="card-header ">

                                            </div>

                                            <div class="card-body ">
                                                <div class="col-md-10">
                                                    <form action="../function/img_change.php" method="post" enctype="multipart/form-data">
                                                        <h6 class="card-title">Multiple Images Upload</h6>
                                                        <div class="form-group form-file-upload form-file-multiple">
                                                            <input type="file" multiple="" class="inputFileHidden" name="files[]">
                                                            <input style="background-color: white" type="text" class="form-control inputFileVisible" placeholder="Select Multiple images ..." multiple="">
                                                            <div class="card-footer  text-center">
                                                            <input class="btn-round btn-sm btn-outline-dark" type="submit" name="submit" value="UPLOAD">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card card-timeline card-plain">
                                            <div class="card-body">
                                                <ul class="timeline timeline-simple">
                                                    <li class="timeline-inverted">
                                                        <div class="timeline-badge danger">
                                                            <i class="now-ui-icons business_bulb-63"></i>
                                                        </div>
                                                        <div class="timeline-panel">
                                                            <div class="timeline-heading">
                                                                <span class="badge badge-danger">NOTE</span>
                                                            </div>
                                                            <div class="timeline-body">
                                                                <p><b> Kindly upload images with names:</b></p>
                                                                <ul><li>image1.jpg</li><li>image2.jpg</li><li>image3.jpg</li><li>achivement1.jpg</li><li>achivement2.jpg</li><li>achivement3.jpg</li></ul>
                                                            </div>

                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!--Officers details Update-->
                                <div class="tab-pane" id="link3">
                                    <div class="row">
                                    <div class="col-md-7">
                                        <h4 class="card-title">Officers Details</h4>
                                        <div class="card " style="background-color:   #cce0ff">
                                        <div class="card-body">
                                            <div class="col-md-10">
                                                <form action="../function/img_change.php" method="post" enctype="multipart/form-data">

                                                    <h6 >Multiple Images Upload</h6>
                                                    <div class="form-group form-file-upload form-file-multiple">
                                                        <input type="file" multiple="" class="inputFileHidden" name="files[]">
                                                        <input style="background-color: white" type="text" class="form-control inputFileVisible" placeholder="Multiple chooser..." multiple="">
                                                        <div class="card-footer text-center">
                                                        <input class="btn-outline-dark btn-sm btn-round" type="submit" name="submit" value="UPLOAD">
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="card-header ">
                                            <h4 class="card-title">Officers</h4>
                                        </div>
                                        <div class="card " style="background-color:   #cce0ff">

                                            <div class="card-body ">
                                                <form id="LoginValidation" action="../function/img_change.php" method="post">

                                                    <div class="form-group has-label">
                                                        <label>President *</label>
                                                        <input style="background-color: white" class="form-control" name="presi" type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>VP-Educate *</label>
                                                        <input style="background-color: white" class="form-control" name="vpedu" type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>VP-Membership *</label>
                                                        <input style="background-color: white" class="form-control" name="vpmem" type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>VP-Public Relations *</label>
                                                        <input style="background-color: white" class="form-control" name="vppr" type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>Secretary *</label>
                                                        <input style="background-color: white" class="form-control" name="secretary" type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>Treasurer *</label>
                                                        <input style="background-color: white" class="form-control" name="treasurer" type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>Sargent and Arms *</label>
                                                        <input style="background-color: white" class="form-control" name="saa" type="text" required="true" />
                                                    </div>
                                                    <div class="form-group has-label">
                                                        <label>Contact Number *</label>
                                                        <input style="background-color: white" class="form-control" name="mob" type="text" required="true" />
                                                    </div>
                                                    <div class="category form-category">* Required fields</div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <input type="submit" class=" btn-outline-dark btn-round" name="officer_up">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-5">
                                            <div class="card card-timeline card-plain">
                                                <div class="card-body">
                                                    <ul class="timeline timeline-simple">
                                                        <li class="timeline-inverted">
                                                            <div class="timeline-badge danger">
                                                                <i class="now-ui-icons business_bulb-63"></i>
                                                            </div>
                                                            <div class="timeline-panel">
                                                                <div class="timeline-heading">
                                                                    <span class="badge badge-danger">NOTE</span>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <p><b>Kindly Upload images with following names:</b></p>
                                                                        <ul>
                                                                        <li>president.jpg</li>
                                                                        <li>vpedu.jpg</li>
                                                                        <li>vpmem.jpg</li>
                                                                        <li>vppr.jpg</li>
                                                                        <li>secratary.jpg</li>
                                                                        <li>tresurer.jpg</li>
                                                                        <li>saa.jpg</li>
                                                                    </ul>

                                                                </div>

                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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