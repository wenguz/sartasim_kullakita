<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template 2">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SARTASIM KULLAKITA</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/font-awesome.min.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/simple-line-icons.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/animate.min.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/fullcalendar.min.css')}}"/>
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="{{asset('img/logomi.png')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="#" class="navbar-brand">
                 <b>SARTASIM KULLAKITA</b>
                </a>
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Nombre del usuario</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="{{asset('img/avatar.jpg')}}" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> Mi Perfil</a></li>
                     <li class="more">
                      <ul>
                        <li><a href="#"><span class="fa fa-power-off "></span>Cerrar Sesion</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">

          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Dia,Mes nuemro_dia año</p>
                    </li>
                  <!--Inicio menu admin-->
                    <li class="active ripple">
                      <a class="tree-toggle nav-header" href="index_admin.html"><span class="fa-home fa"></span> Inicio
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="rep_atencion.html"><span class="fa fa-file-text"></span>Reporte-Atencio caso</a></li>
                          <li><a href="rep_problematica.html"><span class="fa fa-file-text"></span>Reporte-Problematica</a></li>
                          <li><a href="rep_edad.html"><span class="fa fa-file-text"></span>Reporte-por edad</a></li>
                          <li><a href="rep_documento.html"><span class="fa fa-file-text"></span>Reporte-documento de identificacion</a></li>
                          <li><a href="rep_origen.html"><span class="fa fa-file-text"></span>Reporte-lugar de origen</a></li>
                          <li><a href="rep_ocupacion.html"><span class="fa fa-file-text"></span>Reporte-ocupacion</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="icons icon-user-female"></span>Usuarios
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_usuario.html"><span class="icons icon-people"></span>Aregar Usuario</a></li>
                        <li><a href="modificar_usuario.html"><span class="fa fa-edit"></span>Modificar Datos</a></li>
                        <li><a href="listar_usuario.html"><span class="fa fa-list-alt"></span>Mostrar Usuarios</a></li>
                        <li><a href="ver_perfil.html"><span class="icons icon-list"></span>Ver Perfil</a></li>
                      </ul>
                    </li>
                  <!--fin menu admin-->
                  <!--Inicio Menu usuario estandar-->
                    <li class="active ripple">
                      <a class="tree-toggle nav-header" href="index_estandar.html"><span class="fa-home fa"></span> Inicio Estandar
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="ver_rep_es.html"><span class="fa fa-file-text"></span>Ver Reportes</a></li>
                          <li><a href="editar_rep_es.html"><span class="fa fa-edit"></span>Editar Observaciones</a></li>
                          <li><a href="exportar.html"><span class="fa fa-file-pdf-o"></span>Exportar</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="icons icon-login"></span>Ficha de Ingreso
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_ingreso_1.html"><span class="fa fa fa-file"></span>Aregar Ingreso</a></li>
                        <li><a href="modificar_ingreso_1.html"><span class="fa fa-edit"></span>Modificar Ingreso</a></li>
                        <li><a href="mostrar_ingreso.html"><span class="fa fa-list-alt"></span>Mostrar Ingreso</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-folder-open"></span>Ficha Social
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_social_1.html"><span class="fa fa fa-file"></span>Aregar Social</a></li>
                        <li><a href="modificar_social_1.html"><span class="fa fa-edit"></span>Modificar Social</a></li>
                        <li><a href="mostrar_social.html"><span class="fa fa-list-alt"></span>Mostrar Social</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-child"></span>Ficha Psicologica
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_psicologico_1.html"><span class="fa fa fa-file"></span>Aregar Psicologico</a></li>
                        <li><a href="modificar_psicologico_1.html"><span class="fa fa-edit"></span>Modificar Psicologico</a></li>
                        <li><a href="mostrar_psicologico.html"><span class="fa fa-list-alt"></span>Mostrar Psicologico</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="icons icon-logout"></span>Ficha Egreso
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="agregar_egreso_1.html"><span class="fa fa fa-file"></span>Aregar Egreso</a></li>
                        <li><a href="modificar_egreso_1.html"><span class="fa fa-edit"></span>Modificar Egreso</a></li>
                        <li><a href="mostrar_egreso.html"><span class="fa fa-list-alt"></span>Mostrar Egreso</a></li>
                      </ul>
                    </li>
                  <!--Fin Menu usuario estandar-->
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->


          <!-- start: content -->
          <div id="content">


          </div>
          <!-- end: content -->


    <!-- start: Javascript -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <!-- plugins -->
    <script src="{{asset('js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('js/plugins/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.vmap.min')}}.js"></script>
    <script src="{{asset('js/plugins/maps/jquery.vmap')}}.world.js"></script>
    <script src="{{asset('js/plugins/jquery.vmap.sampledata')}}.js"></script>
    <script src="{{asset('js/plugins/chart.min.js')}}"></script>


    <!-- custom -->
     <script src="{{asset('js/main.js')}}"></script>
     <script type="text/javascript">
      (function(jQuery){

        // start: Chart =============

        Chart.defaults.global.pointHitDetectionRadius = 1;
        Chart.defaults.global.customTooltips = function(tooltip) {

            var tooltipEl = $('#chartjs-tooltip');

            if (!tooltip) {
                tooltipEl.css({
                    opacity: 0
                });
                return;
            }

            tooltipEl.removeClass('above below');
            tooltipEl.addClass(tooltip.yAlign);

            var innerHtml = '';
            if (undefined !== tooltip.labels && tooltip.labels.length) {
                for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                    innerHtml += [
                        '<div class="chartjs-tooltip-section">',
                        '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                        '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                        '</div>'
                    ].join('');
                }
                tooltipEl.html(innerHtml);
            }

            tooltipEl.css({
                opacity: 1,
                left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
                top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
                fontFamily: tooltip.fontFamily,
                fontSize: tooltip.fontSize,
                fontStyle: tooltip.fontStyle
            });
        };
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(21,186,103,0.4)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(66,69,67,0.3)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                 data: [18,9,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }, {
                label: "My Second dataset",
                fillColor: "rgba(21,113,186,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [4,7,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }]
        };

        var doughnutData = [
                {
                    value: 300,
                    color:"#129352",
                    highlight: "#15BA67",
                    label: "Alfa"
                },
                {
                    value: 50,
                    color: "#1AD576",
                    highlight: "#15BA67",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#0F5E36",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#15A65D",
                    highlight: "#15BA67",
                    label: "X"
                }

            ];


        var doughnutData2 = [
                {
                    value: 100,
                    color:"#129352",
                    highlight: "#15BA67",
                    label: "Alfa"
                },
                {
                    value: 250,
                    color: "#FF6656",
                    highlight: "#FF6656",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#FD786A",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#15A65D",
                    highlight: "#15BA67",
                    label: "X"
                }

            ];

        var barChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(21,186,103,0.4)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(21,186,103,0.2)",
                        highlightStroke: "rgba(21,186,103,0.2)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(21,113,186,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(21,113,186,0.2)",
                        highlightStroke: "rgba(21,113,186,0.2)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

         window.onload = function(){
                var ctx = $(".doughnut-chart")[0].getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                    responsive : true,
                    showTooltips: true
                });

                var ctx2 = $(".pie-chart")[0].getContext("2d");
                window.myPie = new Chart(ctx2).Pie(doughnutData, {
                    responsive : true,
                    showTooltips: true
                });

                var ctx2 = $(".line-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx2).Line(lineChartData, {
                     responsive: true,
                        showTooltips: true,
                        multiTooltipTemplate: "<%= value %>",
                     maintainAspectRatio: false
                });

                var ctx3 = $(".bar-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx3).Bar(barChartData, {
                     responsive: true,
                        showTooltips: true
                });

                var ctx4 = $(".doughnut-chart2")[0].getContext("2d");
                window.myDoughnut2 = new Chart(ctx4).Doughnut(doughnutData2, {
                    responsive : true,
                    showTooltips: true
                });

            };

        //  end:  Chart =============

        // start: Maps============

          jQuery('.maps').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#fff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });

        // end: Maps==============

      })(jQuery);
     </script>
  @yield('pie')
  <!-- end: Javascript -->
  </body>
</html>