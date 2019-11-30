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
        Attendance Page
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
            <a href="http://www.toastmasters.org" class="simple-text logo-normal">
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

            </ul>
        </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#componentsExamples">
                <i class="now-ui-icons education_atom"></i>
                <p>
                    Components
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse " id="componentsExamples">
                <ul class="nav">
                    <li>
                        <a href="../../examples/components/buttons.html">
                            <span class="sidebar-mini-icon">B</span>
                            <span class="sidebar-normal"> Buttons </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/components/grid.html">
                            <span class="sidebar-mini-icon">G</span>
                            <span class="sidebar-normal"> Grid System </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/components/panels.html">
                            <span class="sidebar-mini-icon">P</span>
                            <span class="sidebar-normal"> Panels </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/components/sweet-alert.html">
                            <span class="sidebar-mini-icon">SA</span>
                            <span class="sidebar-normal"> Sweet Alert </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/components/notifications.html">
                            <span class="sidebar-mini-icon">N</span>
                            <span class="sidebar-normal"> Notifications </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/components/icons.html">
                            <span class="sidebar-mini-icon">I</span>
                            <span class="sidebar-normal"> Icons </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/components/typography.html">
                            <span class="sidebar-mini-icon">T</span>
                            <span class="sidebar-normal"> Typography </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#formsExamples">
                <i class="now-ui-icons files_single-copy-04"></i>
                <p>
                    Forms
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse " id="formsExamples">
                <ul class="nav">
                    <li>
                        <a href="../../examples/forms/regular.html">
                            <span class="sidebar-mini-icon">RF</span>
                            <span class="sidebar-normal"> Regular Forms </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/forms/extended.html">
                            <span class="sidebar-mini-icon">EF</span>
                            <span class="sidebar-normal"> Extended Forms </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/forms/validation.html">
                            <span class="sidebar-mini-icon">V</span>
                            <span class="sidebar-normal"> Validation Forms </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/forms/wizard.html">
                            <span class="sidebar-mini-icon">W</span>
                            <span class="sidebar-normal"> Wizard </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#tablesExamples">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p>
                    Tables
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse " id="tablesExamples">
                <ul class="nav">
                    <li>
                        <a href="../../examples/tables/regular.html">
                            <span class="sidebar-mini-icon">RT</span>
                            <span class="sidebar-normal"> Regular Tables </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/tables/extended.html">
                            <span class="sidebar-mini-icon">ET</span>
                            <span class="sidebar-normal"> Extended Tables </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/tables/datatables.net.html">
                            <span class="sidebar-mini-icon">DT</span>
                            <span class="sidebar-normal"> DataTables.net </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#mapsExamples">
                <i class="now-ui-icons location_pin"></i>
                <p>
                    Maps
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse " id="mapsExamples">
                <ul class="nav">
                    <li>
                        <a href="../../examples/maps/google.html">
                            <span class="sidebar-mini-icon">GM</span>
                            <span class="sidebar-normal"> Google Maps </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/maps/fullscreen.html">
                            <span class="sidebar-mini-icon">FM</span>
                            <span class="sidebar-normal"> Full Screen Map </span>
                        </a>
                    </li>
                    <li>
                        <a href="../../examples/maps/vector.html">
                            <span class="sidebar-mini-icon">VM</span>
                            <span class="sidebar-normal"> Vector Map </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="../../examples/widgets.html">
                <i class="now-ui-icons objects_diamond"></i>
                <p>Widgets</p>
            </a>
        </li>
        <li>
            <a href="../../examples/charts.html">
                <i class="now-ui-icons business_chart-pie-36"></i>
                <p>Charts</p>
            </a>
        </li>
        <li>
            <a href="../../examples/calendar.html">
                <i class="now-ui-icons media-1_album"></i>
                <p>Calendar</p>
            </a>
        </li>
        </ul>
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
                            <h4 class="card-title"> Attendance Information</h4>
                           <button  rel="tooltip" onClick='add()' class="btn btn-danger btn-icon btn-sm" style="width: 15vh">New Meet
                            <i class="now-ui-icons  "></i>
                            </button>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">

                             <?php echo"   <table class='table'>
                                    <thead class='text-primary'>
                                    <th class='text-center'>
                                        Name
                                    </th>                                    
                                    <th>
                                        Conducted
                                    </th>
                                    <th class ='text-left'>
                                        Attended
                                    </th>
                                    <th>
                                    Percentage
                                    </th>
                                 
                                    
                                    </thead>";

                             $sql5 = "select a.*, m.Name from attendance a, members m where a.usn=m.usn";
                             $records = mysqli_query($connect,$sql5);
                             while ($result5=mysqli_fetch_assoc($records)) {
                                $dc = $result5['D_count'];
                                 $c = $result5['Count'];
                                 $usn = $result5['Usn'];
                                 $id1 = $result5['A_id'];
                                $call = "CALL 'cal($dc,$c);'";
                                $callq = mysqli_query($connect,$call);
                                $res = "update attendance set Percentage = ($callq)" ;
                                 echo "<tr>
                                        <td>" . $result5['Name'] . "</td>
                                        
                                        <td>" . $result5['Count'] . "</td>
                                        <td>" . $result5['D_count'] . "</td>
                                        <td>" . $result5['Percentage'] . "</td>
                                        <td><button  id='".$id1."' onClick ='update1(this.id)' type=\"button\" rel=\"tooltip\" class=\"btn btn-info btn-icon btn-sm \">
                            <i class=\"now-ui-icons ui-1_check\"></i>
                          </button> </td>
                                     </tr>";
                             }
                             ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> Shortage</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                             <?php echo"   <table class='table'>
                                    <thead class='text-primary'>
                                    <th class='text-center'>
                                        USN
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Percentage
                                    </th>
                                                                
                                    </thead>";
                             $proc = "CALL test()";

                            $as="SELECT m.Usn, m.Name,a.Percentage FROM members m, attendance a where a.Usn=m.Usn and a.Percentage<70";
                            $records = mysqli_query($connect,$as);
                             while ($resultp=mysqli_fetch_assoc($records)) {
                               echo "<tr>
                                    <td>" . $resultp['Usn'] . "</td>
                                       <td>" . $resultp['Name'] . "</td>
                                        <td>" . $resultp['Percentage'] . "</td>
                                      
                                      
                                     </tr>";
                             }
                             ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script type ="text/javascript">

    function update1(clicked_id) {
            window.location.href = ("../function/update.php?A_id="+clicked_id);
    }
    function add() {
        window.location.href = ("../function/update_all.php");

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
        demo.checkFullPageBackgroundImage();
    });
</script>
</body>

</html>