@extends('layouts.admin.admin-master')

@section('title', 'Experiences')

@section('styles')
   
@stop

@section('content')  
    <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-11">
   	   	  	       <h1>Experiences</h1>
   	   	  	    </div>

   	   	  	    <div class="col-md-1">
   	   	  	       <a href="{{route('experiences.create') }}" class="btn btn-sm btn-primary">Add</a>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-xs-12">

				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
	            
	            @if(count($experiences) > 0)
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">Company Name</th>
									<th class="center">Job Title</th>
									<th class="center">Start Date</th>
									<th class="center">End Date</th>
									<th class="center">Current</th>
									<th class="center">Control</th>
								</tr>
							</thead>

							<tbody>
							    @foreach($experiences as $experience)
									<tr>
										<td class="center">{{ $experience->company_name }}</td>
										<td class="center">{{ $experience->job_title }}</td>
										<td class="center">{{ $experience->start_date }}</td>
										<td class="center">{{ $experience->end_date }}</td>
										<td class="center">{{ $experience->current  == true ? 'Current' : 'Former' }}</td>
								
										<td class="center">
								            <div class="btn-group control-icon">
												<a href="{{ route('experiences.edit', $experience->id) }} "><i class="ace-icon fa fa-pencil bigger-120  edit" data-id=""></i></a>
												@if(count($experiences) != 1)
													<a href="#" data-toggle="modal" data-target="#modal-confirm{{ $experience->id }}"><i class="ace-icon fa fa-trash-o bigger-120  delete"></i></a>

												@endif
										    </div>
										</td>
									</tr>

									<!-- Delete experience -->
					                 <div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm{{ $experience->id }}">
					                    <div class="modal-dialog" role="document">
					                      <div class="modal-content">
					                        <div class="modal-body">
					                          <p>Are you sure you wnt tp delete experience<strong class="confirm-delete-item-name"> {{ $experience->company_name }} ?</strong></p>
					                        </div>
					                        <div class="modal-footer">
					                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					                          {{ Form::open(['route' => ['experiences.destroy', $experience->id], 'method' => 'DELETE']) }}
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
                    <div class="empty">There're no experiences to show</div>
				@endif
			</div>
		</div>
    </div>

@stop

@section('scripts')

	{!! Html::script('js/admin/jquery.dataTables.min.js') !!}
	{!! Html::script('js/admin/jquery.dataTables.bootstrap.min.js') !!}
	{!! Html::script('js/admin/smart-tables.js') !!}

	
@stop
