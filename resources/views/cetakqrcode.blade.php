@php
use App\Http\Services\vinegere;
@endphp
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,maximum-scale=1.0">
</head>
<body onload="getprint();">

  <font size="14" face="courier new">
<table id="table" border="1">
        <tbody>
@php
$no=0;
$noQR=0;
$baris=1;
@endphp
@foreach($result as $data => $key)
@foreach($key as $mydata)
@php
$noQR++;
$no++;
$kode = $mydata->kode_buku;
$kat = $mydata->kat_buku;
$tgl = $mydata->tgl_qrcode;
if($kat=="PKL"){
  $nama = $mydata->nama;
  $judul = $mydata->pkl;
  $npm = $mydata->npm;
}
else if($kat=="SKRIPSI"){
  $nama = $mydata->nama;
  $judul = $mydata->skripsi;
  $npm = $mydata->npm;
}
else{
  $nama = $mydata->pengarang_penerbit;
  $judul = $mydata->judul;
  $npm = $mydata->tahun;
}

$Jdata[$noQR] = [
              'nama' => "$nama",
              'npm' => "$npm",
              'judul' => "$judul",
              'kode' => "$kode",
              'kat' => "$kat",
              'tgl' => "$tgl"
            ];
$vjson=json_encode($Jdata[$noQR]);
$resStr = str_replace('\/', '@%', $vjson);
$resStr = str_replace("\"", "`2*", $resStr);
$qrcode_vine=vinegere::call_encode_vinegere($resStr);
$qrcode_vine1=vinegere::call_decode_vinegere($qrcode_vine);
if($resStr==$qrcode_vine1)$cekqr = "wow";
else $cekqr = "wih";
$tes1=strlen($qrcode_vine);
$tes2=strlen($resStr);
$Ceklength=strlen($kode);
@endphp
@if($no==1)
    <tr>
    @endif
      @if($no<=4)
      <td>
          <center>
          <strong>
        {{ $kode }}
      <br>
    <br>
    {{ $qrcode_vine1 }}
    <br>
  <br>
  {{ $qrcode_vine }}
  <br>
        FAKULTAS ILMU KOMPUTER
      @if($cekqr == "wow")
        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(500)->generate($qrcode_vine)) !!} ">

      @if($baris==4)
      @if($Ceklength<=17)
      <br>
      @endif
      @if($Ceklength>17)
      <br>
      ----
      @endif
      @if($no==4)
      @php
      $baris=0;
      @endphp
      @endif
      @endif
      @endif
      </td>
      @endif
    @if($no==4)
    @if($baris==4)
    @php
    $baris=1;
    @endphp
    @endif
    @php
    $no=0;
    $baris++;
    @endphp
    </tr>
    @endif
@endforeach
@endforeach
</font>

</tbody>
  </table>

  <script>
  function getprint() {
  window.print();
  }
  </script>

</body>
</html>
