@extends('layouts.admin.admin-master')

@section('title', $event->title)

@section('styles')
   {!! Html::style('css/admin/events.css') !!}
   <style type="text/css">
      #map {
        width: 100% !important;
        height: 200px !important;
        background-color: grey;
      }
   </style>
@stop


@section('content')  
    <div class="page-content"> 
       <div class="page-header">
	      <div class="row">
   	   	  	    <div class="col-md-11">
   	   	  	       <h1>{{ $event->title }}</h1>
   	   	  	    </div>

   	   	  	    <div class="col-md-1">
   	   	  	       <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-primary btn-sm">Edit</a>
   	   	  	    </div>
	   	  </div>
	   </div>

      <div class="row">

          <div class="col-md-12">
          	 <div id="map"></div>
          </div>
	   	   
         <div class="col-md-12">
             <div class="table-details">
                 <div class="profile-user-info profile-user-info-striped">
                   <div class="profile-info-row">
                      <div class="profile-info-name">Title</div>
                      <div class="profile-info-value">
                        <span>{{ $event->title }}</span>
                      </div>
                    </div>

                    <div class="profile-info-row">
                      <div class="profile-info-name">Location description</div>

                      <div class="profile-info-value">
                        <span>{!! $event->location_description !!}</span>
                      </div>
                    </div>

                    <div class="profile-info-row">
                      <div class="profile-info-name">Event date</div>

                      <div class="profile-info-value">
                        <span>{{ $event->event_date }}</span>
                      </div>
                    </div>


                    <div class="profile-info-row">
                      <div class="profile-info-name">Early End</div>

                      <div class="profile-info-value">
                        <span>{{ $event->early_end }}</span>
                      </div>
                    </div>

                    <div class="profile-info-row">
                      <div class="profile-info-name">Early price</div>

                      <div class="profile-info-value">
                        <span>{{ $event->early_price . $event->currency }}</span>
                      </div>
                    </div>

                    <div class="profile-info-row">
                      <div class="profile-info-name">Late price</div>

                      <div class="profile-info-value">
                        <span>{{ $event->late_price . $event->currency }}</span>
                      </div>
                    </div>

                    <div class="profile-info-row">
                      <div class="profile-info-name">Early Description</div>

                      <div class="profile-info-value">
                        <span>{!! $event->early_description !!}</span>
                      </div>
                    </div>

                    <div class="profile-info-row">
                      <div class="profile-info-name">Late Description</div>

                      <div class="profile-info-value">
                        <span>{!! $event->late_description !!}</span>
                      </div>
                    </div>
                    
                    <div class="profile-info-row">
                      <div class="profile-info-name">Speakers</div>

                      <div class="profile-info-value">
                        @foreach($event->speakers as $speaker)
                           <span class="label label-info">{{ $speaker->name }}</span>
                        @endforeach
                      </div>
                    </div>

                     <div class="profile-info-row">
                      <div class="profile-info-name">Sponsers</div>

                      <div class="profile-info-value">
                        @foreach($event->sponsers as $sponser)
                           <span class="label label-info">{{ $sponser->name }}</span>
                        @endforeach
                      </div>
                    </div>



                    <div class="profile-info-row">
                      <div class="profile-info-name">Galleries</div>

                      <div class="profile-info-value">
                        <span><a class="btn btn-xs btn-primary" href="{{ route('admin.galleries.show', [$event->image_gallery_id, 'image']) }}">Image Gallery</a></span>

                        <span><a class="btn btn-xs btn-primary" href="{{ route('admin.galleries.show', [$event->video_gallery_id, 'video']) }}">Video Gallery</a></span>

                        <span><a class="btn btn-xs btn-primary" href="{{ route('admin.galleries.show', [$event->coverage_image_gallery_id, 'image']) }}">Coverage Image Gallery</a></span>

                        <span><a class="btn btn-xs btn-primary" href="{{ route('admin.galleries.show', [$event->coverage_video_gallery_id, 'video']) }}">Coverage Video Gallery</a></span>

                        <span><a class="btn btn-xs btn-primary" href="{{ route('admin.galleries.show', [$event->news_image_gallery_id, 'image']) }}">News Image Gallery</a></span>

                        <span><a class="btn btn-xs btn-primary" href="{{ route('admin.galleries.show', [$event->news_video_gallery_id, 'video']) }}">News Video Gallery</a></span>
                      </div>
                    </div>

{{-- 
                    <div class="profile-info-row">
                      <div class="profile-info-name">Video Gallery</div>

                      <div class="profile-info-value">
                        <span><a class="btn btn-xs btn-warning" href="{{ route('admin.galleries.show', [$event->video_gallery_id, 'video']) }}">Manage Video Gallery</a></span>
                      </div>
                    </div> --}}


                    <div class="profile-info-row">
                      <div class="profile-info-name">Agenda</div>

                      <div class="profile-info-value">
                        <span><a class="btn btn-xs btn-warning" href="{{ route('admin.agendas.days', $event->agenda_id) }}">Manage Agenda</a></span>
                      </div>
                    </div>

                    <div class="profile-info-row">
                      <div class="profile-info-name">Slider</div>

                      <div class="profile-info-value">
                        <span><a class="btn btn-xs btn-warning" href="{{ route('admin.sliders.index', $event->slug) }}">Manage Slider</a></span>
                      </div>
                    </div>

                    <div class="profile-info-row">
                      <div class="profile-info-name">Video tour URL</div>

                      <div class="profile-info-value">
                        <span><a class="" href="{{ $event->video_tour }}" target="_blank">{{ $event->video_tour }}</a></span>
                      </div>
                    </div>


                     <div class="profile-info-row">
                      <div class="profile-info-name">Published</div>

                      <div class="profile-info-value">
                        <span>{!! $event->is_current ? 'Published' : '<a href="' . route('admin.events.publish', $event->id) . '" class="btn btn-success btn-xs">Publish</a>' !!}</span>
                      </div>
                    </div>

                 </div>
              </div>
         </div>
   	  </div>
	</div> <!-- Page content -->
@stop

@section('scripts')
     <script>
       function initMap() {
         var uluru = {lat: {{ $event->latitude }}, lng: {{ $event->longitude }} };
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 15,
           center: uluru
         });
         var marker = new google.maps.Marker({
           position: uluru,
           map: map
         });
       }
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQYaWpHCJyy-ajeACCfnMhhgWnao_q3-k&callback=initMap"></script>
@stop