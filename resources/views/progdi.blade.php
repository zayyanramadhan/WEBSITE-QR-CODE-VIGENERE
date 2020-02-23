@include('master.master')
@section('content')
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Program Studi</span></h1>
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
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgcl"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Program Studi</button>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="false" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-show-print="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="no">NO</th>
                                        <th data-field="nama_fak"><center>Nama Fakultas</th>
                                        <th data-field="nama_progdi"><center>Nama Program Studi</th>
                                        <th data-field="action"><center>Action</th>
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
$name_fak=$data->nama_fakultas;
$name=$data->nama_progdi;
$idfak=$data->id_fakultas;
@endphp
                                    <tr>
                                        <td></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $name_fak }}</td>
                                        <td>
                                          <center>
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgc3{{ $no }}"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                          </div>

                                          <div class="btn-group btn-custom-groups">
                                            <form action="{{ url('progdideletePost') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                      <button type="submit" class="btn btn-warning" onclick="return confirm('Data Program Studi {{ $name }} Akan Dihapus ?');"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
            <h4 class="modal-title">Tambah Program Studi</h4>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
        </div>
        <form name="frm" id="frm" role="form" method="post" action="{{ url('progdiaddPost') }}">
        <div class="modal-body">
            <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
              {{ csrf_field() }}
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Pilih Fakultas</label>
                  </div>
                      <div class="input-group date">
                        <div class="chosen-select-single mg-b-20">
@php
$fakultas = DB::table('fakultas')
          ->select('*')
          ->get();
@endphp
                        <select id="chosen-select" name="fakultas" class="chosen-select" tabindex="-1" style="display:none">
														<option value="" selected>--Pilih Fakultas--</option>
@foreach($fakultas as $datafak)
@php
$id_fak=$datafak->id;
$fak=$datafak->nama_fakultas;
@endphp
														<option value="{{ $id_fak }}">{{ $fak }}</option>
@endforeach
													</select>
                        </div>
                      </div>
                      <div id="vfakultas" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                          <p class="message-mg-rt">Fakultas belum dipilih</p>
                      </div>
              </div>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Program Studi</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" id="nama" name="nama" class="form-control" value="" placeholder="Program Studi">
                  </div>
                  <div id="vnama" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">Program Studi belum diisi</p>
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
$noMod=0;
@endphp
@foreach($result as $dataMod)
@php
$noMod++;
$id=$dataMod->id;
$name_fak=$dataMod->nama_fakultas;
$name=$dataMod->nama_progdi;
$idfak=$dataMod->id_fakultas;
@endphp
                                          <div id="WarningModalhdbgc3{{ $noMod }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header header-color-modal bg-color-3">
                                                      <h4 class="modal-title">Edit Program Studi</h4>
                                                      <div class="modal-close-area modal-close-df">
                                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                      </div>
                                                  </div>
                                                  <form name="frm_edit{{ $noMod }}" id="frm_edit{{ $noMod }}" role="form" method="post" action="{{ url('progdiupdatePost') }}">
                                                      <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                  <div class="modal-body">
                                                      <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                                        {{ csrf_field() }}

                                                        <div class="row">
                                                          <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Pilih Fakultas</label>
                                                            </div>
                                                                <div class="input-group date">
                                                                  <div class="chosen-select-single mg-b-20">
@php
$fakultas = DB::table('fakultas')
          ->select('*')
          ->get();
@endphp
                                                                  <select id="chosen-select" name="fakultas" class="chosen-select" tabindex="-1" style="display:none">
														                                                      <option value="" >--Pilih Fakultas--</option>
@foreach($fakultas as $datafak)
@php
$id_fak=$datafak->id;
$fak=$datafak->nama_fakultas;
@endphp
														                                                       <option value="{{ $id_fak }}" @if($id_fak==$idfak) selected @endif>{{ $fak }}</option>
@endforeach
                                          													</select>
                                                                  </div>
                                                                </div>
                                                                <div id="vfakultas_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                    <p class="message-mg-rt">Fakultas belum dipilih</p>
                                                                </div>
                                                        </div>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Program Studi</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="nama" name="nama" class="form-control" value="{{ $name }}" placeholder="Program Studi">
                                                              </div>
                                                              <div id="vnama_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Program Studi belum diisi</p>
                                                              </div>
                                                          </div>

                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="submit" class="btn btn-success btn-block loginbtn" onclick="return getvaledit{{ $noMod }}();">Simpan</button>
                                                  </div>
                                              </form>
                                              </div>
                                          </div>
                                          </div>

@endforeach
@endif

<script>

function getval()
{
var vnama = document.getElementById("vnama");
cek = 0;

if(frm.fakultas.value=="")
{
vfakultas.style.display = "block";
cek = 1;
}
else {
vfakultas.style.display = "none";
}
if(frm.nama.value=="")
{
vnama.style.display = "block";
cek = 1;
}
else {
vnama.style.display = "none";
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
  var vnama_e{{ $nov }} = document.getElementById("vnama_e{{ $nov }}");
  cek = 0;

  if(frm_edit{{ $nov }}.fakultas.value=="")
  {
  vfakultas_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vfakultas_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.nama.value=="")
  {
  vnama_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vnama_e{{ $nov }}.style.display = "none";
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
