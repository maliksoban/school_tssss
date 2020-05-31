    @if(Auth::user()->role != 'master')

            <li class="nav-item active">
                <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>
                    <span>@lang('Dashboard')</span></a>
            </li>
    @endif

    @if(Auth::user()->role == 'admin')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-calendar"></i> <span>Attendance</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="#"><i class="fa fa-edit"></i><span>@lang('Teacher Attendance')</span></a>
                </li>
                <li>
                    <a href="{{url('users/'.Auth::user()->school->code.'/1/0')}}"><i class="fa fa-edit"></i><span>@lang('Students Attendance')</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i><span>@lang('Staff Attendance')</span></a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('school/sections?course=1') }}"><i class="fa fa-book"></i> <span>@lang('Classes &amp; Sections')</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('users/'.Auth::user()->school->code.'/0/1')}}"><i class="fa fa-id-badge"></i>
                <span>@lang('Teachers')</span></a>
        </li>
            @endif

    @if(Auth::user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{url('users/'.Auth::user()->school->code.'/1/0')}}"><i class="fa fa-id-badge"></i>
                <span>@lang('Students')</span></a>
        </li>
    @endif
    @if(Auth::user()->role == 'admin')
    <li class="treeview">
        <a href="#">
            <i class="fa fa-shield"></i> <span>Exams</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="{{ url('exams/create') }}"><i class="fa fa-address-book-o"></i> <span>@lang('Add Examination')</span></a>
            </li>
            <li>
                <a href="{{ url('exams/active') }}"><i class="fa fa-pagelines"></i> <span
                        >@lang('Active Exams')</span></a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ url('exams') }}"><i class="fa fa-shield"></i> <span>@lang('Manage Examinations')</span></a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('grades/all-exams-grade') }}"><i class="fa fa-graduation-cap"></i> <span>@lang('Grades')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('academic/routine') }}"><i class="fa fa-book"></i> <span>@lang('Daily Lectures')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('academic/syllabus') }}"><i class="fa fa-book"></i> <span>@lang('Syllabus')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('academic/notice') }}"><i class="fa fa-sticky-note"></i> <span>@lang('Notice')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('academic/event') }}"><i class="fa fa-calendar"></i> <span>@lang('Event')</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('settings.index') }}"><i class="fa fa-university"></i> <span>@lang('Academic Settings')</span></a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>@lang('Manage GPA')</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a class="dropdown-item" href="{{ url('gpa/all-gpa') }}"><i class="fa fa-info-circle"></i> <span>@lang('All GPA')</span></a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ url('gpa/create-gpa') }}"><i class="fa fa-info-circle"></i> <span>@lang('Add New GPA')</span></a>
            </li>
        </ul>
    </li>
    @endif
    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'accountant')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>@lang('Fees Generator')</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="dropdown-item" href="{{ url('fees/all') }}"><i class="fa fa-info-circle"></i> <span>@lang('Generate Form')</span></a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('fees/create') }}"><i class="fa fa-info-circle"></i> <span>@lang('Add Fee Field')</span></a>
                </li>
            </ul>
        </li>

    @endif
    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'accountant')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>@lang('Manage Accounts')</span>
                <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a class="dropdown-item" href="{{url('users/'.Auth::user()->school->code.'/accountant')}}"><i class="fa fa-address-book-o"></i>
                        <span class="nav-link-text">@lang('Accountant List')</span></a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('accounts/sectors') }}"><i class="fa fa-address-book-o"></i>
                        <span >@lang('Add Account Sector')</span></a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('accounts/expense') }}"><i class="fa fa-address-book-o"></i> <span
                            >@lang('Add New Expense')</span></a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('accounts/expense-list') }}"><i class="fa fa-address-book-o"></i>
                        <span>@lang('Expense List')</span></a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('accounts/income') }}"><i class="fa fa-address-book-o"></i> <span>@lang('Add New Income')</span></a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('accounts/income-list') }}"><i class="fa fa-address-book-o"></i>
                        <span>@lang('Income List')</span></a>
                </li>
            </ul>
        </li>

    @endif
  @if(Auth::user()->role == 'student')
      <!--<li>-->
      <!--    <a class="nav-link active" href="{{ url('attendances/0/'.Auth::user()->id.'/0') }}"><i class="fa fa-calendar"></i>-->
      <!--        <span>@lang('My Attendance')</span></a>-->
      <!--</li>-->
      <li>
          <a class="nav-link" href="{{ url('courses/0/'.Auth::user()->section_id) }}"><i class="fa fa-address-book-o"></i>
              <span>@lang('My Courses')</span></a>
      </li>
      <li>
          <a class="nav-link" href="{{ url('grades/'.Auth::user()->id) }}"><i class="fa fa-address-book-o"></i> <span
                  >@lang('My Grade')</span></a>
      </li>
      <!--<li>-->
      <!--    <a class="nav-link" href="{{url('stripe/charge')}}"><i class="fa fa-address-book-o"></i>-->
      <!--        <span>@lang('Payment')</span></a>-->
      <!--</li>-->
      <!--<li>-->
      <!--    <a class="nav-link" href="{{url('stripe/receipts')}}"><i class="fa fa-address-book-o"></i> <span>@lang('Receipt')</span></a>-->
      <!--</li>-->

  @endif
  @if(Auth::user()->role == 'admin' || Auth::user()->role == 'librarian')
      <li class="treeview">
          <a href="#">
              <i class="fa fa-dashboard"></i> <span>@lang('Manage Library')</span>
              <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
              <li>
                  <a class="dropdown-item" href="{{url('users/'.Auth::user()->school->code.'/librarian')}}"><i class="fa fa-address-book-o"></i>
                      <span>@lang('Librarian List')</span></a>
              </li>
              <li>
                  <a class="dropdown-item" href="{{ route('library.books.index') }}"><i class="fa fa-address-book-o"></i>
                      <span>@lang('All Books')</span></a>
              </li>
              <li>
                  <a class="dropdown-item" href="{{ url('library/issued-books') }}"><i class="fa fa-address-book-o"></i>
                      <span>@lang('All Issued Books')</span></a>
              </li>
              <li>
                  <a class="dropdown-item" href="{{ url('library/issue-books') }}"><i class="fa fa-address-book-o"></i> <span
                          >@lang('Issue Book')</span></a>
              </li>
              <li>
                  <a class="dropdown-item" href="{{ route('library.books.create') }}"><i class="fa fa-address-book-o"></i> <span
                          class="nav-link-text">@lang('Add New Book')</span></a>
              </li>
          </ul>
      </li>
  @endif
  @if(Auth::user()->role == 'teacher')
  <li>
      <a class="nav-link" href="{{ url('courses/'.Auth::user()->id.'/0') }}"><i class="fa fa-address-book-o"></i>
          <span>@lang('My Courses')</span></a>
  </li>
  @endif
