 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('full_name', null, ['class'=>'form-control ' . ($errors->has('full_name') ? 'redborder' : '')  , 'id'=>'full_name' , 'placeholder'=>'full_name']) }}
        <label for="full_name">University <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('full_name') }}</small>
    </div>
</div>


 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('email', null, [ 'class'=>'form-control ' . ($errors->has('email') ? 'redborder' : '')  , 'id'=>'email' , 'placeholder'=>'email']) }}
        <label for="email">Email <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>
</div>


<div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('mobile', null, [ 'class'=>'form-control ' . ($errors->has('mobile') ? 'redborder' : '')  , 'id'=>'mobile' , 'placeholder'=>'mobile']) }}
        <label for="mobile">Mobile <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('mobile') }}</small>
    </div>
</div>

<div class="row">
     <div class="col-md-2">
        <img src="{{ asset('images/profile/' . $info->image ) }}" alt="amr profile">
    </div>

     <div class="form-group col-md-10 has-float-label">
        {{ Form::file('image', [ 'class'=>'form-control ' . ($errors->has('image') ? 'redborder' : '')  , 'id'=>'image' , 'placeholder'=>'image']) }}
        <label for="image">Image <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('image') }}</small>
    </div>


    <div class="form-group col-md-10 has-float-label">
        {{ Form::file('resume', [ 'class'=>'form-control ' . ($errors->has('resume') ? 'redborder' : '')  , 'id'=>'resume' , 'placeholder'=>'resume']) }}
        <label for="resume">Resume <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('resume') }}</small>
    </div>
    
</div>


<div class="row">
     <div class="form-group col-md-3 has-float-label">
        {{ Form::number('projects_done', null, [ 'class'=>'form-control ' . ($errors->has('projects_done') ? 'redborder' : '')  , 'id'=>'projects_done' , 'placeholder'=>'projects_done']) }}
        <label for="projects_done">Projects Done <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('projects_done') }}</small>
    </div>

     <div class="form-group col-md-3 has-float-label">
        {{ Form::number('happy_clients', null, [ 'class'=>'form-control ' . ($errors->has('happy_clients') ? 'redborder' : '')  , 'id'=>'happy_clients' , 'placeholder'=>'happy_clients']) }}
        <label for="happy_clients">Happy Clients <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('happy_clients') }}</small>
    </div>

     <div class="form-group col-md-3 has-float-label">
        {{ Form::number('experience_years', null, [ 'class'=>'form-control ' . ($errors->has('experience_years') ? 'redborder' : '')  , 'id'=>'experience_years' , 'placeholder'=>'experience_years']) }}
        <label for="experience_years">Years Of Experience <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('experience_years') }}</small>
    </div>

     <div class="form-group col-md-3 has-float-label">
        {{ Form::number('countries_served', null, [ 'class'=>'form-control ' . ($errors->has('countries_served') ? 'redborder' : '')  , 'id'=>'countries_served' , 'placeholder'=>'countries_served']) }}
        <label for="countries_served">Countries Served <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('countries_served') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
         {{ Form::text('facebook', null, ['class'=>'form-control ' . ($errors->has('facebook') ? 'redborder' : '')  , 'id'=>'facebook' , 'placeholder'=>'facebook']) }}
         <label for="facebook">Facebook <span class="astric">*</span></label>
         <small class="text-danger">{{ $errors->first('facebook') }}</small>
     </div>
 </div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
         {{ Form::text('twitter', null, ['class'=>'form-control ' . ($errors->has('twitter') ? 'redborder' : '')  , 'id'=>'twitter' , 'placeholder'=>'twitter']) }}
         <label for="twitter">Twitter <span class="astric">*</span></label>
         <small class="text-danger">{{ $errors->first('twitter') }}</small>
     </div>
 </div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
         {{ Form::text('linkedin', null, ['class'=>'form-control ' . ($errors->has('linkedin') ? 'redborder' : '')  , 'id'=>'linkedin' , 'placeholder'=>'linkedin']) }}
         <label for="linkedin">Linkedin <span class="astric">*</span></label>
         <small class="text-danger">{{ $errors->first('linkedin') }}</small>
     </div>
 </div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
         {{ Form::text('instagram', null, ['class'=>'form-control ' . ($errors->has('instagram') ? 'redborder' : '')  , 'id'=>'instagram' , 'placeholder'=>'instagram']) }}
         <label for="instagram">Instagram <span class="astric">*</span></label>
         <small class="text-danger">{{ $errors->first('instagram') }}</small>
     </div>
 </div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
         {{ Form::text('google', null, ['class'=>'form-control ' . ($errors->has('google') ? 'redborder' : '')  , 'id'=>'google' , 'placeholder'=>'google']) }}
         <label for="google">Google Plus<span class="astric">*</span></label>
         <small class="text-danger">{{ $errors->first('google') }}</small>
     </div>
 </div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
         {{ Form::text('github', null, ['class'=>'form-control ' . ($errors->has('github') ? 'redborder' : '')  , 'id'=>'github' , 'placeholder'=>'github']) }}
         <label for="github">Github <span class="astric">*</span></label>
         <small class="text-danger">{{ $errors->first('github') }}</small>
     </div>
 </div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
         {{ Form::text('bitbucket', null, ['class'=>'form-control ' . ($errors->has('bitbucket') ? 'redborder' : '')  , 'id'=>'bitbucket' , 'placeholder'=>'bitbucket']) }}
         <label for="bitbucket">Bitbucket <span class="astric">*</span></label>
         <small class="text-danger">{{ $errors->first('bitbucket') }}</small>
     </div>
 </div>




<div class="row">
     <div class="form-group col-md-12 has-float-label">
        <label for="short_bio">Short Bio <span class="astric">*</span></label>
        {{ Form::textarea('short_bio', null, ['rows' => '2', 'class'=>'form-control ' . ($errors->has('short_bio') ? 'redborder' : '')  , 'id'=>'short_bio' , 'placeholder'=>'short_bio']) }}
        <small class="text-danger">{{ $errors->first('short_bio') }}</small>
    </div>
</div>


<div class="row">
     <div class="form-group col-md-12 has-float-label">
        <label for="address">Address <span class="astric">*</span></label>
        {{ Form::textarea('address', null, ['rows' => '2', 'class'=>'form-control ' . ($errors->has('address') ? 'redborder' : '')  , 'id'=>'address' , 'placeholder'=>'address']) }}
        <small class="text-danger">{{ $errors->first('address') }}</small>
    </div>
</div>


 <div class="row">
     <div class="form-group col-md-12 has-float-label">
         <label for="map_pin">Map Pin <span class="astric">*</span></label>
         {{ Form::textarea('map_pin', null, ['rows' => '2', 'class'=>'form-control ' . ($errors->has('map_pin') ? 'redborder' : '')  , 'id'=>'map_pin' , 'placeholder'=>'map_pin']) }}
         <small class="text-danger">{{ $errors->first('map_pin') }}</small>
     </div>
 </div>


{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}