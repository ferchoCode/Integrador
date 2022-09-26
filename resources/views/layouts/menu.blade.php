{{-- <li>
    <a class="side-menus {{ Request::is('activos fijos') || Request::is('area') ? 'collapse active' : 'collapsed' }} "
        type="button" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Activos Fijos</span>
        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <ul class="collapse {{ Request::is('activos fijos') ? 'show' : '' }} 
                        {{ Request::is('categoria') ? 'show' : '' }}
                        {{ Request::is('activo') ? 'show' : '' }} 
                        {{ Request::is('area') ? 'show' : '' }}
                        {{ Request::is('responsable') ? 'show' : '' }}"
        id="dropdown-example">
        <li class="side-menus {{ Request::is('categoria') ? 'active' : '' }} {{ Request::is('categoria/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a class="flex items-center p-2 pl-15 w-full text-base font-normal text-gray-900  transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                href="#">
                <span>Categoria</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('activo') ? 'active' : '' }} {{ Request::is('activo/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a class="flex items-center p-2 pl-15 w-full text-base font-normal text-gray-900  transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                href="#">
                <span>Activo</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('area') ? 'active' : '' }} {{ Request::is('area/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a href="#"
                class="flex items-center p-2 pl-15 w-full text-base font-normal text-gray-900  transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Area</a>
        </li>
        <li
            class="side-menus {{ Request::is('responsable') ? 'active' : '' }} {{ Request::is('responsable/*') ? 'active' : '' }}">
            <a href="#"
                class="flex items-center p-2 pl-15 w-full text-base font-normal text-gray-900  transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Responsable</a>
        </li>
    </ul>
</li> --}}

<li>
    <a class="side-menus {{ Request::is('activos fijos') ? 'collapse active' : 'collapsed' }} "
        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" type="button">
        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 transition duration-75" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Activos Fijos</span>
        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <ul id="dropdown-example"
        class="side-menu {{ Request::is('activos fijos') ? 'show' : '' }} {{ Request::is('area') ? 'show' : '' }}">
        {{-- <li class="side-menus {{ Request::is('categoria') ? 'active' : '' }} {{ Request::is('categoria/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a href="#">
             <span class="flex-1 ml-5 text-left whitespace-nowrap">Categoria</span>
            </a>
        </li> --}}
        <li class="side-menus {{ Request::is('act_fijo') ? 'active' : '' }} 
                                {{ Request::is('act_fijo/*') ? 'active' : '' }}
                                {{ Request::is('act_actualizacion') ? 'active' : '' }} ,
                                {{ Request::is('act_actualizacion/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a href="{{ url('act_fijo') }}">
                <span class="flex-1 ml-5 text-left whitespace-nowrap">Activo</span>
            </a>
        </li>
        {{-- <li class="side-menus {{ Request::is('area') ? 'active' :''}} {{ Request::is('area/*') ? 'active' :''}}"
             aria-haspopup="true" data-menu-toggle="hover" >
            <a href="{{ url('area') }}">
                <span class="flex-1 ml-5 text-left whitespace-nowrap">Area</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('responsable') ? 'active' : '' }} {{ Request::is('responsable/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a href="#">
             <span class="flex-1 ml-5 text-left whitespace-nowrap">Responsable</span>
            </a>
        </li> --}}
    </ul>
</li>


<li>
    <a type="button" class="side-menus {{ Request::is('credito') ? 'collapse active' : 'collapsed' }} "
        aria-controls="dropdown-example4" data-collapse-toggle="dropdown-example4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="flex-shrink-0 w-6 h-6 transition duration-75" viewBox="0 0 20 20">
            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
            <path
                d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
        </svg>
        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Credito</span>
        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>
    <ul id="dropdown-example4"
        class="side-menu {{ Request::is('cre_cuenta_credito') ? 'show' : '' }} {{ Request::is('cre_cuenta_credito') ? 'show' : '' }}">

        <li class="side-menus {{ Request::is('credito') ? 'active' : '' }},
             {{ Request::is('credito/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a href="{{ url('credito') }}">
                <span class="flex-1 ml-5 text-left whitespace-nowrap">Credito</span>
            </a>
        </li>
        <li class="side-menus {{ Request::is('cre_cuenta_credito') ? 'active' : '' }},
        {{ Request::is('cre_cuenta_credito/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a href="{{ url('cre_cuenta_credito') }}">
                <span class="flex-1 ml-5 text-left whitespace-nowrap">CxC Credito</span>
            </a>
        </li>
        {{-- <li class="side-menus {{ Request::is('banco') ? 'active' : '' }} {{ Request::is('banco/*') ? 'active' : '' }}"
            aria-haspopup="true" data-menu-toggle="hover">
            <a href="#" class="flex-1 ml-5 text-left whitespace-nowrap">
                <span>Banco</span>
            </a>
        </li> --}}

    </ul>
</li>




{{-- <li>
    <a type="button" aria-controls="dropdown-example3" data-collapse-toggle="dropdown-example3">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M2 8v4.001h1V18H2v3h16l3 .001V21h1v-3h-1v-5.999h1V8L12 2 2 8zm4 10v-5.999h2V18H6zm5 0v-5.999h2V18h-2zm7 0h-2v-5.999h2V18zM14 8a2 2 0 1 1-4.001-.001A2 2 0 0 1 14 8z">
            </path>
        </svg>
        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Banco</span>
        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <ul id="dropdown-example3" class="hidden py-2 space-y-2">
        <li>
            <a href="#"
                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900  transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
        </li>
        <li>
            <a href="#"
                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900  transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
        </li>
        <li>
            <a href="#"
                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900  transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
        </li>
    </ul>
</li> --}}



{{-- <li class="menu-item menu-item-submenu
{{ Request::is('reporte') ? 'menu-item-open' : '' }} {{ Request::is('reporte/*') ? 'menu-item-open' : '' }}
    {{ Request::is('act_area') ? 'menu-item-open' : '' }}
    {{ Request::is('act_area/*') ? 'menu-item-open' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a href="javascript:;" class="menu-link menu-toggle">
        <span class="svg-icon menu-icon">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
            <svg xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path
                        d="M10.8226874,8.36941377 L12.7324324,9.82298668 C13.4112512,8.93113547 14.4592942,8.4 15.6,8.4 C17.5882251,8.4 19.2,10.0117749 19.2,12 C19.2,13.9882251 17.5882251,15.6 15.6,15.6 C14.5814697,15.6 13.6363389,15.1780547 12.9574041,14.4447676 L11.1963369,16.075302 C12.2923051,17.2590082 13.8596186,18 15.6,18 C18.9137085,18 21.6,15.3137085 21.6,12 C21.6,8.6862915 18.9137085,6 15.6,6 C13.6507856,6 11.9186648,6.9294879 10.8226874,8.36941377 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    <path
                        d="M8.4,18 C5.0862915,18 2.4,15.3137085 2.4,12 C2.4,8.6862915 5.0862915,6 8.4,6 C11.7137085,6 14.4,8.6862915 14.4,12 C14.4,15.3137085 11.7137085,18 8.4,18 Z"
                        fill="#000000" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <span class="menu-text">Alquiler</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            <li class="menu-item menu-item-parent" aria-haspopup="true">
                
                <span class="menu-link">
                    <span class="menu-text">ACTIVOS FIJOS</span>
                </span>
            </li>
                <li class="side-menus {{ Request::is('act_cat_activo_fijo') ? 'active' : '' }}{{ Request::is('act_cat_activo_fijo/*') ? 'active' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('act_cat_activo_fijo') }}" class="menu-link menu-toggle">
                        <span class="menu-text"><i class="fas fa-flag">
                        </i>  Categoria</span>
                    </a>
                </li>
                <li class="side-menus {{ Request::is('act_activo_fijo') ? 'active' : '' }}{{ Request::is('act_activo_fijo/*') ? 'active' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('act_activo_fijo') }}" class="menu-link menu-toggle">
                        <span class="menu-text"><i class="fas fa-flag">
                        </i>  Activo Fijo</span>
                    </a>
                </li>
                <li class="side-menus {{ Request::is('act_area') ? 'active' : '' }}{{ Request::is('act_area/*') ? 'active' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('act_area') }}" class="menu-link menu-toggle">
                        <span class="menu-text"><i class="fas fa-flag">
                        </i>  Area</span>
                    </a>
                </li>
                <li class="side-menus {{ Request::is('act_responsable') ? 'active' : '' }}{{ Request::is('act_responsable/*') ? 'active' : '' }}"
                    aria-haspopup="true" data-menu-toggle="hover">
                    <a href="{{ url('act_responsable') }}" class="menu-link menu-toggle">
                        <span class="menu-text"><i class="fas fa-flag">
                        </i>  Responsable</span>
                    </a>
                </li>
        </ul>
    </div>
</li> --}}

{{-- <li class="side-menus {{ Request::is('alumno') ? 'active' : '' }}{{ Request::is('alumno/*') ? 'active' : '' }}"
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
</li> --}}

{{-- <li class="side-menus {{ Request::is('mascota') ? 'active' : '' }}{{ Request::is('masocta/*') ? 'active' : '' }}"
    aria-haspopup="true" data-menu-toggle="hover">
    <a class="menu-link menu-toggle" href="{{ url('mascota') }}">
        <i class=" fas fa-dog "></i><span>-Mascota</span>
    </a>
</li> --}}
