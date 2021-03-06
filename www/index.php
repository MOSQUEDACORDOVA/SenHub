
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="author" content="MOSQUEDA CÓRDOVA">
    <title>SenHub</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">

    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-wizard.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">

                <!-- Modern Vertical Wizard -->
                <section class="modern-vertical-wizard">
                    <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-vertical-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="database" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Conexión</span>
                                        <span class="bs-stepper-subtitle">Establece los parámetros de conexión.</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#personal-info-vertical-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="globe" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Sincronización estandar</span>
                                        <span class="bs-stepper-subtitle">Selecciona la información que deseas.</span>
                                    </span>
                                </button>
                            </div>
                            <div class="step" data-target="#address-step-vertical-modern">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="layers" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Sincronización personalizada</span>
                                        <span class="bs-stepper-subtitle">Selecciona las tablas que deseas.</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <div id="account-details-vertical-modern" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Conexión</h5>
                                    <small class="text-muted">Establece los parámetros de conexión.</small>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="vertical-modern-username">Licencia</label>
                                        <input type="text" id="vertical-modern-username" class="form-control" placeholder="123-456" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="basicSelect">Empresa</label>
                                        <select class="form-control" id="basicSelect" disabled>
                                            <option>Nombre de la empresa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="basicSelect">Instancia</label>
                                        
                                        <button class="btn btn-outline-primary col-md-12" id="loader_instancias" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            <span class="ml-25 align-middle">Detectando...</span>
                                        </button>
                                        <select class="form-control d-none" id="instancias"></select>
                                        <div class="badge badge-light-danger d-none mt-1" id="text-errores-detectar-instancias"></div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="username">Usuario</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="root" />
                                    </div>
                                    <div class="form-group form-password-toggle col-md-6">
                                        <label class="form-label" for="vertical-modern-password">Contraseña</label>
                                        <input type="password" id="vertical-modern-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-1 col-md-12">
                                        <button type="button" class="btn btn-outline-primary waves-effect col-md-12" id="conector_bd">
                                            <i data-feather='minimize-2'></i>
                                            <span>Conectar</span>
                                        </button>
                                        <button type="button" class="btn btn-outline-success col-md-12 d-none" id="conectado_bd" disabled>
                                            <strong>
                                                <i data-feather='check' class="mr-25"></i>
                                                <span>¡Conectado!</span>
                                            </strong>
                                        </button>
                                        <div 
                                            class="badge badge-light-danger d-none mt-1 col-md-12" 
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            style="width: 300px; margin: 0 auto; white-space: nowrap;overflow: hidden;text-overflow: Ellipsis;"
                                            id="text-errores-conectar">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="basicSelect">Base de datos</label>
                                        <select class="form-control" id="bases-datos" disabled>
                                            <option>Nombre base de datos</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </button>
                                </div>
                            </div>


                            <div id="personal-info-vertical-modern" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Sincronización estandar</h5>
                                    <small>Selecciona la información que deseas sincronizar.</small>
                                </div>

                                <!-- Basic Switches Starts -->
                                <section id="basic-switches">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Productos</h4>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-0">Descripción de la sincronización.</p>
                                                    <div class="demo-inline-spacing">
                                                        <div class="custom-control custom-switch custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" />
                                                            <label class="custom-control-label" for="customSwitch1">No sincronizado.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Basic Switches Ends -->

                                <!-- Basic Switches Starts -->
                                <section id="basic-switches">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Ventas</h4>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text mb-0">Descripción de la sincronización.</p>
                                                    <div class="demo-inline-spacing">
                                                        <div class="custom-control custom-switch custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch2" />
                                                            <label class="custom-control-label" for="customSwitch2">No sincronizado.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Basic Switches Ends -->

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none">Siguiente</span>
                                        <i data-feather="arrow-right" class="align-middle ml-sm-25 ml-0"></i>
                                    </button>
                                </div>
                            </div>

                            <div id="address-step-vertical-modern" class="content">
                                <div class="content-header">
                                    <h5 class="mb-0">Sincronización personalizada</h5>
                                    <small>Selecciona las tablas que deseas.</small>
                                </div>

                                <!-- Basic table -->
                                <section id="basic-datatable">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <table class="datatables-basic table">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th></th>
                                                            <th>id</th>
                                                            <th>Nombre</th>
                                                            <th>Estatus</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal to add new record -->
                                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                                        <div class="modal-dialog sidebar-sm">
                                            <form class="add-new-record modal-content pt-0">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                                <div class="modal-header mb-1">
                                                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                                </div>
                                                <div class="modal-body flex-grow-1">
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-icon-default-post">Post</label>
                                                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                                        <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                                        <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000" />
                                                    </div>
                                                    <button type="button" class="btn btn-primary data-submit mr-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                                <!--/ Basic table -->

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-prev">
                                        <i data-feather="arrow-left" class="align-middle mr-sm-25 mr-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Anterior</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Modern Vertical Wizard -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>

    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/form-wizard.js"></script>

    <script src="../../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>

    <!-- END: Page JS-->

    <!-- BEGIN: SQL JS-->
    <script src="../../../app-assets/js/scripts/conexiones.js"></script>

    <!-- END: SQL JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

    </script>
</body>
<!-- END: Body-->

</html>