<?php
$regions = array_filter(scandir(dirname(__FILE__) . '/regions'), function($item) {
    return (trim($item, '.') != '');
});
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Digital police</title>
        <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MAIN CSS (REQUIRED ALL PAGE)-->
        <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="/assets/css/style.css" rel="stylesheet">
        <link href="/assets/css/style-responsive.css" rel="stylesheet">
        <!-- leaflet -->
        <link href="/plugins/leaflet/leaflet.css" rel="stylesheet">
        <!-- app -->
        <link href="/css/main.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="tooltips">
        <div class="wrapper">
            <!-- BEGIN TOP NAV -->
            <div class="top-navbar primary-color">
                <div class="top-navbar-inner">
                    <!-- Begin Logo brand -->
                    <div class="logo-brand primary-color">
                        <a href="index.html">DigitalPolice</a>
                    </div><!-- /.logo-brand -->
                    <!-- End Logo brand -->
                    <div class="top-nav-content">
                        <!-- Begin button sidebar left toggle -->
                        <div class="btn-collapse-sidebar-left">
                            <i class="fa fa-bars"></i>
                        </div><!-- /.btn-collapse-sidebar-left -->
                        <!-- End button sidebar left toggle -->                       
                        <!-- Begin button nav toggle -->
                        <div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
                            <i class="fa fa-plus icon-plus"></i>
                        </div><!-- /.btn-collapse-sidebar-right -->
                        <!-- End button nav toggle -->
                        <!-- Begin user session nav -->
                        <ul class="nav-user navbar-right">
                            <li class="dropdown">
                                <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                    Hi, <strong>Paris Hawker</strong>
                                </a>
                                <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                                    <li><a href="#fakelink">Account setting</a></li>
                                    <li><a href="#fakelink">Payment setting</a></li>
                                    <li><a href="#fakelink">Change password</a></li>
                                    <li><a href="#fakelink">My public profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="lock-screen.html">Lock screen</a></li>
                                    <li><a href="login.html">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End user session nav -->
                        <!-- End Collapse menu nav -->
                    </div><!-- /.top-nav-content -->
                </div><!-- /.top-navbar-inner -->
            </div><!-- /.top-navbar -->
            <!-- END TOP NAV -->
            <!-- BEGIN SIDEBAR LEFT -->
            <div class="sidebar-left sidebar-nicescroller primary-color">
                <form id="form-filter">
                    <ul class="sidebar-menu">
                        <li>
                            <a href="#fakelink"><i class="fa fa-database icon-sidebar"></i>Regions</a>
                            <ul class="submenu">
                                <?php foreach ($regions as $index => $region) { ?>
                                    <li>
                                        <input id="region<?php echo $index ?>" type="checkbox" value="<?php echo $region ?>" name="region[]" />
                                        <label for="region<?php echo $index ?>"><?php echo $region ?></label>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>                    
                    </ul>
                </form>
            </div><!-- /.sidebar-left -->
            <!-- END SIDEBAR LEFT -->
            <!-- BEGIN PAGE CONTENT -->
            <div class="page-content">
                <div class="map-wrapper">
                    <div id="map"></div>                    
                </div>
            </div><!-- /.page-content -->
        </div><!-- /.wrapper -->
        <!-- END PAGE CONTENT -->
        <!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugins/retina/retina.min.js"></script>
        <script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
        <!-- maps -->        
        <script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false"></script>
        <script src="/plugins/leaflet/leaflet.js"></script>
        <script src="/js/leaflet-google.js"></script>
        <script src="/js/leaflet-geojson-layer.js"></script>
        <script src='/js/leaflet-layer-vector-KML.js'></script>
        <!-- app -->
        <script src="/js/main.js"></script>
    </body>
</html>