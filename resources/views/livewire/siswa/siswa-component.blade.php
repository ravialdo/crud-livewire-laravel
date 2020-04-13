<div>

	<div>
         @if(session('success'))
         	  <div class="alert alert-success text-center">
	           {{ session('success') }}
            </div>
         @elseif(session('danger'))
	        <div class="alert alert-danger text-center">
	           {{ session('success') }}
            </div>
         @endif
      </div>

    @if($updateMode)
	    @include('livewire.siswa.edit')
	@else
	    @include('livewire.siswa.create')
	@endif
	
    <table class="table table-responsive-md">
	<thead>
		<tr>
	          <th>NIS</th>
	          <th>Nama</th>
	          <th>Kelas</th>
	          <th>Nomor HP</th>
	          <th>Aksi</th>
	     </tr>
	</thead>
	<tbody>
	   @foreach($siswa as $data)
	       <tr>
	          <td> {{ $data->nis }} </td>
	          <td> {{ $data->nama }} </td>
	          <td> {{ $data->kelas }} </td>
	          <td> {{ $data->nomor_hp }} </td>
	          <td class="py-1">
	             <button wire:click="edit({{ $data->id }})" class="btn btn-primary btn-sm my-1">Edit</button>
	             <button wire:click="destroy({{ $data->id }})" class="btn btn-danger btn-sm">Hapus</button>
	         </td>
	       </tr>
	   @endforeach
	</tbody>
</table>
</div>
