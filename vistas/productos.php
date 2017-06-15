<?php
require 'header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Productos <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Peso</th>
                            <th>Descripcion</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Peso</th>
                            <th>Descripcion</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 650px;" id="formularioregistros">

                        <form name="formulario" id="formulario" method="POST">                       
                         <div class="form-group"> <!-- Full Name -->
                            <label for="full_name_id" class="control-label">Nombre</label>
                            <input type="hidden" name="idProductos" id="idProductos">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Producto" required>
                          </div>    

                          <div class="form-group"> <!-- Street 1 -->
                            <label for="street1_id" class="control-label">Peso</label>
                            <input type="text" class="form-control" id="number" name="peso" placeholder="peso">
                          </div>                    
                            
                         
                          <div class="form-group"> <!-- City-->
                              <label for="city_id" class="control-label">Descripcion</label>
                               <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Observacion" rows="7"></textarea>
                          </div>     


                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
require 'footer.php';
?>
<script type="text/javascript" src="scripts/productos.js"></script>