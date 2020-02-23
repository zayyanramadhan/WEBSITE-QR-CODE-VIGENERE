@include('master.master')
@section('content')
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Buku</span> PKL dan Skripsi</h1>
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
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgcl"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Buku PKL/Skripsi</button>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-show-print="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th rowspan="2" data-field="state" data-checkbox="true"></th>
                                        <th rowspan="2" data-field="no">NO</th>
                                        <th colspan="2" data-field="judul"><center>Judul</th>
                                        <th rowspan="2" data-field="progdi">Program Studi</th>
                                        <th rowspan="2" data-field="nama">Nama</th>
                                        <th rowspan="2" data-field="npm">NPM</th>
                                        <th colspan="2" data-field="wisuda"><center>Wisuda</th>
                                        <th rowspan="2" data-field="tgl">Tanggal Diserahkan</th>
                                        <th rowspan="2" data-field="action"><center>Hapus/Ubah</th>
                                    </tr>
                                    <tr>
                                        <th data-field="pkl"><center>PKL</th>
                                        <th data-field="skripsi"><center>Skripsi</th>
                                        <th data-field="tahun">Tahun</th>
                                        <th data-field="periode">Periode</th>
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
$vprogdi=$data->progdi;
$name=$data->nama;
$npm=$data->npm;
$pkl=$data->pkl;
$skripsi=$data->skripsi;
$wisuda=$data->wisuda;
$getwisuda = explode( "/", $wisuda );
@endphp
                                    <tr>
                                        <td></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $pkl }}</td>
                                        <td>{{ $skripsi }}</td>
                                        <td>{{ $vprogdi }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $npm }}</td>
                                        <td>{{ $getwisuda[0] }}</td>
                                        <td>{{ $getwisuda[1] }}</td>
                                        <td>{{ $tgl }}</td>
                                        <td>
                                          <center>
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgc3{{ $no }}"><i class="fa fa-edit" aria-hidden="true"></i> Ubah</button>
                                          </div>
                                          <br>
                                          <br>
                                          <div class="btn-group btn-custom-groups">
                                            <form action="{{ url('pklskripsideletePost') }}" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                      <button type="submit" class="btn btn-warning" onclick="return confirm('Data Buku {{ $pkl }} Akan Dihapus ?');"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</button>
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
            <h4 class="modal-title">Tambah Buku PKL/Skripsi</h4>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
        </div>
        <form name="frm" id="frm" role="form" method="post" action="{{ url('pklskripsiaddPost') }}">
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
                      <label class="login2 pull-right pull-right-pro">Judul PKL</label>
                  </div>
                  <div class="input-group date">
                      <textarea rows="3" cols="80" id="pkl" name="pkl" class="form-control" value="" placeholder="Judul PKL"></textarea>
                  </div>
                  <div id="vpkl" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">Judul PKL belum diisi</p>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Tahun PKL</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" id="thnpkl" name="thnpkl" class="form-control" value="" placeholder="Tahun PKL">
                  </div>
                  <div id="vthnpkl" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">Tahun PKL belum diisi</p>
                  </div>
                  <div id="vthnpkl1" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">format Tahun PKL harus berupa angka</p>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Judul Skripsi</label>
                  </div>
                  <div class="input-group date">
                      <textarea rows="3" cols="80" id="skripsi" name="skripsi" class="form-control" value="" placeholder="Judul Skripsi"></textarea>
                  </div>
                  <div id="vskripsi" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">Judul Skripsi belum diisi</p>
                  </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <label class="login2 pull-right pull-right-pro">Wisuda</label>
                  </div>
                  <div class="input-group date">
                      <input type="text" id="wisuda" name="wisuda" class="form-control" value="" placeholder="2019/2 (tahun/periode)">
                  </div>
                  <div id="vwisuda" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">wisuda belum diisi</p>
                  </div>
                  <div id="vwisuda1" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                      <p class="message-mg-rt">format wisuda harus berupa angka (tahun/periode)</p>
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

<script type="text/javascript">
</script>

