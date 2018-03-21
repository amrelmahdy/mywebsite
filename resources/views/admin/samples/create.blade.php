@extends('layouts.admin.admin-master')
@section('title', 'Create Sample')
@section('styles')
   {!! Html::style('css/admin/form.css') !!}
@stop
{{--@section('extrascripts')
   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
   {!! Html::script('js/admin/tinyMce.js') !!}
@stop--}}


@section('content')
     <div class="page-content">
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-12">
   	   	  	       <h1 class="text-center">Create Sample</h1>
   	   	  	    </div>
	   	  </div>
	   </div>



       <div class="row">
			<div class="col-md-6 col-md-offset-3">
			   <div class="panel panel-primary">
			     <div class="panel-body">
			       {!! Form::open(['route' => 'samples.store', 'files' => true]) !!}
			          @include('admin.samples.form', ['btn' => 'Add', 'classes' => 'btn-primary btn-xs btn-block'])
			       {!! Form::close() !!}
			     </div>
			   </div>
			</div>
	   </div>
	</div>
@stop



@section('scripts')

 

@stop

