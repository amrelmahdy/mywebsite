@extends('layouts.admin.admin-master')

@section('title', 'Create Action')

@section('styles') 
   {!! Html::style('css/admin/form.css') !!}
@stop


@section('content')
     <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-12">
   	   	  	       <h1 class="text-center">{{ $day->date }} | Create Action</h1>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-md-6 col-md-offset-3">
			   <div class="panel panel-primary"> 
			     <div class="panel-body"> 
			       {!! Form::open(['route' => ['admin.agendas.storeAction', $day->id]]) !!}
			          @include('admin.agendas.form_action', ['btn' => 'Add', 'classes' => 'btn-primary btn-xs btn-block'])
			       {!! Form::close() !!}
			     </div>
			   </div>
			</div>
	   </div>
	</div>
@stop

@section('scripts')
 
@stop
