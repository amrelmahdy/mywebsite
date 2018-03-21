 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('skill', null, ['class'=>'form-control ' . ($errors->has('skill') ? 'redborder' : '')  , 'id'=>'skill' , 'placeholder'=>'Date']) }}
        <label for="skill">Skill <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('skill') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-8 has-float-label">
        {{ Form::text('percentage', null, ['class'=>'form-control ' . ($errors->has('percentage') ? 'redborder' : '')  , 'id'=>'percentage' , 'placeholder'=>'percentage wihout %']) }}
        <label for="percentage">Percentage <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('percentage') }}</small>
    </div>

     <div class="form-group col-md-3">
         <label for="description">Viewed</span></label>
         {{ Form::checkbox('viewed', 1, true, ['class'=>'label-no-height ' . ($errors->has('viewed') ? 'redborder' : '')  , 'id'=>'viewed' , 'placeholder'=>'viewed']) }}
         <small class="text-danger">{{ $errors->first('viewed') }}</small>
     </div>

 </div>




{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}


