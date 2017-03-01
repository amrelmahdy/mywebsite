 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::file('image', ['class'=>'form-control ' . ($errors->has('image') ? 'redborder' : '')  , 'id'=>'image' , 'placeholder'=>'image']) }}
        <label for="image">image <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('image') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        <label for="description" class="label-control">description <span class="astric">*</span></label>
        {{ Form::textarea('description', null, ['rows' => 4, 'class'=>'form-control ' . ($errors->has('description') ? 'redborder' : '')  , 'id'=>'description' , 'placeholder'=>'description']) }}
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>
</div>

@if(isset($event))
    <div class="row">
         <div class="form-group col-md-12 has-float-label">
            {{ Form::text('event', $event->title, ['disabled' => 'disabled', 'class'=>'form-control ' . ($errors->has('event') ? 'redborder' : '')  , 'id'=>'event' , 'placeholder'=>'event']) }}
            <label for="event">event <span class="astric">*</span></label>
            <small class="text-danger">{{ $errors->first('event') }}</small>
        </div>
    </div>
   {!! Form::hidden('event_id', $event->id) !!}
@endif

{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}