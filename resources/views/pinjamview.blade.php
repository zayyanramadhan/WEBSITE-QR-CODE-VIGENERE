
@include('master.master')
@section('content')
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Pinjam Buku</span></h1>
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
                                        <th data-field="kode_buku" data-editable="false">Kode Buku</th>
                                        <th data-field="Peminjam" data-editable="false">Peminjam</th>
                                        <th data-field="username" data-editable="false">NPM/NPT/NIP</th>
                                        <th data-field="status" data-editable="false">Status</th>
                                        <th data-field="tgl_pinjam" data-editable="false">Tanggal Pinjam</th>
                                        <th data-field="tgl_kembali" data-editable="false">Tanggal Kembali</th>
                                        <th data-field="denda" data-editable="false">Denda</th>
                                        <th data-field="bayardenda" data-editable="false">Denda Dibayar</th>
                                        <th data-field="bayar" data-editable="false">Bayar Denda</th>
                                    </tr>
                                </thead>
                                <tbody>
@if(isset($result))
@php
$no=0;
date_default_timezone_set('Asia/Jakarta');
$tglnow = date('Y/m/d');
@endphp
@foreach($result['mahasiswa'] as $datamas)
@php
$no++;
$id=$datamas->idpin;
$judul=$datamas->judul;
$name=$datamas->nama;
$username=$datamas->username;
$kode_buku=$datamas->kode_buku;
$tgl_pinjam=$datamas->tgl_pinjam;
$tgl_kembali=$datamas->tgl_kembali;
$bayar_denda=$datamas->bayar_denda;
$status=$datamas->status;
$date = str_replace('/', '-', $tgl_pinjam);
$datekem = str_replace('/', '-', $tgl_kembali);
$cekdate = date('Y/m/d',strtotime("+3 days", strtotime($date)));
$cekdatekem = date('Y/m/d',strtotime("+0 days", strtotime($datekem)));
$dates1=date_create($cekdate);
$dates2=date_create($cekdatekem);
$diffs=date_diff($dates1,$dates2);
$tes1= $diffs->format("%R%a");
$denda="";
$denda1=0;
if($tes1>0){
  $denda=$tes1*1000;
  $denda1=$denda;
  $denda="Rp.$denda";
}
if ($cekdate<=$tglnow && $tgl_kembali=="-") {
$status="Terlambat";
$date1=date_create($cekdate);
$date2=date_create($tglnow);
$diff=date_diff($date1,$date2);
$tes= $diff->format("%R%a");
if($tes>0){
  $denda=$tes*1000;
  $denda="Rp.$denda";
}
}
if ($status=="Selesai" && $denda!="") {
  $denda1=$denda1-$bayar_denda;
  if($denda1!=0)
  $status="Kurang Denda : Rp.$denda1";
}
if($bayar_denda!=""){
$bayar_denda="Rp.$bayar_denda";
}

@endphp
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $judul }}</td>
                                        <td>{{ $kode_buku }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $username }}</td>
                                        <td>{{ $status }}</td>
                                        <td>{{ $tgl_pinjam }}</td>
                                        <td>{{ $tgl_kembali }}</td>
                                        <td>{{ $denda }}</td>
                                        <td>{{ $bayar_denda }}</td>
                                        <td>
@if($denda!=$bayar_denda && $denda!="")
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgc1{{ $no }}">Bayar Denda</button>
                                          </div>
                                          <div id="WarningModalhdbgc1{{ $no }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header header-color-modal bg-color-3">
                                                      <h4 class="modal-title">Bayar Denda</h4>
                                                      <div class="modal-close-area modal-close-df">
                                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                      </div>
                                                  </div>
                                                  <form name="frm_edit{{ $no }}" id="frm_edit{{ $no }}" role="form" method="post" action="{{ url('membayardenda') }}">
                                                      <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                  <div class="modal-body">
                                                      <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                                        {{ csrf_field() }}
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Nominal Bayar</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="kode" name="bayar" class="form-control" value="" placeholder="Nominal">
                                                              </div>
                                                              <div id="vkode_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Nominal Belum Diisi</p>
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
                                      @endif  </td>
                                    </tr>
