<?php
include 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
    <title>Vvce Toastmasters </title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="upload/tm.jpg" type="image/x-icon" />
<link rel="apple-touch-icon" href="upload/tm.jpg">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!--Additional-->

    <!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<body>

<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->
<!--Contacts-->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="left-top">
                    <div class="email-box">
                        <a href="mailto:vvcetoastmasters@vvce.ac.in"><i class="fa fa-envelope-o" aria-hidden="true"></i>vvcetoastmasters@vvce.ac.in</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="right-top">
                    <div class="social-box">
                        <ul>
                            <li><a href="https://instagram.com/vvcetoastmasters?igshid=xp4yivhwtra1"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://m.facebook.com/vvcetoastmasters/"><i class="fa fa-facebook-square " aria-hidden="true"></i></a></li>
                            <li><a href="https://m.youtube.com/channel/UCUSal24qsvI1kdmzH9EtciQ"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="https://mobile.twitter.com/vvce_tm"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Header-->
<header class="header header_style_01">
    <nav class="megamenu navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="upload/web.png" style="width: 250px; height: 150px alt="" class="img-responsive img-rounded">
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="#about" class="navbar-link">About us</a></li>
                    <li><a href="#achivement" class="navbar-link">Club Achivements</a></li>

                    <li><a href="#meeting_details" class="navbar-link">Upcoming Events</a></li>
                    <li><a href="#officers">Club Leaders</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="public/contact_us.php">Contact Us</a></li>

                    <li><a href="public/Login.html">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header><!--end section-->

<!--Sliding Images-->
<div class="slider-area">
    <div class="slider-wrapper owl-carousel">
        <div class="slider-item home-one-slider-otem slider-item-four slider-bg-one">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="slider-content-area">
                        <div class="slide-text">
                            <h1 class="homepage-three-title"> <span>Excellence</span> Is our Aim</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item home-one-slider-otem slider-item-four slider-bg-four">
            <div class="container">
                <div class="row">
                    <div class="slider-content-area">
                        <div class="slide-text">
                            <h1 class="homepage-three-title">In The <span> Heritage</span> City, Mysuru</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
            <div class="container">
                <div class="row">
                    <div class="slider-content-area">
                        <div class="slide-text">
                            <h1 class="homepage-three-title">An Adobe Of <span>Dynamic Spirit</span> and <span>Excellence</span></h1>
                            <!-- <div class="slider-content-btn">
                                <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
                                <a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item home-one-slider-otem slider-item-four slider-bg-three">
            <div class="container">
                <div class="row">
                    <div class="slider-content-area">
                        <div class="slide-text">
                            <h1 class="homepage-three-title"><span>Leaders</span> Of Future</h1>
                            <!-- <div class="slider-content-btn">
                                <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
                                <a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>
</div><!--end section-->

