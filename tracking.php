<!--
=========================================================
* Argon Design System - v1.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (http://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    TexCargo
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/argon-design-system.css?v=1.2.0" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="login-page">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="https://texcargoweb.apps.com.pe">
        <img src="../assets/img/brand/black2.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="https://texcargoweb.apps.com.pe">
                <!-- <img src="../assets/img/wordwide.png"> -->
                <img src="../assets/img/brand/black.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="nav-link-inner--text">Home</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
              <i class="ni ni-ui-04 d-lg-none"></i>
              <span class="nav-link-inner--text">APIs Docs</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
              <i class="fa fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="" target="_blank" data-toggle="tooltip" title="Star us on Github">
              <i class="fa fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-7">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-5">
              <div class="text-muted text-center mb-3"><small></small></div>
              <div class="btn-wrapper text-center" style="font-size: 26px;">
                Tracking de <?php echo $_GET['id'] ?>
                <input type="hidden" id="registro" value="<?php echo $_GET['id'] ?>">
                <div id="resultado">

                </div>
                <div id="fecha" style="font-size: 12px;">

                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="text-center text-muted mb-4">
                <small></small>
                <span id=""> Estado del paquete</span>
                <div class="row">
                  <div class="col-4" style="text-align: left; width: 20%;">
                    Comuna
                  </div>
                  <div class="col-8" style="text-align: right;">
                    <span id="comuna"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3" style="text-align: left;">
                    Recibe
                  </div>
                  <div class="col-9" style="text-align: right; font-size: 15px;">
                    <span id="nya"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col" style="text-align: left;">
                    Servicio
                  </div>
                  <div class="col" style="text-align: right;">
                    <span id="tipodeservicio"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col" style="text-align: left;">
                    Flete
                  </div>
                  <div class="col" style="text-align: right;">
                    <span id="valordeflete"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col" style="text-align: left;">
                    Control
                  </div>
                  <div class="col" style="text-align: right;">
                    <span id="control"></span>
                  </div>
                </div>
                <!-- <span id="resultado"></span> -->
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">¡Gracias por elegirnos!</h3>
          <h4 class="mb-0 font-weight-light">Puedes encontrarnos en cualquiera de estas plataformas.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <button target="_blank" href="" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
          </button>
          <button target="_blank" href="" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
          </button>
          <button target="_blank" href="" rel="nofollow" class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
          </button>
          <button target="_blank" href="" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
            <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
          </button>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2020 <a href="" target="_blank">Miguekos.</a>.
          </div>
        </div>
        <!-- <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">License</a>
            </li>
          </ul>
        </div> -->
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- <script src="../assets/js/argon-design-system.min.js?v=1.2.0" type="text/javascript"></script> -->
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    // A $( document ).ready() block.
    $(document).ready(function() {
      console.log("ready!");
      var idregistro = document.getElementById("registro").value
      // axios.get(`http://192.168.1.2:9776/envios/registros/tracking/${idregistro}`)
      //   .then(function(response) {
      //     console.log(response);
      //   })
      //   .catch(function(error) {
      //     console.log(error);
      //   })
      //   .then(function() {
      //     // always executed
      //   });


      $.get(`https://api.apps.com.pe/envios/registros/tracking/${idregistro}`, function(data, status) {
        // alert("Data: " + data + "\nStatus: " + status);
        // console.log(data);
        // document.getElementById("resultado").innerHTML = JSON.stringify(data)
        document.getElementById("comuna").innerHTML = (data.comuna)
        document.getElementById("nya").innerHTML = `${data.name} ${data.lastname}`
        document.getElementById("tipodeservicio").innerHTML = (data.tipodepago)
        document.getElementById("valordeflete").innerHTML = `${data.valordeflete} $`
        document.getElementById("control").innerHTML = (data.control)
        // console.log(typeof data.last_modified);
        var current_datetime = new Date(data.last_modified);
        // console.log(current_datetime.toLocaleString());
        // let formatted_date = current_datetime.getDate() + "-" + (current_datetime.getMonth() + 1) + "-" + current_datetime.getFullYear()
        // console.log(formatted_date)
        current_datetime.setHours(current_datetime.getHours() - 5);
        document.getElementById("fecha").innerHTML = (current_datetime.toLocaleString())
        if (data.estado == "0") {
          document.getElementById("resultado").innerHTML = '<span class="badge badge-pill badge-danger">En Bodega</span>'
        } else if (data.estado == "1") {
          document.getElementById("resultado").innerHTML = '<span class="badge badge-pill badge-info">En Reparto</span>'
        } else if (data.estado == "2") {
          document.getElementById("resultado").innerHTML = '<span class="badge badge-pill badge-success">Entregado</span>'
        } else if (data.estado == "3") {
          console.log("es 3");
        }


      });
    });
  </script>
</body>

</html>