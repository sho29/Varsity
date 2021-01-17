<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Varsity | Course</title>
    <style>

    #mu-course-content{
      background: url("web.jpg");
    }

    </style>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="home.php"><i class="fa fa-university"></i><span>Varsity</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="home.php">Home</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Course <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="course.php">Course Details</a></li>

              </ul>
            </li>
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="mu-search-form">
              <input type="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
              <ul id="myUL">
                <li><a href="course.php">Python</a></li>
                <li><a href="course.php">Java</a></li>

                <li><a href="course.php">Javascript</a></li>
                <li><a href="course.php">Dart</a></li>

                <li><a href="course.php">UI Design</a></li>
                <li><a href="course.php">Blockchain</a></li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
  <script>
  function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Course</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Course</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">

                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Cyber Security Course</a>
                          <span><i class="fa fa-clock-o"></i>90Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">

                        <p>When it comes to the internet, there is always some kind of harm – from malwares and viruses to attacks from remote hackers. Learning how you can secure desktops, laptops and smart devices against such threats like viruses, security thieves, hackers, trackers etc., is an immensely useful tool.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Buy Pack</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">

                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Docker Mastery</a>
                          <span><i class="fa fa-clock-o"></i>75Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">

                        <p>A recent trend has shown that many techies are trying to learn Docker Mastery, the complete toolset. With the right course, you can actually get deep into Docker Mastery and understand the ‘whys’ of it. You can learn docker skills easily and fast once you enroll yourself in a proper course.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Buy Pack</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">

                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Redux and React</a>
                          <span><i class="fa fa-clock-o"></i>90Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">

                        <p>Redux and React are two major areas that any app developer should put their emphasis on. If you are someone who wants to make your own app or want to work for a company and build an app, then make Redux and React your friends.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Buy Pack</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">

                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Node.js Developer</a>
                          <span><i class="fa fa-clock-o"></i>75Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">

                        <p>You need to master these platforms first before you can take a turn to become a professional Node developer. Node is a vast field and you can expect to face a lot of challenges. Courses on Node.js will help you jump over these obstacles and hone your skills in Node.js.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Buy Pack</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">

                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Deep Learning</a>
                          <span><i class="fa fa-clock-o"></i>90Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">

                        <p>You will also hear from many top leaders in Deep Learning, who will share with you their personal stories and give you career advice. AI is transforming multiple industries. We will help you master Deep Learning, understand how to apply it, and build a career in AI.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Buy Pack</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">

                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Full Stack Development</a>
                          <span><i class="fa fa-clock-o"></i>75Days</span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">

                        <p>The first two courses in this Specialization cover front-end frameworks: Bootstrap 4 and Angular. You’ll also learn to create hybrid mobile applications, using the Ionic framework, Cordova and NativeScript. Lets build something fun and the best learning experience. </p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Buy Pack</a>
                          <span class="mu-course-price" href="#">$165.00</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start course pagination -->
                <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a href="course.php" aria-label="Previous">
                          <span class="fa fa-angle-left"></span> Prev
                        </a>
                      </li>
                      <li><a href="course.php">1</a></li>
                      <li><a href="course1.php">2</a></li>

                      <li>
                        <a href="course.php" aria-label="Next">
                         Next <span class="fa fa-angle-right"></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end course pagination -->
              </div>


 </section>

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">

        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->






  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script>

  </body>
</html>