<!--About-->
<div id="about" class="  section wb ">
<!--<div id="about" class="parallax section parallax-off slider-bg-four" >-->
    <div class="container">
        <div class="row section-title text-center">
            <div class="col-md-12">
                <h3>About Us</h3>
                <p style="color: black; font-family:'Open Sans Semibold'; font-size: 15px; text-align: center">
                    VVCE Toastmasters is a Student’s Club of <a style="color: darkblue; font-size: 17px" href="https://vvce.ac.in/"> <i class="icon icon-link"><b>Vidyavardhaka College of Engineering (VVCE)</b></i></a>, Mysore, Karnataka in India. It is a part of
                    <a style="color: darkblue; font-size: 17px" href="https://www.toastmasters.org/"> <i class="icon icon-link"><b>Toastmasters International,</b></i></a> a US-headquartered nonprofit
                    which is an educational organization that operates clubs worldwide for the purpose
                    of promoting communication, public speaking and leadership. It was
                    established by Ralph C. Smedley on October 22, 1924, at the YMCA in
                    Santa Ana, California, United States. Today it is spread across 143
                    countries with 16,800+ clubs and in a total of around 358,000 members
                    worldwide.
                    <br> VVCE Toastmasters club falls under District 121, Area C4.
                    The club was officially chartered on 21st August 2017 with 20 charter
                    members. Our club helps the students in their academics, to build up
                    confidence for seminars and presentations making them ready for the
                    job interviews. It gives a platform to overcome the fear of public
                    speaking. We also conduct educational sessions best speakers around
                    the globe on topics like public speaking, impromptu speaking, content
                    writing and various other topics. It’s a boundless platform of a network. We get to connect with people from various fields and learn
                    from their experiences. We meet every Friday at 5:30 in VVCE.

                </p>
                <a style="margin-top: 10px" href="https://drive.google.com/drive/folders/1s9mRt6tcXndlRs6_eCumxzoHGI7mdf8T?usp=sharing" class="btn btn-light btn-radius btn-brd grd1">Minutes of the meeting</a>
                <div class="hidden-md hidden-lg col-xs-12">
                    <a style="font-size: 25px;color: black" href="public/contact_us.php" class="btn  btn-link">
                        <i  class="icon icon-headphones"></i> Contact Us
                    </a>
                </div>
                <!-- end messagebox -->
            </div>
           <!-- <div class="col-md-6">
                <div class="post-media wow fadeIn">
                    <img src="upload/image4.jpg" style="width: 500px; height: 700px" alt="" class="img-responsive img-rounded">
                </div>
            </div> end col -->
        </div><!-- end row -->
        <div class="row">
           <!-- <div class="col-md-offset-0 col-sm-12 col-md-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 ">-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a style="font-size: 25px;color: #FF0000" href="https://m.youtube.com/channel/UCUSal24qsvI1kdmzH9EtciQ" class="btn  btn-link">
                    <i  class="icon icon-youtube"></i> Subscribe Us
                </a>

            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://instagram.com/vvcetoastmasters?igshid=xp4yivhwtra1" style="font-size: 25px;color:#833AB4" class="btn btn-link">
                    <i  class="fa fa-instagram"></i> Follow Us
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://m.facebook.com/vvcetoastmasters/" style="font-size: 25px;color: #3b5998" class="btn btn-link">
                    <i  class="fa fa-facebook-square"></i> Connect with Us
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="https://mobile.twitter.com/vvce_tm" style="font-size: 25px;color: #00acee" class="btn  btn-link">
                    <i  class="icon icon-twitter"></i> Tweet Us
                </a>
            </div>

        </div><!-- end row -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<!--Achivements-->
<div id="achivement">
    <div class="parallax section parallax-off" data-stellar-background-ratio="0.9" >

        <div class="container">
            <div class="section-title text-center">
                <h3>Club Achivements</h3>
                <p style="color:#cc0052">Every Great Achivement Was Once Considered Impossible ...</p>
            </div>
            <div class="row text-center stat-wrap">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img  src="upload/achivement1.jpg" alt="" class="wow fadeIn" style="height: 320px;width: 320px ;  border: 5px solid #555;">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="upload/achivement2.jpg" alt="" class="wow fadeIn" style="height: 320px;width: 320px ;  border: 5px solid #555;">
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <img  src="upload/achivement3.jpg" alt="" class="wow fadeIn" style=" height: 320px;width: 320px ;  border: 5px solid #555; padding-top: 20px">
                </div>
            </div>
            <div class="row text-center stat-wrap">
                <a STYLE="margin-top: 50px" href="public/achivement.php" class="btn btn-light btn-radius btn-brd grd1">Our More Achivements</a>
            </div>

        </div>
    </div>
</div><!-- end section -->


