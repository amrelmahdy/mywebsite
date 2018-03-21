@extends('layouts.admin.admin-master')
@section('title', 'Samples')

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
            <div class="row slides-row">
                @if($samples->count() > 0)
                    @foreach($samples as $sample)
                        <div class="col-md-4 wrapper wrapper{{ $sample->id }}">
                            <div class="slider">
                                <div class="slide text-center">
                                    <img src="{{ asset('images/portfolio/' . $sample->image ) }}">
                                    <div class="overlay">
                                        <div class="btn-group control-icon">
                                            <a href="{{ route('samples.edit', $sample->id) }}"><i class="ace-icon fa fa-edit bigger-120  edit"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#modal-confirm{{ $sample->id  }}"><i class="ace-icon fa fa-trash bigger-120 delete"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-description" >
                                <p class="text-center">{{ $sample->category->category }}</p>
                                {!! $sample->description !!}
                            </div>
                        </div>
                        <!-- Delete slide -->
                        <div class="modal fade" tabindex="-1" role="dialog" id="modal-confirm{{ $sample->id }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <p>Are you sure you wnt tp delete Sample :  <strong class="confirm-delete-item-name">{{ $sample->project_name  }} ?</strong></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        {{ Form::open(['route' => ['samples.destroy', $sample->id], 'method' => 'DELETE']) }}
                                        <input type="submit" class="btn btn-primary" id="confirmed" value="yes">
                                        {{ Form::close() }}
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    @endforeach
                @else
                    <div class="empty">There are no slides to show</div>
                @endif
            </div>
        </div>
    </div>
@stop

@section('scripts')
@stop

