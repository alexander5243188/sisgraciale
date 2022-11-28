

<nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="dropdown">
                        <!-------------------------------------------ALMACEN -->
                        <button class="btn dropdown-toggle button-inventario" type="button" id="inventario_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            ALMACEN
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="inventario_Menu">
                        @can('categoria_pagina')
                            <li>
                                <a href="{{url('categories')}}" class="dropdown-item" data-active="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                    <span>Categorias</span>
                                </a>
                            </li>
                        @endcan
                        @can('producto_pagina')
                            <li>
                                <a href="{{ url('products') }}" class="dropdown-item" data-active="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                                    <span>Artículos</span>
                                </a>            
                            </li>
                        @endcan
                        @can('marca_pagina')
                            <li>                                      
                                <a href="{{url('brands')}}"  class="dropdown-item" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Marca</span>
                                </a>
                            </li>
                        @endcan                          
                        </ul>
                    </div>
                    <!-------------------------------------------COMPRAS -->                    
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle button-compras" type="button" id="compras_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            COMPRAS
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="compras_Menu">  
                            <li>
                                <a href=""  class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>                
                                    <span>Ingresos</span>
                                </a>                               
                            </li>
                            @can('roles_pagina')  
                            <li>
                                <a href="{{url('wholesalers')}}"  class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>                
                                    <span>Proveedores</span>
                                </a>                               
                            </li>
                        @endcan
                        </ul>                        
                    </div>
                    <!-------------------------------------------VENTAS -->
                    <div class="dropdown">                        
                        <button class="btn dropdown-toggle button-compras" type="button" id="compras_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            VENTAS
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="_Menu">                        
                            <li>
                                <a href="" class="dropdown-item" data-active="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                    <span>Ventas</span>
                                </a>
                            </li>                                                  
                            <li>
                                <a href="" class="dropdown-item" data-active="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                    <span>Cliente</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-------------------------------------------ACCESO -->
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle button-usuario" type="button" id="usuario_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            ACCESO
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="usuario_Menu">
                            <li>
                                <a href="{{ url('users') }}" class="dropdown-item" data-active="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    <span>Usuarios</span>
                                </a>
                            </li>
                            <!--
                            <li>
                                <a href="{{ url('permisos') }}" class="dropdown-item" data-active="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Lista de Permisos</span>
                                </a>  
                            </li> -->
                            <li>
                                <a href="{{ url('asignar') }}" class="dropdown-item text-danger" data-active="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    <span>Asignar permisos</span>
                                </a>            
                            </li>
                            <!--
                            <li>
                                <a href="{{ url('roles') }}" class="dropdown-item" data-active="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                    <span>Roles</span>
                                </a>
                            </li> -->
                           
                        </ul>
                    </div>
                    <!-------------------------------------------REPORTES -->
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle button-reportes" type="button" id="reportes_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            Reportes
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="reportes_Menu">
                            <li>                                
                                <a href="#"  class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Reporte ingresos</span>
                                </a>            
                            </li>
                            <li>                                
                                <a href="#"  class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Reporte ventas</span>
                                </a>            
                            </li>
                            
                            <!--
                            <li>
                                <a href="{{url('iva')}}"  class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Iva</span>
                                </a>            
                            </li> -->
                           <!--
                            <li>
                                <a href="{{url('alert')}}"  class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Alerta cantidad</span>
                                </a>            
                            </li> -->
                          <!--
                            <li>
                                <a href="{{ url('coins') }}" class="dropdown-item" data-active="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-stop-circle"><circle cx="12" cy="12" r="10"></circle><rect x="9" y="9" width="6" height="6"></rect></svg>
                                    <span>Denominaciones</span>
                                </a>
                            </li> -->
                           
                            <!--
                            <li>
                                <a href="{{url('country')}}"  class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>País</span>
                                </a>
                            <li> -->
                            
                            <!--
                            <li>
                                <a href="{{url('department')}}"  class="dropdown-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Departamentos</span>
                                </a>
                            </li>  -->
                           
                            <!-- <li>                
                                <a href="{{url('alert')}}"  class="dropdown-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Alerta de inventario</span>
                                </a>
                            </li> -->
                                                   
                        </ul>
                    </div>
                    <!-------------------------------------------AYUDA -->
                    <div class="dropdown">                        
                        <button class="btn dropdown-toggle button-inventario" type="button" id="inventario_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            AYUDA
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="inventario_Menu">                        
                            <li>
                                <a href="#" class="dropdown-item" data-active="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                    <span>Categorias</span>
                                </a>
                            </li>                                                  
                        </ul>
                    </div>              
                </div> 
                @include('livewire.dash.scriptmenu')
            </nav>
<div>  

    <div class="row layout-top-spacing mt-5">

        <div class="col-sm-12 col-md-6">
            <div class="widget widget-chart-one">
                <h4 class="p-3 text-center text-theme-1 font-bold">MAS VENDIDOS</h4>
                <div id="chartTop5">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="widget widget-chart-one">
                <h4 class="p-3 text-center text-theme-1 font-bold">VENTAS DE LA SEMANA</h4>
                <div id="areaChart">
                </div>
            </div>


        </div>
    </div>
    
    <div class="row pt-5">
        <div class="col-sm-12 ">
            <div class="widget widget-chart-one">
                <h4 class="p-3 text-center text-theme-1 font-bold"> VENTAS ANUALES {{$year}}</h4>
                <div id="chartMonth">
                </div>
            </div>
        </div>
    </div>

    @include('livewire.dash.script')

</div>