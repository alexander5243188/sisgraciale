@include('common.modalHead')

<div class="row">
<div class="col-sm-12 col-md-8">
	<div class="form-group">
		<label >Cantidad de producto</label>
		<input 
            type="text" 
            wire:model.lazy="stock" 
		    class="form-control product-name" 
            placeholder="" 
            autofocus 
        >		
	</div>
	<div class="form-group">
		<label >Precio de compra</label>
		<input 
            type="text" 
            wire:model.lazy="cost" 
		    class="form-control product-name" 
            placeholder="" 
            autofocus 
        >		
	</div>
	<div class="form-group">
		<label >Precio de venta</label>
		<input 
            type="text" 
            wire:model.lazy="price" 
		    class="form-control product-name" 
            placeholder="" 
            autofocus 
        >		
	</div>
</div>
</div>
@include('common.ingreso')
