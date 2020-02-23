@include('master.master')
@section('content')
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Buku</span> Donasi</h1>
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
                            <div class="btn-group btn-custom-groups">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgcl"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Buku Donasi</button>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-show-print="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="no">NO</th>
                                        <th data-field="tgl" data-editable="false">Tanggal Diserahkan</th>
                                        <th data-field="progdi" data-editable="false">Program Studi</th>
                                        <th data-field="nama" data-editable="false">Nama</th>
                                        <th data-field="npm" data-editable="false">NPM</th>
                                        <th data-field="judul" data-editable="false">Judul Buku</th>
                                        <th data-field="pengarang_penerbit" data-editable="false">Pengarang dan Penerbit</th>
                                        <th data-field="tahun" data-editable="false">Tahun</th>
                                        <th data-field="action"><center>Ubah/Hapus</center></th>
                                    </tr>
                                </thead>
                                <tbody>
@if(isset($result))
@php
$no=0;
@endphp
@foreach($result as $data)
@php
$no++;
$id=$data->id;
$tgl=$data->tgl;
$name=$data->nama;
$npm=$data->npm;
$judul=$data->judul;
$pengarang_penerbit=$data->pengarang_penerbit;
$tahun=$data->tahun;
$progdi=$data->progdi;
@endphp
                                    <tr>
                                        <td></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $tgl }}</td>
                                        <td>{{ $progdi }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $npm }}</td>
                                        <td>{{ $judul }}</td>
                                        <td>{{ $pengarang_penerbit }}</td>
                                        <td>{{ $tahun }}</td>
                                        <td>
                                          <center>
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgc3{{ $no }}"><i class="fa fa-edit" aria-hidden="true"></i> Ubah</button>
                                          </div>

                                          <br>
                                          <br>

                                          <div class="btn-group btn-custom-groups">
                                            <form action="{{ url('donasideletePost') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                      <button type="submit" class="btn btn-warning" onclick="return confirm('Data Buku {{ $judul }} Akan Dihapus ?');"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
                                            </form>
                                          </div>
                                        </center>
                                        </td>
                                    </tr>
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
  @if ($errors->any())
  @php
  $nc=0;
  @endphp
  @foreach ($errors->all() as $error)
  @php
  $nc++;
  @endphp
  <div id="notif{{ $nc }}" class="lobibox-notify lobibox-notify-warning animated-fast fadeInDown" style="width: 400px;">
    <div class="lobibox-notify-icon-wrapper">
      <div class="lobibox-notify-icon">
        <div>
          <div class="icon-el"><i class="glyphicon glyphicon-exclamation-sign"></i></div>
        </div>
      </div>
    </div>
    <div class="lobibox-notify-body">
      <div class="lobibox-notify-title">Warning !!!
        <div></div>
      </div>
      <div class="lobibox-notify-msg" style="max-height: 60px;">{{ $error }}.</div>
    </div>
    <span class="lobibox-close" onclick="return closenot{{ $nc }}();">×</span>
  </div>
  <script type="text/javascript">
    function closenot{{ $nc }}(){
      var notif{{ $nc }} = document.getElementById("notif{{ $nc }}");
      notif{{ $nc }}.style.display = "none";
    }
  </script>
@endforeach
@endif

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


<!-- Modal Popup -->
<div id="WarningModalhdbgcl" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-3">
            <h4 class="modal-title">Tambah Buku Donasi</h4>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
        </div>
        <form name="frm" id="frm" role="form" method="post" action="{{ url('donasiaddPost') }}">
        <div class="modal-body">
            <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
              {{ csrf_field() }}
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Pilih Program Studi</label>
                  </div>
                      <div class="input-group date">
                        <div class="chosen-select-single mg-b-20">
@php
$getprogdi = DB::table('progdis')
            ->join('fakultas', 'fakultas.id', '=', 'progdis.id_fakultas')
            ->select('progdis.nama_progdi')
            ->where('fakultas.nama_fakultas', '=', 'Fakultas Ilmu Komputer')
            ->get();
@endphp
                        <select id="chosen-select1" name="progdi" class="chosen-select" tabindex="-1" style="display:none">
                                        <option value="" >--Pilih Program Studi--</option>
@foreach($getprogdi as $datapro)
@php
$progdi=$datapro->nama_progdi;
@endphp
                                         <option value="{{ $progdi }}">{{ $progdi }}</option>
