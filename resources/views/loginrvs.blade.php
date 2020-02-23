@include('master.header')

<!-- Start Welcome area -->
 <div id="body">
    <div class="header-advance-area">

        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list single-page-breadcome">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcome-heading">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <ul class="breadcome-menu">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
  @php
  $a="abc";
  @endphp
<div class="data-table-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
              <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="text-center m-b-md custom-login">
                      <h2>MASUK UNTUK AKSES APLIKASI</h2>
                      <p><h3>Aplikasi Ruang Baca Fasilkom UPN "Veteran" Jatim</h3></p>
                  </div>
                  <div class="hpanel">
                      <div class="panel-body">
                          <form action="{{ url('loginPost') }}" id="loginForm" method="post">
                            {{ csrf_field() }}
                              <div class="form-group">
                                  <label class="control-label" for="username"><h3>Username</h3></label>
                                  <input id="input" type="text" placeholder="NIP/NPT" title="Please enter you username" name="username" class="form-control">
                                  <span class="help-block small"><h4>Masukan NIP Petugas</h4></span>
                              </div>
                              <div class="form-group">
                                  <label class="control-label" for="password"><h3>Password</h3></label>
                                  <input type="password" title="Please enter your password" placeholder="******" name="password" class="form-control">
                                  <span class="help-block small"><h4>Masukan Password</h4></span>
                              </div>
                              <div class="checkbox login-checkbox">
                              </div>
                              <button type="submit" class="btn btn-success btn-block loginbtn"><h3>MASUK</h3></button>
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
