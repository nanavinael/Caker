@extends('layouts.adminmain')
@section('title', 'Edit Data')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>
      Perusahaan <small>Edit Data</small>
    </h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('perusahaan.index') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
          <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
          <div class="card-body">
  <form method="post" action="{{ route('perusahaan.update', $perusahaan->id) }}" enctype="multipart/form-data">
                  @csrf
                  @method('PATCH')
        <div class="form-group">
         <label>Nama Perusahaan</label>
          <input type="text" name="nama_perusahaan" value="{{ $perusahaan->nama_perusahaan}}" class="form-control" />
        </div>
        <div class="form-group">
         <label>Sektor</label>
         <select class="form-control" name="sektor_id" style=' border:1px border-radius:4px; -moz-border-radius:4px; height:50px; margin-left:10px;'>
                          @foreach( $sektor as $sektor)
                              <option value="{{ $sektor->id_sektor }}" {{ $sektor->id_sektor == $perusahaan->sektor_id ? 'selected="selected"' : '' }}> {{ $sektor->nama_sektor}} </option>
                          @endforeach
          </select>
        </div>
        <div class="form-group">
         <label>Pekerjaan</label>
          <input type="text" name="pekerjaan" value="{{ $perusahaan->pekerjaan}}" class="form-control" />
        </div>
        <div class="form-group">
         <label>Lokasi</label>
          <input type="text" name="lokasi" value="{{ $perusahaan->lokasi}}" class="form-control" />
        </div>
        <div class="form-group">
         <label>Gaji</label>
          <input type="text" name="gaji" value="{{ $perusahaan->gaji}}" class="form-control" />
        </div>
        <div class="form-group">
         <label>Deskripsi</label>
          <textarea type="text" name="deskripsi"  class="form-control" style=' border:1px border-radius:4px; -moz-border-radius:4px; height:80px;  margin-left:10px;'><?=$perusahaan->deskripsi?></textarea>
        </div>
        <div class="form-group">
         <label>Syarat</label>
         <textarea type="text" name="syarat" class="form-control" style=' border:1px border-radius:4px; -moz-border-radius:4px; height:80px;  margin-left:10px;'><?=$perusahaan->syarat?></textarea>
        </div>
        <div class="form-group">
         <label>No Hp</label>
          <input type="text" name="no_hp" value="{{ $perusahaan->no_hp}}" class="form-control" />
        </div>
        <div class="form-group">
         <label>Website</label>
          <input type="text" name="website" value="{{ $perusahaan->website}}" class="form-control" />
        </div>
        
        <br />
        <div class="form-group ">
         <input type="submit" name="edit" class="btn btn-warning" value="Edit" />
        </div>
  </form>

@endsection
