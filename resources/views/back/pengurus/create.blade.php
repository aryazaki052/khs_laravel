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
						<div class="card-title">Form Kepengurusan</div>
            <a href="{{ route('pengurus.index') }}" class="btn btn-primary btn-sm ml-auto btn-warning">Back</a>
					</div>
				</div>
				<div class="card-body">
          <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama">Nama Pengurus</label>
              <input type="text" name="nama_pengurus" class="form-control" id="text" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" name="jabatan" class="form-control" id="text" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
              <label for="gambar">Gambar Pengurus (*ukuran 1080px x 608px)</label>
              <input type="file" name="gambar_pengurus" class="form-control" ></input>
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

