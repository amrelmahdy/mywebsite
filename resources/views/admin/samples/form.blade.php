<div class="row">
    <div class="form-group col-md-12 has-float-label">
        {{ Form::text('project_name', null, ['class'=>'form-control ' . ($errors->has('project_name') ? 'redborder' : '')  , 'id'=>'project_name' , 'placeholder'=>'project_name']) }}
        <label for="project_name">project_name <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('project_name') }}</small>
    </div>
</div>


<div class="row">
    <div class="form-group col-md-12 has-float-label">
        {{ Form::select('category_id', Super::getCategoriesIds() , null,['class'=>'form-control ' . ($errors->has('category_id') ? 'redborder' : '')  , 'id'=>'category_id' , 'placeholder'=>'Category']) }}
        <label for="category_id">category_id <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('category_id') }}</small>
    </div>
</div>

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


<div class="row">
    <div class="form-group col-md-12 has-float-label">
        {{ Form::text('link', null, ['class'=>'form-control ' . ($errors->has('link') ? 'redborder' : '')  , 'id'=>'link' , 'placeholder'=>'link']) }}
        <label for="link">link <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('link') }}</small>
    </div>
</div>


{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}