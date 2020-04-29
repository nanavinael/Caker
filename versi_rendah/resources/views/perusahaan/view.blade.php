@extends('layouts.adminmain')
@section('title', 'Edit Data')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>
      {{ $perusahaan->nama_perusahaan }} 
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

        <h3><b></b></h3>
        <hr>
        <div class="fontkecil">
            <table>
            
                <tr height="60">
                    <td width="300">
                        Pekerjaan
                    </td>
                    <td width="300">
                        {{ $perusahaan->pekerjaan }}
                    </td>
                </tr>
                 <tr height="60">
                    <td width="300">
                        Lokasi
                    </td>
                    <td width="300">
                        {{ $perusahaan->lokasi }}
                    </td>
                </tr>
                <tr height="60">
                    <td width="300">
                        gaji
                    </td>
                    <td width="300">
                        {{ $perusahaan->gaji }}
                    </td>
                </tr>
                <tr height="60">
                    <td width="300">
                        No HP
                    </td>
                    <td width="300">
                        {{ $perusahaan->no_hp }}
                    </td>
                </tr>
                <tr height="60">
                    <td width="300">
                       <label> Website </label>
                    </td>
                    <td width="300">
                        {{ $perusahaan->website }}
                    </td>
                </tr>
            </table>
        <hr>
        <strong> Deskripsi</strong>
        <br>
        {{ $perusahaan->deskripsi }}
        <hr>
        <strong> Syarat</strong>
        <br>
        {{ $perusahaan->syarat }}
        <hr>
        </div>
    </div>   
 </div>
</main>
@endsection
