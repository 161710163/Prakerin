<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable :['Name','ekstrakulikulers_id','Perilisan','sumber'];
   
    public function Ekstrakulikuler()
    {
         return $this->belongsTo('App/Ekstrakulikuler','ekstrakulikuler_id');   
    }

    public function Guru()
    {
         return $this->hasMany('App/Guru','berita_id');   
    }
    public function Fasilitas()
    {
        return $this->belongsToMany('App/Fasilitas','profiles','berita_id','fasilitas_id');
    }

}