<!--Meeting Details-->
<div id="meeting_details">
    <div id="features" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Upcoming Events</h3>
                <p class="lead" style="color: #cc0052"><b>WELCOME TO OUR HUMBLE ABODE</b><br>
                    We heartily welcome non- toastmasters too as our guests to be a part of our meeting <br> May All Who Enter As Guest, Leave As Toastmasters</p>
            </div><!-- end title -->
            <!--php code to fetch Meeting Details-->
            <?php
            $sql = "select * from daily where id=1";
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_array($result);

            $title = $row['title'];
            $date = $row['date'];
            $time = $row['time'];
            $venue = $row['venue'];
            $tmod = $row['tmod'];
            ?>
            <!--end php-->

            <!--Displaying meeting Details-->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-left">
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-stopwatch"></i>
                            <div class="fl-inner">
                                <h4>Time</h4>
                                <p><?php echo "$time"?></p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-family-room"></i>
                            <div class="fl-inner">
                                <h4>Venue</h4>
                                <p><?php echo "$venue"?></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <img src="upload/poster.jpg"class="img-responsive img-rounded" style="height: 350px;width: 350px ;  border: 5px solid #555;">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-right">
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-calendar"></i>
                            <div class="fr-inner">
                                <h4>Date</h4>
                                <p><?php echo "$date"?></p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-happy"></i>
                            <div class="fr-inner">
                                <h4>TMOD</h4>
                                <p><?php echo "$tmod"?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
</div><!--end section-->

<!--Officers photoes-->
<div id="officers">
    <div class="parallax section parallax-off" data-stellar-background-ratio="0.9" >
        <div class="container">
            <div class="section-title text-center">
                <h3>Club Support</h3>
                <p style="font-size: 35px; color: #4b0066">Executive Committee</p>
                <p class="lead" style="color: #cc0052">Leaders Don't Create Followers, They Create More Leaders</p>

            </div>

            <div class="container">
            <?php
            $sql1 = "select * from officers where id=1";
            $result1 = mysqli_query($connect,$sql1);
            $row1 = mysqli_fetch_array($result1);

            $president = $row1['president'];
            $vpedu = $row1['vpedu'];
            $vpmem = $row1['vpmem'];
            $vppr = $row1['vppr'];
            $secretary = $row1['secretary'];
            $treasurer = $row1['treasurer'];
            $saa = $row1['saa'];
            ?>
                <div class="row text-center stat-wrap">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img style="width: 250px; height: 250px; border-radius: 20px; margin-bottom: 15px" src='upload/president.jpg' class="wow fadeInLeft" >
                        <h2 style="color: black"><?php echo"$president"?><br><small>President</small></h2>
                    </div><!-- end col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img style="width: 250px; height: 250px;border-radius: 20px; margin-bottom: 15px" src='upload/vpedu.jpg' class="wow fadeInLeft">
                        <h2 style="color: black"><?php echo"$vpedu"?><br><small>VP-Education</small></h2>
                    </div><!-- end col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img style="width: 250px; height: 250px;border-radius: 20px; margin-bottom: 15px" src='upload/vppr.jpg' class="wow fadeInLeft">
                        <h2 style="color: black"><?php echo"$vppr"?><br><small>VP-Public Relations</small></h2>
                    </div><!-- end col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <img style="width: 250px; height: 250px;border-radius: 20px; margin-bottom: 15px" src='upload/vpmem.jpg' class="wow fadeInLeft">
                        <h2 style="color: black"><?php echo"$vpmem"?><br><small>VP-Membership</small></h2>
                    </div>
                </div>
                <div class="row text-center stat-wrap">
                      <hr class="hr1">
                  </div>
                <div class="row text-center stat-wrap">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <img style="width: 250px; height: 250px;border-radius: 20px; margin-bottom: 15px" src='upload/secratary.jpg' class="wow fadeInRight">
                        <h2 style="color: black"><?php echo"$secretary"?><br><small>Secretary</small></h2>
                    </div><!-- end col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <img style="width: 250px; height: 250px;border-radius: 20px; margin-bottom: 15px" src='upload/tresurer.jpg' class="wow fadeInRight">
                        <h2 style="color: black"><?php echo"$treasurer"?><br><small>Treasurer</small></h2>
                    </div><!-- end col -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <img style="width: 250px; height: 250px;border-radius: 20px; margin-bottom: 15px" src='upload/saa.jpg' class="wow fadeInRight">
                        <h2 style="color: black"><?php echo"$saa"?><br><small>Sergeant At Arms</small></h2>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row text-center stat-wrap">
                    <a STYLE="margin-top: 50px" href="public/officer.php" class="btn btn-light btn-radius btn-brd grd1">Know Our Other Leaders</a>
                </div>
            </div>
        </div>
        
        <br>
        <hr class="hr3">
        <div class="container">
            <div class="section-title text-center">
                <p style="font-size: 36px; color: #4b0066">Club Pillars</p>
                <p class="lead" style="color: #cc0052">Anything is Possible If You Have Right People To Support You</p>

            </div>
            <div class="row text-center stat-wrap">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img style="width: 300px; height: 250px; border-radius: 20px; margin-bottom: 15px" src="upload/princi.jpeg" alt="" class="wow fadeInLeft" >
                    <h2 style="color: black" class="wow fadeInLeft">Dr. B Sadashive Gowda<br><small>Principal, Vidyavardhaka College Of Engineering</small></h2>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img style="width: 300px; height: 250px;border-radius: 20px; margin-bottom: 15px" src="upload/roopa.jpeg" alt="" class="wow fadeInRight" >
                    <h2 style="color: black" class="wow fadeInRight">Roopa Priya JK<br><small>Club Coordinator, VVCE Toastmasters</small></h2>
                </div>
            </div>
        </div>
    </div>
