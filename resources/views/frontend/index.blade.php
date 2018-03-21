@extends('layouts.frontend.master')

@section('title', 'Homepage')

@section('styles')
   <link href="https://fonts.googleapis.com/css?family=Anton|Orbitron|Passion+One|Ravi+Prakash" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Changa+One|Paytone+One" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css?family=Changa+One|Paytone+One|Sintony" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
   {{ Html::style('css/frontend/parsley.css') }}
@stop





@section('head')
   <div class="head">
       <ul class="list-unstyled contact-info">
        @if( count($info) > 0)
          <li><i class="fa fa-mobile fa-fw"></i>+2{{ $info->mobile }}</li>
          <li><i class="fa fa-envelope fa-fw"></i> amrelmhdy@hotmail.com</li>
        @endif    
     </ul>


       @include('includes.frontend.navbar')
       <div class="overlay">
           <div class="container">
              <div class="row">
                  <div class="col-md-6 info">
                    <h1 class="name">AMR EL-MAHDY</h1>
                    <h2 class="job-title">PHP Web developer</h2>
                    <p>
                       Hello, I'm a <span>PHP Developer</span> Expert from Egypt. I love everything that makes our life easier.
                    </p>
                    @include('includes.frontend.social')
                </div>

                <div class="col-md-5 col-md-offset-1 new-project">
                    <div class="form">
                        <h2>Want to discuss a new project ? </h2>
                      {!! Form::open(['route' => 'postQoute', 'data-parsley-validate' => '']) !!}
                         <div class="form-group-lg">
                             {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your Name', 'required' => 'required']) }}
                         </div>
                           <div class="form-group-lg">
                             {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email', 'required' => 'required']) }}
                         </div>

                         <div class="form-group-lg">
                             {{ Form::select('type', ['Website' => 'Website', 'Web System' => 'Web System'], null, ['class' => 'form-control', 'placeholder' => 'Project Type', 'required' => 'required']) }}
                           </div>

                           <div class="form-group-lg">
                             {{ Form::textarea('project', null, ['class' => 'form-control', 'rows' => '2', 'placeholder' => 'Project Description', 'required' => 'required']) }}
                           </div>

                         {{ Form::submit('Send', ['class' => 'btn btn-primary btn-block btn-spec']) }}

                      {!! Form::close() !!}

                    </div>
                  </div>
              </div>
           </div> <!-- Container -->
       </div>
   </div>
@stop

<!-- Start page Content -->
@section('content')
    <!-- About -->
    <section class="about" id="about">

       <div class="container">
          <h1 class="line-under"><span class="orange">A</span><span class="brown">bout</span></h1>
          <div class="row">
              <div class="col-md-4 info-box">
                <div class="basic-info">
                  @if(count($info) > 0)
                    <span class="label">Name</span>
                    <p>{{ $info->full_name }}</p>
                    <hr>
                    <span class="label">Phone Number</span>

                    <p>+2{{ $info->mobile }}</p>
                    <hr>
                    <span class="label">Email</span>
                    <p>
                      @foreach($emails as $email)
                         {{ $email }}
                         <br>
                      @endforeach
                    </p>

                    <hr>
                    <span class="label">Address</span>
                    <p>{{ $info->address }}</p>
                  @endif
                </div>
              </div>  

              <div class="col-md-4 info-box">
                <div class="photo">
                  <img src="{{ asset('images/profile/' . $info->image) }}" alt="AMR">
                </div>
              </div>   

              <div class="col-md-4 info-box">
                <div class="skills">
                  @foreach($skills as $skill)
                    @if($skill->viewed == true)
                      <div class="skill">
                        <h6>
                          <b>{{ $skill->skill }}</b>
                          <b class="pull-right">{{ $skill->percentage }}%</b>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->percentage  }}%"></div>
                          </div>
                        </h6>
                      </div>
                    @endif
                  @endforeach
                </div>
              </div>             
          </div>
       </div>
   </section>

   <!-- About -->  



   <!-- Statistics --> 

   <section class="statistics" id="statistics">

       <div class="container">
          <div class="row">
              @if(count($info) > 0)
                <div class="col-md-3">
                       <div class="stat">
                         <i class="fa fa-archive fa-5x"></i>
                          <span>{{ $info->projects_done }}</span>
                          <p>Projects Done</p>
                     </div> 
                </div>


                <div class="col-md-3">
                      <div class="stat">
                         <i class="fa fa-smile-o fa-5x"></i>
                          <span>{{ $info->happy_clients }}</span>
                          <p>Happy Clients</p>
                       </div>
                </div>

                <div class="col-md-3">
                      <div class="stat">
                         <i class="fa fa-bars fa-5x"></i>
                          <span>{{ $info->experience_years }}</span>
                          <p>Years Of Experience</p>
                       </div>
                </div>

                <div class="col-md-3">
                      <div class="stat">
                         <i class="fa fa-flag fa-5x"></i>
                          <span>{{ $info->countries_served }}</span>
                          <p>Country Served</p>
                      </div>
                </div>
              @endif
          </div>
       </div>
   </section>

   <!-- Statistics --> 





   <!-- Services --> 

   <section class="services" id="services">
      <div class="container">
        <h1 class="line-under"><span class="orange">S</span/><span class="brown">ervices</span></h1>
        <div class="row">

          <div class="col-md-4">
            <div class="service">
                <i class="fa fa-code fa-5x"></i>
              <h3>Web Devlopment</h3>
              <p>Create a professional website and get your business online, build an effective, responsive and dynamic website.</p>
            </div>
          </div>
          <div class="col-md-4">
              <div class="service">
                  <i class="fa fa-briefcase fa-5x"></i>
                  <h3>Web Applications</h3>
                  <p>Web Applications are crafted and developed professionally to meet needs identified in your organization.</p>
              </div>
          </div>

          <div class="col-md-4">
            <div class="service">
                <i class="fa fa-apple fa-5x"></i>
              <h3>Mobile Application</h3>
              <p>We develop customized mobile applications that are tailored professionally to your business both Android and IOS</p>
            </div>
          </div>
        </div>
      </div>
   </section>

   <!-- Services --> 



   <!-- Portfolio --> 

   <section class="portfolio" id="portfolio">
       <div class="container">
         <h1 class="line-under"><span class="orange">P</span><span class="brown">ortfolio</span></h1>
         <div class="row">
             <div class="col-md-12">
             <ul class="list-unstyled pull-right filter-list">
               <li class="active filter" data-filter="all">All</li>
               @foreach($categories as $category)
                 <li class="filter" data-filter=".{{ $category->filter_name }}">{{ $category->category}}</li>        
               @endforeach
             </ul>
           </div>
         </div>

         <div id="portfolio" class="row">
           @foreach($samples as $sample)
               {{--{{ dd($samples)  }}--}}
           <div class="mix {{ $sample->category->filter_name }} col-md-4">
              <div class="project-image">
                <div class="overlay">
                  <div class="overlay-header"></div>
                  <strong>{{ $sample->project_name }}</strong>
                  <p>{{ $sample->description }}</p>
                  <a href="{{ $sample->link }}" target="_blank" class="btn btn-primary">View site</a>
                </div>
                <img src="{{ asset('images/portfolio/' . $sample->image ) }}" alt="">
              </div>
           </div>
           @endforeach
         </div>
       </div>

   </section>

   <!-- Portfolio -->



   <!-- Resume --> 

   <section class="resume" id="resume">

       <div class="container">
         <h1 class="line-under"><span class="orange">R</span><span class="brown">esume</span></h1>

         <div class="row">
          <div class="col-md-6">
              <h3>Experience</h3>
              @for($i=0 ; $i<count($experiences) ; $i++)
                <div class="experience">
                    <strong class="number">{{ ($i+1) < 10 ? '0' . ($i+1) : $i }}</strong>
                    <span class="company-name">{{ $experiences[$i]['company_name'] }}</span>
                    <span class="job-title">
                      {{ $experiences[$i]['job_title'] }} 
                      <strong>From : {{ $experiences[$i]['start_date'] }} To : {{ $experiences[$i]['current'] == true ? 'Current' : $experiences[$i]['end_date'] }}</strong>
                    </span>
                    <p>{!! $experiences[$i]['description'] !!}</p>
                </div>
              @endfor
              <a href="{{ url('documents/resume/' . $info->resume ) }}" download="" class="btn btn-download"><i class="fa fa-download"></i> Download</a>
          </div>

          <div class="col-md-6">
              <h3>Education</h3>
              @for($i=0 ; $i<count($educations) ; $i++)
                <div class="education">
                    <strong class="number">{{ ($i+1) < 10 ? '0' . ($i+1) : $i }}</strong>
                    <span class="company-name">{{ $educations[$i]['university_name'] }}</span>
                    <span class="job-title">{{ $educations[$i]['faculty_name'] }}<strong> From : {{ $educations[$i]['start_date'] }} To : {{ $educations[$i]['end_date'] }}</strong></span>
                    <p>{!!  $educations[$i]['description']  !!}</p>
                </div>
                @endfor
          </div>
         </div>
       </div>
   </section>

   <!-- Resume --> 



   <!-- Contact --> 
   <section class="contact" id="contact">
       <div class="container">
         <h1 class="line-under"><span class="orange">C</span><span class="brown">ontact</span></h1>
          <div class="row">
              <div class="col-md-6">
                 <div id="map" class="thumbnail" style="width:100%;height:500px">
                     {!!  $info->map_pin !!}
                 </div>
              </div>

               <div class="col-md-6">
                <div class="contact-me-on">
                  <h3>Contact me</h3>
                  <p>
                     I look forward to working with you, contact me and get you website done quickly and professionally, thanks fro you trust.
                  </p>
                  <hr>
                    @if(count($info) > 0)
                      <span><i style="margin-right: 10px" class="fa fa-envelope fa-lg"></i> {{ explode('/', $info->email)[0] }}
                      <hr>
                      <span><i style="margin-right: 10px" class="fa fa-phone fa-lg"></i> +2{{ $info->mobile }}</span>
                      <hr style="margin-bottom: 22px;">
                    @endif
                    @include('includes.frontend.social')
                   <div class="clearfix"></div>
                </div>
              </div>
          </div>
       </div>
   </section>

   <!-- Contact --> 

@stop

@section('scripts')
    {{ Html::script('js/frontend/parsley.js') }}
@stop