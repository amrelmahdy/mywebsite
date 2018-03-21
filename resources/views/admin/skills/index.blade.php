@extends('layouts.admin.admin-master')

@section('title', 'Experiences')

@section('styles')
@stop

@section('content')
	<div class="page-content">
		<div class="page-header">
			<div class="row">
				<div class="col-md-11">
					<h1>Skills</h1>
				</div>

				<div class="col-md-1">
					<a href="{{ route('skills.create') }}" class="btn btn-sm btn-primary">Add</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">

				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>

				@if(count($skills) > 0)
					<div class="table-responsive">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
							<tr>
								<th class="center">Skill</th>
								<th class="center">Percentage</th>
								<th class="center">Viewed</th>
								<th class="center">Control</th>
							</tr>
							</thead>

							<tbody>
							@foreach($skills as $skill)
								<tr>
									<td class="center">{{ $skill->skill }}</td>
									<td class="center">{{ $skill->percentage }}</td>
									<td class="center">{!! $skill->viewed  == true ? '<i class="fa fa-eye"></i>' : '<i class="fa fa-eye-slash"></i>' !!}</td>

									<td class="center">
										<div class="btn-group control-icon">
											<a href="{{ route('skills.edit', $skill->id) }} "><i class="ace-icon fa fa-pencil bigger-120  edit" data-id=""></i></a>
											<a href="#" data-toggle="modal" data-target="#modal-confirm{{ $skill->id }}"><i class="ace-icon fa fa-trash-o bigger-120  delete" data-id="{{ $skill->id }}"></i></a>
										</div>
									</td>
								</tr>

								<!-- Delete skill -->
								<div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm{{ $skill->id }}">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-body">
												<p>Are you sure you wnt tp delete skill<strong class="confirm-delete-item-name"> {{ $skill->skill }} ?</strong></p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												{{ Form::open(['route' => ['skills.destroy', $skill->id], 'method' => 'DELETE']) }}
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
					<div class="empty">There're no skills to show</div>
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
