<li class="side-menus {{ Request::is('reporte') ? 'active' : '' }} {{ Request::is('reporte/*') ? 'active' : '' }}" 
aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle "  href="{{ url('reporte') }}">
        <i class="fas fa-flag"></i><span>- Reportes</span>
    </a>
</li>

{{-- <li class="side-menus {{ Request::is('tipo-alquiler') ? 'active' : '' }}{{ Request::is('tipo-alquiler/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('tipo-alquiler') }}">
        <i class=" fas fa-building"></i><span>-Alquiler</span>
    </a>
   
</li> --}}

<li class="side-menus {{ Request::is('alumno') ? 'active' : '' }}{{ Request::is('alumno/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('alumno') }}">
        <i class=" fas fa-user"></i><span>-Alumno</span>
    </a>
   
</li>


<li class="side-menus {{ Request::is('profesor') ? 'active' : '' }}{{ Request::is('profesor/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('profesor') }}">
        <i class=" fas fa-user"></i><span>-Profesor</span>
    </a>
   
</li>

<li class="side-menus {{ Request::is('materia') ? 'active' : '' }}{{ Request::is('materia/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('materia') }}">
        <i class=" fas fa-user"></i><span>-Materia</span>
    </a>
   
</li>

<li class="side-menus {{ Request::is('nivel') ? 'active' : '' }}{{ Request::is('nivel/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('nivel') }}">
        <i class=" fas fa-user"></i><span>-Nivel</span>
    </a>
</li>

<li class="side-menus {{ Request::is('inscripcion') ? 'active' : '' }}{{ Request::is('inscripcion/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('inscripcion') }}">
        <i class=" fas fa-user"></i><span>-Inscripcion</span>
    </a>
</li>
<li class="side-menus {{ Request::is('curso') ? 'active' : '' }}{{ Request::is('curso/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('curso') }}">
        <i class=" fas fa-user"></i><span>-Curso</span>
    </a>
</li>

{{-- <li class="side-menus {{ Request::is('mascota') ? 'active' : '' }}{{ Request::is('masocta/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('mascota') }}">
        <i class=" fas fa-dog "></i><span>-Mascota</span>
    </a>
</li> --}}

