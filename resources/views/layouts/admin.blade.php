<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Suggestion Box | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="file:///E:/Website/DigitalSuggestionBox/resources/Fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="file:///E:/Website/DigitalSuggestionBox/resources/Fontawesome/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{-- css style --}}
    @yield('styles')
</head>
<body class=" sidebar layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
   
    <nav class=" navbar navbar-expand fixed-top">
    <!----Left navbar links--->
    <ul class="navbar-nav">
        <div class="row">  
            <li class="nav-item">
                <div class="menu-box ml-2">
                    <a href="#" class="nav-link" data-widget="pushmenu"><i class="fas fa-bars right" style="color: #141f1f"></i></a>
                </div>    
            </li>
            <a class="navbar-brand d-flex" href="{{ url('/') }}">
                <div><img src="{{ asset('/image/logo.png') }}" style="height: 40px;" class=""></div>
                <div class="" style="color: #141f1f">SuggestionBox</div>
            </a>
        </div>
        
    </ul>
     

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto ">
          <li class="nav-tem">
            
      </form>
          </li>
            <!-- Messages Dropdown Menu -->

            
             
            <li class="nav-item">
            <div class="user-panel d-flex">
                <div class="image">
                    <img src="{{ asset('/image/icon.png') }}" class="img-circle">
                    
                </div>
                <div class="info" aria-labelledby="dropdownMenuLink">
                    <a href=" " class="d-block " >{{ Auth::user()->name }}</a>

 
                    
                </div>
                
            </div>
          </li> 

          <!-- Example single danger button -->


        
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar mt-5 "> 
        <!-- Sidebar -->
      
        <div class="sidebar-collape mt-3 ">
            <!-- Sidebar user panel (optional) -->
            
           <!-- Sidebar Menu -->
            <nav class="mt-3">
                <ul class="nav  nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                         <div class="container box1-side">
                            <li class="nav-item has-treeview menu-open ">
                                <a href="/homepage" class="nav-link ">
                                    <p>
                                        Home
                                    </p>
                                </a>
                            </li>
                        </div>  

                        <div class="container box-side">
                            <li class="nav-item">
                                <a href="/update" class="nav-link">
                                    <p>
                                        Update
                                    </p>
                                </a> 
                            </li>
                        </div>

                        <div class="container box-side">
                            <li class="nav-item">
                                <a href="/profilepage" class="nav-link">
                                    <p>
                                        Profile
                                    </p>
                                </a>
                            </li>
                        </div>

                        <div class="container box-side">
                            <li class="nav-item">
                                <a href="/complaint_form" class="nav-link">
                                    <p>
                                        Complaint Form
                                    </p>
                                </a>
                            </li>
                        </div>         

                <!---Student Challenge---->
                <div class="container box-side">
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <p>
                                Students Challenges
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ml-4">
                            @foreach ($complaintTypes as $complaintType)
                            <li class="nav-item box2-side">
                            <a href="/student_complaint/{{ $complaintType->id }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                <p>{{ $complaintType->category }}</p>
                                </a>
                            </li>
                            @endforeach   
                        </ul>    
                    </li>
                </div>
                
                   
                <div class="container box-side">
                    <li class="nav-item">
                        <a href="/opinion_form" class="nav-link">
                            <p>
                                Opinion Form
                            </p>
                        </a>
                    </li>
                </div>
                    
                    <!--- Students Opinion---->
                    <div class="container box-side">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <p>
                                    Students Opinions
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ml-4">
                                @foreach ($opinionTypes as $opinionType)
                                <li class="nav-item box2-side">
                                <a href="/student_opinion/{{ $opinionType->id }}" class="nav-link">
                                    <p>{{ $opinionType->category }}</p>
                                    </a>
                                </li>
                                @endforeach                       
                            </ul>
                        </li>
                    </div>  

                    <div class="container box-side">
                        <li class="nav-item">
                            <a href="/update" class="nav-link">
                                <p>
                                    Update
                                </p>
                            </a> 
                        </li>
                    </div>

                    <div class="container box-side">
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <p>
                                   My Feedback
                                </p>
                            </a>
                        </li>
                    </div>

                    <div class="container box-side">
                        <li class="nav-item ml-3">
                            <a href="/complaint_feedback" class="nav-link">
                                <p>
                                    Complaint Feedback
                                </p>
                            </a>
                        </li>
                    </div>

                    <div class="container box-side">
                        <li class="nav-item ml-3">
                            <a href="/opinion_feedback" class="nav-link">
                                <p>
                                    Opinion Feedback
                                </p>
                            </a>
                        </li>
                    </div>

                    <div class="container box-side">
                        <li class="nav-item">
                            <a href="/resolver" class="nav-link">
                                <p>
                                    Resolver
                                </p>
                            </a>
                        </li>
                    </div>

                    @role('Students')
                    <div class="container box-side">
                        <li class="nav-item">
                            <a href="/create_update" class="nav-link">
                                <p>
                                    Create News
                                </p>
                            </a>
                        </li>
                    </div>
                    @endrole



                    @role('Students')
                    <div class="container box-side">
                        <li class="nav-item">
                            <a href="/about" class="nav-link">
                                <p>
                                    About
                                </p>
                            </a>
                        </li>
                    </div>
                    @endrole
                    

                    <div class="container box-side">
                        @role('Students')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <p>
                                User
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Admin</p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <p>
                                        Student                                       
                                    </p>
                                </a>                                
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <p>
                                        Secretary                                      
                                    </p>
                                </a>                               
                            </li>
                           
                        </ul>
                    </li>
                    @endrole
                    </div>
                    
                    <div class="container box-side">
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i> 
                            <p>
                                LOGOUT
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                    <li class="nav-link">
                        <a class="far fa-circle nav-icon " style="color: black" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                               {{ __('  Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                        </ul>
                    </li>
                </div>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
 
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
         @yield('content') 

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer" style="position:fixed;">
        <strong p-3>University of Dar es salaam Copyright &copy; 2020 All rights reserved.</strong>
        
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- Suggestion App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

<script src="{{ asset('dist/js/demo.js') }}"></script>

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@yield('scripts')
</body>
</html> 
