@extends('layouts.admin.admin-master')

@section('title', $agenda->title . 'days')

@section('styles')
   {!! Html::style('css/admin/events.css') !!}
@stop

@section('content')  
    <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-11">
   	   	  	       <h1>Agenda : {{ $agenda->title }} | days</h1>
   	   	  	    </div>

   	   	  	    <div class="col-md-1">
   	   	  	       <a href="{{ route('admin.agendas.createDay', $agenda->id) }}" class="btn btn-sm btn-primary">Add</a>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-xs-12">

				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
	            @if($days->count() > 0)
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
								    <th class="center">Event</th>
								    <th class="center">Agenda</th>
									<th class="center">Date</th>
									<th class="center">Actions (count)</th>
									<th class="center">Control</th>
								</tr>
							</thead>

							<tbody>
							    @foreach($days as $day)
									<tr>
									    <td class="center">{{ $day->agenda->event->title }}</td>
									    <td class="center">{{ $day->agenda->title }}</td>
										<td class="center">{{ $day->date }}</td>
										<td class="center"><a href="{{ route('admin.agendas.actions', $day->id) }}">{{ $day->actions->count() }}</a></td>
										<td class="center">
								            <div class="btn-group control-icon">
												<a href="{{ route('admin.agendas.editDay', [ $agenda->id, $day->id ]) }} "><i class="ace-icon fa fa-pencil bigger-120  edit" data-id=""></i></a>
												<a href="#"><i class="ace-icon fa fa-trash-o bigger-120  delete" data-id="{{ $day->id  }}"></i></a>
										    </div>
										</td>
									</tr>

									<!-- Delete days -->
					                 <div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm{{ $day->id }}">
					                    <div class="modal-dialog" role="document">
					                      <div class="modal-content">
					                        <div class="modal-body">
					                          <p>Are you sure you wnt tp delete {{ $day->date }}<strong class="confirm-delete-item-name"> ?</strong></p>
					                        </div>
					                        <div class="modal-footer">
					                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					                          {{ Form::open(['route' => ['admin.agendas.destroyDay', $day->id], 'method' => 'DELETE']) }}
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
                    <div class="empty">There is days no assigned to this agenda</div>
				@endif
			</div>
		</div>
    </div>

@stop


@section('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
          var URL   = "{{ url('/') }}";
        $(document).on('click', '.delete', function(event){
          event.preventDefault();
          id = $(event.target).data('id');
          jQuery.noConflict(); 
          $('#modal-confirm' + id).modal();
        });
      });
    </script>
    {!! Html::script('js/admin/jquery-2.1.4.min.js') !!}
	{!! Html::script('js/admin/jquery.dataTables.min.js') !!}
	{!! Html::script('js/admin/jquery.dataTables.bootstrap.min.js') !!}
	{!! Html::script('js/admin/smart-tables.js') !!}

	
@stop
