<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PTKP extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ptkp';
    protected $fillable = [
        'uuid', 'merchant_id', 'jenis', 'nominal', 'jumlah_tanggungan',
    ];
    protected $appends = ['nama'];

    public function getNamaAttribute()
    {
        $j = 'TK/';
        if (array_key_exists('jenis', $this->attributes)) {
            if ($this->attributes['jenis'] == 'Menikah') {
                $j = 'K/';
            }
        }

        return $j . $this->attributes['jumlah_tanggungan'];
    }
}
