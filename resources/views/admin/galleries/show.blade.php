@extends('layouts.admin.admin-master')

@section('title', $gallery->name)

@section('styles')
   {!! Html::style('css/admin/galleries.css') !!}
@stop


@section('content')  
    <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-11">
   	   	  	       <h1>
   	   	  	          {{ $gallery->name }}
					 </h1>
   	   	  	    </div>

   	   	  	    <div class="col-md-1">
   	   	  	       <a href="{{ route('admin.galleries.createItem', [$gallery->id, $gallery->category_id == 1 ? 'image' : 'video' ]) }}" class="btn btn-sm btn-primary">Add</a>
   	   	  	    </div>
	   	  </div>
	   </div>
       
       @if($category == 1)
		   <div class="row item-wrapper">
		      @if(count($gallery->items) > 0)
			      @foreach($gallery->items as $item)
					<div class="col-md-3 col-sm-4 col-xs-6 gallery-item item-div item{{ $item->id }}">
					   <div class="item">
						   <img class="img-responsive img-filter" src="{{ asset('images/admin/galleries/' . $item->source) }}" />
						   <div class="overlay">
	                         <div class="btn-group control-icon">
	                            <a href="{{ route('admin.galleries.editItem', [$gallery->id, $gallery->category_id == 1 ? 'image' : 'video', $item->id ]) }}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
	                            <a href=""><i class="ace-icon fa fa-trash bigger-120 delete"  data-gallery="{{ $gallery->id }}" data-item="{{ $item->id }}" data-name="{{ $item->title }}"></i></a>
	                         </div>
	  		   	  		   </div>
  		   	  		   </div>
					</div>
				  @endforeach
			  @else
			     <div class="empty">There are no images to show.</div> 
			  @endif
	     </div>
		@else
		   <div class="row item-wrapper"> 
		      @if(count($gallery->items) > 0)
				  @foreach($gallery->items as $item)
				      <div class="col-sm-3 nopadding item-div item{{ $item->id }}">
				        <div class="embed-responsive embed-responsive-16by9">
				          <iframe width="560" height="315" src="//www.youtube.com/embed/{{ $item->source }}" allowfullscreen></iframe>
				          <div class="overlay">
	                         <div class="btn-group control-icon">
	                            <a href="{{ route('admin.galleries.editItem', [$gallery->id, $gallery->category_id == 1 ? 'image' : 'video', $item->id ]) }}"><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
	                            <a href=""><i class="ace-icon fa fa-trash bigger-120 delete"  data-gallery="{{ $gallery->id }}" data-item="{{ $item->id }}" data-name="{{ $item->title }}"></i></a>
	                         </div>
	  		   	  		   </div>
				        </div>
				      </div>
			      @endforeach
		      @else
		        <div class="empty">There are no vides to show.</div>
		      @endif
		   </div> <!-- row -->
	    @endif		
    </div> <!-- page content -->
    @include('includes.admin.modal-confirm', ['msg' => 'Are you sure you want to delete '])
@stop

@section('scripts')
   <script type="text/javascript">
      $(document).ready(function(){
        var token = "{{ csrf_token() }}";
        var URL   = "{{ url('/') }}";
        jQuery.noConflict();
        $(document).on('click', '.delete', function(event){
          event.preventDefault();
          gallery_id = $(event.target).data('gallery');
          item_id    = $(event.target).data('item');
     /*     jQuery.noConflict();*/ 
          $('#modal-confirm').modal();
          $('.confirm-delete-item-name').text($(event.target).data('name') + ' ?!');
          $('#confirmed').attr('data-gallery', gallery_id);
          $('#confirmed').attr('data-item', item_id);    
         
        });


        $(document).on('click', '#confirmed', function(event){
           event.preventDefault();
           gallery_id = $(event.target).data('gallery');
           item_id    = $(event.target).data('item');
           /*jQuery.noConflict();*/
           $.ajax({
             type    : 'DELETE',
             url     : URL + '/admin/galleries/' + gallery_id + '/' + item_id,
             data    : { _token : token, gallery_id : gallery_id,  item_id : item_id },
             success : function(data){
              window.location.reload();
              /* console.log(JSON.stringify(data))
               $('#modal-confirm').modal('hide');
               $('.item' + item_id).remove();
               $('#flash-msg').fadeIn(500).text(data['msg']).delay(300).fadeOut(500);

               
               var count = $('.item-wrapper > .item-div').length;
               if(count == 0){
                  $('.item-wrapper').html('<div class="empty">There are no items to show</div>');
               }*/
             },
             error   : function(data){
                console.log('error');
             } 
           });
         });
      });
  </script>
    {!! Html::script('js/admin/jquery-2.1.4.min.js') !!}
	{!! Html::script('js/admin/jquery.dataTables.min.js') !!}
	{!! Html::script('js/admin/jquery.dataTables.bootstrap.min.js') !!}
	{!! Html::script('js/admin/smart-tables.js') !!}
@stop
