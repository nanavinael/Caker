@extends('layouts.adminmain')
@section('title', 'Edit Data Sektor')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>
      Sektor <small>Edit Data</small>
    </h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('sektor.index') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('sektor.update', $sektor->id_sektor) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label>Sektor</label>
                <input type="text" name="nama_sektor" class="form-control" value="{{ $sektor->nama_sektor }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </div>
              </form>
          </div>
        </div>
      </div>  
  </div>

</section>
@endsection()