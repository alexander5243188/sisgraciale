<div class="row sales layout-top-spacing">

	<div class="col-sm-12">
		<div class="widget widget-chart-one">
			<div class="widget-heading">
				<h4 class="card-title">
					<b>{{$componentNames }}</b>
				</h4>
				<ul class="tabs tab-pills">
					<li>
											
						@can('producto_crear')
						
							<a 
								href="javascript:void(0)" 
								class="tabmenu" 
								id="button-add"
								data-toggle="modal" 
								data-target="#theModal"
								title="Agregar un nuevo producto">
								Agregar
							</a> 
						@endcan
					</li>
				</ul>
			</div>
			@can('producto_buscar')
				@include('common.searchbox')
			@endcan
			<div class="widget-content">
				<div class="table-responsive">
					<table class="table table-bordered table striped mt-1">
						<thead class="text-white" id="table-head">
							<tr>
								
								<th class="table-th text-white">DESCRIPCION PRODUCTO</th>								
								<th class="table-th text-white text-center">CÓDIGO</th>
								<!-- <th class="table-th text-white text-center">CATEGORÍA</th> -->
								<th class="table-th text-white text-center">ESTANTE</th>
								<th class="table-th text-white text-center">NIVEL</th>
								<th class="table-th text-white text-center">PRECIO VENTA</th>
								<th class="table-th text-white text-center">STOCK</th>
								<th class="table-th text-white text-center">INV.MIN</th>
								<!-- <th class="table-th text-white text-center">Quien registro</th> -->
								<th class="table-th text-white text-center">IMAGEN</th>	
								<th class="table-th text-white text-center">COMPRA</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($data as $product)
							<tr>
								
								<td><h6 class="text-left">{{$product->name}}</h6></td>								
								<td><h6 class="text-center">{{$product->barcode}}</h6></td>
								<!-- <td><h6 class="text-center">{{$product->category}}</h6></td> -->
								<td><h6 class="text-center">{{$product->shelf}}</h6></td>
								<td><h6 class="text-center">{{$product->level}}</h6></td>
								<td><h6 class="text-center">{{$product->price}}</h6></td>
								<td>
									<h6 class="text-center {{$product->stock <= $product->alert ? 'text-danger' : '' }} ">
										{{$product->stock}}
									</h6>
								</td>
								<td><h6 class="text-center">{{$product->alert}}</h6></td>
								<!-- <td><h6 class="text-center">{{$product->user}}</h6></td> -->
								<td class="text-center">
									<span>
										<img src="{{ asset('storage/products/' . $product->imagen ) }}" alt="imagen de ejemplo" height="70" width="80" class="rounded">
									</span>
								</td>
								<td>
								<button 
											type="button" 
											wire:click.prevent="ScanCode('{{$product->barcode}}')" 
											class="btn"
											id="button-shopping"
											title="Añadir carrito">
											<i class="fas fa-shopping-cart"></i>
										</button>
								</td>
								<td class="text-center">
									@can('producto_editar')
									<!--
										<a 
											href="javascript:void(0)" 
											wire:click.prevent="Edit({{$product->id}})" 
											class="btn mtmobile" 
											id="button-edit"
											title="Editar producto">
											<i class="fas fa-edit"></i>
										</a> -->
									@endcan									
									@can('producto_eliminar')
										@if($product->ventas->count() < 1) 
										<!--
											<a 
												href="javascript:void(0)" 
												onclick="Confirm('{{$product->id}}')" 
												class="btn" 
												id="button-delete"
												title="Eliminar producto">
												<i class="fas fa-trash"></i>
											</a> -->
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
		 @include('livewire.products.form')
    @else
        @include('livewire.products.data.form')
    @endif
</div>


<script>
	document.addEventListener('DOMContentLoaded', function() {

		window.livewire.on('product-added', msg => {$('#theModal').modal('hide') });
		window.livewire.on('product-updated', msg => {$('#theModal').modal('hide')});
		window.livewire.on('product-deleted', msg => {// noty
		});
		window.livewire.on('modal-show', msg => {$('#theModal').modal('show')});
		window.livewire.on('modal-hide', msg => {$('#theModal').modal('hide')});
		window.livewire.on('hidden.bs.modal', msg => {$('.er').css('display', 'none')});
		$('#theModal').on('hidden.bs.modal', function(e) {$('.er').css('display', 'none')})
		$('#theModal').on('shown.bs.modal', function(e) {$('.product-name').focus()	})



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