 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::date('date', null, ['class'=>'form-control ' . ($errors->has('date') ? 'redborder' : '')  , 'id'=>'date' , 'placeholder'=>'Date']) }}
        <label for="date">Date <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('date') }}</small>
    </div>
</div>

 <div class="row">
     <div class="form-group col-md-12 has-float-label">
        {{ Form::text('agenda_id', $agenda->title, ['disabled' => 'disabled', 'class'=>'form-control ' . ($errors->has('agenda_id') ? 'redborder' : '')  , 'id'=>'agenda_id' , 'placeholder'=>'agenda_id']) }}
        <label for="agenda_id">Agenda <span class="astric">*</span></label>
        <small class="text-danger">{{ $errors->first('agenda_id') }}</small>
    </div>
</div>

{!! Form::hidden('agenda_id', $agenda->id) !!}


{!! Form::submit($btn, ['class' => 'btn ' . $classes ]) !!}


