@extends('main')

@section('judul')
Buat Tugas
@endsection

@section('content')
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<form action="{{ url('tugas') }}" method="POST">
		{{ csrf_field() }}
			<div class="form-group">
			Judul
			<input type="text" name="judul" class="form-control">
			</div>
			<div class="form-group">
			Deskripsi
			<textarea name="deskripsi" class="form-control"></textarea>
			</div>
			<div class="form-group">
			Status
			<select name="status" class="form-control" selected>
				<option value="0">Belum</option>
				<option value="1">Sudah</option>
			</select>
			</div>
			<input type="submit" class="btn btn-success" value="Simpan">
		</form>
	</div>
</div>
@endsection
