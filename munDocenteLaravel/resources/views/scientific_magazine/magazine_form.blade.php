@extends('layouts.routes.routedown')

@section('menus')

	<li style="white-space: nowrap;"><a href="/">Home</a></li>
    <li style="white-space: nowrap;"><a href="/teacher_call">Convocatorias docente</a></li>
    <li style="white-space: nowrap;"><a href="/scientific_magazine">Revistas científicas</a></li>
    <li style="white-space: nowrap;"><a href="/academic_event">Eventos académicos</a></li>

@stop

@section('principal')
<div id="main-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u 12u(mobile)">
		<center><h2 class="count">AGREGAR REVISTAS CIENTIFICAS</h2></center>			
	</div>
			<div class="2u 12u(mobile)"></div>

			<div class="8u 12u(mobile)">
				<section class="box">

			        <form method="post">
			            
			   		<div class="row uniform">
						<p>Campos obligatorios *</p>
					</div>
				
					<hr>
			        <div class="row uniform">
			            <div >
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
			                    	<input type="text" class="form-control" placeholder="Nombre de la revista cientifica *" name="name" >
			                    </div>		
			                    
			                </div>
			            </div>

			            <div >
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			                    	<input type="text" class="form-control" name="date_publication" placeholder="Fecha de publicacion *" >
			                    	<span class="input-group-addon">
                       				 <span class="glyphicon glyphicon-calendar"></span>
                    				</span>
			                    </div>	
			                  
			                </div>
			            </div>

			            <div >
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
			                    	<input type="text" class="form-control" placeholder="URL *" name="url" >
			                    </div>		
			                    
			                </div>
			            </div>
			           
			             <div >
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			                    	<input type="text" class="form-control" name="start_date" placeholder="Fecha de inicio *" >
			                    	<span class="input-group-addon">
                       				 <span class="glyphicon glyphicon-calendar"></span>
                    				</span>
			                    </div>	
			                  
			                </div>
			            </div>


			             <div >
			                <div class="12u$(xsmall)">
			                    <div class="input-group" id='datetimepicker1'>
									<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			                    	<input type="text" class="form-control" name="end_date" placeholder="Fecha de fin " >
			                    	<span class="input-group-addon">
                       				 <span class="glyphicon glyphicon-calendar"></span>
                    				</span>
			                    </div>				                  
			                </div>
			            </div>

			        	  <div >
			                <div class="12u$(xsmall)">
			                <p>Categoria *</p>
			                    <div class="input-group">			                    
								<span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>				
								<select name="category" id="cat" placeholder="Categoria *"class="form-control" />
								@foreach($type_of_scientific_magazines as $type_of_scientific_magazine)
									<option>{{ $type_of_scientific_magazine->value }} </option>
								@endforeach
								</select>
							</div>
			                    
			                </div>
			            </div>    
					
			            <div >
			                <div class="12u$(xsmall)">
			                    <div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
			                    	<input type="text" class="form-control" placeholder="Descripción *" name="description" >
			                    </div>		
			                    
			                </div>
			            </div>

			            <center class="btnregis"><div class="form-group">
			                <div class="12u$">
			                    <button type="submit" class="button special">
			                        Agregar
			                    </button>
			                </div>
			            </div></center>
			        </div>
			        </form>
			    </section>
			</div>
        </div>
    </div>
</div>
@endsection
