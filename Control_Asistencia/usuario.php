<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/all.min.js"></script>
</head>
<body>
  <h1 class="text-center">Usuario</h1>
    <div class="container-fluid row">
      <form class="col-4 px-5" action="" method="POST">
        <h3>Registro de Usuario</h3>
        
        <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
  <h1 class="box-title">Usuarios <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar" style="display: none;"><i class="fa fa-plus-circle"></i>Agregar</button></h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros" style="display: none;">
  <div id="tbllistado_wrapper" class="dataTables_wrapper"><div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="tbllistado" href="#"><span>Copy</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="tbllistado" href="#"><span>Excel</span></a><a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="tbllistado" href="#"><span>CSV</span></a><a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="tbllistado" href="#"><span>PDF</span></a></div><div id="tbllistado_filter" class="dataTables_filter"><label>Buscar:<input type="search" class="" placeholder="" aria-controls="tbllistado" spellcheck="false" data-ms-editor="true"></label></div><table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover dataTable" role="grid" aria-describedby="tbllistado_info" style="width: 1233px;">
    <thead>
      <tr role="row"><th class="sorting_desc" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Opciones: activate to sort column ascending" style="width: 91px;" aria-sort="descending">Opciones</th><th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 81px;">Nombre</th><th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Apellidos: activate to sort column ascending" style="width: 166px;">Apellidos</th><th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Login: activate to sort column ascending" style="width: 60px;">Login</th><th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 251px;">Email</th><th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Foto: activate to sort column ascending" style="width: 60px;">Foto</th><th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Fecha/Registro: activate to sort column ascending" style="width: 149px;">Fecha/Registro</th><th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 71px;">Estado</th></tr></thead>
    <tbody>
    <tr role="row" class="odd"><td class="sorting_1"><button class="btn btn-warning btn-xs" onclick="mostrar(1)"><i class="fa fa-pencil"></i></button> <button class="btn btn-info btn-xs" onclick="mostrar_clave(1)"><i class="fa fa-key"></i></button> <button class="btn btn-danger btn-xs" onclick="desactivar(1)"><i class="fa fa-close"></i></button></td><td>admin</td><td>compartiendocodigos</td><td>admin</td><td>info@compartiendocodigos.com</td><td><img src="../files/usuarios/default.jpg" height="50px" width="50px"></td><td>2020-01-18 00:00:00</td><td><span class="label bg-green">Activado</span></td></tr><tr role="row" class="even"><td class="sorting_1"><button class="btn btn-warning btn-xs" onclick="mostrar(2)"><i class="fa fa-pencil"></i></button> <button class="btn btn-info btn-xs" onclick="mostrar_clave(2)"><i class="fa fa-key"></i></button> <button class="btn btn-danger btn-xs" onclick="desactivar(2)"><i class="fa fa-close"></i></button></td><td>JUAN</td><td>Lopez Torres</td><td>juan</td><td>juan@gmail.com</td><td><img src="../files/usuarios/1579406789.jpg" height="50px" width="50px"></td><td>2020-01-18 22:06:29</td><td><span class="label bg-green">Activado</span></td></tr><tr role="row" class="odd"><td class="sorting_1"><button class="btn btn-warning btn-xs" onclick="mostrar(11)"><i class="fa fa-pencil"></i></button> <button class="btn btn-info btn-xs" onclick="mostrar_clave(11)"><i class="fa fa-key"></i></button> <button class="btn btn-danger btn-xs" onclick="desactivar(11)"><i class="fa fa-close"></i></button></td><td>Angel</td><td>totocayo</td><td>pepe</td><td>angelinos257@gmail.com</td><td><img src="../files/usuarios/1579408503.jpg" height="50px" width="50px"></td><td>2020-01-18 22:35:03</td><td><span class="label bg-green">Activado</span></td></tr><tr role="row" class="even"><td class="sorting_1"><button class="btn btn-warning btn-xs" onclick="mostrar(14)"><i class="fa fa-pencil"></i></button> <button class="btn btn-info btn-xs" onclick="mostrar_clave(14)"><i class="fa fa-key"></i></button> <button class="btn btn-danger btn-xs" onclick="desactivar(14)"><i class="fa fa-close"></i></button></td><td>Pedro</td><td>totocayo</td><td>coco</td><td>angelinos257@gmail.com</td><td><img src="../files/usuarios/1579415808.jpg" height="50px" width="50px"></td><td>2020-01-19 00:36:47</td><td><span class="label bg-green">Activado</span></td></tr></tbody>
    <tfoot>
      <tr><th rowspan="1" colspan="1">Opciones</th><th rowspan="1" colspan="1">Nombre</th><th rowspan="1" colspan="1">Apellidos</th><th rowspan="1" colspan="1">Login</th><th rowspan="1" colspan="1">Email</th><th rowspan="1" colspan="1">Foto</th><th rowspan="1" colspan="1">Fecha/Registro</th><th rowspan="1" colspan="1">Estado</th></tr></tfoot>   
  </table><div class="dataTables_info" id="tbllistado_info" role="status" aria-live="polite">Mostrando 1 a 4 de 4 registros</div><div class="dataTables_paginate paging_simple_numbers" id="tbllistado_paginate"><a class="paginate_button previous disabled" aria-controls="tbllistado" data-dt-idx="0" tabindex="0" id="tbllistado_previous">Anterior</a><span><a class="paginate_button current" aria-controls="tbllistado" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="tbllistado" data-dt-idx="2" tabindex="0" id="tbllistado_next">Siguiente</a></div></div>
