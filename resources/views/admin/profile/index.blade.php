@extends('layouts.admin.admin-master')

@section('title', 'My profile')

@section('styles')
   {!! Html::style('css/admin/events.css') !!}
@stop

@section('content')  
<div class="page-content"> 
	<div class="page-header">
	   <div class="row">
		   <div class="col-md-11">
		      <h1>My Profile</h1>
		   </div>
	       <div class="col-md-1">
	       	   <a href="{{ route('profile.edit') }}" class="btn btn-xs btn-primary">Edit</a>
	       </div>
	   </div>
	</div><!-- /.page-header -->


	  	<div id="user-profile-1" class="user-profile row">
			<div class="col-xs-12 col-sm-3 center">
				<div>
					<div class="profile-picture">
						<img id="avatar" class="editable img-responsive" alt="Amr's Avatar" src="{{ asset('images/profile/' . $info->image) }}" />
					</div>

					<div class="space-4"></div>

					<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
						<div class="inline position-relative">
							<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
								<span class="white">{{ $info->full_name }}</span>
							</a>

						</div>
					</div>
				</div>

				<div class="space-6"></div>

			</div>

			<div class="col-xs-12 col-sm-9">
{{-- 			

				<div class="space-12"></div>
 --}}
				<div class="profile-user-info profile-user-info-striped">
					<div class="profile-info-row">
						<div class="profile-info-name">Name</div>

						<div class="profile-info-value">
							<span class="editable" id="username">{{ $info->full_name }}</span>
						</div>
					</div>


					<div class="profile-info-row">
						<div class="profile-info-name"> email </div>

						<div class="profile-info-value">
							<span class="editable" id="username">{{ $info->email }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Mobile </div>

						<div class="profile-info-value">
							<span class="editable" id="city">{!! $info->address !!}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Projects Done </div>

						<div class="profile-info-value">
							<span class="editable" id="age">{{ $info->projects_done }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Happy Clients </div>

						<div class="profile-info-value">
							<span class="editable" id="signup">{{ $info->happy_clients }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name">Experience</div>

						<div class="profile-info-value">
							<span class="editable" id="login">{{ $info->experience_years }} Year(s)</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name">Country Served</div>

						<div class="profile-info-value">
							<span class="editable" id="login">{{ $info->countries_served }}</span>
						</div>
					</div>


					<div class="profile-info-row">
						<div class="profile-info-name">Short Bio</div>

						<div class="profile-info-value">
							<span class="editable" id="login">{!! $info->short_bio !!}</span>
						</div>
					</div>


					<div class="profile-info-row">
						<div class="profile-info-name">Resume</div>

						<div class="profile-info-value">
							<span class="editable" id="login"><a href="{{ url('documents/resume/'. $info->resume ) }}" class="btn btn-success btn-xs">View <i class="fa fa-download"></i></a></span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name">Facebook</div>

						<div class="profile-info-value">
							<span class="editable label label-info" id="login"><a href="#">{{  $info->facebook }}</a> </span>
						</div>
					</div>


					<div class="profile-info-row">
						<div class="profile-info-name">Twitter</div>

						<div class="profile-info-value">
							<span class="editable label label-info" id="login"><a href="#">{{  $info->twitter }}</a> </span>
						</div>
					</div>




					<div class="profile-info-row">
						<div class="profile-info-name">Linkedin</div>

						<div class="profile-info-value">
							<span class="editable label label-info" id="login"><a href="#">{{  $info->linkedin }}</a> </span>
						</div>
					</div>


					<div class="profile-info-row">
						<div class="profile-info-name">Instagram</div>

						<div class="profile-info-value">
							<span class="editable label label-info" id="login"><a href="#">{{  $info->instagram }}</a> </span>
						</div>
					</div>


					<div class="profile-info-row">
						<div class="profile-info-name">Google + </div>

						<div class="profile-info-value">
							<span class="editable label label-info" id="login"><a href="#">{{  $info->google }}</a> </span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name">Github</div>

						<div class="profile-info-value">
							<span class="editable label label-info" id="login"><a href="#">{{  $info->github }}</a> </span>
						</div>
					</div>


					<div class="profile-info-row">
						<div class="profile-info-name">Bitbucket</div>

						<div class="profile-info-value">
							<span class="editable label label-info" id="login"><a href="#">{{  $info->bitbucket }}</a> </span>
						</div>
					</div>

				</div>

				<div class="space-20"></div>

			</div>
		</div>
	</div>
@stop