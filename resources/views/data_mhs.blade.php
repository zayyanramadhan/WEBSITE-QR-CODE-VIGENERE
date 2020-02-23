@include('master.master')
@section('content')
@php
use App\Http\Services\vinegere;
@endphp
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Mahasiswa</span></h1>
                        </div>
                    </div>

                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control">
                                  <option value="">Export Basic</option>
                                  <option value="all">Export All</option>
                                  <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-show-print="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="no">NO</th>
                                        <th data-field="nip" data-editable="false">NPM</th>
                                        <th data-field="nama" data-editable="false">Nama</th>
                                        <th data-field="jabatan" data-editable="false">Status</th>
                                        <th data-field="action"><center>Aktivasi Aplikasi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
@if(isset($result))
@php
$no=0;
@endphp
@foreach($result['mahasiswa'] as $datamas)
@php
$no++;
$nip=$datamas->npm;
$nama=$datamas->nama;
$fak=$datamas->nama_fakultas;
$jur=$datamas->nama_progdi;
$jabatan="Mahasiswa : ".$datamas->nama_progdi;
@endphp
                                    <tr>
                                        <td></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nip }}</td>
                                        <td>{{ $nama }}</td>
                                        <td>{{ $jabatan }}</td>
                                        <td>
                                          <center>
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgcl{{ $no }}"><i class="fa fa-qrcode" aria-hidden="true"></i> QR Code</button>
                                          </div>
                                        </td>
                                    </tr>
                                    <div id="WarningModalhdbgcl{{ $no }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-3">

                                                    <div class="modal-header header-color-modal bg-color-3">
                                                        <h4 class="modal-title"><center>QR CODE AKTIVASI USER <br>{{ $nip }}-{{ $nama }} </h4>
                                                        <div class="modal-close-area modal-close-df">
                                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                        </div>
                                                    </div>
                                                    @php
                                                    ini_set('date.timezone', 'Asia/Jakarta');
                                                    $t=time();
                                                    $setqr_mas="Mahasiswa<~>".$t."<~>".$nip."<~>".$nama."<~>".$fak."<~>".$jur;
                                                    $qrcode_vine_mas=vinegere::call_encode_vinegere($setqr_mas);
                                                    @endphp
                                                    <div class="modal-body">
                                                        <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(312)->generate($qrcode_vine_mas)) !!} ">
                                                      <div class="modal-footer">
                                                      </div>
                                                    </div>
                                            </div>
                                    </div>
                                    </div>
                                    </div>
@endforeach
@endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="lobibox-notify-wrapper bottom right">

@if(session()->has('message'))
<div id="notifSuccess" class="lobibox-notify lobibox-notify-success animated-fast fadeInDown" style="width: 400px;">
  <div class="lobibox-notify-icon-wrapper">
    <div class="lobibox-notify-icon">
      <div>
        <div class="icon-el"><i class="glyphicon glyphicon-ok-sign"></i></div>
      </div>
    </div>
  </div>
  <div class="lobibox-notify-body">
    <div class="lobibox-notify-title">Success !!!
      <div></div>
    </div>
    <div class="lobibox-notify-msg" style="max-height: 60px;">{{ session()->get('message') }}.</div>
  </div>
  <span class="lobibox-close" onclick="return closenotSuccess();">×</span>
</div>
<script type="text/javascript">
  function closenotSuccess(){
    var notifSuccess = document.getElementById("notifSuccess");
    notifSuccess.style.display = "none";
  }
</script>
@endif

</div>
<div class="lobibox-notify-wrapper-large bottom right"><ul class="lb-notify-tabs"></ul><div class="lb-notify-wrapper"></div></div>
<div class="lobibox-notify-wrapper bottom left"></div>
@if($no <5)
  <div id="footer">
@endif
@include('master.footer')
<!-- Modal Popup -->
<div id="WarningModalhdbgcl" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-3">

                <div class="modal-header header-color-modal bg-color-3">
                    <h4 class="modal-title"><center>QR CODE MAHASISWA DAFTAR</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                @php
                ini_set('date.timezone', 'Asia/Jakarta');
                $t=time();
                $setqr_mas="Mahasiswa<~>".$t;
                $qrcode_vine_mas=vinegere::call_encode_vinegere($setqr_mas);
                @endphp
                <div class="modal-body">
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(312)->generate($qrcode_vine_mas)) !!} ">
                  <div class="modal-footer">
                  </div>
                </div>
        </div>
</div>
</div>
</div>
<div id="WarningModalhdbgc11" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-3">

                <div class="modal-header header-color-modal bg-color-3">
                    <h4 class="modal-title"><center>QR CODE DOSEN DAFTAR</h4>
                    <div class="modal-close-area modal-close-df">
                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                    </div>
                </div>
                @php
                ini_set('date.timezone', 'Asia/Jakarta');
                $t=time();
                $setqr="Dosen<~>".$t;
                $qrcode_vine_dos=vinegere::call_encode_vinegere($setqr);
                @endphp
                <div class="modal-body">
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(312)->generate($qrcode_vine_dos)) !!} ">
                  <div class="modal-footer">
                  </div>
                </div>
        </div>
