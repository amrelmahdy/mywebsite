@extends('layouts.admin.admin-master')

@section('title', 'Create ' . $category == 1 ? 'Image' : 'Video')

@section('styles') 
   {!! Html::style('css/admin/form.css') !!}
   {!! Html::style('css/admin/slider.css') !!}
@stop


@section('content')
     <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-12">
   	   	  	       <h1 class="text-center">Gallery : {{ $gallery->name }} | Edit  {{ $category == 1 ? 'Image' : 'Video' }}</h1>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
           
            <div class="col-md-6">
			   <div class="panel panel-primary"> 
			     <div class="panel-body"> 
			       {!! Form::model($item, ['route' => ['admin.galleries.updateItem', $gallery->id, $gallery->category_id == 1 ? 'image' : 'video', $item->id ], 'files' => true, 'method' => 'PATCH']) !!}
			          @include('admin.galleries.form', ['btn' => 'Save', 'classes' => 'btn-primary btn-xs btn-block'])
			       {!! Form::close() !!}
			     </div>
			   </div>
			</div>
			 @if($category == 1)
		      <div class="sliders">
		   	  	 <div class="col-md-6 wrapper">
		              <div class="slider">
		  		   	  		<div class="slide text-center">
		  		   	  		    <img src="{{ asset('images/admin/galleries/' . $item->source ) }}">
				   	  		</div>
		              </div>
			   	 </div>
			   </div>
			@else
	          <div class="col-md-6 nopadding">
		        <div class="embed-responsive embed-responsive-16by9">
		          <iframe width="560" height="315" src="//www.youtube.com/embed/{{ $item->source }}" allowfullscreen></iframe>
		        </div>
		      </div>
    
		    @endif
	   </div>
	</div>
@stop

@section('scripts')
 
@stop