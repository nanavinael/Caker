 @extends('layouts.adminmain')
@section('title', 'Tambah Data Perusahaan')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Perusahaan <small>Add Data</small></h1>
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
  <form method="post" action="{{ route('perusahaan.store') }}" enctype="multipart/form-data">
       @csrf
           <div class="form-group">
            <label>Perusahaan</label>
             <input type="text" name="nama_perusahaan" class="form-control input-lg" />
            </div>
            <div class="form-group">
            <label>Pekerjaan</label>
             <input type="text" name="pekerjaan" class="form-control input-lg" />
            </div>
            <div class="form-group">
          <label >Sektor</label>
                <select class="form-control input-lg" name="sektor_id">
                    @foreach( $sektor as $sektor)
                            <option value="{{$sektor->id_sektor }}">
                                  {{ $sektor->nama_sektor }}
                            </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
            <label>Lokasi</label>
             <input type="text" name="lokasi" class="form-control input-lg" />
            </div>
            <div class="form-group">
            <label>Gaji</label>
             <input type="text" name="gaji" class="form-control input-lg" />
            </div>
            <div class="form-group">
            <label>Deskripsi</label>
             <textarea type="text" name="deskripsi" class="form-control input-lg" required="" ></textarea>
            </div>
            <div class="form-group">
            <label>Syarat</label>
             <textarea type="text" name="syarat" class="form-control input-lg" required=""></textarea>
            </div>
            <div class="form-group">
            <label>No Hp</label>
             <input type="text" name="no_hp" class="form-control input-lg" required=""/>
            </div>
            <div class="form-group">
            <label>Website</label>
             <input type="text" name="website" class="form-control input-lg" required=""/>
            </div>
            <div class="form-group">
               <input type="submit" name="add" class="btn btn-primary" value="Add" />
            </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>
    @endsection()