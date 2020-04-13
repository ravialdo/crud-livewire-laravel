<div>

     <div class="form-group">
        <input type="number" wire:model="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="Masukan NIS?">
	    @error('nis')
	        <div class="invalid-feedback">
                 {{ $message }}
	        </div>
	    @enderror
    </div>

    <div class="form-group">
         <input type="text" wire:model="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama?">
 	    @error('nama')
	        <div class="invalid-feedback">
                 {{ $message }}
	        </div>
	    @enderror
   </div>

    <div class="form-group">
         <input type="text" name="kelas" wire:model="kelas" class="form-control @error('kelas') is-invalid @enderror" placeholder="Masukan kelas?">
  	    @error('kelas')
	        <div class="invalid-feedback">
                 {{ $message }}
	        </div>
	    @enderror
     </div>

     <div class="form-group">
        <input type="number" name="nomor_hp" wire:model="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror" placeholder="Masukan Nomor Hp?">
 	    @error('nomor_hp')
	        <div class="invalid-feedback">
                 {{ $message }}
	        </div>
	    @enderror
     </div>

       <button wire:click="update()" class="btn btn-primary float-right mb-3">
            Edit
       </button>

</div>