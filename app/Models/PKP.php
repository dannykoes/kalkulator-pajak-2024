<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PKP extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'pkp';
    protected $fillable = [
        'uuid', 'merchant_id', 'tarif_pajak', 'angka_awal', 'angka_akhir',
    ];
}
