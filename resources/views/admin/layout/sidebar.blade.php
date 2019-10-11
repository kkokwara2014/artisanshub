<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('user_images',$user->userimage)}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->lastname.' '.Auth::user()->firstname}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li>

        <a href="{{route('dashboard.index')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            {{-- <i class="fa fa-angle-left pull-right"></i> --}}
          </span>
        </a>

      </li>

      <li><a href="{{route('user.profile')}}"><i class="fa fa-picture-o"></i> My Profile</a></li>
      <li><a href="{{route('comment.index')}}"><i class="fa fa-comment-o"></i> Comments</a></li>

      {{-- only for the Admin and Project Coordinator --}}
      @if (Auth::user()->role->id==1||Auth::user()->role->id==2)
      <li><a href="{{route('department.index')}}"><i class="fa fa-university"></i> Department</a></li>
      <li><a href="{{route('classlevel.index')}}"><i class="fa fa-th"></i> Class Level</a></li>
      @endif

      @if (Auth::user()->role->id==4||Auth::user()->role->id==1||Auth::user()->role->id==2)

      <li><a href="{{route('student.index')}}"><i class="fa fa-users"></i> Students</a></li>

      <li><a href="{{route('project.index')}}"><i class="fa fa-file-text-o"></i> Unallocated Projects</a></li>


      {{-- Only Admin and Project Coordinator --}}
      {{-- @if (Auth::user()->role->id==1||Auth::user()->role->id==2) --}}
      <li><a href="{{route('project.allocated')}}"><i class="fa fa-exchange"></i> Allocated Projects</a></li>
      {{-- @endif --}}
      @endif



      {{-- Only Admin, Project Coordinator and Supervisor --}}
      @if (Auth::user()->role->id==1 || Auth::user()->role->id==2||Auth::user()->role->id==3)
      <li><a href="{{route('supervisor.index')}}"><i class="fa fa-graduation-cap"></i> Supervisors</a></li>
      @endif
      {{-- Only Admin and Project Coordinator --}}
      @if (Auth::user()->role->id==1 || Auth::user()->role->id==2)
      <li><a href="{{route('projectcoordinator.index')}}"><i class="fa fa-user"></i> Project Coordinators</a></li>
      @endif

      {{-- Only for Admin --}}
      @if (Auth::user()->role->id==1)
      <li><a href="{{route('admin.admins')}}"><i class="fa fa-user-plus"></i> Admins</a></li>
      @endif

      <li>
        <form id="logout-user" style="display: none" action="{{ route('user.logout') }}" method="post">
          {{ csrf_field() }}
        </form>
        <a href="" onclick="
        if (confirm('Are you sure you want to logout?')) {
            event.preventDefault();
        document.getElementById('logout-user').submit();
        } else {
            event.preventDefault();
        }">
          <i class="fa fa-sign-out"></i> Logout
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>