@endforeach
                          </select>
                        </div>
                      </div>
                      <div id="vprogdi" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                          <p class="message-mg-rt">Program Studi belum dipilih</p>
                      </div>
              </div>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Nama</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" id="nama" name="nama" class="form-control" value="" placeholder="Nama">
                  </div>
                  <div id="vnama" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">nama belum diisi</p>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">NPM</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" id="npm" name="npm" class="form-control" value="" placeholder="NPM">
                  </div>
                  <div id="vnpm" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">npm belum diisi</p>
                  </div>
                  <div id="vnpm1" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">format npm harus berupa angka</p>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Judul</label>
                  </div>
                  <div class="input-group date">
                    <textarea id="judul" name="judul" class="form-control" placeholder="Judul" rows="3" cols="80"></textarea>
                  </div>
                  <div id="vjudul" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">Judul belum diisi</p>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Pengarang dan Penerbit</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" id="pengarang_penerbit" name="pengarang_penerbit" class="form-control" value="" placeholder="Pengarang dan Penerbit">
                  </div>
                  <div id="vpengarang_penerbit" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">pengarang penerbit belum diisi</p>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Tahun</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" id="tahun" name="tahun" class="form-control" value="" placeholder="Tahun">
                  </div>
                  <div id="vtahun" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">tahun belum diisi</p>
                  </div>
                  <div id="vtahun1" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">format tahun harus berupa 4 angka</p>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-block loginbtn" onclick="return getval();">Simpan</button>
        </div>
    </form>
    </div>
</div>
</div>


@if(isset($result))
@php
$Modno=0;
@endphp
@foreach($result as $datamod)
@php
$Modno++;
$idMod=$datamod->id;
$tglMod=$datamod->tgl;
$nameMod=$datamod->nama;
$npmMod=$datamod->npm;
$judulMod=$datamod->judul;
$pengarang_penerbitMod=$datamod->pengarang_penerbit;
$tahunMod=$datamod->tahun;
$progdiMod=$datamod->progdi;
@endphp

                                          <div id="WarningModalhdbgc3{{ $Modno }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header header-color-modal bg-color-3">
                                                      <h4 class="modal-title">Edit Buku Donasi</h4>
                                                      <div class="modal-close-area modal-close-df">
                                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                      </div>
                                                  </div>
                                                  <form name="frm_edit{{ $Modno }}" id="frm_edit{{ $Modno }}" role="form" method="post" action="{{ url('donasiupdatePost') }}">
                                                      <input type="hidden" name="id" class="form-control" value="{{ $idMod }}">
                                                  <div class="modal-body">
                                                      <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                                        {{ csrf_field() }}
                                                        <div class="row">
                                                          <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tanggal</label>
                                                            </div>
                                                            <div class="input-group date">
                                                                <input type="text" id="tgl" name="tgl" class="form-control" value="{{ $tglMod }}" placeholder="dd/mm/yyyy">
                                                            </div>
                                                            <div id="vtgl_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                <p class="message-mg-rt">tanggal belum diisi</p>
                                                            </div>
                                                            <div id="vtgl1_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                <p class="message-mg-rt">Format tanggal salah (dd/mm/yyyy)</p>
                                                            </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Pilih Program Studi</label>
                                                              </div>
                                                                  <div class="input-group date">
                                                                    <div class="chosen-select-single mg-b-20">
  @php
  $getprogdi = DB::table('progdis')
              ->join('fakultas', 'fakultas.id', '=', 'progdis.id_fakultas')
              ->select('progdis.nama_progdi')
              ->where('fakultas.nama_fakultas', '=', 'Fakultas Ilmu Komputer')
              ->get();
  @endphp
                                                                    <select id="chosen-select" name="progdi" class="chosen-select" tabindex="-1" style="display:none">
  														                                                      <option value="" >--Pilih Program Studi--</option>
  @foreach($getprogdi as $datapro)
  @php
  $vprogdi=$datapro->nama_progdi;
  @endphp
  														                                                       <option value="{{ $vprogdi }}" @if($vprogdi==$progdiMod) selected @endif>{{ $vprogdi }}</option>
  @endforeach
                                            													</select>
                                                                    </div>
                                                                  </div>
                                                                  <div id="vprogdi_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                      <p class="message-mg-rt">Program Studi belum dipilih</p>
                                                                  </div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Nama</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="nama" name="nama" class="form-control" value="{{ $nameMod }}" placeholder="Nama">
                                                              </div>
                                                              <div id="vnama_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">nama belum diisi</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">NPM</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="npm" name="npm" class="form-control" value="{{ $npmMod }}" placeholder="NPM">
                                                              </div>
                                                              <div id="vnpm_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">npm belum diisi</p>
                                                              </div>
                                                              <div id="vnpm1_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">format npm harus berupa angka</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Judul</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                <textarea id="judul" name="judul" class="form-control" value="" placeholder="Judul" rows="3" cols="80">{{ $judulMod }}</textarea>
                                                              </div>
                                                              <div id="vjudul_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Judul belum diisi</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Pengarang dan Penerbit</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="pengarang_penerbit" name="pengarang_penerbit" class="form-control" value="{{ $pengarang_penerbitMod }}" placeholder="Pengarang dan Penerbit">
                                                              </div>
                                                              <div id="vpengarang_penerbit_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">pengarang penerbit belum diisi</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Tahun</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="tahun" name="tahun" class="form-control" value="{{ $tahunMod }}" placeholder="Tahun">
                                                              </div>
                                                              <div id="vtahun_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">tahun belum diisi</p>
                                                              </div>
                                                              <div id="vtahun1_e{{ $Modno }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">format tahun harus berupa 4 angka</p>
                                                              </div>
                                                          </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="submit" class="btn btn-success btn-block loginbtn" onclick="return getvaledit{{ $Modno }}();">Simpan</button>
                                                  </div>
                                              </form>
                                              </div>
                                          </div>
                                          </div>
