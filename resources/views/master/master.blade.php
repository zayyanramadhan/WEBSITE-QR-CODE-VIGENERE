@include('master.header')
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="/"><img class="main-logo" src="jewelermaster/img/logo/logo.png" alt="" /></a>
            <strong><img src="jewelermaster/img/logo/logo.png" alt="" /></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
@if(session()->has('jabatan'))
@php
$jabatan=Session::get('jabatan');
@endphp
@if($jabatan=='admin')
                    <li>
                        <a href="datapetugas" aria-expanded="false"><i class="fa big-icon fa-users icon-wrap"></i> <span class="mini-click-non">User Petugas</span></a>
                    </li>
                    <li>
                        <a href="fakultas" aria-expanded="false"><i class="fa big-icon fa-university icon-wrap"></i> <span class="mini-click-non">Data Fakultas</span></a>
                    </li>
                    <li>
                        <a href="progdi" aria-expanded="false"><i class="fa big-icon fa-graduation-cap icon-wrap"></i> <span class="mini-click-non">Data Progdi</span></a>
                    </li>
@else
                    <li>
                      <a href="datapengunjung" aria-expanded="false"><i class="fa big-icon fa-users icon-wrap"></i> <span class="mini-click-non">User Pengunjung</span></a>
                    </li>
@endif
@if($jabatan=="petugas")
                    <li>
                        <a href="rak" aria-expanded="false"><i class="fa big-icon fa-list-alt icon-wrap"></i> <span class="mini-click-non">Rak Buku</span></a>
                    </li>
                    <li>
                        <a href="buku" aria-expanded="false"><i class="fa big-icon fa-leanpub icon-wrap"></i> <span class="mini-click-non">Buku</span></a>
                    </li>
                    <li>
                        <a href="kunjungan" aria-expanded="false"><i class="fa big-icon fa-calendar icon-wrap"></i> <span class="mini-click-non">Kunjungan</span></a>
                    </li>
                    <li>
                        <a href="datapinjam" aria-expanded="false"><i class="fa big-icon fa-exchange icon-wrap"></i> <span class="mini-click-non">Pinjam Buku</span></a>
                    </li>
                    <li>
                        <a href="datapklskripsi" aria-expanded="false"><i class="fa big-icon fa-book icon-wrap"></i> <span class="mini-click-non">PKL / Skripsi</span></a>
                    </li>
                    <li>
                        <a href="datadonasi" aria-expanded="false"><i class="fa big-icon fa-gift icon-wrap"></i> <span class="mini-click-non">Sumbang Buku</span></a>
                    </li>
                    <li>
                        <a href="" aria-expanded="false" data-toggle="modal" data-target="#WarningModalhdbgc2"><i class="fa big-icon fa-qrcode icon-wrap"></i> <span class="mini-click-non">QR Code Kunjungan<br>CHECK IN/CHECK OUT</span></a>
                    </li>
@endif
@endif
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
 <div id="body">
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">

                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                      <a href="/"><img class="main-logo" src="jewelermaster/img/logo/logon.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
@if(session()->has('name'))
@php
$nama=Session::get('name');
$nip=Session::get('nip');
$jabatan=Session::get('jabatan');
@endphp
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
@if($jabatan=="petugas")
                                            <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-cloud adminpro-cloud-computing-down" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-eraser adminpro-shield" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-line-chart adminpro-analytics-arrow" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li> -->
@endif
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                  <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                  <span class="admin-name">{{ $nama }}</span>
                                                  <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li>
                                                      <a href="logout"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
@endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <!-- <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
@if(session()->has('jabatan'))
@php
$jabatan=Session::get('jabatan');
@endphp
@if($jabatan=='admin')
                                <li>
                                    <a href="datapetugas" aria-expanded="false"><i class="fa big-icon fa-users icon-wrap"></i> <span class="mini-click-non">User Petugas</span></a>
                                </li>
                                <li>
                                    <a href="fakultas" aria-expanded="false"><i class="fa big-icon fa-university icon-wrap"></i> <span class="mini-click-non">Data Fakultas</span></a>
                                </li>
                                <li>
                                    <a href="progdi" aria-expanded="false"><i class="fa big-icon fa-graduation-cap icon-wrap"></i> <span class="mini-click-non">Data Progdi</span></a>
                                </li>
@else
                                <li>
                                  <a href="datapengunjung" aria-expanded="false"><i class="fa big-icon fa-users icon-wrap"></i> <span class="mini-click-non">User Pengunjung</span></a>
                                </li>
@endif
@if($jabatan=="petugas")
                                <li>
                                    <a href="rak" aria-expanded="false"><i class="fa big-icon fa-list-alt icon-wrap"></i> <span class="mini-click-non">Rak Buku</span></a>
                                </li>
                                <li>
                                    <a href="buku" aria-expanded="false"><i class="fa big-icon fa-leanpub icon-wrap"></i> <span class="mini-click-non">Buku</span></a>
                                </li>
                                <li>
                                    <a href="kunjungan" aria-expanded="false"><i class="fa big-icon fa-calendar icon-wrap"></i> <span class="mini-click-non">Kunjungan</span></a>
                                </li>
                                <li>
                                    <a href="datapinjam" aria-expanded="false"><i class="fa big-icon fa-exchange icon-wrap"></i> <span class="mini-click-non">Pinjam Buku</span></a>
                                </li>
                                <li>
                                    <a href="datapklskripsi" aria-expanded="false"><i class="fa big-icon fa-book icon-wrap"></i> <span class="mini-click-non">PKL / Skripsi</span></a>
                                </li>
                                <li>
                                    <a href="datadonasi" aria-expanded="false"><i class="fa big-icon fa-gift icon-wrap"></i> <span class="mini-click-non">Sumbang Buku</span></a>
                                </li>
                                <li>
                                    <a href="" aria-expanded="false" data-toggle="modal" data-target="#WarningModalhdbgc2"><i class="fa big-icon fa-qrcode icon-wrap"></i> <span class="mini-click-non">QR Code Kunjungan</span></a>
                                </li>
@endif
@endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Mobile Menu end -->
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
@yield('content')
