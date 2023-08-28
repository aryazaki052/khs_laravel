@extends('layouts.default')
@section('content')
<div>
  <!-- jQuery (jika digunakan) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Bootstrap Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</div>

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
						<div class="card-title">Data Artikel</div>
            <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-sm ml-auto">Tambah Artikel</a>
					</div>
          <div class="dropdown">
            <button id="filterDropdown" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-id="0">
                Filter Kategori
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('artikel.index') }}">Semua Artikel</a></li>
                <li><a class="dropdown-item" href="{{ route('artikel.index', ['kategori_id' => 3]) }}" data-id="3">Berita</a></li>
                <li><a class="dropdown-item" href="{{ route('artikel.index', ['kategori_id' => 2]) }}" data-id="2">Pengumuman</a></li>
            </ul>
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
                      <th>Judul Artikel</th>
                      <th>Kategori</th>
                      <th>Gambar</th>
                      <th>File Dokumen</th> <!-- Tambahkan kolom ini -->
                      <th>Author</th>
                      <th width="150px">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($artikel as $row)
                  <tr>
                      <td>{{ $row->judul }}</td>
                      
                      <td>{{ $row->Kategori->nama_kategori }}</td>
                      <td><img src="{{ asset('uploads/' .$row->gambar_artikel) }}" width="100"></td>
                      <td>
                          @if ($row->kategori_id == 2) <!-- Cek apakah kategori adalah Pengumuman -->
                              <a href="{{ asset('uploads/' . $row->file_dokumen) }}" target="_blank">Lihat Dokumen</a>
                          @else
                              -
                          @endif
                      </td>
                      <td>{{ $row->users->name }}</td>
                      <td>
                        <a href="{{ route('artikel.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                        <form action="{{ route('artikel.destroy', $row->id) }}" method="POST" class="d-inline">
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
                      <td colspan="7" class="text-center">Data Masih Kosong</td>
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


@endsection
