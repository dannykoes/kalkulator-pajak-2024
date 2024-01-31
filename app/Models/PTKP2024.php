<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PTKP2024 extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ptkp_2024';
    protected $fillable = [
        'merchant_id',
        'kategori',
        'nominal_awal',
        'nominal_akhir',
        'tarif_pajak',
        'nama',
        'type_pegawai',
    ];
    protected $appends = ['kategoris', 'tipe'];

    public function getKategorisAttribute()
    {
        $b = '';
        if (array_key_exists('kategori', $this->attributes)) {
            $a = json_decode($this->attributes['kategori']);
            if ($a) {
                $b = PTKP::whereIn('uuid', $a)->get();
            }
        }

        return $b;
    }

    public function getTipeAttribute()
    {
        $b = 'Bukan Pegawai';
        if (array_key_exists('type_pegawai', $this->attributes)) {
            if ($this->attributes['type_pegawai'] == 0) {
                $b = 'Pegawai Tetap';
            }
            if ($this->attributes['type_pegawai'] == 1) {
                $b = 'Pegawai Harian';
            }
        }

        return $b;
    }
}
