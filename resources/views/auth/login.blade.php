@extends('layouts.login.login-page-layout')


@section('content')
  {{--  @include('includes.login-infobox') --}}
   <div class="dev-page-login-block">
	    <div class="dev-page-login-block__form">
	        <div class="logo">
	       	  <img src="{{ asset('images/frontend/logo/logo_footer.png') }}" style="height: 85px;width: 65%;" alt="logo" />
	        </div>
	        {!! Form::open(['route' => 'adminPostLogin']) !!}                        
	            <div class="form-group">
	                <div class="input-group  {!! $errors->has('email') ? 'white-border' : '' !!}">
	                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
	                    {{-- <input type="text" class="form-control" placeholder="Login"> --}}
	                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
	                </div>
	            </div>                        
	            <div class="form-group">
	                <div class="input-group {!! $errors->has('password') ? 'white-border' : '' !!}">
	                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
	                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
	                </div>
	            </div>
	            <div class="form-group no-border margin-top-20">
	                <button class="btn btn-default btn-block">Login</button>
	            </div>
	           {{--  <p class="text-center"><a href="{{ url('/admin/password/reset') }}">Forgot Password?</a></p> --}}                        
	        {!! Form::close() !!}
	    </div>
	    <div class="dev-page-login-block__footer">
	        &copy; <strong> Developed by Fekrety Online Integrated Solutions.</strong>
	    </div>
	</div>
@stop