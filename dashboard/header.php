<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Library Dashboard</title>
   
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/a.jpg" alt="person"
            class="img-fluid rounded-circle">
            <h2 class="h5">Bosundhara Majumdar</h2><span>Librarian</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="dashboard.html" class="brand-small"><img src="img/Books-icon.png" alt="books"> </a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">

          <ul id="side-main-menu" class="side-menu list-unstyled">
              <li><a href="dashboard.html"> <i class="icon-home"></i>Home  </a></li>
              <li><a href="displayStudentInfo.php"> <i class="icon-grid"></i>Display Student Info                            </a></li>
              <li><a href="addBooks.php"> <i class="fa fa-plus"></i>Add Book                            </a></li>
              <li><a href="delBooks.php"> <i class="fa fa-trash"></i>Delete Book                            </a></li>
            <li><a href="displaybook.php"> <i class="fa fa-list-ul"></i>Book Display                           </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Issue & Return </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="issue_book.php"><i class="fa fa-book"></i>Book Issue</a></li>
                <li><a href="return_book.php"><i class="fa fa-undo"></i>Book Return</a></li>

              </ul>
            </li>
            <!-- <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li> -->
           
          </ul>
        </div>

      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="dashboard.html" class="navbar-brand">
                      <div class="brand-text d-none d-md-inline-block" style="font-family: Lucida Handwriting"><strong class="text-light">The Book Yard Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                <!-- Log out-->
                <li class="nav-item"><a href="adminlogin.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>