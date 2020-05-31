<script>
    $(document).ready(function () {
        $('.nav-item.active').removeClass('active');
        $('a[href="' + window.location.href + '"]').closest('li').closest('ul').closest('li').addClass('active');
        $('a[href="' + window.location.href + '"]').closest('li').addClass('active');
    });
</script>
<style>
    .nav-item.active {
        /*background-color: #fce8e6;*/
        font-weight: bold;
    }

    .nav-item.active a {
        color: #d93025;
    }

    .nav-link-text {
        padding-left: 10%;
    }

    #side-navbar ul>li>a {
        padding: 8px 15px;
    }
</style>
<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('img/core-img/school_logo.png')}}" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                    <p>Guest</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
            @endif
            <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            @include('layouts.modified.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->

</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
        </div>

        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">

        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
