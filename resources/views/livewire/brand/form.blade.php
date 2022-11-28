@include('common.modalHead')

<div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label >Registra una marca</label>
            <input 
                type="text" 
                wire:model.lazy="name" 
                class="form-control" 
                placeholder="" 
                autofocus 
            >
            @error('name') <span class="text-danger er">{{ $message}}</span>@enderror
        </div>    
    </div>
  
</div>
@include('common.modalFooter')