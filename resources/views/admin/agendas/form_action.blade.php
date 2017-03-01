 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::time('action_time_from', null, ['class'=>'form-control ' . ($errors->has('action_time_from') ? 'redborder' : '')  , 'id'=>'action_time_from' , 'placeholder'=>'From']) }}
        <label for="action_time_from">From <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('action_time_from') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::time('action_time_to', null, [ 'class'=>'form-control ' . ($errors->has('action_time_to') ? 'redborder' : '')  , 'id'=>'action_time_to' , 'placeholder'=>'To']) }}
        <label for="action_time_to">To <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('action_time_to') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('title', null, ['class'=>'form-control ' . ($errors->has('title') ? 'redborder' : '')  , 'id'=>'title' , 'placeholder'=>'title']) }}
        <label for="title">title <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::textarea('description', null, ['rows' => '2', 'class'=>'form-control ' . ($errors->has('description') ? 'redborder' : '')  , 'id'=>'description' , 'placeholder'=>'description']) }}
        <label for="description">Description <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>
</div>


 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('day', $day->date, ['disabled' => 'disabled', 'class'=>'form-control ' . ($errors->has('day') ? 'redborder' : '')  , 'id'=>'day' , 'placeholder'=>'Day']) }}
        <label for="day">Description <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('day') }}</small>
    </div>
</div>

{!! Form::hidden('day_id', $day->id) !!}


{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}