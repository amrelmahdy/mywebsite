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
   	   	  	       <h1>Events Agendas</h1>
   	   	  	    </div>
{{-- 
   	   	  	    <div class="col-md-1">
   	   	  	       <a href="" class="btn btn-sm btn-primary">Add</a>
   	   	  	    </div> --}}
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-xs-12">

				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
	            
	            @if(count($agendas) > 0)
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">Event Title</th>
									<th class="center">Agenda Title</th>
									<th class="center">Days (count)</th>
								</tr>
							</thead>

							<tbody>
							    @foreach($agendas as $agenda)
									<tr>
										<td class="center">{{ $agenda->event->title }}</td>
										<td class="center">{{ $agenda->title }}</td>
										<td class="center"><a href="{{ route('admin.agendas.days', $agenda->id) }}">{{ $agenda->days->count() }}</a></td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				@else 
                    <div class="empty">There is no agendas to show</div>
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
