@extends('layouts.admin.admin-master')

@section('title', 'Events')

@section('styles')
   {!! Html::style('css/admin/events.css') !!}
@stop

@section('content')  
    <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-11">
   	   	  	       <h1>Events</h1>
   	   	  	    </div>

   	   	  	    <div class="col-md-1">
   	   	  	       <a href="{{ route('admin.events.create') }}" class="btn btn-sm btn-primary">Add</a>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-xs-12">

				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
	            
	            @if(count($events) > 0)
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">Title</th>
									<th class="center">Event date</th>
									<th class="center">Early End</th>
									<th class="center">Early Price</th>
									<th class="center">Late Price</th>
									<th class="center">Control</th>
								</tr>
							</thead>

							<tbody>
							    @foreach($events as $event)
									<tr>
										<td class="center">{{ $event->title }}</td>
										<td class="center">{{ $event->event_date }}</td>
										<td class="center">{{ $event->early_end }}</td>
										<td class="center">{{ $event->early_price . $event->currency}}</td>
										<td class="center">{{ $event->late_price . $event->currency}}</td>
									
										<td class="center">
								            <div class="btn-group control-icon">
												<a href="{{ route('admin.events.show', $event->id) }} "><i class="ace-icon fa fa-eye bigger-120  edit" data-id=""></i></a>
												@if($event->is_current == false)
													<a href="#"><i class="ace-icon fa fa-trash-o bigger-120  delete" data-id="{{ $event->id }}" data-item="{{ $event->title }}"></i></a>
													{{-- <a href="#"><i class="ace-icon fa fa-arrow-right more" data-id=""></i></a>		 	 --}}
												@endif
										    </div>
										</td>
									</tr>
									 <!-- Delete events -->
					                 <div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm{{ $event->id }}">
					                    <div class="modal-dialog" role="document">
					                      <div class="modal-content">
					                        <div class="modal-body">
					                          <p>Are you sure you wnt tp delete event <strong class="confirm-delete-item-name">{{ $event->title }} ?</strong></p>
					                        </div>
					                        <div class="modal-footer">
					                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					                          {{ Form::open(['route' => ['admin.events.destroy', $event->id], 'method' => 'DELETE']) }}
					                             <input type="submit" class="btn btn-primary" id="confirmed" value="yes">
					                          {{ Form::close() }}
					                        </div>
					                      </div><!-- /.modal-content -->
					                    </div><!-- /.modal-dialog -->
					               </div><!-- /.modal -->
								@endforeach
							</tbody>
						</table>
					</div>
				@else 
                    <div class="empty">There is no events to show</div>
				@endif
			</div>
		</div>
    </div>

    @include('includes.admin.modal-confirm', ['msg' => 'Are you sure you want to delete event : '])

@stop

@section('scripts')
   <script type="text/javascript">
      $(document).ready(function(){
          var URL   = "{{ url('/') }}";
        $(document).on('click', '.delete', function(event){
          id = $(event.target).data('id');
          event.preventDefault();
          $('#modal-confirm' + id).modal();
        });
      });
  </script>
@stop