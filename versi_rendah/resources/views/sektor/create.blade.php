 @extends('layouts.adminmain')
@section('title', 'Tambah Data Sektor')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Sektor <small>Add Data</small></h1>
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
  <form method="post" action="{{ route('sektor.store') }}" enctype="multipart/form-data">
       @csrf
           <div class="form-group">
            <label>Sektor</label>
             <input type="text" name="nama_sektor" class="form-control input-lg" />
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