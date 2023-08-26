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
						<div class="card-title">Data Artikel</div>
            <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-sm ml-auto">Tambah Artikel</a>
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
                <th>Judul Artikel</th>
                <th>Slug</th>
                <th>Kategori</th>
                <th>Author</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($artikel as $row)
              <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->judul }}</td>
                <td>{{ $row->slug }}</td>
                <td>{{ $row->Kategori->nama_kategori }}</td>
                <td>{{ $row->users->name }}</td>
                <td>
                  <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i></a>
                  <form action="{{ route('kategori.destroy', $row->id) }}" method="POST" class="d-inline">
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
@endsection

