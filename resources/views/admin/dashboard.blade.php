@extends('layouts.admin.admin-master')

@section('title', 'Dashboard')

@section('styles')
  {!! Html::style('css/admin/dashboard.css') !!}
@stop

@section('content')
  {{-- {!! Breadcrumbs::render('dashboard') !!} --}}
  <div class="page-content">
      <div class="page-header">
	     <h1 class="text-center">Dashboard</h1>
	  </div>

	  {{-- <div class="row">

		<div class="space-6"></div>

		<div class="col-md-12  infobox-container">
			<div class="infobox infobox-green">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-globe"></i>
				</div>

				<div class="infobox-data">
					<span class="infobox-data-number"></span>
					<div class="infobox-content">Total Events</div>
				</div>
			</div>

			<div class="infobox infobox-blue">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-flag-checkered"></i>
				</div>

				<div class="infobox-data">
					<span class="infobox-data-number"></span>
					<div class="infobox-content">Total Speakers</div>
				</div>
			</div>

			<div class="infobox infobox-pink">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-sitemap"></i>
				</div>

				<div class="infobox-data">
					<span class="infobox-data-number"></span>
					<div class="infobox-content">Total Sponsers</div>
				</div>
			</div>

			

			<div class="infobox infobox-orange2">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-building"></i>
				</div>

				<div class="infobox-data">
					<span class="infobox-data-number"></span>
					<div class="infobox-content">Total Pages</div>
				</div>
			</div>


			<div class="space-6"></div>

			<div class="infobox infobox-green infobox-large infobox-dark">
			    <div class="infobox-icon">
					<i class="ace-icon fa fa-shopping-cart"></i>
				</div>

				<div class="infobox-data">
					<div class="infobox-content">Manage Events</div>
					<div class="infobox-content"><a href="" ><i class="fa fa-sliders"></i> Manage</a></div>
				</div>
			</div>

			<div class="infobox infobox-blue infobox-large infobox-dark">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-sitemap"></i>
				</div>

				<div class="infobox-data">
					<div class="infobox-content">Manage Speakers</div>
					<div class="infobox-content"><a href="{{ url('admin/speakers') }}" ><i class="fa fa-sliders"></i> Manage</a></div>
				</div>
			</div>

			<div class="infobox infobox-grey infobox-large infobox-dark">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-file fa-lg"></i>
				</div>

				<div class="infobox-data">
					<div class="infobox-content">Manage Sponsres</div>
					<div class="infobox-content"><a href="{{ url('admin/sponsers') }}" ><i class="fa fa-sliders"></i> Manage</a></div>
				</div>
			</div>
		</div>
	  </div> --}}
  </div>
@stop

