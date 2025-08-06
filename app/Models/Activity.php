<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['judul', 'gambar', 'deskripsi', 'kategori_id', 'slug'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
