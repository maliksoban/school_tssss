@extends('layouts.app')

@section('title', __('Librarians'))

@section('sidebar')
@include('layouts.leftside-menubar')
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="main-container">
            <div class="panel panel-default">
              @if(count($users) > 0)
              @foreach ($users as $user)
                <div class="page-panel-title">@lang('List of all') {{__(ucfirst($user->role))}}s</div>
                 @break($loop->first)
              @endforeach
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.users-list',['users'=>$users,'current_page'=>$current_page,'per_page'=>$per_page])
                    @endcomponent
                </div>
              @else
                <div class="panel-body">
                    @lang('No Related Data Found.')
                </div>
              @endif
            </div>
        </div>
    </div>
</div>
@endsection
