@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
           <div class="col-md-12">

                <div class="card" style="margin-top:5rem;">
                   <div class="card-header">
                      <h4>Data Siswa</h4>
                  </div>
                  <div class="card-body">

                     @livewire('siswa-component')

                  </div>
               </div>

          </div>
       </div>
    </div>

@endsection