</div><!-- end section -->


<!--Testimonials-->
<div id="testimonials" class="parallax section parallax-off" style="background-image:url('upload/parallax_04.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <h3 style="color: antiquewhite">Testimonials</h3>
            <p class="lead" >Thank You For Your Kind Words <br>Hope you had a Good time</p>
        </div><!-- end title -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="testi-carousel owl-carousel ">
                    <?php
                     include "config/config.php";

                    $sql = "select * from views;";
                    $result = mysqli_query($connect,$sql);

                    while ($row=mysqli_fetch_assoc($result)) {
                        $id1 = $row['id'];

                        $name = $row['name'];
                        $view = $row['views'];
                        echo "<div class='testimonial '>
                        <div class='desc'>
                        <h3 style='color:  #0085cc'><i class='fa fa-angle-double-right'></i> $name</h3>
                            <p class='lead'> $view</p>
                        </div>
                    </div>";}
                        ?>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!--end section-->


<!--Developers images-->
<div class="parallax section parallax-off" data-stellar-background-ratio="0.7">
    <div class="container">
        <div class="section-title text-center">
            <h3>Developers</h3>
        </div>
    </div>
    <div class="container">
        <div class="row text-center stat-wrap">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img style="width: 250px; height: 200px; border-radius: 20px; margin-bottom: 15px" src="upload/dev1.jpg" alt="" class="wow fadeInLeft" >
                <h1 style="color: #660066" class="wow fadeInLeft"><b>Soujanya Satish Vernekar</b></h1>
                <h4 style="color: black" class="wow fadeInLeft">Computer Science & Engineering,<br> Vidyavardhaka College Of Engineering</h4>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <img style="width: 250px; height: 200px;border-radius: 20px; margin-bottom: 15px" src="upload/dev2.jpg" alt="" class="wow fadeInRight" >
                <h1 style="color: #660066" class="wow fadeInRight"><b>Shreya  Ponnamma</b></h1>
                    <h4 style="color: black" class="wow fadeInRight">Computer Science & Engineering,<br> Vidyavardhaka College Of Engineering</h4>

            </div>
        </div>
    </div>
</div>

<!--CopyRights-->
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



<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>
<script src="js/portfolio.js"></script>
<script src="js/hoverdir.js"></script>
</body>
</html>