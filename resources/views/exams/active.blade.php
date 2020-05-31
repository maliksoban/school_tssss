@extends('layouts.app')

@section('title', __('All Active Examinations'))
@section('sidebar')
@include('layouts.leftside-menubar')
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('All Active Examinations')</div>

                <div class="panel-body">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    @if(count($exams) > 0)
                        @foreach($exams as $exam)
                            @component('components.active-exams',['exam'=>$exam,'courses'=>$courses])
                            @endcomponent
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
