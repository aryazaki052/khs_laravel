@extends('layouts.default')
@section('content')
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Edit Pengurus</div>
            <a href="{{ route('proker.index') }}" class="btn btn-primary btn-sm ml-auto btn-warning">Back</a>
					</div>
				</div>
				<div class="card-body">
          <form  method="post" action="{{ route('proker.update', $proker->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="judul_slide">Nama Proker</label>
              <input type="text" name="nama_proker" class="form-control" id="text" value="{{ $proker->nama_proker }}">
            </div>
            <div class="form-group">
              <label for="judul_slide">Keterangan</label>
              <input type="text" name="keterangan_proker" class="form-control" id="text" value="{{ $proker->keterangan_proker }}">
            </div>
            <div class="form-group">
              <label for="gambar">Gambar Pengurus</label>
              <input type="file" name="gambar_proker" class="form-control" ></input>
              <br>
              <label for="gambar">Gambar Saat Ini</label> <br>
              <img src="{{ asset('uploads/' .$proker->gambar_proker) }}" width="30%">
            </div>

            <div class="form-group">
              <button class="btn btn-primary btn-sm" type="submit">Save</button>
              <button class="btn btn-danger btn-sm" type="reset">Reset</button>
            </div>
          </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

