<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


    <head lang="es">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <title>
            @yield('titulo', "inicio")
        </title>

        {{-- token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">


        

        <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
        <link href="{{asset('app/publico/css/lib/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap5/css/bootstrap.min.css')}}" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('app/publico/css/lib/lobipanel/lobipanel.min.css')}}">
        <link rel="stylesheet" href="{{asset('app/publico/css/separate/vendor/lobipanel.min.css')}}">
        <link rel="stylesheet" href="{{asset('app/publico/css/lib/jqueryui/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('app/publico/css/separate/pages/widgets.min.css')}}">

        {{-- font awesome --}}
        <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.min.css')}}">

        {{-- datatables --}}
        <link rel="stylesheet" href="{{asset('app/publico/css/lib/datatables-net/datatables.min.css')}}">
        <link rel="stylesheet" href="{{asset('app/publico/css/separate/vendor/datatables-net.min.css')}}">

        <link href="{{asset('app/publico/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('app/publico/css/main.css')}}" rel="stylesheet">
        <link href="{{asset('app/publico/css/mis_estilos/estilos.css')}}" rel="stylesheet">

        {{-- form --}}
        <link rel="stylesheet" type="text/css"
            href="{{asset('app/publico/css/lib/jquery-flex-label/jquery.flex.label.css')}}"> <!-- Original -->

        {{-- mis estilos --}}
        <link href="{{asset('principal/css/estilos.css')}}" rel="stylesheet">

        {{-- pNotify --}}
        <link href="{{asset('pnotify/css/pnotify.css')}}" rel="stylesheet" />
        <link href="{{asset('pnotify/css/pnotify.buttons.css')}}" rel="stylesheet" />
        <link href="{{asset('pnotify/css/custom.min.css')}}" rel="stylesheet" />

        {{-- google fonts --}}
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

        {{-- pnotify --}}
        <script src="{{asset('pnotify/js/jquery.min.js')}}">
        </script>
        <script src="{{asset('pnotify/js/pnotify.js')}}">
        </script>
        <script src="{{asset('pnotify/js/pnotify.buttons.js')}}">
        </script>

        {{-- alpine js --}}
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        {{-- chart js --}}
        <script src="{{asset('chart/chart.js')}}"></script>

       

        
        <!-- Incluye el CSS de select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<!-- Incluye el JS de select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



        <style>
            .marca {
                width: 100%;
                background: rgb(13, 39, 48);
                position: fixed;
                bottom: 0;
                z-index: 999;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px;
            }

            .marca__parrafo {
                margin: 0 !important;
                color: white;
            }

            .marca__texto {
                color: rgb(0, 162, 255);
                text-decoration: underline;
            }

            .marca__parrafo span {
                color: red;
            }

            .site-header {
            height: 80px;
            background-color: #D2691E;
            display: flex;
            align-items: center;
            padding: 0 0px;
            color: white;
        }

            .side-menu {
            background-color: #D2691E;
            width: 200px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 80px; /* Alineado con el header */
            overflow-y: auto;
        }


        </style>
        @laravelPWA

    
</head>

