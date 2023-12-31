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
						<div class="card-title">Form Artikel</div>
            <a href="{{ route('artikel.index') }}" class="btn btn-primary btn-sm ml-auto btn-warning">Back</a>
					</div>
				</div>
				<div class="card-body">
          <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="judul">Judul artikel</label>
              <input type="text" name="judul" class="form-control" id="text" placeholder="Masukan Judul">
            </div>
            <div class="form-group">
              <label for="body">body</label>
              <textarea name="body" id="editor" class="form-control" ></textarea>
            </div>
            <div class="form-group">
              <label for="kategori">kategori</label>
              <select name="kategori_id" class="form-control">
                @foreach ($kategori as $row)
                <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                    
                @endforeach
              </select>
            </div>
            <div class="form-group" id="gambarFormGroup">
              <label for="gambar">Gambar Artikel</label>
              <input type="file" name="gambar_artikel" class="form-control">
          </div>
          <div class="form-group" id="dokumenFormGroup">
            <label for="dokumen">Dokumen Pengumuman (doc, docx, pdf)</label>
            <input type="file" name="dokumen" class="form-control" accept=".doc,.docx,.pdf">
        </div>
        
            <div class="form-group">
              <label for="status">Status</label>
              <select name="is_active" class="form-control" >
                <option value="1">Publish</option>
                <option value="0">Draft</option>
              </select>
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
<script>
document.addEventListener('DOMContentLoaded', function() {
    const kategoriSelect = document.querySelector('select[name="kategori_id"]');
    const dokumenFormGroup = document.getElementById('dokumenFormGroup');

    kategoriSelect.addEventListener('change', function() {
        if (this.value === '2') { // Ganti '2' dengan nilai ID kategori yang tepat
            dokumenFormGroup.style.display = 'block';
        } else {
            dokumenFormGroup.style.display = 'none';
        }

        if (this.value === 'Pengumuman') { // Ganti 'Pengumuman' dengan nilai yang sesuai
            dokumenFormGroup.style.display = 'block';
        }
    });
});
  </script>


<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
  ClassicEditor
  .create(document.querySelector('#editor'), {
        alignment: {
            options: ['left', 'right', 'justify'] // Default alignment options
        }
    })
      .catch( error => {
          console.error( error );
      } );
</script>



@endsection

