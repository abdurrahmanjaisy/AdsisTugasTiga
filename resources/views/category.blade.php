<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>laraHero</title>

  <!-- Bootstrap CSS -->
<link href="{{ asset('../NiceAdmin/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('../NiceAdmin/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('../NiceAdmin/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ asset('../NiceAdmin/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="{{ asset('../NiceAdmin/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="{{ asset('../NiceAdmin/css/widgets.css')}}" rel="stylesheet">
  <link href="{{ asset('../NiceAdmin/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('../NiceAdmin/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{ asset('../NiceAdmin/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{ asset('../NiceAdmin/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      

      <!--logo start-->
      <a href="index.html" class="logo">lara <span class="lite">Hero</span></a>
      <!--logo end-->


      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            
                            <span class="username">Jais</span>
                            
                        </a>
           
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="">
                          <span>Categories</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="/arti" class="">
                          <span>Articles</span>
                        
                      </a>
          </li>
          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        


        <div class="row">

          <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Category Data</strong></h2>
                
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                  <thead>
                    <tr>
                      <th>Category List</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $categories as $c )
                    <tr>
                      <td>{{ $c->name }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

            </div>

          </div>
          <!--/col-->
          
          </div>
        </div>

        
          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Quick Post</div>

                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal" method="post" action="/post" enctype="multipart/form-data"> 
                    {{ csrf_field() }}
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">CName</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="name" name="name">
                        </div>
                      </div>
                      
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('../NiceAdmin/js/jquery.js')}}"></script>
  <script src="{{ asset('../NiceAdmin/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{ asset('../NiceAdmin/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('../NiceAdmin/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('../NiceAdmin/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('../NiceAdmin/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ asset('../NiceAdmin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
