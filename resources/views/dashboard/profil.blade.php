@extends('layout.dashboard')

@section('content')
    <h4 class="mb-5" >Profile</h4>


    <div class="mb-4" class="profile-container">
        <img src="{{ asset ('assets/Frame 98700.PNG') }}" alt="Kristanto Wibowo profile picture" class="profile-image">
        <div class="profile-name"><h3> {{ auth()->user()->name }}    </h3></div>
      </div>
      <div class="row">
        <div class="col-md-4">
           <label for="formGroupExampleInput" class="form-label">Nama Kandidat</label>
           <input type="text" value="{{ auth()->user()->name }}" class="form-control" placeholder="Masukan Nama Kandidat" aria-label="Masukan Nama Kandidat">

        </div>
        <div class="col-md-8">
            <label for="formGroupExampleInput" class="form-label">Posisi Kandidat</label>
          <input type="text"  value="{{ auth()->user()->position }}" class="form-control" placeholder="Masukan Posisi Kandidat" aria-label="Masukan Posisi Kandidat">
        </div>
      </div>




@endsection
