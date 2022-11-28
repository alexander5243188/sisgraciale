<div class="row sales layout-top-spacing">

	<div class="col-sm-12">
		<div class="widget widget-chart-one">
			<div class="widget-heading">
				<h4 class="card-title">
					<b>{{$componentNames}}  {{$pageTitle}}</b>
				</h4>
				<ul class="tabs tab-pills">

					<li>
						@can('categoria_importar')
							<a 
								href="{{url('import')}}" 
								class="tabmenu mr-3" 
								id="button-import"
								title="Importar datos">
								Importar
							</a>
						@endcan
						@can('categoria_crear')
							<a 
								href="javascript:void(0)" 
								class="tabmenu " 
								id="button-add" 
								data-toggle="modal" 
								data-target="#theModal"
								title="Crear una nueva categoria">
								Agregar
							</a>
						@endcan
					</li>
				</ul>
			</div>
			@can('categoria_buscar')
				@include('common.searchbox')
			@endcan
			<div class="widget-content">
				<div class="table-responsive">
					<table class="table table-bordered table striped mt-1">
						<thead class="text-white" id="table-head">
							<tr>
								<th class="table-th text-white">DESCRIPCIÓN</th>
								<th class="table-th text-white text-center">Quien registro</th>
								<th class="table-th text-white text-center">IMAGEN</th>
								
									<th class="table-th text-white text-center">ACCIONES</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
							<tr>
								<td><h6>{{$category->name}}</h6></td>
								<td>
									<h6>{{$category->user}}</h6>
								</td>
								<td class="text-center">
									<span>
										<img 
											src="{{ asset('storage/categories/' . $category->imagen) }}" 
											alt="imagen" 
											height="70" 
											width="80" 
											class="rounded">
									</span>
								</td>

								<td class="text-center">
									@can('categoria_editar')
										<a 
											href="javascript:void(0)" 
											wire:click="Edit({{$category->id}})" 
											id="button-edit" 
											class="btn mtmobile" 
											title="Editar categoria">
											<i class="fas fa-edit"></i>
										</a>
									@endcan
									@if($category->products->count() < 1 ) 
										@can('categoria_eliminar') 
											<a 
												href="javascript:void(0)" 
												id="button-delete" 
												onclick="Confirm('{{$category->id}}')" 
												class="btn " 
												title="Eliminar categoria">
												<i class="fas fa-trash"></i>
											</a>
										@endcan
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$categories->links()}}
				</div>
			</div>
		</div>
	</div>
	@if ($selected_id < 1)
		 @include('livewire.category.form')
    @else
        @include('livewire.category.data.form')
    @endif
</div>


<script>
	document.addEventListener('DOMContentLoaded', function() {

		window.livewire.on('show-modal', msg => {
			$('#theModal').modal('show')
		});
		window.livewire.on('category-added', msg => {
			$('#theModal').modal('hide')
		});
		window.livewire.on('category-updated', msg => {
			$('#theModal').modal('hide')
		});


	});



	function Confirm(id) {

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
			if (result.value) {
				window.livewire.emit('deleteRow', id)
				swal.close()
			}

		})
	}
</script>