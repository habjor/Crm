<style type="text/css">
	#ContTareas .LinkTarea a{
			color:white;
		}
	#ContTareas .linkContacto a{
			color:#41e3fb;
		}
	#ContTareas .text-verde{
			color:#90ef00;
		}
	#ContTareas small{
		color:black;
	}
	#ContTareas .echoPalomita{
		color:#052af9;
	}

</style>
<section class="content-header">
      <ol class="breadcrumb">
        <li><a href="cLogin"><i class="fa fa-map-signs"></i>Inicio</a></li>
        <li class="active"></li>
      </ol>
</section>

    <!-- Main content -->
<section class="content">
      <div class="row">
      <h1></h1>
        <div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#Tareas_Pendientes" data-toggle="tab">Tareas Pendientes</a></li>
              <li><a href="#Tareas_Realizadas" data-toggle="tab">Tareas Realizadas</a>
              </li>
              <li class="pull-right">
             <span class="text-muted" style="padding: 10px 0px">Prioridad:&nbsp;
              	<i class="fa fa-bookmark text-red">Alta</i> &nbsp;
              	<i class="fa fa-bookmark text-yellow">Media</i>&nbsp;
              	<i class="fa fa-bookmark text-green">Baja</i>
              </span>
              </li>
            </ul>
            <div class="tab-content">
            	<div class="tab-pane active" id="Tareas_Pendientes">
                	<b>Empresas:</b>
					<div class="box box-primary">	 <!-- LISTA TAREAS -->
			            <div class="box-header">
			              <i class="fa fa-university"></i>
			              <i class="ion ion-clipboard"></i>
			              <h3 class="box-title">TAREAS</h3>
			            </div>
			            <div class="box-body" id="ContTareas">
			              <ul class="todo-list" id="ListaTareas">
			              </ul>
			            </div>
			            <div class="box-footer clearfix no-border">
			                <button id="btn_nTarea" class="btn btn-default pull-right " data-toggle="modal" data-target="#ModalTarea"><i class="fa fa-plus fa-x2"></i> Nueva Tarea</button>
			            </div>
		          	</div>
             	</div><!-- /.tab-pane -->
               	<div class="tab-pane" id="Tareas_Realizadas">
                	<b>Empresas:</b>
					<div class="box box-primary">	 <!-- LISTA TAREAS -->
			            <div class="box-header">
			              <i class="fa fa-university"></i>
			              <i class="ion ion-clipboard"></i>
			              <h3 class="box-title">TAREAS</h3>
			            </div>
			            <div class="box-body" id="ContTareas">
			              <ul class="todo-list" id="ListaTareasRealizadasEmp">
			              </ul>
			            </div>
			            <div class="box-footer clearfix no-border">
                			<button id="btn_nTarea" class="btn btn-default pull-right " data-toggle="modal" data-target="#ModalTarea"><i class="fa fa-plus fa-x2"></i> Nueva Tarea</button>
			            </div>
		          	</div>
              	</div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
          </div><!-- nav-tabs-custom -->
        </div><!-- /.col -->

		<div class="col-md-6">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#Tareas_PendientesPersonas" data-toggle="tab">Tareas Pendientes</a></li>
              <li><a href="#Tareas_RealizadasPersona" data-toggle="tab">Tareas Realizadas</a></li>
              <li class="pull-right">             
              	<span class="text-muted" style="padding: 10px 0px">Prioridad:&nbsp;
	              	<i class="fa fa-bookmark text-red">Alta</i>&nbsp;
	              	<i class="fa fa-bookmark text-yellow">Media</i>&nbsp;
	              	<i class="fa fa-bookmark text-green">Baja</i>
              	</span>
              </li>
            </ul>
            <div class="tab-content">
            	<div class="tab-pane active" id="Tareas_PendientesPersonas">
                	<b>Personas:</b>
					<div class="box box-primary">	 <!-- LISTA TAREAS de PERSONAS -->
		            	<div class="box-header">
		             	 <i class="fa fa-users"></i>
		             	 <i class="ion ion-clipboard"></i>
		             	 <h3 class="box-title">TAREAS</h3>
		           		</div>
		            	<div class="box-body" id="ContTareas">
		              		<ul class="todo-list" id="ListaTareasPersonas">
		              		</ul>
		            	</div>
                  <div class="box-footer clearfix no-border">
                      <button id="btn_nTarea" class="btn btn-default pull-right " data-toggle="modal" data-target="#ModalTareap"><i class="fa fa-plus fa-x2"></i> Nueva Tarea</button>
                  </div>
		          	</div>
             	</div><!-- /.tab-pane -->
               	<div class="tab-pane" id="Tareas_RealizadasPersona">
                	<b>Personas:</b>
                	<div class="box box-primary">	 <!-- LISTA TAREAS de PERSONAS -->
		            	<div class="box-header">
		             	 <i class="fa fa-users"></i>
		             	 <i class="ion ion-clipboard"></i>
		             	 <h3 class="box-title">TAREAS</h3>
		           		</div>
		            	<div class="box-body" id="ContTareas">
		              		<ul class="todo-list" id="ListaTareasRealizadasPersonas">
		              		</ul>
		            	</div>
                  <div class="box-footer clearfix no-border">
                      <button id="btn_nTarea" class="btn btn-default pull-right " data-toggle="modal" data-target="#ModalTareap"><i class="fa fa-plus fa-x2"></i> Nueva Tarea</button>
                  </div>
		          	</div>
              	</div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
          </div><!-- nav-tabs-custom -->
        </div><!-- /.col -->
      </div>

