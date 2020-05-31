@extends('layouts.app')

@section('title', __('All Issued Book'))
@section('sidebar')
@include('layouts.leftside-menubar')
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="main-container">
            <div class="panel panel-default">
                <div class="page-panel-title">@lang('All Issued Book')</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.issued-books-list',['books'=>$issued_books])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
