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
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
<<<<<<< HEAD
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Nombre:</label>
                            <input type="hidden" name="idOperadores" id="idOperadores">
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Cuit:</label>
                            <input type="text" class="form-control" name="cuit" id="cuit" maxlength="256" placeholder="cuit">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Direccion:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" maxlength="256" placeholder="Direccion">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Ciudad:</label>
                            <input type="text" class="form-control" name="ciudad" id="ciudad" maxlength="256" placeholder="Ciudad">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Telefono:</label>
                            <input type="text" class="form-control" name="tel" id="tel" maxlength="256" placeholder="Telefono">
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Observacion:</label>
                            <input type="text" class="form-control" name="observacion" id="observacion" maxlength="256" placeholder="observacion">
                          </div>
=======
                         <div class="form-group"> <!-- Full Name -->
                            <label for="full_name_id" class="control-label">Nombre</label>
                            <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="Razon social">
                          </div>    

                          <div class="form-group"> <!-- Street 1 -->
                            <label for="street1_id" class="control-label">Cuit</label>
                            <input type="text" class="form-control" id="street1_id" name="street1" placeholder="Cuit">
                          </div>                    
                            
                          <div class="form-group"> <!-- Street 2 -->
                            <label for="street2_id" class="control-label">Direccion</label>
                            <input type="text" class="form-control" id="street2_id" name="street2" placeholder="Direccion">
                           </div>    

                          <div class="form-group"> <!-- City-->
                              <label for="city_id" class="control-label">Ciudad</label>
                              <input type="text" class="form-control" id="city_id" name="city" placeholder="Ciudad">
                          </div>   
                          <div class="form-group"> <!-- State Button -->
                              <label for="state_id" class="control-label">Provincia</label>
                              <select class="form-control" id="state_id">
                                  <option value="Buenos aires">Buenos aires</option>
                                  <option value="Buenos aires">Santa fe</option>
                                  <option value="Cordoba">Cordoba</option>
                                  <option value="Entre rios">Entre rios</option>
                                  <option value="Misiones">Misiones</option>
                                  <option value="Corrientes">Corrientes</option>
                                  <option value="Tucuman">Tucuman</option> 
                              </select>                    
                          </div> 
                          <div class="form-group"> <!-- City-->
                              <label for="city_id" class="control-label">Telefono</label>
                              <input type="text" class="form-control" id="city_id" name="city" placeholder="Telefono">
                          </div>     
                          <div class="form-group"> <!-- City-->
                              <label for="city_id" class="control-label">Observacion</label>
                               <textarea class="form-control" id="message" name="message" placeholder="Observacion" rows="7"></textarea>
                          </div>     

>>>>>>> test
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