@if(isset($result))
@php
$noMod=0;
@endphp
@foreach($result as $dataMod)
@php
$noMod++;
$id=$dataMod->id;
$tgl=$dataMod->tgl;
$vprogdi=$dataMod->progdi;
$name=$dataMod->nama;
$npm=$dataMod->npm;
$pkl=$dataMod->pkl;
$skripsi=$dataMod->skripsi;
$wisuda=$dataMod->wisuda;
@endphp

                                          <div id="WarningModalhdbgc3{{ $noMod }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header header-color-modal bg-color-3">
                                                      <h4 class="modal-title">Edit Buku PKL/Skripsi</h4>
                                                      <div class="modal-close-area modal-close-df">
                                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                      </div>
                                                  </div>
                                                  <form name="frm_edit{{ $noMod }}" id="frm_edit{{ $noMod }}" role="form" method="post" action="{{ url('pklskripsiupdatePost') }}">
                                                      <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                  <div class="modal-body">
                                                      <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                                        {{ csrf_field() }}
                                                        <div class="row">
                                                          <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tanggal</label>
                                                            </div>
                                                            <div class="input-group date">
                                                                <input type="text" id="tgl" name="tgl" class="form-control" value="{{ $tgl }}" placeholder="dd/mm/yyyy">
                                                            </div>
                                                            <div id="vtgl_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                <p class="message-mg-rt">tanggal belum diisi</p>
                                                            </div>
                                                            <div id="vtgl1_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
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
  $progdi=$datapro->nama_progdi;
  @endphp
  														                                                       <option value="{{ $progdi }}" @if($vprogdi==$progdi) selected @endif>{{ $progdi }}</option>
  @endforeach
                                            													</select>
                                                                    </div>
                                                                  </div>
                                                                  <div id="vprogdi_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                      <p class="message-mg-rt">Program Studi belum dipilih</p>
                                                                  </div>
                                                          </div>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Nama</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="nama" name="nama" class="form-control" value="{{ $name }}" placeholder="Nama">
                                                              </div>
                                                              <div id="vnama_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
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
                                                                  <input type="text" id="npm" name="npm" class="form-control" value="{{ $npm }}" placeholder="NPM">
                                                              </div>
                                                              <div id="vnpm_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">npm belum diisi</p>
                                                              </div>
                                                              <div id="vnpm1_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">format npm harus berupa angka</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Judul PKL</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <textarea rows="3" cols="80" id="pkl" name="pkl" class="form-control" value="" placeholder="Judul PKL">{{ $pkl }}</textarea>
                                                              </div>
                                                              <div id="vpkl_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Judul PKL belum diisi</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Tahun PKL</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="thnpkl" name="thnpkl" class="form-control" value="" placeholder="Tahun PKL">
                                                              </div>
                                                              <div id="vthnpkl_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Tahun PKL belum diisi</p>
                                                              </div>
                                                              <div id="vthnpkl1_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">format Tahun PKL harus berupa angka</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Judul Skripsi</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <textarea rows="3" cols="80" id="skripsi" name="skripsi" class="form-control" value="" placeholder="Judul Skripsi">{{ $skripsi }}</textarea>
                                                              </div>
                                                              <div id="vskripsi_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Judul Skripsi belum diisi</p>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Wisuda</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="wisuda" name="wisuda" class="form-control" value="{{ $wisuda }}" placeholder="2019/2 (tahun/periode)">
                                                              </div>
                                                              <div id="vwisuda_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">wisuda belum diisi</p>
                                                              </div>
                                                              <div id="vwisuda1_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">format wisuda harus berupa angka (tahun/periode)</p>
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

<script type="text/javascript">

