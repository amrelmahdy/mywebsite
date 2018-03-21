@extends('layouts.admin.admin-master')

@section('title', 'Edit a skill')

@section('styles')
	{!! Html::style('css/admin/form.css') !!}
@stop


@section('content')
	<div class="page-content">
		<div class="page-header">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">Edit a skill : {{ $skill->skill }}</h1>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
					<div class="panel-body">
						{!! Form::model($skill, ['route' => ['skills.update', $skill->id], 'method' => 'PATCH']) !!}
					       @include('admin.skills.form', ['btn' => 'Save', 'classes' => 'btn-primary btn-xs btn-block'])
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')

@stop