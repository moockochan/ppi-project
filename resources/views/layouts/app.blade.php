<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>InfyOm Generator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="{{ asset('/vendor/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/simplePagination.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/style.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>InfyOm</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">
                                      @if (Auth::guest())
                                        InfyOm
                                    @else
                                    {!! Auth::user()->name !!}
                                    @endif
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        @if (Auth::guest())
                                            InfyOm
                                        @else
                                            {!! Auth::user()->name !!}
                                        @endif
                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    InfyOm Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{!! url('/login') !!}">Login</a></li>
                        <li><a href="{!! url('/register') !!}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 2.1.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/js/app.min.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('/vendor/jquery-ui.js') }}"></script>

    @yield('scripts')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script language="javascript">
      $(document).ready(function(){
        $.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	      });
        $(".select2").select2();
        $(".myTgl").datepicker();
        $("#tbPasienBedah").DataTable();
      });
      $("#add_row_antibiotik").click(function() {
        /*$("#gridAntibiotik").append('<tr><td>{!! Form::select("kd_obat[]",DB::table("tbl_master_obat")->lists("nmobat","kdobat"),null,["class"=>"form-control select2 kd_obat"]) !!}</td>'+
                                    '<td>{!! Form::text("tgl_awal[]",null,["class"=>"form-control myTgl"]) !!}</td>'+
                                    '<td>{!! Form::text("tgl_akhir[]",null,["class"=>"form-control myTgl"]) !!}</td>'+
                                    '<td>{!! Form::text("dosis[]",null,["class"=>"form-control"]) !!}</td>'+
                                    '<td>{!! Form::select("is_po_iv_im[]",["Ya"=>"Ya","Tidak"=>"Tidak"],null,["class"=>"form-control"]) !!}</td>'+
                                    '<td>{!! Form::select("is_pengobatan[]",["Ya"=>"Ya","Tidak"=>"Tidak"],null,["class"=>"form-control"]) !!}</td>'+
                                    '<td>{!! Form::select("is_profilaksis[]",["Ya"=>"Ya","Tidak"=>"Tidak"],null,["class"=>"form-control"]) !!}</td>'+
                                    '</tr>'
        );*/
        var $selector = $('<tr><td width="30%">{!! Form::select("kd_obat[]",DB::table("tbl_master_obat")->lists("nmobat","kdobat"),null,["class"=>"form-control select2 kd_obat"]) !!}</td>'+
                                    '<td>{!! Form::text("tgl_awal[]",null,["class"=>"form-control myTgl tgl_awal"]) !!}</td>'+
                                    '<td>{!! Form::text("tgl_akhir[]",null,["class"=>"form-control myTgl tgl_akhir"]) !!}</td>'+
                                    '<td>{!! Form::text("dosis[]",null,["class"=>"form-control dosis"]) !!}</td>'+
                                    '<td>{!! Form::select("is_po_iv_im[]",["Ya"=>"Ya","Tidak"=>"Tidak"],null,["class"=>"form-control is_po_iv_im"]) !!}</td>'+
                                    '<td>{!! Form::select("is_pengobatan[]",["Ya"=>"Ya","Tidak"=>"Tidak"],null,["class"=>"form-control is_pengobatan"]) !!}</td>'+
                                    '<td>{!! Form::select("is_profilaksis[]",["Ya"=>"Ya","Tidak"=>"Tidak"],null,["class"=>"form-control is_profilaksis"]) !!}</td>'+
                                    '</tr>'
        ).appendTo("#gridAntibiotik");
        $(".select2").select2();
        $(".myTgl").datepicker();
      });
      $("#show_add_observasi").click(function(){
        //$("#testappend").append('tessting');
        $("#hasiPencarianPasien").html("");
      });
      //control buttons
      $("#cariPasienBedah").click(function(){
        //alert();
        cari_pasien_bedah($("#cari_nama").val(),$("#cari_id_pasien").val(),$("#cari_id_registrasi").val(),$("#cari_tgl_registrasi").val());
      });

      $("#ilorj_cari_pasien_bedah").click(function(){
        $.ajax({
          type: "POST",
          url: "/ilorj/cari-pasien-bedah",
          data: {nm_pasien:$("#cari_nama").val(),id_pasien:$("#cari_id_pasien").val(),id_registrasi:$("#cari_id_registrasi").val(),tgl_registrasi:$("#cari_tgl_registrasi").val()}
        }).done(function(msg){
          console.log(msg);
          $("#hasiPencarianPasien").html(msg);
        });
      });

      $("#hasiPencarianPasien").on('click','.data_pasien_add',function(){
        $.ajax({
          type: "POST",
          url: "/ilori/add-observe",
          data: {no_transaksi: $(this).attr('no_transaksi'),id_registrasi: $(this).attr('id_registrasi')}
        }).done(function(msg){
          console.log(msg);
          alert(msg[0].pesan);
          location.reload();
        });
        $("#add_observasi").modal('hide');
      });


      $("#cariDataIloRi").click(function(){

        $.ajax({
          type: 'POST',
          url: '/ilori/cari-data-observe',
          data: {id_pasien: $("#ilori_cari_id_pasien").val(),id_registrasi: $("#ilori_cari_id_registrasi").val(),tgl_registrasi: $("#ilori_cari_tgl_registrasi").val(),tgl_transaksi: $("#ilori_cari_tgl_obs").val()}
        }).done(function(msg){
          console.log(msg);
          $("#tbDataIloRI").html(msg);
          table = $("#tb-ilo-ri-observe").DataTable();
          table.draw();
        });

      });

      /*$("#simpan-ilori").click(function(){
        var xkd_obat= $(".kd_obat").map(function() { return $(this).val(); }).get();
        var xtgl_awal= $(".tgl_awal").map(function() { return date("Y-m-d",strtotime($(this).val())); }).get();
        var xtgl_akhir= $(".tgl_akhir").map(function() { return date("Y-m-d",strtotime($(this).val())); }).get();
        var xdosis= $(".dosis").map(function() { return $(this).val(); }).get();
        var xis_po_iv_im= $(".is_po_iv_im").map(function() { return $(this).val(); }).get();
        var xis_pengobatan= $(".is_pengobatan").map(function() { return $(this).val(); }).get();
        var xis_profilaksis= $(".is_profilaksis").map(function() { return $(this).val(); }).get();
        alert(xkd_obat);
        $.ajax({
          type: "POST",
          url: "/ilori/add-antibiotik",
          data: {no_transaksi: $("#no_transaksi").val(),kd_obat:xkd_obat,tgl_awal:xtgl_awal,tgl_akhir:xtgl_akhir,dosis:xdosis,is_po_iv_im:xis_po_iv_im,is_pengobatan:xis_pengobatan,is_profilaksis:xis_profilaksis}
        }).done(function(msg){
          console.log(msg[0].pesan);
          alert(msg[0].pesan);
        });
      });*/
      // cari pasien bedah
      function cari_pasien_bedah(nm_pasien,id_pasien,id_registrasi,tgl_daftar){
        $.ajax({
          type: 'POST',
          url: '/ilori/cari-pasien-bedah',
          data: {nm_pasien,id_pasien,id_registrasi,tgl_daftar}
        }).done(function(msg) {
          console.log(msg);
          $("#hasiPencarianPasien").html(msg);
        });
      }

      //ILO RJ
      $("#hasiPencarianPasien").on('click','.ilorj_data_pasien_add',function(){
        $.ajax({
          type: "POST",
          url: "/ilorj/add-observe",
          data: {no_transaksi: $(this).attr('no_transaksi'),id_registrasi: $(this).attr('id_registrasi')}
        }).done(function(msg){
          console.log(msg);
          alert(msg[0].pesan);
          location.reload();
        });
        $("#add_observasi").modal('hide');
      });

      $("#cariDataIloRj").click(function(){

        $.ajax({
          type: 'POST',
          url: '/ilorj/cari-data-observe',
          data: {id_pasien: $("#ilorj_cari_id_pasien").val(),id_registrasi: $("#ilorj_cari_id_registrasi").val(),tgl_registrasi: $("#ilorj_cari_tgl_registrasi").val(),tgl_transaksi: $("#ilorj_cari_tgl_obs").val()}
        }).done(function(msg){
          console.log(msg);
          $("#tbDataIloRJ").html(msg);
          table = $("#tb-ilo-rj-observe").DataTable();
          table.draw();
        });

      });
    </script>

</body>
</html>
