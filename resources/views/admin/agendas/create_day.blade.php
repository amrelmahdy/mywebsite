@extends('layouts.admin.admin-master')

@section('title', 'Create Day')

@section('styles') 
   {!! Html::style('css/admin/form.css') !!}
@stop


@section('content')
     <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-12">
   	   	  	       <h1 class="text-center">{{ $agenda->title }} | Create Day</h1>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-md-6 col-md-offset-3">
			   <div class="panel panel-primary"> 
			     <div class="panel-body"> 
			       {!! Form::open(['route' => ['admin.agendas.storeeDay', $agenda->id]]) !!}
			          @include('admin.agendas.form_day', ['btn' => 'Add', 'classes' => 'btn-primary btn-xs btn-block'])
			       {!! Form::close() !!}
			     </div>
			   </div>
			</div>
	   </div>
	</div>
@stop

@section('scripts')
 
@stop