 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('university_name', null, ['class'=>'form-control ' . ($errors->has('university_name') ? 'redborder' : '')  , 'id'=>'university_name' , 'placeholder'=>'university_name']) }}
        <label for="university_name">University <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('university_name') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('faculty_name', null, [ 'class'=>'form-control ' . ($errors->has('faculty_name') ? 'redborder' : '')  , 'id'=>'faculty_name' , 'placeholder'=>'faculty_name']) }}
        <label for="faculty_name">Faculty <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('faculty_name') }}</small>
    </div>
</div>


 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::date('start_date', null, [ 'class'=>'form-control ' . ($errors->has('start_date') ? 'redborder' : '')  , 'id'=>'start_date' , 'placeholder'=>'start_date']) }}
        <label for="start_date">Start Date <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('start_date') }}</small>
    </div>
</div>


<div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::date('end_date', null, [ 'class'=>'form-control ' . ($errors->has('end_date') ? 'redborder' : '')  , 'id'=>'end_date' , 'placeholder'=>'end_date']) }}
        <label for="end_date">End Date <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('end_date') }}</small>
    </div>
</div>



<div class="row">
     <div class="form-group col-md-12 has-float-label">
        <label for="description">Description <span class="astric">*</span></label>
        {{ Form::textarea('description', null, ['rows' => '2', 'class'=>'form-control ' . ($errors->has('description') ? 'redborder' : '')  , 'id'=>'description' , 'placeholder'=>'description']) }}
        <small class="text-danger">{{ $errors->first('description') }}</small>
    </div>
</div>


{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}