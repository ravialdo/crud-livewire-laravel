<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Siswa;

class SiswaComponent extends Component
{
    public  $nis, $nama, $kelas, $nomor_hp, $selected_id;
    public $updateMode = false;

    public function render()
    {
	   $data = [
	        'siswa' => Siswa::orderBy('id', 'desc')->get()
	   ];
	
        return view('livewire.siswa.siswa-component', $data);
    }

    /**
     * reset inputan
     *
     **/
    public function resetInput()
	{
          $this->nis = null;
          $this->nama = null;
          $this->kelas = null;
          $this->nomor_hp = null;
    }

   public function messages()
    {
	    return [
	        'required'  => ':attribute tidak boleh kosong!',
	        'min' => ':attribute minimal harus :min karakter!',
	        'max' => ':attribute maksimal harus :max karakter!',
	        'unique' => ':attribute ini sudah digunakan!',
	        'nis.min' => ':attribute minimal harus :min angka',
	        'nomor_hp.min' => ':attribute minimal harus :min angka',
	        'nis max' => ':attribute maksimal harus :max angka',
	        'nomor_hp.max' => ':attribute maksimal harus :max angka',
	    ];
    }

   public function validation()
    {
         return [
             'nis' => 'required|min:8|max:8|unique:siswa',
	         'nama' => 'required|max:50',
	         'kelas' => 'required|max:10',
	         'nomor_hp' => 'required|min:11|max:12'
         ];
    }

    /**
     * membuat data
     *
     **/
    public function store()
	{
          $this->validate($this->validation(), $this->messages());

           Siswa::create([
               'nis' => $this->nis,
               'nama' => $this->nama,
               'kelas' => $this->kelas,
               'nomor_hp' => $this->nomor_hp
           ]);

           $this->resetInput();
           
            session()->flash('success', 'Data telah di tambahkan!');
    }

    /**
     * seleksi data sesuai id
     *
     **/
    public function edit($id)
	{
          $data = Siswa::findOrFail($id);

          if($data){
              $this->selected_id = $id;
              $this->nis = $data->nis;
              $this->nama = $data->nama;
              $this->kelas = $data->kelas;
              $this->nomor_hp = $data->nomor_hp;

              $this->updateMode = true;
          }else{
              session()->flash('danger', 'Data tidak di temukan!');
          }
    }

    /**
     * update data
     *
     **/
    public function update()
	{
         Siswa::find($this->selected_id)->update([
               'nis' => $this->nis,
               'nama' => $this->nama,
               'kelas' => $this->kelas,
               'nomor_hp' => $this->nomor_hp
         ]);

          $this->resetInput();
          $this->updateMode = false;

         session()->flash('success', 'Data telah di edit!');
    }

    /**
     * hapus data
     *
     **/
    public function destroy($id)
	{
         $check = Siswa::where('id', $id);

         if($check){
	        $check->delete();
	         session()->flash('success', 'Data telah di hapus!');
	     }else{
	         session()->flash('success', 'Data gagal di hapus!');
	     }
	     
	     $this->resetInput();
    }
}
