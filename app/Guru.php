<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    Protected $table :'gurus';
    protected $fillable :['id','Name','Kurikulum','Jenis_Kelamin','Pendidikan_Dasar','berita_id'];
    public function Ekstrakulikuler()
    {
        return $this->hasOne('App/Ekstrakulikuler','Guru_Pembimbing');
    }
    public function Berita()
    {
        return $this->belongsTo('App/Berita','berita_id');
    }
}
