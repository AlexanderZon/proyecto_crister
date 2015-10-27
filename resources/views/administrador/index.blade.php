@extends('layouts.master')

@section('content')
    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
    	<div class="row">&nbsp;</div>
    	<div class="row panel panel-default">
    		<div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 panel-body">
				<form role="form" method="post">
					<h4 style="text-align:center">Inicio de Sesión</h4>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<input type="text" name="email" placeholder="Correo Electrónico" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Contraseña" class="form-control">
					</div>
					<div class="checkbox">
					    <label class="col-md-2"><input type="checkbox" name="remember" value="true"> Recuérdame</label>
						<button type="submit" class="btn btn-default col-md-2 col-md-offset-8">Entrar</button>
					</div>
				</form>    			
    		</div>
    	</div>
    </div>
@stop