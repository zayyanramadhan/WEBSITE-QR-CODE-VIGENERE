@php
use App\Http\Services\vinegere;
@endphp
@include('master.master')
@section('content')
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Buku</span></h1>
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
                                    <button type="button" class="btn btn-primary" onclick="return getCekData();"><i class="fa fa-print" aria-hidden="true"></i><i class="fa fa-qrcode" aria-hidden="true"></i> PRINT Label QR Code</button>
                            </div>
                            <script type="text/javascript">

                            function getCekData(){
                              var arr;
                              arr = $('#table').find('[type="checkbox"]:checked').map(function(){
                                  return $(this).closest('tr').find('td:nth-child(5)').text();
                              }).get();

                              // alert(arr);
                              $.ajaxSetup({headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                                   $.ajax({
                                          type:'post',
                                          url:"{{ url('toqr') }}",
                                          data:"toqrcode="+arr,
                                          success:function(data){
                                            //alert(data.result);
                                            window.location = data.url
                                          }
                                    });

                                    // var url = "{{ url('toqr') }} ";
                                    //
                                    // $.ajaxSetup({
                                    //       headers: {
                                    //      ‘X-CSRF-TOKEN’: $(‘meta[name=”csrf-token”]’).attr(‘content’)
                                    //     }
                                    // });
                                    //
                                    // $.ajax({
                                    // url : url,
                                    // type : 'POST',
                                    // data : {toqrcode=arr},
                                    // error : function(xhr, ajaxOptions, thrownError){
                                    // console.log(xhr.status);
                                    // console.log(xhr.responseText);
                                    // console.log(thrownError);
                                    // },
                                    // success : function(data){
                                    // alert(data.result);
                                    // }
                                    // });

                            }
                            </script>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-show-print="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="no">NO</th>
                                        <th data-field="nama" data-editable="false">Judul Buku</th>
                                        <th data-field="kat_buku" data-editable="false">Kategori</th>
                                        <th data-field="kode_buku" data-editable="false">Kode</th>
                                        <th data-field="tgl_qrcode" data-editable="false">Tanggal QR Code</th>
                                        <th data-field="rak" data-editable="false">Rak</th>
                                        <th data-field="action"><center>Ubah</center></th>
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
$kat_buku=$data->kat_buku;
$kode_buku=$data->kode_buku;
$tgl_qrcode=$data->tgl_qrcode;
$rak=$data->rak;

$getkat=$kat_buku;
@endphp
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $kat_buku }}</td>
                                        <td>{{ $kode_buku }}</td>
                                        @if($tgl_qrcode!="")
                                        <td>{{ $tgl_qrcode }}</td>
                                        @else
                                        <td>-</td>
                                        @endif
                                        @if($rak!="")
                                        <td>{{ $rak }}</td>
                                        @else
                                        <td>-</td>
                                        @endif
                                        <td>
                                          <center>
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgc3{{ $no }}"><i class="fa fa-edit" aria-hidden="true"></i> Ubah</button>
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

@if(isset($result))
@php
$noMod=0;
@endphp
@foreach($result as $dataMod)
@php
$noMod++;
$id=$dataMod->id;
$name=$dataMod->nama;
$kat_buku=$dataMod->kat_buku;
$kode_buku=$dataMod->kode_buku;
$tgl_qrcode=$dataMod->tgl_qrcode;
$rak=$dataMod->rak;
@endphp

                                          <div id="WarningModalhdbgc3{{ $noMod }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header header-color-modal bg-color-3">
                                                      <h4 class="modal-title">Edit Buku</h4>
                                                      <div class="modal-close-area modal-close-df">
                                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                      </div>
                                                  </div>
                                                  <form name="frm_edit{{ $noMod }}" id="frm_edit{{ $noMod }}" role="form" method="post" action="{{ url('donasiupdatePost') }}">
                                                      <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                  <div class="modal-body">
                                                      <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                                        {{ csrf_field() }}
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Judul</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="nama" name="nama" class="form-control" value="{{ $name }}" placeholder="Judul" disabled/>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Kategori</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="kat_buku" name="kat_buku" class="form-control" value="{{ $kat_buku }}" placeholder="Kategori" disabled/>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Kode</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="kode_buku" name="kode_buku" class="form-control" value="{{ $kode_buku }}" placeholder="Kode" disabled/>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Tanggal QR Code</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="tgl_qrcode" name="tgl_qrcode" class="form-control" value="{{ $tgl_qrcode }}" placeholder="Tanggal QR Code" disabled/>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Rak</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="rak" name="rak" class="form-control" value="{{ $rak }}" placeholder="Rak">
                                                              </div>
                                                              <div id="vrak_e{{ $noMod }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">rak belum diisi</p>
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
@if($no <5)
  <div id="footer">
@endif
@include('master.footer')
<script>

@php
$nov=0;
@endphp
@foreach($result as $datav)
@php
$nov++;
@endphp
function getvaledit{{ $nov }}()
{
  var vrak_e{{ $nov }} = document.getElementById("vrak_e{{ $nov }}");
  cek = 0;


  if(frm_edit{{ $nov }}.rak.value=="")
  {
  vrak_e{{ $nov }}.style.display = "block";
  cek = 1;
  }
  else {
  vrak_e{{ $nov }}.style.display = "none";
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

</body>

</html>
