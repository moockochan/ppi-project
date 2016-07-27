{!! csrf_field() !!}
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('userOnRoles*') ? 'active' : '' }}">
    <a href="{!! route('userOnRoles.index') !!}"><i class="fa fa-edit"></i><span>UserOnRoles</span></a>
</li>
<li class="{{ Request::is('pemantauanIloRis*') ? 'active' : '' }}">
    <a href="{!! route('pemantauanIloRis.index') !!}"><i class="fa fa-edit"></i><span>PEMANTAUAN ILO</span></a>
</li>
