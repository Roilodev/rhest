<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RH - Estadísticas</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Sistema Informativo UBH 2024</span>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Date -->
                    <form
                        class="navbar-nav ml-auto">
                        <div class="input-group">
                            <a href="#" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-flag"></i>
                                </span>
                                <span class="text">{{ now()->format('Y-m-d'); }}</span>
                            </a>
                        </div>
                    </form>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Altas -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Altas del día</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->altas_dia }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Altas de la semana</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->altas_semana }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Altas del mes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->altas_mes }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                ALtas del año</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->altas_anio }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bajas -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Bajas del día</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->bajas_dia }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Bajas de la semana</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->bajas_semana }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Bajas del mes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->bajas_mes }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Bajas del año</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->bajas_anio }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-table fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ausencias -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Ausencias del día (OBRA)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->ausencias_dia }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-flag fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Certificados Médicos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->CM }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tree fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Vacaciones</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->vacaciones }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-folder fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                otras "no presencias"</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $estadisticas[0]->otras_npa }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Soldados
                                            <div class="text-white-50 small">{{ $estadisticas[0]->soldados }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Albergados
                                            <div class="text-white-50 small">{{ $estadisticas[0]->albergados }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Mujeres
                                            <div class="text-white-50 small">{{ $estadisticas[0]->mujeres }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            XXX
                                            <div class="text-white-50 small">xxx</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Próximos en el Submayor
                                            <div class="text-white-50 small">xxx</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            XXX 
                                            <div class="text-white-50 small">xxx</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Cargos Por Completar
                                            <div class="text-black-50 small">xxx</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Con Más de 2 Ausencias
                                            <div class="text-white-50 small">xxx</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Cargos Relevantes en Obra</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Plomeros ({{ $estadisticas[0]->plomeros_presentes }}/{{ $estadisticas[0]->plomeros_demanda }})<span
                                            class="float-right">{{ round(($estadisticas[0]->plomeros_presentes / $estadisticas[0]->plomeros_demanda) * 100,0) }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: {{ round(($estadisticas[0]->plomeros_presentes / $estadisticas[0]->plomeros_demanda) * 100,0) }}%"
                                            aria-valuenow="{{ round(($estadisticas[0]->plomeros_presentes / $estadisticas[0]->plomeros_demanda) * 100,0) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Electricistas ({{ $estadisticas[0]->electricistas_presentes }}/{{ $estadisticas[0]->electricistas_demanda }})<span
                                            class="float-right">{{ round(($estadisticas[0]->electricistas_presentes / $estadisticas[0]->electricistas_demanda) * 100,0) }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ round(($estadisticas[0]->electricistas_presentes / $estadisticas[0]->electricistas_demanda) * 100,0) }}%"
                                            aria-valuenow="{{ round(($estadisticas[0]->electricistas_presentes / $estadisticas[0]->electricistas_demanda) * 100,0) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Mecánicos ({{ $estadisticas[0]->mecanicos_presentes }}/{{ $estadisticas[0]->mecanicos_demanda }})<span
                                            class="float-right">{{ round(($estadisticas[0]->mecanicos_presentes / $estadisticas[0]->mecanicos_demanda) * 100,0) }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: {{ round(($estadisticas[0]->mecanicos_presentes / $estadisticas[0]->mecanicos_demanda) * 100,0) }}%"
                                            aria-valuenow="{{ round(($estadisticas[0]->mecanicos_presentes / $estadisticas[0]->mecanicos_demanda) * 100,0) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Albañiles(Enchapadores) ({{ $estadisticas[0]->enchapadores_presentes }}/{{ $estadisticas[0]->enchapadores_demanda }}) <span
                                            class="float-right">{{ round(($estadisticas[0]->enchapadores_presentes / $estadisticas[0]->enchapadores_demanda) * 100,0) }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ round(($estadisticas[0]->enchapadores_presentes / $estadisticas[0]->enchapadores_demanda) * 100,0) }}%"
                                            aria-valuenow="{{ round(($estadisticas[0]->enchapadores_presentes / $estadisticas[0]->enchapadores_demanda) * 100,0) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Perfileros ({{ $estadisticas[0]->perfileros_presentes }}/{{ $estadisticas[0]->perfileros_demanda }})<span
                                            class="float-right">{{ round(($estadisticas[0]->perfileros_presentes / $estadisticas[0]->perfileros_demanda) * 100,0) }}%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{ round(($estadisticas[0]->perfileros_presentes / $estadisticas[0]->perfileros_demanda) * 100,0) }}%"
                                            aria-valuenow="{{ round(($estadisticas[0]->perfileros_presentes / $estadisticas[0]->perfileros_demanda) * 100,0) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Masilleros ({{ $estadisticas[0]->masilleros_presentes }}/{{ $estadisticas[0]->masilleros_demanda }})<span
                                            class="float-right">{{ round(($estadisticas[0]->masilleros_presentes / $estadisticas[0]->masilleros_demanda) * 100,0) }}%</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ round(($estadisticas[0]->masilleros_presentes / $estadisticas[0]->masilleros_demanda) * 100,0) }}%"
                                            aria-valuenow="{{ round(($estadisticas[0]->masilleros_presentes / $estadisticas[0]->masilleros_demanda) * 100,0) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>                                    
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>