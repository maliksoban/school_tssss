
@extends('layouts.app')

@section('title', __('Home'))

@section('sidebar')
@include('layouts.leftside-menubar')
@endsection

@section('content')
<style>
    .badge-download {
        background-color: transparent !important;
        color: #464443 !important;
    }
    .list-group-item-text{
      font-size: 12px;
    }
</style>

<div class="container-fluid">
    <div class="row" >

        <div class="col-md-12" id="main-container">
            <div class="panel panel-default" style="border-top: 0px; background-image: linear-gradient(to right, rgb(60,142,185),#61ba6d)">
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                        @if(Auth::user()->role == 'admin')
                    <div class="row">
                        <div class="page-panel-title text-white text-center text-bold">@lang('Dashboard')</div>
                        <div class="col-sm-2">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-header">@lang('Students') - <b>{{$totalStudents}}</b></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-header">@lang('Teachers') - <b>{{$totalTeachers}}</b></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card text-white bg-dark mb-3">
                                <div class="card-header">@lang('Types of Books In Library') - <b>{{$totalBooks}}</b></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-header">@lang('Classes') - <b>{{$totalClasses}}</b></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="card text-white bg-info mb-3">
                                <div class="card-header">@lang('Sections') - <b>{{$totalSections}}</b></div>
                            </div>
                        </div>
                    </div>
                        @endif
                    <p></p>
                    <div class="row">
                        <div class="col-sm-8">
                            @if(Auth::user()->role != 'admin')
                            <div class="panel panel-default" style="background-image: linear-gradient(to bottom ,black,lightseagreen)">
                                <div class="panel-body">
                                    <b class="text-bold text-white">@lang ('Dear') {{ Auth::user()->name}},</p>
                                    <h5 class="text-bold text-white">@lang('Welcome to') {{Auth::user()->school->name}} School System</h5>
                                    <p class="text-yellow">@lang('Your presence and cooperation will help us to improve the education system of our organization.')</p>
                                </div>
                            </div>
                            @endif
                            @if(Auth::user()->role == 'admin')
                                <div class="panel panel-default" style="background-image: linear-gradient(to bottom ,lightseagreen,black);">
                                <div class="page-panel-title text-bold text-center text-white">@lang('Online Users')</div>
                                <div class="panel-body pre-scrollable">
                                    <div class="list-group">

                                        @if(Auth::check())
                                            @foreach(App\User::all() as $user)
                                                @if($user->isOnline())
                                                    <a href="#" class="list-group-item" style="background-color: #d0e9c6" >
                                                    <b class="list-group-item-heading" style="color: #398439">
                                                        {{$user->name}}
                                                        @if($user->role == 'admin')
                                                        @lang('')
                                                        @else
                                                            {{$user->section->class->class_number}}
                                                        @endif
                                                        ({{$user->role}}) &nbsp;&nbsp;
                                                        
                                                        <i class="text-success fa fa-circle">
                                                        </i> </b>
                                                    </a>
                                            @endif
                                            @endforeach
                                    @endif
                                    </div>


                                </div>
                            </div>
                            @endif
                            <div class="panel panel-default" style="background-color: lightgrey; color: black;">
                                <div class="page-panel-title">@lang('Active Exams')</div>
                                <div class="panel-body">
                                    @if(count($exams) > 0)

                                    <table class="table">
                                        <tr>
                                            <th>@lang('Exam Name')</th>
                                            <th>@lang('Notice Published')</th>
                                            <th>@lang('Result Published')</th>
                                        </tr>
                                        @foreach($exams as $exam)
{{--                                            @if($exam->notice_publish === 0)--}}
                                            <tr>
                                            <td>{{$exam->exam_name}}</td>
                                            <td>{{($exam->notice_published === 1)?__('Yes'):__('No')}}</td>
                                            <td>{{($exam->result_published === 1)?__('Yes'):__('No')}}</td>
                                        </tr>
{{--                                            @endif--}}
                                        @endforeach
                                    </table>

                                    @else
                                    @lang('No Active Examination')
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default" style="background-image: linear-gradient(to bottom ,lightseagreen,lightgray,peru);">
                                <div class="page-panel-title text-bold text-center text-black">@lang('Notices')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($notices) > 0)
                                    <div class="list-group">
                                        @foreach($notices =  \App\Notice::orderBy('updated_at',$request->sort ?? 'DESC')->get() as $notice)
                                        <a href="{{url($notice->file_path)}}" class="list-group-item" download>
                                            <i class="badge fa fa-download" style="color: yellow;">

                                            </i>
                                            <h5 class="list-group-item-heading">{{$notice->title}}</h5>
                                            <p class="list-group-item-text">@lang('Published at'):
                                                {{$notice->updated_at->format('M d Y')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                    <h5 style="color: black">@lang('No New Notice')</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="panel panel-default" style="background-image: linear-gradient(to bottom ,lightseagreen,lightgray,peru);">
                                <div class="page-panel-title text-bold text-center text-black">@lang('Events')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($events) > 0)
                                    <div class="list-group">
                                        @foreach($events =  \App\Event::orderBy('updated_at',$request->sort ?? 'DESC')->get() as $event)
                                        <a href="{{url($event->file_path)}}" class="list-group-item" download>
                                            <i class="badge fa fa-download" style="color: yellow;">
                                            </i>
                                            <h5 class="list-group-item-heading">{{$event->title}}</h5>
                                            <p class="list-group-item-text">@lang('Published at'):
                                                {{$event->updated_at->format('M d Y')}}</p>
                                        </a>
                                        @endforeach
                                    </div>
                                    @else
                                        <h5 style="color: black">@lang('No New Events')</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default" style="background-image: linear-gradient(to bottom ,lightseagreen,lightgray,peru);">
                                <div class="page-panel-title text-bold text-center text-black">@lang('Daily Lectures')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($routines) > 0)
                                    <div class="list-group">
                                        @foreach($routines =  \App\Routine::orderBy('updated_at',$request->sort ?? 'DESC')->get() as $routine)
                                            @if(Auth::user()->section_id == $routine->section_id)
                                        <a href="{{url($routine->file_path)}}" class="list-group-item" download>
                                            <i class="badge fa fa-download" style="color: yellow;">
                                            </i>
                                            <h5 class="list-group-item-heading">{{$routine->title}}</h5>
                                            <p class="list-group-item-text">@lang('Published at'):
                                                {{$routine->updated_at->format('M d Y')}}</p>
                                        </a>
                                                @elseif( Auth::user()->role == 'admin')
                                                <a href="{{url($routine->file_path)}}" class="list-group-item" download>
                                                    <i class="badge fa fa-download" style="color: yellow;">
                                                    </i>
                                                    <h5 class="list-group-item-heading">{{$routine->title}}</h5>
                                                    <p class="list-group-item-text">@lang('Published at'):
                                                        {{$routine->updated_at->format('M d Y')}}</p>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                    @else
                                        <h5 style="color: black">@lang('No New Lectures')</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-default" style="background-image: linear-gradient(to bottom ,lightseagreen,lightgray,peru);">
                                <div class="page-panel-title text-bold text-center text-black">@lang('Syllabus')</div>
                                <div class="panel-body pre-scrollable">
                                    @if(count($syllabuses) > 0)
                                    <div class="list-group">

                                        @foreach($syllabuses = \App\Syllabus::orderBy('updated_at',$request->sort ?? 'DESC')->get() as $syllabus)
                                            @if(Auth::user()->section_id == $syllabus->class_id)
                                        <a href="{{url($syllabus->file_path)}}" class="list-group-item" download>
                                            <i class="badge fa fa-download" style="color: yellow;">

                                            </i>
                                            <h5 class="list-group-item-heading">{{$syllabus->title}}</h5>
                                            <p class="list-group-item-text">@lang('Published at'):
                                                {{$syllabus->updated_at->format('M d Y')}}</p>
                                        </a>
                                            @elseif( Auth::user()->role == 'admin')
                                                <a href="{{url($syllabus->file_path)}}" class="list-group-item" download>
                                                    <i class="badge fa fa-download" style="color: yellow;">

                                                    </i>
                                                    <h5 class="list-group-item-heading">{{$syllabus->title}}</h5>
                                                    <p class="list-group-item-text">@lang('Published at'):
                                                        {{$syllabus->updated_at->format('M d Y')}}</p>
                                                </a>
                                            @endif
                                        @endforeach

                                    </div>
                                    @else
                                        <h5 style="color: black">@lang('No New Syllabus')</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
