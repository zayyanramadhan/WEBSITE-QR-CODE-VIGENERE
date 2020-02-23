@include('master.master')
@section('content')
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Falkultas</span></h1>
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
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgcl"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Falkultas</button>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="false" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-show-print="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="no">NO</th>
                                        <th data-field="nama_fakultas"><center>Nama Falkultas</th>
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
$name=$data->nama_fakultas;
@endphp
                                    <tr>
                                        <td></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $name }}</td>
                                        <td>
                                          <center>
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgc3{{ $no }}"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                          </div>

                                          <div id="WarningModalhdbgc3{{ $no }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header header-color-modal bg-color-3">
                                                      <h4 class="modal-title">Edit Fakultas</h4>
                                                      <div class="modal-close-area modal-close-df">
                                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                      </div>
                                                  </div>
                                                  <form name="frm_edit{{ $no }}" id="frm_edit{{ $no }}" role="form" method="post" action="{{ url('fakultasupdatePost') }}">
                                                      <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                  <div class="modal-body">
                                                      <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                                        {{ csrf_field() }}
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Fakultas</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="nama" name="nama" class="form-control" value="{{ $name }}" placeholder="Fakultas">
                                                              </div>
                                                              <div id="vnama_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Fakultas belum diisi</p>
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
                                            <form action="{{ url('fakultasdeletePost') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                      <button type="submit" class="btn btn-warning" onclick="return confirm('Data Fakultas {{ $name }} Akan Dihapus ?');"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
@if(session()->has('error_message'))
<div id="notifSuccess" class="lobibox-notify lobibox-notify-error animated-fast fadeInDown" style="width: 400px;">
  <div class="lobibox-notify-icon-wrapper">
    <div class="lobibox-notify-icon">
      <div>
        <div class="icon-el"><i class="glyphicon glyphicon-remove-sign"></i></div>
      </div>
    </div>
  </div>
  <div class="lobibox-notify-body">
    <div class="lobibox-notify-title">WARNING !!!
      <div></div>
    </div>
    <div class="lobibox-notify-msg" style="max-height: 60px;">{{ session()->get('error_message') }}.</div>
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
            <h4 class="modal-title">Tambah Fakultas</h4>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
        </div>
        <form name="frm" id="frm" role="form" method="post" action="{{ url('fakultasaddPost') }}">
        <div class="modal-body">
            <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
              {{ csrf_field() }}
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Fakultas</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" id="nama" name="nama" class="form-control" value="" placeholder="Fakultas">
                  </div>
                  <div id="vnama" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">Fakultas belum diisi</p>
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

@if($no <5)
  <div id="footer">
@endif
@include('master.footer')
<script>

function getval()
{
var vnama = document.getElementById("vnama");
cek = 0;

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

</body>

</html>
