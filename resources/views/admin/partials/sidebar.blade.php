<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">Office 365</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.speak_up' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.speak_up') }}"><i class="fa fa-podcast"></i> <span>Speak Up</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.test' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.test') }}"><i class="fa fa-book"></i> <span>Knowledge Tests</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.courses' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.courses') }}"><i class="fa fa-list-alt"></i> <span>Courses</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.note_side' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.note_side') }}"><i class="fa fa-crosshairs"></i> <span>Notification sidebar</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.request' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.request') }}"><i class="fa fa-question"></i> <span>Requests</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.notification' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.notification') }}"><i class="fa fa-info-circle"></i> <span>Notifications</span></a></li>
       @if(Auth::user()->can('manage-users'))
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif
      <li class="{{ Request::route()->getName() == 'admin.analytics' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.analytics') }}"><i class="fa fa-signal"></i> <span>Analytics</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.setting' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.setting') }}"><i class="fa fa-cog"></i> <span>Setup Wizard</span></a></li>
     
    </ul>
</aside>
