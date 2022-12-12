

<nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="dropdown">
                        <!-------------------------------------------ALMACEN -->
                        @can('boton_almacen_menu')
                        <button style="background: #023E8A!important;" class="btn dropdown-toggle button-inventario btn-dark" type="button" id="inventario_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            PRODUCTOS
                        </button>
                        @endcan 
                        <ul class="dropdown-menu" aria-labelledby="inventario_Menu">
                        @can('categoria_pagina_menu')
                            <li>
                                <a href="{{url('categories')}}" class="dropdown-item" data-active="true"> 
                                                               
                                    <h6><i class="fas fa-bookmark"></i> Categorias</h6>
                                </a>
                            </li>
                        @endcan                        
                        @can('marca_pagina_menu')
                            <li>                                      
                                <a href="{{url('brands')}}"  class="dropdown-item" >                                   
                                    <h6><i class="fas fa-bookmark"></i> Marcas</h6>
                                </a>
                            </li>
                        @endcan    
                        @can('producto_pagina_menu')
                            <li>
                                <a href="{{ url('products') }}" class="dropdown-item" data-active="false">                                    
                                    <h6><i class="fas fa-bookmark"></i> Productos</h6>
                                </a>            
                            </li>
                        @endcan                      
                        </ul>
                        
                    </div>
                    <!-------------------------------------------COMPRAS -->                    
                    <div class="dropdown">
                        @can('boton_compras_menu')
                        <button style="background: #023E8A!important;" class="btn  dropdown-toggle button-compras btn-dark" type="button" id="compras_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            COMPRAS
                        </button>
                        @endcan 
                        <ul class="dropdown-menu" aria-labelledby="compras_Menu">                            
                            @can('proveedor_pagina_menu')  
                            <li>
                                <a href="{{url('proveedor')}}"  class="dropdown-item">                                
                                    <h6><i class="fas fa-bookmark"></i> Proveedores</h6>
                                </a>                               
                            </li>
                        @endcan
                        </ul>                        
                    </div>
                    <!-------------------------------------------VENTAS -->
                    <div class="dropdown">
                        @can('boton_ventas_menu')                        
                        <button style="background: #023E8A!important;" class="btn dropdown-toggle button-compras btn-dark" type="button" id="compras_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            VENTAS
                        </button>
                        @endcan 
                        <ul class="dropdown-menu" aria-labelledby="_Menu"> 
                            @can('cliente_pagina_menu')                       
                            <li>
                                <a href="{{url('client')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Cliente</h6>
                                </a>
                            </li>
                            @endcan
                            
                            @can('arqueo_pagina_menu')
                            <li>
                                <a href="{{url('cashout')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Arqueo</h6>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </div>
                    <!-------------------------------------------ACCESO -->
                    <div class="dropdown">
                        @can('boton_acceso_menu')
                        <button style="background: #023E8A!important;" class="btn  dropdown-toggle button-usuario btn-dark" type="button" id="usuario_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            ACCESO
                        </button>
                        @endcan 
                        <ul class="dropdown-menu" aria-labelledby="usuario_Menu">
                            @can('usuarios_pagina_menu')
                            <li>
                                <a href="{{ url('users') }}" class="dropdown-item" data-active="false">                                    
                                    <h6><i class="fas fa-bookmark"></i> Usuarios</h6>
                                </a>
                            </li>
                            @endcan 
                            <!--
                            <li>
                                <a href="{{ url('permisos') }}" class="dropdown-item" data-active="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                    <span>Lista de Permisos</span>
                                </a>  
                            </li> -->
                            @can('permisos_pagina_menu')
                            <li>
                                <a href="{{ url('asignar') }}" class="dropdown-item text-danger" data-active="false">                                    
                                    <h6><i class="fas fa-bookmark"></i> Asignar permisos</h6>
                                </a>            
                            </li>
                            @endcan 
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
                        @can('boton_reporte_menu')
                        <button style="background: #023E8A!important;" class="btn  dropdown-toggle button-reportes btn-dark" type="button" id="reportes_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            Reportes
                        </button>
                        @endcan 
                        <ul class="dropdown-menu" aria-labelledby="reportes_Menu">
                            @can('reporte_almacen_pagina_menu')
                            <li>                                
                                <a href="reportalmacen"  class="dropdown-item">                                    
                                    <h6><i class="fas fa-bookmark"></i> Reporte almacen</h6>
                                </a>            
                            </li>
                            @endcan
                            @can('reporte_ventas_pagina_menu')
                            <li>                                
                                <a href="reports"  class="dropdown-item">                                    
                                    <h6> <i class="fas fa-bookmark"></i> Reporte ventas</h6>
                                </a>            
                            </li>
                            @endcan
                            
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
                        @can('boton_herramienta_menu')                       
                        <button style="background: #023E8A!important;" class="btn dropdown-toggle button-inventario btn-dark" type="button" id="inventario_Menu" data-bs-toggle="dropdown" aria-expanded="false">
                            HERRAMIENTAS
                        </button>
                        @endcan                         
                        <ul class="dropdown-menu" aria-labelledby="inventario_Menu">                        
                            @can('pagina_ayuda_menu')
                            <li>
                                <a href="#" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Ayuda</h6>
                                </a>
                            </li>
                            @endcan                                      
                      
                        <!-------------------------------------------------------------------------->
                            @can('alerta_pagina_menu')            
                            <li>
                                <a href="{{url('alert')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Alertas</h6>
                                </a>
                            </li>
                            @endcan                                    
                        
                        <!-------------------------------------------------------------------------->
                            @can('graciale')        
                            <li>
                                <a href="{{url('asignar')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Asignar</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!-------------------------------------------------------------------------->
                               @can('graciale')           
                            <li>
                                <a href="{{url('client')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Cliente</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!-------------------------------------------------------------------------->
                        @can('denominaciones_pagina_menu')       
                            <li>
                                <a href="{{url('coins')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Denominaciones</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!-------------------------------------------------------------------------->
                        @can('graciale')            
                            <li>
                                <a href="{{url('department')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Departamentos</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!------------------------------------------------------------------------->
                        @can('graciale') 
                            <li>
                                <a href="{{url('iva')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Iva</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!------------------------------------------------------------------------->
                            @can('graciale')      
                            <li>
                                <a href="{{url('permisos')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Permisos</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!------------------------------------------------------------------------->
                        @can('graciale')
                            <li>
                                <a href="{{url('roles')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Roles</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!------------------------------------------------------------------------->
                        @can('graciale')
                            <li>
                                <a href="{{url('status')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Estados</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!------------------------------------------------------------------------->
                        @can('graciale')      
                            <li>
                                <a href="{{url('type')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Tipos</h6>
                                </a>
                            </li>                                                  
                            @endcan
                        <!------------------------------------------------------------------------->
                        @can('graciale')
                            <li>
                                <a href="{{url('wholesalers')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Mayoristas</h6>
                                </a>
                            </li>
                            @endcan
                            <!------------------------------------------------------------------------->
                            @can('graciale')
                            <li>
                                <a href="{{url('barcode')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Barcode</h6>
                                </a>
                            </li>  
                            @endcan
                            <!------------------------------------------------------------------------->
                            @can('graciale')     
                            <li>
                                <a href="{{url('ingreso')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> Ingreso</h6>
                                </a>
                            </li> 
                            @endcan
                            <!------------------------------------------------------------------------->
                            @can('pais_pagina_menu')
                            <li>
                                <a href="{{url('country')}}" class="dropdown-item" data-active="true">                                    
                                    <h6><i class="fas fa-bookmark"></i> País</h6>
                                </a>
                            </li> 
                            @endcan
                        </ul>
                        <!------------------------------------------------------------------------->

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