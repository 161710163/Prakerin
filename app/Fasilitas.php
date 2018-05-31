<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table :'fasilitas';
    protected $fillable :['id','Name','Kegunaan','Kekurangan'];
     public $timestamps =true;
    public function Berita()
    {
        return $this->belongsToMany('App/Berita','profiles','fasilitas_id','berita_id');
    }
}
