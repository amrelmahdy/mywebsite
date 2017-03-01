@extends('layouts.admin.admin-master')

@section('title', 'Galleries')

@section('styles')
   {!! Html::style('css/admin/events.css') !!}
@stop

<!-- Event Galleries -->

@section('content')  
    <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-12">
   	   	  	       <h1>
   	   	  	          Event Galleries
   	   	  	          <small>
					 	 <i class="ace-icon fa fa-angle-double-right"></i>
					     News Galleries
					  </small>
					 </h1>
   	   	  	    </div>
	   	  </div>
	   </div>
       
       

	   <div class="row">
			<div class="col-xs-12">

	            @if(count($event_galleries) > 0)
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
								    <th class="center">Event</th>
								    <th class="center"><Name</th>
									<th class="center">Type</th>
									<th class="center">Category</th>
								</tr>
							</thead>

							<tbody>
							    @foreach($event_galleries as $gallery)
									<tr>
									    <td class="center">
									      {{ $gallery->category_id == 1 ?  $gallery->image_gallery_event->title : $gallery->video_gallery_event->title }} 
									    </td>
									    <td class="center"><a href="{{ route('admin.galleries.show', [$gallery->id, $gallery->category_id == 1 ? 'image' : 'video' ]) }}">{{ $gallery->name  }}</a></td>
									    <td class="center">{{ $gallery->type->type  }}</td>
									    <td class="center">{{ $gallery->category->category }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				@else 
                    <div class="empty">There are no galleries to show.</div>
				@endif
			</div>
		</div>
        
       <!-- News Galleries -->
       
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-11">
   	   	  	       <h1 style="margin-top: 50px!important">News Galleries</h1>
   	   	  	    </div>
	   	  </div>
	   </div>
   
	   <div class="row">
			<div class="col-xs-12">

				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
	            @if(count($news_galleries) > 0)
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
								    <th class="center">Name</th>
								    <th class="center">Category</th>
									<th class="center">Type</th>
								</tr>
							</thead>

							<tbody>
							    @foreach($news_galleries as $gallery)
									<tr>
									    <td class="center"><a href="{{ route('admin.galleries.show', [$gallery->id, $gallery->category_id == 1 ? 'image' : 'video' ]) }}">{{ $gallery->name  }}</a></a></td>
									    <td class="center">{{ $gallery->category->category }}</td>
									    <td class="center">{{ $gallery->type->type }}</td>
									
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				@else 
                    <div class="empty">There are no galleries to show</div>
				@endif
			</div>
		</div>


		
    </div>

@stop

@section('scripts')
   {{--  <script>
		var token = "{{ csrf_token() }}";
		var URL   = "{{ url('/') }}";

		$('.delete').on('click', function(event){
			event.preventDefault();
			id = $(event.target).data('id');

			/*console.log(id);*/

			$.ajax({
				type    : 'DELETE',
				url     : URL + '/admin/branches/' + id,
				data    : { _token : token, id : id },
				success : function(data){
					window.location.reload();
				},
				error   : function(data){
                    console.log('error');
				} 
			});
		});
	</script> --}}
    {!! Html::script('js/admin/jquery-2.1.4.min.js') !!}
	{!! Html::script('js/admin/jquery.dataTables.min.js') !!}
	{!! Html::script('js/admin/jquery.dataTables.bootstrap.min.js') !!}
	{!! Html::script('js/admin/smart-tables.js') !!}
@stop
