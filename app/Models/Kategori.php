<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['jenis_kegiatan', 'slug'];

    // Relasi ke model Activity
    public function activities()
    {
        return $this->hasMany(Activity::class, 'kategori_id');
    }
    // Relasi ke model Activity
    public function news()
    {
        return $this->hasMany(Activity::class, 'kategori_id');
    }
}
