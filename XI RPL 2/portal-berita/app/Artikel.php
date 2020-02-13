<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'slug','deskripsi','foto','user_id','kategori_id'];

    public $timestamps = true;

    public function kategori()
    {
        //data Model 'Artikel' bisa dimiliki oleh Model 'Kategori'
        //melalui ' Kategori_id'
        return $this->belongsTo('App\Kategori','kategori_id');
    }

    public function user()
    {
        //data Model 'Artikel' bisa dimiliki oleh Model 'Kategori'
        //melalui ' Kategori_id'
        return $this->belongsTo('App\Kategori','kategori_id');
    }

    public function tag()
    {
        // Model 'Artikel' Memiliki relasi Many to many(belongsToMany)
        // terhadap model 'Tag' yang terhubung oleh
        // table 'artikel_tag' masing-masing sebagai 'tag_id' dan
        // 'artikel_id'

    return $this->belongsToMany('App\Atikel','artikel_tag','tag-id','artikel_id');

    }

}

