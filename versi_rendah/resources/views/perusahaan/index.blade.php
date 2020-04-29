@extends('layouts.adminmain')
@section('title', 'Perusahaan')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Perusahaan</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
            <a href="{{ route('perusahaan.index') }}" class="pull-right">
              <button type="button" class="btn btn-info">All Data</button>
            </a>
          </div>
          <div class="card-header">
            <a href="{{ route('perusahaan.create') }}">
              <button type="button" class="btn btn-primary">Add New</button>
            </a>
          </div>
          <div class="card-body">
          <table class="table table-bordered">
        <thead>
                <tr>
                  <th scope="col">Perusahaan</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Sektor</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Gaji</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
          @forelse($perusahaan as $row)
      <tr>
       <td>{{ $row->nama_perusahaan }}</td>
       <td>{{ $row->pekerjaan }}</td>
       <td>{{ $row->lokasi }}</td>
       <td>{{ $row->sektor->nama_sektor }}</td>
       <td>{{ $row->gaji }}</td>
       <td>
         <form action="{{route('perusahaan.destroy', $row->id)}}"  method="post">
          <a href="{{route('perusahaan.show', $row->id)}}" class="btn btn-primary btn-sm">Lihat</a>
          <a href="{{route('perusahaan.edit', $row->id)}}" class="btn btn-warning btn-sm">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete data?');">Hapus</button>
        </form>
       </td>
      </tr>
       @empty
                <tr>
                  <td colspan="3"><center>Data kosong</center></td>
                </tr>
                @endforelse
</table>
{!! $perusahaan->appends(request()->except('page'))->render() !!}
</div></div></div></div>
@endsection