function isValidWisuda(wisudaString)
{
    // First check for the pattern
    if(!/^\d{4}\/\d{1,10}$/.test(wisudaString))
        return false;

    // Parse the date parts to integers
    var parts = wisudaString.split("/");
    var year = parseInt(parts[0], 10);
    var priod = parseInt(parts[1], 10);

    // Check the ranges year
    if(year < 1000 || year > 3000)
        return false;

    // Check the range of the priod
    return priod > 0;
}
function getval()
{
var vnama = document.getElementById("vnama");
var vnpm = document.getElementById("vnpm");
var vnpm1 = document.getElementById("vnpm1");
var vthnpkl = document.getElementById("vthnpkl");
var vthnpkl1 = document.getElementById("vthnpkl1");
var vpkl = document.getElementById("vpkl");
var vprogdi = document.getElementById("vprogdi");
var vwisuda = document.getElementById("vwisuda");
var vwisuda1 = document.getElementById("vwisuda1");
var vskripsi = document.getElementById("vskripsi");
cek = 0;
if(frm.thnpkl.value=="")
{
vthnpkl.style.display = "block";
cek = 1;
}
else {
  if(isNaN(frm.thnpkl.value))
  {
    vthnpkl1.style.display = "block";
    cek = 1;
  }
  else {
    vthnpkl1.style.display = "none";
  }
vthnpkl.style.display = "none";
}
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
if(frm.wisuda.value=="")
{
vwisuda.style.display = "block";
cek = 1;
}
else {
  if(isValidWisuda(frm.wisuda.value) == false)
  {
    vwisuda1.style.display = "block";
    cek = 1;
  }
  else {
    vwisuda1.style.display = "none";
  }
vwisuda.style.display = "none";
}
if(frm.pkl.value=="")
{
vpkl.style.display = "block";
cek = 1;
}
else {
vpkl.style.display = "none";
}
if(frm.skripsi.value=="")
{
vskripsi.style.display = "block";
cek = 1;
}
else {
vskripsi.style.display = "none";
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
  var vtgl_e{{ $nov }} = document.getElementById("vtgl_e{{ $nov }}");
  var vnama_e{{ $nov }} = document.getElementById("vnama_e{{ $nov }}");
  var vnpm_e{{ $nov }} = document.getElementById("vnpm_e{{ $nov }}");
  var vnpm1_e{{ $nov }} = document.getElementById("vnpm1_e{{ $nov }}");
  var vthnpkl_e{{ $nov }} = document.getElementById("vthnpkl_e{{ $nov }}");
  var vthnpkl1_e{{ $nov }} = document.getElementById("vthnpkl1_e{{ $nov }}");
  var vprogdi_e{{ $nov }} = document.getElementById("vprogdi_e{{ $nov }}");
  var vpkl_e{{ $nov }} = document.getElementById("vpkl_e{{ $nov }}");
  var vwisuda_e{{ $nov }} = document.getElementById("vwisuda_e{{ $nov }}");
  var vwisuda1_e{{ $nov }} = document.getElementById("vwisuda1_e{{ $nov }}");
  var vskripsi_e{{ $nov }} = document.getElementById("vskripsi_e{{ $nov }}");
  cek = 0;

  if(frm_edit{{ $nov }}.thnpkl.value=="")
  {
  vthnpkl_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
    if(isNaN(frm_edit{{ $nov }}.thnpkl.value))
    {
      vthnpkl1_e{{ $nov }}.style.display = "block";
      cek = 1;
    }
    else {
      vthnpkl1_e{{ $nov }}.style.display = "none";
    }
  vthnpkl_e{{ $nov }}.style.display = "none";
  }
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
  if(frm_edit{{ $nov }}.progdi.value=="")
  {
  vprogdi_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vprogdi_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.nama.value=="")
  {
  vnama_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vnama_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.wisuda.value=="")
  {
  vwisuda_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
    if(isValidWisuda(frm_edit{{ $nov }}.wisuda.value) == false)
    {
      vwisuda1_e{{ $nov }}.style.display = "block";
      cek = 1;
    }
    else {
      vwisuda1_e{{ $nov }}.style.display = "none";
    }
  vwisuda_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.pkl.value=="")
  {
  vpkl_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vpkl_e{{ $nov }}.style.display = "none";
  }
  if(frm_edit{{ $nov }}.skripsi.value=="")
  {
  vskripsi_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vskripsi_e{{ $nov }}.style.display = "none";
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
</script>
@if($no <5)
  <div id="footer">
@endif
@include('master.footer')
</body>

</html>
