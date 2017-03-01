<div class="row">
  <div class="form-group col-md-12 has-float-label">
        {{ Form::text('title', null, ['class'=>'form-control ' . ($errors->has('title') ? 'redborder' : '')  , 'id'=>'title' , 'placeholder'=>'Enter Event Title']) }}
        <label for="title">Event Title <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>
</div>

<div class="row">
  <div class="form-group col-md-12 has-float-label">
        {{ Form::textarea('description', null, ['rows' => 2, 'class'=>'form-control ' . ($errors->has('description') ? 'redborder' : '')  , 'id'=>'description' , 'placeholder'=>'Event Description']) }}
        <label for="description">Description <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>
</div>

<div class="row">
   <div class="form-group col-md-6 has-float-label">
        {{ Form::text('latitude', null, ['class'=>'form-control ' . ($errors->has('latitude') ? 'redborder' : '')  , 'id'=>'latitude' , 'placeholder'=>'Latitude']) }}
        <label for="latitude">Latitude <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('latitude') }}</small>
    </div>

    <div class="form-group col-md-6 has-float-label">
        {{ Form::text('longitude', null, ['class'=>'form-control ' . ($errors->has('longitude') ? 'redborder' : '')  , 'id'=>'longitude' , 'placeholder'=>'Longitude']) }}
        <label for="longitude">Longitude <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('longitude') }}</small>
    </div>
</div>

<div class="row">
  <div class="form-group col-md-12 has-float-label">
        {{ Form::textarea('location_description', null, ['rows' => 2, 'class'=>'form-control ' . ($errors->has('location_description') ? 'redborder' : '')  , 'id'=>'location_description' , 'placeholder'=>'Location Description']) }}
        <label for="location_description">Location Description <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('location_description') }}</small>
    </div>
</div>

<div class="row">
   <div class="form-group col-md-6 has-float-label">
        {{ Form::date('event_date', null, ['required' => 'required', 'class'=>'form-control ' . ($errors->has('event_date') ? 'redborder' : '')  , 'id'=>'event_date' , 'placeholder'=>'Event Date']) }}
        <label for="event_date">Event Date <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('event_date') }}</small>
    </div>

    <div class="form-group col-md-6 has-float-label">
        {{ Form::date('early_end', null, ['class'=>'form-control ' . ($errors->has('early_end') ? 'redborder' : '')  , 'id'=>'early_end' , 'placeholder'=>'Early End']) }}
        <label for="early_end">Early End <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('early_end') }}</small>
    </div>
</div>


<div class="row">
  <div class="form-group col-md-12 has-float-label">
        {{ Form::textarea('early_description', null, ['rows' => 2, 'class'=>'form-control ' . ($errors->has('early_description') ? 'redborder' : '')  , 'id'=>'early_description' , 'placeholder'=>'English category']) }}
        <label for="early_description">Early Description <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('early_description') }}</small>
    </div>
</div>

<div class="row">
  <div class="form-group col-md-12 has-float-label">
        {{ Form::textarea('late_description', null, ['rows' => 2, 'class'=>'form-control ' . ($errors->has('late_description') ? 'redborder' : '')  , 'id'=>'late_description' , 'placeholder'=>'Late description']) }}
        <label for="late_description">Late Description <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('late_description') }}</small>
    </div>
</div>

<div class="row">
   <div class="form-group col-md-4 has-float-label">
        {{ Form::text('early_price', null, ['class'=>'form-control ' . ($errors->has('early_price') ? 'redborder' : '')  , 'id'=>'early_price' , 'placeholder'=>'Early Price']) }}
        <label for="early_price">Early Price <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('early_price') }}</small>
    </div>

    <div class="form-group col-md-4 has-float-label">
        {{ Form::text('late_price', null, ['class'=>'form-control ' . ($errors->has('late_price') ? 'redborder' : '')  , 'id'=>'late_price' , 'placeholder'=>'Late Price']) }}
        <label for="late_price">Late Price <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('late_price') }}</small>
    </div>


    <div class="form-group col-md-4 has-float-label">
        {{ Form::select('currency', [ '$' => 'USD', 'EGP' => 'EGP'], null, ['class'=>'form-control ' . ($errors->has('currency') ? 'redborder' : '')  , 'id'=>'currency' , 'placeholder'=>'Currency']) }}
        <label for="currency">Currency <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('currency') }}</small>
    </div>
</div>

<div class="row">
	<div class="form-group col-md-12 has-float-label">
        {{ Form::text('video_tour', null, ['class'=>'form-control ' . ($errors->has('video_tour') ? 'redborder' : '')  , 'id'=>'video_tour' , 'placeholder'=>'Video Tour URL']) }}
        <label for="video_tour">Video Tour URL <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('video_tour') }}</small>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-12 has-float-label">
        {{ Form::select('speakers[]', $speakers, $event_speakers, ['multiple' => 'multiple', 'required' => 'required', 'class'=>'form-control multiple-select ' . ($errors->has('speakers') ? 'redborder' : '')  , 'id'=>'speakers' ]) }}
        <label for="speakers">Speakers <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('speakers') }}</small>
    </div>

    <div class="form-group col-md-12 has-float-label">
        {{ Form::select('sponsers[]', $sponsers, $event_sponsers, ['multiple' => 'multiple', 'required' => 'required', 'class'=>'form-control multiple-select-sponsers ' . ($errors->has('sponsers') ? 'redborder' : '')  , 'id'=>'sponsers' ]) }}
        <label for="sponsers">sponsers <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('sponsers') }}</small>
    </div>
</div>

{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}