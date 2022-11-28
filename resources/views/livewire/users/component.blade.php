<div class="row sales layout-top-spacing">

    <div class="col-sm-12">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>{{$componentNames}}</b>
                </h4>
                @can('usuario_crear')
                    <ul class="tabs tab-pills">
                        <li>
                            <a 
                                href="javascript:void(0)" 
                                class="tabmenu" 
                                id="button-add"
                                data-toggle="modal" 
                                data-target="#theModal"
                                title="Añadir nuevo usuario">
                                Agregar
                            </a>
                        </li>
                    </ul>
                @endcan
            </div>
            @can('usuario_buscar')
                @include('common.searchbox')
            @endcan

            <div class="widget-content">

                <div class="table-responsive">
                    <table class="table table-bordered table striped mt-1">
                        <thead class="text-white" id="table-head">
                            <tr>
                                <th class="table-th text-white">USUARIO</th>
                                <th class="table-th text-white text-center">TELÉFONO</th>
                                <th class="table-th text-white text-center">EMAIL</th>
                                <th class="table-th text-white text-center">ESTADO</th>
                                <th class="table-th text-white text-center">PERFIL</th>
                                <th class="table-th text-white text-center">IMÁGEN</th>
                                
                                    <th class="table-th text-white text-center">ACCIONES</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            <tr>
                                <td><h6>{{$r->name}}</h6></td>
                                
                                <td class="text-center"><h6>{{$r->phone}}</h6></td>
                                <td class="text-center"><h6>{{$r->email}}</h6></td>
                                <td class="text-center">
                                    <span class="badge {{ $r->status == 'ACTIVO' ? 'badge-success' : 'badge-danger' }} text-uppercase">{{$r->status}}</span>
                                </td>
                                <td class="text-center text-uppercase">
                                    <h6>{{$r->profile}}</h6>
                                    <small><b>Roles:</b>{{implode(',',$r->getRoleNames()->toArray())}}</small>
                                </td>

                                <td class="text-center">
                                 @if($r->image != null) 
                                 <img 
                                    class="card-img-top img-fluid"
                                    id="user-img"                                           
                                    src="{{ asset('storage/users/'.$r->image) }}"                                    
                                 > 
                                 @endif                                  
                             </td>

                             <td class="text-center">
                                @can('usuario_editar')
                                    <a 
                                        href="javascript:void(0)" 
                                        wire:click="edit({{$r->id}})"
                                        class="btn mtmobile" 
                                        id= "button-edit"
                                        title="Editar datos usuario">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                @endcan
                            
                            @can('usuario_eliminar')
                                @if(Auth()->user()->id != $r->id)
                                    <a 
                                        href="javascript:void(0)" 
                                        onclick="Confirm('{{$r->id}}')" 
                                        class="btn" 
                                        id= "button-delete"
                                        title="Eliminar usuario">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                @endif
                            @endcan

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$data->links()}}
    </div>

</div>


</div>


</div>
@if ($selected_id < 1)
		 @include('livewire.users.form')
    @else
        @include('livewire.users.data.form')
    @endif
</div>


<script>
    document.addEventListener('DOMContentLoaded', function(){
        window.livewire.on('user-added', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        })
        window.livewire.on('user-updated', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        })
        window.livewire.on('user-deleted', Msg => {           
            noty(Msg)
        })
        window.livewire.on('hide-modal', Msg => {           
            $('#theModal').modal('hide')
        })
        window.livewire.on('show-modal', Msg => {           
            $('#theModal').modal('show')
        })
        window.livewire.on('user-withsales', Msg => {           
            noty(Msg)
        })

    });

    function Confirm(id)
    {   

        swal({
            title: 'CONFIRMAR',
            text: '¿CONFIRMAS ELIMINAR EL REGISTRO?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar'
        }).then(function(result) {
            if(result.value){
                window.livewire.emit('deleteRow', id)
                swal.close()
            }

        })
    }
</script>