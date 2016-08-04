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
<li class="{{ Request::is('pemantauanIloRjs*') ? 'active' : '' }}">
    <a href="{!! route('pemantauanIloRjs.index') !!}"><i class="fa fa-edit"></i><span>PEMANTAUAN ILO RJ</span></a>
</li>
<li class="{{ Request::is('pemantauanVentilators*') ? 'active' : '' }}">
    <a href="{!! route('pemantauanVentilators.index') !!}"><i class="fa fa-edit"></i><span>PEMANTAUAN VENTILATOR AP</span></a>
</li>
<li class="{{ Request::is('pemantauanIsks*') ? 'active' : '' }}">
    <a href="{!! route('pemantauanIsks.index') !!}"><i class="fa fa-edit"></i><span>PEMANTAUAN ISK</span></a>
</li>
<li class="{{ Request::is('pemantauanIadpPhlebitis*') ? 'active' : '' }}">
    <a href="{!! route('pemantauanIadpPhlebitis.index') !!}"><i class="fa fa-edit"></i><span>PEMANTAUAN IADP-PHLEBITIS</span></a>
</li>
<li class="{{ Request::is('pemantauanHaps*') ? 'active' : '' }}">
    <a href="{!! route('pemantauanHaps.index') !!}"><i class="fa fa-edit"></i><span>PEMANTAUAN HAP<br> PASIEN BED REST</span></a>
</li>
<li class="{{ Request::is('pemantauanDecubituses*') ? 'active' : '' }}">
    <a href="{!! route('pemantauanDecubituses.index') !!}"><i class="fa fa-edit"></i><span>PEMANTUAN DECUBITUS<br> PASIEN BED REST</span></a>
</li>
