<!DOCTYPE html>
<html lang="en" ng-app="iot">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Internet of Things</title>
	<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<style type="text/css">
		.navbar-default {
			background-color: #4B0082;
		}
		.btn-custom { 
			color: #4B0082; 
			background-color: #FFFF00; 
			border-color: #FFFFFF; 
		}
		.font-color{
			color: #4B0082;
		}
		.th-color{
			color: #FFFFFF;
			background-color: #4B0082;
		}
	</style>
</head>
<body ng-controller="MyController">
	<nav class="navbar navbar-default navbar navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><font color="yellow"><span class="glyphicon glyphicon-education"></span></font></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
				<ul class="nav navbar-nav">
					<li><a href="#"><font color="white">Internet of Things</font></a></li>
					<!--
					<li ng-click="getSpp()"><a href="#"><font color="white">SPP</font></a></li>
					<li ng-click="getNilai()"><a href="#"><font color="white">Nilai</font></a></li>
					<li ng-click="getIp()"><a href="#"><font color="white">IP</font></a></li>
					<li ng-click="getIpk()"><a href="#"><font color="white">IPK</font></a></li>

-->
				</ul>
<!--
				<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" ng-model="nim" class="form-control" placeholder="NIM">
							<input type="text" ng-model="ta" class="form-control" placeholder="tahun ajar">
						</div>
						<button type="submit" class="btn btn-default btn-custom" ng-click="getOn()"><span class="glyphicon glyphicon-filter"></span></button>
					</form>  
				</ul>
-->
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

<div align="center">
	<div class="jumbotron">
		<div class="container">
			<br>
			<br>
			<h1>Status Lampu : Nyala / Mati</h1>
			<button type="submit" class="btn btn-primary">ON</button> || 
			<button type="submit" class="btn btn-danger">OFF</button>
		</div>

	</div>
</div>





















	<!--
	<div class="jumbotron">
		<div class="container">
			<br>
			<br>
			<h1>Hi.. @{{mahasiswa.nama}}</h1>
		</div>

	</div>
	
	<div class="container">
		<div ng-show="halaman == 'profil'">
			<h1 align="center" class="font-color">Profil Mahasiswa</h1>
			<table class="table table-hover">
				<tr>
					<td>Nama</td>
					<td>@{{mahasiswa.nama}}</td>
				</tr>
				<tr>
					<td>Nim</td>
					<td>@{{mahasiswa.NIM}}</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>@{{mahasiswa.alamat}}</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>@{{mahasiswa.jns_kelamin}}</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>@{{mahasiswa.kode_agama}}</td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td>@{{mahasiswa.no_hp}}</td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>@{{mahasiswa.tgl_lahir}}</td>
				</tr>
				<tr>
					<td>Nama Wali</td>
					<td>@{{mahasiswa.nama_wali}}</td>
				</tr>
				<tr>
					<td>Telp Wali</td>
					<td>@{{mahasiswa.tlp_wali}}</td>
				</tr>
				<tr>
					<td>Foto</td>
					<td>@{{mahasiswa.foto}}</td>
					<img style="-webkit-user-select: none" src="">
				</tr>
			</table>
		</div>
	</div>

	<div ng-show="halaman == 'spp'">
		<div class="container">
		<h1 align="center" class="font-color">Status Pembayaran</h1>
		<br>
		<br>
		
		<div ng-show="mahasiswa.status_bayar == 1"><h1 align="center" class="font-color">SUDAH BAYAR</h1></div>
		<div ng-show="mahasiswa.status_bayar == 0"><h1 align="center" class="font-color">BELUM BAYAR</h1></div>
		</div>
	</div>

	<div ng-show="halaman == 'nilai'">
	<div class="container">
		<h1 align="center" class="font-color">Nilai Mahasiswa</h1>
		<table class="table table-hover">
			<tr>
				<th class="th-color">Mata Kuliah</th>
				<th class="th-color">Nilai</th>
			</tr>
			<tr ng-repeat="a in mahasiswa_nilai.creditsPerSubject">
				<td>@{{a.nama_mk}}</td>
				<td>@{{a.nilai_indeks}}</td>
			</tr>
		</table>	
	</div>
	</div>

	<div ng-show="halaman == 'ip'">
		<div class="container">
		<h1 align="center" class="font-color">Indeks Prestasi Mahasiswa</h1>
		<br>
		<br>
		<h1 align="center" class="font-color">@{{ip}}</h1>

	</div>
	</div>

	<div ng-show="halaman == 'ipk'">
	<div class="container">
		<h1 align="center" class="font-color">Indeks Prestasi Komulatif</h1>
		<br>
		<br>
		<h1 align="center" class="font-color">@{{mahasiswa_ipk.creditSum.ipk}}</h1>

	</div>
	</div>
-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{ asset('jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('angular/angular.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('app.js') }}"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>