<?php

namespace App;
use App\Perusahaan;

use Illuminate\Database\Eloquent\Model;

class Sektor extends Model
{
    protected $table = 'sektor';
    protected $primaryKey = 'id_sektor';

    protected $fillable = ['nama_sektor'];

     public function perusahaan()
    {
    	return $this->belongsTo(Perusahaan::class, 'sektor_id', 'id_sektor');
    }
}
