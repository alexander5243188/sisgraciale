<div class="row sales layout-top-spacing">
	<div class="col-sm-12">
		<div class="widget widget-chart-one">
			<div class="widget-heading">
				<h4 class="card-title"><b> {{$componentName}} | {{$pageTitle}}</b></h4>				
			</div>
			<!--Boton de ingreso nuevo registro ---------------------------------------------------------->
			<div class="container">
				<div class="row">
					<div class="col"></div>					
					<div class="col">
						<button 
							class="btn btn-danger" 
							type="button"
							href="javascript:void(0)" 
							class="tabmenu" 
							id="button-add"
							data-toggle="modal" 
							data-target="#theModal"
							title="Ingreso" 
							style="width: 100%">
							INGRESO DE PRODUCTO 
						</button>
					</div>
					<div class="col"></div>
				</div>
			</div>
			<!-- ---------------------------------------------------------->
			</br>
			<!--Boton de ingreso nuevo registro ---------------------------------------------------------->
			<div class="container">
				<div class="row">
					<div class="col"><h6>Elige el producto para el reporte</h6></div>
					<div class="col">						
						<div class="form-group">
							<select wire:model="productId" class="form-control">
								<option value="Elegir" disabled>Todos</option>
								@foreach($products as $lista)
								<option value="{{$lista->id}}">{{$lista->name}}</option>
								@endforeach
							</select>
						</div>
					</div>	
					<div class="col">
					<a 
						class="btn btn-primary" 						
						wire:click.prevent="reporteProducto()" 							
						data-toggle="collapse" 
						href="#collapseExample" 
						role="button" 
						aria-expanded="false" 
						aria-controls="collapseExample">
						Reporte
					</a> 
					</div>				
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="collapse" id="collapseExample">
							<div class="table-responsive">
								<table class="table table-bordered table striped mt-1">
									<thead class="text-white" id="table-head">
										<tr>
											<th class="table-th text-white">PRODUCTO</th>						
											<th class="table-th text-white text-center"></th>		
											<th class="table-th text-white text-center"></th>		
											<th class="table-th text-white text-center">UBICACION-ESTANTE</th>
											<th class="table-th text-white text-center">NIVEL</th>								
											<th class="table-th text-white text-center">CANTIDADES</th>																												
											<th class="table-th text-white text-center">FECHA</th>	
										</tr>
            						</thead>
									<tbody>
										@foreach($data as $product)
										<tr>
											<td class="text-left">{{$product->nombre}}</td>	
											<td class="text-center"></td>
											<td class="text-center"></td>
											<td class="text-center"></td>
											<td class="text-center"></td>
											<td>
												<h6 class="text-center {{$product->stock <= $product->alert ? 'text-danger' : '' }} "></h6>
											</td>
											<td class="text-center"></td>

										</tr>										
										@endforeach             
            						</tbody>
            						<tfoot>
										<tr>
											<td colspan="2"><h5 class="text-center font-weight-bold">TOTALES</h5></td>
											<td><h5 class="text-center">{{$totalIngreso}}</h5></td>
											<td><h5 class="text-center">{{$totalSalida}}</h5></td>
											<td><h5 class="text-center">{{number_format($totalStock,2)}}</h5></td>
										</tr>
            						</tfoot>
          						</table>         
        					</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ---------------------------------------------------------->	
				 @include('common.searchbox')
			
			<div class="widget-content">
				<div class="table-responsive">
					<table class="table table-bordered table striped mt-1">
						<thead class="text-white" id="table-head">
							<tr>
								<th class="table-th text-white">PRODUCTO</th>						
								<th class="table-th text-white text-center"></th>		
								<th class="table-th text-white text-center"></th>		
								<th class="table-th text-white text-center">UBICACION-ESTANTE</th>
								<th class="table-th text-white text-center">NIVEL</th>								
								<th class="table-th text-white text-center">CANTIDADES</th>																												
								<th class="table-th text-white text-center">FECHA</th>	
							
							</tr>
						</thead>
						<tbody>
							@foreach($data as $product)
							<tr>
								<td class="text-left">{{$product->nombre}}</td>	
								<td class="text-center">{{$product->ingreso}}</td>
								<td class="text-center">{{$product->salida}}</td>
								<td class="text-center">{{$product->estante}}</td>
								<td class="text-center">{{$product->nivel}}</td>
								<td>
									<h6 class="text-center {{$product->stock <= $product->alert ? 'text-danger' : '' }} ">
										{{$product->stock}}
									</h6>
								</td>
								<td class="text-center">{{$product->fecha}}</td>									
							
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
        @include('livewire.almacen.data.alejandra')
 
</div>


<div>  

    <div class="row layout-top-spacing mt-5">

        <div class="col-sm-12 col-md-6">
            <div class="widget widget-chart-one">
                <h4 class="p-3 text-center text-theme-1 font-bold">Lista de cantidades productos {{$year}}</h4>
                <div id="chartTop5">
                </div>
            </div>
        </div>
        
    </div>
    
   

    @include('livewire.almacen.script')

</div>














<script>
	document.addEventListener('DOMContentLoaded', function() {

		window.livewire.on('product-added', msg => {$('#theModal').modal('hide') });
		window.livewire.on('product-updated', msg => {$('#theModal').modal('hide')});
		window.livewire.on('product-deleted', msg => {// noty
		});
		window.livewire.on('modal-show', msg => {$('#theModal').modal('show')});
		window.livewire.on('modal-show', msg => {$('#ALEJANDRA').modal('show')});

		window.livewire.on('modal-hide', msg => {$('#theModal').modal('hide')});
		window.livewire.on('hidden.bs.modal', msg => {$('.er').css('display', 'none')});
		$('#theModal').on('hidden.bs.modal', function(e) {$('.er').css('display', 'none')})
		$('#theModal').on('shown.bs.modal', function(e) {$('.product-name').focus()	})



	});

</script>