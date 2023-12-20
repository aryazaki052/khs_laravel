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
                <th>Saran</th>
                <th>Waktu Upload</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($sarans as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->isi_saran }}</td>
                <td>{{ \Carbon\Carbon::parse($row->tanggal_upload)->format('d/m/Y') }}</td>
                
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

