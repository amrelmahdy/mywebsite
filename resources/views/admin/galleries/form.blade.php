<div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('title', null, ['class'=>'form-control ' . ($errors->has('title') ? 'redborder' : '')  , 'id'=>'title' , 'placeholder'=>'From']) }}
        <label for="title">title <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('title') }}</small>
    </div>
</div>

@if($category == 1)
    <div class="row">
         <div class="form-group col-md-12 has-float-label">
            {{ Form::file('source', ['class'=>'form-control ' . ($errors->has('source') ? 'redborder' : '')  , 'id'=>'source' , 'placeholder'=>'Image Source']) }}
            <label for="source">source <span class="astric">*</span></label>
            <small class="text-danger">{{ $errors->first('source') }}</small>
        </div>
    </div>
@else
    <div class="row">
         <div class="form-group col-md-12 has-float-label">
            {{ Form::text('source', null, ['class'=>'form-control ' . ($errors->has('source') ? 'redborder' : '')  , 'id'=>'source' , 'placeholder'=>'Video Source (Youtube Code)']) }}
            <label for="source">source <span class="astric">*</span></label>
            <small class="text-danger">{{ $errors->first('source') }}</small>
        </div>
    </div>
@endif

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('gallery', $gallery->name, ['disabled'=> 'disabled', 'class'=>'form-control ' . ($errors->has('gallery') ? 'redborder' : '')  , 'id'=>'gallery' , 'placeholder'=>'From']) }}
        <label for="gallery">Gallery <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('gallery') }}</small>
    </div>
</div>

 
{!! Form::hidden('gallery_id', $gallery->id) !!}


{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}