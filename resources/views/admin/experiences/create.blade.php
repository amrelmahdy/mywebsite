@extends('layouts.admin.admin-master')

@section('title', 'Create Eperience')

@section('styles') 
   {!! Html::style('css/admin/form.css') !!}
@stop

@section('extrascripts')
   <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
	  tinymce.init({
		  selector: 'textarea',
		  height: 250,
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
   	   	  	       <h1 class="text-center">Create Experience</h1>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-md-8 col-md-offset-2">
			   <div class="panel panel-primary"> 
			     <div class="panel-body"> 
			       {!! Form::open(['route' => 'experiences.store',  'files' => true]) !!}
			          @include('admin.experiences.form', ['btn' => 'Add', 'classes' => 'btn-primary btn-xs btn-block'])
			       {!! Form::close() !!}
			     </div>
			   </div>
			</div>
	   </div>
	</div>
@stop

@section('scripts')
 
@stop