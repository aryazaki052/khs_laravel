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
						<div class="card-title">Data Proker</div>
            <a href="{{ route('proker.create') }}" class="btn btn-primary btn-sm ml-auto">Tambah Proker</a>
					</div>
				</div>
				<div class="card-body">
          @if (session()->has('success'))
          <div class="alert alert-primary">
              {{ session('success') }}
          </div>
      @endif
      
					<div class="table-responsive">
					<table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th>Id</th>
                <th>Nama Proker</th>
                <th>Keterangan</th>
                <th>Gambar Pengurus</th>
                <th width="150px">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($proker as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nama_proker }}</td>
                <td>{{ $row->keterangan_proker }}</td>
                <td><img src="{{ asset('uploads/' .$row->gambar_proker) }}" width="100"></td>
                <td>
                  <a href="{{ route('proker.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                  <form action="{{ route('proker.destroy', $row->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete();">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm">
                      <i class="fa fa-trash"> </i>
                    </button>
                  </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="6" class="text-center">Data Masih Kosong</td>
              </tr>
              @endforelse

            </tbody>
          </table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<script>
  function confirmDelete() {
      return confirm("Apakah Anda yakin akan menghapusnya?");
  }
</script>
@endsection

