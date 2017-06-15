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
                          <h1 class="box-title">Operadores <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
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
                            <th>Cuit</th>
                            <th>Direccion</th>
                            <th>Ciudad</th>
                            <th>Provincia</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>Nombre</th>
                            <th>Cuit</th>
                            <th>Direccion</th>
                            <th>Ciudad</th>
                            <th>Provincia</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 650px;" id="formularioregistros">

                        <form name="formulario" id="formulario" method="POST">                       
                         <div class="form-group"> <!-- Full Name -->
                            <label for="full_name_id" class="control-label">Nombre</label>
                            <input type="hidden" name="idOperadores" id="idOperadores">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Razon social" required>
                          </div>    

                          <div class="form-group"> <!-- Street 1 -->
                            <label for="street1_id" class="control-label">Cuit</label>
                            <input type="text" class="form-control" id="cuit" name="cuit" placeholder="Cuit">
                          </div>                    
                            
                          <div class="form-group"> <!-- Street 2 -->
                            <label for="street2_id" class="control-label">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                           </div>    

                          <div class="form-group"> <!-- City-->
                              <label for="city_id" class="control-label">Ciudad</label>
                              <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
                          </div>   
                          <div class="form-group"> <!-- State Button -->
                              <label for="state_id" class="control-label">Provincia</label>
                              <select class="form-control select-picker" id="provincia" name="provincia">
                                  <option value="Buenos aires">Buenos aires</option>
                                  <option value="Buenos aires">Santa fe</option>
                                  <option value="Cordoba">Cordoba</option>
                                  <option value="Entre rios">Entre rios</option>
                                  <option value="Misiones">Misiones</option>
                                  <option value="Corrientes">Corrientes</option>
                                  <option value="Tucuman">Tucuman</option> 
                                  <option value="Mendoza">Mendoza</option> 
                              </select>                    
                          </div> 
                          <div class="form-group"> <!-- City-->
                              <label for="city_id" class="control-label">Telefono</label>
                              <input type="text" class="form-control" id="number" name="tel" placeholder="Telefono">
                          </div>     
                          <div class="form-group"> <!-- City-->
                              <label for="city_id" class="control-label">Observacion</label>
                               <textarea class="form-control" id="observacion" name="observacion" placeholder="Observacion" rows="7"></textarea>
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
<script type="text/javascript" src="scripts/operadores.js"></script>