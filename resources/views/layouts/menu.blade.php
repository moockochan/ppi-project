<li class="treeview">
  <a href="#">
    <i class="fa fa-dashboard"></i> <span>MASTER</span> <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
      <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
      </li>
      <li class="{{ Request::is('roles*') ? 'active' : '' }}">
        <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
      </li>
  </ul>
</li>
