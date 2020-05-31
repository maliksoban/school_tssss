@extends('layouts.app')

@section('title', __('Add Routine'))
@section('sidebar')
@include('layouts.leftside-menubar')
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title text-center text-bold">@lang('Add New Class Daily Lecture')
              </div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @component('components.file-uploader',['upload_type'=>'routine','classes'=>$classes,'sections'=>$sections])
                    @endcomponent
                    @component('components.uploaded-files-list',['files'=>$files,'parent'=>($section_id !== 0)?'section':'','upload_type'=>'routine'])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
