<?php

namespace App;
use App\Sektor;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected  $table = 'perusahaan';
      protected $primaryKey = 'id';
    protected $fillable = [ 'sektor_id', 'nama_perusahaan', 'pekerjaan', 'lokasi', 'gaji', 'deskripsi', 'syarat', 'no_hp', 'website'];

    public function sektor()
    {
    	return $this->belongsTo(Sektor::class, 'sektor_id', 'id_sektor');
    }
}
