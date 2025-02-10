<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    use HasFactory;

    protected $table = 'buku';

    protected $fillable = [
        'judul',
        'idpengarang',
        'idkategori',
        'tahunterbit',
        'sinopsis',
        'cover'
    ];

    public function kategori()
    {
        return $this->belongsTo(related: Category::class);
    }
}