@endforeach
@endif
<script type="text/javascript">

function getval()
{
var vnama = document.getElementById("vnama");
var vprogdi = document.getElementById("vprogdi");
var vnpm = document.getElementById("vnpm");
var vnpm1 = document.getElementById("vnpm1");
var vjudul = document.getElementById("vjudul");
var vtahun = document.getElementById("vtahun");
var vtahun1 = document.getElementById("vtahun1");
var vpengarang_penerbit = document.getElementById("vpengarang_penerbit");
cek = 0;
if(frm.npm.value=="")
{
vnpm.style.display = "block";
cek = 1;
}
else {
  if(isNaN(frm.npm.value))
  {
    vnpm1.style.display = "block";
    cek = 1;
  }
  else {
    vnpm1.style.display = "none";
  }
vnpm.style.display = "none";
}
if(frm.progdi.value=="")
{
vprogdi.style.display = "block";
cek = 1;
}
else {
vprogdi.style.display = "none";
}
if(frm.nama.value=="")
{
vnama.style.display = "block";
cek = 1;
}
else {
vnama.style.display = "none";
}
if(frm.judul.value=="")
{
vjudul.style.display = "block";
cek = 1;
}
else {
vjudul.style.display = "none";
}
if(frm.tahun.value=="")
{
vtahun.style.display = "block";
cek = 1;
}
else {
  if(isNaN(frm.tahun.value))
  {
    vtahun1.style.display = "block";
    cek = 1;
  }
  else {
    vtahun1.style.display = "none";
  }
vtahun.style.display = "none";
}
if(frm.pengarang_penerbit.value=="")
{
vpengarang_penerbit.style.display = "block";
cek = 1;
}
else {
vpengarang_penerbit.style.display = "none";
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

function isValidDate(dateString)
{
    // First check for the pattern
    if(!/^\d{2}\/\d{2}\/\d{4}$/.test(dateString))
        return false;

    // Parse the date parts to integers
    var parts = dateString.split("/");
    var day = parseInt(parts[0], 10);
    var month = parseInt(parts[1], 10);
    var year = parseInt(parts[2], 10);

    // Check the ranges of month and year
    if(year < 1000 || year > 3000 || month == 0 || month > 12)
        return false;

    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

    // Adjust for leap years
    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
        monthLength[1] = 29;

    // Check the range of the day
    return day > 0 && day <= monthLength[month - 1];
};

@php
$nov=0;
@endphp
@foreach($result as $datav)
@php
$nov++;
@endphp
function getvaledit{{ $nov }}()
{
  var vtgl_e{{ $nov }} = document.getElementById("vtgl_e{{ $nov }}");
  var vprogdi_e{{ $nov }} = document.getElementById("vprogdi_e{{ $nov }}");
  var vnama_e{{ $nov }} = document.getElementById("vnama_e{{ $nov }}");
  var vnpm_e{{ $nov }} = document.getElementById("vnpm_e{{ $nov }}");
  var vnpm1_e{{ $nov }} = document.getElementById("vnpm1_e{{ $nov }}");
  var vjudul_e{{ $nov }} = document.getElementById("vjudul_e{{ $nov }}");
  var vtahun_e{{ $nov }} = document.getElementById("vtahun_e{{ $nov }}");
  var vtahun1_e{{ $nov }} = document.getElementById("vtahun1_e{{ $nov }}");
  var vpengarang_penerbit_e{{ $nov }} = document.getElementById("vpengarang_penerbit_e{{ $nov }}");
  cek = 0;

  if(frm_edit{{ $nov }}.tgl.value=="")
  {
  vtgl_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
    if(isValidDate(frm_edit{{ $nov }}.tgl.value) == false){
      vtgl1_e{{ $nov }}.style.display = "block";
      cek = 1;
    }
    else {
      vtgl1_e{{ $nov }}.style.display = "none";
    }
  vtgl_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.progdi.value=="")
  {
  vprogdi_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vprogdi_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.judul.value=="")
  {
  vjudul_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vjudul_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.npm.value=="")
  {
  vnpm_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
    if(isNaN(frm_edit{{ $nov }}.npm.value))
    {
      vnpm1_e{{ $nov }}.style.display = "block";
      cek = 1;
    }
    else {
      vnpm1_e{{ $nov }}.style.display = "none";
    }
  vnpm_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.nama.value=="")
  {
  vnama_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vnama_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.tahun.value=="")
  {
  vtahun_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
    if(isNaN(frm_edit{{ $nov }}.tahun.value))
    {
      vtahun1_e{{ $nov }}.style.display = "block";
      cek = 1;
    }
    else {
      vtahun1_e{{ $nov }}.style.display = "none";
    }
  vtahun_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.pengarang_penerbit.value=="")
  {
  vpengarang_penerbit_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vpengarang_penerbit_e{{ $nov }}.style.display = "none";
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
@endforeach
function deletec(){
  confirm("Data Akan Dihapus ?");
}
</script>
@if($no <5)
  <div id="footer">
@endif
@include('master.footer')

</body>

</html>
