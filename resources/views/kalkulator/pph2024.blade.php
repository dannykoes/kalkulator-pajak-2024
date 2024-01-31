<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Kalkulator PPh - EHR System</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    {{-- Popper --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    {{-- Slick --}}
    <link rel="stylesheet" type="text/css" href="{{asset('library/slick-1.8.1/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('library/slick-1.8.1/slick/slick-theme.css')}}" />
    <script type="text/javascript" src="{{asset('library/slick-1.8.1/slick/slick.js')}}"></script>
</head>

<body>
    <div class="container">
        <div class="slick1 mt-3">
            <div>
                <img src="https://bankiracademy.com/image/classes/1704868720-Formula%20Baru%20PPh%2021%20email%20(2).jpg"
                    alt="" width="100%">
            </div>
            <div>
                <img src="https://bankiracademy.com/image/classes/1704868720-Formula%20Baru%20PPh%2021%20email%20(2).jpg"
                    alt="" width="100%">
            </div>
            <div>
                <img src="https://bankiracademy.com/image/classes/1704868720-Formula%20Baru%20PPh%2021%20email%20(2).jpg"
                    alt="" width="100%">
            </div>
        </div>
        <div class="card p-4 mt-4">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-2">
                        <div class="card-header">
                            <label for="">Personal</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="">NPWP</label>
                                    <select id="npwp" class="form-control" oninput="penjumlahan()">
                                        <option value="1">NPWP</option>
                                        <option value="0">Non-NPWP</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Status Kawin</label>
                                    <select id="status_kawin" class="form-control" oninput="penjumlahan()">
                                        <option value="TK">TK</option>
                                        <option value="K">K</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Tanggungan</label>
                                    <select id="tanggungan" class="form-control" oninput="penjumlahan()">
                                        <option value="0">0 Tanggungan</option>
                                        <option value="1">1 Tanggungan</option>
                                        <option value="2">2 Tanggungan</option>
                                        <option value="3">3 Tanggungan</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                <label for="">Jenis Pajak</label>
                                <select id="jenis_pajak" class="form-control">
                                    <option value="0">Gross</option>
                                    <option value="1">Gross Up</option>
                                    <option value="2">2 Tanggungan</option>
                                    <option value="3">3 Tanggungan</option>
                                </select>
                            </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header">
                            <label for="">Penghasilan</label>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Gaji</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" oninput="hitungbruto('gaji','gaji')"
                                        id="gaji" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Tunjangan PPh</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" oninput="hitungbruto('t_pph','gaji')"
                                        id="t_pph" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Tunjangan Lainnya, Lembur dan Sebagainya</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" oninput="hitungbruto('tunjangan','gaji')"
                                        id="tunjangan" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Honorarium dan Imbalan Lainnya</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" oninput="hitungbruto('honorarium','gaji')"
                                        id="honorarium" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Premi Asuransi yang dibayar Pemberi Kerja</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" oninput="hitungbruto('premi','gaji')"
                                        id="premi" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Natura dan Kenikmatan Lainnya</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" oninput="hitungbruto('natura','gaji')"
                                        id="natura" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Tantiem, Bonus, Gratifikasi, Jasa Produksi dan THR</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" oninput="hitungbruto('bonus','gaji')"
                                        id="bonus" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Penghasilan Bruto</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="penghasilan_bruto" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-2">
                        <div class="card-header">
                            <label for="">Penghitungan PPh Pasal 21 Bulan Ini</label>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    Pendapatan Bersih
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="pendapatan_bersih" readonly />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    Tarif Pajak
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" id="tarif_pajak" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    Kategori
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" id="kategori_pajak" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    PPh Pasal 21 bulan ini
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="pph" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header">
                            <label for="">Pengurangan</label>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Biaya Jabatan</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="biaya_jabatan"
                                        oninput="pengurangan('biaya_jabatan')" value="0" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Asuransi</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" oninput="pengurangan('asuransi')" value="0"
                                        id="asuransi" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header">
                            <label for="">Penghitungan PPh Pasal 21 Tahun Ini</label>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Pendapatan</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="pendapatan" readonly />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Jumlah Pengurang</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="jumlah_pengurang" readonly />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Penghasilan Neto Setahun</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="penghasilan_neto_setahun" readonly />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Penghasilan Tidak Kena Pajak setahun</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="penghasilan_tidak_kena_pajak"
                                        readonly />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Penghasilan Kena Pajak setahun</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="penghasilan_kena_pajak" readonly />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">Persentase Pajak</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="persentase_pajak" readonly />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">PPh Setahun</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="pph_setahun" readonly />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-8">
                                    <label for="">PPh Desember</label>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="pph_desember" readonly />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-warning" onclick="reset()">Reset</button>
                </div>
            </div>
        </div>
        <textarea id="pkp" hidden>{{json_encode($pkp)}}</textarea>
        <textarea id="ptkp" hidden>{{json_encode($ptkp)}}</textarea>
    </div>
    <script>
        let t = [];
        let p = [];
        let npwp = '0';
        let status_kawin = 'TK';
        let tanggungan = '0';
        let jenis_pajak = 0;
        t['gaji'] = 0;
        t['t_pph'] = 0;
        t['tunjangan'] = 0;
        t['honorarium'] = 0;
        t['premi'] = 0;
        t['natura'] = 0;
        t['bonus'] = 0;
        let penghasilan_bruto = 0;
        p['biaya_jabatan'] = 0;
        p['asuransi'] = 0;
        let jumlah_pengurang = 0;
        let pendapatan_bersih = 0;
        let tarif_pajak = 0;
        let kategori_pajak = 0;
        let pph = 0;
        let pkp = JSON.stringify([]);
        let ptkp = JSON.stringify([]);
        $(document).ready(function () {
            $('.slick1').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                centerMode: false,
                variableWidth: false,
                responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true
                    }
                }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    dots: true
                    }
                }, {
                    breakpoint: 300,
                    settings: "unslick" // destroys slick
                }]
            })       
            pkp = $('#pkp').val()
            ptkp = $('#ptkp').val()
            reset()
        })
        function hitungbruto(x,y) {
            let n = $('#'+x).val();
            let num = n.replace(/,/g,'');
            t[x] = parseInt(num);
            $('#'+x).val(formatCurrency(n));
            penjumlahan();
        }
        function formatCurrency(n) {
            let u = 0;
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }
        function penjumlahan() {
            npwp = $('#npwp').val()
            status_kawin = $('#status_kawin').val()
            tanggungan = $('#tanggungan').val()
            penghasilan_bruto = t['gaji'] +
                t['t_pph'] +
                t['tunjangan'] +
                t['honorarium'] +
                t['premi'] +
                t['natura'] +
                t['bonus'];
            $('#penghasilan_bruto').val(formatCurrency(penghasilan_bruto.toString()));
            // biaya_jabatan = Math.round(penghasilan_bruto * 0.05);
            // if (biaya_jabatan > 500000) {
            //     biaya_jabatan = 500000
            // }
            // $('#biaya_jabatan').val(formatCurrency(biaya_jabatan.toString()))
            pengurangan('asuransi');
        }
        function pengurangan(x) {
            let n = $('#'+x).val();
            let num = n.replace(/,/g,'');
            p[x] = parseInt(num);
            jumlah_pengurang = p['biaya_jabatan'] + p['asuransi'];
            $('#asuransi').val(formatCurrency(num.toString()))
            $('#jumlah_pengurang').val(formatCurrency(jumlah_pengurang.toString()))
            hitungpb()
        }
        function hitungpb() {
            $('#tarif_pajak').val(null) 
            $('#kategori_pajak').val(null)
            let nompph = 0;
            $('#pendapatan_bersih').val(0)
            if (penghasilan_bruto >= 0 && jumlah_pengurang >= 0) {
                pendapatan_bersih = penghasilan_bruto;
                $('#pendapatan_bersih').val(formatCurrency(pendapatan_bersih.toString()))

                // hitung pph
                const found = JSON.parse(pkp).find((element) => element.nama == status_kawin+'/'+tanggungan);
                if (found) {
                    JSON.parse(ptkp).forEach(e => {
                        let c = found.uuid;
                        if (e.kategori.search(c) >= 0) {
                            if (e.nominal_awal <= pendapatan_bersih && e.nominal_akhir >= pendapatan_bersih) {
                                nompph = pendapatan_bersih * (e.tarif_pajak / 100)
                                $('#tarif_pajak').val(e.tarif_pajak+' %') 
                                $('#kategori_pajak').val(e.nama)
                            }
                        }
                    });
                }
            }
            npwp = $('#npwp').val()
            pph = Math.round(nompph)
            if (npwp == 0) {
                pph = Math.round(nompph * 1.2)
            }
            $('#pph').val(formatCurrency(pph.toString()))
            pphsetahun();
        }
        function reset() {
            npwp = '0';
            status_kawin = 'TK';
            tanggungan = '0';
            jenis_pajak = 0;
            gaji = 0;
            t_pph = 0;
            tunjangan = 0;
            honorarium = 0;
            premi = 0;
            natura = 0;
            bonus = 0;
            penghasilan_bruto = 0;
            biaya_jabatan = 0;
            asuransi = 0;
            jumlah_pengurang = 0;
            pendapatan_bersih = 0;
            tarif_pajak = 0;
            kategori_pajak = 0;
            pph = 0;

            $('#npwp').val(npwp)
            $('#status_kawin').val(status_kawin)
            $('#tanggungan').val(tanggungan)
            $('#jenis_pajak').val(jenis_pajak)
            $('#gaji').val(gaji)
            $('#t_pph').val(t_pph)
            $('#tunjangan').val(tunjangan)
            $('#honorarium').val(honorarium)
            $('#premi').val(premi)
            $('#natura').val(natura)
            $('#bonus').val(bonus)
            $('#penghasilan_bruto').val(penghasilan_bruto)
            $('#biaya_jabatan').val(biaya_jabatan)
            $('#asuransi').val(asuransi)
            $('#jumlah_pengurang').val(jumlah_pengurang)
            $('#pendapatan_bersih').val(pendapatan_bersih)
            $('#tarif_pajak').val(tarif_pajak)
            $('#kategori_pajak').val(kategori_pajak)
            $('#pph').val(pph)
        }
        function pphsetahun() {
            if (pph <= 0) {
                return false;
            }
            $('#biaya_jabatan').val(0);
            $('#pendapatan').val(0);
            $('#penghasilan_neto_setahun').val(0);
            $('#penghasilan_tidak_kena_pajak').val(0);
            $('#pph_setahun').val(0);
            $('#pph_desember').val(0);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "/pph-setahun",
                method: 'post',
                data: {
                    npwp:$('#npwp').val(),
                    status_kawin:$('#status_kawin').val(),
                    tanggungan:$('#tanggungan').val(),
                    pendapatan_bersih:$('#pendapatan_bersih').val(),
                    pph:$('#pph').val(),
                    asuransi:$('#asuransi').val(),
                },
                success: function(result) {
                    p['biaya_jabatan'] = result.pajak_jabatan;
                    $('#biaya_jabatan').val(formatCurrency(result.pajak_jabatan.toString()));
                    $('#pendapatan').val(formatCurrency(result.pendapatan_setahun.toString()));
                    $('#penghasilan_neto_setahun').val(formatCurrency(result.bruto.toString()));
                    $('#penghasilan_tidak_kena_pajak').val(formatCurrency(result.ptkp_nominal.toString()));
                    $('#penghasilan_kena_pajak').val(formatCurrency(result.pendapatan_bersih.toString()));
                    $('#persentase_pajak').val(result.tarif_pajak*100);
                    $('#pph_setahun').val(formatCurrency(result.pph_setahun.toString()));
                    $('#pph_desember').val(formatCurrency(result.pph_sebulan.toString()));
                    jumlah_pengurang = p['biaya_jabatan'] + p['asuransi'];
                    $('#jumlah_pengurang').val(formatCurrency(jumlah_pengurang.toString()))
                },
                error: function(jqXhr, json, errorThrown) { // this are default for ajax errors
                    // var errors = jqXhr.responseJSON;
                    // var errorsHtml = '';
                    // console.log(errors['errors']);
                }
            })
        }
    </script>
</body>

</html>