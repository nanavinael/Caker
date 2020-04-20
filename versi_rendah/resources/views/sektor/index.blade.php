@extends('layouts.adminmain')
@section('title', 'Sektor')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Sektor</h1>
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
            <a href="{{ route('sektor.index') }}" class="pull-right">
              <button type="button" class="btn btn-info">All Data</button>
            </a>
          </div>
          <div class="card-header">
            <a href="{{ route('sektor.create') }}">
              <button type="button" class="btn btn-primary">Add New</button>
            </a>
          </div>
          <div class="card-body">
          <table class="table table-bordered">
        <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Sektor</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
          @forelse($sektor as $row)
      <tr>
       <td>{{ $row->id_sektor }}</td>
       <td>{{ $row->nama_sektor }}</td>
       <td>
         <form action="{{route('sektor.destroy', $row->id_sektor)}}"  method="post">
          <a href="{{route('sektor.edit', $row->id_sektor)}}" class="btn btn-warning btn-sm">Edit</a>
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
{!! $sektor->appends(request()->except('page'))->render() !!}
</div></div></div></div>
@endsection