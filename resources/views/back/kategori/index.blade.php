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
						<div class="card-title">Data Kategori</div>
            <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm ml-auto">Tambah Kategori</a>
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
              <tr>
                <th>Id</th>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($kategori as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nama_kategori }}</td>
                <td>{{ $row->slug }}</td>
                <td>
                  <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                  <!-- Tombol Trash -->
              <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal">
                <i class="fa fa-trash"></i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('kategori.destroy', $row->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <label for="password">Enter your password:</label>
                                <input type="password" name="password" id="password" required>
                                <button type="submit" class="btn btn-danger btn-sm">Confirm Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>

                </td>
              </tr>
              @empty
              <tr>
                <td>Data Masih Kosong</td>
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

