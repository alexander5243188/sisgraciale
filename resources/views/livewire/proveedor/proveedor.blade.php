<div class="row sales layout-top-spacing">

	<div class="col-sm-12 ">
		<div class="widget widget-chart-one">
			<div class="widget-heading">
				<h4 class="card-title">{{$pageTitle}} | <b>{{$componentName}}</b></b></h4>			
				<ul class="tabs tab-pills">					
					<li><a href="javascript:void(0);" class="tabmenu bg-dark" data-toggle="modal" data-target="#theModal">Agregar</a></li>					
				</ul>
			</div>			
				search		
			<div class="widget-content">			

				<div class="table-responsive">
					<table  class="table table-bordered table-striped  mt-1">
						<thead class="text-white" style="background: #3B3F5C">
							<tr>
								<th class="table-th text-white">Nombre</th>	
								<th class="table-th text-center text-white">telefono</th>
								<th class="table-th text-center text-white">correo electronico</th>
								<th class="table-th text-center text-white">correo dirección</th>
								<th class="table-th text-center text-white">opciones</th>
							</tr>
						</thead>
						<tbody>
                     @foreach($data as $proveedor)					
							<tr>
								<td><h6>{{$proveedor->name}}</h6></td>								
								<td><h6>{{$proveedor->phone}}</h6></td>
								<td><h6>{{$proveedor->email}}</h6></td>	
								<td><h6>{{$proveedor->addres}}</h6></td>	

								<td class="text-center">	
									<a href="javascript:void(0)"  wire:click.prevent="Edit({{$proveedor->id}})"  class="btn btn-dark mtmobile" title="Editar producto">
										<i class="fas fa-edit"></i>
									</a>
									
                           @if($proveedor->products->count() < 1 ) 
									<a href="javascript:void(0);"  
										class="btn btn-dark" title="Delete">
										<i class="fas fa-trash"></i>
									</a>	
                           @endif			

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
	@include('livewire.proveedor.form') 	
</div>





<script>
	document.addEventListener('DOMContentLoaded', function () {  
		
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


	
</script>