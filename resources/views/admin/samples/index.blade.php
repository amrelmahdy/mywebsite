@extends('layouts.admin.admin-master')

@section('title', 'Work Samples')

@section('styles')
   {!! Html::style('css/admin/slider.css') !!}
@stop

@section('content')
   <div class="page-content">
   	  
   	  <div class="page-header">
   	  	 <div class="row">
            <div class="col-md-11">
             <h1>Work Samples</h1>
             </div>
             <div class="col-md-1">
                <a href="{{ route('samples.create') }}" class="btn btn-primary btn-sm">Add</a>
             </div>
          </div>
   	  </div>

   	  <div class="sliders">
   	  	<div class="row samples-row">
            @if($samples->count() > 0)
     	  	    @foreach($samples as $sample)
     	  	        <div class="col-md-4 wrapper wrapper{{ $sample->id }}">
                    <div class="sampler">
        		   	  		<div class="sample text-center">
        		   	  		    <img src="{{ asset('images/admin/samplers/' . $sample->image ) }}">
        		   	  		    <div class="overlay">
                               <div class="btn-group control-icon">
                                  <a href=""><i class="ace-icon fa fa-edit bigger-120  edit" data-id=""></i></a>
                                  <a href=""><i class="ace-icon fa fa-trash bigger-120 delete"  data-id="{{ $sample->id }}" data-slug=""></i></a>
                               </div>
        		   	  			 </div>
    		   	  		    </div>
                    </div>
                    <div class="sample-description" >{!! $sample->description !!}</div>
  	   	  		   </div>
                 <!-- Delete sample -->
                 <div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm{{ $sample->id }}">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <p>Are you sure you wnt tp delete sample<strong class="confirm-delete-item-name">?</strong></p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          {{ Form::open(['route' => ['admin.samplers.destroy', $sample->id], 'method' => 'DELETE']) }}
                             <input type="submit" class="btn btn-primary" id="confirmed" value="yes">
                          {{ Form::close() }}
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
               </div><!-- /.modal -->
     	  		@endforeach
          @else
             <div class="empty">There are no samples to show</div>
          @endif
   	  	</div>
   	  </div>
   </div>

@stop


@section('scripts')
   <script type="text/javascript">
      $(document).ready(function(){
          var URL   = "{{ url('/') }}";
        $(document).on('click', '.delete', function(event){
          id = $(event.target).data('id');
          event.preventDefault();
          $('#modal-confirm' + id).modal();
        });
      });
  </script>
@stop