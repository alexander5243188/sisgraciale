 </div>
      <div class="modal-footer">
        
        <button 
          type="button" 
          wire:click.prevent="resetUI()" 
          id="button-close" 
          class="btn close-btn btn-sm" 
          data-dismiss="modal">
          CERRAR
        </button>

        @if($selected_id < 1)
        <button 
          type="button" 
          wire:click.prevent="Store()" 
          class="btn close-modal" 
          id="button-save">          
          GUARDAR
        </button>
        @else
        <button 
          type="button" 
          wire:click.prevent="Update()" 
          class="btn close-modal" 
          id="button-update">
          ACTUALIZAR
        </button>
        @endif

      </div>
    </div>
  </div>
</div>