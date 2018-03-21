@extends('layouts.admin.admin-master')

@section('title', "Edit $info->university_name")

@section('styles') 
   {!! Html::style('css/admin/form.css') !!}
   {!! Html::style('css/admin/edit-pages.css') !!}
@stop



@section('content')
     <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-12">
   	   	  	       <h1 class="text-center">Edit info : {{ $info->full_name }}</h1>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-md-8 col-md-offset-2">
			   <div class="panel panel-primary"> 
			     <div class="panel-body"> 
			       {!! Form::model($info, ['route' => 'profile.update', 'files' => true, 'method' => 'PATCH']) !!}
			          @include('admin.profile.form', ['btn' => 'save', 'classes' => 'btn-primary btn-xs btn-block'])
			       {!! Form::close() !!}
			     </div>
			   </div>
			</div>
	   </div>
	</div>
@stop

@section('scripts')
 
@stop