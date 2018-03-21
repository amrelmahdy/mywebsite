@extends('layouts.admin.admin-master')

@section('title', 'Educations')

@section('styles')
   
@stop

@section('content')  
    <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-11">
   	   	  	       <h1>Educations</h1>
   	   	  	    </div>

   	   	  	    <div class="col-md-1">
   	   	  	       <a href="{{ route('educations.create') }}" class="btn btn-sm btn-primary">Add</a>
   	   	  	    </div>
	   	  </div>
	   </div>

       <div class="row">
			<div class="col-xs-12">

				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
	            
	            @if(count($educations) > 0)
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">University</th>
									<th class="center">Faculty</th>
									<th class="center">Start</th>
									<th class="center">End</th>
									<th class="center">Control</th>
								</tr>
							</thead>

							<tbody>
							    @foreach($educations as $education)
									<tr>
										<td class="center">{{ $education->university_name }}</td>
										<td class="center">{{ $education->faculty_name }}</td>
										<td class="center">{{ $education->start_date }}</td>
								        <td class="center">{{ $education->end_date }}</td>
										<td class="center">
								            <div class="btn-group control-icon">
												<a href="{{ route('educations.edit', $education->id) }} "><i class="ace-icon fa fa-pencil bigger-120  edit" data-id=""></i></a>
												<a href="#" data-toggle="modal" data-target="#modal-confirm{{ $education->id }}"><i class="ace-icon fa fa-trash-o bigger-120  delete"></i></a>
												
										    </div>
										</td>
									</tr>

									<!-- Delete education -->
					                 <div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm{{ $education->id }}">
					                    <div class="modal-dialog" role="document">
					                      <div class="modal-content">
					                        <div class="modal-body">
					                          <p>Are you sure you want delete <strong class="confirm-delete-item-name"> {{ $education->university_name }}?</strong></p>
					                        </div>
					                        <div class="modal-footer">
					                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					                          {{ Form::open(['route' => ['educations.destroy', $education->id], 'method' => 'DELETE']) }}
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
                    <div class="empty">There're no educations to show</div>
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