<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak SK3S</title>
</head>
<body>
    <style>
        .img-top {
            opacity: 0.6;
        }
    </style>
    <table style="width:100%">
        <tr>
            <td rowspan="2" align="bottom" style="width:250px;">
                <font style=font-size:12pt face="Times New Roman" color=#000000>Seri SPMPKOP    :   {{ $sk3s[0]->seri_spmpkop }}</font><br>
                <font style=font-size:12pt face="Times New Roman" color=#000000>Seri FORMULIR    :   {{ $sk3s[0]->seri_formulir }}</font>
            </td>
            <td rowspan="2" align="" width="60"><img class="img-top" src="{{ asset('img/Koperasi.png') }}" width="80"></td>
            <td rowspan="2" align="" width="60"><img class="img-top" src="{{ asset('img/BankBengkulu.png') }}" width="80"></td>
            <td rowspan="2" align="center">Seri SK3S : R182206/IX/2019</td>
        </tr>
    </table>
    <p align="center" style="margin:50 0 60 0;">KOPERASI KARYAWAN JASA MITRA UTAMA BANK BENGKULU</p>
    <h3 align="center" style="margin:0 0 80 0;"><b>SURAT KETERANGAN KEPESERTAAN KEPEMILIKAN SAHAM (SK3S)</b></h3>
    <h3 align="center">{{ strtoupper($sk3s[0]->terbilang_saham)  }}</h3>
    <h3 align="center" style="margin:0 0 40 0;"> @currency($sk3s[0]->jumlah_saham) </h3>

    <div align="center" style="margin:0 0 80 0;">
        <h3><b><u>{{ $sk3s[0]->nm_investor }}</u></b></h3>
        <h3>Register : {{ $sk3s[0]->no_register }}</h3>
    </div>

    <table style="width:100%">
        <tr>
            <td rowspan="5" align="left" width="280"><img src="{{ asset('img/qrcode.png') }}" style="margin-left:50px" width="120"></td>
            <td align="left">Ditetapkan tanggal : {{ $time_indo }} <br>
                Perubahan Ke- {{ $sk3s[0]->perubahan_ke }}
            </td>
        </tr>
        <tr>
            <td rowspan="4" align="center">
                <p style="font-size: 13pt; margin:0 0 35 0;">Ketua Koperasi</p> 
                <br>
                <h3 style="font-size: 13pt">{{ $ketua->nm_ketua_koperasi }}</h3>
            </td>
        </tr>
    </table>
</body>
</html>