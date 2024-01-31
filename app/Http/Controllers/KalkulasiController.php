<?php

namespace App\Http\Controllers;

use App\Models\PTKP;
use App\Models\PTKP2024;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KalkulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['data'] = [];
        $data['pkp'] = PTKP::get();
        $data['ptkp'] = PTKP2024::get();
        return view('kalkulator.pph2024', $data);
    }

    public function setahun(Request $r)
    {
        $bruto = str_replace(',', '', $r->pendapatan_bersih);
        $pajak_jabatan = 0;
        $pendapatan_bersih = 0;
        $tarif_pajak = 0;
        $pph_tambahan = 0;
        $pph_setahun = 0;
        $pph_sebulan = 0;
        $ptkp = [];
        $pkp = [];
        // GET PTKP
        $jenis = 'Belum Menikah';
        if ($r->status_kawin == 'K') {
            $jenis = 'Menikah';
        }
        $ptkp = DB::table('ptkp')
            ->where('jenis', $jenis)
            ->where('jumlah_tanggungan', $r->tanggungan)
            ->first();

        // GET PKP

        $pajak_jabatan = ($bruto * 12) * (5 / 100);
        if ($pajak_jabatan > 6000000) {
            $pajak_jabatan = 6000000;
        }

        $bruto = (str_replace(',', '', $r->pendapatan_bersih) * 12) - $pajak_jabatan - str_replace(',', '', $r->asuransi);
        $tambahan = false;
        if ($bruto > $ptkp->nominal) {
            $pendapatan_bersih = $bruto - $ptkp->nominal;
            $pkp = DB::table('pkp')->orderBy('tarif_pajak', 'DESC')->get();
            foreach ($pkp as $key => $value) {
                // PPh Komulatif
                if ($tambahan) {
                    $pph_tambahan += ($value->angka_akhir * ($value->tarif_pajak / 100));
                }
                if ($value->angka_awal <= $pendapatan_bersih && $value->angka_akhir >= $pendapatan_bersih) {
                    $tambahan = true;
                    $tarif_pajak = ($value->tarif_pajak / 100);
                }
            }

            // Hitung PPh
            $pph_setahun = ($pendapatan_bersih * $tarif_pajak) + $pph_tambahan;
            $pph_sebulan = $pph_setahun - (str_replace(',', '', $r->pph) * 11);
        }

        return [
            'pkp' => $pkp,
            'ptkp' => $ptkp,
            'bruto' => $bruto,
            'pajak_jabatan' => $pajak_jabatan,
            'pendapatan_bersih' => $pendapatan_bersih,
            'pendapatan_setahun' => (str_replace(',', '', $r->pendapatan_bersih) * 12),
            'tarif_pajak' => $tarif_pajak,
            'pph_tambahan' => $pph_tambahan,
            'pph_setahun' => $pph_setahun,
            'pph_sebulan' => $pph_sebulan,
            'ptkp_nominal' => $ptkp->nominal,
            'penghasilan_kena_pajak' => $ptkp->nominal,
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
