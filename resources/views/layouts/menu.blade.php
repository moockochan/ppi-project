{!! csrf_field() !!}
<ul class='sidebar-menu'>
    <li class="treeview {{ Request::is('users*') ? 'active' : '' }} {{ Request::is('roles*') ? 'active' : '' }} {{ Request::is('userOnRoles*') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-gear"></i> MASTER</a>
        <ul class='treeview-menu'>
          <li class="{{ Request::is('users*') ? 'active' : '' }}">
              <a href="{!! route('users.index') !!}"><i class="fa fa-angle-double-right"></i><span>KELOLA USER</span></a>
          </li>
          <li class="{{ Request::is('roles*') ? 'active' : '' }}">
              <a href="{!! route('roles.index') !!}"><i class="fa fa-angle-double-right"></i><span>KELOLA GRUP ROLES</span></a>
          </li>

          <li class="{{ Request::is('userOnRoles*') ? 'active' : '' }}">
              <a href="{!! route('userOnRoles.index') !!}"><i class="fa fa-angle-double-right"></i><span>KELOLA USER ROLES</span></a>
          </li>
        </ul>
    </li>
    <li class="treeview {{ Request::is('pemantauanIloRis*') ? 'active' : '' }} {{ Request::is('pemantauanIloRjs*') ? 'active' : '' }}
                        {{ Request::is('pemantauanVentilators*') ? 'active' : '' }} {{ Request::is('pemantauanIsks*') ? 'active' : '' }}
                        {{ Request::is('pemantauanIadpPhlebitis*') ? 'active' : '' }} {{ Request::is('pemantauanHaps*') ? 'active' : '' }}
                        {{ Request::is('pemantauanDecubituses*') ? 'active' : '' }}">
        <a href="#"><i class="fa fa-th-large"></i> DATA</a>
        <ul class='treeview-menu'>
          <li class="{{ Request::is('pemantauanIloRis*') ? 'active' : '' }}">
              <a href="{!! route('pemantauanIloRis.index') !!}"><i class="fa fa-angle-double-right"></i><span>PEMANTAUAN ILO</span></a>
          </li>
          <li class="{{ Request::is('pemantauanIloRjs*') ? 'active' : '' }}">
              <a href="{!! route('pemantauanIloRjs.index') !!}"><i class="fa fa-angle-double-right"></i><span>PEMANTAUAN ILO RJ</span></a>
          </li>
          <li class="{{ Request::is('pemantauanVentilators*') ? 'active' : '' }}">
              <a href="{!! route('pemantauanVentilators.index') !!}"><i class="fa fa-angle-double-right"></i><span>PEMANTAUAN VENTILATOR AP</span></a>
          </li>
          <li class="{{ Request::is('pemantauanIsks*') ? 'active' : '' }}">
              <a href="{!! route('pemantauanIsks.index') !!}"><i class="fa fa-angle-double-right"></i><span>PEMANTAUAN ISK</span></a>
          </li>
          <li class="{{ Request::is('pemantauanIadpPhlebitis*') ? 'active' : '' }}">
              <a href="{!! route('pemantauanIadpPhlebitis.index') !!}"><i class="fa fa-angle-double-right"></i><span>PEMANTAUAN IADP-PHLEBITIS</span></a>
          </li>
          <li class="{{ Request::is('pemantauanHaps*') ? 'active' : '' }}">
              <a href="{!! route('pemantauanHaps.index') !!}"><i class="fa fa-angle-double-right"></i><span>PEMANTAUAN HAP<br> PASIEN BED REST</span></a>
          </li>
          <li class="{{ Request::is('pemantauanDecubituses*') ? 'active' : '' }}">
              <a href="{!! route('pemantauanDecubituses.index') !!}"><i class="fa fa-angle-double-right"></i><span>PEMANTUAN DECUBITUS<br> PASIEN BED REST</span></a>
          </li>
        </ul>
    </li>
</ul>