</div>
</div>
</div>
<script>
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
function getval()
{
var vnip = document.getElementById("vnip");
var vnip1 = document.getElementById("vnip1");
var vnama = document.getElementById("vnama");
var valamat = document.getElementById("valamat");
var vno_telp = document.getElementById("vno_telp");
var vno_telp1 = document.getElementById("vno_telp1");
var vemail = document.getElementById("vemail");
var vemail1 = document.getElementById("vemail1");
var vpass = document.getElementById("vpass");
var vpass1 = document.getElementById("vpass1");
var vpass2 = document.getElementById("vpass2");
cek = 0;
if(frm.nip_petugas.value=="")
{
vnip.style.display = "block";
cek = 1;
}
else {
  if(isNaN(frm.nip_petugas.value))
  {
    vnip1.style.display = "block";
    cek = 1;
  }
  else {
    vnip1.style.display = "none";
  }
vnip.style.display = "none";
}
if(frm.nama.value=="")
{
vnama.style.display = "block";
cek = 1;
}
else {
vnama.style.display = "none";
}
if(frm.alamat.value=="")
{
valamat.style.display = "block";
cek = 1;
}
else {
valamat.style.display = "none";
}
if(frm.no_telp.value=="")
{
vno_telp.style.display = "block";
cek = 1;
}
else {
  if(isNaN(frm.no_telp.value))
  {
    vno_telp1.style.display = "block";
    cek = 1;
  }
  else {
    vno_telp1.style.display = "none";
  }
vno_telp.style.display = "none";
}
if(frm.email.value=="")
{
vemail.style.display = "block";
cek = 1;
}
else {
  if (validateEmail(frm.email.value)) {
  vemail1.style.display = "none";
  }
  else {
  vemail1.style.display = "block";
  cek = 1;
  }
vemail.style.display = "none";
}
if(frm.pass.value=="")
{
vpass.style.display = "block";
cek = 1;
}
else {
vpass.style.display = "none";
}
if(frm.pass1.value=="")
{
vpass1.style.display = "block";
cek = 1;
}
else {
if(frm.pass.value!=frm.pass1.value)
{
vpass2.style.display = "block";
cek = 1;
}
else {
vpass2.style.display = "none";
}
vpass1.style.display = "none";
}
if (cek == 0)
{
return true;
}
if (cek == 1)
{
return false;
}
}

@php
$nov=0;
@endphp
@foreach($result as $datav)
@php
$nov++;
@endphp
function getvaledit{{ $nov }}()
{
var vnip_e{{ $nov }} = document.getElementById("vnip_e{{ $nov }}");
var vnip1_e{{ $nov }} = document.getElementById("vnip1_e{{ $nov }}");
var vnama_e{{ $nov }} = document.getElementById("vnama_e{{ $nov }}");
var valamat_e{{ $nov }} = document.getElementById("valamat_e{{ $nov }}");
var vno_telp_e{{ $nov }} = document.getElementById("vno_telp_e{{ $nov }}");
var vno_telp1_e{{ $nov }} = document.getElementById("vno_telp1_e{{ $nov }}");
var vemail_e{{ $nov }} = document.getElementById("vemail_e{{ $nov }}");
var vemail1_e{{ $nov }} = document.getElementById("vemail1_e{{ $nov }}");
var vpass_e{{ $nov }} = document.getElementById("vpass_e{{ $nov }}");
var vpass1_e{{ $nov }} = document.getElementById("vpass1_e{{ $nov }}");
var vpass2_e{{ $nov }} = document.getElementById("vpass2_e{{ $nov }}");
cek = 0;
if(frm_edit{{ $nov }}.nip_petugas.value=="")
{
vnip_e{{ $nov }}.style.display = "block";
cek = 1;
}
else {
  if(isNaN(frm_edit{{ $nov }}.nip_petugas.value))
  {
    vnip1_e{{ $nov }}.style.display = "block";
    cek = 1;
  }
  else {
    vnip1_e{{ $nov }}.style.display = "none";
  }
vnip_e{{ $nov }}.style.display = "none";
}
if(frm_edit{{ $nov }}.nama.value=="")
{
vnama_e{{ $nov }}.style.display = "block";
cek = 1;
}
else {
vnama_e{{ $nov }}.style.display = "none";
}
if(frm_edit{{ $nov }}.alamat.value=="")
{
valamat_e{{ $nov }}.style.display = "block";
cek = 1;
}
else {
valamat_e{{ $nov }}.style.display = "none";
}
if(frm_edit{{ $nov }}.no_telp.value=="")
{
vno_telp_e{{ $nov }}.style.display = "block";
cek = 1;
}
else {
  if(isNaN(frm_edit{{ $nov }}.no_telp.value))
  {
    vno_telp1_e{{ $nov }}.style.display = "block";
    cek = 1;
  }
  else {
    vno_telp1_e{{ $nov }}.style.display = "none";
  }
vno_telp_e{{ $nov }}.style.display = "none";
}
if(frm_edit{{ $nov }}.email.value=="")
{
vemail_e{{ $nov }}.style.display = "block";
cek = 1;
}
else {
  if (validateEmail(frm_edit{{ $nov }}.email.value)) {
  vemail1_e{{ $nov }}.style.display = "none";
  }
  else {
  vemail1_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
vemail_e{{ $nov }}.style.display = "none";
}
if (cek == 0)
{
return true;
confirm("Data Yang Diubah Sudah Benar ?");
}
if (cek == 1)
{
return false;
}
}
@endforeach
function deletec(){
  confirm("Data Akan Dihapus ?");
}
</script>

</body>

</html>
