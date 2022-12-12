<div class="sidebar-wrapper sidebar-theme">
    <nav id="compactSidebar">

        <ul class="menu-categories">
        
        @can('panel_Administrativo_pagina')
        <li class="active">
            <a href="{{url('dash')}}" class="menu-toggle" data-active="true">
                <div class="base-menu">
                    <div class="base-icons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                    </div>
                    <span>ADMIN</span>
                </div>
            </a>
        </li>
        @endcan
        @can('almacen_pagina')
            <li class="">
                <a href="{{ url('almacen') }}" class="menu-toggle" data-active="false">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                        </div>
                        <span>Almacen</span>
                    </div>
                </a>
            </li>
        @endcan

            @can('producto_pagina')
            <li class="">
                <a href="{{ url('products') }}" class="menu-toggle" data-active="false">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                        </div>
                        <span>PRODUCTOS</span>
                    </div>
                </a>
            </li>
            @endcan

            @can('producto_pagina')
            <li class="">
                <a href="{{ url('proveedor') }}" class="menu-toggle" data-active="false">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                        </div>
                        <span>PROVEEDOR</span>
                    </div>
                </a>
            </li>
            @endcan

            @can('venta_pagina')
            <li class="">
                <a href="{{ url('pos') }}" class="menu-toggle" data-active="false">
                    <div class="base-menu">
                        <div class="base-icons">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                       </div>
                       <span>VENTAS</span>
                   </div>
               </a>
           </li>
           @endcan

@can('arqueo_pagina')
<li class="">
    <a href="{{url('cashout')}}" class="menu-toggle" data-active="false">
        <div class="base-menu">
            <div class="base-icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
            <span>ARQUEOS</span>
        </div>
    </a>
</li>
@endcan

@can('reporte_ventas_pagina')
<li class="">
    <a href="{{url('reports')}}" class="menu-toggle" data-active="false">
        <div class="base-menu">
            <div class="base-icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
            </div>
            <span>REPORTES VENTAS</span>
        </div>
    </a>
</li>
@endcan

@can('reporte_almacen_pagina')
<li class="">
    <a href="{{url('reportalmacen')}}" class="menu-toggle" data-active="false">
        <div class="base-menu">
            <div class="base-icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
            </div>
            <span>REPORTES ALMACEN</span>
        </div>
    </a>
</li>
@endcan
</ul>



</nav>
</div>

<div id="compact_submenuSidebar" class="submenu-sidebar" style="display: none!important">
</div>