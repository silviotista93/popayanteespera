<li class="nav-small-cap">--- PERSONAL</li>
<li><a class="waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false"><i
                class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
<li>
@if(auth()->user()->hasRole('Empresario'))
<li><a class="waves-effect waves-dark" href="{{route('sitiosEmpresario')}}" aria-expanded="false"><i
                class="icon-speedometer"></i><span class="hide-menu">Empresas</span></a></li>
@endif
{{--
<li>
    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                class="ti-layout-grid2"></i><span class="hide-menu">Agregar Servicio</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="app-calendar.html">Hoteles</a></li>
        <li><a href="">Restaurantes</a></li>
        <li><a href="app-ticket.html">Tours</a></li>
        <li><a href="app-contact.html">Eventos</a></li>
    </ul>
</li>
--}}
@if(auth()->user()->hasRole('Administrador'))
<li>
    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                class="ti-layout-grid2"></i><span class="hide-menu">Empresario</span></a>
    <ul aria-expanded="false" class="collapse">
        <li><a href="{{route('addEmpresa')}}">Add Empresario</a></li>
        <li><a href="{{route('allEmpresarios')}}">All Empresarios</a></li>
    </ul>
</li>
@endif