<div class="modal fade modal-info" id="ModalTareap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">AGREGAR NUEVA TAREA GRUPAL</h4>
      </div>
      <form name="formTareaEmpresas" id="formTareaEmpresas" method="POST" action="<?php echo base_url();?>cEmpresa/guardarTarea">
      <div class="modal-body">
          <div class="box box-info">
            <div class="box-body" style="background-color: #f9f8eb; color: black">
               <div class="form-group">
                  <div class="input-group col-md-12">
                    <div class="input-group-addon">
                      <span>Titulo</span>
                    </div>
                    <input class="col-md-12" type="text" name="TituloTarea" id="TituloTarea" required />
                  </div>
               </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Categoria</span>
                      </div>
                      <select id="Categoria" name="Categoria" class="form-control" placeholder="Categoria" style="width: 100%;">
                          <option value="Llamar">Llamar</option>
                          <option value="Entrevista">Entrevista</option>
                          <option value="Correo">Correo</option>
                          <option value="Seguimiento">Seguimiento</option>
                          <option value="Reunion">Reunión</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Prioridad</span>
                      </div>
                      <select id="Prioridad" name="Prioridad" class="form-control" placeholder="Categoria" style="width: 100%;">
                          <option value="Baja">Baja</option>
                          <option value="Media">Media</option>
                          <option value="Alta">Alta</option>
                      </select>
                    </div>
                  </div>
                  Participantes:
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Usuarios:</span>
                      </div>
                      <select id="Usuarios" name="Usuarios[]" class="form-control select2" multiple="multiple" data-placeholder="Usuarios Participantes" style="width: 100%;" required>
                      </select>
                    </div>
                  </div>
          <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Personas:</span>
                      </div>
                      <select id="PersonasPart" name="PersonasPart[]" class="form-control select2" multiple="multiple" data-placeholder="Personas Participantes" style="width: 100%;" required>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Descripcion</span>
                      </div>
                      <textarea name="Descripcion" id="Descripcion" placeholder="Detalles de la tarea" rows="4" ></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-md-12 text-center">
                    <label>¿CUANDO DEBE CUMPLIRSE?</label>
                    <div class="input-group date">
                      <div id="datepickerP" data-date="08/07/2017"></div>
                      <input type="hidden" id="FechaFinP"  name="FechaFinP" value="08/07/2017">
                      <input type="hidden" id="idUsuarioc" name="idUsuarioc" 
                      value="<?php echo $this->session->userdata('s_idUsuario');?>">
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-outline">Guardar Tarea</button>
      </div>
    </form>
    </div>
  </div>
</div>


<div class="modal fade modal-info" id="ModalTarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">AGREGAR NUEVA TAREA GRUPAL</h4>
      </div>
      <form name="formTareaEmpresas2" id="formTareaEmpresas2" method="POST" action="<?php echo base_url();?>cEmpresa/guardarTarea">
      <div class="modal-body">
          <div class="box box-info">
            <div class="box-body" style="background-color: #f9f8eb; color: black">
               <div class="form-group">
                  <div class="input-group col-md-12">
                    <div class="input-group-addon">
                      <span>Titulo</span>
                    </div>
                    <input class="col-md-12" type="text" name="TituloTarea" id="TituloTarea" required />
                  </div>
               </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Categoria</span>
                      </div>
                      <select id="Categoria" name="Categoria" class="form-control" placeholder="Categoria" style="width: 100%;">
                          <option value="Llamar">Llamar</option>
                          <option value="Entrevista">Entrevista</option>
                          <option value="Correo">Correo</option>
                          <option value="Seguimiento">Seguimiento</option>
                          <option value="Reunion">Reunión</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Prioridad</span>
                      </div>
                      <select id="Prioridad" name="Prioridad" class="form-control" placeholder="Categoria" style="width: 100%;">
                          <option value="Baja">Baja</option>
                          <option value="Media">Media</option>
                          <option value="Alta">Alta</option>
                      </select>
                    </div>
                  </div>
                  Participantes:
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Usuarios:</span>
                      </div>
                      <select id="Asignados" name="Asignados[]" class="form-control select2" multiple="multiple" data-placeholder="Usuarios Participantes" style="width: 100%;" required>
                      </select>
                    </div>
                  </div>
				  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Empresas:</span>
                      </div>
                      <select id="EmpresasPart" name="EmpresasPart[]" class="form-control select2" multiple="multiple" data-placeholder="Empresas Participantes" style="width: 100%;" required>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span>Descripcion</span>
                      </div>
                      <textarea name="Descripcion" id="Descripcion" placeholder="Detalles de la tarea" rows="4" ></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group col-md-12 text-center">
                    <label>¿CUANDO DEBE CUMPLIRSE?</label>
                    <div class="input-group date">
                      <div id="datepickerE" data-date="08/07/2017"></div>
                      <input type="hidden" id="FechaFinE"  name="FechaFinE" value="08/07/2017">
                      <input type="hidden" id="idUsuarioc" name="idUsuarioc" 
                      value="<?php echo $this->session->userdata('s_idUsuario');?>">
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-outline">Guardar Tarea</button>
      </div>
    </form>
    </div>
  </div>
</div>

</section>
<script type="text/javascript">
  var idUsuarioActivo = "<?php echo $this->session->userdata('s_idUsuario');?>";
  var baseurl = "<?php echo base_url();?>"
</script>