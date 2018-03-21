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
                <div class="panel panel-default email-reset-form">
                  <div class="panel-heading">
                    <h1 class="text-center reset-email">Forgot Password</h1>
                  </div> 
                  <div class="panel-body"> 
                    {!! Form::open(['url' => '/admin/password/email', 'method' => 'POST', 'class' => 'form']) !!}

                        {{ Form::label('email', 'Email') }}
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email ']) }}
                        
                        {{ Form::submit('Send Confirmation Email', ['class' => 'btn btn-primary']) }}
                    
                    {!! Form::close() !!}
                  </div>
                </div>
           </div>
        </div>
    </div>
@stop


