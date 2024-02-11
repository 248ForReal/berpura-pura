<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar extends Model
{
    use HasFactory;
    protected $table = 'daftar';
    protected $fillable = [
        'kampus_id',
        'semester',
        'nama_lengkap',
        'email',
        'nomor_hp',
        'nomor_wa',
        'hobi',
        'tempat_nongkrong_favorit'
    ];

    public function kampus()
    {
        return $this->belongsTo(kampus::class, 'kampus_id', 'npsn');
    }
}
