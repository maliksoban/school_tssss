
        <a style="background-image: linear-gradient(to right, lightblue , blue)" href="{{url('/home')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>TS</b>S</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>The Super</b>Scholars</span>
        </a>
        {{-- Top Header Bar of dashboard--}}
    <nav class="navbar navbar-static-top" style="background-image: linear-gradient(to right, rgb(60,142,185),#61ba6d)">

            <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

        <!-- Left Side Of Navbar -->
            <!-- Authentication Links -->


            <div class="navbar-custom-menu" >

                <ul class="nav navbar-nav">
                    @guest
                        <li><a href="{{ route('login') }}" style="color: #000;">@lang('Login')</a></li>
                    @else
                        @if(\Auth::user()->role == 'student')
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="nav-item">
                        <a href="{{url('user/'.\Auth::user()->id.'/notifications')}}" class="nav-link nav-link-align-btn"
                           role="button">
                            <h3 style="vertical-align: middle;"><li><i class="fa fa-envelope"></i></li></h5>
                            <?php
                            $mc = \App\Notification::where('student_id',\Auth::user()->id)->where('active',1)->count();
                            ?>
                            @if($mc > 0)
                                <small class="label label-danger">{{$mc}}</small>
                            @endif
                        </a>
                    </li>

                        @endif
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <div class="pull-right">
                                    <a style="background-image: linear-gradient(to bottom ,firebrick,peru);; border: solid 2px; vertical-align: middle;" href="{{ route('logout') }}"
                                           class="btn btn-default text-bold text-white text-center " onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        <h4 style="vertical-align: middle;"><li><i class="fa fa-power-off"></i></li></h4>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                                <!-- User Account Menu -->
                                <li class="dropdown user user-menu">

                                    <!-- Menu Toggle Button -->
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- The user image in the navbar-->
                                        <span class="label label-success">
                                    {{ ucfirst(\Auth::user()->role) }}
                                       </span>&nbsp;&nbsp;
                                        @if(!empty(Auth::user()->pic_path))
                                            <img src="{{asset('01-progress.gif')}}" data-src="{{url(Auth::user()->pic_path)}}" alt="Profile Picture"
                                                 style="vertical-align: middle;border-style: none;align-items: inherit; border-radius: 50%;width: 30px;height: 30px;">
                                        @else
                                            @if(strtolower(Auth::user()->gender) == 'male')
                                                <img src="{{asset('01-progress.gif')}}" data-src="{{url('images/boy.png')}}"
                                                     alt="Profile Picture" style="vertical-align: middle;horiz-align: center; border-style: none;border-radius: 50%;width: 30px;height: 30px;">
                                            @else
                                                <img src="{{asset('01-progress.gif')}}" data-src="{{url('images/girl.png')}}"
                                                     alt="Profile Picture" style="vertical-align: middle;horiz-align: center; border-style: none;border-radius: 50%;width: 30px;height: 30px;">
                                        @endif
                                    @endif
                                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <!-- The user image in the menu -->
                                        <li class="user-header">
                                            @if(!empty(Auth::user()->pic_path))
                                                <img src="{{asset('01-progress.gif')}}" data-src="{{url(Auth::user()->pic_path)}}" alt="Profile Picture"
                                                     style="vertical-align: middle;border-style: none;border-radius: 50%;width: 100%;height: 100%;">
                                            @else
                                                @if(strtolower(Auth::user()->gender) == 'male')
                                                    <img src="{{asset('01-progress.gif')}}" data-src="{{url('images/boy.png')}}"
                                                         alt="Profile Picture" style="vertical-align: middle;border-style: none;border-radius: 50%;width: 100%;height: 100%;">
                                                @else
                                                    <img src="{{asset('01-progress.gif')}}" data-src="{{url('images/girl.png')}}"
                                                         alt="Profile Picture" style="vertical-align: middle;border-style: none;border-radius: 50%;width: 100%;height: 100%;">
                                                @endif
                                            @endif
                                        </li>
                                        <li>
                                            <h4 class="text-black text-uppercase text-bold text-center">
                                                {{ Auth::user()->name }}
                                            </h4>
                                                <p  class="text-black text-uppercase text-center">{{ Auth::user()->role}} of the Super Scholars</p>
                                        </li>
                                        <!-- Menu Footer-->
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a style="background-color: peru;  border: solid 2px;" href="{{url('user/'.Auth::user()->student_code)}}" class="btn btn-default text-white">@lang('Profile')</a>
                                            </div>
                                            <div class="pull-right">
                                                <a style="background-color: #1abc9c;  border: solid 2px;" href="{{url('user/config/change_password')}}"  class="btn btn-default text-white">@lang('Change Password')</a>
                                            </div>

                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    @endguest
                </ul>
            </div>
    </nav>



