<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kebunku.com</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
   
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
   
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">KEBUNKU</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">DAFTAR TANAMAN</li>
                    <li class="active">
                        <a href="index.html">
                            <i class="material-icons">widgets</i>
                            <span>Tanaman 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="material-icons">widgets</i>
                            <span>Tanaman 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="material-icons">widgets</i>
                            <span>Tanaman 3</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="material-icons">widgets</i>
                            <span>Tanaman 4</span>
                        </a>
                    </li>                 
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="javascript:void(0);">Kebunku</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.1
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2">
                <h2>INFO TANAMAN</h2>                
                </div>
                <div class="col-xs-2 col-sm-3 col-md-7 col-lg-7">
                </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-4">
                    <div class="info-box bg-grey hover-expand-effect">
                        <div class="content">
                            <div class="text">EDIT</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CPU Usage -->            
            <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>COBA GRAFIK</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div style="width :500px; height: 500px">
                                <div id="app">
                                    {!! $chart->container()!!}
                                    
                                    {!! $chart->script() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- #END# CPU Usage -->
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="card">
                        <div class="header">
                            <h2>INFO TANAMAN</h2><h2></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tanaman1 as $tanam)
                                        <tr>
                                            <td>1</td>
                                            <td>Sensor EC 1</td>
                                            <td><span class="label bg-green">Good</span></td>
                                            <td>{{ $tanam->sensor1 }} ppm</td>                                            
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sensor EC 2</td>
                                            <td><span class="label bg-orange">Over</span></td>
                                            <td>{{ $tanam->sensor2 }} ppm</td>                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sensor EC 3</td>
                                            <td><span class="label bg-red">Under</span></td>
                                            <td>{{ $tanam->sensor3 }} ppm</td>                
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Suhu Ruangan</td>
                                            <td><span class="label bg-green">Good</span></td>
                                            <td>{{ $tanam->suhu }} ^C</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Intensitas Cahaya</td>
                                            <td>
                                                <span class="label bg-red">Under</span>
                                            </td>
                                            <td>{{ $tanam->cahaya }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>
  

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>
    <script src="plugins/chartjs/Chart.js"></script>
    <script src="js/Chart.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>