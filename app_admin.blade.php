<!DOCTYPE html>
<!--<html lang="en">-->
<?php 
$url = "panel/public/dashboard_asset";
?>
<head>
    <!--<meta charset="utf-8">-->
    <title>{{$title}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('public/dashboard_asset')}}img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset($url)}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset($url)}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset($url)}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset($url)}}/css/style.css" rel="stylesheet">
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Raleway:wght@300&display=swap" rel="stylesheet">

<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>

</head>

<body>
<?php 
$alert = session()->get("alert");
if(!$alert==""){echo '<script>alert("'.$alert.'");</script>';}

$active = Auth::user()->status;
?>


    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3" style="background: #00ffa9;">
            <nav class="navbar navbar-light">
                <a href="/home" class="navbar-brand mx-4 mb-3">
                    <h5 class="text-primary mt-3"><!--<i class="fa fa-hashtag me-2">--></i>Journal Panel</h5>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset($url)}}/img/user.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0" style="text-transform: uppercase;">{{Auth::user()->name}}</h6>
                        <!--<span>Admin</span>-->
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    
                    <a href="{{asset('upload_article_form')}}" class="nav-item nav-link" >
                       <i class="fas fa-globe-asia me-2"></i> Add Article 
                    </a>
                    <a href="{{asset('all_articles')}}" class="nav-item nav-link" >
                       <i class="fas fa-globe-asia me-2"></i> All Articles
                    </a>
                    
                    <a href="{{asset('editor_list')}}" class="nav-item nav-link" id="add_editor">
                       <i class="fas fa-globe-asia me-2"></i> Editors
                    </a>
                    
                    <a href="{{asset('inquiry')}}" class="nav-item nav-link" id="add_editor">
                       <i class="fas fa-globe-asia me-2"></i> Inquiry
                    </a>
                    
                    <a href="{{asset('cover_page')}}" class="nav-item nav-link" id="cover_page">
                       <i class="fas fa-globe-asia me-2"></i> Cover Page
                    </a>
                    
                    <!-- <a href="http://panel.nulasport.com/subscription" class="nav-item nav-link" id="Article"><i class="fa fa-tachometer-alt me-2"></i>Article</a> -->
                    
                    <!--<div class="nav-item dropdown">
                        <a href="{{asset('home')}}" class="nav-link dropdown-toggle <?php if($activePage=="add_article"){ echo "active"; } ?>" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Article</a>
                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 40px;">
                            <a href="{{asset('home')}}" class="dropdown-item" >Add Article </a>
                            <a href="{{asset('all_articles')}}" class="dropdown-item" >All Articles</a>
                        </div>
                    </div>-->
            
                    <div class="nav-item dropdown">
                        
                        <!--<a href="#" class="nav-link dropdown-toggle <?php if($activePage=="editor"){ echo "active"; } ?>" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Editorial
                        </a>

                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 40px;">
                            <a href="{{asset('upload_editor_form')}}" class="dropdown-item" id="add_editor">Editors</a>
                        </div>-->
                    </div> 
                    
                    
                    <div class="nav-item dropdown">
                        
                       <!-- <a href="#" class="nav-link dropdown-toggle <?php if($activePage=="Inquiry"){ echo "Inquiry"; } ?>" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Inquiry
                        </a>

                        <div class="dropdown-menu bg-transparent border-0" style="padding-left: 40px;">
                            <a href="{{asset('inquiry')}}" class="dropdown-item" id="add_editor">Inquiry</a>
                        </div>-->
                    </div> 

                    <!-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0">JP</h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <!--<form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>-->
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown d-none">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset($url)}}/img/user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset($url)}}/img/user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset($url)}}/img/user.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown d-none">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                    </div>
                    
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset($url)}}/img/user.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex" style="text-transform: uppercase;"> {{Auth::user()->name}} </span>
                        </a>
                         <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <!--<a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>-->
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <!--<a href="{{asset('signout')}}" class="dropdown-item">Log Out</a>-->

                        </div> 
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                @yield('contant')
            </div>
            <!-- Sale & Revenue End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset($url)}}/lib/chart/chart.min.js"></script>
    <script src="{{asset($url)}}/lib/easing/easing.min.js"></script>
    <script src="{{asset($url)}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{asset($url)}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset($url)}}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset($url)}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset($url)}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="{{asset($url)}}/js/main.js"></script>
    
    <script>
    
    //alert("{{$active}}");
 
    if("{{$active}}" !== "1"){
        document.getElementById('logout-form').submit();
    }

    

    </script>
    
    
    
    
</body>

</html>