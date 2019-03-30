<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Blk• Design System by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../../assets/bootstrap/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../../assets/bootstrap/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/bootstrap/demo/demo.css" rel="stylesheet" />
  
</head>

<body class="index-page">
    <?php include "modal_sekolah.php"; ?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
          <span>PMDK</span> Admin Panel
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                BLK•
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="fa fa-cogs d-lg-none d-xl-none"></i> Getting started
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="https://demos.creative-tim.com/blk-design-system/docs/1.0/getting-started/overview.html" class="dropdown-item">
                <i class="tim-icons icon-paper"></i> Documentation
              </a>
              <a href="examples/register-page.html" class="dropdown-item">
                <i class="tim-icons icon-bullet-list-67"></i>Register Page
              </a>
              <a href="examples/landing-page.html" class="dropdown-item">
                <i class="tim-icons icon-image-02"></i>Landing Page
              </a>
              <a href="examples/profile-page.html" class="dropdown-item">
                <i class="tim-icons icon-single-02"></i>Profile Page
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-default d-none d-lg-block" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="tim-icons icon-cloud-download-93"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  
      <div class="section section-navbars">
        <img src="assets/img/path3.png" class="path">
        <div class="container" id="menu-dropdown">
          <div class="row">
            <div class="col-md-6">
              <h4>Menu</h4>
              <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container">
                  <a class="navbar-brand" href="#">Menu</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">
                          <p>Sekolah</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                          <p>Siswa</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                          <p>Politeknik</p>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col-md-6">
              <h4>Menu with Icons</h4>
              <nav class="navbar navbar-expand-lg bg-info">
                <div class="container">
                  <a class="navbar-brand" href="#">Icons</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="#pablo"><i class="tim-icons icon-send" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#pablo"><i class="tim-icons icon-single-02" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="tim-icons icon-settings-gear-63" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-header">Dropdown header</a>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">One more separated link</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
          <h3 class="title mb-3">Data User</h3>
        </div>
        
          <!-- Tabel User Sekolah -->
          <div class='row'>
              <div class='col-sm-1'></div>
              <div class='col-sm-4'>
              
              <div class="container">
                  <h4><b>Data Sekolah</b></h4>
    <div class="row">
     
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th>NPSN</th>
              <th>Nama Sekolah</th>
              <th>Informasi</th>
              <th>Edit</th>
              <th>Delete</th>

            </tr>
          </thead>
          <tbody id="myTable">
            <?php 
            include 'tabel_sekolah.php';
            ?>
          </tbody>
        </table>  
        
        <button class='btn btn-info'>Show All</button>

        
      
     
	</div>
</div>
<h4><b>Cari Data</b></h4>
<input class="form-control" type="text">
<input class="form-control" type="button" class='btn btn-warning' value="Cari Nama">
              </div>

              <div class='col-sm-2'>

              </div>

              <div class='col-sm-4'>
              <div class="container">
              <h4><b>Data Siswa</b></h4>
    <div class="row">
     
        <table class="table table-hover">
          <thead>
            <tr>
              
              <th>Username</th>
              <th>Created By</th>
              <th>Informasi</th>
              <th>Edit</th>
              <th>Delete</th>

            </tr>
          </thead>
          <tbody id="myTable">
            <?php 
            include 'tabel_siswa.php';
            ?>
          </tbody>
        </table>   
        <button class='btn btn-info'>Show All</button>
      
     
	</div>
</div>
<h4><b>Cari Data</b></h4>
<input class="form-control" type="text">
<input class="form-control" type="button" class='btn btn-warning' value="Cari Nama">
              </div>
              
          </div>
     
           
     
     
     
          
      
    
     
         
  <!--   Core JS Files   -->
  <script src="../../assets/bootstrap/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/bootstrap/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../assets/bootstrap/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../../assets/bootstrap/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../../assets/bootstrap/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../assets/bootstrap/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="../../assets/bootstrap/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../../assets/bootstrap/js/plugins/moment.min.js"></script>
  <script src="../../assets/bootstrap/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/bootstrap/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/bootstrap/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <script>
      
    $(document).ready(function() {
      blackKit.initDatePicker();
      blackKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>