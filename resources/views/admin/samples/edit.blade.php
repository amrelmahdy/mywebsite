@extends('layouts.admin.admin-master')
@section('title', 'Edit Sample')
@section('styles')
   {!! Html::style('css/admin/form.css') !!}
   {!! Html::style('css/admin/slider.css') !!}
@stop

{{--
@section('extrascripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    {!! Html::script('js/admin/tinyMce.js') !!}
@stop

--}}

@section('content')
     <div class="page-content">
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-12">
   	   	  	       <h1 class="text-center">Edit Sample {{  $sample->project_name }}</h1>
   	   	  	    </div>
	   	  </div>
	   </div>


       <div class="row">
			<div class="col-md-6">
			   <div class="panel panel-primary">
			     <div class="panel-body">
			       {!! Form::model($sample, ['route' => ['samples.update', $sample->id], 'files' => true, 'method' => 'PATCH']) !!}
			          @include('admin.samples.form', ['btn' => 'Save', 'classes' => 'btn-primary btn-xs btn-block'])
			       {!! Form::close() !!}
			     </div>
			   </div>
			</div>


			<div class="sliders">
	   	  	 <div class="col-md-6 wrapper">
	              <div class="slider">
	  		   	  		<div class="slide text-center">
	  		   	  		    <img src="{{ asset('images/portfolio/' . $sample->image ) }}">
			   	  		</div>
	              </div>\
		   	 </div>

		   </div>

	

	   </div>

	</div>

@stop



@section('scripts')

 

@stop

