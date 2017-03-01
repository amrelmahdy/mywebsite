 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('company_name', null, ['class'=>'form-control ' . ($errors->has('company_name') ? 'redborder' : '')  , 'id'=>'company_name' , 'placeholder'=>'company_name']) }}
        <label for="company_name">Company Name <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('company_name') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('job_title', null, [ 'class'=>'form-control ' . ($errors->has('job_title') ? 'redborder' : '')  , 'id'=>'job_title' , 'placeholder'=>'job_title']) }}
        <label for="job_title">Job Title <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('job_title') }}</small>
    </div>
</div>


 <div class="row">
     <div class="form-group col-md-10 has-float-label">
        {{ Form::date('start_date', null, [ 'class'=>'form-control ' . ($errors->has('start_date') ? 'redborder' : '')  , 'id'=>'start_date' , 'placeholder'=>'start_date']) }}
        <label for="start_date">Start Date <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('start_date') }}</small>
    </div>

     <div class="form-group col-md-2">
        <label for="description">Set Current</span></label>
        {{ Form::checkbox('current', 1,null, ['class'=>'label-no-height ' . ($errors->has('current') ? 'redborder' : '')  , 'id'=>'current' , 'placeholder'=>'current']) }}
        <small class="text-danger">{{ $errors->first('current') }}</small>
    </div>
</div>

<div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::date('end_date', null, [ 'class'=>'form-control end-date ' . ($errors->has('end_date') ? 'redborder' : '')  , 'id'=>'end_date' , 'placeholder'=>'end_date']) }}
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