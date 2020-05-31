@extends('layouts.app')

@section('title', __('All Examinations'))
@section('sidebar')
@include('layouts.leftside-menubar')
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('All Examinations')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.exams-list',['exams'=>$exams])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