@endforeach
@foreach($result['dosen'] as $datados)
@php
$no++;
$id=$datados->idpin;
$judul=$datados->judul;
$name=$datados->nama;
$username=$datados->username;
$kode_buku=$datados->kode_buku;
$tgl_pinjam=$datados->tgl_pinjam;
$tgl_kembali=$datados->tgl_kembali;
$bayar_denda=$datados->bayar_denda;
$status=$datados->status;
$date = str_replace('/', '-', $tgl_pinjam);
$datekem = str_replace('/', '-', $tgl_kembali);
$cekdate = date('Y/m/d',strtotime("+4 days", strtotime($date)));
$cekdatekem = date('Y/m/d',strtotime("+0 days", strtotime($datekem)));
$dates1=date_create($cekdate);
$dates2=date_create($cekdatekem);
$diffs=date_diff($dates1,$dates2);
$tes1= $diffs->format("%R%a");
$denda="";
$denda1=0;
if($tes1>0){
  $denda=$tes1*1000;
  $denda1=$denda;
  $denda="Rp.$denda";
}
if ($cekdate<=$tglnow && $tgl_kembali=="-") {
$status="Terlambat";
$date1=date_create($cekdate);
$date2=date_create($tglnow);
$diff=date_diff($date1,$date2);
$tes= $diff->format("%R%a");
if($tes>0){
  $denda=$tes*1000;
  $denda="Rp.$denda";
}
}
if ($status=="Selesai" && $denda!="") {
  $denda1=$denda1-$bayar_denda;
  if($denda1!=0)
  $status="Kurang Denda : Rp.$denda1";
}
if($bayar_denda!=""){
$bayar_denda="Rp.$bayar_denda";
}
@endphp
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td>{{ $no }}</td>
                                        <td>{{ $judul }}</td>
                                        <td>{{ $kode_buku }}</td>
                                        <td>{{ $name }}</td>
                                        <td>{{ $username }}</td>
                                        <td>{{ $status }}</td>
                                        <td>{{ $tgl_pinjam }}</td>
                                        <td>{{ $tgl_kembali }}</td>
                                        <td>{{ $denda }}</td>
                                        <td>{{ $bayar_denda }}</td>
                                        <td>
@if($denda!=$bayar_denda && $denda!="")
                                          <div class="btn-group btn-custom-groups">
                                                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#WarningModalhdbgc1{{ $no }}">Bayar Denda</button>
                                          </div>
                                          <div id="WarningModalhdbgc1{{ $no }}" class="modal modal-adminpro-general Customwidth-popup-WarningModal fade" role="dialog">
                                          <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header header-color-modal bg-color-3">
                                                      <h4 class="modal-title">Bayar Denda</h4>
                                                      <div class="modal-close-area modal-close-df">
                                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                      </div>
                                                  </div>
                                                  <form name="frm_edit{{ $no }}" id="frm_edit{{ $no }}" role="form" method="post" action="{{ url('membayardenda') }}">
                                                      <input type="hidden" name="id" class="form-control" value="{{ $id }}">
                                                  <div class="modal-body">
                                                      <span class="adminpro-icon adminpro-warning-danger modal-check-pro information-icon-pro"></span>
                                                        {{ csrf_field() }}
                                                          <div class="row">
                                                            <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12"></div>
                                                              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                                                  <label class="login2 pull-right pull-right-pro">Nominal Bayar</label>
                                                              </div>
                                                              <div class="input-group date">
                                                                  <input type="text" id="kode" name="bayar" class="form-control" value="" placeholder="Nominal">
                                                              </div>
                                                              <div id="vkode_e{{ $no }}" class="alert alert-danger alert-mg-b alert-st-four" role="alert" style="display:none">
                                                                  <p class="message-mg-rt">Nominal Belum Diisi</p>
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
                                      @endif  </td>
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

@if(session()->has('messageE'))
<div id="notifSuccessE" class="lobibox-notify lobibox-notify-warning animated-fast fadeInDown" style="width: 400px;">
  <div class="lobibox-notify-icon-wrapper">
    <div class="lobibox-notify-icon">
      <div>
        <div class="icon-el"><i class="glyphicon glyphicon-exclamation-sign"></i></div>
      </div>
    </div>
  </div>
  <div class="lobibox-notify-body">
    <div class="lobibox-notify-title">Kesalahan !!!
      <div></div>
    </div>
    <div class="lobibox-notify-msg" style="max-height: 60px;">{{ session()->get('messageE') }}.</div>
  </div>
  <span class="lobibox-close" onclick="return closenotSuccessE();">×</span>
</div>
<script type="text/javascript">
  function closenotSuccessE(){
    var notifSuccess = document.getElementById("notifSuccessE");
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