</div>
<div class="panel-body" id="formularioregistros" style="">
  <form action="" name="formulario" id="formulario" method="POST">
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Tipo usuario(*):</label>
     <div class="btn-group bootstrap-select form-control select-picker"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="idtipousuario" title="seleccione..."><span class="filter-option pull-left">seleccione...</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">seleccione...</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Administrador</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Vendedor</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="idtipousuario" id="idtipousuario" class="form-control select-picker" required="" tabindex="-98"><option value="0">seleccione...</option><option value="1">Administrador</option><option value="2">Vendedor</option></select></div>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Departamento(*):</label>
     <div class="btn-group bootstrap-select form-control select-picker"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="iddepartamento" title="seleccione..."><span class="filter-option pull-left">seleccione...</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">seleccione...</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Analista de créditos</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Promotor de ahorro y crédito</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Gerencia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Administración</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Recibidor(a)/Pagador(a)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Vigilancia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Limpieza</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="iddepartamento" id="iddepartamento" class="form-control select-picker" required="" tabindex="-98"><option value="0">seleccione...</option><option value="1">Analista de créditos</option><option value="2">Promotor de ahorro y crédito</option><option value="3">Gerencia</option><option value="4">Administración</option><option value="5">Recibidor(a)/Pagador(a)</option><option value="6">Vigilancia</option><option value="7">Limpieza</option></select></div>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Nombre(*):</label>
      <input class="form-control" type="hidden" name="idusuario" id="idusuario" value="">
      <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required="" spellcheck="false" data-ms-editor="true">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Apellidos(*):</label>
      <input class="form-control" type="text" name="apellidos" id="apellidos" maxlength="100" placeholder="Apellidos" required="" spellcheck="false" data-ms-editor="true">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Email: </label>
      <input class="form-control" type="email" name="email" id="email" maxlength="70" placeholder="email">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Login(*):</label>
      <input class="form-control" type="text" name="login" id="login" maxlength="20" placeholder="nombre de usuario" required="" spellcheck="false" data-ms-editor="true">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12" id="claves">
      <label for="">Clave de ingreso(*):</label>
      <input class="form-control" type="password" name="clave" id="clave" maxlength="64" placeholder="Clave">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12" id="claves">
      <label for="">Clave de asistencia(*):</label>
      <button class="btn btn-info" type="button" onclick="generar(6);">Generar</button>
      <input class="form-control" type="text" name="codigo_persona" id="codigo_persona" maxlength="64" placeholder="Clave" spellcheck="false" data-ms-editor="true">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Imagen:</label>
      <input class="form-control filestyle" data-buttontext="Seleccionar foto" type="file" name="imagen" id="imagen" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle input-group"><input type="text" class="form-control " placeholder="" disabled=""> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="imagen" class="btn btn-default "><span class="icon-span-filestyle fa fa-folder-open"></span> <span class="buttonText">Seleccionar foto</span></label></span></div>
      <input type="hidden" name="imagenactual" id="imagenactual" value="">
      <img src="" alt="" width="150px" height="120" id="imagenmuestra" style="display: none;">
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
      <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
    </div>
  </form>
</div>



<!--modal para ver la venta-->
 <div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 20% !important;">
     <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Cambio de contraseña</h4>
        </div>
        <div class="modal-body">
  <form action="" name="formularioc" id="formularioc" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input class="form-control" type="hidden" name="idusuarioc" id="idusuarioc">
            <input class="form-control" type="password" name="clavec" id="clavec" maxlength="64" placeholder="Clave" required="">
          </div>
          <button class="btn btn-primary" type="submit" id="btnGuardar_clave"><i class="fa fa-save"></i>  Guardar</button>
      <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
        </form>

        <div class="modal-footer">
          <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
        </div>
</div>
</div>
</div>
<!--inicio de modal editar contraseña--->
<!--fin de modal editar contraseña--->
<!--fin centro-->
      </div>

      </div>
      </div>
      <!-- /.box -->

    </div>
      <div class="col-8">
        <table class="table">
        <thead>
          <tr>
          <th scope="col">id</th>
          <th scope="col">Tipos de usuario</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Direccion</th>
          <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            
        </tbody>
        </table>
      </div>
  </div>
</body>
</html>