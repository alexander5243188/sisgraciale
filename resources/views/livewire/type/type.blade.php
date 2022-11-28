<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{ $componentName }} </b>
                </h4>
                @can('tipo_denominacion_crear')
                    <ul class="tabs tab-pills">
                        <li>
                            <a href="javascript:void(0)"
                                class="tabmenu btn "                            
                                id="button-add"                        
                                data-toggle="modal"
                                data-target="#theModal"
                                title="No se puede agregar otra denominacion">Agregar
                            </a>
                        </li>
                    </ul>
                @endcan
            </div>
            @can('tipo_denominacion_buscar')
                @include('common.searchbox')
            @endcan
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table striped mt-1">
                        <thead class="text-white" id="table-head">
                            <tr>
                                <th class="table-th text-white">DENOMINACIÓN</th>                                                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $denomination)
                                <tr>
                                    <td><h6>{{ $denomination->name }}</h6></td>                                 
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links()}}
                </div>
            </div>
        </div>
    </div>   
        
      
</div>
<script>
    document.addEventListener('DOMContentLoaded', function(){});
 
</script>
