<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $filltable = ['nama','slug'];
    public $timestamps = true;


    public function artikel()
    {
        // Model Tag Memiliki relasi Many to Many (belongsToMany)
        // (belongsToMany) terhadap model 'Artikel yang terhubung oleh
        // table 'artikel_tag' masing-masing sebagai 'artikel_id' dan
        // 'tag_id'
        return $this->belongsToMany('App\Atikel','artikel_tag','tag-id','artikel_id');
    }
}
