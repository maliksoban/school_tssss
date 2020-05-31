<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ (Auth::check() && (Auth::user()->role == 'student' || Auth::user()->role == 'teacher'
        || Auth::user()->role == 'admin' || Auth::user()->role == 'accountant' || Auth::user()->role ==
        'librarian'))?Auth::user()->school->name:config('app.name') }}</title>
{{--    <title>Dashboard - {{config('app.name')}}</title>--}}
    <!-- Tell the browser to be responsive to screen width -->

<!-- Favicon -->
    <link rel="icon" href="img/core-img/logo_small.png">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('css/vendors.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-toggle.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome/4.0/css/font-awesome.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('css/_all.css')}}">
    <link rel="stylesheet" href="{{ url('css/loader.css') }}">
    <link rel="stylesheet" href="{{ url('css/application.css') }}">

    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/switchery.css')}}" />

    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}" />

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">


    @yield('css')
    <script src="{{ url('js/jsadmin/application.js') }}"></script>
    <script src="{{ url('js/jsadmin/vendors.js') }}"></script>
    <script src="{{url('js/jsadmin/switchery.min.js')}}"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js" integrity="sha256-CgrKEb54KXipsoTitWV+7z/CVYrQ0ZagFB3JOvq2yjo=" crossorigin="anonymous"></script>--}}


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @stack('after_scripts')


</head>
<div id="preloader">
    <i class="circle-preloader"></i>
</div>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    <!--@include('components.loader')-->

    <header class="main-header">

        @include('layouts.modified.navbar-top')

    <!-- Header Navbar: style can be found in header.less -->
    </header>
    
    @yield('sidebar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer" style="max-height: 100px;text-align: center">
        <strong>Copyright © <?= date('Y'); ?> <a href="/">The Super Scholars School System</a>. All rights reserved.</strong>
    </footer>


</div>
<!-- ./wrapper -->
<!-- jQuery 3.1.1 -->

<script src="{{asset('js/jsadmin/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('js/jsadmin/bootstrap-toggle.min.js')}}"></script>
<!-- AdminLTE App -->

<script src="{{asset('js/jsadmin/adminlte.min.js')}}"></script>
<script src="{{asset('js/jsadmin/icheck.min.js')}}"></script>

<script src="{{asset('js/jsadmin/toastr.min.js')}}"></script>
<script src="{{asset('js/jsadmin/select2.min.js')}}"></script>

@stack('scripts')

<script>
        @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>

<script>
    // let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function(html){

        let switchery = new Switchery(html,{ color : '#64bd63',secondaryColor : '#dfdfdf',
            jackColor : '#fff', jackSecondaryColor: null,
            className : 'switchery', disabled : false,
            disabledOpacity : 0.5, speed : '0.4s', size : 'default'})
    });

    $(document).ready(function () {
        $(document).ajaxStart(function () {
            $("#wait").css("display","block");
        });
        $(document).ajaxComplete(function () {
            $("#wait").css("display","none");
        });
        // $("button").click(function () {
        //     $("#txt").load("demo_ajax_load.asp");
        // });

    });
</script>

</body>
</html>
