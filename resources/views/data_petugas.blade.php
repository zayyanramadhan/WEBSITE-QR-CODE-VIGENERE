@include('master.master')
@section('content')
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">User</span> Petugas</h1>
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
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgcl"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Petugas</button>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="false" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-show-print="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="no">NO</th>
                                        <th data-field="nip" data-editable="false">NIP</th>
                                        <th data-field="nama" data-editable="false">Nama</th>
                                        <th data-field="alamat" data-editable="false">Alamat</th>
                                        <th data-field="no_telp" data-editable="false">No Telepon</th>
                                        <th data-field="email" data-editable="false">Email</th>
                                        <th data-field="jabatan" data-editable="false">Jabatan</th>
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
$nip=$data->nip_petugas;
$nama=$data->nama_petugas;
$alamat=$data->alamat;
$no_telp=$data->no_telp;
$email=$data->email;
$jabatan=$data->jabatan;
@endphp
                                    <tr>
                                        <td></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $nip }}</td>
                                        <td>{{ $nama }}</td>
                                        <td>{{ $alamat }}</td>
                                        <td>{{ $no_telp }}</td>
                                        <td>{{ $email }}</td>
                                        <td>{{ $jabatan }}</td>
                                        <td>
                                          <center>
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgc3{{ $no }}"><i class="fa fa-edit" aria-hidden="true"></i> Ubah</button>
                                          </div>

                                          <div id="WarningModalhdbgc3{{ $no }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header header-color-modal bg-color-3">
                                                      <h4 class="modal-title">Edit User Petugas</h4>
                                                      <div class="modal-close-area modal-close-df">
                                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                      </div>
                                                  </div>
                                                  <form name="frm_edit{{ $no }}" id="frm_edit{{ $no }}" role="form" method="post" action="{{ url('updatepetugas') }}">
                                                  <div class="modal-body">
                                                      <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                                        {{ csrf_field() }}
                                                        <div class="row">
                                                          <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">NIP</label>
                                                            </div>
                                                            <div class="input-group date">
                                                                <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                                <input type="text" name="nip_petugas" class="form-control" value="{{ $nip }}" placeholder="NIP">
                                                            </div>
                                                            <div id="vnip_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                <p class="message-mg-rt">nip belum diisi</p>
                                                            </div>
                                                            <div id="vnip1_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                <p class="message-mg-rt">format nip harus berupa angka</p>
                                                            </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Nama</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="nama" name="nama" class="form-control" value="{{ $nama }}" placeholder="Nama">
                                                              </div>
                                                              <div id="vnama_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">nama belum diisi</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Alamat</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $alamat }}" placeholder="Alamat">
                                                              </div>
                                                              <div id="valamat_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">alamat belum diisi</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Nomor Telp</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="no_telp" name="no_telp" class="form-control" value="{{ $no_telp }}" placeholder="Nomor Telepon">
                                                              </div>
                                                              <div id="vno_telp_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">nomor telepon belum diisi</p>
                                                              </div>
                                                              <div id="vno_telp1_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">format nomor telepon harus berupa angka</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Email</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="email" name="email" class="form-control" value="{{ $email }}" placeholder="Email">
                                                              </div>
                                                              <div id="vemail_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">email telepon belum diisi</p>
                                                              </div>
                                                              <div id="vemail1_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Format Email Salah..</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Jabatan</label>
                                                              </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <div class="i-checks pull-left">
                                                                      <label><input type="radio" value="petugas" name="jabatan" @if($jabatan=="petugas") checked="true" @endif/>Petugas </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <div class="i-checks pull-left">
                                                                      <label><input type="radio" value="admin" name="jabatan" @if($jabatan=="admin") checked="true" @endif/>Admin </label>
                                                                    </div>
                                                                </div>
                                                          </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="submit" class="btn btn-success btn-block loginbtn" onclick="return getvaledit{{ $no }}();">Simpan</button>
                                                  </div>
                                              </form>
                                              </div>
                                          </div>
                                          </div>

                                          <div class="btn-group btn-custom-groups">
                                            <form action="{{ url('deletepetugas') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                <input type="hidden" name="nama" class="form-control" value="{{ $nama }}">
                                                      <button type="submit" class="btn btn-warning" onclick="return confirm('Data {{ $nama }} Akan Dihapus ?');"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
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


@if($no <5)
  <div id="footer">
@endif
@include('master.footer')
<!-- Modal Popup -->
<div id="WarningModalhdbgcl" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-3">
            <h4 class="modal-title">Tambah User Petugas</h4>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
        </div>
        <form name="frm" id="frm" role="form" method="post" action="{{ url('tambahpetugas') }}">
        <div class="modal-body">
            <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
              {{ csrf_field() }}
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">NIP</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" name="nip_petugas" class="form-control" placeholder="NIP">
                  </div>
                  <div id="vnip" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">nip belum diisi</p>
                  </div>
                  <div id="vnip1" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">format nip harus berupa angka</p>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Nama</label>
                    </div>
                    <div class="input-group date">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div id="vnama" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">nama belum diisi</p>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Alamat</label>
                    </div>
                    <div class="input-group date">
                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div id="valamat" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">alamat belum diisi</p>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Nomor Telp</label>
                    </div>
                    <div class="input-group date">
                        <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Nomor Telepon">
                    </div>
                    <div id="vno_telp" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">nomor telepon belum diisi</p>
                    </div>
                    <div id="vno_telp1" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">format nomor telepon harus berupa angka</p>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Email</label>
                    </div>
                    <div class="input-group date">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div id="vemail" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">email belum diisi</p>
                    </div>
                    <div id="vemail1" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">Format Email Salah..</p>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Jabatan</label>
                    </div>
                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                          <div class="i-checks pull-left">
                            <label><input type="radio" value="petugas" name="jabatan">Petugas </label>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="i-checks pull-left">
                            <label><input type="radio" checked="" value="admin" name="jabatan">Admin </label>
                          </div>
                      </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Password</label>
                    </div>
                    <div class="input-group date">
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <div id="vpass" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">Password belum diisi</p>
                    </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <label class="login2 pull-right pull-right-pro">Ulangi Password</label>
                    </div>
                    <div class="input-group date">
                        <input type="password" id="pass1" name="pass1" class="form-control" placeholder="Ulangi Password">
                    </div>
                    <div id="vpass1" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">Password belum diisi</p>
                    </div>
                    <div id="vpass2" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                        <p class="message-mg-rt">Password Tidak Sama</p>
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
<script>
function validateChar(char) {
  var patt1 = /^[A-Za-z0-9\_\.\-\'\&\@\,\$\(\)\:\<\>\?\%\#\*\+\=\^\[\]\{\}\;\/\~\|]{0,255}$/.test(char);
  return patt1;
}
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
