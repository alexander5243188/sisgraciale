<div class="row sales layout-top-spacing">
    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{ $componentName }} </b>
                </h4>
                
                    <ul class="tabs tab-pills">
                        <li>
                            <a href="javascript:void(0)"
                                class="tabmenu btn "                            
                                id="button-add"                        
                                data-toggle="modal"
                                data-target="#theModal"
                                title="Actualizar">Agregar
                            </a>
                        </li>
                    </ul>
                
            </div>
            @can('alerta_buscar')
                @include('common.searchbox')
            @endcan
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table striped mt-1">
                        <thead class="text-white" id="table-head">
                            <tr>
                                <th class="table-th text-white">ALERTA INVENTARIO</th>
                                <th class="table-th text-white text-center"></th>
                                @can('alerta_actualizar')
                                    <th class="table-th text-white text-center">ACCIONES</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $alert)
                                <tr>
                                    <td><h6>{{ $alert->name }}</h6></td>
                                    <td class="text-center">

                                    </td>
                                    <td class="text-center">
                                        @can('alerta_editar')
                                            <a 
                                                href="javascript:void(0)" 
                                                wire:click="Edit({{ $alert->id }})"
                                                class="btn mtmobile" 
                                                id = "button-edit"
                                                title="EDITAR VALOR ALERTA">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        @endcan
                                        @can('alerta_eliminar')
                                            <a                                            
                                                href="javascript:void(0)"                                            
                                                class="btn btn-danger"
                                                title="ELIMINAR">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->links()}}
                </div>
            </div>
        </div>
    </div>     
     @include('livewire.alert.form') 
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        window.livewire.on('alert-show-modal', msg => {
            $('#theModal').modal('show')
        });
        window.livewire.on('alert-updated-modal', msg => {
            $('#theModal').modal('hide')
        });
        window.livewire.on('alert-added-modal', msg => {
            $('#theModal').modal('hide')
        });
        window.livewire.on('modal-show', msg => {
            $('#theModal').modal('show')
        });
        window.livewire.on('modal-hide', msg => {
            $('#theModal').modal('hide')
        });

    });



</script>
