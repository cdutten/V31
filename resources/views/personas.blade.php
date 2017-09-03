@extends('layouts.app')

<!-- Css -->
@section('custom_css')
	<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"> -->

	<style type="text/css"> 
	tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div class="panel panel-default">
  				<div class="panel-body">
					<table class="table" id="personas" cellspacing="0" width="100%">
						
					<input class="form-control mr-sm-2" id="searchTerm" type="text" placeholder="Buscar" aria-label="Buscar" onkeyup="search()">

				        <thead>
				            <tr>
				                <th>Nombre</th>
				                <th>Dni</th>
				                <th>Edad</th>
				                <th>Trabajo</th>
				                <th>Problema</th>
				            </tr>
				        </thead>
						
				        <tbody>
				            
							@foreach ($personas as $persona)
							<tr>
				                <td>{{ $persona->nombre }}</td>
				                <td>{{ $persona->dni }}</td>
				                <td>{{ $persona->edad}}</td>
				                <td>{{ $persona->trabajo }}</td>
				                <td>{{ $persona->descripcionProblema}}</td>
				            </tr>
							@endforeach
				            
				        </tbody>
				    </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Javascripts -->
@section('custom_js') 
	<script src="{{ asset('js/persona.js') }}"></script>
@endsection