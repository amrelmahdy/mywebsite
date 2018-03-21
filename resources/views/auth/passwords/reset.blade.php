@extends('layouts.login')

@section('styles')
   @section('styles')
   {!! Html::style('css/admin/login.css') !!}
   <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
@stop
@stop

@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h1 class="text-center reset-email">Reset Password</h1>
                  </div> 
                  <div class="panel-body"> 
                    {!! Form::open(['url' => '/admin/password/reset', 'method' => 'POST', 'class' => 'form']) !!}
        
                        {{ Form::hidden('token', $token) }}
                 
                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', $email, ['class' => 'form-control', 'placeholder' => 'Your Email ']) }}

                        {{ Form::label('password', 'New Password') }}
                        {{ Form::password('password', ['class' => 'form-control']) }}

                        {{ Form::label('password_confirmation', 'Confirm Password') }}
                        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                        
                        {{ Form::submit('Reset Password', ['class' => 'btn btn-success']) }}
                    
                    {!! Form::close() !!}
                  </div>
                </div>
           </div>
        </div>
    </div>
@stop


