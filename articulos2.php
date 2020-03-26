<?php
     include_once("header2.php");
     include_once("validates.php");
     include_once("banner2.php");
?>
<!-- SE PONE EN COMENTARIOS PARA UN MEJOR DISEÑO -->
<link rel="stylesheet" href="dist/css/base.css">
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script> 
<script src="dist/js/empresas.js"></script>
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Artículos
                        <div class="page-title-subheading">Crea y modifica los artículos que maneja Metas, SA. de CV.
                        </div>
                    </div>
                </div>   
            </div>
        </div>            
        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Nueva</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                    <span>Consultar</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="tabs-animation">
                    <form id="signupForm">
                        <div class="row">
                            <div class="col-sm-12 col-lg-5">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Información del Equipo
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <!-- ===================================== INICIA EL PRIMER RENGLON =========================================== -->
                                        <div class="form-row">
                                            <div class="col-md-5">
                                                <div class="position-relative form-group"><label for="exampleEmail11" class="">N° de Artículo (SKU)</label>
                                                    <input id="NoArticulo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="position-relative form-group"><label for="examplePassword11" class="">Nombre de Equipo/Descripción</label>
                                                    <input id="Nombre" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ===================================== TERMINA EL PRIMER RENGLON =========================================== -->
                                        <!-- ===================================== INICIA EL PRIMER RENGLON =========================================== -->
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">No. de Serie</label>
                                                    <input type="text" class="form-control" id="NoSerie" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Intervalo</label>
                                                    <input type="text" class="form-control" id="Intervalo" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ===================================== TERMINA EL PRIMER RENGLON =========================================== -->
                                        <!-- ===================================== INICIA EL PRIMER RENGLON =========================================== -->
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Marca</label>
                                                    <input type="text" class="form-control" id="Marca" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Modelo</label>
                                                    <input type="text" class="form-control" id="Modelo" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ===================================== TERMINA EL PRIMER RENGLON =========================================== -->
                                        <!-- ===================================== INICIA EL PRIMER RENGLON =========================================== -->
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Exactitud</label>
                                                    <textarea rows="2" class="form-control" id="Exactitud" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ===================================== TERMINA EL PRIMER RENGLON =========================================== -->
                                        <!-- ===================================== INICIA EL PRIMER RENGLON =========================================== -->
                                        <div class="form-row">
                                            <div class="col-md-7">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Especificaciones Adicionales</label>
                                                    <input type="text" class="form-control" id="Especificaciones">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="position-relative form-group"> 
                                                    <label for="exampleSelect" class="">Departamento</label>
                                                    <select id="Departamento" class="form-control">
                                                    </select>  
                                                </div>  
                                            </div>
                                        </div>
                                        <!-- ===================================== TERMINA EL PRIMER RENGLON =========================================== -->
                                        <!-- ===================================== INICIA EL PRIMER RENGLON =========================================== -->
                                        <div class="form-row">
                                            <div class="col-md-5">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Tiempo de Entrega</label>
                                                    <input type="text" class="form-control" id="Especificaciones">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Peso Aprox.</label>
                                                    <input type="text" class="form-control" id="Especificaciones">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail11" class="">Ciclo de CAL</label>
                                                    <input type="text" class="form-control" id="Especificaciones">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ===================================== TERMINA EL PRIMER RENGLON =========================================== -->
                                    </div>
                                    <div class="card-footer">
                                        <!-- <input placeholder="Write here and hit enter to send..." type="text" class="form-control-sm form-control"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-7">
                                <div class="card-hover-shadow-2x mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon lnr-database icon-gradient bg-malibu-beach"> </i>Servicios Disponibles
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body">
                                                    <ul class="todo-list-wrapper list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="todo-indicator bg-warning"></div>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">
                                                                            Calibración
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right widget-content-actions">
                                                                        <div class="badge  mr-2">
                                                                            <input type="text" id="Especificaciones" style="width : 45px;">
                                                                        </div>
                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                            <i class="fa fa-check"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body">
                                                    <ul class="todo-list-wrapper list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="todo-indicator bg-warning"></div>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">
                                                                            Calibración
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right widget-content-actions">
                                                                        <div class="badge  mr-2">
                                                                            <input type="text" id="Especificaciones" style="width : 45px;">
                                                                        </div>
                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                            <i class="fa fa-check"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-block text-right card-footer">
                                        <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                                        <button class="btn btn-primary">Add Task</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" class="accordion-wrapper mb-3">
                            <div class="card">
                                <div id="headingOne" class="card-header">
                                    <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                                        <h5 class="m-0 p-0">Información General</h5>
                                    </button>
                                </div>
                                <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse show">
                                    <div class="card-body">
                                        <!-- ===================================== INICIA EL PRIMER RENGLON =========================================== -->
                                        <div class="form-row">
                                            <div class="col-md-5">
                                                <div class="position-relative form-group"><label for="exampleEmail11" class="">N° de Artículo (SKU)</label>
                                                    <input id="NoArticulo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword11" class="">Nombre de Equipo/Descripción</label>
                                                    <input id="Nombre" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="position-relative form-group">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input" name="CVentas" value="0">
                                                        <label class="custom-control-label" for="exampleCustomCheckbox1">Activo</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ===================================== TERMINA EL PRIMER RENGLON =========================================== -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
            <!-- ===================================AQUI EMPIEZA EL CODIGO DE LAS COSULTAS ====================================================================== -->
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                <div  class="main-card mb-3 card">
                    <div id="div_registros" class="card-body">
                        <!-- <table id="example" class="table table-bordered table-striped"> -->
                        <table id="table_registros" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr>
                                <th>Clave Empresa</th>
                                <th>Razón Social</th>
                                <th>RFC</th>
                                <th>Crédito</th>
                                <th>N° Proveedor</th>
                                <th>Clave de AdminPaq</th>
                                <th>Observaciones de la empresa</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div>  
            </div>  
            <!-- Codigo para la animacion de cargado -->
            <!-- <div class="loader-wrapper d-flex justify-content-center align-items-center">
                <div class="loader">
                    <div class="line-scale-pulse-out">
                        <div></div>
                        <div></div> 
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div> -->
        </div><!-- AQUI TERMINA EL DIV DEL TAB -->
    </div>
</div>
<?php include_once("footer2.php");?>