@extends('layouts.admin.admin-master')

@section('title', 'Create Event')

@section('styles')
   {!! Html::style('css/admin/events.css') !!}
   {!! Html::style('css/admin/select2.min.css') !!}
   {!! Html::style('css/admin/form.css') !!}
   
@stop

@section('extrascripts')
   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
	  tinymce.init({
		  selector: 'textarea',
		  height: 500,
		  theme: 'modern',
		  plugins: [
		    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		    'searchreplace wordcount visualblocks visualchars code fullscreen',
		    'insertdatetime media nonbreaking save table contextmenu directionality',
		    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
		  ],
		  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample styleselect fontselect fontsizeselect',
		  image_advtab: true,
		  templates: [
		    { title: 'Test template 1', content: 'Test 1' },
		    { title: 'Test template 2', content: 'Test 2' }
		  ],
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css'
		  ]
	 });
  </script>
@stop


@section('content')  
  <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-12">
   	   	  	       <h1>Add event</h1>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="stepwizard col-md-offset-3">
			    <div class="stepwizard-row setup-panel">
			      <div class="stepwizard-step">
			        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
			        <p>Event Information</p>
			      </div>
			      {{-- <div class="stepwizard-step">
			        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
			        <p>Galleries</p>
			      </div>
			      <div class="stepwizard-step">
			        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
			        <p>Agenda</p>
			      </div> --}}

			      <div class="stepwizard-step">
			        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
			        <p>Speakers</p>
			      </div>
                  
                  <div class="stepwizard-step">
			        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
			        <p>Sponsers</p>
			      </div>

			      <div class="stepwizard-step">
			        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
			        <p>Finish</p>
			      </div>

			    </div>
			  </div>
			  
			  {!! Form::open(['route' => 'admin.events.store', 'class' => 'form', 'novalidate' => 'novalidate']) !!}
  			     @include('admin.events.form', ['btn' => 'Add Event'])
			  {!! Form::close() !!}	  
		</div>
   </div>
@stop

@section('scripts')
    {!! Html::script('js/admin/events.js') !!}
    {!! Html::script('js/admin/select2.min.js') !!}
    <script>
    	$('.multiple-select').select2({
    		'placeholder' : 'Select Speakers'
    	});

    	$('.multiple-select-sponsers').select2({
    		'placeholder' : 'Select Sponsers'
    	});
    </script>
@stop
