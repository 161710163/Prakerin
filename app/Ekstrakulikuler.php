<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler extends Model
{
    Protected $table :'ektrakulikulers';
    Protected $fillable :['Name_Siswa','Guru_Pembimbing','Nama_Eks'];
    public $times = true;

    public function Guru()
    {
        return $this->belongsTo('App/Guru','Guru_Pembimbing');
    }
    public function Berita()
    {
        return $this->hasMany('App/Berita','ektrakulikuler_id');
    }
}
