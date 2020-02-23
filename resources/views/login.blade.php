@include('master.master')
@section('content')
  @php
  $a="abc";
  @endphp
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
              <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="text-center m-b-md custom-login">
                      <h3>PLEASE LOGIN TO APP</h3>
                      <p>Aplikasi Ruang Baca Fasilkom UPN "Veteran" Jatim</p>
                  </div>
                  <div class="hpanel">
                      <div class="panel-body">
                          <form action="{{ url('loginPost') }}" id="loginForm" method="post">
                            {{ csrf_field() }}
                              <div class="form-group">
                                  <label class="control-label" for="username">Username</label>
                                  <input type="text" placeholder="NIP/NPT" title="Please enter you username" name="username" class="form-control">
                                  <span class="help-block small">Masukan NIP Petugas</span>
                              </div>
                              <div class="form-group">
                                  <label class="control-label" for="password">Password</label>
                                  <input type="password" title="Please enter your password" placeholder="******" name="password" class="form-control">
                                  <span class="help-block small">Masukan Password</span>
                              </div>
                              <div class="checkbox login-checkbox">
                              </div>
                              <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                          </form>
                      </div>
                  </div>
              </div>
        </div>
    </div>
</div>

@if(session()->has('message'))
<div id="notifSuccess" class="lobibox-notify lobibox-notify-warning animated-fast fadeInDown" style="width: 400px;">
  <div class="lobibox-notify-icon-wrapper">
    <div class="lobibox-notify-icon">
      <div>
        <div class="icon-el"><i class="glyphicon glyphicon-exclamation-sign"></i></div>
      </div>
    </div>
  </div>
  <div class="lobibox-notify-body">
    <div class="lobibox-notify-title">Login Gagal !!!
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
@if(session()->has('message_menu'))
<div id="notifSuccess" class="lobibox-notify lobibox-notify-warning animated-fast fadeInDown" style="width: 400px;">
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
    <div class="lobibox-notify-msg" style="max-height: 60px;">{{ session()->get('message_menu') }}.</div>
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
@if(session()->has('message_logout'))
<div id="notifSuccess" class="lobibox-notify lobibox-notify-success animated-fast fadeInDown" style="width: 400px;">
  <div class="lobibox-notify-icon-wrapper">
    <div class="lobibox-notify-icon">
      <div>
        <div class="icon-el"><i class="glyphicon glyphicon-ok-sign"></i></div>
      </div>
    </div>
  </div>
  <div class="lobibox-notify-body">
    <div class="lobibox-notify-title">Telah Keluar !!!
      <div></div>
    </div>
    <div class="lobibox-notify-msg" style="max-height: 60px;">{{ session()->get('message_logout') }}.</div>
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
  <div id="footer">
@include('master.footer')
<script>
function getval()
{
var vuser = document.getElementById("vuser");
var vmail = document.getElementById("vmail");
var vpass = document.getElementById("vpass");
var vtgl = document.getElementById("vtgl");
cek = 0;
if(frm.username.value=="")
{
vuser.style.display = "block";
cek = 1;
}
else {
vuser.style.display = "none";
}
if(frm.password.value=="")
{
vpass.style.display = "block";
cek = 1;
}
if(frm.email.value=="")
{
vmail.style.display = "block";
cek = 1;
}
if(frm.tgl.value=="")
{
vtgl.style.display = "block";
cek = 1;
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
</script>

</body>

</html>