<body class="with-side-menu">
    <div id="app">

        <header class="site-header">
            <div class="container-fluid" style="padding-left: 100px;">

                <a href="" class="site-logo">

                </a>


                <img src="{{ asset('img-inicio/familia.png') }}" alt="Logo de la empresa" style="height: 50px  ">
            </a>


                <button id="show-hide-sidebar-toggle" class="show-hide-sidebar menu">
                    <span>toggle menu</span>
                </button>

                <button class="hamburger hamburger--htla">
                    <span>toggle menu</span>
                </button>
                <div class="site-header-content">
                    <div class="site-header-content-in">
                        <div class="site-header-shown">

                            <div class="dropdown dropdown-notification">
                                <h6 class="mt-2 nomTipo">
                                    @if (Auth::check() &&Auth::user()->tipo_usuario === 1)
                                    Administrador
                                    @else
                                    Usuario
                                    @endif
                                </h6>
                            </div>

                            <div class="dropdown user-menu">
                                <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    @if (Auth::check())
    @if (Auth::user()->foto == null)
        <img src="{{ asset('app/publico/img/user.svg') }}" alt="">
    @else
        <img src="data:image/jpg;base64,{{ base64_encode(Auth::user()->foto) }}" alt="">
    @endif
    @else
    <img src="{{ asset('app/publico/img/user.svg') }}" alt="">
    @endif

                                </button>
                                <div class="dropdown-menu dropdown-menu-right pt-0" aria-labelledby="dd-user-menu">

                                    <h5 class="p-2 text-center nomInfo">Nombre y apellido del usuario</h5>
                                    <a class="dropdown-item" href=""><span
                                            class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
                                    <a class="dropdown-item" href=""><span
                                            class="font-icon glyphicon glyphicon-lock"></span>Cambiar contraseña</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        <span class="font-icon glyphicon glyphicon-log-out"></span>salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--.site-header-shown-->

                        <div class="mobile-menu-right-overlay"></div>
                        <div class="site-header-collapsed">

                        </div>
                        <!--.site-header-collapsed-->
                    </div>
                    <!--site-header-content-in-->
                </div>
                <!--.site-header-content-->
            </div>
            <!--.container-fluid-->
        </header>

        <div class="mobile-menu-left-overlay">
        </div>
        <nav class="side-menu">
            
            <ul class="side-menu-list p-0">
                <li class="red">
                    <a href="{{route('home')}}" class="{{ Request::is('home*') ? 'activo' : ''}}">
                        <img src="{{asset('img-inicio/house.png')}}" class="img-inicio" alt="">
                        {{-- <i class="fas fa-house-user"></i> --}}
                        <span class="lbl">INICIO</span>
                    </a>
                </li>


            
               
                



                <li class="red with-sub {{ Request::is('clientes*') ? 'opened' : ''}}">
                    <span>
                        <img src="{{asset('img-inicio/pngegg.png')}}" class="img-inicio" alt="">
                        <span class="lbl">Clientes</span>
                    </span>
                    <ul>
                        <!-- Submenú para listar clientes -->
                        <li>
                            <a href="{{ route('clientes.index') }}" class="{{ Request::is('clientes.index') ? 'activo' : ''}}">
                                <i class="fas fa-list icono-submenu"></i>
                                <span class="lbl">Clientes</span>
                            </a>
                        </li>
                        <!-- Submenú para agregar un cliente -->
                        <li>
                            <a href="{{ route('clientes.create') }}" class="{{ Request::is('clientes.create') ? 'activo' : ''}}">
                                <i class="fas fa-plus icono-submenu"></i>
                                <span class="lbl">Nuevo Cliente</span>
                            </a>
                        </li>
                    </ul>
                </li>





                <li class="red with-sub {{ Request::is('productos*') ? 'opened' : ''}}">
                    <span>
                        <img src="{{asset('img-inicio/producto.png')}}" class="img-inicio" alt="">
                        <span class="lbl">INVENTARIO</span>
                    </span>
                    <ul>
                        <!-- Submenú para listar clientes -->
                        <li>
                            <a href="{{ route('productos.index') }}" class="{{ Request::is('clientes.index') ? 'activo' : ''}}">
                                <i class="fas fa-list icono-submenu"></i>
                                <span class="lbl">Productos</span>
                            </a>
                        </li>
                        <!-- Submenú para agregar un cliente -->
                        <li>
                            <a href="{{ route('categorias.index') }}" class="{{ Request::is('categorias.index') ? 'activo' : ''}}">
                                <i class="fas fa-plus icono-submenu"></i>
                                <span class="lbl">Categorias</span>
                            </a>
                        </li>
                    </ul>
                </li>







              
                <li class="red with-sub {{ Request::is('ventas*') ? 'opened' : ''}}">
                    <span>
                        <img src="{{asset('img-inicio/ventas.png')}}" class="img-inicio" alt="">
                        <span class="lbl">VENTAS</span>
                    </span>
                    <ul>
                        <!-- Submenú para listar clientes -->
                        <li>
                            <a href="{{ route('ventas.index') }}" class="{{ Request::is('ventas.index') ? 'activo' : ''}}">
                                <i class="fas fa-list icono-submenu"></i>
                                <span class="lbl">Ventas</span>
                            </a>
                        </li>
                        <!-- Submenú para agregar un cliente -->
                        <li>
                            <a href="{{ route('categorias.index') }}" class="{{ Request::is('categorias.index') ? 'activo' : ''}}">
                                <i class="fas fa-plus icono-submenu"></i>
                                <span class="lbl">Historial de Ventas</span>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="grey with-sub {{ Request::is('cita*') ? 'opened' : ''}}">
                    <span>
                        <img src="{{asset('img-inicio/proveedores.png')}}" class="img-inicio" alt="">
                        {{-- <i class="fas fa-sort-amount-up-alt"></i> --}}
                        <span class="lbl">PROVEEDORES</span>
                    </span>
                    <ul>
                        <li>
                            <a href="" class="{{ Request::is('cita-create*') ? 'activo' : ''}}">
                                <i class="fas fa-plus-square icono-submenu"></i>
                                <span class="lbl">Proveedores</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="{{ Request::is('cita-index*') ? 'activo' : ''}}">
                                <i class="fas fa-th-list icono-submenu"></i>
                                <span class="lbl">Ingresos</span>
                            </a>
                        </li>
                    </ul>
                </li>

                
                <li class="grey with-sub {{ Request::is('cita*') ? 'opened' : ''}}">
                    <span>
                        <img src="{{asset('img-inicio/reportes.png')}}" class="img-inicio" alt="">
                        {{-- <i class="fas fa-sort-amount-up-alt"></i> --}}
                        <span class="lbl">REPORTES</span>
                    </span>
                    <ul>
                        <li>
                            <a href="" class="{{ Request::is('cita-create*') ? 'activo' : ''}}">
                                <i class="fas fa-plus-square icono-submenu"></i>
                                <span class="lbl">Reporte Ventas</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="{{ Request::is('cita-index*') ? 'activo' : ''}}">
                                <i class="fas fa-th-list icono-submenu"></i>
                                <span class="lbl">Reporte Inventario</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="red">
                    <a href="{{route('empresa.index')}}" class="{{ Request::is('empresa*') ? 'activo' : ''}}">
                        <img src="{{asset('img-inicio/info.png')}}" class="img-inicio" alt="">
                        {{-- <i class="fas fa-exclamation"></i> --}}
                        <span class="lbl">ACERCA DE</span>
                    </a>
                </li>




            </ul>
        </nav>



        <div class="page-content mt-5">
            @yield('content')
        </div>
    </div>










    <script src="{{asset('bootstrap5/js/popper.min.js')}}"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>


    <script src="{{asset('app/publico/js/lib/jquery/jquery.min.js')}}">
    </script>
    <script src="{{asset('app/publico/js/lib/tether/tether.min.js')}}">
    </script>
    <script src="{{asset('app/publico/js/lib/bootstrap/bootstrap.min.js')}}">
    </script>
    <script src="{{asset('app/publico/js/plugins.js')}}">
    </script>

    {{-- datatables --}}
    <script src="{{asset('app/publico/js/lib/datatables-net/datatables.min.js')}}"></script>



    {{-- sweet alert --}}
    <script src="{{asset('sweet/js/sweetalert2.js')}}"></script>
    <script src="{{asset('sweet/js/sweet.js')}}"></script>


    <script>
        $(function() {
			$('#example').DataTable({
				select: {
					//style: 'multi'
				},
                responsive: true,
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Registros del _START_ al _END_ de _TOTAL_ registros",
                "sInfoEmpty":      "Registros del 0 al 0 de 0 registros",
                "sInfoFiltered":   "-",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
            }
			});
		});
    </script>


    <script type="text/javascript" src="{{asset('app/publico/js/lib/jqueryui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('app/publico/js/lib/lobipanel/lobipanel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('app/publico/js/lib/match-height/jquery.matchHeight.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('loader/loader.js')}}"></script>

    <script>
        $(document).ready(function () {

			$('.panel').lobiPanel({
				sortable: true
			});
			$('.panel').on('dragged.lobiPanel', function (ev, lobiPanel) {
				$('.dahsboard-column').matchHeight();
			});

			google.charts.load('current', { 'packages': ['corechart'] });
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({ type: 'string', role: 'tooltip', 'p': { 'html': true } });
				dataTable.addRows([
					['MON', 130, ' '],
					['TUE', 130, '130'],
					['WED', 180, '180'],
					['THU', 175, '175'],
					['FRI', 200, '200'],
					['SAT', 170, '170'],
					['SUN', 250, '250'],
					['MON', 220, '220'],
					['TUE', 220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0, 25, 50, 75, 100, 125, 150, 175, 200, 225, 250, 275, 300, 325, 350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						}
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea: {
						left: 0,
						top: 0,
						width: '100%',
						height: '100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function () {
				drawChart();
				setTimeout(function () {
				}, 1000);
			});
		});
    </script>
    <script src="{{asset('app/publico/js/app.js')}}">
    </script>

    {{-- form --}}
    <script src="{{asset('app/publico/js/lib/jquery-flex-label/jquery.flex.label.js')}}"></script>

    <script type="application/javascript">
        (function ($) {
        $(document).ready(function () {
            $('.fl-flex-label').flexLabel();
        });
    })(jQuery);
    </script>


<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: 'Selecciona un cliente',
            allowClear: true
        });
    });
</script>



</body>

</html>